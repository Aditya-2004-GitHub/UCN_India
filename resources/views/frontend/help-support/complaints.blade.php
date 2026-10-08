@extends('frontend.layout.app')

@section('title', 'UCN India - Complaint & Support')

@section('content')
<div class="complaint-page-wrapper">
    <!-- Hero Banner Section (100% Full Width Background) -->
    <section class="complaint-hero-section">
        <div class="container-fluid complaint-hero-container">
            <!-- 1st Div: Content Area -->
            <div class="complaint-hero-content">
                <div class="complaint-breadcrumb">
                    <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <a href="#">Help & Support</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <span>Complaint</span>
                </div>
                <h1>We're Here to <span class="highlight-orange">Help!</span></h1>
                <p class="hero-subtext">Experience ultra-fast and reliable broadband for your home and business.</p>
            </div>

            <!-- 2nd Div: Image/Graphic Area -->
            <div class="complaint-hero-graphic">
                <img src="{{ asset('asset/images/ucn-logo.png') }}" alt="Complaint Hero Graphic" class="complaint-hero-img">
            </div>
        </div>
    </section>

    <!-- Overlapping Tab Switcher Card -->
    <section class="complaint-tabs-section">
        <div class="container-fluid complaint-container">
            <div class="complaint-tab-card">
                <button class="tab-btn active" onclick="switchTab('file')">
                    <i class="fa-solid fa-file-pen"></i> File a Complaint
                </button>
                <button class="tab-btn" onclick="switchTab('track')">
                    <i class="fa-solid fa-magnifying-glass"></i> Track a Complaint
                </button>
            </div>
        </div>
    </section>

    <!-- Main Content Section (Forms & FAQs) -->
    <section class="complaint-content-section">
        <div class="container-fluid complaint-container">

            <!-- Forms Grid (2 Columns) -->
            <div class="complaint-forms-grid" id="fileComplaintBox">

                <!-- 1. File a Complaint Form Card -->
                <div class="complaint-form-card">
                    <div class="form-card-header">
                        <div class="form-icon bg-orange"><i class="fa-solid fa-file-pen"></i></div>
                        <div>
                            <h3>File a Complaint</h3>
                            <p>Please provide the details below to raise your complaint</p>
                        </div>
                    </div>
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Username*</label>
                            <div class="input-with-icon">
                                <i class="fa-solid fa-envelope"></i>
                                <input type="text" placeholder="Enter your username.." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password*</label>
                            <div class="input-with-icon">
                                <i class="fa-solid fa-lock"></i>
                                <input type="password" placeholder="Enter your Password.." required>
                            </div>
                        </div>
                        <button type="submit" class="btn-primary-gradient form-submit-btn">
                            Login <i class="fa-solid fa-arrow-right"></i>
                        </button>
                        <div class="form-footer-link">
                            <a href="#">Forget Password?</a>
                        </div>
                    </form>
                </div>

                <!-- 2. Track a Complaint Form Card -->
                <div class="complaint-form-card">
                    <div class="form-card-header">
                        <div class="form-icon bg-purple"><i class="fa-solid fa-magnifying-glass"></i></div>
                        <div>
                            <h3>Track a Complaint</h3>
                            <p>Enter your complaint number to check status</p>
                        </div>
                    </div>
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Complaint Number*</label>
                            <div class="input-with-icon">
                                <i class="fa-solid fa-envelope"></i>
                                <input type="text" placeholder="Enter your Complaint Number.." required>
                            </div>
                        </div>
                        <button type="submit" class="btn-purple-gradient form-submit-btn">
                            Check Status <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>

            </div>

            <!-- Common Issues & Solutions Accordion Section -->
            <div class="common-issues-box">
                <div class="issues-header">
                    <h2>Common<span style="color: var(--primary-orange)"> Issues</span>  & <span style="color: var(--primary-orange)">Solutions</span></h2>
                    <p>Find quick solutions to frequently faced issues</p>
                </div>

                <div class="faq-list">
                    <div class="faq-item" onclick="toggleFaq(this)">
                        <div class="faq-question">
                            <div class="faq-q-left">
                                <span class="faq-mini-icon"><i class="fa-solid fa-gauge-high"></i></span>
                                <span>How can I check my internet connection speed?</span>
                            </div>
                            <i class="fa-solid fa-chevron-down faq-arrow"></i>
                        </div>
                        <div class="faq-answer">
                            <p>You can check your speed by connecting to your Wi-Fi network and running an online speed test through trusted platforms, or directly via your UCN user portal dashboard.</p>
                        </div>
                    </div>

                    <div class="faq-item" onclick="toggleFaq(this)">
                        <div class="faq-question">
                            <div class="faq-q-left">
                                <span class="faq-mini-icon"><i class="fa-solid fa-wifi"></i></span>
                                <span>What should I do if my internet isn't working?</span>
                            </div>
                            <i class="fa-solid fa-chevron-down faq-arrow"></i>
                        </div>
                        <div class="faq-answer">
                            <p>First, try restarting your Wi-Fi router and modem by unplugging them for 30 seconds. If the issue persists, check all cable connections or contact our 24/7 support team.</p>
                        </div>
                    </div>

                    <div class="faq-item" onclick="toggleFaq(this)">
                        <div class="faq-question">
                            <div class="faq-q-left">
                                <span class="faq-mini-icon"><i class="fa-solid fa-credit-card"></i></span>
                                <span>How do I pay my UCN bill online?</span>
                            </div>
                            <i class="fa-solid fa-chevron-down faq-arrow"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Log in to your UCN account on our website or mobile app, go to the 'Billing & Payments' section, choose your preferred payment method, and complete the transaction securely.</p>
                        </div>
                    </div>

                    <div class="faq-item" onclick="toggleFaq(this)">
                        <div class="faq-question">
                            <div class="faq-q-left">
                                <span class="faq-mini-icon"><i class="fa-solid fa-arrow-up-right-dots"></i></span>
                                <span>Can I upgrade or change my current plan?</span>
                            </div>
                            <i class="fa-solid fa-chevron-down faq-arrow"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, absolutely! You can easily upgrade your broadband or IPTV plan anytime by visiting the 'Plans & Upgrades' section in your account dashboard.</p>
                        </div>
                    </div>

                    <div class="faq-item" onclick="toggleFaq(this)">
                        <div class="faq-question">
                            <div class="faq-q-left">
                                <span class="faq-mini-icon"><i class="fa-solid fa-user-gear"></i></span>
                                <span>How can I update my account information?</span>
                            </div>
                            <i class="fa-solid fa-chevron-down faq-arrow"></i>
                        </div>
                        <div class="faq-answer">
                            <p>To update your profile details like registered mobile number, email, or billing address, log into your portal, navigate to 'Account & Profile Settings', and save changes.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
@endsection

<script>
    function toggleFaq(element) {
        const items = document.querySelectorAll('.faq-item');
        items.forEach(item => {
            if (item !== element) {
                item.classList.remove('active');
            }
        });
        element.classList.toggle('active');
    }

    function switchTab(type) {
        const btns = document.querySelectorAll('.tab-btn');
        btns.forEach(btn => btn.classList.remove('active'));
        event.currentTarget.classList.add('active');
    }
</script>

<style>
    body, html, * {
        font-family: 'Poppins', sans-serif !important;
    }

    .complaint-page-wrapper {
        background-color: var(--color-light-bg, #F8FAFC);
        overflow-x: hidden;
    }

    .complaint-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
    }

    /* --- HERO SECTION (100% Full Width Background) --- */
    .complaint-hero-section {

        padding: 80px 0 170px;
        background: linear-gradient(to bottom, var(--color-white), var(--bg-light-blue)),
                    url("{{ asset('asset/images/help_support/complaint.png') }}");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .complaint-hero-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 30px;
    }

    .complaint-hero-content {
        flex: 1;
    }

    .complaint-hero-graphic {
        flex-shrink: 0;
        width: 450px;
        display: flex;
        justify-content: center;
    }

    .complaint-hero-img {
        max-width: 100%;
        height: auto;
        object-fit: contain;
    }

    .complaint-breadcrumb {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .complaint-breadcrumb a {
        color: var(--color-purple, #7C3AED);
        text-decoration: none;
    }

    .complaint-hero-content h1 {
        font-size: 44px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        line-height: 1.3;
        margin-bottom: 10px;
    }

    .highlight-orange {
        color: var(--primary-orange, #FF6600);
    }

    .hero-subtext {
        font-size: 16px;
        color: var(--color-text-muted, #64748B);
        line-height: 1.6;
        margin-top: 10px;
    }

    /* --- OVERLAPPING TAB SWITCHER --- */
    .complaint-tabs-section {
        margin-top: -45px;
        position: relative;
        z-index: 10;
        margin-bottom: 40px;
    }

    .complaint-tab-card {
        background: #FFFFFF;
        border-radius: 20px;
        padding: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
        display: flex;
        gap: 15px;
        border: 1px solid #E2E8F0;
        max-width: 600px;
        margin: 0 auto;
    }

    .tab-btn {
        flex: 1;
        background: transparent;
        border: none;
        padding: 12px 20px;
        border-radius: 12px;
        font-size: 15px;
        font-weight: 600;
        color: var(--color-text-main, #1E293B);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .tab-btn.active {
        background: var(--primary-orange, #FF6600);
        color: #fff;
        box-shadow: 0 4px 15px rgba(255, 102, 0, 0.25);
    }

    /* --- FORMS SECTION --- */
    .complaint-content-section {
        padding: 0 0 80px;
    }

    .complaint-forms-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-bottom: 50px;
    }

    .complaint-form-card {
        background: #FFFFFF;
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        border: 1px solid #E2E8F0;
    }

    .form-card-header {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 30px;
    }

    .form-icon {
        width: 55px;
        height: 55px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        flex-shrink: 0;
    }

    .bg-orange { background: #FFF3EC; color: #FF6600; }
    .bg-purple { background: #F3E8FF; color: #7C3AED; }

    .form-card-header h3 {
        font-size: 20px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin: 0 0 4px 0;
    }

    .form-card-header p {
        font-size: 13px;
        color: var(--color-text-muted, #64748B);
        margin: 0;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-size: 14px;
        font-weight: 600;
        color: var(--color-text-main, #1E293B);
        margin-bottom: 8px;
    }

    .input-with-icon {
        position: relative;
        display: flex;
        align-items: center;
    }

    .input-with-icon i {
        position: absolute;
        left: 16px;
        color: #94A3B8;
        font-size: 16px;
    }

    .input-with-icon input {
        width: 100%;
        padding: 14px 16px 14px 48px;
        border: 1px solid #E2E8F0;
        border-radius: 14px;
        font-size: 14px;
        color: var(--color-text-main, #1E293B);
        background: #F8FAFC;
        outline: none;
        transition: border-color 0.2s ease;
    }

    .input-with-icon input:focus {
        border-color: var(--primary-orange, #FF6600);
        background: #FFF;
    }

    .form-submit-btn {
        width: 100%;
        padding: 14px;
        border-radius: 14px;
        border: none;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        color: #fff;
        margin-top: 25px;
    }

    .btn-purple-gradient {
        background: linear-gradient(135deg, #7C3AED, #4F46E5);
        box-shadow: 0 4px 15px rgba(124, 58, 237, 0.25);
    }

    .form-footer-link {
        text-align: center;
        margin-top: 20px;
    }

    .form-footer-link a {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        text-decoration: none;
        font-weight: 500;
    }

    .form-footer-link a:hover {
        color: var(--primary-orange, #FF6600);
    }

    /* --- COMMON ISSUES & SOLUTIONS ACCORDION --- */
    .common-issues-box {
        background: #FFFFFF;
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        border: 1px solid #E2E8F0;
    }

    .issues-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .issues-header h2 {
        font-size: 26px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin-bottom: 6px;
    }

    .issues-header p {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin: 0;
    }

    .faq-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .faq-item {
        border: 1px solid #E2E8F0;
        border-radius: 16px;
        background: #F8FAFC;
        overflow: hidden;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .faq-item.active {
        background: #FFF;
        border-color: var(--primary-orange, #FF6600);
        box-shadow: 0 4px 15px rgba(0,0,0,0.03);
    }

    .faq-question {
        padding: 18px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 15px;
        font-weight: 600;
        color: var(--color-text-main, #1E293B);
    }

    .faq-q-left {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .faq-mini-icon {
        width: 36px;
        height: 36px;
        background: #FFF3EC;
        color: var(--primary-orange, #FF6600);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
    }

    .faq-arrow {
        font-size: 13px;
        color: var(--color-text-muted, #64748B);
        transition: transform 0.3s ease;
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        line-height: 1.6;
        padding: 0 20px;
    }

    .faq-item.active .faq-answer {
        max-height: 150px;
        padding: 0 20px 20px 70px;
    }

    .faq-item.active .faq-arrow {
        transform: rotate(180deg);
        color: var(--primary-orange, #FF6600);
    }

    /* --- RESPONSIVE MEDIA QUERIES --- */
    @media (max-width: 1024px) {
        .complaint-hero-container {
            flex-direction: column;
            text-align: left;
        }

        .complaint-container, .complaint-hero-container {
            padding: 0 20px !important;
        }

        .complaint-forms-grid {
            grid-template-columns: 1fr;
        }

        .complaint-hero-graphic {
            width: 100%;
        }
    }

    @media (max-width: 768px) {
        .complaint-container, .complaint-hero-container {
            padding: 0 15px !important;
        }

        .complaint-hero-content h1 {
            font-size: 32px;
        }

        .complaint-form-card, .common-issues-box {
            padding: 25px 20px;
        }

        .complaint-tab-card {
            flex-direction: column;
            gap: 10px;
            padding: 10px;
        }

        .faq-item.active .faq-answer {
            padding: 0 15px 15px 15px;
        }

        .faq-q-left {
            gap: 10px;
        }

        .faq-mini-icon {
            display: none;
        }
    }
</style>
