<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>سياسة الخصوصية | مؤسسة نور البخاري</title>

    <link rel="icon" href="{{ asset('logo.jpg-large-preserve-ratio') }}" type="image/jpeg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.rtl.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #3a95cc;            /* اللبني الأساسي للشعار */
            --primary-dark: #3a95cc;       /* درجة أعمق للتمرير والظلال */
            --primary-deeper: #3a95cc;     /* للنصوص العريضة */
            --primary-light: #3a95cc;      /* خلفية لبني فاتح من الشعار */
            --primary-tint: #ecf5f8;       /* أفتح درجة للأقسام */
            --slate-50: #f8fafc;
            --slate-700: #334155;
            --slate-900: #0f172a;
            --white: #ffffff;
        }
        body { font-family: 'Cairo', sans-serif; background-color: var(--slate-50); color: var(--slate-700); line-height: 1.8; font-weight: 500; }
        h1, h2, h3, h4 { font-weight: 900; color: var(--slate-900); letter-spacing: -0.02em; }

        /* Topbar */
        .topbar { background-color: var(--primary); color: var(--white); font-size: 0.92rem; font-weight: 700; }
        .topbar a { color: var(--white); text-decoration: none; }
        .topbar a:hover { opacity: 0.85; }
        .topbar .social-mini { width: 30px; height: 30px; display: inline-flex; align-items: center; justify-content: center; background: rgba(255,255,255,0.15); color: var(--white); border-radius: 50%; font-size: 0.85rem; }
        .topbar .social-mini:hover { background: var(--white); color: var(--primary); }

        /* Navbar */
        .navbar { background: var(--white) !important; box-shadow: 0 4px 6px -1px rgba(58,149,204,.1); padding: 1rem 0; border-bottom: 1px solid rgba(58, 149, 204, 0.1); }
        .navbar-brand img { height: 60px; }
        .nav-link { color: var(--slate-700) !important; font-weight: 800; padding: 0.6rem 1.1rem !important; border-radius: 0.75rem; }
        .nav-link:hover, .nav-link.active {
            color: var(--primary-deeper) !important;
            background-color: var(--primary-tint);
        }
        .text-primary { color: var(--primary) !important; }
        .text-primary-deeper { color: var(--primary-deeper) !important; }

        /* Inner Header */
        .policy-header {
            background: linear-gradient(135deg, var(--primary-deeper), var(--primary));
            padding: 5rem 0 4rem; color: var(--white); text-align: center;
            position: relative; overflow: hidden;
        }
        .policy-header::before {
            content: ''; position: absolute; inset: 0;
            background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 30px 30px;
        }
        .policy-header > .container { position: relative; z-index: 2; }
        .policy-header h1 { color: var(--white); }

        /* Card */
        .policy-card {
            background: var(--white);
            border-radius: 1.5rem;
            padding: 4rem;
            border: 1px solid var(--primary-light);
            margin-top: -3rem; margin-bottom: 4rem;
            position: relative; z-index: 3;
            box-shadow: 0 10px 25px -5px rgba(58,149,204,0.15);
        }
        .policy-card h4 {
            font-weight: 900; color: var(--slate-900);
            margin-top: 2.5rem; margin-bottom: 1.25rem;
            display: flex; align-items: center; gap: 0.75rem;
        }
        .policy-card h4 .num {
            display: inline-flex; align-items: center; justify-content: center;
            width: 40px; height: 40px;
            background: var(--primary); color: var(--white);
            border-radius: 12px; font-size: 1.1rem; font-weight: 900;
            flex-shrink: 0;
        }
        .policy-card h4:first-of-type { margin-top: 0; }
        .policy-card p { line-height: 1.85; font-size: 1.08rem; }

        .intro-box {
            background: var(--primary-tint);
            border: 1px solid var(--primary-light);
            border-radius: 1rem; padding: 1.5rem 1.75rem;
            margin-bottom: 2.5rem;
            border-right: 5px solid var(--primary);
        }

        .btn-luxury {
            background: var(--primary); color: var(--white);
            padding: 0.85rem 2rem; font-weight: 800;
            border-radius: 100px; text-decoration: none;
            display: inline-flex; align-items: center; gap: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px -5px rgba(58,149,204,.45);
        }
        .btn-luxury:hover { background: var(--primary-dark); transform: translateY(-3px); color: var(--white); }

        /* Floating buttons */
        .floating-actions { position: fixed; bottom: 25px; left: 25px; z-index: 9990; display: flex; flex-direction: column; gap: 12px; }
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
            .policy-card { padding: 2rem 1.5rem; margin-top: -2rem; }
            .policy-header { padding: 4rem 0 3.5rem; }
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
                <a href="tel:{{ $settings['phone_number'] }}" class="d-flex align-items-center gap-2">
                    <i class="fas fa-phone-alt"></i>
                    <span dir="ltr">{{ $settings['phone_number'] }}</span>
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
                <a href="https://wa.me/{{ $settings['whatsapp_number'] }}" target="_blank" rel="noopener" class="social-mini" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
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
                <li class="nav-item"><a class="nav-link" href="/about">من نحن</a></li>
                <li class="nav-item"><a class="nav-link active" href="/privacy">الخصوصية</a></li>
                <li class="nav-item"><a class="nav-link" href="/terms">الشروط</a></li>
            </ul>
            <a href="/#donations" class="btn btn-luxury px-4 py-2 fs-6">
                <i class="fas fa-hand-holding-heart"></i> تبرع الآن
            </a>
        </div>
    </div>
</nav>

<!-- Header -->
<section class="policy-header">
    <div class="container">
        <i class="fas fa-shield-halved fa-3x mb-3 opacity-75"></i>
        <h1 class="display-4 mb-3">سياسة الخصوصية</h1>
        <p class="lead text-white-50 mx-auto" style="max-width: 700px;">نولي اهتماماً كبيراً بحماية خصوصية متبرعينا وداعمينا، ونلتزم بأعلى معايير الأمان</p>
    </div>
</section>

<div class="container">
    <div class="policy-card">
        <div class="intro-box">
            <p class="mb-0 fs-5"><i class="fas fa-info-circle text-primary me-2"></i> نحن في <strong class="text-primary-deeper">مؤسسة نور البخاري</strong> نولي اهتماماً كبيراً لخصوصية متبرعينا وداعمينا. توضح سياسة الخصوصية هذه كيفية جمعنا للمعلومات، واستخدامها، وحمايتها عند تواصلكم معنا للتبرع أو التطوع.</p>
        </div>

        <h4><span class="num">1</span> جمع المعلومات</h4>
        <p>قد نقوم بجمع بعض المعلومات الأساسية (مثل الاسم، رقم الهاتف، والبريد الإلكتروني) التي تزودوننا بها طواعيةً عبر نموذج التواصل أو الواتساب، بغرض تنسيق التبرعات وتوصيل الإيصالات أو الردّ على الاستفسارات المتعلقة بالمساعدات الإغاثية في صعيد مصر وغزة والسودان.</p>

        <h4><span class="num">2</span> استخدام المعلومات</h4>
        <p>تُستخدم المعلومات حصرياً لتسهيل عمليات التبرع، والتواصل معكم بشأن مشاريعنا (تجهيز القوافل، الإطعام، توفير الماء، الخيام)، وإرسال التحديثات المستمرة لتتأكدوا من وصول مساهماتكم.</p>

        <h4><span class="num">3</span> أمن وحماية المعلومات</h4>
        <p>نتخذ كافة التدابير الأمنية لضمان عدم تسريب بياناتكم الشخصية. لن يتم بيع أو تأجير أو مشاركة بياناتكم مع أي جهة خارجية أو أطراف أخرى تحت أي ظرف من الظروف.</p>

        <h4><span class="num">4</span> التعديلات على هذه السياسة</h4>
        <p>قد نقوم بتحديث سياسة الخصوصية الخاصة بنا من وقت لآخر، وسيتم نشر أي تغييرات جديدة على هذه الصفحة فور اعتمادها.</p>

        <h4><span class="num">5</span> ملفات تعريف الارتباط (Cookies)</h4>
        <p>قد يستخدم موقعنا ملفات تعريف الارتباط لتحسين تجربة التصفح. يمكنكم ضبط متصفحكم لرفض هذه الملفات إذا رغبتم في ذلك، دون أن يؤثر ذلك على إمكانية استخدام الموقع.</p>

        <div class="intro-box mt-5">
            <h4 class="mt-0 mb-3"><i class="fas fa-envelope text-primary"></i> اتصل بنا</h4>
            <p class="mb-3">إذا كانت لديكم أي أسئلة حول سياسة الخصوصية، يرجى التواصل معنا:</p>
            <div class="d-flex flex-wrap gap-3">
                <a href="mailto:Nourelbokhart.eg@gmail.com" class="btn-luxury">
                    <i class="fas fa-envelope"></i> Nourelbokhart.eg@gmail.com
                </a>
                <a href="https://wa.me/{{ $settings['whatsapp_number'] }}" target="_blank" rel="noopener" class="btn-luxury" style="background: #25d366;">
                    <i class="fab fa-whatsapp"></i> واتساب
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Floating Buttons -->
<div class="floating-actions">
    <a href="/#donations" class="floating-btn donate" aria-label="تبرع الآن"><i class="fas fa-hand-holding-heart"></i></a>
    <a href="https://wa.me/{{ $settings['whatsapp_number'] }}" target="_blank" rel="noopener" class="floating-btn whatsapp" aria-label="واتساب"><i class="fab fa-whatsapp"></i></a>
</div>

@include('partials.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
</body>
</html>
