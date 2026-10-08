@extends('frontend.layout.app')

@section('title', 'UCN India - Set Top Box')

@section('content')
<div class="packages-page-wrapper">
    <!-- Hero Banner Section -->
    <section class="packages-hero-section">
        <div class="container-fluid packages-container packages-hero-flex">
            <div>
                <div class="packages-breadcrumb">
                    <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <span>IPTV</span> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <span>Set Top Box</span>
                </div>
                <h1>Smart Android <span class="highlight-orange"><br/>Set Top Box</span></h1>
                <p class="hero-subtitle">Transform your normal TV into a smart entertainment hub with voice control, 4K
                    resolution, and thousands of apps.</p>
                <div class="hero-bottom-line"></div>
            </div>
            <div class="upgrade-hero-graphic">
                <img src="{{ asset('asset/images/iptv/setUpBox.png') }}" alt="Set Top Box Graphic"
                    class="upgrade-hero-img">
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="packages-content-section">
        <div class="container-fluid packages-container">

            <!-- Section Heading -->
            <div class="section-title-wrap">
                <span class="sub-heading-orange">NEXT-GEN ENTERTAINMENT</span>
                <h2>Why Choose UCN <span class="highlight-brand">Smart Set Top Box?</span></h2>
                <p>Packed with advanced technology to deliver seamless streaming, gaming, and live TV experience right
                    in your living room.</p>
            </div>

            <!-- Features Grid -->
            <div class="stb-features-grid">
                <div class="stb-feature-card">
                    <div class="touch-icon icon-blue"><i class="fa-solid fa-tv"></i></div>
                    <h3>4K Ultra HD Quality</h3>
                    <p>Experience crystal clear picture clarity with vibrant colors and deep contrast for every scene.
                    </p>
                </div>
                <div class="stb-feature-card">
                    <div class="touch-icon icon-orange"><i class="fa-solid fa-microphone"></i></div>
                    <h3>Google Voice Remote</h3>
                    <p>Search your favorite shows, control volume, or open apps simply using your voice commands.</p>
                </div>
                <div class="stb-feature-card">
                    <div class="touch-icon icon-blue"><i class="fa-solid fa-store"></i></div>
                    <h3>Built-in Google Play</h3>
                    <p>Download and enjoy thousands of apps, games, and streaming services straight on your TV screen.
                    </p>
                </div>
                <div class="stb-feature-card">
                    <div class="touch-icon icon-green"><i class="fa-solid fa-cloud-arrow-down"></i></div>
                    <h3>Catch-up & Recording</h3>
                    <p>Never miss your favorite program again with 7-days catch-up TV and easy cloud recording options.
                    </p>
                </div>
            </div>

            <!-- Promotion / Booking Banner -->
            <div class="switch-banner stb-booking-banner">
                <div class="switch-left">
                    <h3>Get UCN Smart Set Top Box Today!</h3>
                    <p>Enjoy free doorstep delivery, quick professional setup, and special installation offers.</p>
                </div>
                <div class="switch-perks">
                    <div class="s-perk"><i class="fa-solid fa-screwdriver-wrench"></i> Free Setup <span>Expert
                            Installation</span></div>
                    <div class="s-perk"><i class="fa-solid fa-shield-halved"></i> 1 Year Warranty <span>Full Hardware
                            Support</span></div>
                </div>
                <div>
                    <a href="{{ route('digitaltv.new_connection') ?? '#' }}" class="btn-primary-gradient">Book New
                        Connection
                        <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

        </div>
    </section>
</div>
@endsection

<style>
    .packages-page-wrapper {
        background: #F8FAFC;
        min-height: 80vh;
        padding-bottom: 60px;
        font-family: 'Poppins', sans-serif;
    }

    .packages-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
    }

    .packages-hero-section {
        padding: 50px 0 40px;
        background-image: url('{{ asset("asset/images/enterprises/bg-img.png") }}'),
        linear-gradient(to bottom, var(--color-white), var(--bg-light-blue, #F1F5F9));
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover, cover;
        border-bottom: 1px solid #E2E8F0;
        margin-bottom: 40px;
        display: flex;
        align-items: center;
    }

    .packages-hero-flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .packages-breadcrumb {
        font-size: 14px;
        color: #64748B;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .packages-breadcrumb a {
        color: #7C3AED;
        text-decoration: none;
    }

    .packages-hero-section h1 {
        font-size: 38px;
        font-weight: 700;
        color: #1E293B;
        margin-bottom: 12px;
    }

    .highlight-orange {
        background: var(--primary-orange);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .highlight-brand {
        background: linear-gradient(to right, var(--color-blue), var(--primary-orange));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-subtitle {
        font-size: 15px;
        color: #64748B;
        max-width: 600px;
        line-height: 1.6;
        margin-bottom: 0;
    }

    .hero-bottom-line {
        width: 55px;
        height: 2.3px;
        margin-top: 15px;
        background: linear-gradient(to right, var(--color-blue), var(--primary-orange));
        border-radius: 2px;
    }

    .upgrade-hero-graphic {
        width: 450px;
        height: 260px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .upgrade-hero-img {
        max-width: 100%;
        max-height: 300px;
        object-fit: contain;
        margin-right: 100px;
    }

    .section-title-wrap {
        text-align: center;
        max-width: 700px;
        margin: 0 auto 40px auto;
    }

    .sub-heading-orange {
        font-size: 14px;
        font-weight: 700;
        color: var(--primary-orange);
        letter-spacing: 1px;
        display: block;
        margin-bottom: 8px;
        text-transform: uppercase;
    }

    .section-title-wrap h2 {
        font-size: 32px;
        font-weight: 700;
        color: #1E293B;
        margin-bottom: 10px;
    }

    .section-title-wrap p {
        font-size: 14px;
        color: #64748B;
        line-height: 1.5;
    }

    /* STB Features Grid */
    .stb-features-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-bottom: 40px;
    }

    .stb-feature-card {
        background: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 20px;
        padding: 30px 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
        transition: all 0.3s ease;
    }

    .stb-feature-card:hover {
        transform: translateY(-5px);
        border-color: var(--primary-orange);
        box-shadow: 0 6px 20px rgba(138, 43, 226, 0.08);
    }

    .touch-icon {
        width: 55px !important;
        height: 55px !important;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px !important;
        margin-bottom: 20px;
    }

    .stb-feature-card h3 {
        font-size: 18px;
        font-weight: 700;
        color: #1E293B;
        margin-bottom: 10px;
    }

    .stb-feature-card p {
        font-size: 13px;
        color: #64748B;
        line-height: 1.5;
        margin: 0;
    }

    /* Icon colors */
    .icon-navy {
        background: #EEF2FF;
        color: var(--color-blue);
    }

    .icon-orange {
        background: #FFEDD5;
        color: #F97316;
    }

    .icon-blue {
        background: #E0F2FE;
        color: #0284C7;
    }

    .icon-green {
        background: #DCFCE7;
        color: #16A34A;
    }

    /* Switch Banner */
    .switch-banner {
        background: linear-gradient(135deg, #F8F9FA 0%, #FFFFFF 100%);
        border: 1px solid #E2E8F0;
        border-radius: 20px;
        padding: 30px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
    }

    .switch-left h3 {
        font-size: 18px;
        font-weight: 700;
        color: #1E293B;
        margin-bottom: 4px;
    }

    .switch-left p {
        font-size: 13px;
        color: #64748B;
        margin: 0;
    }

    .switch-perks {
        display: flex;
        gap: 30px;
    }

    .s-perk {
        font-size: 15px;
        font-weight: 600;
        color: #1E293B;
    }

    .s-perk i {
        color: var(--primary-orange);
        margin-right: 6px;
        font-size: 20px;
    }

    .s-perk span {
        display: block;
        font-size: 13px;
        font-weight: 400;
        color: #64748B;
    }

    .btn-primary-accent {
        background: linear-gradient(135deg, var(--color-blue), var(--primary-orange));
        color: #FFFFFF;
        padding: 12px 24px;
        border-radius: 30px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        white-space: nowrap;
        box-shadow: 0 4px 12px rgba(253, 112, 1, 0.25);
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .stb-features-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 1024px) {
        .packages-hero-flex {
            flex-direction: column;
            text-align: center;
            gap: 25px;
        }

        .hero-subtitle {
            margin: 0 auto;
        }

        .hero-bottom-line {
            margin: 15px auto 0 auto;
        }

        .upgrade-hero-graphic {
            justify-content: center;
            width: 100%;
        }

        .switch-banner {
            flex-direction: column;
            gap: 20px;
            text-align: center;
            padding: 25px 20px;
        }

        .switch-perks {
            flex-direction: column;
            gap: 15px;
        }
    }

    @media (max-width: 768px) {
        .packages-container {
            padding: 0 15px !important;
            width: 90%;
        }

        .upgrade-hero-img {
            margin-right: 0px;
        }

        .packages-hero-section h1 {
            font-size: 28px;
        }

        .section-title-wrap h2 {
            font-size: 24px;
        }

        .stb-features-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
