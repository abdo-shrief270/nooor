<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateSettingsRequest;
use App\Services\SiteContentService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SettingsController extends Controller
{
    public function __construct(private readonly SiteContentService $content) {}

    public function edit(): View { return view('admin.settings', ['settings' => $this->content->all()]); }

    public function update(UpdateSettingsRequest $request): RedirectResponse
    {
        $this->content->update($request->validated('settings'));
        return back()->with('success', 'تم حفظ بيانات الموقع بنجاح.');
    }
}
