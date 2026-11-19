<?php

namespace App\Http\Controllers;

use App\Models\SiteImage;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class PublicSiteImageController extends Controller
{
    public function __invoke(SiteImage $siteImage): StreamedResponse
    {
        abort_unless(Storage::disk('public')->exists($siteImage->path), 404);

        return Storage::disk('public')->response(
            $siteImage->path,
            headers: ['Cache-Control' => 'public, max-age=86400'],
        );
    }
}
