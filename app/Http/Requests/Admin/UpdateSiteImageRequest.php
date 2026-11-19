<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSiteImageRequest extends FormRequest
{
    public function authorize(): bool { return $this->user()?->is_admin === true; }

    public function rules(): array
    {
        return [
            'title' => ['nullable', 'string', 'max:150'],
            'alt_text' => ['nullable', 'string', 'max:200'],
            'sort_order' => ['required', 'integer', 'min:0', 'max:9999'],
            'is_active' => ['nullable', 'boolean'],
        ];
    }
}
