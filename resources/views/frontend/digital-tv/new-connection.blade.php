@extends('frontend.layout.app')

@section('title', 'UCN India - Get UCN New Connection')

@section('content')
<div class="upgrade-hd-page-wrapper">
    <!-- Hero Banner Section -->
    <section class="upgrade-hero-section">
        <div class="container-fluid upgrade-hero-container">
            <div class="upgrade-hero-content">
                <div class="upgrade-breadcrumb">
                    <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <a href="#">Digital TV</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <span>Get UCN New Connection</span>
                </div>
                <h1>Get UCN <br><span class="highlight-package">New Connection</span></h1>
                <div class="hero-bottom-line"></div>
                <p class="hero-subtext">Fill in your details and our team will get in touch with <br>you to set up your
                    connection.</p>
            </div>
            <div class="upgrade-hero-graphic">
                <img src="{{ asset('asset/images/digital-tv/connection/connection-hero.png') }}" alt="Upgrade Hero Graphic"
                    class="upgrade-hero-img">

            </div>
        </div>
    </section>

    <!-- Form & Connect Sidebar Section -->
    <section class="upgrade-form-section">
        <div class="container-fluid upgrade-form-container">
            <div class="upgrade-grid-layout">

                <!-- Left Side: Your Details Form -->
                <div class="request-form-card">
                    <div class="form-card-header">
                        <div class="header-icon-dot"><i class="fa-solid fa-user-plus"></i></div>
                        <div>
                            <h2>Your Details</h2>
                        </div>
                    </div>

                    <form action="#" method="POST">
                        @csrf
                        <div class="form-row-two">
                            <div class="input-box-wrapper">
                                <i class="fa-solid fa-user input-icon"></i>
                                <input type="text" placeholder="First Name*" class="custom-input" required>
                            </div>
                            <div class="input-box-wrapper">
                                <i class="fa-solid fa-user input-icon"></i>
                                <input type="text" placeholder="Last Name*" class="custom-input" required>
                            </div>
                        </div>

                        <div class="form-row-two">
                            <div class="input-box-wrapper">
                                <i class="fa-solid fa-location-dot input-icon"></i>
                                <input type="text" placeholder="Pincode*" class="custom-input" required>
                            </div>
                            <div class="input-box-wrapper">
                                <i class="fa-solid fa-phone input-icon"></i>
                                <input type="text" placeholder="Mobile No.*" class="custom-input" required>
                            </div>
                        </div>

                        <div class="form-row-two">
                            <div class="input-box-wrapper">
                                <i class="fa-solid fa-envelope input-icon"></i>
                                <input type="email" placeholder="Email*" class="custom-input" required>
                            </div>
                            <div class="input-box-wrapper">
                                <i class="fa-solid fa-phone-volume input-icon"></i>
                                <input type="text" placeholder="Landline" class="custom-input">
                            </div>
                        </div>

                        <div class="input-box-wrapper full-width">
                            <textarea placeholder="Remarks/Comments*" class="custom-textarea" rows="4"
                                required></textarea>
                        </div>

                        <button type="submit" class="btn-primary-gradient submit-btn">
                            Submit <i class="fa-solid fa-arrow-right"></i>
                        </button>

                        <div class="form-secure-note">
                            <i class="fa-solid fa-lock"></i> Your information is safe with us
                        </div>
                    </form>
                </div>

                <!-- Right Side: Connect with Us Sidebar -->
                <div class="connect-sidebar">
                    <div class="connect-header">
                        <span class="connect-sub">In Case of any difficulties</span>
                        <h3 style="color: var(--primary-orange);">Connect <span style="color: var(--color-blue);">with
                                Us</span></h3>
                        <div class="hero-bottom-line"></div>
                    </div>

                    <div class="connect-info-list">
                        <div class="connect-info-item">
                            <div class="connect-icon icon-blue"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="connect-content">
                                <strong>UCN Corporate</strong>
                                <p>502, Milestone, 12, Ramdaspeth, Nagpur-440010</p>
                            </div>
                        </div>

                        <div class="connect-info-item">
                            <div class="connect-icon icon-orange"><i class="fa-solid fa-phone-volume"></i></div>
                            <div class="connect-content">
                                <strong>Call Support</strong>
                                <p>08069033999</p>
                            </div>
                        </div>

                        <div class="connect-info-item">
                            <div class="connect-icon icon-blue"><i class="fa-solid fa-phone"></i></div>
                            <div class="connect-content">
                                <strong>Landline Number</strong>
                                <p>0712-6633990</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom Help Banner -->
            <div class="bottom-help-banner">
                <div class="help-banner-left">
                    <div class="banner-icon-box">
                        <img src="{{ asset('asset/images/help_support/headset.png') }}" alt="Support"
                            class="banner-img">
                    </div>
                    <div>
                        <h3>Need help with your connection?</h3>
                        <p>Our team is here to assist you with any queries related to new connections.</p>
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

    .fa,
    .fas,
    .far,
    .fab,
    [class*="fa-"] {
        font-family: "Font Awesome 6 Free", "Font Awesome 6 Brands" !important;
    }

    .upgrade-hd-page-wrapper {
        background-color: var(--color-light-bg, #F8FAFC);
        overflow-x: hidden;
    }

    .upgrade-hero-container,
    .upgrade-form-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
    }

    /* --- HERO SECTION --- */

    .upgrade-hero-section {
        padding: 50px 0 70px;
        background: linear-gradient(to bottom, var(--color-white), var(--bg-light-blue)),
                    url("{{ asset('asset/images/digital-tv/connection/connection-hero-bg.png') }}");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .upgrade-hero-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .upgrade-breadcrumb {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .upgrade-breadcrumb a {
        color: var(--color-purple, #7C3AED);
        text-decoration: none;
    }

    .upgrade-hero-content h1 {
        font-size: 42px;
        font-weight: 600;
        color: var(--color-text-main, #1E293B);
        line-height: 1.3;
        margin-bottom: 10px;
    }

    .highlight-package {
        background:var(--primary-orange);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-subtext {
        font-size: 15px;
        color: var(--color-text-muted, #64748B);
        line-height: 1.6;
        margin-top: 15px;
    }

    .hero-bottom-line {
        width: 55px;
        height: 2.3px;
        margin-top: 10px;
        background: linear-gradient(to right, var(--primary-orange), var(--color-purple));
        border-radius: 2px;
    }

    .upgrade-hero-graphic {
        position: relative;
        width: 400px;
        height: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .upgrade-hero-img {
        position: absolute;
        width: 100%;
        height: auto;
        object-fit: contain;
    }

    /* --- FORM & CONNECT SECTION --- */
    .upgrade-form-section {
        padding: 40px 0 20px;
    }

    .upgrade-grid-layout {
        display: grid;
        grid-template-columns: 1.4fr 0.9fr;
        gap: 30px;
        align-items: start;
        margin-bottom: 40px;
    }

    .request-form-card {
        background: var(--color-white, #FFFFFF);
        border-radius: 24px;
        padding: 35px 40px 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
    }

    .connect-sidebar {
        background: var(--color-white, #FFFFFF);
        border-radius: 24px;
        padding: 40px ;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
    }

    .form-card-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 10px;
    }

    .header-icon-dot {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
        background: var(--bg-orange);
        color: var(--primary-orange);
    }

    .form-card-header h2 {
        font-size: 35px;
        font-weight: 600;
        color: var(--color-blue);
        margin: 0 0 4px 0;
    }

    /* Form Elements */
    .form-row-two {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 5px;
    }

    .input-box-wrapper {
        position: relative;
        margin-bottom: 15px;
    }

    .input-box-wrapper.full-width {
        width: 100%;
    }

    .input-icon {
        position: absolute;
        top: 50%;
        left: 18px;
        transform: translateY(-50%);
        color: #94A3B8;
        font-size: 15px;
    }

    .custom-input {
        width: 100%;
        padding: 12px 16px 12px 48px;
        border: 1px solid #E2E8F0;
        border-radius: 14px;
        font-size: 14px;
        color: var(--color-text-main, #1E293B);
        background: #F8FAFC;
        outline: none;
        transition: all 0.3s ease;
        font-family: 'Poppins', sans-serif;
    }

    .custom-input:focus {
        border-color: var(--primary-orange, #FF6600);
        background: #fff;
        box-shadow: 0 0 0 4px rgba(255, 102, 0, 0.08);
    }

    .custom-textarea {
        width: 100%;
        padding: 16px 18px;
        border: 1px solid #E2E8F0;
        border-radius: 14px;
        font-size: 14px;
        color: var(--color-text-main, #1E293B);
        background: #F8FAFC;
        outline: none;
        resize: vertical;
        font-family: 'Poppins', sans-serif;
        transition: all 0.3s ease;
    }

    .custom-textarea:focus {
        border-color: var(--primary-orange, #FF6600);
        background: #fff;
        box-shadow: 0 0 0 4px rgba(255, 102, 0, 0.08);
    }

    .submit-btn {
        width: 100%;
        padding: 14px;
        border: none;
        border-radius: 14px;
        color: #fff;
        font-weight: 600;
        font-size: 15px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        background: linear-gradient(to right, var(--color-blue), var(--primary-orange));
        box-shadow: 0 6px 20px rgba(255, 102, 0, 0.25);
        transition: transform 0.2s ease;
        margin-top: 10px;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
    }

    .form-secure-note {
        text-align: center;
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin-top: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
    }

    /* Connect Sidebar */
    .connect-header {
        margin-bottom: 25px;
    }

    .connect-sub {
        font-size: 15px;
        color: var(--color-text-muted, #64748B);
        display: block;
        margin-bottom: 4px;
    }

    .connect-header h3 {
        font-size: 30px;
        font-weight: 600;
        margin: 0;
    }

    .connect-info-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .connect-info-item {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 20px;
        background: #F8FAFC;
        border: 1px solid #E2E8F0;
        border-radius: 16px;
    }

    .connect-content strong {
        font-size: 18px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        display: block;
        margin-bottom: 4px;
    }

    .connect-content p {
        font-size: 15px;
        color: var(--color-text-muted, #64748B);
        margin: 0;
        line-height: 1.5;
    }

    .connect-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        flex-shrink: 0;
    }

    .icon-blue {
        background: var(--bg-light-blue);
        color: var(--color-blue);
    }

    .icon-orange {
        background: var(--bg-orange);
        color: var(--primary-orange);
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
        .upgrade-hero-container {
            flex-direction: column;
            text-align: left;
            gap: 20px;
        }

        .upgrade-hero-graphic {
            width: 100%;
            max-width: 300px;
            height: 200px;
            margin: 0px auto 10px;
        }

        .upgrade-form-container {
            padding: 0 20px !important;
        }

        .upgrade-grid-layout {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {

        .upgrade-hero-container,
        .upgrade-form-container {
            padding: 0 15px !important;
        }

        .form-row-two {
            grid-template-columns: 1fr;
        }

        .upgrade-hero-content h1 {
            font-size: 30px;
        }

        .hero-subtext {
            font-size: 15px;
            color: var(--color-text-muted, #64748B);
            line-height: 1.6;
            margin: 10px;
        }

        .request-form-card,
        .connect-sidebar {
            padding: 25px 20px;
            width: 80%;
        }

        .form-card-header h2 {
            font-size: 25px;
            font-weight: 600;
            color: var(--color-blue);
            margin: 0 0 4px 0;
        }

        .bottom-help-banner {
            flex-direction: column;
            text-align: center;
            gap: 20px;
            padding: 25px 20px;
            width: 80%;
        }

        .help-banner-left {
            flex-direction: column;
        }
    }
</style>
