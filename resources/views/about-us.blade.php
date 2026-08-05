<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>من نحن | مؤسسة نور البخاري</title>
    <meta name="description" content="مؤسسة نور البخاري - مؤسسة إغاثية امتدادًا لرسالة الأزهر الشريف، لخدمة صعيد مصر وغزة والسودان.">

    <link rel="icon" href="{{ asset('logo.jpg-large-preserve-ratio') }}" type="image/jpeg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.rtl.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #3a95cc;            /* اللبني الأساسي للشعار */
            --primary-rgb: 58 149 204;
            --primary-dark: #3a95cc;       /* درجة أعمق للتمرير والظلال */
            --primary-deeper: #3a95cc;     /* للنصوص العريضة */
            --primary-light: #3a95cc;      /* خلفية لبني فاتح من الشعار */
            --primary-tint: #ecf5f8;       /* أفتح درجة للأقسام */
            --slate-50: #f8fafc;
            --slate-200: #e2e8f0;
            --slate-700: #334155;
            --slate-900: #0f172a;
            --white: #ffffff;
            --shadow-md: 0 4px 6px -1px rgb(58 149 204 / 0.12);
            --shadow-lg: 0 10px 25px -5px rgb(58 149 204 / 0.20);
            --radius-xl: 1.5rem;
        }

        body { font-family: 'Cairo', sans-serif; background-color: var(--white); color: var(--slate-700); line-height: 1.8; font-weight: 500; }
        h1, h2, h3, h4, h5 { font-weight: 900; color: var(--slate-900); letter-spacing: -0.02em; }
        .text-primary { color: var(--primary) !important; }
        .text-primary-deeper { color: var(--primary-deeper) !important; }

        /* Topbar */
        .topbar { background-color: var(--primary); color: var(--white); font-size: 0.92rem; font-weight: 700; }
        .topbar a { color: var(--white); text-decoration: none; }
        .topbar a:hover { opacity: 0.85; }
        .topbar .social-mini { width: 30px; height: 30px; display: inline-flex; align-items: center; justify-content: center; background: rgba(255,255,255,0.15); color: var(--white); border-radius: 50%; font-size: 0.85rem; transition: all 0.3s ease; }
        .topbar .social-mini:hover { background: var(--white); color: var(--primary); }

        /* Navbar */
        .navbar { backdrop-filter: blur(14px); background: rgba(255, 255, 255, 0.92) !important; padding: 1rem 0; box-shadow: 0 4px 6px -1px rgba(58,149,204,.08); border-bottom: 1px solid rgba(58, 149, 204, 0.1); }
        .navbar-brand img { height: 64px; }
        .nav-link { color: var(--slate-700) !important; font-weight: 800; margin: 0 0.25rem; padding: 0.6rem 1.1rem !important; border-radius: 0.75rem; font-size: 1.02rem; }
        .nav-link:hover, .nav-link.active {
            color: var(--primary-deeper) !important;
            background-color: var(--primary-tint);
        }

        /* Inner Header */
        .inner-header {
            background: linear-gradient(135deg, rgba(15,23,42,0.85), rgba(29,106,152,0.85)),
                        url('{{ asset("assets/images/clinic/12.JPG") }}') center/cover;
            padding: 8rem 0 6rem;
            color: var(--white);
            text-align: center;
            position: relative;
        }
        .inner-header::before {
            content: ''; position: absolute; inset: 0;
            background:rgb(var(--primary-rgb) / 0.25);
            background-size: 30px 30px;
        }
        .inner-header > .container { position: relative; z-index: 2; }
        .inner-header h1 { color: var(--white); }
        .breadcrumb-pill {
            display: inline-flex; align-items: center; gap: 0.6rem;
            background: rgba(58, 149, 204, 0.25); color: var(--primary-light);
            border: 1px solid rgba(58, 149, 204, 0.5);
            padding: 0.5rem 1.25rem; border-radius: 100px;
            font-weight: 800; font-size: 0.95rem; margin-bottom: 1.5rem;
        }

        /* Cards */
        .card-about {
            background: var(--white); padding: 2.5rem;
            border-radius: var(--radius-xl);
            border: 1px solid var(--slate-200);
            height: 100%; transition: all 0.3s ease;
        }
        .card-about:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary);
        }
        .icon-box {
            width: 70px; height: 70px;
            background: var(--primary-light); color: var(--primary);
            border-radius: 1rem;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.7rem; margin-bottom: 1.5rem;
        }
        .card-about.card-primary {
            background: linear-gradient(135deg, var(--primary-deeper), var(--primary));
            color: var(--white);
        }
        .card-about.card-primary h4 { color: var(--white); }
        .card-about.card-primary .icon-box { background: rgba(255,255,255,0.2); color: var(--white); }
        .card-about.card-primary p { color: rgba(255,255,255,0.92); }

        /* Buttons */
        .btn-luxury {
            background: var(--primary); color: var(--white);
            padding: 0.95rem 2.2rem; font-weight: 800;
            border-radius: 100px; box-shadow: 0 10px 25px -5px rgba(58,149,204,.45);
            text-decoration: none; display: inline-flex; align-items: center; gap: 0.6rem;
            transition: all 0.3s ease;
        }
        .btn-luxury:hover { background: var(--primary-dark); transform: translateY(-3px); color: var(--white); }

        /* Why us list */
        .why-list { list-style: none; padding: 0; }
        .why-list li {
            display: flex; align-items: flex-start; gap: 0.85rem;
            margin-bottom: 1.25rem; padding: 1rem 1.25rem;
            background: var(--primary-tint); border-radius: 0.85rem;
            border-right: 4px solid var(--primary);
        }
        .why-list li i { color: var(--primary); font-size: 1.4rem; margin-top: 0.15rem; }
        .why-list li span { font-weight: 700; color: var(--slate-900); }

        /* Scope chips */
        .scope-chips { display: flex; flex-wrap: wrap; gap: 0.6rem; margin-bottom: 1.5rem; }
        .scope-chips .chip {
            display: inline-flex; align-items: center; gap: 0.5rem;
            background: var(--white); color: var(--primary-deeper);
            padding: 0.5rem 1rem; border-radius: 100px;
            font-weight: 800; font-size: 0.9rem;
            border: 2px solid var(--primary-light);
        }

        /* Floating buttons */
        .floating-actions {
            position: fixed; bottom: 25px; left: 25px; z-index: 9990;
            display: flex; flex-direction: column; gap: 12px;
        }
        .floating-btn {
            width: 62px; height: 62px;
            display: flex; align-items: center; justify-content: center;
            border-radius: 50%; color: var(--white);
            font-size: 1.65rem; text-decoration: none;
            box-shadow: 0 10px 25px -5px rgba(0,0,0,0.3);
            transition: all 0.3s ease; border: 3px solid var(--white);
        }
        .floating-btn:hover { transform: scale(1.12); color: var(--white); }
        .floating-btn.donate { background: var(--primary); }
        .floating-btn.donate:hover { background: var(--primary-dark); }
        .floating-btn.whatsapp { background: #25d366; }
        .floating-btn.whatsapp:hover { background: #128c7e; }

        @media (max-width: 768px) {
            .inner-header { padding: 6rem 0 4rem; }
            .floating-actions { bottom: 18px; left: 18px; }
            .floating-btn { width: 56px; height: 56px; font-size: 1.4rem; }
        }
    </style>
</head>
<body>

<!-- Topbar -->
<div class="topbar py-2 d-none d-lg-block">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-4 align-items-center">
                <a href="tel:+201055201766" class="d-flex align-items-center gap-2">
                    <i class="fas fa-phone-alt"></i>
                    <span dir="ltr">+201055201766</span>
                </a>
                <a href="mailto:Nourelbokhart.eg@gmail.com" class="d-flex align-items-center gap-2">
                    <i class="fas fa-envelope"></i>
                    Nourelbokhart.eg@gmail.com
                </a>
                <span class="d-flex align-items-center gap-2">
                    <i class="fas fa-map-marker-alt"></i>
                    التجمع الخامس – فاليو مول 2، القاهرة
                </span>
            </div>
            <div class="d-flex gap-2 align-items-center">
                <span class="me-2 fw-bold">تابعونا:</span>
                <a href="https://www.facebook.com/Noor.Albokhary?mibextid=wwXIfr&mibextid=wwXIfr" target="_blank" rel="noopener" class="social-mini" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/nourelbukhari?igsh=MTJsZm10ZDZ4Mmhsdw%3D%3D&utm_source=qr" target="_blank" rel="noopener" class="social-mini" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/@NourElBokhary" target="_blank" rel="noopener" class="social-mini" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="https://www.tiktok.com/@nourelbokhary" target="_blank" rel="noopener" class="social-mini" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                <a href="https://wa.me/201055201766" target="_blank" rel="noopener" class="social-mini" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-3" href="/">
            <img src="{{ asset('logo.jpg-large-preserve-ratio') }}" alt="مؤسسة نور البخاري">
            <div class="d-none d-sm-block">
                <h4 class="mb-0 text-primary-deeper">مؤسسة نور البخاري</h4>
                <small class="text-muted fw-bold">من الصعيد إلى غزة والسودان</small>
            </div>
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="fas fa-bars fa-lg text-primary"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/">الرئيسية</a></li>
                <li class="nav-item"><a class="nav-link active" href="/about">من نحن</a></li>
                <li class="nav-item"><a class="nav-link" href="/#achievements">إنجازاتنا</a></li>
                <li class="nav-item"><a class="nav-link" href="/#donations">طرق التبرع</a></li>
                <li class="nav-item"><a class="nav-link" href="/#transparency">الشفافية</a></li>
            </ul>
            <a href="/#donations" class="btn btn-luxury px-4 py-2 fs-6">
                <i class="fas fa-hand-holding-heart"></i> تبرع الآن
            </a>
        </div>
    </div>
</nav>

<!-- Inner Header -->
<section class="inner-header">
    <div class="container">
        <span class="breadcrumb-pill"><i class="fas fa-info-circle"></i> تعرّف على مؤسستنا</span>
        <h1 class="display-3 mb-3">من نحن</h1>
        <p class="lead text-white-50 fs-4">قصة مؤسسة نذرت نفسها لخدمة الإنسان وإغاثة الملهوف من الصعيد إلى غزة والسودان</p>
    </div>
</section>

<!-- Identity Section -->
<section class="py-5 my-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="scope-chips">
                    <span class="chip"><i class="fas fa-mosque"></i> معاهد البخاري الأزهرية</span>
                    <span class="chip"><i class="fas fa-globe-africa"></i> داخل وخارج مصر</span>
                </div>
                <h2 class="mb-4" style="font-size: 2.5rem;">مؤسسة إغاثية امتدادًا لرسالة <span class="text-primary">الأزهر الشريف</span></h2>
                <p class="fs-5 text-muted mb-4">مؤسسة <strong class="text-primary-deeper">نور البخاري</strong> هي صرح إغاثي يتخذ من <strong>معاهد البخاري الأزهرية</strong> مقراً لتجهيز قوافله، وانطلاقاً من القاهرة (التجمع الخامس – فاليو مول 2) نمدّ يد العون داخل مصر وخارجها.</p>
                <p class="fs-5 text-muted mb-4">نؤمن بأن العمل الإغاثي رسالة سامية لا تعرف حدوداً جغرافية، فكل أسرة جائعة، وكل طفل يحتاج إلى ماء، وكل أرملة تنتظر الإغاثة — هي أمانة في أعناقنا.</p>
                <a href="/#donations" class="btn btn-luxury">
                    <i class="fas fa-hand-holding-heart"></i> ساهم معنا الآن
                </a>
            </div>
            <div class="col-lg-6 text-center">
                <div class="p-5 rounded-4" style="background: linear-gradient(135deg, var(--primary-tint) 0%, var(--white) 100%); border: 1px solid var(--primary-light);">
                    <img src="{{ asset('logo.jpg-large-preserve-ratio') }}" alt="شعار المؤسسة" class="img-fluid" style="max-height: 320px;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision / Mission / Values -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">رؤيتنا ورسالتنا وقيمنا</h2>
            <p class="text-muted fs-5 mx-auto" style="max-width: 700px;">المبادئ التي نعمل من خلالها لإيصال أمانتكم إلى مستحقيها.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-about">
                    <div class="icon-box"><i class="fas fa-eye"></i></div>
                    <h4>رؤيتنا</h4>
                    <p class="text-muted">أن نكون القدوة في العمل الإغاثي والنموذج الأكثر شفافية في إيصال الأمانات لمستحقيها داخل مصر وخارجها، مع التزام تام بالكرامة الإنسانية.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-about card-primary">
                    <div class="icon-box"><i class="fas fa-heart"></i></div>
                    <h4>رسالتنا</h4>
                    <p>إثبات أن قلوب الخير لا تعرف المستحيل، وأن العمل المؤسسي المنظم — انطلاقاً من معاهد البخاري الأزهرية — هو السبيل الأكفأ للتخفيف من المعاناة وإعادة الأمل.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-about">
                    <div class="icon-box"><i class="fas fa-shield-alt"></i></div>
                    <h4>قيمنا</h4>
                    <p class="text-muted">نرتكز على قيم الأمانة، والسرعة في التنفيذ، والكرامة الإنسانية، والشفافية التامة مع كل متبرع يضع ثقته في مؤسستنا.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Us -->
<section class="py-5 my-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/clinic/15.JPG') }}" class="img-fluid rounded-4 shadow-lg" alt="جهودنا الميدانية">
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h2 class="mb-4">لماذا مؤسسة نور البخاري؟</h2>
                <p class="fs-5 text-muted mb-4">نؤمن بأن كل تبرع — مهما كان بسيطاً — هو لبنة في بناء جدار الحماية لإخواننا في صعيد مصر وغزة والسودان. مؤسستنا تعمل بقلب واحد تحت أصعب الظروف لضمان استمرارية المشاريع الإغاثية الأساسية.</p>
                <ul class="why-list">
                    <li><i class="fas fa-check-circle"></i><span>إشراف مباشر على تجهيز القوافل داخل معاهد البخاري الأزهرية</span></li>
                    <li><i class="fas fa-check-circle"></i><span>توثيق مستمر لعمليات التوزيع بالصور والفيديو</span></li>
                    <li><i class="fas fa-check-circle"></i><span>فريق ميداني متواجد في قلب الأحداث (الصعيد، غزة، السودان)</span></li>
                    <li><i class="fas fa-check-circle"></i><span>شفافية تامة في إدارة التبرعات وإعداد التقارير الدورية</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Scope of Work -->
<section class="py-5" style="background: linear-gradient(135deg, var(--primary-tint), var(--white));">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">نطاق عملنا</h2>
            <p class="text-muted fs-5 mx-auto" style="max-width: 700px;">نمتد بمساعداتنا الإغاثية في ثلاث مناطق رئيسية:</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-about text-center">
                    <div class="icon-box mx-auto"><i class="fas fa-mountain-sun"></i></div>
                    <h4>صعيد مصر</h4>
                    <p class="text-muted">دعم الأسر الأكثر احتياجاً في القرى والنجوع بالمواد الغذائية والكسوة وتجهيز العرائس.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-about text-center">
                    <div class="icon-box mx-auto"><i class="fas fa-dove"></i></div>
                    <h4>قطاع غزة</h4>
                    <p class="text-muted">قوافل الإغاثة الكبرى من الخيام والمواد الغذائية وسقيا الماء وتكيات الإطعام للنازحين.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-about text-center">
                    <div class="icon-box mx-auto"><i class="fas fa-hand-holding-heart"></i></div>
                    <h4>جمهورية السودان</h4>
                    <p class="text-muted">إغاثة المتضررين من النزاعات بالطرود الغذائية والمستلزمات الطبية الأساسية.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Floating Buttons -->
<div class="floating-actions">
    <a href="/#donations" class="floating-btn donate" aria-label="تبرع الآن"><i class="fas fa-hand-holding-heart"></i></a>
    <a href="https://wa.me/201055201766" target="_blank" rel="noopener" class="floating-btn whatsapp" aria-label="واتساب"><i class="fab fa-whatsapp"></i></a>
</div>

@include('partials.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
</body>
</html>
