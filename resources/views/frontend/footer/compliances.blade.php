@extends('frontend.layout.app')

@section('title', 'UCN India - Compliances')

@section('content')
<div class="compliances-page-wrapper">
    <!-- Hero Banner Section -->
    <section class="compliances-hero-section">
        <div class="container-fluid compliances-hero-container">
            <div class="compliances-hero-content">
                <div class="compliances-breadcrumb">
                    <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <span>Compliances</span>
                </div>
                <h1>Regulatory <span class="highlight-orange">Compliances</span></h1>
                <p class="hero-subtext">Access and download official compliance documents and regulatory reports.</p>
                <div class="hero-bottom-line"></div>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="compliances-content-section">
        <div class="container-fluid compliances-container">

            <div class="compliances-main-card">
                <h2>Compliances</h2>
                <div class="hero-bottom-line"></div>

                <!-- Documents Table -->
                <div class="table-responsive-wrapper">
                    <table class="compliances-table">
                        <thead>
                            <tr>
                                <th>Document Title</th>
                                <th class="text-end">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="doc-title-flex">
                                        <i class="fa-solid fa-file-pdf pdf-icon-main"></i>
                                        <span>Declaration under Sec4(4)</span>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <a href="{{ asset('asset/pdf/declaration-sec4-4.pdf') }}" target="_blank"
                                        class="pdf-download-btn" title="Download PDF">
                                        <i class="fa-solid fa-file-arrow-down"></i> Download PDF
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="doc-title-flex">
                                        <i class="fa-solid fa-file-pdf pdf-icon-main"></i>
                                        <span>CARRIAGE RIO DRAFT</span>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <a href="{{ asset('asset/pdf/carriage-rio-draft.pdf') }}" target="_blank"
                                        class="pdf-download-btn" title="Download PDF">
                                        <i class="fa-solid fa-file-arrow-down"></i> Download PDF
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Adobe Reader Note Footer -->
                <div class="adobe-reader-note">
                    <div class="adobe-badge">
                        <i class="fa-solid fa-bolt"></i> Get ADOBE READER
                    </div>
                    <p>Most computers will open PDF documents automatically, incase it doesn't you may need to download
                        Adobe Reader.</p>
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

    .compliances-page-wrapper {
        background-color: var(--color-light-bg, #F8FAFC);
        overflow-x: hidden;
    }

    .compliances-container,
    .compliances-hero-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
    }

    /* --- HERO SECTION --- */
    .compliances-hero-section {
        padding: 40px 0 60px;
        background: linear-gradient(to bottom, var(--color-white), var(--bg-light-blue));
    }

    .compliances-breadcrumb {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .compliances-breadcrumb a {
        color: var(--color-purple, #7C3AED);
        text-decoration: none;
    }

    .compliances-hero-content h1 {
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
    .compliances-content-section {
        padding: 40px 0;
    }

    .compliances-main-card {
        background: #FFFFFF;
        border-radius: 24px;
        padding: 45px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        border: 1px solid #E2E8F0;
    }

    .compliances-main-card h2 {
        font-size: 26px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin-bottom: 0;
    }

    /* --- TABLE STYLING --- */
    .table-responsive-wrapper {
        width: 100%;
        overflow-x: auto;
        margin-top: 35px;
    }

    .compliances-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }

    .compliances-table th {
        font-size: 15px;
        font-weight: 600;
        color: var(--color-blue);
        background: #F8FAFC;
        padding: 16px 20px;
        border-bottom: 2px solid #E2E8F0;
    }

    .compliances-table td {
        font-size: 15px;
        color: var(--color-text-main, #1E293B);
        padding: 18px 20px;
        border-bottom: 1px solid #E2E8F0;
        font-weight: 500;
    }

    .compliances-table tbody tr {
        transition: background-color 0.2s ease;
    }

    .compliances-table tbody tr:hover {
        background-color: #F8FAFC;
    }

    .text-end {
        text-align: right;
    }

    .doc-title-flex {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .pdf-icon-main {
        color: #EF4444;
        font-size: 20px;
    }

    .pdf-download-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #FFF3EC;
        color: var(--primary-orange, #FF6600);
        padding: 8px 16px;
        border-radius: 10px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.2s ease;
        border: 1px solid #FFEFE6;
    }

    .pdf-download-btn:hover {
        background: var(--primary-orange, #FF6600);
        color: #fff;
    }

    /* --- ADOBE READER NOTE --- */
    .adobe-reader-note {
        margin-top: 40px;
        background: #F8FAFC;
        border: 1px solid #E2E8F0;
        border-radius: 16px;
        padding: 20px 25px;
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .adobe-badge {
        display: flex;
        align-items: center;
        gap: 8px;
        background: #EF4444;
        color: #fff;
        padding: 8px 14px;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        flex-shrink: 0;
        letter-spacing: 0.5px;
    }

    .adobe-reader-note p {
        font-size: 13px;
        color: var(--color-text-muted, #64748B);
        margin: 0;
        line-height: 1.5;
    }

    /* --- RESPONSIVE MEDIA QUERIES --- */
    @media (max-width: 1024px) {

        .compliances-container,
        .compliances-hero-container {
            padding: 0 20px !important;
        }
    }

    @media (max-width: 768px) {

        .compliances-container {
            padding: 0 !important;
        }

        .compliances-hero-container {
            padding: 0 15px !important;
        }

        .compliances-hero-content h1 {
            font-size: 32px;
        }
        .hero-subtext {
            font-size: 14.5px;
        }

        .compliances-main-card {
            padding: 25px 20px;
            width: 80%;
            justify-self: center;
        }

        .adobe-reader-note {
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
        }

        .compliances-table th,
        .compliances-table td {
            padding: 14px 12px;
            font-size: 14px;
        }
    }
</style>
