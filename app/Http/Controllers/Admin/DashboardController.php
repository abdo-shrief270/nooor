<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DonationMethod;
use App\Models\SiteImage;
use App\Models\SiteSetting;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        return view('admin.dashboard', [
            'stats' => [
                'images' => SiteImage::query()->count(),
                'activeImages' => SiteImage::query()->where('is_active', true)->count(),
                'donations' => DonationMethod::query()->count(),
                'settings' => SiteSetting::query()->count(),
            ],
            'recentImages' => SiteImage::query()->latest()->limit(6)->get(),
        ]);
    }
}
