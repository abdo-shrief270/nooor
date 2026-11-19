<?php

namespace App\Services;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Schema;

class SiteContentService
{
    public const DEFAULTS = [
        'site_name' => 'مؤسسة نور البخاري',
        'site_tagline' => 'الخير لا يعرف حدود',
        'hero_title' => 'الخير لا يعرف حدود',
        'hero_subtitle' => 'معاً نصنع أثراً في حياة المحتاجين في غزة والسودان ومصر.',
        'phone_number' => '+201055201766',
        'whatsapp_number' => '201055201766',
        'email' => 'Nourelbokhart.eg@gmail.com',
        'address' => 'التجمع الخامس – فاليو مول 2، القاهرة',
        'donation_title' => 'طرق التبرع',
        'donation_subtitle' => 'اختر وسيلة الدفع المناسبة لإتمام التبرع بسهولة وأمان',
        'donation_notice' => 'بعد التحويل، يرجى إرسال إيصال التحويل إلينا عبر واتساب للتأكيد.',
        'facebook_url' => 'https://share.google/SdSzquhRAD7qeHS8N',
        'instagram_url' => 'https://www.instagram.com/nourelbukhari',
        'youtube_url' => 'https://youtube.com/@nourelbukhari',
        'tiktok_url' => 'https://www.tiktok.com/@nooralbukhari8',
        'hero_water_connections' => '1000',
        'hero_tents' => '15000',
        'hero_meals' => '700000',
        'hero_restored_tents' => '800',
        'stat_meals' => '730000',
        'stat_water' => '5475000',
        'stat_food_boxes' => '60000',
        'stat_flour' => '1350000',
        'stat_blankets' => '30000',
        'stat_tents' => '3500',
        'stat_convoys' => '798',
    ];

    public function all(): array
    {
        $empty = array_fill_keys(array_keys(self::DEFAULTS), '');

        if (! Schema::hasTable('site_settings')) {
            return $empty;
        }

        return array_replace($empty, SiteSetting::query()->pluck('value', 'key')->all());
    }

    public function update(array $settings): void
    {
        foreach (array_intersect_key($settings, self::DEFAULTS) as $key => $value) {
            SiteSetting::query()->updateOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
