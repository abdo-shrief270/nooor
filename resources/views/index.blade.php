<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>مؤسسة نور البخاري | إغاثة وأمل من الصعيد إلى غزة والسودان</title>
    <meta name="description" content="مؤسسة نور البخاري - مؤسسة إغاثية تعمل من قلب صعيد مصر إلى غزة والسودان عبر تجهيز القوافل الغذائية والخيام وسقيا الماء والإطعام، انطلاقاً من معاهد البخاري الأزهرية.">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('logo.jpg-large-preserve-ratio') }}" type="image/jpeg">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Frameworks -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.rtl.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper/swiper.min.css') }}" />

    <style>
        :root {
            /* الهوية البصرية الرسمية – ألوان مستخرجة من الشعار */
            --primary: #3a95cc;            /* اللبني الأساسي للشعار */
            --primary-rgb: 58 149 204;
            --primary-dark: #3a95cc;       /* درجة أعمق للتمرير والظلال */
            --primary-deeper: #3a95cc;     /* للنصوص العريضة */
            --primary-light: #3a95cc;      /* خلفية لبني فاتح من الشعار */
            --primary-tint: #ecf5f8;       /* أفتح درجة للأقسام */
            --slate-50: #f8fafc;
            --slate-100: #f1f5f9;
            --slate-200: #e2e8f0;
            --slate-700: #334155;
            --slate-900: #0f172a;
            --white: #ffffff;
            --shadow-sm: 0 1px 3px 0 rgb(58 149 204 / 0.08), 0 1px 2px -1px rgb(58 149 204 / 0.08);
            --shadow-md: 0 4px 6px -1px rgb(58 149 204 / 0.12), 0 2px 4px -2px rgb(58 149 204 / 0.10);
            --shadow-lg: 0 10px 25px -5px rgb(58 149 204 / 0.20), 0 8px 10px -6px rgb(58 149 204 / 0.10);
            --radius-lg: 1rem;
            --radius-xl: 1.5rem;
        }

        * { box-sizing: border-box; }

        body {
            font-family: 'Cairo', sans-serif;
            background-color: var(--white);
            color: var(--slate-700);
            overflow-x: hidden;
            line-height: 1.8;
            font-weight: 500;
        }

        /* تنسيق العناوين – عريضة بشكل واضح */
        h1, h2, h3, h4, h5, h6 {
            font-weight: 900;
            color: var(--slate-900);
            letter-spacing: -0.02em;
        }
        .text-primary { color: var(--primary) !important; }
        .text-primary-deeper { color: var(--primary-deeper) !important; }
        .bg-primary-light { background-color: var(--primary-light) !important; }
        .bg-primary-tint { background-color: var(--primary-tint) !important; }

        /* ===== Topbar ===== */
        .topbar {
            background-color: var(--primary);
            color: var(--white);
            font-size: 0.92rem;
            font-weight: 700;
        }
        .topbar a { color: var(--white); text-decoration: none; transition: opacity 0.2s; }
        .topbar a:hover { opacity: 0.85; }
        .topbar .social-mini {
            width: 30px; height: 30px;
            display: inline-flex; align-items: center; justify-content: center;
            background: rgba(255,255,255,0.15); color: var(--white);
            border-radius: 50%; font-size: 0.85rem;
            transition: all 0.3s ease;
        }
        .topbar .social-mini:hover { background: var(--white); color: var(--primary); }

        /* ===== Navbar ===== */
        .navbar {
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            background: rgba(255, 255, 255, 0.92) !important;
            padding: 1rem 0;
            transition: all 0.3s ease;
            border-bottom: 1px solid rgba(58, 149, 204, 0.1);
        }
        .navbar.scrolled {
            padding: 0.6rem 0;
            box-shadow: var(--shadow-md);
            background: rgba(255, 255, 255, 0.98) !important;
        }
        .navbar-brand img {
            height: 64px; width: auto;
            transition: transform 0.3s ease;
        }
        .navbar-brand:hover img { transform: scale(1.05); }
        .nav-link {
            color: var(--slate-700) !important;
            font-weight: 800;
            margin: 0 0.25rem;
            padding: 0.6rem 1.1rem !important;
            border-radius: 0.75rem;
            transition: all 0.2s ease;
            font-size: 1.02rem;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--primary-deeper) !important;
            background-color: var(--primary-tint);
        }

        /* ===== Hero Section (light split layout) ===== */
        .hero-light {
            position: relative;
            background: var(--primary-tint);
            overflow: hidden;
        }
        .hero-main {
            position: relative;
            min-height: 620px;
            display: flex;
            align-items: center;
            padding: 4rem 0 2.5rem;
        }
        /* لوحة الصورة – الجهة اليمنى، تمتد لحافة الشاشة وتذوب في الخلفية */
        /* تم تصغير عرض الصورة لتوسيع المساحة البيضاء على اليسار */
        .hero-photo {
            position: absolute;
            top: 0; bottom: 0; right: 0;
            width: 45%;
            z-index: 1;
        }
        .hero-photo .swiper-container,
        .hero-photo .swiper-wrapper,
        .hero-photo .swiper-slide { height: 100%; }
        .hero-photo .swiper-image {
            width: 100%; height: 100%;
            object-fit: cover;
        }
        /* ذوبان الحافة اليسرى للصورة داخل خلفية القسم */
        .hero-photo::before {
            content: ''; position: absolute; inset: 0;
            z-index: 2; pointer-events: none;
            background: linear-gradient(to right, var(--primary-tint) 4%, rgba(236, 245, 248, 0) 45%);
        }
        /* ذوبان الحافة السفلية قبل شريط الإحصائيات */
        .hero-photo::after {
            content: ''; position: absolute; inset: 0;
            z-index: 2; pointer-events: none;
            background: linear-gradient(to top, var(--primary-tint) 2%, rgba(236, 245, 248, 0) 30%);
        }
        /* ختم الشعار أسفل يمين الصورة */
        .hero-photo-logo {
            position: absolute; z-index: 3;
            bottom: 2rem; right: 2rem;
            width: 150px;
            opacity: 0.92;
            mix-blend-mode: multiply; /* استبدلها بنسخة PNG شفافة للشعار إن توفرت واحذف هذا السطر */
        }
        .hero-copy { position: relative; z-index: 4; }
        .hero-copy h1 {
            /* حجم أصغر محسوب بحيث يشغل العنوان سطراً واحداً بكامل عرض العمود */
            font-size: clamp(2.2rem, 4.4vw, 3.8rem);
            font-weight: 900;
            color: var(--slate-900);
            line-height: 1.25;
            margin-bottom: 1.35rem;
        }
        @media (min-width: 992px) {
            .hero-copy h1 { white-space: nowrap; }
        }
        .hero-copy .hero-heart { color: var(--primary); font-size: 0.85em; }
        .hero-copy .hero-lead {
            color: #52627c;
            font-size: 1.3rem;
            font-weight: 600;
            line-height: 1.9;
            margin-bottom: 2.5rem;
            max-width: 34rem;
        }

        /* ===== Hero Mini Slider (بديل الأزرار) ===== */
        .hero-mini-slider {
            position: relative;
            z-index: 4;
            max-width: 34rem;
            margin: 0 auto;
        }
        @media (min-width: 992px) {
            .hero-mini-slider { margin: 0; }
        }
        .hero-mini-swiper {
            overflow: hidden;
        }
        /* حركة انسيابية مستمرة بدلاً من القفز بين الشرائح */
        .hero-mini-swiper .swiper-wrapper {
            transition-timing-function: linear !important;
            align-items: center;
        }
        .hero-mini-swiper .swiper-slide {
            width: 240px;               /* عرض كل صورة — الصور تظهر بجانب بعضها */
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 16px 32px -20px rgba(58, 149, 204, 0.55);
            border: 1px solid rgba(58, 149, 204, 0.12);
        }
        .hero-mini-swiper .swiper-slide img {
            height: 180px;
            display: block;
        }
        @media (max-width: 991px) {
            .hero-mini-swiper .swiper-slide { width: 220px; }
            .hero-mini-swiper .swiper-slide img { height: 165px; }
        }
        @media (max-width: 575px) {
            .hero-mini-slider { max-width: 100%; }
            .hero-mini-swiper .swiper-slide { width: 180px; }
            .hero-mini-swiper .swiper-slide img { height: 140px; }
        }

        /* شريط الإحصائيات داخل الهيرو */
        .hero-stats-wrap { position: relative; z-index: 5; padding-bottom: 4.5rem; }
        .hero-stats {
            background: var(--white);
            border: 1px solid rgba(58, 149, 204, 0.14);
            border-radius: var(--radius-xl);
            box-shadow: 0 30px 60px -25px rgba(58, 149, 204, 0.4);
            padding: 2.25rem 1rem;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
        }
        .hero-stat { text-align: center; padding: 0.4rem 1.1rem; }
        .hero-stat:not(:first-child) { border-inline-start: 1px solid var(--slate-200); }
        .hero-stat-icon { font-size: 1.35rem; color: var(--primary); margin-bottom: 0.65rem; }
        .hero-stat-num {
            font-size: 1.85rem; font-weight: 900;
            color: var(--slate-900);
            line-height: 1.15; margin-bottom: 0.4rem;
            letter-spacing: -0.02em;
        }
        .hero-stat-label {
            font-size: 0.95rem; font-weight: 700;
            color: #47586f; line-height: 1.6;
        }

        @media (max-width: 1199px) {
            .hero-photo { width: 42%; }
        }
        @media (max-width: 991px) {
            .hero-main { display: block; min-height: auto; padding: 0 0 2.5rem; }
            .hero-photo {
                position: relative;
                width: 100%; height: 340px;
                margin-bottom: 2rem;
            }
            .hero-photo::before { display: none; }
            .hero-photo-logo { width: 96px; bottom: 1rem; right: 1rem; }
            .hero-stats {
                grid-template-columns: repeat(2, 1fr);
                row-gap: 1.5rem;
                padding: 1.75rem 0.75rem;
            }
            .hero-stat { border-inline-start: none !important; }
            .hero-stat:first-child {
                grid-column: 1 / -1;
                padding-bottom: 1.25rem;
                border-bottom: 1px solid var(--slate-200);
            }
            .hero-stats-wrap { padding-bottom: 3rem; }
        }

        /* ===== Section Styling ===== */
        .section-padding { padding: 6rem 0; }
        .bg-slate { background-color: var(--slate-50); }
        .section-header { margin-bottom: 4rem; }
        .section-title { font-size: 2.85rem; margin-bottom: 1.25rem; font-weight: 900; }
        .section-line {
            width: 90px; height: 6px;
            background: linear-gradient(90deg, var(--primary), var(--primary-dark));
            border-radius: 100px; margin: 0 auto 1.5rem;
        }

        /* ===== Buttons ===== */
        .btn-luxury {
            background: var(--primary); color: var(--white);
            padding: 0.95rem 2.2rem; font-size: 1.1rem; font-weight: 800;
            border-radius: 100px; border: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px -5px rgba(58, 149, 204, 0.45);
            display: inline-flex; align-items: center; gap: 0.6rem;
            text-decoration: none;
        }
        .btn-luxury:hover {
            background: var(--primary-dark); transform: translateY(-3px);
            box-shadow: 0 15px 30px -5px rgba(58, 149, 204, 0.55); color: var(--white);
        }
        .btn-luxury-outline {
            background: transparent; color: var(--white);
            border: 2px solid rgba(255,255,255,0.5);
            padding: 0.95rem 2.2rem; font-size: 1.1rem; font-weight: 800;
            border-radius: 100px; transition: all 0.3s ease;
            backdrop-filter: blur(4px); text-decoration: none;
            display: inline-flex; align-items: center; gap: 0.6rem;
        }
        .btn-luxury-outline:hover { background: rgba(255,255,255,0.15); border-color: var(--white); color: var(--white); }

        /* ===== About Brief – النشاط والمقر ===== */
        .about-brief {
            background: linear-gradient(135deg, var(--primary-tint) 0%, var(--white) 100%);
            border-radius: var(--radius-xl);
            padding: 3.5rem;
            border: 1px solid var(--primary-light);
            box-shadow: var(--shadow-sm);
        }
        .scope-badge {
            display: inline-flex; align-items: center; gap: 0.5rem;
            background: var(--white); color: var(--primary-deeper);
            padding: 0.6rem 1.2rem; border-radius: 100px;
            font-weight: 800; font-size: 0.95rem;
            border: 2px solid var(--primary-light);
            box-shadow: var(--shadow-sm);
        }

        /* ===== Achievements / Counters ===== */
        .achievements {
            background: linear-gradient(135deg, var(--primary-deeper) 0%, var(--primary-dark) 50%, var(--primary) 100%);
            position: relative; overflow: hidden;
        }
        .achievements::before {
            content: ''; position: absolute; inset: 0;
            background-image: radial-gradient(rgba(255,255,255,0.08) 1px, transparent 1px);
            background-size: 30px 30px;
        }
        .achievements .container { position: relative; z-index: 2; }
        .stat-card {
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,0.18);
            border-radius: var(--radius-xl);
            padding: 2.5rem 1.5rem;
            text-align: center; height: 100%;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .stat-card:hover {
            background: rgba(255,255,255,0.15); transform: translateY(-8px);
            border-color: rgba(255,255,255,0.4);
        }
        .stat-icon-wrap {
            width: 58px; height: 58px;
            background: var(--white); color: var(--primary);
            border-radius: 1.1rem;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.55rem; margin: 0 auto 1.1rem;
            box-shadow: 0 10px 20px -5px rgba(0,0,0,0.3);
        }
        .stat-number {
            font-size: 2.8rem; font-weight: 900; color: var(--white);
            line-height: 1; margin-bottom: 0.5rem; letter-spacing: -0.03em;
        }
        .stat-label { color: rgba(255,255,255,0.92); font-weight: 700; font-size: 1rem; }
        .stat-sub { color: rgba(255,255,255,0.7); font-size: 0.85rem; font-weight: 600; margin-top: 0.4rem; }

        /* ===== Activity Cards (with realistic images) ===== */
        .activity-card-photo {
            background: var(--white);
            border-radius: var(--radius-xl);
            overflow: hidden;
            border: 1px solid var(--slate-200);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            height: 100%;
            display: flex; flex-direction: column;
        }
        .activity-card-photo:hover {
            transform: translateY(-12px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary);
        }
        .activity-card-photo .photo-wrap {
            position: relative; height: 220px; overflow: hidden;
        }
        .activity-card-photo .photo-wrap img {
            width: 100%; height: 100%; object-fit: cover;
            transition: transform 0.5s ease;
        }
        .activity-card-photo:hover .photo-wrap img { transform: scale(1.08); }
        .activity-card-photo .photo-wrap::after {
            content: ''; position: absolute; inset: 0;
            background: linear-gradient(to top, rgba(15, 23, 42, 0.5), transparent 60%);
        }
        .activity-card-photo .photo-icon {
            position: absolute; bottom: -22px; right: 1.5rem;
            width: 50px; height: 50px;
            background: var(--primary); color: var(--white);
            border-radius: 0.9rem;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.25rem; z-index: 3;
            box-shadow: var(--shadow-md);
            border: 4px solid var(--white);
        }
        .activity-card-photo .body {
            padding: 2.25rem 1.75rem 1.75rem; flex: 1;
        }
        .activity-card-photo h4 { font-size: 1.4rem; font-weight: 900; margin-bottom: 0.85rem; }
        .activity-card-photo p { color: var(--slate-700); margin-bottom: 0; font-size: 1.02rem; }
        .palm-activity-card { border-color: rgba(58, 149, 204, 0.32); }
        .palm-activity-card .photo-wrap::after { background: linear-gradient(to top, rgba(29, 106, 152, 0.78), transparent 70%); }
        .palm-activity-card .photo-icon { background: var(--primary); }
        .palm-card-status {
            position: absolute; top: 1rem; left: 1rem; z-index: 2;
            padding: 0.35rem 0.7rem; border-radius: 100px;
            background: rgba(255,255,255,0.94); color: var(--primary-deeper);
            font-size: 0.7rem; font-weight: 900;
            box-shadow: 0 6px 16px -8px rgba(15, 23, 42, 0.4);
        }
        .palm-card-counter {
            position: relative; overflow: hidden;
            margin: 1.15rem 0 0.8rem; padding: 1rem;
            text-align: center; border-radius: 1.1rem;
            background: linear-gradient(135deg, var(--primary-tint), #fff);
            border: 1px solid rgba(58, 149, 204, 0.2);
        }
        .palm-card-counter::after {
            content: '\f1bb';
            position: absolute; left: -0.35rem; bottom: -1.1rem;
            font-family: 'Font Awesome 6 Free'; font-weight: 900;
            color: rgba(58, 149, 204, 0.07); font-size: 5.5rem;
            pointer-events: none;
        }
        .palm-card-counter-label {
            display: block; position: relative; z-index: 1;
            color: #64748b; font-size: 0.72rem; font-weight: 800;
        }
        .palm-card-count {
            position: relative; z-index: 1;
            display: flex; align-items: baseline; justify-content: center; gap: 0.45rem;
            margin-top: 0.35rem; color: var(--slate-900); font-weight: 900;
        }
        .palm-card-count strong {
            color: var(--primary-deeper); font-size: 2.8rem; line-height: 1;
            font-weight: 900; direction: ltr; letter-spacing: -0.04em;
            font-variant-numeric: tabular-nums;
        }
        .palm-card-progress {
            height: 9px; overflow: hidden; margin-bottom: 0.45rem;
            border-radius: 100px; background: var(--slate-200);
        }
        .palm-card-progress-bar {
            width: 0; height: 100%; border-radius: inherit;
            background: linear-gradient(90deg, var(--primary-dark), var(--primary));
            transition: width 1.8s cubic-bezier(0.22, 1, 0.36, 1);
        }
        .palm-card-progress-bar.is-visible { width: 38.4%; }
        .palm-card-meta {
            display: flex; justify-content: space-between;
            color: #64748b; font-size: 0.7rem; font-weight: 800;
            margin-bottom: 1rem;
        }
        .palm-card-btn {
            display: flex; align-items: center; justify-content: center; gap: 0.45rem;
            width: 100%; margin-top: auto; padding: 0.7rem 1rem;
            border-radius: 100px; background: var(--primary); color: #fff;
            text-decoration: none; font-size: 0.9rem; font-weight: 900;
            transition: all 0.25s ease;
            box-shadow: 0 10px 22px -10px rgba(58, 149, 204, 0.8);
        }
        .palm-card-btn:hover { background: var(--primary-dark); color: #fff; transform: translateY(-2px); }
        .palm-activity-card .body { display: flex; flex-direction: column; }

        /* ===== Donation Cards ===== */
        .donation-card {
            background: var(--white);
            border-radius: var(--radius-xl);
            padding: 2.5rem 2rem;
            border: 2px solid var(--slate-200);
            transition: all 0.3s ease;
            text-align: center;
            height: 100%;
        }
        .donation-card:hover { border-color: var(--primary); box-shadow: var(--shadow-lg); }
        .donation-card .id-box {
            background: var(--primary-tint);
            border: 2px dashed var(--primary);
            border-radius: 1rem;
            padding: 1rem 1.25rem;
            display: flex; align-items: center; justify-content: space-between;
            gap: 1rem; flex-wrap: wrap;
        }
        .donation-card .id-text {
            font-family: 'Courier New', monospace;
            color: var(--primary-deeper);
            font-weight: 800; font-size: 1.05rem;
            word-break: break-all;
        }
        .copy-btn {
            background: var(--primary); color: var(--white);
            border: none; padding: 0.5rem 1.1rem;
            border-radius: 100px; font-weight: 700; font-size: 0.9rem;
            transition: all 0.2s; cursor: pointer; white-space: nowrap;
        }
        .copy-btn:hover { background: var(--primary-dark); transform: scale(1.05); }
        .copy-btn.copied { background: #10b981; }

        /* ===== Transparency Section ===== */
        .transparency-card {
            background: var(--white);
            border-radius: var(--radius-xl);
            padding: 2rem;
            border: 1px solid var(--primary-light);
            height: 100%;
            transition: all 0.3s ease;
        }
        .transparency-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-md); }
        .transparency-card .step-num {
            display: inline-flex; align-items: center; justify-content: center;
            width: 50px; height: 50px;
            background: var(--primary); color: var(--white);
            border-radius: 14px;
            font-weight: 900; font-size: 1.4rem;
            margin-bottom: 1.25rem;
        }
        .doc-tile {
            position: relative; border-radius: var(--radius-lg);
            overflow: hidden; height: 280px;
        }
        .doc-tile img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s; }
        .doc-tile:hover img { transform: scale(1.08); }
        .doc-tile .doc-overlay {
            position: absolute; inset: 0;
            background: linear-gradient(to top, rgba(29, 106, 152, 0.95), transparent 60%);
            display: flex; align-items: flex-end;
            padding: 1.5rem; color: var(--white);
        }
        .doc-tile .doc-overlay h5 { color: var(--white); font-size: 1.1rem; margin-bottom: 0; font-weight: 800; }

        /* ===== Gallery ===== */
        .gallery-item {
            border-radius: var(--radius-lg); overflow: hidden;
            height: 250px; box-shadow: var(--shadow-sm);
        }
        .gallery-item img {
            width: 100%; height: 100%; object-fit: cover;
            transition: transform 0.5s ease;
        }
        .gallery-item:hover img { transform: scale(1.1); }

        /* ===== CTA Section ===== */
        .cta-box {
            background: linear-gradient(135deg, var(--primary-deeper) 0%, var(--primary-dark) 50%, var(--primary) 100%);
            border-radius: var(--radius-xl);
            padding: 5rem 3rem;
            color: var(--white);
            position: relative; overflow: hidden;
        }
        .cta-box::before {
            content: ''; position: absolute; top: -20%; right: -10%;
            width: 400px; height: 400px;
            background: rgba(255,255,255,0.06); border-radius: 50%;
        }
        .cta-box::after {
            content: ''; position: absolute; bottom: -30%; left: -15%;
            width: 350px; height: 350px;
            background: rgba(255,255,255,0.04); border-radius: 50%;
        }
        .cta-box .container-inner { position: relative; z-index: 2; }
        .cta-box h2, .cta-box .lead { color: var(--white); }
        .btn-on-dark {
            background: var(--white); color: var(--primary-deeper);
            font-weight: 900; padding: 0.95rem 2.2rem;
            border-radius: 100px; border: none;
            transition: all 0.3s ease; text-decoration: none;
            display: inline-flex; align-items: center; gap: 0.6rem;
        }
        .btn-on-dark:hover { transform: translateY(-3px); color: var(--primary-deeper); box-shadow: 0 10px 25px -5px rgba(0,0,0,0.3); }

        /* ===== Sticky Floating Buttons ===== */
        .floating-actions {
            position: fixed;
            bottom: 25px; left: 25px;
            z-index: 9990;
            align-items: center;
            display: flex; flex-direction: column; gap: 12px;
        }
        .floating-btn {
            width: 62px; height: 62px;
            display: flex; align-items: center; justify-content: center;
            border-radius: 50%; color: var(--white);
            font-size: 1.65rem; text-decoration: none;
            box-shadow: 0 10px 25px -5px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
            position: relative;
            border: 3px solid var(--white);
        }
        .floating-btn:hover { transform: scale(1.12); color: var(--white); }
        .floating-btn.donate { background: var(--primary); }
        .floating-btn.donate:hover { background: var(--primary-dark); }
        .floating-btn.whatsapp { background: #25d366; }
        .floating-btn.whatsapp:hover { background: #128c7e; }
        .floating-btn .label {
            position: absolute; right: 75px;
            background: var(--slate-900); color: var(--white);
            padding: 0.4rem 0.85rem; border-radius: 0.6rem;
            font-size: 0.85rem; font-weight: 700; white-space: nowrap;
            opacity: 0; pointer-events: none; transition: opacity 0.2s;
        }
        .floating-btn:hover .label { opacity: 1; }
        .floating-btn.donate .donate-text {
            font-size: 1.15rem; font-weight: 900; line-height: 1;
            white-space: nowrap;
        }
        @media (max-width: 768px) {
            .floating-btn.donate .donate-text { font-size: 1rem; }
        }

        /* ===== Toast (replaces ugly alert) ===== */
        .copy-toast {
            position: fixed; top: 30px; left: 50%;
            transform: translateX(-50%) translateY(-150%);
            background: var(--primary-deeper); color: var(--white);
            padding: 1rem 1.75rem; border-radius: 100px;
            font-weight: 800; font-size: 1rem;
            box-shadow: var(--shadow-lg);
            z-index: 9999; transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            display: inline-flex; align-items: center; gap: 0.6rem;
        }
        .copy-toast.show { transform: translateX(-50%) translateY(0); }

        /* ===== Responsive ===== */
        @media (max-width: 991px) {
            .navbar-brand img { height: 50px; }
            .navbar-brand h4 { font-size: 1.1rem; }
        }
        @media (max-width: 768px) {
            .section-title { font-size: 2rem; }
            .cta-box { padding: 3rem 1.5rem; }
            .stat-number { font-size: 2.1rem; }
            .about-brief { padding: 2rem 1.5rem; }
            .floating-actions { bottom: 18px; left: 18px; }
            .floating-btn { width: 56px; height: 56px; font-size: 1.4rem; }
        }

        /* ===== Payment Options ===== */
        .payment-option {
            background: var(--slate-50);
            border: 1px solid var(--slate-200);
            border-radius: var(--radius-lg);
            padding: 1.25rem;
            transition: all 0.3s ease;
        }
        .payment-option:hover {
            border-color: var(--primary);
            background: var(--primary-tint);
        }
        .payment-option-header {
            display: flex;
            align-items: center;
            gap: 0.85rem;
            margin-bottom: 1rem;
        }
        .payment-option-icon {
            width: 45px;
            height: 45px;
            background: var(--primary);
            color: var(--white);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }
        .payment-option .btn {
            transition: all 0.3s ease;
            box-shadow: 0 6px 15px -3px rgba(0,0,0,0.15);
        }
        .payment-option .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -3px rgba(0,0,0,0.25);
            filter: brightness(1.05);
        }

        /* Divider "or" */
        .divider-or {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 1.25rem 0;
            color: var(--slate-700);
            font-weight: 800;
            font-size: 0.9rem;
        }
        .divider-or::before,
        .divider-or::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--slate-200);
        }
        .divider-or span {
            padding: 0 1rem;
            background: var(--primary-tint);
            color: var(--primary-deeper);
            border-radius: 100px;
            padding: 0.3rem 1rem;
        }

        /* Mobile responsive tweaks */
        @media (max-width: 576px) {
            .payment-option { padding: 1rem; }
            .payment-option-icon { width: 40px; height: 40px; font-size: 1rem; }
            .payment-option .btn { font-size: 0.9rem; padding: 0.75rem !important; }
        }
    </style>
    <style>
    /* ===== Donation Methods (مطابق للتصميم المرجعي) ===== */
    .donate-head { margin-bottom: 1.5rem; }
    .donate-head-icon {
        font-size: 1.35rem; color: var(--primary);
        line-height: 1; margin-bottom: 0.5rem;
    }
    .donate-head .section-title { font-size: 1.8rem; margin-bottom: 0.4rem; }
    .donate-head-sub {
        color: var(--slate-700); opacity: 0.6;
        font-size: 0.9rem; font-weight: 600; margin: 0;
    }

    .pay-list {
        max-width: 800px;
        margin-inline: auto;
    }

    .pay-row {
        background: var(--white);
        border: 1px solid #eef1f7;
        border-radius: 0.9rem;
        padding: 0.6rem 0.75rem;
        display: flex; align-items: center; gap: 0.65rem;
        margin-bottom: 0.45rem;
        box-shadow: 0 1px 2px rgba(15, 23, 42, 0.04);
        transition: all 0.3s ease;
    }
    .pay-row:hover {
        box-shadow: 0 14px 30px -16px rgba(15, 23, 42, 0.18);
        transform: translateY(-2px);
    }

    .pay-logo {
        width: 50px; height: 50px; flex-shrink: 0;
        border-radius: 0.8rem;
        display: flex; flex-direction: column;
        align-items: center; justify-content: center;
        gap: 0.18rem; padding: 0.35rem;
    }
    .pay-logo img { max-width: 44px; max-height: 32px; object-fit: contain; }
    .pay-logo .pay-logo-ic { font-size: 1.1rem; line-height: 1; }
    .pay-logo .pay-logo-label { font-size: 0.56rem; font-weight: 800; }

    .pay-info { flex: 1; min-width: 0; text-align: start; }
    .pay-badge {
        display: inline-block;
        font-size: 0.66rem; font-weight: 800;
        padding: 0.22rem 0.65rem; border-radius: 100px;
        margin-bottom: 0.3rem;
    }
    .pay-id {
        font-size: 0.95rem; font-weight: 900; color: var(--slate-900);
        line-height: 1.2; margin-bottom: 0.2rem;
        direction: ltr; text-align: start; word-break: break-word;
    }
    .pay-desc {
        color: var(--slate-700); opacity: 0.6;
        font-size: 0.72rem; font-weight: 600; margin: 0;
    }

    .pay-actions {
        display: flex; flex-direction: column; gap: 0.3rem;
        flex-shrink: 0; width: 115px;
    }
    .pay-btn {
        display: inline-flex; align-items: center; justify-content: center;
        gap: 0.35rem; width: 100%;
        padding: 0.38rem 0.5rem; border-radius: 0.6rem;
        font-weight: 800; font-size: 0.7rem;
        border: 1.5px solid transparent; cursor: pointer;
        text-decoration: none; transition: all 0.25s ease;
    }
    .pay-btn i { font-size: 0.88em; }
    .pay-btn-copy { background: var(--white); }
    .pay-btn-copy:hover { transform: translateY(-2px); }
    .pay-btn-copy.copied {
        background: #10b981 !important; border-color: #10b981 !important; color: #fff !important;
    }
    .pay-btn-go { color: #fff; }
    .pay-btn-go:hover { color: #fff; filter: brightness(1.08); transform: translateY(-2px); }

    /* هوية كل وسيلة دفع — خلفية اللوجو والشارة والأزرار من نفس اللون */
    .brand-instapay { --brand: #4f46e5; --brand-tint: #eef0fd; --brand-border: #e0e4fb; }
    .brand-vodafone { --brand: #e60000; --brand-tint: #fdefef; --brand-border: #f8dada; }
    .brand-etisalat { --brand: #43a047; --brand-tint: #edf7eb; --brand-border: #d9edd7; }

    .pay-row .pay-logo { background: var(--brand-tint); border: 1px solid var(--brand-border); }
    .pay-row .pay-badge { background: var(--brand-tint); color: var(--brand); }
    .pay-row .pay-logo-ic,
    .pay-row .pay-logo-label { color: var(--brand); }
    .pay-row .pay-btn-copy { color: var(--brand); border-color: var(--brand); }
    .pay-row .pay-btn-go { background: var(--brand); }

    /* الملاحظة الأمنية أسفل القائمة */
    .pay-note {
        max-width: 800px; margin-top: 1rem;
        background: #ecf3fc;
        border-radius: 1.1rem;
        padding: 0.85rem 1rem;
        display: flex; align-items: center; gap: 0.75rem;
    }
    .pay-note p {
        margin: 0; flex: 1;
        color: #3c4d63; font-weight: 700; font-size: 0.8rem; line-height: 1.7;
    }
    .pay-note p strong { color: var(--slate-900); }
    .pay-note p a { color: var(--primary); font-weight: 800; text-decoration: none; }
    .pay-note p a:hover { text-decoration: underline; }
    .pay-note-icon {
        width: 40px; height: 40px; flex-shrink: 0;
        background: var(--white); color: var(--primary);
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        box-shadow: 0 6px 16px -6px rgba(58, 149, 204, 0.45);
    }
    .pay-note-icon .fa-stack { font-size: 0.58rem; }

    /* Responsive — small phones */
    @media (max-width: 575px) {
        .pay-row { flex-wrap: wrap; gap: 0.45rem; padding: 0.5rem; }
        .pay-logo { width: 42px; height: 42px; border-radius: 0.65rem; }
        .pay-logo img { max-width: 32px; max-height: 24px; }
        .pay-logo .pay-logo-ic { font-size: 0.9rem; }
        .pay-logo .pay-logo-label { font-size: 0.5rem; }
        .pay-id { font-size: 0.85rem; }
        .pay-actions { width: 100%; flex-direction: row; gap: 0.3rem; }
        .pay-btn { padding: 0.32rem 0.4rem; font-size: 0.65rem; }
        .pay-note { padding: 1rem 1.1rem; }
    }

    /* ===== زرار التطوع في الناف بار ===== */
    .nav-cta-volunteer {
        display: inline-flex; align-items: center; gap: 0.5rem;
        background: var(--white); color: var(--primary);
        border: 1.5px solid var(--primary);
        font-weight: 800; transition: all 0.25s ease;
    }
    .nav-cta-volunteer:hover { background: var(--primary); color: var(--white); transform: translateY(-2px); }

    @media (max-width: 991.98px) {
        .navbar-collapse .nav-cta-group {
            flex-direction: column; align-items: stretch !important; width: 100%;
        }
        .navbar-collapse .nav-cta-group .btn { justify-content: center; width: 100%; }
    }

    /* زرارين تبرع/تطوع مصغّرين — يظهروا في الناف بار جنب اللوجو على الموبايل */
    .nav-cta-sm {
        padding: 0.5rem 0.9rem !important;
        font-size: 0.78rem !important;
        gap: 0.35rem !important;
        white-space: nowrap;
    }
    .nav-cta-sm i { font-size: 0.85em; }
    .nav-cta-mobile .nav-cta-donate,
    .nav-cta-mobile .nav-cta-volunteer {
        font-size: 0.78rem !important;
        padding: 0.5rem 0.9rem !important;
    }
    @media (max-width: 380px) {
        .nav-cta-sm { padding: 0.5rem 0.65rem !important; font-size: 0; }
        .nav-cta-sm i { font-size: 0.95rem; }
    }

    /* ===== مودال التطوع ===== */
    .volunteer-modal-content { border-radius: 1.5rem; border: none; }
    .volunteer-btn {
        display: flex; align-items: center; justify-content: center; gap: 0.7rem;
        padding: 1rem; border-radius: 1rem; font-weight: 900; font-size: 1.05rem;
        color: #fff; text-decoration: none; transition: all 0.25s ease;
    }
    .volunteer-btn:hover { transform: translateY(-3px); color: #fff; }
    .volunteer-girls { background: linear-gradient(135deg, #ec4899, #db2777); }
    .volunteer-boys { background: linear-gradient(135deg, #3a95cc, #1d4ed8); }
    .volunteer-info { background: var(--gray-light, #f5f7fa); }
    .volunteer-info ul { list-style: disc; }
    .volunteer-info li { margin-bottom: 0.35rem; }
    .volunteer-info li:last-child { margin-bottom: 0; }

    /* ===== شارة الإشهار بوزارة التضامن ===== */
    .ministry-badge {
        display: inline-flex; align-items: center; gap: 0.35rem;
        font-size: 0.68rem; font-weight: 800; color: var(--primary-deeper);
        background: var(--primary-tint); padding: 0.25rem 0.7rem; border-radius: 100px;
        margin-top: 0.3rem; white-space: nowrap;
    }

    /* ===== تبويبات داخل مصر / خارج مصر + وسائل التبرع ===== */
    .donate-scope-tabs, .donate-method-tabs {
        list-style: none; padding: 0; margin: 0 0 0.85rem; gap: 0.25rem; flex-wrap: wrap;
    }
    .donate-scope-tabs .nav-link,
    .donate-method-tabs .nav-link {
        display: inline-flex; align-items: center; gap: 0.35rem;
        padding: 0.4rem 0.7rem; border-radius: 100px;
        font-weight: 800; font-size: 0.72rem;
        background: var(--white); color: var(--slate-700);
        border: 1.5px solid var(--slate-200);
        transition: all 0.25s ease; cursor: pointer;
    }
    .donate-scope-tabs .nav-link i,
    .donate-method-tabs .nav-link i { font-size: 0.75rem; }
    .donate-method-tabs .nav-link { background: var(--primary-tint); }
    .donate-scope-tabs .nav-link:hover,
    .donate-method-tabs .nav-link:hover { color: var(--primary) !important; border-color: var(--primary); }
    .donate-scope-tabs .nav-link.active,
    .donate-method-tabs .nav-link.active {
        background: var(--primary); color: var(--white) !important; border-color: var(--primary);
        box-shadow: 0 10px 20px -6px rgba(58, 149, 204, 0.45);
    }

    /* ===== تبرع من خلال مندوب ===== */
    .agent-donate-grid {
        max-width: 800px; margin: 0 auto;
        display: grid; grid-template-columns: 1fr 1fr; gap: 0.8rem;
    }
    .agent-donate-card {
        background: var(--white); border: 1px solid #eef1f7; border-radius: 1rem;
        padding: 1.15rem 1rem; text-align: center;
        box-shadow: 0 1px 2px rgba(15, 23, 42, 0.04);
        transition: all 0.3s ease;
    }
    .agent-donate-card:hover { transform: translateY(-4px); box-shadow: 0 14px 30px -16px rgba(15,23,42,0.18); }
    .agent-donate-icon {
        width: 44px; height: 44px; margin: 0 auto 0.65rem;
        background: var(--primary-tint); color: var(--primary);
        border-radius: 50%; display: flex; align-items: center; justify-content: center;
        font-size: 1.05rem;
    }
    .agent-donate-card h5 { font-size: 0.95rem; font-weight: 900; margin-bottom: 0.35rem; }
    .agent-donate-card p { color: var(--slate-700); opacity: 0.7; font-size: 0.78rem; margin-bottom: 0.75rem; }
    .agent-donate-card .btn { font-size: 0.8rem; padding: 0.55rem 0.75rem; }

    /* ===== خارج مصر ===== */
    .outside-egypt-note {
        max-width: 620px; background: var(--white); border-radius: 1.25rem;
        padding: 1.5rem 1.25rem; box-shadow: 0 1px 2px rgba(15,23,42,0.04);
    }
    .outside-egypt-note .pay-note-icon {
        width: 44px; height: 44px; font-size: 1.05rem;
        background: var(--primary-tint); color: var(--primary);
    }
    .outside-egypt-note h5 { font-size: 0.95rem; }
    .outside-egypt-note p { font-size: 0.8rem; }
    .outside-egypt-note .btn { font-size: 0.8rem; padding: 0.55rem 0.8rem; }

    @media (max-width: 576px) {
        .agent-donate-grid { grid-template-columns: 1fr; }
        .donate-scope-tabs, .donate-method-tabs { gap: 0.2rem; }
        .donate-scope-tabs .nav-link, .donate-method-tabs .nav-link { font-size: 0.62rem; padding: 0.32rem 0.48rem; gap: 0.25rem; }
        .donate-scope-tabs .nav-link i, .donate-method-tabs .nav-link i { font-size: 0.62rem; }
    }

    /* ===== تكبير + هايلايت زرار التبرع ===== */
    .nav-cta-donate {
        font-size: 1.05rem !important;
        padding: 0.9rem 1.9rem !important;
        animation: donateGlow 2s ease-in-out infinite;
    }

.floating-btn.donate {
    width: auto;
    height: auto;
    padding: 1.1rem 1.9rem;
    border-radius: 100px;
    background: var(--primary);
    /* توهّج/هايلايت حوالين الزرار */
    box-shadow:
        0 0 0 6px rgba(58, 149, 204, 0.18),
        0 10px 30px -4px rgba(58, 149, 204, 0.65);
    animation: donateGlow 2s ease-in-out infinite;
}

.floating-btn.donate:hover {
    background: var(--primary-dark);
    transform: scale(1.1);
}

/* نبض التوهّج المستمر */
@keyframes donateGlow {
    0%, 100% {
        box-shadow:
            0 0 0 6px rgba(58, 149, 204, 0.18),
            0 10px 30px -4px rgba(58, 149, 204, 0.55);
    }
    50% {
        box-shadow:
            0 0 0 12px rgba(58, 149, 204, 0.28),
            0 12px 38px -2px rgba(58, 149, 204, 0.8);
    }
}

/* على الموبايل نخليه أصغر شوية */
@media (max-width: 768px) {
    .floating-btn.donate {
        padding: 0.9rem 1.5rem;
    }
}
</style>
</head>
<body>

<!-- ===== Topbar ===== -->
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
                <a href="https://share.google/SdSzquhRAD7qeHS8N" target="_blank" rel="noopener" class="social-mini" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/nourelbukhari?igsh=YWdkcGs5ZHM5ZGxs" target="_blank" rel="noopener" class="social-mini" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://youtube.com/@nourelbukhari?si=mI6WDNPsD9yigjpJ" target="_blank" rel="noopener" class="social-mini" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="https://www.tiktok.com/@nooralbukhari8?_r=1&_t=ZS-98FJwD5HKyL" target="_blank" rel="noopener" class="social-mini" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                <a href="https://wa.me/201055201766" target="_blank" rel="noopener" class="social-mini" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- ===== Navbar ===== -->
<nav id="navbar" class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-3" href="/">
            <img src="{{ asset('logo.jpg-large-preserve-ratio') }}" alt="مؤسسة نور البخاري">
            <div class="d-none d-md-block">
                <h4 class="mb-0 text-primary-deeper">مؤسسة نور البخاري</h4>
                <small class="text-muted fw-bold d-block">الخير لا يعرف حدود</small>
                <span class="ministry-badge"><i class="fas fa-shield-halved"></i> مشهرة برقم 12683 بوزارة التضامن الاجتماعي</span>
            </div>
        </a>
        <div class="d-flex d-lg-none align-items-center gap-2 nav-cta-group nav-cta-mobile">
            <button type="button" class="btn nav-cta-volunteer nav-cta-sm" data-bs-toggle="modal" data-bs-target="#volunteerModal">
                <i class="fas fa-people-group"></i>
                تطوع
            </button>
            <a href="#donations" class="btn btn-luxury nav-cta-donate nav-cta-sm">
                <i class="fas fa-hand-holding-heart"></i>
                تبرع الآن
            </a>
        </div>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="fas fa-bars fa-lg text-primary"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="/">الرئيسية</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">من نحن</a></li>
                <li class="nav-item"><a class="nav-link" href="#achievements">إنجازاتنا</a></li>
                <li class="nav-item"><a class="nav-link" href="#donations">طرق التبرع</a></li>
                <li class="nav-item"><a class="nav-link" href="#transparency">الشفافية</a></li>
            </ul>
            <div class="d-none d-lg-flex align-items-center gap-2 nav-cta-group">
                <button type="button" class="btn nav-cta-volunteer px-3 py-2 fs-6" data-bs-toggle="modal" data-bs-target="#volunteerModal">
                    <i class="fas fa-people-group"></i>
                    تطوع
                </button>
                <a href="#donations" class="btn btn-luxury nav-cta-donate px-4 py-2 fs-6">
                    <i class="fas fa-hand-holding-heart"></i>
                    تبرع الآن
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- ===== Hero Section (light split layout) ===== -->
<section class="hero-light">
    <div class="hero-main">

        {{-- لوحة الصورة (سلايدر متلاشي) + ختم الشعار --}}
        <div class="hero-photo">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @for($i=1; $i<=7; $i++)
                        <div class="swiper-slide"><img src="{{ asset('assets/images/clinic/main_slider_'.$i.'.jpeg') }}" class="swiper-image" alt="مؤسسة نور البخاري - عمل ميداني"></div>
                    @endfor
                </div>
            </div>
            <img src="{{ asset('logo.jpg-large-preserve-ratio') }}" alt="شعار مؤسسة نور البخاري" class="hero-photo-logo">
        </div>

        {{-- النص + السلايدر المصغّر (بديل الأزرار) --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5 ms-lg-auto hero-copy text-center text-lg-start">
                    <h1>الخير لا يعرف حدود <i class="fas fa-heart hero-heart"></i></h1>
                    <p class="hero-lead mx-auto mx-lg-0">معاً نصنع أثراً في حياة المحتاجين في غزة والسودان ومصر.</p>

                    {{-- سلايدر صور مصغّر بدلاً من الأزرار --}}
                    <div class="hero-mini-slider">
                        <div class="swiper-container hero-mini-swiper">
                            <div class="swiper-wrapper">
                                @for($i=1; $i<=5; $i++)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/clinic/slider_'.$i.'.png') }}" alt="مؤسسة نور البخاري - لقطات ميدانية">
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- شريط الإحصائيات --}}
    <div class="container hero-stats-wrap">
        <div class="hero-stats">
            <div class="hero-stat">
                <div class="hero-stat-icon"><i class="fas fa-tree"></i></div>
                <div class="hero-stat-num">وقف النخيل</div>
                <div class="hero-stat-label">مستدام ينمو ويثمر<br>أجراً لا يتقطع</div>
            </div>
            <div class="hero-stat">
                <div class="hero-stat-icon"><i class="fas fa-droplet"></i></div>
                <div class="hero-stat-num" dir="ltr"><span data-count="1000" data-latin data-suffix="+">0+</span></div>
                <div class="hero-stat-label">وصلة مياه<br>صدقة جارية</div>
            </div>
            <div class="hero-stat">
                <div class="hero-stat-icon"><i class="fas fa-campground"></i></div>
                <div class="hero-stat-num" dir="ltr"><span data-count="15000" data-latin data-suffix="+">0+</span></div>
                <div class="hero-stat-label">خيمة<br>تم توزيعها</div>
            </div>
            <div class="hero-stat">
                <div class="hero-stat-icon"><i class="fas fa-utensils"></i></div>
                <div class="hero-stat-num" dir="ltr"><span data-count="700000" data-latin data-suffix="+">0+</span></div>
                <div class="hero-stat-label">وجبة غذائية<br>تم توزيعها</div>
            </div>
            <div class="hero-stat">
                <div class="hero-stat-icon"><i class="fas fa-house"></i></div>
                <div class="hero-stat-num" dir="ltr"><span data-count="800" data-latin data-suffix="+">0+</span></div>
                <div class="hero-stat-label">خيمة تم ترميمها<br>وتأهيلها</div>
            </div>
        </div>
    </div>
</section>

<!-- ===== About Brief – النشاط والمقر ===== -->
<section class="section-padding">
    <div class="container">
        <div class="about-brief">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="scope-badge"><i class="fas fa-mosque"></i> معاهد البخاري الأزهرية</span>
                        <span class="scope-badge"><i class="fas fa-map-marker-alt"></i> التجمع الخامس – فاليو مول 2</span>
                        <span class="scope-badge"><i class="fas fa-globe-africa"></i> داخل وخارج مصر</span>
                    </div>
                    <h2 class="mb-3" style="font-size: 2.4rem;">مؤسسة إغاثية امتدادًا لرسالة <span class="text-primary">الأزهر الشريف</span></h2>
                    <p class="fs-5 mb-4">يتم تجهيز قوافلنا الإغاثية داخل <strong>معاهد البخاري الأزهرية</strong> بكوادر متخصصة وبشفافية تامة، ومن هناك تنطلق إلى المستحقين في صعيد مصر، وقطاع غزة، والشقيقة السودان.</p>
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <div class="d-flex align-items-center gap-2">
                                <i class="fas fa-check-circle text-primary fs-4"></i>
                                <span class="fw-bold">صعيد مصر</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex align-items-center gap-2">
                                <i class="fas fa-check-circle text-primary fs-4"></i>
                                <span class="fw-bold">قطاع غزة</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex align-items-center gap-2">
                                <i class="fas fa-check-circle text-primary fs-4"></i>
                                <span class="fw-bold">جمهورية السودان</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <img src="{{ asset('logo.jpg-large-preserve-ratio') }}" alt="شعار المؤسسة" class="img-fluid" style="max-height: 280px;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Achievements / Counters ===== -->
<section class="section-padding achievements" id="achievements">
    <div class="container">
        <div class="section-header text-center">
            <div class="section-line" style="background: rgba(255,255,255,0.7);"></div>
            <h2 class="section-title text-white">إنجازاتنا بالأرقام</h2>
            <p class="text-white-50 fs-5 mx-auto" style="max-width: 720px;">حصاد جهود فريقنا في إيصال أمانتكم إلى مستحقيها — أرقامٌ موثّقة تعكس أثر تبرعاتكم على أرض الواقع.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-icon-wrap"><i class="fas fa-utensils"></i></div>
                    <div class="stat-number" data-count="730000">0</div>
                    <div class="stat-label">وجبة ساخنة سنوياً</div>
                    <div class="stat-sub">عبر تكيات الإطعام</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-icon-wrap"><i class="fas fa-droplet"></i></div>
                    <div class="stat-number" data-count="5475000">0</div>
                    <div class="stat-label">متر مكعب مياه</div>
                    <div class="stat-sub">سقيا ماء يومية</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-icon-wrap"><i class="fas fa-box"></i></div>
                    <div class="stat-number" data-count="60000">0</div>
                    <div class="stat-label">كرتونة غذائية</div>
                    <div class="stat-sub">طرود متكاملة للأسر</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-icon-wrap"><i class="fas fa-wheat-awn"></i></div>
                    <div class="stat-number" data-count="1350000">0</div>
                    <div class="stat-label">كجم دقيق وبقوليات</div>
                    <div class="stat-sub">للأسر الأكثر احتياجاً</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-icon-wrap"><i class="fas fa-bed"></i></div>
                    <div class="stat-number" data-count="30000">0</div>
                    <div class="stat-label">بطانية</div>
                    <div class="stat-sub">للحماية من البرد القارس</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-icon-wrap"><i class="fas fa-campground"></i></div>
                    <div class="stat-number" data-count="3500">0</div>
                    <div class="stat-label">خيمة</div>
                    <div class="stat-sub">+ ترميم 800 خيمة إضافية</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-icon-wrap"><i class="fas fa-truck-moving"></i></div>
                    <div class="stat-number" data-count="798">0</div>
                    <div class="stat-label">قافلة إغاثية</div>
                    <div class="stat-sub">غذاء وخيام وملابس ومستلزمات طبية</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-icon-wrap"><i class="fas fa-hands-holding-circle"></i></div>
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">ساعة عمل</div>
                    <div class="stat-sub">على مدار الأسبوع</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Activities Section ===== -->
<section class="section-padding" id="activities">
    <div class="container">
        <div class="section-header text-center">
            <div class="section-line"></div>
            <h2 class="section-title">نشاطاتنا الإغاثية</h2>
            <p class="fs-5 mx-auto text-muted" style="max-width: 720px;">نعمل بشفافية وإخلاص لضمان وصول مساعداتكم لمن يستحقها، عبر مشاريع متكاملة موثقة بالصورة.</p>
        </div>

        <div class="row g-4">
            @php
                $projects = [
                    ['تجهيز القوافل الإغاثية', 'fa-truck-moving', 'تجهيز قوافل شاملة للمواد الغذائية، الخيام، البطانيات، والاحتياجات الأساسية.', 11],
                    ['سقيا الماء يومياً', 'fa-droplet', 'مياه عذبة ونقية تصل إلى المستحقين يومياً في مختلف المناطق المتضررة.', 12],
                    ['تكيات الإطعام', 'fa-utensils', 'إعداد وتوزيع الوجبات الساخنة يومياً للأسر النازحة والمتضررة.', 13],
                    ['الطرود الغذائية', 'fa-box', 'توزيع طرود غذائية متكاملة تسد احتياجات الأسر لفترات مستدامة.', 14],
                ];
            @endphp
            <div class="col-md-6 col-lg-3 mx-auto">
                <article class="activity-card-photo palm-activity-card" id="palm-endowment" data-palm-campaign>
                    <div class="photo-wrap">
                        <img src="{{ asset('assets/images/clinic/19.JPG') }}" alt="مشروع العمر - وقف النخيل">
                        <span class="palm-card-status">الحملة مستمرة</span>
                        <div class="photo-icon"><i class="fas fa-tree"></i></div>
                    </div>
                    <div class="body">
                        <h4>مشروع العمر (وقف النخيل)</h4>
                        <p>ساهم في غرس نخلة كصدقة جارية لك أو لمن تحب، بهدف الوصول إلى 3000 نخلة.</p>
                        <div class="palm-card-counter">
                            <span class="palm-card-counter-label">المتبقي من هدف 3,000 نخلة</span>
                            <div class="palm-card-count" aria-live="polite">
                                <strong data-countdown-from="3000" data-countdown-to="1847">3,000</strong>
                                <span>نخلة</span>
                            </div>
                        </div>
                        <div class="palm-card-progress" role="progressbar" aria-label="نسبة اكتمال حملة وقف النخيل" aria-valuemin="0" aria-valuemax="3000" aria-valuenow="1153">
                            <div class="palm-card-progress-bar"></div>
                        </div>
                        <div class="palm-card-meta">
                            <span>تم وقف 1,153</span>
                            <span>38.4%</span>
                        </div>
                        <a href="#donations" class="palm-card-btn"><i class="fas fa-hand-holding-heart"></i> تبرع الآن</a>
                    </div>
                </article>
            </div>
            @foreach($projects as $p)
            <div class="col-md-6 col-lg-3">
                <div class="activity-card-photo">
                    <div class="photo-wrap">
                        <img src="{{ asset('assets/images/clinic/'.$p[3].'.JPG') }}" alt="{{ $p[0] }}">
                        <div class="photo-icon"><i class="fas {{ $p[1] }}"></i></div>
                    </div>
                    <div class="body">
                        <h4>{{ $p[0] }}</h4>
                        <p>{{ $p[2] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section-padding bg-slate" id="donations">
    <div class="container">

        {{-- Header --}}
        <div class="donate-head text-center">
            <div class="donate-head-icon"><i class="fas fa-hand-holding-heart"></i></div>
            <h2 class="section-title">طرق التبرع</h2>
            <p class="donate-head-sub">اختر وسيلة الدفع المناسبة لإتمام التبرع بسهولة وأمان</p>
        </div>

        {{-- داخل / خارج مصر --}}
        <ul class="nav donate-scope-tabs justify-content-center" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#scope-inside" type="button" role="tab">
                    <i class="fas fa-flag"></i> داخل مصر
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#scope-agent" type="button" role="tab">
                    <i class="fas fa-handshake-angle"></i> تبرع من خلال مندوب
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#scope-outside" type="button" role="tab">
                    <i class="fas fa-earth-africa"></i> خارج مصر
                </button>
            </li>
        </ul>

        <div class="tab-content">

            {{-- ===== داخل مصر ===== --}}
            <div class="tab-pane fade show active" id="scope-inside" role="tabpanel">
                {{-- انستا والمحافظ الإلكترونية --}}
                <div class="pay-list">

                            {{-- InstaPay — Account 1 --}}
                            <div class="pay-row brand-instapay">
                                <div class="pay-logo">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/20/InstaPay_Logo.png" alt="InstaPay">
                                </div>
                                <div class="pay-info">
                                    <span class="pay-badge">حساب InstaPay</span>
                                    <div class="pay-id">noor...albokhre@instapay</div>
                                    <p class="pay-desc">انسخ المعرف واستخدمه في تطبيق InstaPay</p>
                                </div>
                                <div class="pay-actions">
                                    <button type="button" class="pay-btn pay-btn-copy"
                                            onclick="copyId('noor...albokhre@instapay', this)">
                                        نسخ <i class="far fa-copy"></i>
                                    </button>
                                    <a href="https://ipn.eg/S/noor...albokhre/instapay/9P4iwx"
                                       target="_blank" rel="noopener" class="pay-btn pay-btn-go">
                                        تحويل الآن <i class="fas fa-arrow-left"></i>
                                    </a>
                                </div>
                            </div>

                            <!--{{-- InstaPay — Account 2 --}}-->
                            <!--<div class="pay-row brand-instapay">-->
                            <!--    <div class="pay-logo">-->
                            <!--        <img src="https://upload.wikimedia.org/wikipedia/commons/2/20/InstaPay_Logo.png" alt="InstaPay">-->
                            <!--    </div>-->
                            <!--    <div class="pay-info">-->
                            <!--        <span class="pay-badge">حساب InstaPay</span>-->
                            <!--        <div class="pay-id">husseinabdellatif.eg@instapay</div>-->
                            <!--        <p class="pay-desc">انسخ المعرف واستخدمه في تطبيق InstaPay</p>-->
                            <!--    </div>-->
                            <!--    <div class="pay-actions">-->
                            <!--        <button type="button" class="pay-btn pay-btn-copy"-->
                            <!--                onclick="copyId('husseinabdellatif.eg@instapay', this)">-->
                            <!--            نسخ <i class="far fa-copy"></i>-->
                            <!--        </button>-->
                            <!--        <a href="https://ipn.eg/S/husseinabdellatif.eg/instapay/4SGbFV"-->
                            <!--           target="_blank" rel="noopener" class="pay-btn pay-btn-go">-->
                            <!--            تحويل الآن <i class="fas fa-arrow-left"></i>-->
                            <!--        </a>-->
                            <!--    </div>-->
                            <!--</div>-->

                            {{-- Etisalat Cash --}}
                            <div class="pay-row brand-etisalat">
                                <div class="pay-logo">
                                    <i class="fas fa-mobile-screen-button pay-logo-ic"></i>
                                </div>
                                <div class="pay-info">
                                    <span class="pay-badge">Etisalat Cash</span>
                                    <div class="pay-id">01151580439</div>
                                    <p class="pay-desc">انسخ الرقم واستخدمه في تطبيق اتصالات كاش</p>
                                </div>
                                <div class="pay-actions">
                                    <button type="button" class="pay-btn pay-btn-copy"
                                            onclick="copyId('01151580439', this)">
                                        نسخ الرقم <i class="far fa-copy"></i>
                                    </button>
                                    <a href="https://app.etisalat.eg/?appScreens=cash&appScreen=cash&extra=screenId:send_money;dial:01151580439"
                                       target="_blank" rel="noopener" class="pay-btn pay-btn-go">
                                        تحويل الآن <i class="fas fa-arrow-left"></i>
                                    </a>
                                </div>
                            </div>

                            {{-- Vodafone Cash — Account 1 --}}
                            <!--<div class="pay-row brand-vodafone">-->
                            <!--    <div class="pay-logo">-->
                            <!--        <i class="fas fa-mobile-screen-button pay-logo-ic"></i>-->
                            <!--    </div>-->
                            <!--    <div class="pay-info">-->
                            <!--        <span class="pay-badge">Vodafone Cash — الحساب الأول</span>-->
                            <!--        <div class="pay-id">01062720072</div>-->
                            <!--        <p class="pay-desc">انسخ الرقم واستخدمه في تطبيق فودافون كاش</p>-->
                            <!--    </div>-->
                            <!--    <div class="pay-actions">-->
                            <!--        <button type="button" class="pay-btn pay-btn-copy"-->
                            <!--                onclick="copyId('01062720072', this)">-->
                            <!--            نسخ الرقم <i class="far fa-copy"></i>-->
                            <!--        </button>-->
                            <!--        <a href="https://vf.eg/vfcash?id=mt&qrId=Z3zC5u"-->
                            <!--           target="_blank" rel="noopener" class="pay-btn pay-btn-go">-->
                            <!--            تحويل الآن <i class="fas fa-arrow-left"></i>-->
                            <!--        </a>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <!--{{-- Vodafone Cash — Account 2 --}}-->
                            <div class="pay-row brand-vodafone">
                                <div class="pay-logo">
                                    <i class="fas fa-mobile-screen-button pay-logo-ic"></i>
                                </div>
                                <div class="pay-info">
                                    <span class="pay-badge">Vodafone Cash</span>
                                    <div class="pay-id">01055201766</div>
                                    <p class="pay-desc">انسخ الرقم واستخدمه في تطبيق فودافون كاش</p>
                                </div>
                                <div class="pay-actions">
                                    <button type="button" class="pay-btn pay-btn-copy"
                                            onclick="copyId('01055201766', this)">
                                        نسخ الرقم <i class="far fa-copy"></i>
                                    </button>
                                    <a href="https://vf.eg/vfcash?id=mt&qrId=76r1GS"
                                       target="_blank" rel="noopener" class="pay-btn pay-btn-go">
                                        تحويل الآن <i class="fas fa-arrow-left"></i>
                                    </a>
                                </div>
                            </div>

                </div>
            </div>

            {{-- ===== تبرع من خلال مندوب ===== --}}
            <div class="tab-pane fade" id="scope-agent" role="tabpanel">
                <div class="agent-donate-grid">
                            <div class="agent-donate-card">
                                <div class="agent-donate-icon"><i class="fas fa-box-open"></i></div>
                                <h5>تبرع عيني</h5>
                                <p>ملابس، بطاطين، مواد غذائية أو أي مستلزمات عينية — يقوم مندوبنا باستلامها منك مباشرة في الموعد المناسب لك.</p>
                                <a href="https://wa.me/201055201766" target="_blank" rel="noopener" class="btn btn-luxury w-100">
                                    <i class="fab fa-whatsapp"></i> تنسيق الاستلام عبر واتساب
                                </a>
                            </div>
                            <div class="agent-donate-card">
                                <div class="agent-donate-icon"><i class="fas fa-hand-holding-dollar"></i></div>
                                <h5>تبرع مالي</h5>
                                <p>تسليم مبلغ التبرع نقداً في يدك — يصل إليك مندوب مؤسسة نور البخاري بموعد يناسبك.</p>
                                <a href="https://wa.me/201055201766" target="_blank" rel="noopener" class="btn btn-luxury w-100">
                                    <i class="fab fa-whatsapp"></i> طلب زيارة مندوب
                                </a>
                            </div>
                </div>
            </div>

            {{-- ===== خارج مصر ===== --}}
            <div class="tab-pane fade" id="scope-outside" role="tabpanel">
                <div class="outside-egypt-note mx-auto text-center">
                    <div class="pay-note-icon mx-auto mb-3">
                        <i class="fas fa-earth-africa"></i>
                    </div>
                    <h5 class="fw-bold mb-2">قريباً بإذن الله</h5>
                    <p class="text-muted mb-4">نعمل حالياً على تجهيز وسائل تبرع مخصصة للمتبرعين من خارج مصر. لحين إتاحتها، يمكنكم التواصل معنا مباشرة وسنساعدكم في إتمام تبرعكم.</p>
                    <a href="https://wa.me/201055201766" target="_blank" rel="noopener" class="btn btn-luxury">
                        <i class="fab fa-whatsapp"></i> تواصل معنا عبر واتساب
                    </a>
                </div>
            </div>

        </div>

        {{-- Security note --}}
        <div class="pay-note mx-auto">
            <p>
                <strong>تأكد من تحويل المبلغ إلى الحساب الصحيح.</strong><br>
                بعد التحويل، يرجى إرسال
                <a href="https://wa.me/201055201766" target="_blank" rel="noopener">إيصال التحويل</a>
                للتأكيد.
            </p>
            <div class="pay-note-icon">
                <span class="fa-stack">
                    <i class="fas fa-shield fa-stack-2x"></i>
                    <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                </span>
            </div>
        </div>

    </div>
</section>

<!-- ===== Transparency Section ===== -->
<section class="section-padding" id="transparency">
    <div class="container">
        <div class="section-header text-center">
            <div class="section-line"></div>
            <h2 class="section-title">آلية إدارة التبرعات</h2>
            <p class="fs-5 mx-auto text-muted" style="max-width: 720px;">الشفافية ركيزة عملنا — هذه هي الخطوات الموثقة التي تمر بها أمانتكم من لحظة استلامها وحتى وصولها للمستحقين.</p>
        </div>

        <!-- خطوات الإدارة -->
        <div class="row g-4 mb-5">
            <div class="col-md-6 col-lg-3">
                <div class="transparency-card">
                    <div class="step-num">1</div>
                    <h5 class="fw-bold mb-2">الاستلام والتوثيق</h5>
                    <p class="text-muted small mb-0">استلام التبرع وتسجيله رسمياً في سجلات المؤسسة بالتاريخ والمصدر.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="transparency-card">
                    <div class="step-num">2</div>
                    <h5 class="fw-bold mb-2">التجهيز داخل المعهد</h5>
                    <p class="text-muted small mb-0">تجهيز القوافل في معاهد البخاري الأزهرية تحت إشراف الفريق المختص.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="transparency-card">
                    <div class="step-num">3</div>
                    <h5 class="fw-bold mb-2">النقل والتوزيع</h5>
                    <p class="text-muted small mb-0">نقل القوافل لمناطق العمل (الصعيد، غزة, السودان) وتسليمها للمستحقين.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="transparency-card">
                    <div class="step-num">4</div>
                    <h5 class="fw-bold mb-2">التوثيق المرئي</h5>
                    <p class="text-muted small mb-0">توثيق عملية التوزيع بالصور والفيديو ومشاركتها مع الداعمين.</p>
                </div>
            </div>
        </div>

        <!-- توثيق مرئي -->
        <h3 class="text-center mb-4">توثيق ميداني للعمليات الإغاثية</h3>
        <div class="row g-3">
            @php $docs = [['تجهيز القافلة',15],['التحميل والإعداد',16],['التوزيع الميداني',17],['وصول المساعدة',18]]; @endphp
            @foreach($docs as $d)
            <div class="col-md-6 col-lg-3">
                <div class="doc-tile">
                    <img src="{{ asset('assets/images/clinic/'.$d[1].'.JPG') }}" alt="{{ $d[0] }}">
                    <div class="doc-overlay">
                        <h5><i class="fas fa-circle-check me-2"></i> {{ $d[0] }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="https://wa.me/201055201766" target="_blank" rel="noopener" class="btn btn-luxury">
                <i class="fab fa-whatsapp"></i>
                اطلب تقرير التوثيق التفصيلي
            </a>
        </div>
    </div>
</section>

<!-- ===== Gallery ===== -->
<section class="section-padding bg-slate">
    <div class="container">
        <div class="section-header text-center">
            <div class="section-line"></div>
            <h2 class="section-title">معرض الأمل</h2>
            <p class="fs-5 mx-auto text-muted" style="max-width: 720px;">توثيق ميداني لجهود فريقنا في إيصال المساعدات وإغاثة المحتاجين.</p>
        </div>
        <div class="row g-3">
            @for($i=11; $i<=30; $i++)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/clinic/'.$i.'.JPG') }}" alt="نور البخاري - توثيق ميداني">
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<!-- ===== CTA Section ===== -->
<section class="section-padding">
    <div class="container">
        <div class="cta-box text-center">
            <div class="container-inner">
                <h2 class="display-5 fw-bold mb-4">كن شريكاً في صنع التغيير</h2>
                <p class="lead mb-5 opacity-75">تبرعك البسيط قد يعني حياة جديدة لأسرة في غزة أو الصعيد أو السودان. مؤسسة نور البخاري تضمن وصول أمانتكم.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="#donations" class="btn-on-dark">
                        <i class="fas fa-hand-holding-heart"></i>
                        تبرع الآن
                    </a>
                    <a href="https://wa.me/201055201766" target="_blank" rel="noopener" class="btn-luxury-outline">
                        <i class="fab fa-whatsapp"></i>
                        تواصل عبر واتساب
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Sticky Floating Buttons ===== -->
<div class="floating-actions">
    <a href="#donations" class="floating-btn donate" aria-label="تبرع الآن">
        <span class="donate-text">تبرع الآن</span>
    </a>
    <a href="https://wa.me/201055201766" target="_blank" rel="noopener" class="floating-btn whatsapp" aria-label="واتساب">
        <i class="fab fa-whatsapp"></i>
        <span class="label">تواصل واتساب</span>
    </a>
</div>

<!-- ===== Toast ===== -->
<div id="copyToast" class="copy-toast">
    <i class="fas fa-circle-check"></i>
    <span id="toastMsg">تم النسخ بنجاح</span>
</div>

@php
    $volunteerBoysLink = 'https://chat.whatsapp.com/BsgjELyrtkM79oTJKKgDfb';
    $volunteerGirlsLink = 'https://chat.whatsapp.com/GTEWzGXWRgM5SuXOBfrpZj';
    $noorChannelLink = 'https://whatsapp.com/channel/0029VajqhUiDJ6H5bPlsYb2q';
@endphp

<!-- ===== Volunteer Modal ===== -->
<div class="modal fade" id="volunteerModal" tabindex="-1" aria-labelledby="volunteerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content volunteer-modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold" id="volunteerModalLabel">
                    <i class="fas fa-people-group text-primary me-2"></i> انضم لفريق التطوع
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
            </div>
            <div class="modal-body text-center pb-4">
                <p class="text-muted mb-3">اختار الجروب اللي يناسبك:</p>
                <div class="d-flex flex-column gap-3 mb-4">
                    <a href="{{ $volunteerBoysLink }}" target="_blank" rel="noopener" class="volunteer-btn volunteer-boys">
                        <i class="fas fa-person"></i> متطوعين الرجال
                    </a>
                    <a href="{{ $volunteerGirlsLink }}" target="_blank" rel="noopener" class="volunteer-btn volunteer-girls">
                        <i class="fas fa-person-dress"></i> متطوعات البنات
                    </a>
                </div>
                <div class="volunteer-info text-start rounded-3 p-3 mb-3">
                    <p class="fw-bold mb-2">🎯 هنا بننسق:</p>
                    <ul class="mb-0 ps-3">
                        <li>المشاركة في القوافل الخيرية</li>
                        <li>حملات تجهيز وتوزيع المساعدات</li>
                        <li>الأنشطة داخل التجمع الخامس وخارجه</li>
                    </ul>
                </div>
                <a href="{{ $noorChannelLink }}" target="_blank" rel="noopener" class="btn btn-outline-success w-100 mb-3">
                    <i class="fab fa-whatsapp"></i> تابع قناتنا على واتساب للتعرف على مؤسسة نور البخاري
                </a>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')

<!-- ===== Scripts ===== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper/swiper.min.js') }}"></script>
<script>
    // Swiper Sliders
    if (typeof Swiper !== 'undefined') {
        // السلايدر الرئيسي (صورة الهيرو على اليمين)
        new Swiper('.hero-photo .swiper-container', {
            loop: true,
            autoplay: { delay: 5000, disableOnInteraction: false },
            effect: 'fade',
            fadeEffect: { crossFade: true }
        });

        // السلايدر المصغّر — حركة انسيابية مستمرة (الصور بجانب بعضها)
        new Swiper('.hero-mini-swiper', {
            loop: true,
            slidesPerView: 'auto',
            spaceBetween: 14,
            speed: 4000,                 // كلما زاد الرقم كانت الحركة أبطأ
            grabCursor: true,
            freeMode: true,
            freeModeMomentum: false,
            autoplay: {
                delay: 0,                // 0 = تمرير مستمر بلا توقف
                disableOnInteraction: false,
                pauseOnMouseEnter: true  // يتوقف عند مرور الماوس فوقه
            }
        });
    }

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (navbar) {
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        }
    });

    // Toast Notification (يعالج العطل القديم في alert الخاص بـ InstaPay)
    function showToast(message) {
        const toast = document.getElementById('copyToast');
        const msg = document.getElementById('toastMsg');
        msg.textContent = message;
        toast.classList.add('show');
        clearTimeout(window.__toastTimer);
        window.__toastTimer = setTimeout(() => toast.classList.remove('show'), 2400);
    }

    // Universal Copy Function — يعمل حتى بدون HTTPS
    function copyId(text, btn) {
        const success = () => {
            const original = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-check"></i> تم النسخ';
            btn.classList.add('copied');
            showToast('تم النسخ بنجاح: ' + text);
            setTimeout(() => {
                btn.innerHTML = original;
                btn.classList.remove('copied');
            }, 2000);
        };

        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(text).then(success).catch(fallbackCopy);
        } else {
            fallbackCopy();
        }

        function fallbackCopy() {
            const ta = document.createElement('textarea');
            ta.value = text;
            ta.style.position = 'fixed';
            ta.style.left = '-9999px';
            document.body.appendChild(ta);
            ta.select();
            try { document.execCommand('copy'); success(); }
            catch (e) { showToast('تعذر النسخ، يرجى النسخ يدوياً'); }
            document.body.removeChild(ta);
        }
    }

    // Animated Counters
    // data-latin  => أرقام لاتينية (700,000) بدلاً من الهندية — مستخدمة في إحصائيات الهيرو
    // data-suffix => لاحقة تضاف بعد الرقم مثل "+"
    function animateCounter(el) {
        const target = parseInt(el.dataset.count);
        if (isNaN(target)) return;
        const duration = 2200;
        const startTime = performance.now();
        const suffix = el.dataset.suffix || '';
        const locale = el.hasAttribute('data-latin') ? 'en-US' : 'ar-EG';
        const formatter = new Intl.NumberFormat(locale);

        function tick(now) {
            const progress = Math.min((now - startTime) / duration, 1);
            // easing: easeOutExpo
            const eased = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
            const value = Math.floor(target * eased);
            el.textContent = formatter.format(value) + suffix;
            if (progress < 1) requestAnimationFrame(tick);
            else el.textContent = formatter.format(target) + suffix;
        }
        requestAnimationFrame(tick);
    }

    // Trigger counters when stats sections are visible
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.dataset.animated) {
                entry.target.dataset.animated = "1";
                animateCounter(entry.target);
            }
        });
    }, { threshold: 0.4 });

    document.querySelectorAll('[data-count]').forEach(el => counterObserver.observe(el));

    // Palm activity card: count down from the full goal to the mocked remaining total.
    const palmCampaign = document.querySelector('[data-palm-campaign]');
    if (palmCampaign) {
        const palmCounter = palmCampaign.querySelector('[data-countdown-to]');
        const palmProgress = palmCampaign.querySelector('.palm-card-progress-bar');
        const palmObserver = new IntersectionObserver((entries, observer) => {
            if (!entries[0].isIntersecting) return;

            const start = Number(palmCounter.dataset.countdownFrom);
            const end = Number(palmCounter.dataset.countdownTo);
            const duration = 2400;
            const startTime = performance.now();
            const formatter = new Intl.NumberFormat('en-US');

            palmProgress.classList.add('is-visible');

            function tick(now) {
                const progress = Math.min((now - startTime) / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 3);
                palmCounter.textContent = formatter.format(Math.round(start - ((start - end) * eased)));
                if (progress < 1) requestAnimationFrame(tick);
            }

            requestAnimationFrame(tick);
            observer.disconnect();
        }, { threshold: 0.35 });

        palmObserver.observe(palmCampaign);
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
</script>

</body>
</html>
