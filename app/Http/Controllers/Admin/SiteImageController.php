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
        $groupPositions = array_flip(['hero', 'mini_slider', 'projects', 'documentation', 'gallery', 'about']);
        $images = SiteImage::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get()
            ->groupBy('group')
            ->sortKeysUsing(
                fn (string $first, string $second): int => ($groupPositions[$first] ?? PHP_INT_MAX) <=> ($groupPositions[$second] ?? PHP_INT_MAX)
            );

        return view('admin.images', ['images' => $images]);
    }

    public function store(StoreSiteImageRequest $request): RedirectResponse
    {
        $data = $request->safe()->except('image');
        $data['path'] = $request->file('image')->store('site-images/'.$data['group'], 'public');
        $data['is_active'] = $request->boolean('is_active');
        $data['counter_enabled'] = $data['group'] === 'hero' && $request->boolean('counter_enabled');
        SiteImage::query()->create($data);

        return back()->with('success', 'تم رفع الصورة وإضافتها للموقع.');
    }

    public function update(UpdateSiteImageRequest $request, SiteImage $siteImage): RedirectResponse
    {
        $siteImage->update([
            ...$request->validated(),
            'is_active' => $request->boolean('is_active'),
            'counter_enabled' => $siteImage->group === 'hero' && $request->boolean('counter_enabled'),
        ]);
        return back()->with('success', 'تم تحديث بيانات الصورة.');
    }

    public function destroy(SiteImage $siteImage): RedirectResponse
    {
        Storage::disk('public')->delete($siteImage->path);
        $siteImage->delete();
        return back()->with('success', 'تم حذف الصورة.');
    }
}
