@extends('admin.layout')
@section('title','نظرة عامة')
@section('content')
<div class="page-head"><div><h1>أهلاً {{ auth()->user()->name }}</h1><p>كل ما تحتاجه لإدارة محتوى الموقع من مكان واحد.</p></div><a class="btn btn-primary" href="{{ route('home') }}" target="_blank"><i class="fas fa-eye"></i>معاينة الموقع</a></div>
<div class="grid stats">
    <div class="card stat"><div class="stat-icon"><i class="fas fa-images"></i></div><div><b>{{ $stats['images'] }}</b><span>إجمالي الصور</span></div></div>
    <div class="card stat"><div class="stat-icon"><i class="fas fa-circle-check"></i></div><div><b>{{ $stats['activeImages'] }}</b><span>صور منشورة</span></div></div>
    <div class="card stat"><div class="stat-icon"><i class="fas fa-wallet"></i></div><div><b>{{ $stats['donations'] }}</b><span>وسائل التبرع</span></div></div>
    <div class="card stat"><div class="stat-icon"><i class="fas fa-pen"></i></div><div><b>{{ $stats['settings'] }}</b><span>بيانات مخصصة</span></div></div>
</div>
<div class="grid" style="grid-template-columns:1.6fr 1fr;margin-top:20px">
    <div class="card table-card"><h2 class="section-title">أحدث الصور</h2>@if($recentImages->isEmpty())<div class="empty">لم يتم رفع صور من لوحة التحكم بعد.</div>@else<table class="recent">@foreach($recentImages as $image)<tr><td><img src="{{ Storage::url($image->path) }}" alt=""></td><td><b>{{ $image->title ?: 'بدون عنوان' }}</b><br><span class="note">{{ $image->group }}</span></td><td><span class="badge {{ $image->is_active ? '' : 'off' }}">{{ $image->is_active ? 'منشورة' : 'مخفية' }}</span></td></tr>@endforeach</table>@endif</div>
    <div class="card"><h2 class="section-title">وصول سريع</h2><div class="grid"><a class="btn btn-light" href="{{ route('admin.images.index') }}"><i class="fas fa-cloud-arrow-up"></i>رفع صور جديدة</a><a class="btn btn-light" href="{{ route('admin.donations.index') }}"><i class="fas fa-credit-card"></i>تعديل أرقام التبرع</a><a class="btn btn-light" href="{{ route('admin.settings.edit') }}"><i class="fas fa-phone"></i>تعديل بيانات التواصل</a></div></div>
</div>
@endsection
