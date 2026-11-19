<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DonationMethodRequest;
use App\Models\DonationMethod;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DonationMethodController extends Controller
{
    public function index(): View { return view('admin.donations', ['methods' => DonationMethod::query()->orderBy('sort_order')->get()]); }

    public function store(DonationMethodRequest $request): RedirectResponse
    {
        DonationMethod::query()->create([...$request->validated(), 'is_active' => $request->boolean('is_active')]);
        return back()->with('success', 'تمت إضافة وسيلة التبرع.');
    }

    public function update(DonationMethodRequest $request, DonationMethod $donationMethod): RedirectResponse
    {
        $donationMethod->update([...$request->validated(), 'is_active' => $request->boolean('is_active')]);
        return back()->with('success', 'تم تحديث وسيلة التبرع.');
    }

    public function destroy(DonationMethod $donationMethod): RedirectResponse
    {
        $donationMethod->delete();
        return back()->with('success', 'تم حذف وسيلة التبرع.');
    }
}
