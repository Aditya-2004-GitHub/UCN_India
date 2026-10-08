@extends('frontend.layout.app')

@section('title', 'UCN India - Advertise with UCN')

@section('content')
<div class="advertise-page-wrapper">
    <!-- Hero Banner Section -->
    <section class="advertise-hero-section">
        <div class="container-fluid advertise-hero-container">
            <div class="advertise-hero-content">
                <div class="advertise-breadcrumb">
                    <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <span>Advertise with UCN</span>
                </div>
                <h1>Advertise with <span class="highlight-orange">UCN</span></h1>
                <p class="hero-subtext">Partner with Central India's largest cable network to maximize your brand reach.
                </p>
                <div class="hero-bottom-line"></div>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="advertise-content-section">
        <div class="container-fluid advertise-container">

            <!-- Overview & Benefits Card -->
            <div class="advertise-main-card">
                <div class="advertise-header-title">
                    <h2>UCN is Central India's largest Cable Network.</h2>
                    <p class="region-highlight">Enjoying maximum viewership in Nagpur, Indore, Jabalpur, Bhopal &
                        Vidarbha region.</p>
                </div>

                <p class="advertise-desc">
                    UCN is all set to enter diverse markets and this is evident from its growth in the newly entered MP
                    market. UCN offers the advertisers with the following benefits:
                </p>

                <!-- Benefits Checklist -->
                <div class="benefits-checklist">
                    <div class="benefit-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Enormous reach via Single Platform</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Platform to cater to all age groups</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Repetitive advertisements for higher brand recall and stronger impact</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Enhanced User Engagements with activities like Public Interaction, Celebrity Interviews,
                            etc.</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Contact Us For Advertising with us OR Any Query related to Advertising</span>
                    </div>
                </div>
            </div>

            <!-- Contact Us for Advertising Section -->
            <div class="advertise-contact-box">
                <h3>Contact Us for Advertising through us OR any Query related to Advertising</h3>
                <div class="hero-bottom-line center-line"></div>

                <div class="contacts-grid">
                    <!-- Nagpur Dept -->
                    <div class="contact-branch-card">
                        <div class="branch-icon"><i class="fa-solid fa-building"></i></div>
                        <h4>Nagpur Dept - Marketing</h4>
                        <div class="branch-details">
                            <p><i class="fa-solid fa-phone"></i> 0712-6633817 / 814815/816</p>
                            <p><i class="fa-solid fa-envelope"></i> <a
                                    href="mailto:marketing@ucnindia.com">marketing@ucnindia.com</a></p>
                        </div>
                    </div>

                    <!-- Jabalpur Dept -->
                    <div class="contact-branch-card">
                        <div class="branch-icon"><i class="fa-solid fa-user-tie"></i></div>
                        <h4>Jabalpur - Mr. Ram Mantri</h4>
                        <div class="branch-details">
                            <p><i class="fa-solid fa-phone"></i> +91 8226002071</p>
                            <p><i class="fa-solid fa-envelope"></i> <a
                                    href="mailto:rammantri@ucnindia.com">rammantri@ucnindia.com</a></p>
                        </div>
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

    .advertise-page-wrapper {
        background-color: var(--color-light-bg, #F8FAFC);
        overflow-x: hidden;
    }

    .advertise-container,
    .advertise-hero-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
    }

    /* --- HERO SECTION --- */
    .advertise-hero-section {
        padding: 40px 0 60px;
        background: linear-gradient(to bottom, var(--color-white), var(--bg-light-blue));
    }

    .advertise-breadcrumb {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .advertise-breadcrumb a {
        color: var(--color-purple, #7C3AED);
        text-decoration: none;
    }

    .advertise-hero-content h1 {
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
    }

    .center-line {
        margin: 15px auto 35px auto;
    }

    /* --- CONTENT SECTION --- */
    .advertise-content-section {
        padding: 50px 0 40px;
    }

    .advertise-main-card {
        background: #FFFFFF;
        border-radius: 24px;
        padding: 45px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        border: 1px solid #E2E8F0;
        margin-bottom: 40px;
    }

    .advertise-header-title h2 {
        font-size: 26px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin-bottom: 8px;
    }

    .region-highlight {
        font-size: 15px;
        font-weight: 600;
        color: var(--primary-orange, #FF6600);
        margin-bottom: 25px;
    }

    .advertise-desc {
        font-size: 15px;
        color: var(--color-text-muted, #64748B);
        line-height: 1.6;
        margin-bottom: 30px;
    }

    .benefits-checklist {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .benefit-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        font-size: 15px;
        color: var(--color-text-main, #1E293B);
        font-weight: 500;
        line-height: 1.5;
    }

    .benefit-item i {
        color: var(--primary-orange, #FF6600);
        margin-top: 3px;
        flex-shrink: 0;
        font-size: 16px;
    }

    /* --- CONTACT BOX --- */
    .advertise-contact-box {
        background: #FFFFFF;
        border-radius: 24px;
        padding: 45px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        border: 1px solid #E2E8F0;
        text-align: center;
    }

    .advertise-contact-box h3 {
        font-size: 22px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin-bottom: 0;
    }

    .contacts-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        text-align: left;
    }

    .contact-branch-card {
        background: #F8FAFC;
        border: 1px solid #E2E8F0;
        border-radius: 20px;
        padding: 30px;
        display: flex;
        flex-direction: column;
        gap: 15px;
        transition: transform 0.2s ease;
    }

    .contact-branch-card:hover {
        transform: translateY(-3px);
        border-color: var(--primary-orange, #FF6600);
    }

    .branch-icon {
        width: 50px;
        height: 50px;
        background: #FFF3EC;
        color: var(--primary-orange, #FF6600);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .contact-branch-card h4 {
        font-size: 18px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin: 0;
    }

    .branch-details {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .branch-details p {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .branch-details p i {
        color: var(--primary-orange, #FF6600);
        width: 16px;
    }

    .branch-details a {
        color: var(--color-blue);
        text-decoration: none;
        font-weight: 600;
    }

    .branch-details a:hover {
        text-decoration: underline;
    }

    /* --- RESPONSIVE MEDIA QUERIES --- */
    @media (max-width: 1024px) {

        .advertise-container,
        .advertise-hero-container {
            padding: 0 20px !important;
        }

        .contacts-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {

        .advertise-container{
            padding: 0 !important;
        }

        .advertise-hero-container {
            padding: 0 10px !important;
        }

        .advertise-hero-content h1 {
            font-size: 30px;
        }
        .hero-subtext {
            font-size: 14px;
        }

        .advertise-main-card,
        .advertise-contact-box {
            padding: 25px 20px;
            width: 80%;
            justify-self: center;

        }

        .contact-branch-card {
            width: 70%;
            justify-self: center;
        }
    }
</style>
