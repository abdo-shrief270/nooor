<?php

namespace Tests\Feature;

use App\Models\DonationMethod;
use App\Models\SiteImage;
use App\Models\SiteSetting;
use App\Models\User;
use App\Services\SiteContentService;
use Database\Seeders\SiteContentSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminDashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_are_redirected_to_admin_login(): void
    {
        $this->get('/admin')->assertRedirect('/admin/login');
    }

    public function test_public_site_shell_has_no_managed_content_before_seeding(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('id="navbar"', false)
            ->assertDontSee('01055201766')
            ->assertDontSee('01151580439')
            ->assertDontSee('/storage/site-images/');
    }

    public function test_non_admin_users_cannot_access_dashboard(): void
    {
        $this->actingAs(User::factory()->create())->get('/admin')->assertForbidden();
    }

    public function test_admin_can_update_public_site_settings(): void
    {
        $admin = User::factory()->create(['is_admin' => true]);

        $this->actingAs($admin)->put('/admin/settings', [
            'settings' => ['phone_number' => '+201234567890', 'hero_title' => 'عنوان جديد'],
        ])->assertSessionHasNoErrors();

        $this->assertDatabaseHas('site_settings', ['key' => 'phone_number', 'value' => '+201234567890']);
        $this->get('/')->assertOk()->assertSee('+201234567890')->assertSee('عنوان جديد');
    }

    public function test_admin_can_manage_donation_methods(): void
    {
        $admin = User::factory()->create(['is_admin' => true]);

        $this->actingAs($admin)->post('/admin/donations', [
            'name' => 'Vodafone Cash', 'type' => 'vodafone', 'identifier' => '01000000000',
            'description' => 'محفظة التبرعات', 'action_url' => 'https://example.com/pay', 'sort_order' => 1, 'is_active' => 1,
        ])->assertSessionHasNoErrors();

        $this->assertDatabaseHas('donation_methods', ['identifier' => '01000000000', 'is_active' => true]);
        $this->get('/')->assertSee('01000000000');
    }

    public function test_admin_can_upload_and_hide_site_images(): void
    {
        Storage::fake('public');
        $admin = User::factory()->create(['is_admin' => true]);

        $this->actingAs($admin)->post('/admin/images', [
            'image' => UploadedFile::fake()->image('hero.jpg', 1200, 800), 'group' => 'hero',
            'title' => 'صورة الواجهة', 'alt_text' => 'عمل ميداني', 'sort_order' => 2, 'is_active' => 1,
            'counter_enabled' => 1, 'counter_title' => 'حملة تجريبية', 'counter_goal' => 100,
            'counter_completed' => 50, 'counter_unit' => 'وحدة', 'counter_button' => 'تبرع الآن',
        ])->assertSessionHasNoErrors();

        $image = SiteImage::query()->firstOrFail();
        Storage::disk('public')->assertExists($image->path);
        $this->actingAs($admin)->put('/admin/images/'.$image->id, [
            'title' => $image->title, 'alt_text' => $image->alt_text, 'sort_order' => 2,
            'counter_enabled' => 1, 'counter_title' => 'حملة محدثة', 'counter_goal' => 500,
            'counter_completed' => 200, 'counter_unit' => 'وحدة', 'counter_button' => 'ساهم الآن',
        ])->assertSessionHasNoErrors();
        $image->refresh();
        $this->assertFalse($image->is_active);
        $this->assertTrue($image->counter_enabled);
        $this->assertSame(500, $image->counter_goal);
        $this->assertSame(200, $image->counter_completed);
        $this->assertSame(40.0, $image->counterData()['percentage']);
    }

    public function test_site_content_seeder_backfills_current_content_idempotently(): void
    {
        Storage::fake('public');

        $this->seed(SiteContentSeeder::class);
        $this->seed(SiteContentSeeder::class);

        $this->assertSame(count(SiteContentService::DEFAULTS), SiteSetting::query()->count());
        $this->assertSame(3, DonationMethod::query()->count());
        $this->assertSame(41, SiteImage::query()->count());
        $this->assertSame(5, SiteImage::query()->where('group', 'hero')->where('is_active', true)->count());
        SiteImage::query()->where('group', 'hero')->get()->each(
            fn (SiteImage $image) => $this->assertSame(50.0, $image->counterData()['percentage'])
        );
        Storage::disk('public')->assertExists('site-images/hero/1.jpeg');
        Storage::disk('public')->assertExists('site-images/hero/5.jpeg');
        Storage::disk('public')->assertExists('site-images/gallery/30.JPG');
        $response = $this->get('/')
            ->assertOk()
            ->assertSee('مؤسسة نور البخاري')
            ->assertSee('01055201766')
            ->assertSee('data-countdown-to="1847"', false)
            ->assertSee('data-countdown-to="1500"', false)
            ->assertSee('50.0%')
            ->assertSee('تم وقف 1,153')
            ->assertSee('38.4%')
            ->assertSee('hero-campaign-overlay')
            ->assertSee('hero-slider-pagination');

        $this->assertSame(5, substr_count($response->getContent(), 'class="hero-campaign-overlay"'));

        $admin = User::factory()->create(['is_admin' => true]);
        $imagesPage = $this->actingAs($admin)->get('/admin/images')->assertOk()->getContent();
        $heroSection = '<h2 style="font-size:1.2rem">السلايدر الرئيسي</h2>';
        $miniSliderSection = '<h2 style="font-size:1.2rem">السلايدر الصغير</h2>';
        $this->assertLessThan(strpos($imagesPage, $miniSliderSection), strpos($imagesPage, $heroSection));
        $this->assertSame(5, substr_count($imagesPage, '<summary>تعديل الصورة والعداد</summary>'));
        $this->assertSame(36, substr_count($imagesPage, '<summary>تعديل الصورة</summary>'));

        SiteSetting::query()->where('key', 'campaign_convoys_goal')->update(['value' => '1000']);
        SiteSetting::query()->where('key', 'campaign_convoys_completed')->update(['value' => '250']);

        $this->get('/')
            ->assertOk()
            ->assertSee('تجهيز القوافل الإغاثية')
            ->assertSee('data-countdown-to="750"', false)
            ->assertSee('تم إنجاز 250')
            ->assertSee('25.0%');
    }
}
