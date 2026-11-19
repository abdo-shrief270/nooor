<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSiteImageRequest extends FormRequest
{
    public function authorize(): bool { return $this->user()?->is_admin === true; }

    public function rules(): array
    {
        return [
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:6144'],
            'group' => ['required', Rule::in(['hero', 'mini_slider', 'projects', 'documentation', 'gallery', 'about'])],
            'title' => ['nullable', 'string', 'max:150'],
            'alt_text' => ['nullable', 'string', 'max:200'],
            'sort_order' => ['required', 'integer', 'min:0', 'max:9999'],
            'is_active' => ['nullable', 'boolean'],
            'counter_enabled' => ['exclude_unless:group,hero', 'nullable', 'boolean'],
            'counter_title' => ['exclude_unless:group,hero', 'required_if:counter_enabled,1', 'nullable', 'string', 'max:150'],
            'counter_goal' => ['exclude_unless:group,hero', 'required_if:counter_enabled,1', 'nullable', 'integer', 'min:1', 'max:4294967295'],
            'counter_completed' => ['exclude_unless:group,hero', 'required_if:counter_enabled,1', 'nullable', 'integer', 'min:0', 'lte:counter_goal'],
            'counter_unit' => ['exclude_unless:group,hero', 'required_if:counter_enabled,1', 'nullable', 'string', 'max:50'],
            'counter_button' => ['exclude_unless:group,hero', 'required_if:counter_enabled,1', 'nullable', 'string', 'max:80'],
        ];
    }
}
