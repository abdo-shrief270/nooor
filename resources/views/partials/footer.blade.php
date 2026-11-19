<!-- ===== Footer ===== -->
<style>
    .footer {
        background-color: #0f172a;
        color: var(--white, #ffffff);
        padding: 5rem 0 2rem;
        position: relative;
        overflow: hidden;
    }
    .footer::before {
        content: ''; position: absolute; inset: 0;
        background-image: radial-gradient(rgba(58, 149, 204, 0.15) 1px, transparent 1px);
        background-size: 30px 30px;
        opacity: 0.5; pointer-events: none;
    }
    .footer::after {
        content: ''; position: absolute;
        top: 0; right: 0; width: 350px; height: 350px;
        background: radial-gradient(circle, rgba(58,149,204,0.15), transparent 70%);
        pointer-events: none;
    }
    .footer .container { position: relative; z-index: 2; }

    .footer-title {
        color: #ffffff;
        font-weight: 900;
        margin-bottom: 1.75rem;
        position: relative;
        padding-bottom: 1rem;
        font-size: 1.15rem;
    }
    .footer-title::after {
        content: ''; position: absolute;
        bottom: 0; right: 0;
        width: 50px; height: 4px;
        background: #3a95cc; border-radius: 100px;
    }

    .footer-links { list-style: none; padding: 0; }
    .footer-links li { margin-bottom: 0.85rem; }
    .footer-links a {
        color: rgba(255,255,255,0.65);
        text-decoration: none;
        transition: all 0.2s;
        font-weight: 600;
        display: inline-flex; align-items: center; gap: 0.5rem;
    }
    .footer-links a::before {
        content: '\f054';
        font-family: 'Font Awesome 6 Free'; font-weight: 900;
        font-size: 0.7rem; color: #3a95cc;
        transition: transform 0.2s;
    }
    .footer-links a:hover {
        color: #3a95cc;
        padding-right: 0.4rem;
    }
    .footer-links a:hover::before { transform: translateX(-3px); }

    .footer-info-list { list-style: none; padding: 0; }
    .footer-info-list li {
        display: flex; gap: 0.85rem; margin-bottom: 1rem;
        color: rgba(255,255,255,0.7); font-size: 0.95rem;
    }
    .footer-info-list li i {
        color: #3a95cc; margin-top: 0.25rem;
        font-size: 1.05rem; flex-shrink: 0;
    }

    /* Social media icons - prominent */
    .footer-social {
        display: flex; flex-wrap: wrap; gap: 0.65rem;
        margin-top: 1.5rem;
    }
    .social-icon {
        width: 46px; height: 46px;
        background: rgba(255,255,255,0.06);
        color: #ffffff;
        display: inline-flex; align-items: center; justify-content: center;
        border-radius: 12px;
        font-size: 1.2rem;
        transition: all 0.3s;
        text-decoration: none;
        border: 1px solid rgba(255,255,255,0.08);
    }
    .social-icon:hover { transform: translateY(-4px); color: #ffffff; border-color: transparent; }
    .social-icon.facebook:hover { background: #1877f2; }
    .social-icon.instagram:hover { background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); }
    .social-icon.youtube:hover { background: #ff0000; }
    .social-icon.tiktok:hover { background: #000000; border-color: #25f4ee; box-shadow: 2px 2px 0 #fe2c55; }
    .social-icon.whatsapp:hover { background: #25d366; }
    .social-icon.phone:hover { background: #3a95cc; }

    .footer-brand-card {
        background: rgba(58, 149, 204, 0.06);
        border: 1px solid rgba(58, 149, 204, 0.18);
        border-radius: 16px;
        padding: 1.5rem;
    }
    .footer-brand-card img {
        height: 60px; width: auto;
        background: #ffffff; padding: 6px; border-radius: 12px;
    }

    .scope-mini-pill {
        display: inline-flex; align-items: center; gap: 0.4rem;
        background: rgba(58, 149, 204, 0.15);
        color: #d4f3f8;
        padding: 0.3rem 0.8rem; border-radius: 100px;
        font-size: 0.78rem; font-weight: 700;
        border: 1px solid rgba(58, 149, 204, 0.3);
        margin: 0.2rem 0.2rem 0.2rem 0;
    }

    .footer-bottom {
        border-top: 1px solid rgba(255,255,255,0.08);
        margin-top: 4rem; padding-top: 2rem;
        color: rgba(255,255,255,0.5);
    }
    .footer-bottom .heart { color: #ef4444; }

    @media (max-width: 768px) {
        .footer { padding: 3.5rem 0 1.5rem; }
        .footer-bottom { margin-top: 2.5rem; }
    }
</style>

<footer class="footer">
    <div class="container">
        <div class="row g-5">
            <!-- العمود 1: الهوية + السوشيال -->
            <div class="col-lg-4">
                <div class="footer-brand-card mb-4">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <img src="{{ asset('logo.jpg-large-preserve-ratio') }}" alt="مؤسسة نور البخاري">
                        <div>
                            <h4 class="text-white mb-1 fw-bold">مؤسسة نور البخاري</h4>
                            <small class="text-white-50">مؤسسة إغاثية امتدادًا لرسالة الأزهر الشريف</small>
                        </div>
                    </div>
                    <p class="text-white-50 mb-3 small">مؤسسة إغاثية تعمل من قلب <strong class="text-white">معاهد البخاري الأزهرية</strong> على إيصال المساعدات بكل أمانة وشفافية إلى المستحقين داخل وخارج مصر.</p>
                    <div>
                        <span class="scope-mini-pill"><i class="fas fa-mountain-sun"></i> صعيد مصر</span>
                        <span class="scope-mini-pill"><i class="fas fa-dove"></i> غزة</span>
                        <span class="scope-mini-pill"><i class="fas fa-hand-holding-heart"></i> السودان</span>
                    </div>
                </div>

                <h5 class="footer-title">تابعونا على</h5>
                <div class="footer-social">
                    <a href="{{ $settings['facebook_url'] }}" target="_blank" rel="noopener" class="social-icon facebook" aria-label="Facebook" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="{{ $settings['instagram_url'] }}" target="_blank" rel="noopener" class="social-icon instagram" aria-label="Instagram" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="{{ $settings['youtube_url'] }}" target="_blank" rel="noopener" class="social-icon youtube" aria-label="YouTube" title="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="{{ $settings['tiktok_url'] }}" target="_blank" rel="noopener" class="social-icon tiktok" aria-label="TikTok" title="TikTok">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="https://wa.me/{{ $settings['whatsapp_number'] }}" target="_blank" rel="noopener" class="social-icon whatsapp" aria-label="WhatsApp" title="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="tel:{{ $settings['phone_number'] }}" class="social-icon phone" aria-label="اتصل بنا" title="اتصل بنا">
                        <i class="fas fa-phone-alt"></i>
                    </a>
                </div>
            </div>

            <!-- العمود 2: الروابط السريعة -->
            <div class="col-lg-2 col-md-6">
                <h5 class="footer-title">روابط سريعة</h5>
                <ul class="footer-links">
                    <li><a href="/">الرئيسية</a></li>
                    <li><a href="/about">من نحن</a></li>
                    <li><a href="/#achievements">إنجازاتنا</a></li>
                    <li><a href="/#donations">طرق التبرع</a></li>
                    <li><a href="/#transparency">الشفافية</a></li>
                    <li><a href="/privacy">الخصوصية</a></li>
                    <li><a href="/terms">الشروط</a></li>
                </ul>
            </div>

            <!-- العمود 3: التواصل -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title">تواصل معنا</h5>
                <ul class="footer-info-list">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>{{ $settings['address'] }}</span>
                    </li>
                    <li>
                        <i class="fas fa-mosque"></i>
                        <span>التجهيز يتم داخل معاهد البخاري الأزهرية</span>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:{{ $settings['phone_number'] }}" dir="ltr" class="text-white-50 text-decoration-none">{{ $settings['phone_number'] }}</a>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:{{ $settings['email'] }}" class="text-white-50 text-decoration-none">{{ $settings['email'] }}</a>
                    </li>
                </ul>
            </div>

            <!-- العمود 4: ساعات العطاء -->
            <div class="col-lg-3 col-md-12">
                <h5 class="footer-title">ساعات العطاء</h5>
                <p class="text-white-50 small mb-3">نعمل على مدار الساعة لاستقبال وتنظيم القوافل الإغاثية.</p>
                <div class="p-4 rounded-4" style="background: rgba(58,149,204,0.08); border: 1px solid rgba(58,149,204,0.2);">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-white-50"><i class="fas fa-hand-holding-heart me-2" style="color:#3a95cc;"></i> التبرعات</span>
                        <span class="fw-bold" style="color:#3a95cc;">24/7</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-white-50"><i class="fas fa-headset me-2" style="color:#3a95cc;"></i> المساعدة</span>
                        <span class="fw-bold" style="color:#3a95cc;">مفتوح</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-white-50"><i class="fas fa-truck-moving me-2" style="color:#3a95cc;"></i> القوافل</span>
                        <span class="fw-bold" style="color:#3a95cc;">يومياً</span>
                    </div>
                </div>
                <a href="/#donations" class="btn w-100 mt-3 fw-bold" style="background:#3a95cc; color:#fff; padding:0.85rem; border-radius:100px;">
                    <i class="fas fa-hand-holding-heart me-2"></i> تبرع الآن
                </a>
            </div>
        </div>

        <div class="footer-bottom text-center">
            <p class="mb-0">&copy; {{ date('Y') }} <strong class="text-white">مؤسسة نور البخاري</strong>. جميع الحقوق محفوظة. صُنع <i class="fas fa-heart heart"></i> من أجل غزة والصعيد والسودان.</p>
        </div>
    </div>
</footer>
