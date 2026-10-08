<header class="site-header">
    <div class="container header-container">
        <!-- Top Row: Logo, Brand Links & Actions -->
        <div class="header-top">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('asset/images/ucn-logo.png') }}" alt="UCN Logo">
                </a>
            </div>

            <!-- Brand Links in Logo Row (UCN Smart, UCN News, Business) -->
            <div class="header-brand-links">
                <a href="https://ucnsmart.com/?connect=1&source=qr" target="_blank" rel="noopener noreferrer" class="brand-link brand-smart" title="Explore UCN Smart Portal">
                    <span class="brand-dot-pulse"></span>
                    <span class="brand-text">UCN Smart</span>
                    <i class="fa-solid fa-arrow-up-right-from-square brand-ext-icon"></i>
                </a>
                <span class="brand-link-sep">|</span>
                <a href="https://ucnnews.live/" target="_blank" rel="noopener noreferrer" class="brand-link brand-news" title="Visit UCN News Portal">
                    <span class="brand-text">UCN News</span>
                    <i class="fa-solid fa-arrow-up-right-from-square brand-ext-icon"></i>
                </a>
                <span class="brand-link-sep">|</span>
                <a href="{{ route('enterprises.registration') }}" class="brand-link brand-business" title="UCN Business Solutions">
                    <span class="brand-text">Business</span>
                </a>
            </div>

            <div class="header-actions">
                <!-- Yeh teeno buttons sirf DESKTOP par top bar par dikhenge -->
                <!-- 1. Find Your LCO -->
                <a href="{{ route('find_lco') }}"
                    class="action-btn d-none-mobile {{ request()->is('find-lco') ? 'primary' : '' }}">
                    <span class="icon"><i class="fa-solid fa-location-dot"></i></span> Find Your LCO
                </a>

                <!-- 2. New Connection Modal Trigger -->
                <a href="javascript:void(0);" onclick="openNewConnectionModal()"
                    class="action-btn d-none-mobile {{ request()->is('new-connection') ? 'primary' : '' }}">
                    <span class="icon"><i class="fa-solid fa-circle-plus"></i></span> New Connection
                </a>

                <!-- 3. Recharge -->
                <a href="javascript:void(0);" onclick="openRechargeModal()"
                    class="action-btn d-none-mobile {{ request()->is('recharge') ? 'primary' : '' }}">
                    <span class="icon"><i class="fa-solid fa-credit-card"></i></span> Recharge
                </a>

                <!-- Hamburger Toggle Button (Sirf Mobile par dikhega) -->
                <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Navigation Menu & Mobile Dropdown -->
        <nav class="main-navigation" id="mainNav">
            <!-- Ye teeno buttons MOBILE menu open hone par sabse upar dikhenge -->
            <div class="mobile-action-buttons">
                <!-- 1. Find Your LCO -->
                <a href="{{ route('find_lco') }}" class="action-btn {{ request()->is('find-lco') ? 'primary' : '' }}">
                    <span class="icon"><i class="fa-solid fa-location-dot"></i></span> Find Your LCO
                </a>

                <!-- 2. New Connection -->

                <a href="javascript:void(0);" onclick="openNewConnectionModal()"
                    class="action-btn {{ request()->is('new-connection') ? 'primary' : '' }}">
                    <span class="icon"><i class="fa-solid fa-circle-plus"></i></span> New Connection
                </a>

                <!-- 3. Recharge -->
                <a href="javascript:void(0);" onclick="openRechargeModal()"
                    class="action-btn {{ request()->is('recharge') ? 'primary' : '' }}">
                    <span class="icon"><i class="fa-solid fa-credit-card"></i></span> Recharge
                </a>
            </div>

            <ul>
                <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home<span
                            class="heading-line"></span></a></li>
                <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About Us<span
                            class="heading-line"></span></a></li>

                <!-- Broadband Dropdown -->
                <li class="dropdown">
                    <a href="#" class="{{ request()->is('broadband*') ? 'active' : '' }}">
                        Broadband <i class="fa-solid fa-chevron-down dropdown-arrow"></i>
                        <span class="heading-line"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('broadband.new_connection') }}">Book New Connection</a></li>
                        <li><a href="{{ route('broadband.plans') }}">Plans</a></li>
                        <li><a href="{{ route('broadband.my_account') }}">My Account</a></li>
                        <li><a href="{{ route('broadband.parental_control') }}">Parental Control</a></li>
                    </ul>
                </li>

                <!-- IPTV Dropdown -->
                <li class="dropdown nav-smart-item">
                    <a href="#" class="{{ request()->is('iptv*') ? 'active' : '' }}">
                        <span class="nav-smart-tag">NEW</span> IPTV <i
                            class="fa-solid fa-chevron-down dropdown-arrow"></i><span class="heading-line"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('iptv.plans') }}">IPTV Plans (Starts ₹636)</a></li>
                        <li><a href="{{ route('iptv.live-tv-channels') }}">Live TV Channels</a></li>
                        <li><a href="{{ route('iptv.set-top-box') }}">Set Top Box</a></li>
                        <li class="menu-divider" style="border-top: 1px solid #E2E8F0; margin: 4px 0;"></li>
                        <li><a href="https://ucnsmart.com/" target="_blank" style="color: var(--primary-orange); font-weight: 700;"><i class="fa-solid fa-arrow-up-right-from-square"></i> UCN Smart Portal</a></li>
                    </ul>
                </li>

                <!-- Digital TV Dropdown -->
                <li class="dropdown">
                    <a href="#" class="{{ request()->is('digital-tv*') ? 'active' : '' }}">
                        Digital TV <i class="fa-solid fa-chevron-down dropdown-arrow"></i>
                        <span class="heading-line"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('digitaltv.new_connection') }}">Get a New Connection</a></li>
                        <li><a href="{{ route('digitaltv.products') }}">Products</a></li>
                        <li><a href="{{ route('digitaltv.local_channels') }}">Local Channels</a></li>
                    </ul>
                </li>
                <!-- Enterprises Dropdown -->
                <li class="dropdown">
                    <a href="#" class="{{ request()->is('enterprises*') ? 'active' : '' }}">Enterprises <i
                            class="fa-solid fa-chevron-down dropdown-arrow"></i><span class="heading-line"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('enterprises.registration') }}">Online Registration</a></li>
                        <li><a href="{{ route('enterprises.subscriber-corner') }}">Subscriber Corner</a></li>
                        <li><a href="{{ route('pdf.subscriber-form-caf') }}" target="_blank">Subscriber Form</a></li>
                        <li><a href="{{ route('pdf.package-request-form') }}" target="_blank">Package Request Form</a>
                        </li>
                        <li><a href="{{ route('pdf.network-capacity-fees') }}" target="_blank">Network Capacity Fees</a>
                        </li>
                        <li><a href="{{ route('enterprises.broadcasters-packages') }}">Broadcaster's Packages</a></li>
                        <li><a href="{{ route('pdf.ucn-suggested-packages') }}" target="_blank">UCN Suggested
                                Packages</a></li>
                        <li><a href="{{ route('enterprises.fta-channels') }}">FTA Channels</a></li>
                        <li><a href="{{ route('pdf.iptv-channels') }}" target="_blank">IPTV Channels</a></li>
                        <li><a href="{{ route('enterprises.stb-scheme') }}">STB Scheme</a></li>
                        <li><a href="{{ route('footer.compliances') }}">TRAI Compliances</a></li>
                        <li><a href="{{ url('/#faqs') }}">FAQ's</a></li>
                    </ul>
                </li>

                <li><a href="https://ucnnews.live/" target="_blank" class="{{ request()->is('news*') ? 'active' : '' }}">News & Locals<span
                            class="heading-line"></span></a></li>

                <!-- Help & Support Dropdown -->
                <li class="dropdown">
                    <a href="#" class="{{ request()->is('support*') ? 'active' : '' }}">Help & Support <i
                            class="fa-solid fa-chevron-down dropdown-arrow"></i><span class="heading-line"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('help.helpdesk') }}">Helpdesk</a></li>
                        <li><a href="{{ route('help.complaints') }}">Complaints</a></li>
                        <li><a href="{{ route('help.upgradetohd') }}">Upgrade to HD</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>

<script>
    document.querySelectorAll('.main-navigation .dropdown > a').forEach(function(dropdownLink) {
    dropdownLink.addEventListener('click', function(e) {
        if (window.innerWidth <= 768) {
            e.preventDefault();
            let parentLi = this.parentElement;
            parentLi.classList.toggle('open');
        }
    });
});
</script>

<style>
    /* Header Brand Links (UCN Smart, UCN News, Business) in Logo Row */
    .header-brand-links {
        display: inline-flex;
        align-items: center;
        gap: 16px;
        background: #F8FAFC;
        border: 1.5px solid #E2E8F0;
        border-radius: 30px;
        padding: 8px 24px;
        margin-right: auto;
        margin-left: 28px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
        transition: all 0.25s ease;
    }

    .brand-link {
        font-size: 15.5px;
        font-weight: 600;
        color: #334155;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 7px;
        transition: all 0.2s ease;
        white-space: nowrap;
        position: relative;
    }

    .brand-link:hover {
        color: var(--primary-orange, #FD7001);
    }

    .brand-link.brand-smart {
        color: #0F172A;
        font-weight: 700;
    }

    .brand-link.brand-smart:hover {
        color: var(--primary-orange, #FD7001);
    }

    .brand-dot-pulse {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--primary-orange, #FD7001);
        box-shadow: 0 0 8px rgba(253, 112, 1, 0.7);
        display: inline-block;
    }

    .brand-ext-icon {
        font-size: 11.5px;
        color: #94A3B8;
        transition: transform 0.2s ease, color 0.2s ease;
    }

    .brand-link:hover .brand-ext-icon {
        color: var(--primary-orange, #FD7001);
        transform: translate(1px, -1px);
    }

    .brand-link-sep {
        color: #CBD5E1;
        font-size: 15px;
        margin: 0 2px;
        user-select: none;
    }

    .nav-smart-tag {
        background-color: #FF0000;
        color: #FFFF00 !important;
        font-size: 9px;
        font-weight: 800;
        padding: 1px 5px;
        border-radius: 3px;
        margin-right: 4px;
        letter-spacing: 0.5px;
        display: inline-block;
        vertical-align: middle;
        animation: govTextBlink 0.9s steps(1) infinite;
    }

    @keyframes govTextBlink {
        0%, 49.9% {
            opacity: 1;
            visibility: visible;
        }
        50%, 100% {
            opacity: 0;
            visibility: hidden;
        }
    }

    @media (max-width: 991px) {
        .header-top {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: 8px 14px 10px !important;
            gap: 8px;
        }

        .logo img {
            height: 40px !important;
            width: auto;
            margin-left: 0 !important;
        }

        .header-actions {
            margin-left: auto;
        }

        .header-brand-links {
            order: 3;
            width: 100%;
            margin: 4px 0 0 0 !important;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #F8FAFC;
            border: 1px solid #E2E8F0;
            border-radius: 12px;
            padding: 6px 10px;
            gap: 4px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
        }

        .brand-link {
            font-size: 12px;
            padding: 3px 6px;
            gap: 4px;
            flex: 1;
            justify-content: center;
        }

        .brand-dot-pulse {
            width: 5px;
            height: 5px;
        }

        .brand-ext-icon {
            font-size: 9px;
        }

        .brand-link-sep {
            color: #E2E8F0;
            font-size: 11px;
        }
    }

    .site-header {
        background: var(--color-white);
        padding: 0px;
        font-family: 'Poppins', sans-serif;
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 4px 20px var(--shadow-subtle);
        width: 100%;
        max-width: 100%;
        overflow-x: clip;
        box-sizing: border-box;
    }

    .header-container,
    .site-header .container,
    .container-fluid {
        max-width: 1680px;
        width: 100%;
        margin: 0 auto;
        padding-left: clamp(16px, 2.5vw, 40px);
        padding-right: clamp(16px, 2.5vw, 40px);
        box-sizing: border-box;
    }

    .header-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 0;
        width: 100%;
        margin: 0 auto;
        box-shadow: none;
    }

    .logo {
        flex-shrink: 0;
    }

    .logo img {
        height: 52px;
        width: auto;
        margin-left: 0;
    }

    .header-actions {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .action-btn {
        border: 1px solid var(--border-color);
        padding: 7px 14px;
        border-radius: 20px;
        text-decoration: none;
        font-size: 15px;
        color: var(--color-text-main);
        display: flex;
        align-items: center;
        gap: 6px;
        background: var(--color-white);
        white-space: nowrap;
        transition: all 0.2s ease;
    }

    .action-btn.primary {
        background: var(--primary-orange);
        color: var(--color-white);
        border-color: var(--primary-orange);
    }

    /* Desktop View: Hide mobile action container inside nav */
    .mobile-action-buttons {
        display: none;
    }

    .menu-toggle {
        display: none;
        background: none;
        border: none;
        font-size: 22px;
        cursor: pointer;
        color: var(--color-text-main);
        padding: 5px;
    }

    .main-navigation {
        border-top: 1px solid var(--border-light);
        padding-top: 10px;
        padding-bottom: 12px;
        width: 100%;
    }

    .main-navigation ul {
        display: flex;
        list-style: none;
        gap: clamp(14px, 1.8vw, 26px);
        margin: 0;
        padding: 0;
        justify-content: flex-end;
        align-items: center;
        flex-wrap: wrap;
    }

    .main-navigation li {
        position: relative;
    }

    /* 1. Link ko relative rakhein */
    .main-navigation a {
        text-decoration: none;
        color: var(--color-text-main);
        font-size: 15px;
        font-weight: 500;
        transition: color 0.2s;
        position: relative;
        display: inline-block;
        padding-bottom: 5px;
    }

    /* 2. Heading line ko default hide rakhein aur transition dein */
    .heading-line {
        position: absolute;
        bottom: -2px;
        left: 30%;
        transform: translateX(-50%) scaleX(0);
        width: 25px;
        height: 1.5px;
        background: linear-gradient(to right, var(--primary-orange), var(--color-blue));
        border-radius: 2px;
        transition: transform 0.3s ease;
    }

    /* 3. Jab tab .active ho ya uspar :hover ho, tabhi line show ho */
    .main-navigation a.active .heading-line,
    .main-navigation a:hover .heading-line {
        transform: translateX(-50%) scaleX(1);
    }

    .main-navigation a.active,
    .main-navigation a:hover {
        color: var(--primary-orange);
    }

    /* --- DROPDOWN STYLING --- */
    .main-navigation .dropdown {
        position: relative;
    }

    .dropdown-arrow {
        font-size: 10px !important;
        margin-left: 4px;
        transition: transform 0.3s ease;
    }

    .main-navigation .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        background: var(--color-white);
        min-width: 200px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        padding: 10px 0;
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 0;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.3s ease;
        z-index: 100;
        border: 1px solid rgba(0, 0, 0, 0.06);
    }

    .main-navigation .dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .main-navigation .dropdown:hover .dropdown-arrow {
        transform: rotate(180deg);
    }

    .main-navigation .dropdown-menu li {
        width: 100%;
        border: none !important;
        padding: 0 !important;
    }

    .main-navigation .dropdown-menu li a {
        padding: 8px 18px;
        font-size: 13px;
        color: var(--color-text-main);
        width: 82%;
        display: block;
        white-space: nowrap;
        transition: background 0.2s, color 0.2s;
    }

    .main-navigation .dropdown-menu li a:hover {
        background: rgba(255, 122, 21, 0.06);
        color: var(--primary-orange);
    }

    .main-navigation .dropdown-menu .heading-line {
        display: none !important;
    }

    /* --- RESPONSIVE MEDIA QUERIES --- */
    @media (max-width: 1024px) and (min-width: 992px) {
        .header-top {
            padding: 10px 15px;
            gap: 10px;
        }

        .header-brand-links {
            gap: 8px;
            padding: 5px 12px;
            margin-left: 12px;
        }

        .brand-link {
            font-size: 12.5px;
        }

        .main-navigation ul {
            gap: 12px;
            justify-content: space-around;
        }
    }

    @media (max-width: 768px) {
        .header-actions .d-none-mobile {
            display: none !important;
        }

        .menu-toggle {
            display: block;
        }

        .main-navigation {
            display: none;
            width: 100%;
            padding-top: 15px;
        }

        .main-navigation.active {
            display: block;
        }

        .mobile-action-buttons {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding-bottom: 15px;
            margin: 0px auto 10px;
            border-bottom: 1px solid var(--border-light);
            justify-self: center;
        }

        .mobile-action-buttons .action-btn {
            justify-content: center;
            width: 100%;
            padding: 8px 14px;
        }

        .main-navigation ul {
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
            padding-bottom: 10px;
            padding-right: 0;
        }

        .main-navigation li {
            width: 100%;
            border-bottom: 1px solid var(--border-light);
            padding-bottom: 8px;
        }

        /* --- FIX: MOBILE PAR DROPDOWN BY DEFAULT CLOSE RAHEIN --- */
        .main-navigation .dropdown-menu {
            position: relative;
            box-shadow: none;
            border: none;
            padding-left: 15px;

            /* Hidden by default on mobile */
            display: none;
            opacity: 0;
            visibility: hidden;
            transform: none;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, opacity 0.3s ease;
        }

        /* Jab dropdown par active class lagegi tab khulega */
        .main-navigation .dropdown.open .dropdown-menu {
            display: flex;
            opacity: 1;
            visibility: visible;
            max-height: 500px;
            /* Adjust as per content length */
            margin-top: 10px;
        }
    }
</style>

<!-- New Connection Modal Overlay -->
<div id="newConnectionModal" class="ucn-modal-overlay">
    <div class="ucn-modal-dialog">

        <!-- Modal Content Box -->
        <div class="ucn-modal-content">

            <!-- Modal Header -->
            <div class="ucn-modal-header">
                <button type="button" class="ucn-modal-close" onclick="closeNewConnectionModal()">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="ucn-header-icon">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="ucn-header-text">
                    <h2>New Connection</h2>
                    <p>Choose the service you want to connect and we'll get you started.</p>
                </div>
            </div>

            <!-- Modal Body (Cards Grid) -->
            <div class="ucn-modal-body">
                <div class="service-cards-grid">

                    <!-- Card 1: Digital TV -->
                    <div class="service-option-card">
                        <div class="service-icon-box tv-icon">
                            <i class="fa-solid fa-tv"></i>
                        </div>
                        <h3>Digital TV</h3>
                        <p>Enjoy crystal clear picture quality and a wide range of entertainment channels.</p>
                        <a href="{{ route('digitaltv.new_connection') }}" class="service-btn btn-orange">
                            Choose Digital TV <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                    <!-- Card 2: Broadband -->
                    <div class="service-option-card">
                        <div class="service-icon-box broadband-icon">
                            <i class="fa-solid fa-wifi"></i>
                        </div>
                        <h3>Broadband</h3>
                        <p>High speed internet for seamless streaming, gaming and browsing.</p>
                        <a href="{{ route('broadband.plans') }}" class="service-btn btn-blue">
                            Choose Broadband <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                    <!-- Card 3: IPTV -->
                    <div class="service-option-card">
                        <div class="service-icon-box iptv-icon">
                            <i class="fa-solid fa-display"></i>
                        </div>
                        <h3>IPTV</h3>
                        <p>Experience TV over internet with more flexibility and exclusive content.</p>
                        <a href="{{ route('iptv.plans') }}" class="service-btn btn-navy">
                            Choose IPTV <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                </div>

                <!-- Footer Info Strip -->
                <div class="ucn-modal-footer-strip">
                    <div class="strip-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <p>All connections come with reliable service and 24x7 support. We're here to keep you connected.
                    </p>
                </div>

            </div>

        </div>
    </div>
</div>

<script>
    function openNewConnectionModal() {
        document.getElementById('newConnectionModal').classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeNewConnectionModal() {
        document.getElementById('newConnectionModal').classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    window.onclick = function(event) {
        let modal = document.getElementById('newConnectionModal');
        if (event.target === modal) {
            closeNewConnectionModal();
        }
    }
</script>

<style>
    /* --- MODAL OVERLAY & CONTAINER --- */
    .ucn-modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(15, 23, 42, 0.6);
        backdrop-filter: blur(6px);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 99999;
        padding: 0px;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .ucn-modal-overlay.active {
        display: flex;
        opacity: 1;
    }

    .ucn-modal-dialog {
        width: 95%;
        max-width: 950px;
        max-height: 90vh;
        display: flex;
        transform: translateY(20px);
        transition: transform 0.3s ease;
    }

    .ucn-modal-overlay.active .ucn-modal-dialog {
        transform: translateY(0);
    }

    .ucn-modal-content {
        background: #FFFFFF;
        border-radius: 28px;
        display: flex;
        flex-direction: column;
        max-height: 90vh;
        overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        border: 1px solid #E2E8F0;
    }

    /* --- MODAL HEADER WITH LIGHT CIRCLE / CURVED WAVE EFFECT --- */
    .ucn-modal-header {
        background: linear-gradient(135deg, #FF6600, #ae4803);
        padding: 35px 40px;
        color: #fff;
        position: relative;
        display: flex;
        align-items: center;
        gap: 20px;
        overflow: hidden;
        /* Taaki circle header ke bahar na nikle */
    }

    /* Light color circle / half-circle abstract background shape */
    .ucn-modal-header::before {
        content: '';
        position: absolute;
        top: -60px;
        right: -40px;
        width: 320px;
        height: 320px;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.05) 70%);
        border-radius: 50%;
        pointer-events: none;
    }

    .ucn-modal-close {
        position: absolute;
        top: 25px;
        right: 25px;
        background: rgba(255, 255, 255, 0.2);
        border: none;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        color: #fff;
        font-size: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background 0.2s;
        z-index: 2;
    }

    .ucn-modal-close:hover {
        background: rgba(255, 255, 255, 0.4);
    }

    .ucn-header-icon {
        width: 55px;
        height: 55px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        flex-shrink: 0;
        z-index: 1;
    }

    .ucn-header-text {
        z-index: 1;
    }

    .ucn-header-text h2 {
        font-size: 26px;
        font-weight: 700;
        margin: 0 0 5px 0;
    }

    .ucn-header-text p {
        font-size: 14px;
        margin: 0;
        opacity: 0.9;
    }

    /* --- MODAL BODY --- */
    .ucn-modal-body {
        padding: 35px 40px;
        background: #F8FAFC;
        overflow-y: auto;
        flex-grow: 1;
        -webkit-overflow-scrolling: touch;
    }

    .service-cards-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-bottom: 25px;
    }

    .service-option-card {
        background: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 20px;
        padding: 25px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .service-option-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        border-color: #CBD5E1;
    }

    .service-icon-box {
        width: 60px;
        height: 60px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 15px;
    }

    .tv-icon {
        background: #FFF3EC;
        color: #FF6600;
    }

    .broadband-icon {
        background: #E0F2FE;
        color: #0284C7;
    }

    .iptv-icon {
        background: #EEF2FF;
        color: var(--color-blue);
    }

    .service-option-card h3 {
        font-size: 18px;
        font-weight: 700;
        color: #1E293B;
        margin: 0 0 10px 0;
    }

    .service-option-card p {
        font-size: 13px;
        color: #64748B;
        line-height: 1.5;
        margin: 0 0 20px 0;
        flex-grow: 1;
    }

    .service-btn {
        width: 100%;
        padding: 10px 15px;
        border-radius: 10px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: opacity 0.2s;
    }

    .service-btn:hover {
        opacity: 0.9;
    }

    .btn-orange {
        background: #FF6600;
        color: #fff;
    }

    .btn-blue {
        background: #0284C7;
        color: #fff;
    }

    .btn-navy {
        background: var(--color-blue);
        color: #fff;
    }

    /* --- FOOTER STRIP --- */
    .ucn-modal-footer-strip {
        background: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 16px;
        padding: 18px 22px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .strip-icon {
        width: 40px;
        height: 40px;
        background: #FFF3EC;
        color: #FF6600;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
    }

    .ucn-modal-footer-strip p {
        font-size: 13px;
        color: #64748B;
        margin: 0;
        font-weight: 500;
    }

    /* --- RESPONSIVE MEDIA QUERIES --- */
    @media (max-width: 900px) {
        .ucn-modal-content {
            width: 90%;
        }

        .service-cards-grid {
            grid-template-columns: 1fr;
        }

        .ucn-modal-header,
        .ucn-modal-body {
            padding: 25px 20px;
            justify-self: center;
        }

        .ucn-modal-footer-strip {
            flex-direction: column;
            text-align: center;
        }
    }

    /* --- MOBILE RESPONSIVE FIX FOR MODAL HEADER --- */
    @media (max-width: 768px) {
        .ucn-modal-overlay {
            padding: 10px;
            /* Screen ke kinaro se thoda gap rahega */
        }

        .ucn-modal-dialog {
            max-height: 95vh;
        }

        .ucn-modal-header {
            flex-direction: column;
            text-align: center;
            padding: 25px 15px 20px 15px;
            gap: 12px;
            height: 80%
        }

        .ucn-header-icon {
            width: 45px;
            height: 45px;
            font-size: 20px;
            margin: 0 auto;
            /* Icon perfectly center ho jayega */
        }

        .ucn-header-text h2 {
            font-size: 20px;
        }

        .ucn-header-text p {
            font-size: 12px;
            padding: 0 10px;
        }

        .ucn-modal-close {
            top: 12px;
            right: 12px;
            width: 30px;
            height: 30px;
            font-size: 14px;
        }

        .ucn-modal-body {
            padding: 15px;
        }
    }
</style>

<!-- Recharge Modal Overlay -->
<div id="rechargeModal" class="ucn-modal-overlay">
    <div class="ucn-modal-dialog">

        <!-- Modal Content Box -->
        <div class="ucn-modal-content">

            <!-- Modal Header -->
            <div class="ucn-modal-header">
                <button type="button" class="ucn-modal-close" onclick="closeRechargeModal()">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="ucn-header-icon">
                    <i class="fa-solid fa-wallet"></i>
                </div>
                <div class="ucn-header-text">
                    <h2>Recharge</h2>
                    <p>Choose the service you want to recharge and we'll take care of the rest.</p>
                </div>
            </div>

            <!-- Modal Body (2 Cards Grid) -->
            <div class="ucn-modal-body">
                <div class="service-cards-grid-2">

                    <!-- Card 1: Digital TV Recharge -->
                    <div class="service-option-card">
                        <div class="service-icon-box tv-icon">
                            <i class="fa-solid fa-tv"></i>
                        </div>
                        <h3>Digital TV</h3>
                        <p>Recharge your Digital TV connection for uninterrupted entertainment.</p>
                        <a href="{{ route('digitaltv.new_connection') }}" class="service-btn btn-orange">
                            Recharge Digital TV <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                    <!-- Card 2: Broadband Recharge -->
                    <div class="service-option-card">
                        <div class="service-icon-box broadband-icon">
                            <i class="fa-solid fa-wifi"></i>
                        </div>
                        <h3>Broadband</h3>
                        <p>Recharge your Broadband connection for seamless internet experience.</p>
                        <a href="{{ route('broadband.plans') }}" class="service-btn btn-blue">
                            Recharge Broadband <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                </div>

                <!-- Footer Info Strip -->
                <div class="ucn-modal-footer-strip">
                    <div class="strip-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <p>All connections come with reliable service and 24x7 support. We're here to keep you connected.
                    </p>
                </div>

            </div>

        </div>
    </div>
</div>

<script>
    // Functions to open and close Recharge Modal
    function openRechargeModal() {
        document.getElementById('rechargeModal').classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeRechargeModal() {
        document.getElementById('rechargeModal').classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    // Close when clicking outside modal content
    window.onclick = function(event) {
        let rechargeModal = document.getElementById('rechargeModal');
        let connModal = document.getElementById('newConnectionModal');
        if (event.target === rechargeModal) {
            closeRechargeModal();
        }
        if (event.target === connModal) {
            closeNewConnectionModal();
        }
    }
</script>

<style>
    /* --- RECHARGE MODAL 2-GRID SPECIFIC --- */
    .service-cards-grid-2 {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin-bottom: 25px;
    }

    /* --- RESPONSIVE FIX FOR 2-GRID & MOBILE --- */
    @media (max-width: 768px) {
        .service-cards-grid-2 {
            grid-template-columns: 1fr;
        }
    }
</style>
