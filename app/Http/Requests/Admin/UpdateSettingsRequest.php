<?php

namespace App\Http\Requests\Admin;

use App\Services\SiteContentService;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingsRequest extends FormRequest
{
    public function authorize(): bool { return $this->user()?->is_admin === true; }

    public function rules(): array
    {
        $rules = [
            'settings' => ['required', 'array'],
            'settings.*' => ['nullable', 'string', 'max:5000'],
            'settings.palm_campaign_goal' => ['sometimes', 'integer', 'min:1', 'max:1000000000'],
            'settings.palm_campaign_completed' => ['sometimes', 'integer', 'min:0', 'max:1000000000', 'lte:settings.palm_campaign_goal'],
        ];

        foreach (array_keys(SiteContentService::ACTIVITY_CAMPAIGNS) as $key) {
            $rules["settings.campaign_{$key}_goal"] = ['sometimes', 'integer', 'min:0', 'max:1000000000'];
            $rules["settings.campaign_{$key}_completed"] = ['sometimes', 'integer', 'min:0', 'max:1000000000', "lte:settings.campaign_{$key}_goal"];
        }

        return $rules;
    }
}
