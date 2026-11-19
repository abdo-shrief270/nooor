@extends('admin.layout')
@section('title','بيانات الموقع')
@section('content')
<div class="page-head"><div><h1>بيانات الموقع</h1><p>تحكم في النصوص الرئيسية، التواصل، أرقام الإنجازات وروابط السوشيال.</p></div></div>
<form method="POST" action="{{ route('admin.settings.update') }}">@csrf @method('PUT')
    <div class="card"><h2 class="section-title">الهوية والمقدمة</h2><div class="grid form-grid">
        @foreach(['site_name'=>'اسم المؤسسة','site_tagline'=>'الشعار المختصر','hero_title'=>'عنوان الواجهة الرئيسية','hero_subtitle'=>'النص أسفل العنوان'] as $key=>$label)<div class="field {{ $key === 'hero_subtitle' ? 'full' : '' }}"><label>{{ $label }}</label><input name="settings[{{ $key }}]" value="{{ old('settings.'.$key,$settings[$key]) }}"></div>@endforeach
    </div></div>
    <div class="card" style="margin-top:20px"><h2 class="section-title">بيانات التواصل</h2><div class="grid form-grid">
        @foreach(['phone_number'=>'رقم الهاتف الظاهر','whatsapp_number'=>'رقم واتساب (بالصيغة الدولية بدون +)','email'=>'البريد الإلكتروني','address'=>'العنوان'] as $key=>$label)<div class="field"><label>{{ $label }}</label><input name="settings[{{ $key }}]" value="{{ old('settings.'.$key,$settings[$key]) }}" dir="{{ in_array($key,['phone_number','whatsapp_number','email']) ? 'ltr' : 'rtl' }}"></div>@endforeach
    </div></div>
    <div class="card" style="margin-top:20px"><h2 class="section-title">قسم تبرع الآن</h2><div class="grid form-grid">
        <div class="field"><label>عنوان القسم</label><input name="settings[donation_title]" value="{{ old('settings.donation_title',$settings['donation_title']) }}"></div><div class="field"><label>النص التعريفي</label><input name="settings[donation_subtitle]" value="{{ old('settings.donation_subtitle',$settings['donation_subtitle']) }}"></div><div class="field full"><label>تنبيه ما بعد التحويل</label><textarea name="settings[donation_notice]">{{ old('settings.donation_notice',$settings['donation_notice']) }}</textarea></div>
    </div></div>
    <div class="card" style="margin-top:20px"><h2 class="section-title">أرقام الواجهة والإنجازات</h2><div class="grid form-grid">
        @foreach(['hero_water_connections'=>'وصلات المياه','hero_tents'=>'الخيام الموزعة','hero_meals'=>'الوجبات الموزعة','hero_restored_tents'=>'الخيام المرممة','stat_meals'=>'وجبات سنوية','stat_water'=>'مياه','stat_food_boxes'=>'كراتين غذائية','stat_flour'=>'دقيق وبقوليات','stat_blankets'=>'بطاطين','stat_tents'=>'خيام','stat_convoys'=>'قوافل'] as $key=>$label)<div class="field"><label>{{ $label }}</label><input type="number" min="0" name="settings[{{ $key }}]" value="{{ old('settings.'.$key,$settings[$key]) }}" dir="ltr"></div>@endforeach
    </div></div>
    <div class="card" style="margin-top:20px"><h2 class="section-title">روابط التواصل الاجتماعي</h2><div class="grid form-grid">@foreach(['facebook_url'=>'Facebook','instagram_url'=>'Instagram','youtube_url'=>'YouTube','tiktok_url'=>'TikTok'] as $key=>$label)<div class="field"><label>{{ $label }}</label><input type="url" name="settings[{{ $key }}]" value="{{ old('settings.'.$key,$settings[$key]) }}" dir="ltr"></div>@endforeach</div></div>
    <div style="position:sticky;bottom:15px;text-align:left;margin-top:20px"><button class="btn btn-primary" style="box-shadow:0 8px 25px #1686bd55"><i class="fas fa-floppy-disk"></i>حفظ جميع التغييرات</button></div>
</form>
@endsection
