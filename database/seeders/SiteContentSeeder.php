<?php

namespace Database\Seeders;

use App\Models\DonationMethod;
use App\Models\SiteImage;
use App\Models\SiteSetting;
use App\Services\SiteContentService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use RuntimeException;

class SiteContentSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedSettings();
        $this->seedDonationMethods();
        $this->seedImages();
    }

    private function seedSettings(): void
    {
        foreach (SiteContentService::DEFAULTS as $key => $value) {
            SiteSetting::query()->firstOrCreate(['key' => $key], ['value' => $value]);
        }
    }

    private function seedDonationMethods(): void
    {
        $methods = [
            [
                'name' => 'حساب InstaPay',
                'type' => 'instapay',
                'identifier' => 'noor...albokhre@instapay',
                'description' => 'انسخ المعرّف واستخدمه في تطبيق InstaPay.',
                'action_url' => 'https://ipn.eg/S/noor...albokhre/instapay/9P4iwx',
                'sort_order' => 10,
                'is_active' => true,
            ],
            [
                'name' => 'Etisalat Cash',
                'type' => 'etisalat',
                'identifier' => '01151580439',
                'description' => 'انسخ الرقم واستخدمه في تطبيق اتصالات كاش.',
                'action_url' => 'https://app.etisalat.eg/?appScreens=cash&appScreen=cash&extra=screenId:send_money;dial:01151580439',
                'sort_order' => 20,
                'is_active' => true,
            ],
            [
                'name' => 'Vodafone Cash',
                'type' => 'vodafone',
                'identifier' => '01055201766',
                'description' => 'انسخ الرقم واستخدمه في تطبيق فودافون كاش.',
                'action_url' => 'https://vf.eg/vfcash?id=mt&qrId=76r1GS',
                'sort_order' => 30,
                'is_active' => true,
            ],
        ];

        foreach ($methods as $method) {
            DonationMethod::query()->firstOrCreate(['name' => $method['name']], $method);
        }
    }

    private function seedImages(): void
    {
        $images = [];
        $mainDirectory = public_path('assets/images/main');
        $mainImages = File::isDirectory($mainDirectory)
            ? array_values(array_filter(
                File::files($mainDirectory),
                fn (\SplFileInfo $file): bool => in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png', 'webp'], true),
            ))
            : [];

        usort($mainImages, fn (\SplFileInfo $first, \SplFileInfo $second): int => strnatcasecmp($first->getFilename(), $second->getFilename()));

        if (count($mainImages) !== 5) {
            throw new RuntimeException('The main slider requires exactly five images in public/assets/images/main.');
        }

        $sliderCounters = [
            ['title' => 'وقف النخيل', 'goal' => 3000, 'completed' => 1500, 'unit' => 'نخلة'],
            ['title' => 'تجهيز الخيام داخل غزة', 'goal' => 3000, 'completed' => 1500, 'unit' => 'خيمة'],
            ['title' => 'الإطعام في السودان', 'goal' => 6000, 'completed' => 3000, 'unit' => 'شخص'],
            ['title' => 'الإطعام داخل غزة', 'goal' => 20000, 'completed' => 10000, 'unit' => 'شخص'],
            ['title' => 'كراتين المواد الغذائية داخل مصر', 'goal' => 2500, 'completed' => 1250, 'unit' => 'كرتونة'],
        ];

        foreach ($mainImages as $index => $file) {
            $images[] = $this->image(
                group: 'hero',
                filename: $file->getFilename(),
                title: 'صورة السلايدر الرئيسي '.($index + 1),
                altText: 'مؤسسة نور البخاري - عمل ميداني',
                sortOrder: ($index + 1) * 10,
                sourceDirectory: 'main',
                counter: [...$sliderCounters[$index], 'button' => 'تبرع الآن'],
            );
        }

        for ($i = 1; $i <= 5; $i++) {
            $images[] = $this->image('mini_slider', "slider_{$i}.png", "صورة السلايدر المصغر {$i}", 'مؤسسة نور البخاري - لقطات ميدانية', $i * 10);
        }

        $images = [...$images,
            $this->image('projects', '19.JPG', 'مشروع العمر - وقف النخيل', 'مشروع العمر - وقف النخيل', 10),
            $this->image('projects', '11.JPG', 'تجهيز القوافل الإغاثية', 'تجهيز القوافل الإغاثية', 20),
            $this->image('projects', '12.JPG', 'سقيا الماء يومياً', 'سقيا الماء يومياً', 30),
            $this->image('projects', '13.JPG', 'تكيات الإطعام', 'تكيات الإطعام', 40),
            $this->image('projects', '14.JPG', 'الطرود الغذائية', 'الطرود الغذائية', 50),
            $this->image('documentation', '15.JPG', 'تجهيز القافلة', 'تجهيز القافلة', 10),
            $this->image('documentation', '16.JPG', 'التحميل والإعداد', 'التحميل والإعداد', 20),
            $this->image('documentation', '17.JPG', 'التوزيع الميداني', 'التوزيع الميداني', 30),
            $this->image('documentation', '18.JPG', 'وصول المساعدة', 'وصول المساعدة', 40),
            $this->image('about', '12.JPG', 'غلاف صفحة من نحن', 'مؤسسة نور البخاري', 10),
            $this->image('about', '15.JPG', 'جهودنا الميدانية', 'جهودنا الميدانية', 20),
        ];

        for ($i = 11; $i <= 30; $i++) {
            $images[] = $this->image('gallery', "{$i}.JPG", "توثيق ميداني {$i}", 'نور البخاري - توثيق ميداني', ($i - 10) * 10);
        }

        SiteImage::query()->where('group', 'hero')->update(['is_active' => false]);

        foreach ($images as $image) {
            $this->persistImage($image, $image['group'] === 'hero');
        }
    }

    /**
     * @param array{title:string,goal:int,completed:int,unit:string,button:string}|null $counter
     * @return array{group:string,source:string,path:string,title:string,alt_text:string,sort_order:int,is_active:bool,counter_enabled:bool,counter_title:?string,counter_goal:?int,counter_completed:?int,counter_unit:?string,counter_button:?string}
     */
    private function image(
        string $group,
        string $filename,
        string $title,
        string $altText,
        int $sortOrder,
        string $sourceDirectory = 'clinic',
        ?array $counter = null,
    ): array
    {
        return [
            'group' => $group,
            'source' => public_path("assets/images/{$sourceDirectory}/{$filename}"),
            'path' => "site-images/{$group}/{$filename}",
            'title' => $title,
            'alt_text' => $altText,
            'sort_order' => $sortOrder,
            'is_active' => true,
            'counter_enabled' => $counter !== null,
            'counter_title' => $counter['title'] ?? null,
            'counter_goal' => $counter['goal'] ?? null,
            'counter_completed' => $counter['completed'] ?? null,
            'counter_unit' => $counter['unit'] ?? null,
            'counter_button' => $counter['button'] ?? null,
        ];
    }

    /** @param array{group:string,source:string,path:string,title:string,alt_text:string,sort_order:int,is_active:bool,counter_enabled:bool,counter_title:?string,counter_goal:?int,counter_completed:?int,counter_unit:?string,counter_button:?string} $image */
    private function persistImage(array $image, bool $replaceExisting = false): void
    {
        if (! File::isFile($image['source'])) {
            throw new RuntimeException("Missing source image: {$image['source']}");
        }

        if (! Storage::disk('public')->exists($image['path'])) {
            Storage::disk('public')->put($image['path'], File::get($image['source']));
        }

        unset($image['source']);

        $identity = ['group' => $image['group'], 'path' => $image['path']];

        if ($replaceExisting) {
            SiteImage::query()->updateOrCreate($identity, $image);
            return;
        }

        SiteImage::query()->firstOrCreate($identity, $image);
    }
}
