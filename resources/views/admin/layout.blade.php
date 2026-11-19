<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title') | إدارة نور البخاري</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root{--blue:#1686bd;--navy:#0b2535;--ink:#173042;--muted:#668090;--line:#dce7ed;--bg:#f4f8fa;--white:#fff;--green:#15956a;--danger:#d94343}
        *{box-sizing:border-box}html{scroll-behavior:smooth}body{margin:0;font-family:Cairo,sans-serif;background:var(--bg);color:var(--ink);line-height:1.65}a{text-decoration:none;color:inherit}.shell{min-height:100vh;display:grid;grid-template-columns:280px minmax(0,1fr)}.sidebar{background:linear-gradient(180deg,#0b2535 0%,#081d2a 100%);color:#fff;padding:26px 18px;position:sticky;top:0;height:100vh;display:flex;flex-direction:column}.brand{display:flex;align-items:center;gap:12px;padding:0 8px 24px;border-bottom:1px solid #ffffff1c}.brand img{width:54px;height:54px;object-fit:contain;background:#fff;border-radius:15px;padding:5px}.brand strong{display:block;font-size:1rem}.brand small{display:block;color:#b9ced9}.menu{margin-top:25px;display:grid;gap:7px}.menu a,.logout{display:flex;align-items:center;gap:12px;padding:13px 14px;border-radius:12px;color:#c9d9e2;font-weight:700;border:0;background:none;width:100%;font:inherit;cursor:pointer;transition:.2s ease}.menu a:hover,.menu a.active{color:#fff;background:#ffffff14;transform:translateX(-2px)}.menu a.active{box-shadow:inset -3px 0 0 #70c8eb}.menu i{width:20px;color:#70c8eb}.sidebar>form{margin-top:auto}.logout{margin-top:22px;color:#ffb2b2}.logout:hover{background:#ff6b6b18;color:#fff}.main{min-width:0}.top{height:82px;background:#fffffff2;backdrop-filter:blur(12px);border-bottom:1px solid var(--line);display:flex;align-items:center;justify-content:space-between;padding:0 34px;position:sticky;top:0;z-index:900}.top-heading{display:grid;gap:1px}.top-heading small{color:var(--muted);font-size:.72rem;font-weight:700}.top-heading b{font-size:1.05rem}.top-actions{display:flex;align-items:center;gap:12px}.site-link{display:inline-flex;align-items:center;gap:7px;padding:8px 12px;border:1px solid var(--line);border-radius:10px;color:var(--blue);font-size:.8rem;font-weight:800;background:#fff}.top .user{display:flex;align-items:center;gap:10px;padding-inline-start:12px;border-inline-start:1px solid var(--line)}.avatar{width:38px;height:38px;border-radius:12px;display:grid;place-items:center;background:#dff3fb;color:var(--blue);font-weight:800}.content{width:100%;max-width:1540px;margin:0 auto;padding:32px 36px 64px}.page-head{display:flex;justify-content:space-between;align-items:end;gap:20px;margin-bottom:26px}.page-head h1{margin:0;font-size:1.75rem;line-height:1.35}.page-head p{max-width:760px;margin:6px 0 0;color:var(--muted)}.btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;border:0;border-radius:11px;min-height:42px;padding:10px 17px;font:700 .9rem Cairo;cursor:pointer;transition:.2s ease}.btn:hover{transform:translateY(-1px)}.btn-primary{background:linear-gradient(135deg,var(--blue),#0874a8);color:#fff;box-shadow:0 8px 18px #1686bd22}.btn-light{background:#eaf4f8;color:var(--blue)}.btn-danger{background:#fff0f0;color:var(--danger)}.card{background:#fff;border:1px solid var(--line);border-radius:18px;padding:23px;box-shadow:0 8px 28px #1838490a}.grid{display:grid;gap:20px}.stats{grid-template-columns:repeat(4,minmax(0,1fr))}.stat{display:flex;align-items:center;gap:16px;min-height:108px}.stat-icon{width:52px;height:52px;flex:0 0 auto;border-radius:15px;background:#e6f6fc;color:var(--blue);display:grid;place-items:center;font-size:1.25rem}.stat b{font-size:1.6rem;display:block}.stat span{color:var(--muted);font-size:.85rem}.dashboard-layout{grid-template-columns:minmax(0,1.6fr) minmax(280px,1fr);margin-top:20px}.quick-links .btn{justify-content:flex-start;width:100%}.form-grid{grid-template-columns:repeat(2,minmax(0,1fr))}.field{display:grid;gap:7px;min-width:0}.field.full{grid-column:1/-1}label{font-weight:700;font-size:.87rem}input,textarea,select{width:100%;font:500 .9rem Cairo;border:1px solid #cfdee6;border-radius:10px;padding:11px 12px;background:#fff;color:var(--ink);outline:none;transition:.2s ease}input:hover,textarea:hover,select:hover{border-color:#a9c7d6}input:focus,textarea:focus,select:focus{border-color:var(--blue);box-shadow:0 0 0 3px #1686bd18}textarea{min-height:95px;resize:vertical}.section-title{display:flex;align-items:center;gap:9px;margin:0 0 18px;padding-bottom:14px;border-bottom:1px solid var(--line);font-size:1.05rem}.alert{padding:13px 16px;border-radius:11px;margin-bottom:20px;font-weight:700}.success{background:#e6f8f1;color:#107752}.error{background:#fff0f0;color:#a92d2d}.check{display:flex;gap:9px;align-items:center;min-height:42px}.check input{width:auto;min-height:0}.settings-form{display:grid;gap:20px}.settings-form>.card{margin-top:0!important}.save-bar{position:sticky;bottom:12px;z-index:30;display:flex;justify-content:flex-start;margin-top:0;padding:10px;border:1px solid var(--line);border-radius:14px;background:#ffffffdf;backdrop-filter:blur(10px);box-shadow:0 12px 32px #0b253526}.media-grid{grid-template-columns:repeat(4,minmax(0,1fr))}.media-card{overflow:hidden;padding:0}.media-card img{width:100%;height:170px;object-fit:contain;background:#edf5f8;display:block}.media-body{padding:15px}.media-meta{display:flex;justify-content:space-between;color:var(--muted);font-size:.75rem;margin-bottom:10px}.badge{display:inline-flex;border-radius:99px;padding:4px 9px;font-size:.72rem;font-weight:800;background:#e7f6fb;color:var(--blue)}.badge.off{background:#f1f3f5;color:#7b8790}.actions{display:flex;gap:8px;flex-wrap:wrap;margin-top:12px}.method-list{grid-template-columns:repeat(2,minmax(0,1fr));margin-top:20px}.method{display:grid;grid-template-columns:50px minmax(0,1fr) auto;align-items:center;gap:15px}.method-icon{width:48px;height:48px;border-radius:13px;background:#e8f6fb;color:var(--blue);display:grid;place-items:center}.method h3{margin:0 0 4px;font-size:1rem}.method p{margin:0;color:var(--muted);font-size:.82rem}.edit-panel{position:relative;margin-top:10px;width:min(680px,70vw);max-width:100%}.empty{text-align:center;padding:42px;color:var(--muted)}details>summary{list-style:none;cursor:pointer;font-weight:800;color:var(--blue)}details>summary::-webkit-details-marker{display:none}details>summary::after{content:'+';margin-inline-start:7px}details[open]>summary::after{content:'−'}details[open]>summary{color:#075f8b}.table-card{overflow:hidden}.recent{width:100%;border-collapse:collapse}.recent tr:last-child td{border-bottom:0}.recent td{padding:12px;border-bottom:1px solid var(--line)}.recent img{width:56px;height:44px;object-fit:cover;border-radius:8px}.note{font-size:.8rem;color:var(--muted)}
        .admin-menu-toggle{display:none;border:0;color:#fff;background:#ffffff12;cursor:pointer}
        @media(max-width:1000px){
            .shell{grid-template-columns:1fr}
            .sidebar{height:auto;position:sticky;top:0;z-index:1000;padding:14px 18px;box-shadow:0 8px 24px #071c2940}
            .brand{border:0;padding:0 4px 12px}
            .brand img{width:46px;height:46px;border-radius:12px}
            .menu{grid-template-columns:repeat(5,minmax(0,1fr));margin-top:8px;gap:6px}
            .menu a{justify-content:center;padding:10px 8px;font-size:.78rem;text-align:center}
            .menu a,.logout{justify-content:center}
            .logout{margin-top:10px;padding:9px 12px}
            .top{display:none}
            .content{padding:26px 22px 50px}
            .dashboard-layout,.method-list{grid-template-columns:1fr}
            .stats,.media-grid{grid-template-columns:repeat(2,minmax(0,1fr))}
        }
        @media(max-width:640px){
            .sidebar{padding:9px 10px 8px}
            .brand{min-height:42px;padding:0 2px 7px;padding-inline-end:96px;gap:8px}
            .brand img{width:38px;height:38px;border-radius:10px}
            .brand strong{font-size:.88rem}
            .brand small{font-size:.68rem}
            .sidebar>form{position:absolute;top:9px;left:10px}
            .logout{width:38px;height:38px;margin:0;padding:0;border-radius:10px;background:#ffffff12;font-size:0}
            .logout i{font-size:.9rem}
            .admin-menu-toggle{display:grid;place-items:center;position:absolute;top:9px;left:56px;width:38px;height:38px;border-radius:10px;font-size:.95rem}
            .menu{display:none;grid-template-columns:1fr;gap:6px;overflow:visible;margin-top:6px;padding:7px 0 2px;border-top:1px solid #ffffff14}
            .menu.is-open{display:grid}
            .menu a{width:100%;min-height:42px;justify-content:flex-start;padding:9px 12px;border:1px solid #ffffff0d;border-radius:10px;white-space:nowrap;font-size:.8rem}
            .menu a.active{border-color:#ffffff24}
            .menu i{width:20px}
            .content{padding:18px 12px 42px}
            .page-head{align-items:start;flex-direction:column;gap:10px;margin-bottom:18px}
            .page-head h1{font-size:1.4rem;line-height:1.35}
            .page-head p{font-size:.85rem;line-height:1.7}
            .card{padding:16px;border-radius:14px}
            .section-title{font-size:1rem;margin-bottom:15px;padding-bottom:11px}
            .form-grid,.stats,.media-grid{grid-template-columns:minmax(0,1fr);gap:14px}
            .dashboard-layout,.method-list{grid-template-columns:minmax(0,1fr)}
            .grid{gap:14px}
            input,textarea,select{font-size:1rem;min-height:46px;padding:10px 11px}
            textarea{min-height:105px}
            .btn{min-height:44px;padding:10px 14px}
            .field.full>.btn,.field.full>button{width:100%}
            .stat{gap:12px}
            .stat-icon{width:46px;height:46px;flex:0 0 auto}
            .stat b{font-size:1.35rem}
            .media-card{padding:0}
            .media-card img{height:auto;aspect-ratio:16/9;object-fit:contain;background:#edf5f8}
            .media-body{padding:14px}
            .media-meta{font-size:.72rem}
            details summary{min-height:42px;display:flex;align-items:center;padding:8px 0}
            details[open]>form{padding-top:4px}
            .method{grid-template-columns:42px minmax(0,1fr);padding:15px}
            .method>.actions{grid-column:1/-1}
            .edit-panel{width:100%;max-width:100%}
            .actions{display:grid;grid-template-columns:1fr 1fr;width:100%}
            .actions .btn,.actions form,.actions form .btn{width:100%}
            .table-card{overflow-x:auto;-webkit-overflow-scrolling:touch}
            .recent{min-width:560px}
            .alert{font-size:.85rem;padding:11px 13px}
            .empty{padding:30px 16px}
            .save-bar{bottom:8px;padding:8px}
            .save-bar .btn{width:100%}
        }
    </style>
</head>
<body><div class="shell">
    <aside class="sidebar">
        <a class="brand" href="{{ route('admin.dashboard') }}"><img src="{{ asset('logo.jpg-large-preserve-ratio') }}" alt=""><span><strong>نور البخاري</strong><small>لوحة إدارة الموقع</small></span></a>
        <button class="admin-menu-toggle" type="button" aria-controls="adminMenu" aria-expanded="false" aria-label="فتح قائمة الإدارة"><i class="fas fa-bars"></i></button>
        <nav class="menu" id="adminMenu">
            <a class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}"><i class="fas fa-chart-pie"></i>الرئيسية</a>
            <a class="{{ request()->routeIs('admin.settings.*') ? 'active' : '' }}" href="{{ route('admin.settings.edit') }}"><i class="fas fa-sliders"></i>بيانات الموقع</a>
            <a class="{{ request()->routeIs('admin.images.*') ? 'active' : '' }}" href="{{ route('admin.images.index') }}"><i class="fas fa-images"></i>إدارة الصور</a>
            <a class="{{ request()->routeIs('admin.donations.*') ? 'active' : '' }}" href="{{ route('admin.donations.index') }}"><i class="fas fa-hand-holding-heart"></i>طرق التبرع</a>
            <a href="{{ route('home') }}" target="_blank"><i class="fas fa-arrow-up-right-from-square"></i>عرض الموقع</a>
        </nav>
        <form method="POST" action="{{ route('admin.logout') }}">@csrf<button class="logout"><i class="fas fa-right-from-bracket"></i>تسجيل الخروج</button></form>
    </aside>
    <main class="main"><header class="top"><div class="top-heading"><small>لوحة إدارة الموقع</small><b>@yield('title')</b></div><div class="top-actions"><a class="site-link" href="{{ route('home') }}" target="_blank"><i class="fas fa-arrow-up-right-from-square"></i>عرض الموقع</a><div class="user"><div class="avatar">{{ mb_substr(auth()->user()->name,0,1) }}</div><span>{{ auth()->user()->name }}</span></div></div></header><div class="content">
        @if(session('success'))<div class="alert success"><i class="fas fa-circle-check"></i> {{ session('success') }}</div>@endif
        @if($errors->any())<div class="alert error"><strong>يرجى مراجعة البيانات:</strong><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
        @yield('content')
    </div></main>
</div><script>
    const adminMenuToggle = document.querySelector('.admin-menu-toggle');
    const adminMenu = document.getElementById('adminMenu');

    adminMenuToggle?.addEventListener('click', () => {
        const isOpen = adminMenu.classList.toggle('is-open');
        adminMenuToggle.setAttribute('aria-expanded', String(isOpen));
        adminMenuToggle.setAttribute('aria-label', isOpen ? 'إغلاق قائمة الإدارة' : 'فتح قائمة الإدارة');
        adminMenuToggle.querySelector('i').className = isOpen ? 'fas fa-xmark' : 'fas fa-bars';
    });
</script></body></html>
