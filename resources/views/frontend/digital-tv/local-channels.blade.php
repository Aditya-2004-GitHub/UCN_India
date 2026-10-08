@extends('frontend.layout.app')

@section('title', 'UCN India - Local Channels')

@section('content')
<div class="channels-page-wrapper">
    <!-- Hero Banner Section -->
    <section class="channels-hero-section">
        <div class="container-fluid channels-hero-container">
            <!-- 1st Div: Content Area -->
            <div class="channels-hero-content">
                <div class="channels-breadcrumb">
                    <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <a href="#">Digital TV</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <span>Local Channels</span>
                </div>
                <h1>Local <span class="highlight-channels">Channels</span></h1>
                <div class="hero-bottom-line"></div>
                <p class="hero-subtext">Stay connected with your favourite local channels.<br> News, movies, music,
                    events and much more.</p>

                <!-- 4 Hero Mini Badges -->
                <div class="hero-mini-badges">
                    <div class="mini-badge-item">
                        <div class="mini-badge-circle"><i class="fa-solid fa-globe"></i></div>
                        <span>Diverse Content</span>
                    </div>
                    <div class="mini-badge-item">
                        <div class="mini-badge-circle"><i class="fa-solid fa-volume-high"></i></div>
                        <span>Crystal Clear Sound</span>
                    </div>
                    <div class="mini-badge-item">
                        <div class="mini-badge-circle"><i class="fa-solid fa-film"></i></div>
                        <span>Entertainment Unlimited</span>
                    </div>
                    <div class="mini-badge-item">
                        <div class="mini-badge-circle"><i class="fa-solid fa-tv"></i></div>
                        <span>Always Connected</span>
                    </div>
                </div>
            </div>

            <!-- 2nd Div: Image/Graphic Area -->
            <div class="channels-hero-graphic">
                <img src="{{ asset('asset/images/digital-tv/local-news/local-hero.png') }}" alt="Hero Background"
                    class="hero-bg-img">

            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="channels-content-section">
        <div class="container-fluid channels-container">

            <!-- Channels Grid (2 Columns) -->
            <div class="channels-grid-layout">

                <!-- Channel Card 1 -->
                <div class="channel-card">
                    <div class="channel-card-header">
                        <img src="{{ asset('asset/images/digital-tv/local/news.png') }}" alt="UCN News"
                            class="channel-logo">
                        <div>
                            <h3>UCN News</h3>
                            <span class="channel-no">(Channel No. 81)</span>
                        </div>
                    </div>
                    <p class="channel-desc">The most popular News Channel in Vidarbha, which hosts Hindi, Marathi &
                        Business News round the clock.</p>
                </div>

                <!-- Channel Card 2 -->
                <div class="channel-card">
                    <div class="channel-card-header">
                        <img src="{{ asset('asset/images/digital-tv/local/prime.png') }}" alt="UCN Prime"
                            class="channel-logo">
                        <div>
                            <h3>UCN Prime</h3>
                            <span class="channel-no">(Channel No. 85)</span>
                        </div>
                    </div>
                    <p class="channel-desc">The most popular Bollywood Movie Channel with entertainment the movie buffs
                        with a range of Hindi Flicks.</p>
                </div>

                <!-- Channel Card 3 -->
                <div class="channel-card">
                    <div class="channel-card-header">
                        <img src="{{ asset('asset/images/digital-tv/local/plus.png') }}" alt="UCN Plus"
                            class="channel-logo">
                        <div>
                            <h3>UCN Plus</h3>
                            <span class="channel-no">(Channel No. 90)</span>
                        </div>
                    </div>
                    <p class="channel-desc">On Demand Movie Channel that features a mix of Hollywood, Bollywood and
                        Marathi movies.</p>
                </div>

                <!-- Channel Card 4 -->
                <div class="channel-card">
                    <div class="channel-card-header">
                        <img src="{{ asset('asset/images/digital-tv/local/pub.png') }}" alt="UCN Pub"
                            class="channel-logo">
                        <div>
                            <h3>UCN Pub</h3>
                            <span class="channel-no">(Channel No. 65)</span>
                        </div>
                    </div>
                    <p class="channel-desc">A Music Channel catering to diverse age groups, and has been successful in
                        getting an overwhelming response.</p>
                </div>

                <!-- Channel Card 5 -->
                <div class="channel-card">
                    <div class="channel-card-header">
                        <img src="{{ asset('asset/images/digital-tv/local/info.png') }}" alt="UCN Info"
                            class="channel-logo">
                        <div>
                            <h3>UCN Info</h3>
                            <span class="channel-no">(Channel No. 100)</span>
                        </div>
                    </div>
                    <p class="channel-desc">An informatory channel that shows the daily railway and airline schedules.
                    </p>
                </div>

                <!-- Channel Card 6 -->
                <div class="channel-card">
                    <div class="channel-card-header">
                        <img src="{{ asset('asset/images/digital-tv/local/shraddha.png') }}" alt="UCN Shraddha"
                            class="channel-logo">
                        <div>
                            <h3>UCN Shraddha</h3>
                            <span class="channel-no">(Channel No. 451)</span>
                        </div>
                    </div>
                    <p class="channel-desc">Telecasts Local Events, Live 'Aarti' & Religious events from Temples,
                        Churches, Gurudwaras & Dargahs.</p>
                </div>

                <!-- Channel Card 7 -->
                <div class="channel-card">
                    <div class="channel-card-header">
                        <img src="{{ asset('asset/images/digital-tv/local/cinema.png') }}" alt="UCN Cinema HD"
                            class="channel-logo">
                        <div>
                            <h3>UCN Cinema HD</h3>
                            <span class="channel-no">(Channel No. 745)</span>
                        </div>
                    </div>
                    <p class="channel-desc">Caters to High Quality, New, Hindi Movies in FULL HD format, without any
                        commercial break.</p>
                </div>

                <!-- Channel Card 8 -->
                <div class="channel-card">
                    <div class="channel-card-header">
                        <img src="{{ asset('asset/images/digital-tv/local/live.png') }}" alt="UCN Live"
                            class="channel-logo">
                        <div>
                            <h3>UCN Live</h3>
                            <span class="channel-no">(Channel No. 462/483/484)</span>
                        </div>
                    </div>
                    <p class="channel-desc">The most popular Bollywood Movie Channel with entertainment the movie buffs
                        with a range of Hindi Flicks.</p>
                </div>

                <!-- Channel Card 9 -->
                <div class="channel-card">
                    <div class="channel-card-header">
                        <img src="{{ asset('asset/images/digital-tv/local/marathi.png') }}" alt="UCN Marathi"
                            class="channel-logo">
                        <div>
                            <h3>UCN Marathi</h3>
                            <span class="channel-no">(Channel No. 285)</span>
                        </div>
                    </div>
                    <p class="channel-desc">A Channel for Marathi Movies, Plays and Music.</p>
                </div>

                <!-- Channel Card 10 -->
                <div class="channel-card">
                    <div class="channel-card-header">
                        <img src="{{ asset('asset/images/digital-tv/local/sindhi.png') }}" alt="UCN Sindhi"
                            class="channel-logo">
                        <div>
                            <h3>UCN Sindhi</h3>
                            <span class="channel-no">(Channel No. 460)</span>
                        </div>
                    </div>
                    <p class="channel-desc">Unique Channel showing programmes in Sindhi language and cultural events of
                        Sindhi community.</p>
                </div>

                <!-- Channel Card 11 -->
                <div class="channel-card">
                    <div class="channel-card-header">
                        <img src="{{ asset('asset/images/digital-tv/local/urdu.png') }}" alt="UCN Urdu"
                            class="channel-logo">
                        <div>
                            <h3>UCN Urdu</h3>
                            <span class="channel-no">(Channel No. 433)</span>
                        </div>
                    </div>
                    <p class="channel-desc">A Special Urdu Language Channel showing religious and cultural programmes.
                    </p>
                </div>

                <!-- Channel Card 12 -->
                <div class="channel-card">
                    <div class="channel-card-header">
                        <img src="{{ asset('asset/images/digital-tv/local/buddha.png') }}" alt="UCN Buddha"
                            class="channel-logo">
                        <div>
                            <h3>UCN Buddha</h3>
                            <span class="channel-no">(Channel No. 455)</span>
                        </div>
                    </div>
                    <p class="channel-desc">A dedicated TV Channel to propagate the Enlightenment Buddhist Philosophy as
                        well as the Principles and teachings of Bharat Ratna Dr. Babasaheb Ambedkar.</p>
                </div>

            </div>

            <!-- Bottom 4 Feature Cards Bar -->
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

    .channels-page-wrapper {
        background-color: var(--color-light-bg, #F8FAFC);
        overflow-x: hidden;
    }

    .channels-hero-container,
    .channels-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
    }

    /* --- HERO SECTION --- */
    .channels-hero-section {
        padding: 40px 0 30px;
        background: linear-gradient(to bottom, var(--color-white), var(--bg-light-blue));
    }

    .channels-hero-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 30px;
    }

    .channels-hero-content {
        flex: 1;
    }

    .channels-hero-graphic {
        position: relative;
        flex-shrink: 0;
        width: 550px;
        height: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero-bg-img {
        position: absolute;
        width: 100%;
        height: auto;
        object-fit: contain;
        z-index: 1;
        margin-top: 45px;

    }

    .channels-breadcrumb {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .channels-breadcrumb a {
        color: var(--color-purple, #7C3AED);
        text-decoration: none;
    }

    .channels-hero-content h1 {
        font-size: 42px;
        font-weight: 600;
        color: var(--color-text-main, #1E293B);
        line-height: 1.3;
        margin-bottom: 10px;
    }

    .highlight-channels {
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
        gap: 20px;
        flex-wrap: wrap;
        margin-top: 25px;
    }

    .mini-badge-item {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .mini-badge-circle {
        width: 40px;
        height: 40px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-orange);
        font-size: 16px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
    }

    .mini-badge-item span {
        font-size: 13px;
        font-weight: 600;
        color: var(--color-text-main, #1E293B);
    }

    /* --- CONTENT SECTION & CHANNEL CARDS --- */
    .channels-content-section {
        padding: 50px 0 30px;
    }

    .channels-grid-layout {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }

    .channel-card {
        background: var(--color-white, #FFFFFF);
        border-radius: 24px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        border: 1px solid #E2E8F0;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: transform 0.2s ease;
    }

    .channel-card:hover {
        transform: translateY(-3px);
    }

    .channel-card-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 15px;
    }

    .channel-logo {
        width: 60px;
        height: 60px;
        object-fit: contain;
        border-radius: 12px;
        background: #F8FAFC;
        padding: 5px;
        border: 1px solid #E2E8F0;
        flex-shrink: 0;
    }

    .channel-card-header h3 {
        font-size: 20px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin: 0 0 2px 0;
    }

    .channel-no {
        font-size: 13px;
        font-weight: 600;
        color: var(--primary-orange, #FF6600);
    }

    .channel-desc {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin: 0;
        line-height: 1.6;
        width: 100%;
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
        margin-top: 50px;
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
        .product-bottom-bar {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .help-feature-item:nth-child(2)::after {
            display: none;
        }
    }

    @media (max-width: 1024px) {
        .channels-hero-container {
            flex-direction: column;
            text-align: left;
        }

        .channels-hero-container,
        .channels-container {
            padding: 0 20px !important;
        }

        .channels-grid-layout {
            grid-template-columns: 1fr;
        }

        .channels-hero-graphic {
            width: 100%;
            height: 250px;
            margin-top: 20px;
        }
    }

    @media (max-width: 768px) {

        .channels-hero-container,
        .channels-container {
            padding: 0 15px !important;
        }

        .channels-hero-section {
            padding: 30px 0 0px;
        }

        .channels-hero-content h1 {
            font-size: 32px;
        }

        .channels-hero-graphic {
            height: 220px;
        }

        .hero-bg-img {

            margin-top: 0
        }

        .channel-card {
            padding: 20px;
            width: 78%;
        }

        .product-bottom-bar {
            grid-template-columns: 1fr;
            width: 65%;
        }

        .help-feature-item::after {
            display: none !important;
        }

        .hero-mini-badges {
            flex-direction: column;
            gap: 12px;
        }
    }
</style>
