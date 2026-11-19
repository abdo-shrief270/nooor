<?php

namespace App\Http\Controllers;

use App\Models\DonationMethod;
use App\Models\SiteImage;
use App\Services\SiteContentService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function __construct(private readonly SiteContentService $content) {}

    public function home(): View
    {
        return view('index', [
            'settings' => $this->content->all(),
            'images' => $this->images(),
            'donationMethods' => Schema::hasTable('donation_methods') ? DonationMethod::query()->visible()->get() : collect(),
        ]);
    }

    public function about(): View
    {
        return view('about-us', ['settings' => $this->content->all(), 'images' => $this->images()]);
    }

    public function page(string $view): View
    {
        return view($view, ['settings' => $this->content->all()]);
    }

    private function images(): Collection
    {
        return Schema::hasTable('site_images') ? SiteImage::query()->visible()->get()->groupBy('group') : collect();
    }

}
