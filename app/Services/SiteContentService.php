<?php

namespace App\Services;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Schema;

class SiteContentService
{
    public const ACTIVITY_CAMPAIGNS = [
        'convoys' => ['label' => 'تجهيز القوافل الإغاثية', 'icon' => 'fa-truck-moving'],
        'water' => ['label' => 'سقيا الماء يومياً', 'icon' => 'fa-droplet'],
        'meals' => ['label' => 'تكيات الإطعام', 'icon' => 'fa-utensils'],
        'food_boxes' => ['label' => 'الطرود الغذائية', 'icon' => 'fa-box'],
    ];

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
        'palm_campaign_status' => 'الحملة مستمرة',
        'palm_campaign_title' => 'مشروع العمر (وقف النخيل)',
        'palm_campaign_description' => 'ساهم في غرس نخلة كصدقة جارية لك أو لمن تحب، بهدف الوصول إلى 3000 نخلة.',
        'palm_campaign_goal' => '3000',
        'palm_campaign_completed' => '1153',
        'palm_campaign_unit' => 'نخلة',
        'palm_campaign_button' => 'تبرع الآن',
        'campaign_convoys_status' => 'الحملة مستمرة',
        'campaign_convoys_title' => 'تجهيز القوافل الإغاثية',
        'campaign_convoys_description' => 'تجهيز قوافل شاملة للمواد الغذائية، الخيام، البطانيات، والاحتياجات الأساسية.',
        'campaign_convoys_goal' => '0',
        'campaign_convoys_completed' => '0',
        'campaign_convoys_unit' => 'قافلة',
        'campaign_convoys_button' => 'تبرع الآن',
        'campaign_water_status' => 'الحملة مستمرة',
        'campaign_water_title' => 'سقيا الماء يومياً',
        'campaign_water_description' => 'مياه عذبة ونقية تصل إلى المستحقين يومياً في مختلف المناطق المتضررة.',
        'campaign_water_goal' => '0',
        'campaign_water_completed' => '0',
        'campaign_water_unit' => 'وصلة مياه',
        'campaign_water_button' => 'تبرع الآن',
        'campaign_meals_status' => 'الحملة مستمرة',
        'campaign_meals_title' => 'تكيات الإطعام',
        'campaign_meals_description' => 'إعداد وتوزيع الوجبات الساخنة يومياً للأسر النازحة والمتضررة.',
        'campaign_meals_goal' => '0',
        'campaign_meals_completed' => '0',
        'campaign_meals_unit' => 'وجبة',
        'campaign_meals_button' => 'تبرع الآن',
        'campaign_food_boxes_status' => 'الحملة مستمرة',
        'campaign_food_boxes_title' => 'الطرود الغذائية',
        'campaign_food_boxes_description' => 'توزيع طرود غذائية متكاملة تسد احتياجات الأسر لفترات مستدامة.',
        'campaign_food_boxes_goal' => '0',
        'campaign_food_boxes_completed' => '0',
        'campaign_food_boxes_unit' => 'طرد غذائي',
        'campaign_food_boxes_button' => 'تبرع الآن',
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

    /** @return array{goal:int,completed:int,remaining:int,percentage:float} */
    public function palmCampaign(array $settings): array
    {
        return $this->progress(
            goal: (int) ($settings['palm_campaign_goal'] ?? 0),
            completed: (int) ($settings['palm_campaign_completed'] ?? 0),
        );
    }

    /** @return array<string, array{key:string,label:string,icon:string,status:string,title:string,description:string,unit:string,button:string,goal:int,completed:int,remaining:int,percentage:float}> */
    public function activityCampaigns(array $settings): array
    {
        $campaigns = [];

        foreach (self::ACTIVITY_CAMPAIGNS as $key => $definition) {
            $prefix = "campaign_{$key}_";
            $campaigns[$key] = [
                'key' => $key,
                'label' => $definition['label'],
                'icon' => $definition['icon'],
                'status' => $settings[$prefix.'status'],
                'title' => $settings[$prefix.'title'],
                'description' => $settings[$prefix.'description'],
                'unit' => $settings[$prefix.'unit'],
                'button' => $settings[$prefix.'button'],
                ...$this->progress(
                    goal: (int) $settings[$prefix.'goal'],
                    completed: (int) $settings[$prefix.'completed'],
                ),
            ];
        }

        return $campaigns;
    }

    /** @return array{goal:int,completed:int,remaining:int,percentage:float} */
    private function progress(int $goal, int $completed): array
    {
        $goal = max(0, $goal);
        $completed = min($goal, max(0, $completed));

        return [
            'goal' => $goal,
            'completed' => $completed,
            'remaining' => $goal - $completed,
            'percentage' => $goal > 0 ? round(($completed / $goal) * 100, 1) : 0.0,
        ];
    }
}
