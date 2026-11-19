@extends('admin.layout')
@section('title','بيانات الموقع')
@section('content')
<div class="page-head"><div><h1>بيانات الموقع</h1><p>تحكم في النصوص الرئيسية، التواصل، أرقام الإنجازات وروابط السوشيال.</p></div></div>
<form method="POST" action="{{ route('admin.settings.update') }}" class="settings-form">@csrf @method('PUT')
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
    <div class="card" style="margin-top:20px"><h2 class="section-title">عداد حملة وقف النخيل</h2><div class="grid form-grid">
        <div class="field"><label>حالة الحملة</label><input name="settings[palm_campaign_status]" value="{{ old('settings.palm_campaign_status',$settings['palm_campaign_status']) }}"></div>
        <div class="field"><label>عنوان الحملة</label><input name="settings[palm_campaign_title]" value="{{ old('settings.palm_campaign_title',$settings['palm_campaign_title']) }}"></div>
        <div class="field full"><label>وصف الحملة</label><textarea name="settings[palm_campaign_description]">{{ old('settings.palm_campaign_description',$settings['palm_campaign_description']) }}</textarea></div>
        <div class="field"><label>الهدف الكلي</label><input type="number" min="1" name="settings[palm_campaign_goal]" value="{{ old('settings.palm_campaign_goal',$settings['palm_campaign_goal']) }}" dir="ltr"></div>
        <div class="field"><label>تم وقفه حتى الآن</label><input type="number" min="0" name="settings[palm_campaign_completed]" value="{{ old('settings.palm_campaign_completed',$settings['palm_campaign_completed']) }}" dir="ltr"><span class="note">المتبقي والنسبة يتم حسابهما تلقائياً.</span></div>
        <div class="field"><label>وحدة القياس</label><input name="settings[palm_campaign_unit]" value="{{ old('settings.palm_campaign_unit',$settings['palm_campaign_unit']) }}"></div>
        <div class="field"><label>نص زر التبرع</label><input name="settings[palm_campaign_button]" value="{{ old('settings.palm_campaign_button',$settings['palm_campaign_button']) }}"></div>
    </div></div>
    @foreach($activityCampaigns as $campaignKey => $campaignDefinition)
    @php $prefix = 'campaign_'.$campaignKey.'_'; @endphp
    <div class="card" style="margin-top:20px"><h2 class="section-title">عداد: {{ $campaignDefinition['label'] }}</h2><div class="grid form-grid">
        <div class="field"><label>حالة الحملة</label><input name="settings[{{ $prefix }}status]" value="{{ old('settings.'.$prefix.'status',$settings[$prefix.'status']) }}"></div>
        <div class="field"><label>عنوان الحملة</label><input name="settings[{{ $prefix }}title]" value="{{ old('settings.'.$prefix.'title',$settings[$prefix.'title']) }}"></div>
        <div class="field full"><label>وصف الحملة</label><textarea name="settings[{{ $prefix }}description]">{{ old('settings.'.$prefix.'description',$settings[$prefix.'description']) }}</textarea></div>
        <div class="field"><label>الهدف الكلي</label><input type="number" min="0" name="settings[{{ $prefix }}goal]" value="{{ old('settings.'.$prefix.'goal',$settings[$prefix.'goal']) }}" dir="ltr"></div>
        <div class="field"><label>تم إنجازه حتى الآن</label><input type="number" min="0" name="settings[{{ $prefix }}completed]" value="{{ old('settings.'.$prefix.'completed',$settings[$prefix.'completed']) }}" dir="ltr"><span class="note">المتبقي والنسبة يتم حسابهما تلقائياً.</span></div>
        <div class="field"><label>وحدة القياس</label><input name="settings[{{ $prefix }}unit]" value="{{ old('settings.'.$prefix.'unit',$settings[$prefix.'unit']) }}"></div>
        <div class="field"><label>نص زر التبرع</label><input name="settings[{{ $prefix }}button]" value="{{ old('settings.'.$prefix.'button',$settings[$prefix.'button']) }}"></div>
    </div></div>
    @endforeach
    <div class="card" style="margin-top:20px"><h2 class="section-title">روابط التواصل الاجتماعي</h2><div class="grid form-grid">@foreach(['facebook_url'=>'Facebook','instagram_url'=>'Instagram','youtube_url'=>'YouTube','tiktok_url'=>'TikTok'] as $key=>$label)<div class="field"><label>{{ $label }}</label><input type="url" name="settings[{{ $key }}]" value="{{ old('settings.'.$key,$settings[$key]) }}" dir="ltr"></div>@endforeach</div></div>
    <div class="save-bar"><button class="btn btn-primary"><i class="fas fa-floppy-disk"></i>حفظ جميع التغييرات</button></div>
</form>
@endsection
