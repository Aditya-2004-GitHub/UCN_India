@extends('frontend.layout.app')

@section('title', 'UCN India - Contact Us')

@section('content')
<div class="contact-page-wrapper">
    <!-- Hero Banner Section -->
    <section class="contact-hero-section">
        <div class="container-fluid contact-hero-container">
            <div class="contact-hero-content">
                <div class="contact-breadcrumb">
                    <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <span>Contact Us</span>
                </div>
                <h1>Get in <span class="highlight-orange">Touch</span></h1>
                <p class="hero-subtext">We are here to help you. Reach out to our departments or send us an inquiry.</p>
                <div class="hero-bottom-line"></div>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="contact-content-section">
        <div class="container-fluid contact-container">

            <!-- Address & Direct Contact Cards -->
            <div class="info-cards-grid">
                <!-- Address Card -->
                <div class="info-card">
                    <div class="card-icon-box"><i class="fa-solid fa-location-dot"></i></div>
                    <h3>Address</h3>
                    <p class="card-highlight">UCN Corporate</p>
                    <p class="card-desc">502, Milestone, 12, Ramdaspeth, Nagpur - 440010</p>
                </div>

                <!-- Contact Info Card -->
                <div class="info-card">
                    <div class="card-icon-box"><i class="fa-solid fa-headset"></i></div>
                    <h3>Contact Numbers</h3>
                    <div class="contact-details-list">
                        <p><span>Tel. No.:</span> 0712 - 6633888 / 6633999</p>
                        <p><span>Toll Free No.:</span> 1800 313 1099</p>
                        <p><span>Customer Care:</span> 08069033999</p>
                    </div>
                </div>
            </div>

            <!-- Departmental Contacts Section with Tabs -->
            <div class="departments-card">
                <h2>Department Contacts</h2>
                <div class="hero-bottom-line"></div>

                <!-- Tabs Header -->
                <div class="dept-tabs-nav">
                    <button class="dept-tab-btn active" onclick="switchDeptTab(event, 'support-tab')">Support</button>
                    <button class="dept-tab-btn" onclick="switchDeptTab(event, 'nodal-tab')">Nodal Officer</button>
                    <button class="dept-tab-btn" onclick="switchDeptTab(event, 'directors-tab')">Directors</button>
                </div>

                <!-- Tab Content: Support -->
                <div id="support-tab" class="dept-tab-content active">
                    <div class="dept-grid">
                        <div class="dept-item">
                            <h4>Jabalpur</h4>
                            <p class="person-name">Mr. Ram Mantri</p>
                            <a href="mailto:rammantri@ucnindia.co.in"><i class="fa-solid fa-envelope"></i>
                                rammantri@ucnindia.co.in</a>
                        </div>
                        <div class="dept-item">
                            <h4>Administration Manager</h4>
                            <p class="person-name">Mr. Amol Patil</p>
                            <a href="mailto:amolpatil@ucnindia.co.in"><i class="fa-solid fa-envelope"></i>
                                amolpatil@ucnindia.co.in</a>
                        </div>
                        <div class="dept-item">
                            <h4>News Department</h4>
                            <p class="person-name">Mr. R. K. Singh <span class="badge-role">Chief Editor</span></p>
                            <a href="mailto:news@ucnindia.co.in"><i class="fa-solid fa-envelope"></i>
                                news@ucnindia.co.in</a>
                        </div>
                        <div class="dept-item">
                            <h4>Advertisement Marketing</h4>
                            <a href="mailto:marketing@ucnindia.com"><i class="fa-solid fa-envelope"></i>
                                marketing@ucnindia.com</a>
                        </div>
                        <div class="dept-item">
                            <h4>Set Top Box Division</h4>
                            <a href="mailto:care@ucnindia.com"><i class="fa-solid fa-envelope"></i>
                                care@ucnindia.com</a>
                        </div>
                        <div class="dept-item">
                            <h4>Broadband Division</h4>
                            <a href="mailto:it@ucnindia.com"><i class="fa-solid fa-envelope"></i> it@ucnindia.com</a>
                        </div>
                    </div>
                </div>

                <!-- Tab Content: Nodal Officer -->
                <div id="nodal-tab" class="dept-tab-content">
                    <div class="dept-grid">
                        <div class="dept-item">
                            <h4>Nodal Officer Desk</h4>
                            <p class="person-name">Grievance & Nodal Contact</p>
                            <a href="mailto:nodalofficer@ucnindia.com"><i class="fa-solid fa-envelope"></i>
                                nodalofficer@ucnindia.com</a>
                        </div>
                    </div>
                </div>

                <!-- Tab Content: Directors -->
                <div id="directors-tab" class="dept-tab-content">
                    <div class="dept-grid">
                        <div class="dept-item">
                            <h4>Board of Directors</h4>
                            <p class="person-name">Executive Office</p>
                            <a href="mailto:directors@ucnindia.com"><i class="fa-solid fa-envelope"></i>
                                directors@ucnindia.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Inquiry Form Section -->
            <div class="inquiry-card">
                <h2>We would love to hear from you.</h2>
                <p class="form-subtext">Fill out the form below and our team will get back to you shortly.</p>
                <div class="hero-bottom-line"></div>

                <form action="#" method="POST" class="contact-form">
                    @csrf
                    <!-- Inquiry Type Radios -->
                    <div class="form-radio-group">
                        <label class="radio-label">
                            <input type="radio" name="inquiry_type" value="customer" checked> Customer feedback &
                            Enquiries
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="inquiry_type" value="franchise"> Franchise Enquiries
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="inquiry_type" value="vendor"> Vendor Queries
                        </label>
                    </div>

                    <!-- Input Grid -->
                    <div class="form-grid">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" placeholder="Enter First Name" required>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" placeholder="Enter Last Name" required>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" placeholder="Enter Email address" required>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone" placeholder="Enter phone number" required>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label>City</label>
                        <input type="text" name="city" placeholder="Enter City" required>
                    </div>

                    <div class="form-group full-width">
                        <label>Message</label>
                        <textarea name="message" rows="4" placeholder="Enter message" required></textarea>
                    </div>

                    <!-- Consent Checkbox -->
                    <div class="form-consent-group">
                        <input type="checkbox" id="consent" name="consent" required>
                        <label for="consent">I consent to <strong>UCN</strong> and its representatives contacting me via
                            call, SMS, email, RCS or WhatsApp regarding their products and offers. This consent
                            supersedes any registration on DNC/NDNC.</label>
                    </div>

                    <button type="submit" class="submit-btn">SUBMIT</button>
                </form>
            </div>

        </div>
    </section>
</div>

<script>
    function switchDeptTab(evt, tabId) {
        let contents = document.getElementsByClassName("dept-tab-content");
        for (let c of contents) {
            c.classList.remove("active");
        }
        let buttons = document.getElementsByClassName("dept-tab-btn");
        for (let b of buttons) {
            b.classList.remove("active");
        }
        document.getElementById(tabId).classList.add("active");
        evt.currentTarget.classList.add("active");
    }
</script>
@endsection

<style>
    body,
    html,
    * {
        font-family: 'Poppins', sans-serif !important;
    }

    .contact-page-wrapper {
        background-color: var(--color-light-bg, #F8FAFC);
        overflow-x: hidden;
    }

    .contact-container,
    .contact-hero-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
    }

    /* --- HERO SECTION --- */
    .contact-hero-section {
        padding: 40px 0 60px;
        background: linear-gradient(to bottom, var(--color-white), var(--bg-light-blue));
    }

    .contact-breadcrumb {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .contact-breadcrumb a {
        color: var(--color-purple, #7C3AED);
        text-decoration: none;
    }

    .contact-hero-content h1 {
        font-size: 42px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        line-height: 1.3;
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
        margin-bottom: 25px;
    }

    /* --- INFO CARDS GRID --- */
    .contact-content-section {
        padding: 40px 0 ;
    }

    .info-cards-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        margin-bottom: 40px;
    }

    .info-card {
        background: #FFFFFF;
        border-radius: 24px;
        padding: 35px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        border: 1px solid #E2E8F0;
        display: flex;
        flex-direction: column;
        gap: 12px;
        
    }

    .card-icon-box {
        width: 50px;
        height: 50px;
        background: #FFF3EC;
        color: var(--primary-orange, #FF6600);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        margin-bottom: 5px;
    }

    .info-card h3 {
        font-size: 20px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin: 0;
    }

    .card-highlight {
        font-size: 16px;
        font-weight: 600;
        color: var(--primary-orange, #FF6600);
        margin: 0;
    }

    .card-desc {
        font-size: 15px;
        color: var(--color-text-muted, #64748B);
        margin: 0;
        line-height: 1.5;
    }

    .contact-details-list {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .contact-details-list p {
        font-size: 15px;
        color: var(--color-text-muted, #64748B);
        margin: 0;
    }

    .contact-details-list span {
        font-weight: 600;
        color: var(--color-text-main, #1E293B);
    }

    /* --- DEPARTMENTS CARD & TABS --- */
    .departments-card {
        background: #FFFFFF;
        border-radius: 24px;
        padding: 45px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        border: 1px solid #E2E8F0;
        margin-bottom: 40px;
    }

    .departments-card h2 {
        font-size: 26px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin-bottom: 0;
    }

    .dept-tabs-nav {
        display: flex;
        gap: 12px;
        margin-bottom: 30px;
        border-bottom: 1px solid #E2E8F0;
        padding-bottom: 15px;
    }

    .dept-tab-btn {
        background: #F8FAFC;
        border: 1px solid #E2E8F0;
        color: var(--color-text-muted, #64748B);
        padding: 10px 24px;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .dept-tab-btn.active,
    .dept-tab-btn:hover {
        background: var(--primary-orange, #FF6600);
        color: #fff;
        border-color: var(--primary-orange, #FF6600);
    }

    .dept-tab-content {
        display: none;
    }

    .dept-tab-content.active {
        display: block;
    }

    .dept-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .dept-item {
        background: #F8FAFC;
        border: 1px solid #E2E8F0;
        border-radius: 16px;
        padding: 22px;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .dept-item h4 {
        font-size: 16px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin: 0;
    }

    .person-name {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin: 0;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .badge-role {
        background: #FFEFE6;
        color: var(--primary-orange, #FF6600);
        font-size: 11px;
        padding: 2px 8px;
        border-radius: 6px;
        font-weight: 600;
    }

    .dept-item a {
        font-size: 13px;
        color: var(--color-blue);
        text-decoration: none;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: 4px;
    }

    .dept-item a:hover {
        text-decoration: underline;
    }

    /* --- INQUIRY FORM CARD --- */
    .inquiry-card {
        background: #FFFFFF;
        border-radius: 24px;
        padding: 45px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        border: 1px solid #E2E8F0;
    }

    .inquiry-card h2 {
        font-size: 26px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin-bottom: 5px;
    }

    .form-subtext {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin: 0;
    }

    .contact-form {
        margin-top: 25px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .form-radio-group {
        display: flex;
        gap: 25px;
        flex-wrap: wrap;
        margin-bottom: 5px;
    }

    .radio-label {
        font-size: 14px;
        color: var(--color-text-main, #1E293B);
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .form-group.full-width {
        grid-column: span 2;
    }

    .form-group label {
        font-size: 14px;
        font-weight: 600;
        color: var(--color-text-main, #1E293B);
    }

    .form-group input,
    .form-group textarea {
        background: #F8FAFC;
        border: 1px solid #CBD5E1;
        border-radius: 12px;
        padding: 14px 18px;
        font-size: 15px;
        color: var(--color-text-main, #1E293B);
        outline: none;
        transition: border-color 0.2s ease;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        border-color: var(--primary-orange, #FF6600);
        background: #fff;
    }

    .form-consent-group {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-top: 5px;
    }

    .form-consent-group input {
        margin-top: 4px;
    }

    .form-consent-group label {
        font-size: 13px;
        color: var(--color-text-muted, #64748B);
        line-height: 1.5;
        font-weight: 400;
    }

    .form-consent-group strong {
        color: var(--color-text-main, #1E293B);
    }

    .submit-btn {
        background: linear-gradient(to right, var(--primary-orange), #ff8533);
        color: #fff;
        border: none;
        padding: 16px 35px;
        border-radius: 14px;
        font-size: 15px;
        font-weight: 700;
        cursor: pointer;
        width: fit-content;
        box-shadow: 0 4px 15px rgba(255, 102, 0, 0.2);
        transition: transform 0.2s ease;
        margin-top: 10px;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
    }

    /* --- RESPONSIVE MEDIA QUERIES --- */
    @media (max-width: 1024px) {

        .contact-container,
        .contact-hero-container {
            padding: 0  !important;
        }

        .dept-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {

        .contact-container,
        {
            padding: 0 !important;
        }
        .contact-hero-container {
            padding: 0 10px !important;
        }

        .contact-hero-content h1 {
            font-size: 32px;
        }

        .info-cards-grid,
        .form-grid {
            grid-template-columns: 1fr;
        }

        .form-group.full-width {
            grid-column: span 1;
        }

        .dept-grid {
            grid-template-columns: 1fr;
        }

        .info-card,
        .departments-card,
        .inquiry-card {
            padding: 25px 20px;
            width: 80%;
            justify-self: center;
        }

        .dept-tabs-nav {
            flex-direction: column;
        }
    }
</style>
