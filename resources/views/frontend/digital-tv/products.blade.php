@extends('frontend.layout.app')

@section('title', 'UCN India - Products')

@section('content')
<div class="products-page-wrapper">
    <!-- Hero Banner Section -->
    <section class="products-hero-section">
        <div class="container-fluid products-hero-container">
            <div class="products-hero-content">
                <div class="products-breadcrumb">
                    <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <a href="#">Digital TV</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <span>Products</span>
                </div>
                <h1>Set Top <span class="highlight-box">Box</span></h1>
                <div class="hero-bottom-line"></div>
                <p class="hero-subtext">Experience entertainment like never before<br> with our advanced Set Top Box
                    range.</p>

                <!-- 3 Hero Mini Badges -->
                <div class="hero-mini-badges">
                    <div class="mini-badge-item">
                        <div class="mini-badge-circle"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                        <span>Krisp Picture Quality</span>
                    </div>
                    <div class="mini-badge-item">
                        <div class="mini-badge-circle"><i class="fa-solid fa-volume-high"></i></div>
                        <span>Immersive Sound</span>
                    </div>
                    <div class="mini-badge-item">
                        <div class="mini-badge-circle"><i class="fa-solid fa-film"></i></div>
                        <span>Endless Entertainment</span>
                    </div>
                </div>
            </div>
            <div class="hero-img-wrapper">
                <img src="{{ asset('asset/images/digital-tv/products/element1.png') }}" alt="Set Top Box"
                    class="hero-product-img">
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="products-content-section">
        <div class="container-fluid products-container">

            <!-- 1. UCN HD STB Card -->
            <div class="product-card-box">
                <div class="product-grid-main">
                    <div class="product-image-area">
                        <img src="{{ asset('asset/images/digital-tv/products/element2.png') }}" alt="UCN HD STB"
                            class="product-img">
                    </div>
                    <div class="product-details-area">
                        <h2>UCN <span class="text-orange">HD STB</span> Features</h2>
                        <ul class="feature-checklist">
                            <li><i class="fa-solid fa-circle-check"></i> High Definition Picture Quality, High Quality
                                Surround Sound, 7 Days Electronic Programme Guide</li>
                            <li><i class="fa-solid fa-circle-check"></i> Up to 1200 Channels, Radio Channels, Parental
                                Lock, Programme Reminder, Local News & Live Programmes</li>
                            <li><i class="fa-solid fa-circle-check"></i> Audio Language Choice, Two Way Interactive
                                Service, Best After Sale Services, PIP/Mosaic</li>
                        </ul>
                        <a href="{{ route('digitaltv.new_connection') }}" class="btn-primary-gradient product-btn">
                            Get the HD STB <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="product-pills-area">
                        <div class="feature-pill">True HD-1080i Display</div>
                        <div class="feature-pill">Dolby Digital Sound</div>
                        <div class="feature-pill">Live Play and Pause Feature</div>
                        <div class="feature-pill">Unlimited Recording</div>
                    </div>
                </div>
            </div>

            <!-- 2. Digital STB Card -->
            <div class="product-card-box">
                <div class="product-grid-main reverse-layout">
                    <div class="product-pills-area">
                        <div class="feature-pill">Video on Demand, Games</div>
                        <div class="feature-pill">Internet</div>
                        <div class="feature-pill">Voice Chat</div>
                    </div>
                    <div class="product-details-area">
                        <h2>Digital STB Features</h2>
                        <ul class="feature-checklist">
                            <li><i class="fa-solid fa-circle-check"></i> DVD Picture Quality, Stereophonic Crispy Sound,
                                7 Days Electronic Program Guide</li>
                            <li><i class="fa-solid fa-circle-check"></i> Program Guide, Up to 1200 Channels Possible
                            </li>
                            <li><i class="fa-solid fa-circle-check"></i> Radio Channels, Parental Lock, Programme
                                Reminder</li>
                            <li><i class="fa-solid fa-circle-check"></i> Audio Language Choice, Best Immediate Service
                            </li>
                            <li><i class="fa-solid fa-circle-check"></i> Local News & Live Local Programmes, PIP/Mosaic
                            </li>
                        </ul>
                        <a href="{{ route('digitaltv.new_connection') }}" class="btn-primary-gradient product-btn">
                            Get the STB <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="product-image-area">
                        <img src="{{ asset('asset/images/digital-tv/products/element3.png') }}" alt="Digital STB"
                            class="product-img">
                    </div>
                </div>
            </div>

            <!-- 3. UCN IPTV Section Card -->
            <div class="iptv-showcase-card">
                <div class="iptv-grid">

                    <!-- Middle: Product Image Area -->
                    <div class="product-image-area iptv-center-img" >
                        <img src="{{ asset('asset/images/digital-tv/products/element4.png') }}" alt="UCN IPTV Box"
                            class="product-img" style=" padding-left: -130px;">
                    </div>
                    <!-- Left Side: Title & Icons -->
                    <div class="iptv-left">
                        <h2>UCN IPTV</h2>
                        <span class="iptv-sub">Your World of Entertainment</span>
                        <p>Enjoy a wide range of Live TV, Movies, Series, Catch-up TV and more on all your devices.</p>

                        <div class="iptv-icons-grid">
                            <div class="iptv-icon-item">
                                <div class="i-circle"><i class="fa-solid fa-tv"></i></div><span>Live TV</span>
                            </div>
                            <div class="iptv-icon-item">
                                <div class="i-circle"><i class="fa-solid fa-film"></i></div><span>Movies</span>
                            </div>
                            <div class="iptv-icon-item">
                                <div class="i-circle"><i class="fa-solid fa-video"></i></div><span>Series</span>
                            </div>
                            <div class="iptv-icon-item">
                                <div class="i-circle"><i class="fa-solid fa-clock-rotate-left"></i></div><span>Catch-up
                                    TV</span>
                            </div>
                            <div class="iptv-icon-item">
                                <div class="i-circle"><i class="fa-solid fa-desktop"></i></div><span>Multi-Screen</span>
                            </div>
                        </div>
                    </div>



                    <!-- Right Side: Features & Button -->
                    <div class="iptv-right">
                        <ul class="feature-checklist dark-check">
                            <li><i class="fa-solid fa-circle-check"></i> HD & 4K Quality Streaming</li>
                            <li><i class="fa-solid fa-circle-check"></i> 1000+ Live TV Channels</li>
                            <li><i class="fa-solid fa-circle-check"></i> Movies & TV Series On Demand</li>
                            <li><i class="fa-solid fa-circle-check"></i> Available on Mobile, Tablet & TV</li>
                        </ul>
                        <a href="#" class="btn-explore-iptv">Explore IPTV <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- 4. Bottom 4 Feature Cards Bar -->
            <div class="help-features-bar product-bottom-bar">
                <div class="help-feature-item">
                    <div class="feature-icon-circle icon-purple"><i class="fa-solid fa-shield-halved"></i></div>
                    <div class="feature-text">
                        <strong>Reliable & Secure</strong>
                        <span>Secure connection and best-in-class reliability.</span>
                    </div>
                </div>
                <div class="help-feature-item">
                    <div class="feature-icon-circle icon-orange"><i class="fa-solid fa-headset"></i></div>
                    <div class="feature-text">
                        <strong>24x7 Support</strong>
                        <span>Our experts are always here to help you anytime.</span>
                    </div>
                </div>
                <div class="help-feature-item">
                    <div class="feature-icon-circle icon-blue"><i class="fa-solid fa-bolt"></i></div>
                    <div class="feature-text">
                        <strong>Easy Installation</strong>
                        <span>Quick & hassle-free installation at your home.</span>
                    </div>
                </div>
                <div class="help-feature-item">
                    <div class="feature-icon-circle icon-pink"><i class="fa-solid fa-tags"></i></div>
                    <div class="feature-text">
                        <strong>Affordable Plans</strong>
                        <span>Choose from a range of plans that suit your needs.</span>
                    </div>
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

    .products-page-wrapper {
        background-color: var(--color-light-bg, #F8FAFC);
        overflow-x: hidden;
    }

    .products-hero-container,
    .products-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
    }

    /* --- HERO SECTION --- */
    .products-hero-section {
        padding: 40px 0 60px;
        background: linear-gradient(to bottom, var(--color-white), var(--bg-light-blue));
    }

    .products-hero-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 30px;
    }

    .products-hero-content {
        flex: 1;
    }

    .hero-img-wrapper {
        flex-shrink: 0;
        text-align: center;
    }

    .hero-product-img {
        max-width: 650px;
        width: 100%;
        height: auto;
        object-fit: contain;
    }

    .products-breadcrumb {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .products-breadcrumb a {
        color: var(--color-purple, #7C3AED);
        text-decoration: none;
    }

    .products-hero-content h1 {
        font-size: 42px;
        font-weight: 600;
        color: var(--color-text-main, #1E293B);
        line-height: 1.3;
        margin-bottom: 10px;
    }

    .highlight-box {
        color: var(--primary-orange, #FF6600);
    }

    .hero-subtext {
        font-size: 15px;
        color: var(--color-text-muted, #64748B);
        line-height: 1.6;
        margin-top: 15px;
        margin-bottom: 30px;
    }

    .hero-bottom-line {
        width: 55px;
        height: 2.3px;
        margin-top: 10px;
        background: linear-gradient(to right, var(--primary-orange), var(--color-purple));
        border-radius: 2px;
    }

    .hero-mini-badges {
        display: flex;
        gap: 25px;
        flex-wrap: wrap;
        margin-top: 25px;
    }

    .mini-badge-item {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .mini-badge-circle {
        width: 45px;
        height: 45px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-orange);
        font-size: 18px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
    }

    .mini-badge-item span {
        font-size: 14px;
        font-weight: 600;
        color: var(--color-text-main, #1E293B);
    }

    /* --- CONTENT SECTION & PRODUCT CARDS --- */
    .products-content-section {
        padding: 50px 0 30px;
    }

    .product-card-box {
        background: var(--color-white, #FFFFFF);
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        margin-bottom: 40px;
    }

    .product-grid-main {
        display: grid;
        grid-template-columns: 1fr 1.3fr 1fr;
        gap: 30px;
        align-items: center;
    }

    .product-grid-main.reverse-layout {
        grid-template-columns: 1fr 1.3fr 1fr;
    }

    .product-image-area {
        display: flex;
        justify-content: center;
        align-items: center;
        background: transparent;
        border-radius: 20px;
        padding: 20px;
        min-height: 250px;
    }

    .product-img {
        max-width: 100%;
        height: auto;
        object-fit: contain;
    }

    .product-details-area h2 {
        font-size: 26px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin-bottom: 20px;
    }

    .text-orange {
        color: var(--primary-orange, #FF6600);
    }

    .feature-checklist {
        list-style: none;
        padding: 0;
        margin: 0 0 25px 0;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .feature-checklist li {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        display: flex;
        align-items: flex-start;
        gap: 10px;
        line-height: 1.5;
    }

    .feature-checklist li i {
        color: var(--primary-orange, #FF6600);
        margin-top: 3px;
        flex-shrink: 0;
    }

    .product-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 12px 25px;
        border-radius: 12px;
        color: #fff;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        background: linear-gradient(to right, var(--color-blue), var(--primary-orange));
        box-shadow: 0 4px 15px rgba(255, 102, 0, 0.2);
        transition: transform 0.2s ease;
    }

    .product-btn:hover {
        transform: translateY(-2px);
    }

    .product-pills-area {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .feature-pill {
        background: #F8FAFC;
        border: 1px solid #E2E8F0;
        padding: 14px 20px;
        border-radius: 16px;
        font-size: 14px;
        font-weight: 600;
        color: var(--color-text-main, #1E293B);
        text-align: center;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
    }

    /* --- IPTV SHOWCASE CARD --- */
    .iptv-showcase-card {
        background: var(--bg-light-blue);
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        margin-bottom: 40px;
        border: 1px solid #D8B4FE;
    }

    .iptv-grid {
        display: grid;
        grid-template-columns: 1.2fr 1fr 1.1fr;
        gap: 30px;
        align-items: center;
    }

    .iptv-left h2 {
        font-size: 32px;
        font-weight: 700;
        color: #2B0A58;
        margin-bottom: 5px;
    }

    .iptv-sub {
        font-size: 15px;
        font-weight: 600;
        color: var(--primary-orange, #FF6600);
        display: block;
        margin-bottom: 15px;
    }

    .iptv-left p {
        font-size: 15px;
        color: #4B5563;
        margin-bottom: 25px;
        line-height: 1.6;
    }

    .iptv-icons-grid {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .iptv-icon-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 6px;
    }

    .i-circle {
        width: 45px;
        height: 45px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--color-blue);
        font-size: 18px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
    }

    .iptv-icon-item span {
        font-size: 11px;
        font-weight: 600;
        color: #374151;
    }

    .iptv-right {
        background: rgba(255, 255, 255, 0.6);
        padding: 30px;
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.8);
    }

    .dark-check li i {
        color: var(--color-blue) !important;
    }

    .btn-explore-iptv {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 12px 25px;
        border-radius: 12px;
        color: #fff;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        background: linear-gradient(to right, var(--color-blue), var(--primary-orange));
        box-shadow: 0 4px 15px rgba(43, 10, 88, 0.2);
        margin-top: 10px;
        transition: transform 0.2s ease;
    }

    .btn-explore-iptv:hover {
        transform: translateY(-2px);
    }

    /* --- BOTTOM FEATURE BAR --- */
    .product-bottom-bar {
        background: #fff;
        border-radius: 24px;
        padding: 30px 40px;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .help-feature-item {
        display: flex;
        align-items: center;
        gap: 16px;
        position: relative;
    }

    .help-feature-item:not(:last-child)::after {
        content: '';
        position: absolute;
        right: -10px;
        top: 50%;
        transform: translateY(-50%);
        width: 1px;
        height: 45px;
        background: #E2E8F0;
    }

    .feature-icon-circle {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        flex-shrink: 0;
    }

    .feature-text strong {
        font-size: 15px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        display: block;
        margin-bottom: 2px;
    }

    .feature-text span {
        font-size: 12px;
        color: var(--color-text-muted, #64748B);
        line-height: 1.4;
    }

    .icon-purple {
        background: #F3E8FF;
        color: #9333EA;
    }

    .icon-orange {
        background: #FFF3EC;
        color: #FF6600;
    }

    .icon-pink {
        background: #FCE7F3;
        color: #DB2777;
    }

    .icon-blue {
        background: #E0F2FE;
        color: #0284C7;
    }

    /* --- RESPONSIVE MEDIA QUERIES --- */
    @media (max-width: 1200px) {
        .products-hero-container {
            flex-direction: column;
            text-align: left;
        }

        .product-grid-main,
        .product-grid-main.reverse-layout {
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .product-grid-main.reverse-layout .product-pills-area {
            order: 2;
        }

        .product-grid-main.reverse-layout .product-details-area {
            order: 1;
        }

        .product-grid-main.reverse-layout .product-image-area {
            order: 3;
        }

        .iptv-grid {
            grid-template-columns: 1fr !important;
            gap: 25px;
        }

        .product-bottom-bar {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .help-feature-item:nth-child(2)::after {
            display: none;
        }
    }

    @media (max-width: 1024px) {

        .products-hero-container,
        .products-container {
            padding: 0 20px !important;
        }
    }

    @media (max-width: 768px) {

        .products-hero-container,
        .products-container {
            padding: 0 15px !important;
        }

        .product-bottom-bar {
            grid-template-columns: 1fr;
            width:67%;
        }

        .help-feature-item::after {
            display: none !important;
        }

        .products-hero-content h1 {
            font-size: 32px;
        }

        .product-card-box,
        .iptv-showcase-card {
            padding: 25px 20px;
            width:80%;
        }

        .hero-mini-badges {
            flex-direction: column;
            gap: 15px;
        }
    }
</style>
