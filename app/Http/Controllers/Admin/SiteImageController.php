<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSiteImageRequest;
use App\Http\Requests\Admin\UpdateSiteImageRequest;
use App\Models\SiteImage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class SiteImageController extends Controller
{
    public function index(): View
    {
        return view('admin.images', ['images' => SiteImage::query()->orderBy('group')->orderBy('sort_order')->get()->groupBy('group')]);
    }

    public function store(StoreSiteImageRequest $request): RedirectResponse
    {
        $data = $request->safe()->except('image');
        $data['path'] = $request->file('image')->store('site-images/'.$data['group'], 'public');
        $data['is_active'] = $request->boolean('is_active');
        SiteImage::query()->create($data);

        return back()->with('success', 'تم رفع الصورة وإضافتها للموقع.');
    }

    public function update(UpdateSiteImageRequest $request, SiteImage $siteImage): RedirectResponse
    {
        $siteImage->update([...$request->validated(), 'is_active' => $request->boolean('is_active')]);
        return back()->with('success', 'تم تحديث بيانات الصورة.');
    }

    public function destroy(SiteImage $siteImage): RedirectResponse
    {
        Storage::disk('public')->delete($siteImage->path);
        $siteImage->delete();
        return back()->with('success', 'تم حذف الصورة.');
    }
}
