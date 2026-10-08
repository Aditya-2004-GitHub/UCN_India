@extends('frontend.layout.app')

@section('title', 'UCN India - Careers')

@section('content')
<div class="career-page-wrapper">
    <!-- Hero Banner Section -->
    <section class="career-hero-section">
        <div class="container-fluid career-hero-container">
            <div class="career-hero-content">
                <div class="career-breadcrumb">
                    <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <span>Career</span>
                </div>
                <h1>Join Our <span class="highlight-orange">Team</span></h1>
                <p class="hero-subtext">Explore career opportunities and grow with Central India's largest cable
                    network.</p>
                <div class="hero-bottom-line"></div>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="career-content-section">
        <div class="container-fluid career-container">

            <div class="career-main-card">
                <h2>Current Openings</h2>
                <div class="hero-bottom-line"></div>

                <!-- Empty Openings Box -->
                <div class="no-openings-box">
                    <div class="opening-icon-circle">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h3>We currently don’t have any job openings.</h3>
                    <p>Please check back later for updates or future career opportunities with UCN India.</p>
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

    .career-page-wrapper {
        background-color: var(--color-light-bg, #F8FAFC);
        overflow-x: hidden;
    }

    .career-container,
    .career-hero-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
    }

    /* --- HERO SECTION --- */
    .career-hero-section {
        padding: 40px 0 60px;
        background: linear-gradient(to bottom, var(--color-white), var(--bg-light-blue));
    }

    .career-breadcrumb {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .career-breadcrumb a {
        color: var(--color-purple, #7C3AED);
        text-decoration: none;
    }

    .career-hero-content h1 {
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

    /* --- CONTENT SECTION --- */
    .career-content-section {
        padding: 40px 0;
    }

    .career-main-card {
        background: #FFFFFF;
        border-radius: 24px;
        padding: 45px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        border: 1px solid #E2E8F0;
    }

    .career-main-card h2 {
        font-size: 26px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin-bottom: 0;
    }

    /* --- NO OPENINGS BOX --- */
    .no-openings-box {
        margin-top: 35px;
        background: #F8FAFC;
        border: 1px dashed #CBD5E1;
        border-radius: 20px;
        padding: 50px 30px;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }

    .opening-icon-circle {
        width: 70px;
        height: 70px;
        background: #FFEFE6;
        color: var(--primary-orange, #FF6600);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 26px;
        box-shadow: 0 4px 15px rgba(255, 102, 0, 0.08);
        margin-bottom: 5px;
    }

    .no-openings-box h3 {
        font-size: 20px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin: 0;
    }

    .no-openings-box p {
        font-size: 15px;
        color: var(--color-text-muted, #64748B);
        margin: 0;
        max-width: 450px;
        line-height: 1.6;
    }

    /* --- RESPONSIVE MEDIA QUERIES --- */
    @media (max-width: 1024px) {

        .career-container,
        .career-hero-container {
            padding: 0 20px !important;
        }
    }

    @media (max-width: 768px) {

        .career-container
        {
            padding: 0 !important;
        }
        .career-hero-container {
            padding: 0 10px !important;
        }

        .career-hero-content h1 {
            font-size: 32px;
        }

        .career-main-card {
            padding: 25px 20px;
            width: 80%;
            justify-self: center;
        }

        .no-openings-box {
            padding: 35px 20px;
        }
    }
</style>
