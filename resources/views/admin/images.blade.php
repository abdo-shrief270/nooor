@extends('admin.layout')

@section('title', 'إدارة الصور')

@section('content')
<div class="page-head">
    <div>
        <h1>إدارة صور الموقع</h1>
        <p>ارفع الصور وحدد مكان ظهورها وترتيبها، واضبط عداد كل صورة في السلايدر الرئيسي.</p>
    </div>
</div>

<div class="card">
    <h2 class="section-title">رفع صورة جديدة</h2>
    <form method="POST" action="{{ route('admin.images.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="grid form-grid">
            <div class="field">
                <label>الصورة</label>
                <input type="file" name="image" accept="image/jpeg,image/png,image/webp" required>
                <span class="note">JPG أو PNG أو WebP، بحد أقصى 6MB.</span>
            </div>
            <div class="field">
                <label>مكان الظهور</label>
                <select name="group" required data-image-group>
                    <option value="hero" @selected(old('group', 'hero') === 'hero')>السلايدر الرئيسي</option>
                    <option value="mini_slider" @selected(old('group') === 'mini_slider')>السلايدر الصغير</option>
                    <option value="projects" @selected(old('group') === 'projects')>صور الأنشطة</option>
                    <option value="documentation" @selected(old('group') === 'documentation')>التوثيق</option>
                    <option value="gallery" @selected(old('group') === 'gallery')>معرض الأمل</option>
                    <option value="about" @selected(old('group') === 'about')>صفحة من نحن</option>
                </select>
            </div>
            <div class="field"><label>العنوان</label><input name="title" value="{{ old('title') }}" placeholder="عنوان اختياري"></div>
            <div class="field"><label>النص البديل للصورة</label><input name="alt_text" value="{{ old('alt_text') }}" placeholder="وصف مفيد لمحركات البحث"></div>
            <div class="field"><label>الترتيب</label><input type="number" min="0" name="sort_order" value="{{ old('sort_order', 0) }}" required></div>
            <div class="field"><label class="check"><input type="checkbox" name="is_active" value="1" @checked(old('is_active', true))>نشر الصورة فوراً</label></div>

            <div class="field full" data-slider-counter-fields>
                <div class="card" style="background:#f8fafc;box-shadow:none">
                    <h3 style="font-size:1rem">عداد السلايدر الرئيسي</h3>
                    <p class="note">يظهر فوق هذه الصورة فقط. القيمة الافتراضية للصورة الجديدة هي 50%.</p>
                    <div class="grid form-grid">
                        <div class="field full"><label class="check"><input type="checkbox" name="counter_enabled" value="1" @checked(old('counter_enabled', true))>إظهار العداد على الصورة</label></div>
                        <div class="field"><label>عنوان العداد</label><input name="counter_title" value="{{ old('counter_title') }}" placeholder="مثال: وقف النخيل"></div>
                        <div class="field"><label>الوحدة</label><input name="counter_unit" value="{{ old('counter_unit') }}" placeholder="نخلة، خيمة، شخص..."></div>
                        <div class="field"><label>الهدف</label><input type="number" min="1" name="counter_goal" value="{{ old('counter_goal', 100) }}"></div>
                        <div class="field"><label>تم إنجازه</label><input type="number" min="0" name="counter_completed" value="{{ old('counter_completed', 50) }}"></div>
                        <div class="field"><label>نص الزر</label><input name="counter_button" value="{{ old('counter_button', 'تبرع الآن') }}"></div>
                    </div>
                </div>
            </div>

            <div class="field full"><button class="btn btn-primary"><i class="fas fa-cloud-arrow-up"></i>رفع وإضافة الصورة</button></div>
        </div>
    </form>
</div>

@php
    $labels = [
        'hero' => 'السلايدر الرئيسي',
        'mini_slider' => 'السلايدر الصغير',
        'projects' => 'صور الأنشطة',
        'documentation' => 'التوثيق',
        'gallery' => 'معرض الأمل',
        'about' => 'صفحة من نحن',
    ];
@endphp

@forelse($images as $group => $items)
    <section style="margin-top:28px">
        <div class="page-head" style="margin-bottom:14px">
            <div><h2 style="font-size:1.2rem">{{ $labels[$group] ?? $group }}</h2><p>{{ $items->count() }} صورة</p></div>
        </div>
        <div class="grid media-grid">
            @foreach($items as $image)
                <div class="card media-card">
                    <img src="{{ Storage::url($image->path) }}" alt="{{ $image->alt_text }}">
                    <div class="media-body">
                        <div class="media-meta">
                            <span>#{{ $image->sort_order }}</span>
                            <span class="badge {{ $image->is_active ? '' : 'off' }}">{{ $image->is_active ? 'منشورة' : 'مخفية' }}</span>
                        </div>
                        <b>{{ $image->title ?: 'بدون عنوان' }}</b>

                        @if($image->group === 'hero' && $image->counter_enabled)
                            @php $counter = $image->counterData(); @endphp
                            <div class="note" style="margin-top:8px">
                                {{ $counter['title'] }} — {{ number_format($counter['completed']) }} / {{ number_format($counter['goal']) }} {{ $counter['unit'] }} ({{ number_format($counter['percentage'], 1) }}%)
                            </div>
                        @endif

                        <details style="margin-top:12px">
                            <summary>{{ $image->group === 'hero' ? 'تعديل الصورة والعداد' : 'تعديل الصورة' }}</summary>
                            <form method="POST" action="{{ route('admin.images.update', $image) }}" style="margin-top:12px">
                                @csrf
                                @method('PUT')
                                <div class="grid">
                                    <div class="field"><label>عنوان الصورة</label><input name="title" value="{{ $image->title }}"></div>
                                    <div class="field"><label>النص البديل</label><input name="alt_text" value="{{ $image->alt_text }}"></div>
                                    <div class="field"><label>الترتيب</label><input type="number" min="0" name="sort_order" value="{{ $image->sort_order }}" required></div>
                                    <div class="field"><label class="check"><input type="checkbox" name="is_active" value="1" @checked($image->is_active)>منشورة</label></div>

                                    @if($image->group === 'hero')
                                        <div class="field full"><hr><h3 style="font-size:1rem">عداد هذه الصورة</h3></div>
                                        <div class="field full"><label class="check"><input type="checkbox" name="counter_enabled" value="1" @checked($image->counter_enabled)>إظهار العداد</label></div>
                                        <div class="field"><label>عنوان العداد</label><input name="counter_title" value="{{ $image->counter_title }}"></div>
                                        <div class="field"><label>الوحدة</label><input name="counter_unit" value="{{ $image->counter_unit }}"></div>
                                        <div class="field"><label>الهدف</label><input type="number" min="1" name="counter_goal" value="{{ $image->counter_goal }}"></div>
                                        <div class="field"><label>تم إنجازه</label><input type="number" min="0" max="{{ $image->counter_goal }}" name="counter_completed" value="{{ $image->counter_completed }}"></div>
                                        <div class="field"><label>نص الزر</label><input name="counter_button" value="{{ $image->counter_button }}"></div>
                                    @endif

                                    <div class="field full"><button class="btn btn-light">حفظ التعديل</button></div>
                                </div>
                            </form>
                        </details>
                        <form method="POST" action="{{ route('admin.images.destroy', $image) }}" onsubmit="return confirm('حذف الصورة نهائياً؟')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" style="width:100%;margin-top:10px"><i class="fas fa-trash"></i>حذف</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@empty
    <div class="card empty" style="margin-top:20px"><i class="fas fa-images" style="font-size:2rem"></i><p>لا توجد صور مرفوعة بعد.</p></div>
@endforelse

<script>
    const imageGroup = document.querySelector('[data-image-group]');
    const sliderCounterFields = document.querySelector('[data-slider-counter-fields]');
    const syncSliderCounterFields = () => {
        sliderCounterFields.hidden = imageGroup.value !== 'hero';
    };
    imageGroup.addEventListener('change', syncSliderCounterFields);
    syncSliderCounterFields();
</script>
@endsection
