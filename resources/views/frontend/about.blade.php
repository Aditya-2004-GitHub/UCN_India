@extends('frontend.layout.app')

@section('title', 'UCN India - About Us')

@section('content')
<div class="about-page-wrapper">
    <!-- Hero Banner Section -->
    <section class="about-hero-section">
        <div class="container-fluid hero-container">
            <div class="about-hero-content">
                <div class="about-breadcrumb">
                    <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <span>About Us</span>
                </div>
                <span class="sub-heading-orange">ABOUT US</span>
                <h1>Connecting People. <br><span class="highlight-lives">Empowering Lives.</span></h1>
                <p>UCN's India's trusted digital service provider <br>delivering ultra-fast internet, entertainment,<br>
                    and smart solutions for homes and businesses</p>
                <div class="hero-bottom-line"></div>
            </div>
            <div class="about-hero-graphic">
                <!-- Background Blob Shape Image -->
                <img src="{{ asset('asset/images/about/about-bg.png') }}" alt="Blob Background" class="blob-bg-img">
                <!-- Upar aane wali main image -->
                {{-- <img src="{{ asset('asset/images/ucn-logo.png') }}" alt="About Main Image" class="hero-main-img"> --}}
                <div class="blob-floating-icon"><i class="fa-solid fa-users"></i></div>
            </div>
        </div>
    </section>

    <!-- Who We Are Section -->
    <section class="who-we-are-section">
        <div class="container-fluid who-container">
            <div class="who-we-are-grid">
                <div class="who-text-content">
                    <span class="sub-heading-purple">Who We Are</span>
                    <div class="hero-bottom-line"></div>
                    <p>UCN is a leading digital service provider based in all over India.</p>
                    <p>We are committed to delivering world-class broadband, entertainment, and communication solutions
                        to our customers with reliability, innovation, and dedication.</p>
                    <p>With a customer-first approach and cutting-edge technology, we continue to redefine digital
                        experiences for thousands of homes and business.</p>
                </div>
                <!-- 4 Stat Cards Grid -->
                <div class="about-stats-grid">
                    <div class="about-stat-card">
                        <div class="stat-icon-box icon-purple"><i class="fa-solid fa-users"></i></div>
                        <div class="stat-info">
                            <strong style="color: var(--color-purple);">2L+</strong>
                            <span>Happy Customers</span>
                        </div>
                    </div>
                    <div class="about-stat-card">
                        <div class="stat-icon-box icon-orange"><i class="fa-solid fa-city"></i></div>
                        <div class="stat-info">
                            <strong style="color: var(--primary-orange);">150+</strong>
                            <span>Areas Connected</span>
                        </div>
                    </div>
                    <div class="about-stat-card">
                        <div class="stat-icon-box icon-green"><i class="fa-solid fa-gauge-high"></i></div>
                        <div class="stat-info">
                            <strong style="color: var(--color-green);">300+ mbps</strong>
                            <span>Top Speed</span>
                        </div>
                    </div>
                    <div class="about-stat-card">
                        <div class="stat-icon-box icon-red"><i class="fa-solid fa-shield-halved"></i></div>
                        <div class="stat-info">
                            <strong style="color: var(--color-red);">99.9%</strong>
                            <span>Uptime Guarantee</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Do Section -->
    <section class="what-we-do-section">
        <div class="container-fluid what-container">
            <div class="section-header-center">
                <span class="sub-heading-purple">What We Do</span>
                <div class="hero-bottom-line" style="margin: 15px auto 0;"></div>
                <p style="margin-top: 15px;">UCN offers a wide range of digital services designed to keep you connected,
                    entertained, and
                    productive every day.</p>
            </div>
            <div class="what-we-do-grid">
                <div class="what-card">
                    <div class="touch-icon icon-purple"><i class="fa-solid fa-wifi"></i></div>
                    <h3>Broadband</h3>
                    <p>Ultra-fast & reliable internet for seamless connectivity.</p>
                </div>
                <div class="what-card">
                    <div class="touch-icon icon-red"><i class="fa-solid fa-tv"></i></div>
                    <h3>IPTV</h3>
                    <p>Ultra-fast & reliable internet for seamless connectivity.</p>
                </div>
                <div class="what-card">
                    <div class="touch-icon icon-orange"><i class="fa-solid fa-phone-volume"></i></div>
                    <h3>IP Phone</h3>
                    <p>Ultra-fast & reliable internet for seamless connectivity.</p>
                </div>
                <div class="what-card">
                    <div class="touch-icon icon-purple"><i class="fa-solid fa-briefcase"></i></div>
                    <h3>For Business</h3>
                    <p>Ultra-fast & reliable internet for seamless connectivity.</p>
                </div>
                <div class="what-card">
                    <div class="touch-icon icon-red"><i class="fa-solid fa-newspaper"></i></div>
                    <h3>News & Local Content</h3>
                    <p>Stay updated with local news and regional content.</p>
                </div>
                <div class="what-card">
                    <div class="touch-icon icon-orange"><i class="fa-solid fa-map-location-dot"></i></div>
                    <h3>For Coverage</h3>
                    <p>Ultra-fast & reliable internet for seamless connectivity.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose UCN Section -->
    <section class="why-choose-section">
        <div class="container-fluid why-container-wrapper">
            <div class="section-header-center">
                <span class="sub-heading-purple">Why Choose UCN?</span>
                <div class="hero-bottom-line" style="margin: 15px auto 0;"></div>
            </div>
            <div class="why-choose-container">
                <div class="why-features-row">
                    <div class="why-item">
                        <i class="fa-solid fa-bolt why-icon" style="color: var(--color-blue);"></i>
                        <span>Ultra-fast & <br>Reliable Network</span>
                    </div>
                    <div class="why-item">
                        <i class="fa-solid fa-microchip why-icon" style="color: var(--primary-orange);"></i>
                        <span>Advanced <br>Technology</span>
                    </div>
                    <div class="why-item">
                        <i class="fa-solid fa-headset why-icon" style="color: var(--color-blue);"></i>
                        <span>24x7 Customer <br>Support</span>
                    </div>
                    <div class="why-item">
                        <i class="fa-solid fa-indian-rupee-sign why-icon" style="color: var(--primary-orange);"></i>
                        <span>Affordable Plans <br>for Everyone</span>
                    </div>
                    <div class="why-item">
                        <i class="fa-solid fa-users why-icon" style="color: var(--color-blue);"></i>
                        <span>Trusted by <br>Lakhs of Users</span>
                    </div>
                    <div class="why-item">
                        <i class="fa-solid fa-location-dot why-icon" style="color: var(--primary-orange);"></i>
                        <span>Strong Local <br>Presence</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="cta-future-section">
        <div class="container-fluid cta-wrapper">
            <div class="about-cta-banner">
                <div class="cta-left">
                    <div class="cta-icon-box"><i class="fa-solid fa-headphones-simple"></i></div>
                    <div>
                        <h3>Let's Build a Better Connected Future Together</h3>
                        <p>We're here to connect you to endless possibilities.</p>
                    </div>
                </div>
                <div>
                    <a href="#" class="btn-primary-gradient cta-get-in-touch">Get in touch <i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

<style>
    body,
    html,
    * {
        font-family: 'Poppins', sans-serif !important;
    }

    .fa,
    .fas,
    .far,
    .fab,
    [class*="fa-"] {
        font-family: "Font Awesome 6 Free", "Font Awesome 6 Brands" !important;
    }

    .about-page-wrapper {
        background-color: var(--color-white);
        overflow-x: hidden;
    }

    /* --- COMMON CONTAINER STYLING TO PREVENT SIDE OVERFLOW --- */
    .hero-container,
    .who-container,
    .what-container,
    .why-container-wrapper,
    .cta-wrapper {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
    }

    /* --- HERO SECTION --- */
    .about-hero-section {
        padding: 30px 0 60px;
        background: linear-gradient(to bottom, var(--color-white), var(--bg-light-blue));
    }

    .about-hero-section .hero-container {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;
        background: transparent !important;
    }

    .about-breadcrumb {
        font-size: 14px;
        color: var(--color-text-muted);
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .about-breadcrumb a {
        color: var(--color-purple);
        text-decoration: none;
    }

    .sub-heading-orange {
        font-size: 16px;
        font-weight: 600;
        color: var(--primary-orange);
    }

    .about-hero-content h1 {
        font-size: 47px;
        font-weight: 600;
        color: var(--color-text-main);
        line-height: 1.3;
        margin-top: 8px;
        margin-bottom: 20px;
    }

    .highlight-lives {
        background: var(--primary-orange);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .about-hero-content p {
        font-size: 15px;
        color: var(--color-text-muted);
        line-height: 1.6;
        max-width: 480px;
        margin-bottom: 25px;
    }

    .hero-bottom-line {
        width: 55px;
        height: 2.3px;
        margin-top: 15px;
        background: linear-gradient(to right, var(--primary-orange), var(--color-purple));
        border-radius: 2px;
    }

    .about-hero-graphic {
        position: relative;
        width: 580px;
        height: 480px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .blob-bg-img {
        position: absolute;
        width: 100%;
        height: auto;
        z-index: 1;
    }

    .hero-main-img {
        position: absolute;
        width: 75%;
        height: auto;
        z-index: 2;
        border-radius: 20px;
        object-fit: cover;
    }

    .blob-floating-icon {
        position: absolute;
        top:30px;
        left: 10%;
        width: 45px;
        height: 45px;
        background: var(--primary-orange);
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        box-shadow: 0 6px 15px rgba(255, 102, 0, 0.3);
        z-index: 3;
    }

    /* --- WHO WE ARE SECTION --- */
    .who-we-are-section {
        padding: 60px 0;
        background: var(--color-light-bg);
    }

    .who-we-are-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: center;
    }

    .sub-heading-purple {
        font-size: 30px;
        font-weight: 550;
        color: var(--color-text-main);
    }

    .who-text-content p {
        font-size: 15px;
        color: var(--color-text-muted);
        line-height: 1.6;
        margin-bottom: 15px;
        text-align: justify;
    }

    .about-stats-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .about-stat-card {
        background: var(--color-white);
        border-radius: 20px;
        padding: 25px 20px;
        display: flex;
        align-items: center;
        gap: 16px;
        box-shadow: 0 4px 15px var(--shadow-subtle);
    }

    .stat-icon-box {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 26px;
        flex-shrink: 0;
    }

    .about-stat-card strong {
        font-size: 24px;
        font-weight: 700;
        display: block;
    }

    .about-stat-card span {
        font-size: 14px;
        color: var(--color-text-muted);
        font-weight: 600;
    }

    .icon-purple {
        background: var(--bg-purple);
        color: var(--color-purple);
    }

    .icon-orange {
        background: var(--bg-orange);
        color: var(--color-orange-bright);
    }

    .icon-green {
        background: var(--bg-green);
        color: var(--color-green);
    }

    .icon-red {
        background: var(--bg-red);
        color: var(--color-red);
    }

    /* --- WHAT WE DO SECTION --- */
    .what-we-do-section {
        padding: 30px 0;
        background: var(--color-white);
    }

    .section-header-center {
        text-align: center;
        max-width: 750px;
        margin: 0 auto 50px;
    }

    .what-we-do-grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr) !important; /* Ek line mein 6 cards */
        gap: 20px;
    }

    .what-card {
        background: var(--color-white);
        border: 1px solid var(--border-color);
        border-radius: 30px;
        padding: 30px 15px;
        text-align: center; /* Text aur icon center align honge */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
        display: flex;
        flex-direction: column;
        align-items: center; /* Center alignment */
        transition: all 0.3s ease;
    }

    .what-card:hover {
        transform: translateY(-5px);
        border-color: var(--primary-orange);
    }

    /* PDF jaisa bada round background icon container */
    .what-card .touch-icon {
        width: 80px;
        height: 80px;
        border-radius: 50% !important; /* Circular background */
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        margin-bottom: 20px;
    }

    .what-card h3 {
        font-size: 18px;
        font-weight: 600;
        color: var(--color-text-main);
        margin-bottom: 10px;
    }

    .what-card p {
        font-size: 15px;
        color: var(--color-text-muted);
        line-height: 1.4;
        margin: 0;
    }

    /* --- WHY CHOOSE UCN SECTION --- */
    .why-choose-section {
        padding: 30px 0;
        background: var(--color-light-bg);
    }

    .why-choose-container {
        background: var(--color-white);
        border: 1px solid var(--border-color);
        border-radius: 24px;
        padding: 35px 25px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
    }

    .why-features-row {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        align-items: center;
        gap: 15px;
    }

    .why-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        position: relative;
        padding: 0 10px;
    }

    .why-item:not(:last-child)::after {
        content: '';
        position: absolute;
        right: -8px;
        top: 50%;
        transform: translateY(-50%);
        width: 1px;
        height: 45px;
        background: #E2E8F0;
    }

    .why-icon {
        font-size: 42px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 12px;
    }

    .why-item span {
        font-size: 15px;
        font-weight: 500;
        color: var(--color-text-main);
        line-height: 1.4;
    }

    /* --- CTA FUTURE SECTION --- */
    .cta-future-section {
        padding: 0px 0 0px;
        background: var(--color-white);
    }

    .about-cta-banner {
        background: linear-gradient(135deg, #342e84 0%, #d96105 100%);
        border-radius: 24px;
        padding: 40px 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 15px 35px rgba(43, 10, 88, 0.2);
    }

    .cta-left {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .cta-icon-box {
        width: 70px;
        height: 70px;
        background: #4942a1;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 30px;
    }

    .about-cta-banner h3 {
        font-size: 30px;
        font-weight: 700;
        color: #FFFFFF;
        margin-bottom: 4px;
    }

    .about-cta-banner p {
        font-size: 15px;
        color: rgba(255, 255, 255, 0.75);
        margin: 0;
    }

    .cta-get-in-touch {
        background: var(--color-white);
        padding: 12px 25px;
        font-size: 14px;
        box-shadow: 0 4px 15px rgba(255, 122, 21, 0.3);
        text-decoration: none;
        border-radius: 30px;
        color: var(--primary-orange);
    }

    /* --- RESPONSIVE MEDIA QUERIES --- */
    @media (max-width: 1200px) {
        .why-features-row {
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .why-item:nth-child(3)::after {
            display: none;
        }

        .who-text-content {
            width: 90%;
        }

        .section-header-center {
            width: 90%;
            margin: 0%;
        }

        .what-card {
            width: 80%;
        }
    }

    @media (max-width: 1024px) {

        .hero-container,
        .who-container,
        .what-container,
        .why-container-wrapper,
        .cta-wrapper {
            padding: 0 20px !important;
        }

        .who-we-are-grid {
            grid-template-columns: 1fr;
        }

        .about-hero-graphic {
            width: 500px;
            height: 400px;
        }

        .blob-bg-img {
            position: absolute;
            width: 65%;
            height: auto;
            z-index: 1;
        }

        .hero-main-img {
            position: absolute;
            width: 45%;
            height: auto;
            z-index: 2;
            border-radius: 20px;
            object-fit: cover;
        }

        .blob-floating-icon {
            display: none;
        }


        .hero-container {
            flex-direction: column !important;
            text-align: left;
        }

        .about-hero-content {
            max-width: 100% !important;
        }

       .what-we-do-grid {
            grid-template-columns: repeat(3, 1fr) !important; /* Tablets par 3 columns (3x2 grid) */
        }

        .about-stat-card {
            width: 78% !important;
        }
        .why-choose-container {
            width: 78% !important;
            margin: 5px 0 !important;
        }
    }

    @media (max-width: 768px) {

        .hero-container,
        .who-container,
        .what-container,
        .why-container-wrapper,
        .cta-wrapper {
            padding: 0 15px !important;
        }

        .about-hero-section {
            padding: 30px 0
        }

        .about-hero-content h1 {
            font-size: 30px !important;
        }

        .about-stats-grid {
            grid-template-columns: 1fr;
        }

        .what-we-do-grid {
            grid-template-columns: 1fr !important; /* Mobile par single column (1x6 stack) */
        }

        .why-features-row {
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .why-item:not(:last-child)::after {
            display: none;
        }

        .about-cta-banner {
            flex-direction: column;
            text-align: center;
            gap: 20px;
            padding: 25px 15px;
            width: 82%;
        }

        .cta-left {
            flex-direction: column;
        }
    }
</style>
