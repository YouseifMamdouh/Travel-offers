<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }



    /* Upper Header Styles */
    .upper_header {
        /* background-color: #4a90a4; */
        padding: 8px 0;
        font-size: 14px;
    }

    .upper_header_content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .contact_info {
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .contact_item {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .social_img {
        width: 20px;
        height: 20px;
        object-fit: contain;
    }

    .social_icon {
        color: white;
        font-size: 16px;
    }

    .header_link {
        color: white;
        text-decoration: none;
        font-weight: 500;
        transition: opacity 0.3s ease;
    }

    .header_link:hover {
        opacity: 0.8;
    }

    .language_selector {
        display: flex;
        align-items: center;
    }

    .lang_item {
        background-color: white;
        padding: 6px 15px;
        border-radius: 20px;
        border: 2px solid #4a90a4;
    }

    .lang_text {
        color: #4a90a4;
        font-weight: bold;
        font-size: 14px;
    }

    /* Main Header Styles */
    .main_header {
        background-color: white;
        padding: 15px 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .header_content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 50px;
    }

    .brand_logo {
        flex-shrink: 0;
    }

    .logo_img {
        height: 40px;
        width: auto;
    }

    /* Navigation Styles */
    .main_nav {
        flex: 1;
        display: flex;
        /* justify-content: center; */
    }

    .nav_menu {
        display: flex;
        list-style: none;
        gap: 20px;
        align-items: center;
    }

    .nav_menu li {
        position: relative;
    }

    .nav_link {
        color: #333;
        text-decoration: none;
        font-weight: 500;
        font-size: 15px;
        font-weight: 600;
        padding: 10px 0;
        transition: color 0.3s ease;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .nav_link:hover {
        color: #4a90a4;
    }

    /* Dropdown Styles */
    .dropdown {
        position: relative;
    }

    .dropdown_menu {
        position: absolute;
        top: 100%;
        right: 0;
        background: white;
        min-width: 200px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        padding: 10px 0;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease;
        z-index: 1000;
        list-style: none;
    }

    .dropdown:hover .dropdown_menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .dropdown_link {
        display: block;
        padding: 10px 20px;
        color: #333;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .dropdown_link:hover {
        background-color: #f8f9fa;
        color: #4a90a4;
    }

    /* Mobile Toggle */
    .mobile_toggle {
        display: none;
        font-size: 24px;
        color: #333;
        cursor: pointer;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .upper_header_content {
            flex-direction: column;
            gap: 10px;
        }

        .contact_info {
            gap: 15px;
        }

        .main_nav {
            display: none;
        }

        .mobile_toggle {
            display: block;
        }

        .header_content {
            justify-content: space-between;
        }
    }

    @media (max-width: 480px) {
        .contact_info {
            flex-direction: column;
            gap: 10px;
            text-align: center;
        }

        .nav_menu {
            gap: 15px;
            font-size: 14px;
        }
    }

    /* RTL Specific Adjustments */
    [dir="rtl"] .dropdown_menu {
        right: 0;
        left: auto;
    }

    [dir="rtl"] .nav_link i {
        margin-right: 5px;
        margin-left: 0;
    }

    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
        font-weight: 600;
    }

    .dropdown-menu {
        display: none;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.3s ease;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="d-none d-lg-flex align-items-center gap-3 ms-auto">
            <!-- WhatsApp -->
            <a href="https://wa.me/9661800300" target="_blank"
                class="d-flex justify-content-center align-items-center rounded-circle border"
                style="width: 40px; height: 40px; background-color: #fff;">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="whatsapp"
                    style="width: 18px; height: 18px;">
            </a>

            <!-- Language -->
            <div class="language_selector">
                <div class="lang_item" onclick="toggleLanguage()" style="cursor: pointer;">
                    <span class="lang_text" id="langText">en</span>
                </div>
            </div>

            <!-- Phone -->
            <a href="tel:1800300"
                class="d-flex align-items-center gap-2 px-3 py-1 rounded-pill border text-dark text-decoration-none"
                style="font-weight: 600;">
                <span>1800300</span>
                <i class="fas fa-phone"></i>
            </a>
        </div>

        <div dir="rtl" class="collapse navbar-collapse justify-content-center d-lg-flex"
            id="navbarSupportedContent">
            <ul class="navbar-nav nav_menu d-flex align-items-center gap-3">
                <li class="nav-item"><a href="{{ route('user.index') }}" class="nav-link nav_link">الرئيسية</a></li>
                <li class="nav-item"><a href="{{ route('user.about') }}" class="nav-link nav_link">من نحن</a></li>
                <li class="nav-item"><a href="{{ route('user.traveloffers') }}" class="nav-link nav_link">عروض السفر</a></li>

                <li class="nav-item">
                    <a href="{{ route('user.servicesmain') }}" class="nav-link nav_link">خدمات السفر</a>
                </li>

                <li class="nav-item dropdown position-relative">
                    <a style="font-weight: 600" href="{{ route('user.hotels.index') }}" class="nav-link">
                        الوجهات السياحية
                    </a>
                </li>
                <li class="nav-item"><a href="{{ route('user.Airlines') }}" class="nav-link nav_link">خطوط الطيران</a>
                </li>
                <li class="nav-item"><a href="{{ route('user.contact') }}" class="nav-link nav_link">تواصل معنا</a></li>
            </ul>
        </div>

        <a href="/" class="me-auto">
            <img src="{{ asset('front/assets/img/logotop.png') }}" alt="الشعار" class="logo_img"
                style="height: 80px; width: auto; max-width: 100%;">
        </a>

        <button class="navbar-toggler ms-2 d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>

<script>
    function toggleLanguage() {
        const langSpan = document.getElementById('langText');
        langSpan.innerText = (langSpan.innerText === 'en') ? 'ar' : 'en';
    }
</script>
