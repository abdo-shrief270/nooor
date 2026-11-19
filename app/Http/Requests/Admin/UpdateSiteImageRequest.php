<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSiteImageRequest extends FormRequest
{
    public function authorize(): bool { return $this->user()?->is_admin === true; }

    public function rules(): array
    {
        $rules = [
            'title' => ['nullable', 'string', 'max:150'],
            'alt_text' => ['nullable', 'string', 'max:200'],
            'sort_order' => ['required', 'integer', 'min:0', 'max:9999'],
            'is_active' => ['nullable', 'boolean'],
        ];

        if ($this->route('siteImage')?->group !== 'hero') {
            return $rules;
        }

        return [...$rules,
            'counter_enabled' => ['nullable', 'boolean'],
            'counter_title' => ['required_if:counter_enabled,1', 'nullable', 'string', 'max:150'],
            'counter_goal' => ['required_if:counter_enabled,1', 'nullable', 'integer', 'min:1', 'max:4294967295'],
            'counter_completed' => ['required_if:counter_enabled,1', 'nullable', 'integer', 'min:0', 'lte:counter_goal'],
            'counter_unit' => ['required_if:counter_enabled,1', 'nullable', 'string', 'max:50'],
            'counter_button' => ['required_if:counter_enabled,1', 'nullable', 'string', 'max:80'],
        ];
    }
}
