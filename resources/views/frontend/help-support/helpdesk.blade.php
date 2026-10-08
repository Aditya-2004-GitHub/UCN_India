@extends('frontend.layout.app')

@section('title', 'UCN India - Help Desk')

@section('content')
<div class="helpdesk-page-wrapper">
    <!-- Hero Banner Section -->
    <section class="help-hero-section">
        <div class="container-fluid help-hero-container">
            <div class="help-hero-content">
                <div class="help-breadcrumb">
                    <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <a href="#">Help & Support</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <span>Help desk</span>
                </div>
                <span class="sub-heading-orange">HELP DESK</span>
                <h1>We're Here to <br><span class="highlight-lives">Help You</span></h1>
                <div class="hero-bottom-line"></div>
                <p>Get quick solutions to your queries and issues.<br> Our support team is available 24x7 to assist you.
                </p>
            </div>
            <div class="help-hero-graphic">
                <!-- Background Blob Shape Image -->
                <img src="{{ asset('asset/images/help_support/helpdesk-hero.png') }}" alt="Blob Background"
                    class="blob-bg-img">
                <!-- Upar aane wali main image -->
                {{-- <img src="{{ asset('asset/images/ucn-logo.png') }}" alt="About Main Image" class="hero-main-img"> --}}
                <div class="blob-floating-icon"><i class="fa-solid fa-users"></i></div>
            </div>
        </div>

        <!-- 4 Feature Cards Bar -->

    </section>
    <div class="container-fluid help-features-wrapper">
        <div class="help-features-bar">
            <div class="help-feature-item">
                <div class="feature-icon-circle icon-purple"><i class="fa-solid fa-headset"></i></div>
                <div class="feature-text">
                    <strong>24x7 Support</strong>
                    <span>Our team is available round the clock.</span>
                </div>
            </div>
            <div class="help-feature-item">
                <div class="feature-icon-circle icon-orange"><i class="fa-solid fa-bolt"></i></div>
                <div class="feature-text">
                    <strong>Quick Response</strong>
                    <span>We ensure quick and effective solutions.</span>
                </div>
            </div>
            <div class="help-feature-item">
                <div class="feature-icon-circle icon-pink"><i class="fa-solid fa-user-shield"></i></div>
                <div class="feature-text">
                    <strong>Expert Assistance</strong>
                    <span>Trained professionals ready to help you.</span>
                </div>
            </div>
            <div class="help-feature-item">
                <div class="feature-icon-circle icon-blue"><i class="fa-solid fa-face-smile"></i></div>
                <div class="feature-text">
                    <strong>Customer First</strong>
                    <span>Your satisfaction is our top priority.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Form & Quick Help Section -->
    <section class="help-form-section">
        <div class="container-fluid help-form-container">
            <div class="help-grid-layout">

                <!-- Left Side: Submit Your Request Form -->
                <div class="request-form-card">
                    <div class="form-card-header">
                        <div class="header-icon-dot"></div>
                        <div>
                            <h2>Submit Your Request</h2>
                            <div class="hero-bottom-line"></div>
                        </div>
                    </div>

                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group-nature">
                            <label>Nature of Request</label>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input type="radio" name="nature_of_request" value="Corporate" checked> Corporate
                                </label>
                                <label class="radio-label">
                                    <input type="radio" name="nature_of_request" value="Subscriber"> Subscriber
                                </label>
                            </div>
                        </div>

                        <div class="form-row-two">
                            <div class="input-box-wrapper">
                                <i class="fa-solid fa-user input-icon"></i>
                                <input type="text" placeholder="First Name" class="custom-input" required>
                            </div>
                            <div class="input-box-wrapper">
                                <i class="fa-solid fa-phone input-icon"></i>
                                <input type="text" placeholder="Mobile No." class="custom-input" required>
                            </div>
                        </div>

                        <div class="form-row-two">
                            <div class="input-box-wrapper">
                                <i class="fa-solid fa-tag input-icon"></i>
                                <input type="text" placeholder="Subject" class="custom-input" required>
                            </div>
                            <div class="input-box-wrapper">
                                <i class="fa-solid fa-envelope input-icon"></i>
                                <input type="email" placeholder="Email" class="custom-input" required>
                            </div>
                        </div>

                        <div class="input-box-wrapper full-width">
                            <i class="fa-solid fa-list input-icon"></i>
                            <select class="custom-input custom-select" required>
                                <option value="disabled" selected>Type of Query</option>
                                <option value="investor_relations">Investor Relations</option>
                                <option value="billing">Billing Enquiry</option>
                                <option value="media">Media</option>
                                <option value="marketing">Marketing</option>
                                <option value="any_other">Any Other</option>
                            </select>
                            <i class="fa-solid fa-chevron-down select-arrow"></i>
                        </div>

                        <div class="input-box-wrapper full-width">
                            <textarea placeholder="Description" class="custom-textarea" rows="4" required></textarea>
                        </div>

                        <button type="submit" class="btn-primary-gradient submit-btn">
                            Submit <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form>
                </div>

                <!-- Right Side: Quick Help Cards -->
                <div class="quick-help-sidebar">
                    <div class="form-card-header">
                        <div class="header-icon-dot"></div>
                        <div>
                            <h2>Quick Help</h2>
                            <div class="hero-bottom-line"></div>
                        </div>
                    </div>
                    <div class="quick-help-list">
                        <a href="#" class="quick-help-item">
                            <div class="quick-icon icon-purple"><i class="fa-solid fa-circle-plus"></i></div>
                            <div class="quick-content">
                                <strong>Get New Connection</strong>
                                <p>Apply for a new connection easily online.</p>
                            </div>
                            <i class="fa-solid fa-chevron-right arrow-icon"></i>
                        </a>

                        <a href="#" class="quick-help-item">
                            <div class="quick-icon icon-orange"><i class="fa-solid fa-box-archive"></i></div>
                            <div class="quick-content">
                                <strong>Change the Package</strong>
                                <p>Modify or change your existing package.</p>
                            </div>
                            <i class="fa-solid fa-chevron-right arrow-icon"></i>
                        </a>

                        <a href="{{ route('help.upgradetohd') }}" class="quick-help-item">
                            <div class="quick-icon icon-pink"><i class="fa-solid fa-tv"></i></div>
                            <div class="quick-content">
                                <strong>Get HD STB and Package</strong>
                                <p>Upgrade to HD experience with best packages.</p>
                            </div>
                            <i class="fa-solid fa-chevron-right arrow-icon"></i>
                        </a>

                        <a href="{{ route('help.complaints') }}" class="quick-help-item">
                            <div class="quick-icon icon-blue"><i class="fa-solid fa-circle-exclamation"></i></div>
                            <div class="quick-content">
                                <strong>Got a Complaint?</strong>
                                <p>Lodge your complaint and we'll resolve it quickly.</p>
                            </div>
                            <i class="fa-solid fa-chevron-right arrow-icon"></i>
                        </a>
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

    .fa,
    .fas,
    .far,
    .fab,
    [class*="fa-"] {
        font-family: "Font Awesome 6 Free", "Font Awesome 6 Brands" !important;
    }

    .helpdesk-page-wrapper {
        background-color: var(--color-light-bg, #F8FAFC);
        overflow-x: hidden;
    }

    .help-hero-container,
    .help-features-wrapper,
    .help-form-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
    }

    /* --- HERO SECTION --- */
    .help-hero-section {
        padding: 50px 0 110px;
        background: linear-gradient(to bottom, var(--color-white), var(--bg-light-blue));
    }

    .help-hero-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .help-breadcrumb {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .help-breadcrumb a {
        color: var(--color-purple, #7C3AED);
        text-decoration: none;
    }

    .sub-heading-orange {
        font-size: 16px;
        font-weight: 600;
        color: var(--primary-orange, #FF6600);
    }

    .help-hero-content h1 {
        font-size: 45px;
        font-weight: 600;
        color: var(--color-text-main, #1E293B);
        line-height: 1.3;
        margin-top: 8px;
        margin-bottom: 20px;
    }

    .highlight-lives {
        background: var(--primary-orange);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .help-hero-content p {
        font-size: 15px;
        color: var(--color-text-muted, #64748B);
        line-height: 1.6;
        margin-bottom: 25px;
    }

    .hero-bottom-line {
        width: 55px;
        height: 2.3px;
        margin-top: 10px;
        background: linear-gradient(to right, var(--primary-orange), var(--color-purple));
        border-radius: 2px;
    }

    .help-hero-graphic {
        position: relative;
        width: 520px;
        height: 420px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .blob-bg-img {
        position: absolute;
        width: 100%;
        height: auto;
        z-index: 1;
        object-fit: contain;
    }

    .hero-main-img {
        position: absolute;
        width: 75%;
        height: auto;
        z-index: 2;
        border-radius: 20px;
        object-fit: cover;
    }

    /* --- 4 FEATURE CARDS BAR --- */
    .help-features-bar {
        background: var(--color-white, #FFFFFF);
        border-radius: 24px;
        padding: 25px 35px;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.08);
        margin-top: -60px;
        position: relative;
        z-index: 5;
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

    /* --- FORM & QUICK HELP SECTION --- */
    .help-form-section {
        padding: 60px 0 30px;
    }

    .help-grid-layout {
        display: grid;
        grid-template-columns: 1.3fr 0.9fr;
        gap: 30px;
        align-items: start;
    }

    .request-form-card,
    .quick-help-sidebar {
        background: var(--color-white, #FFFFFF);
        border-radius: 24px;
        padding: 30px 40px 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .form-card-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 30px;
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
        background: var(--bg-orange, #FFF3EC);
        color: var(--primary-orange, #FF6600);
    }

    .form-card-header h2 {
        font-size: 20px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin: 0;
    }

    /* Form Elements */
    .form-group-nature {
        margin-bottom: 15px;
    }

    .form-group-nature label {
        font-size: 14px;
        font-weight: 600;
        color: var(--color-text-main, #1E293B);
        display: block;
        margin-bottom: 8px;
    }

    .radio-group {
        display: flex;
        gap: 30px;
    }

    .radio-label {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
    }

    .radio-label input[type="radio"] {
        accent-color: var(--color-light-blue, #0284C7);
        width: 16px;
        height: 16px;
    }

    .form-row-two {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 5px;
    }

    .input-box-wrapper {
        position: relative;
        margin-bottom: 12px;
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

    .custom-select {
        appearance: none;
        cursor: pointer;
    }

    .select-arrow {
        position: absolute;
        top: 50%;
        right: 18px;
        transform: translateY(-50%);
        color: #94A3B8;
        font-size: 12px;
        pointer-events: none;
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
        background: linear-gradient(to right, var(--color-blue, #0284C7), var(--primary-orange, #FF6600));
        box-shadow: 0 6px 20px rgba(255, 102, 0, 0.25);
        transition: transform 0.2s ease;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
    }

    /* Quick Help Sidebar List */
    .quick-help-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .quick-help-item {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 5px;
        padding: 16px 20px;
        background: #F8FAFC;
        border: 1px solid #E2E8F0;
        border-radius: 16px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .quick-help-item:hover {
        background: #fff;
        border-color: var(--primary-orange, #FF6600);
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
    }

    .quick-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        flex-shrink: 0;
    }

    .quick-content {
        flex-grow: 1;
    }

    .quick-content strong {
        font-size: 15px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        display: block;
        margin-bottom: 2px;
    }

    .quick-content p {
        font-size: 13px;
        color: var(--color-text-muted, #64748B);
        margin: 0;
        line-height: 1.4;
    }

    .arrow-icon {
        color: #94A3B8;
        font-size: 14px;
        transition: transform 0.2s ease;
    }

    .quick-help-item:hover .arrow-icon {
        color: var(--primary-orange, #FF6600);
        transform: translateX(4px);
    }

    /* --- RESPONSIVE MEDIA QUERIES --- */
    @media (max-width: 1200px) {
        .help-features-bar {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .help-feature-item:nth-child(2)::after {
            display: none;
        }
    }

    @media (max-width: 1024px) {

        .help-hero-container,
        .help-features-wrapper,
        .help-form-container {
            padding: 0 20px !important;
        }

        .help-hero-container {
            flex-direction: column;
            text-align: left;
            gap: 30px;
        }

        .help-hero-graphic {
            width: 100%;
            max-width: 400px;
            height: 320px;
            margin: 0 auto;
        }

        .help-grid-layout {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {

        .help-hero-container,
        .help-features-wrapper,
        .help-form-container {
            padding: 0 15px !important;
            width: 85%;
        }

        .help-features-bar {
            grid-template-columns: 1fr;
            margin-top: -30px;
            padding: 20px;
        }

        .help-feature-item::after {
            display: none !important;
        }

        .form-row-two {
            grid-template-columns: 1fr;
        }

        .help-hero-content h1 {
            font-size: 32px;
        }

        .request-form-card,
        .quick-help-sidebar {
            padding: 20px 15px;
        }

        .radio-group {
            gap: 20px;
        }
    }
</style>
