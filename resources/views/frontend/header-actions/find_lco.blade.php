@extends('frontend.layout.app')

@section('title', 'UCN India - Find Your LCO')

@section('content')
<div class="lco-page-wrapper">
    <!-- Hero Banner Section -->
    <section class="lco-hero-section">
        <div class="container-fluid lco-hero-container">
            <!-- 1st Div: Content Area -->
            <div class="lco-hero-content">
                <div class="lco-breadcrumb">
                    <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <span>Find your LCO</span>
                </div>
                <h1>Find Your <br><span class="highlight-orange">Local Cable Operator</span></h1>
                <p class="hero-subtext">Enter your PIN code to find your nearest<br> UCN cable Operator.</p>
                <div class="hero-bottom-line"></div>
            </div>

            <!-- 2nd Div: Image/Graphic Area -->
            <div class="lco-hero-graphic">
                <img src="{{ asset('asset/images/header-actions/lco.png') }}" alt="Find LCO Graphic"
                    class="lco-hero-img">
            </div>
        </div>
    </section>

    <!-- Overlapping PIN Code Checker Card -->
    <section class="pin-checker-section">
        <div class="container-fluid lco-container">
            <div class="pin-checker-card">
                <h3>Enter PIN Code</h3>
                <form action="#" method="POST" class="pin-form-row">
                    @csrf
                    <div class="pin-input-group">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="text" placeholder="Enter your 6 digit PIN code" maxlength="6" required>
                    </div>
                    <button type="submit" class="btn-check-pin">
                        Check <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </form>
                <div class="pin-secure-text">
                    <i class="fa-solid fa-lock"></i> Your information is safe with us
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Section (Why Find LCO & Support Banner) -->
    <section class="lco-content-section">
        <div class="container-fluid lco-container">

            <!-- Why Find Your Local Cable Operator Section -->
            <div class="why-lco-box">
                <h2>Why Find Your Local Cable Operator?</h2>
                <div class="hero-bottom-line center-line"></div>

                <div class="why-lco-grid">
                    <div class="why-lco-item">
                        <div class="lco-icon-circle"></div>
                        <h4>Locate Nearby</h4>
                        <p>Find the nearest UCN Cable Operator in your area.</p>
                    </div>
                    <div class="why-lco-item">
                        <div class="lco-icon-circle"></div>
                        <h4>Quick Assistance</h4>
                        <p>Get in touch with your local operator for fast support.</p>
                    </div>
                    <div class="why-lco-item">
                        <div class="lco-icon-circle"></div>
                        <h4>Personalized Service</h4>
                        <p>Connect with your local team for personalized assistance.</p>
                    </div>
                    <div class="why-lco-item">
                        <div class="lco-icon-circle"></div>
                        <h4>Trusted Network</h4>
                        <p>UCN trusted network ensures reliable service and support.</p>
                    </div>
                </div>
            </div>

            <!-- Bottom Support Banner -->
            <div class="bottom-help-banner">
                <div class="help-banner-left">
                    <div class="banner-icon-box"><img src="{{ asset('asset/images/help_support/headset.png') }}"
                            alt="Upgrade Hero Graphic" class="banner-img"></div>
                    <div>
                        <h3>Need help with your connection?</h3>
                        <p>Our team is here to assist you with any queries related to HD STB and packages.</p>
                    </div>
                </div>
                <div>
                    <a href="#" class="btn-outline-call"><i class="fa-solid fa-phone"></i> Call Us Now</a>
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

    .lco-page-wrapper {
        background-color: var(--color-light-bg, #F8FAFC);
        overflow-x: hidden;
    }

    .lco-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
    }

    /* --- HERO SECTION --- */
    .lco-hero-section {
        padding: 40px 0 30px;
        background: linear-gradient(to bottom, var(--color-white), var(--bg-light-blue));
        overflow: hidden;
    }

    .lco-hero-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        gap: 30px;
    }

    .lco-hero-content {
        flex: 1;
        padding-bottom: 40px;
    }

    .lco-hero-graphic {
        flex-shrink: 0;
        width: 280px;
        display: flex-end;
        justify-content: center;
        align-items: flex-end;
        line-height: 0;

    }

    .lco-hero-img {
        max-width: 100%;
        height: auto;
        align-items: flex-end;
        line-height: 0;
        object-fit: contain;
        display: block;
        margin: 0 0 -25px -205px;
    }

    .lco-breadcrumb {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .lco-breadcrumb a {
        color: var(--color-purple, #7C3AED);
        text-decoration: none;
    }

    .lco-hero-content h1 {
        font-size: 42px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        line-height: 1.25;
        margin-bottom: 10px;
    }

    .highlight-orange {
        color: var(--primary-orange, #FF6600);
    }

    .hero-subtext {
        font-size: 15px;
        color: var(--color-text-muted, #64748B);
        line-height: 1.6;
        margin-top: 10px;
    }

    .hero-bottom-line {
        width: 55px;
        height: 2.3px;
        margin-top: 15px;
        background: linear-gradient(to right, var(--primary-orange), var(--color-purple));
        border-radius: 2px;
    }

    .center-line {
        margin: 15px auto 40px auto;
    }

    /* --- PIN CODE CHECKER CARD --- */
    .pin-checker-section {
        margin-top: -55px;
        position: relative;
        z-index: 10;
        margin-bottom: 50px;
    }

    .pin-checker-card {
        background: #FFFFFF;
        border-radius: 24px;
        padding: 35px 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
        border: 1px solid #E2E8F0;
        max-width: 900px;
        margin: 0 auto;
    }

    .pin-checker-card h3 {
        font-size: 18px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin-bottom: 20px;
    }

    .pin-form-row {
        display: flex;
        gap: 15px;
        align-items: center;
    }

    .pin-input-group {
        position: relative;
        flex: 1;
        display: flex;
        align-items: center;
    }

    .pin-input-group i {
        position: absolute;
        left: 18px;
        color: var(--primary-orange, #FF6600);
        font-size: 16px;
    }

    .pin-input-group input {
        width: 100%;
        padding: 14px 16px 14px 50px;
        border: 1px solid #E2E8F0;
        border-radius: 14px;
        font-size: 14px;
        color: var(--color-text-main, #1E293B);
        background: #FFF;
        outline: none;
        transition: border-color 0.2s ease;
    }

    .pin-input-group input:focus {
        border-color: var(--primary-orange, #FF6600);
    }

    .btn-check-pin {
        background: var(--primary-orange, #FF6600);
        color: #fff;
        border: none;
        padding: 14px 35px;
        border-radius: 14px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 4px 15px rgba(255, 102, 0, 0.25);
        transition: transform 0.2s ease;
        white-space: nowrap;
    }

    .btn-check-pin:hover {
        transform: translateY(-2px);
    }

    .pin-secure-text {
        font-size: 12px;
        color: var(--color-text-muted, #64748B);
        margin-top: 15px;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .pin-secure-text i {
        font-size: 11px;
    }

    /* --- MAIN CONTENT SECTION --- */
    .lco-content-section {
        padding: 0 0 80px;
    }

    .why-lco-box {
        background: #FFFFFF;
        border-radius: 24px;
        padding: 45px 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        border: 1px solid #E2E8F0;
        text-align: center;
        margin-bottom: 40px;
    }

    .why-lco-box h2 {
        font-size: 26px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin-bottom: 0;
    }

    .why-lco-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        margin-top: 40px;
        text-align: center;
    }

    .why-lco-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px 10px;
        position: relative;
    }

    .why-lco-item:not(:last-child)::after {
        content: '';
        position: absolute;
        right: -15px;
        top: 25%;
        width: 1px;
        height: 50%;
        background: #E2E8F0;
    }

    .lco-icon-circle {
        width: 65px;
        height: 65px;
        background: #FFEFE6;
        border-radius: 50%;
        margin-bottom: 20px;
        box-shadow: 0 4px 15px rgba(255, 102, 0, 0.08);
    }

    .why-lco-item h4 {
        font-size: 17px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin-bottom: 8px;
    }

    .why-lco-item p {
        font-size: 13px;
        color: var(--color-text-muted, #64748B);
        line-height: 1.5;
        margin: 0;
    }

    /* Bottom Help Banner */
    .bottom-help-banner {
        background: linear-gradient(135deg, var(--color-light-blue) 10%, var(--color-blue) 100%);
        border-radius: 24px;
        padding: 30px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 15px 35px rgba(43, 10, 88, 0.2);
    }

    .help-banner-left {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .banner-icon-box {
        width: 70px;
        height: 70px;
        background: var(--color-white);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        flex-shrink: 0;
    }

    .banner-icon-box img {
        width: 50px;
        height: 50px;
    }

    .bottom-help-banner h3 {
        font-size: 25px;
        font-weight: 600;
        color: #FFFFFF;
        margin-top: -5px;
        margin-bottom: 5px;
    }

    .bottom-help-banner p {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.75);
        margin: 0;
    }

    .btn-outline-call {
        border: 2px solid var(--primary-orange, #FF6600);
        background: transparent;
        color: #fff;
        padding: 10px 22px;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
        white-space: nowrap;
    }

    .btn-outline-call:hover {
        background: var(--primary-orange, #FF6600);
        color: #fff;
    }

    /* --- RESPONSIVE MEDIA QUERIES --- */
    @media (max-width: 1024px) {
        .lco-hero-container {
            flex-direction: column;
            text-align: left;
        }

        .lco-container,
        .lco-hero-container {
            padding: 0 0px !important;
        }

        .why-lco-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .why-lco-item:nth-child(2)::after {
            display: none;
        }

        .lco-hero-graphic {
            width: 100%;
        }
    }

    @media (max-width: 768px) {

        .lco-container,
        .lco-hero-container {
            padding: 0 !important;
        }

        .lco-hero-content {
            padding: 10px 20px 40px;
        }

        .lco-hero-content h1 {
            font-size: 32px;
        }

        .lco-hero-graphic {
            width: 180px;
        }

        .lco-hero-img {

            margin: 0 0 -25px -90px;
        }

        .pin-form-row {
            flex-direction: column;
        }

        .btn-check-pin {
            width: 100%;
            justify-content: center;
        }

        .why-lco-grid {
            grid-template-columns: 1fr;
        }

        .why-lco-item::after {
            display: none !important;
        }

        .bottom-help-banner {
            width: 80%;
            flex-direction: column;
            text-align: center;
            gap: 20px;
            padding: 25px 20px;
            justify-self: center;

        }

        .support-left {
            flex-direction: column;
        }

        .pin-checker-card,
        .why-lco-box {
            padding: 25px 20px;
            width: 80%;
            justify-self: center;
        }
    }
</style>
