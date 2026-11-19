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

        for ($i = 1; $i <= 7; $i++) {
            $images[] = $this->image('hero', "main_slider_{$i}.jpeg", "صورة السلايدر الرئيسي {$i}", 'مؤسسة نور البخاري - عمل ميداني', $i * 10);
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

        foreach ($images as $image) {
            $this->persistImage($image);
        }
    }

    /** @return array{group:string,source:string,path:string,title:string,alt_text:string,sort_order:int,is_active:bool} */
    private function image(string $group, string $filename, string $title, string $altText, int $sortOrder): array
    {
        return [
            'group' => $group,
            'source' => public_path('assets/images/clinic/'.$filename),
            'path' => "site-images/{$group}/{$filename}",
            'title' => $title,
            'alt_text' => $altText,
            'sort_order' => $sortOrder,
            'is_active' => true,
        ];
    }

    /** @param array{group:string,source:string,path:string,title:string,alt_text:string,sort_order:int,is_active:bool} $image */
    private function persistImage(array $image): void
    {
        if (! File::isFile($image['source'])) {
            throw new RuntimeException("Missing source image: {$image['source']}");
        }

        if (! Storage::disk('public')->exists($image['path'])) {
            Storage::disk('public')->put($image['path'], File::get($image['source']));
        }

        unset($image['source']);

        SiteImage::query()->firstOrCreate(
            ['group' => $image['group'], 'path' => $image['path']],
            $image,
        );
    }
}
