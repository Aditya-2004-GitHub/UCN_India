@extends('frontend.layout.app')

@section('title', 'UCN India - STB Scheme')

@section('content')
<div class="stb-page-wrapper">
    <!-- Hero Banner with Background Image & Gradient -->
    <section class="packages-hero-section">
        <div class="container-fluid packages-container">
            <div class="packages-breadcrumb">
                <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                <span>Consumer Corner</span> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                <span>STB Scheme</span>
            </div>
            <h1>STB <span class="highlight-orange">Scheme</span></h1>
            <div class="hero-bottom-line"></div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="packages-content-section">
        <div class="container-fluid packages-container">

            <!-- Tabs Switcher -->
            <div class="packages-tabs-row">
                <button class="pkg-tab-btn active" id="btnOutright" onclick="switchStbTab('outright')">OUTRIGHT PURCHASE
                    SCHEME</button>
                <button class="pkg-tab-btn" id="btnRental" onclick="switchStbTab('rental')">RENTAL SCHEME</button>
            </div>

            <!-- OUTRIGHT PURCHASE SCHEME CONTENT -->
            <div id="paneOutright" class="stb-tab-pane">
                <div class="pdf-table-box">
                    <div class="table-responsive-wrapper">
                        <table class="pdf-data-table">
                            <thead>
                                <tr>
                                    <th style="width: 25%;">PARTICULARS</th>
                                    <th style="width: 37.5%;">Standard Definition (SD)</th>
                                    <th style="width: 37.5%;">High Definition (HD)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Up front charges</strong></td>
                                    <td>Rs 1,200 (inclusive of all taxes)</td>
                                    <td>Rs 1,500 (inclusive of all taxes)</td>
                                </tr>
                                <tr>
                                    <td><strong>Charges per month</strong></td>
                                    <td>Monthly package charges. No amount to be paid towards STB.</td>
                                    <td>Monthly package charges. No amount to be paid towards STB.</td>
                                </tr>
                                <tr>
                                    <td><strong>Refund</strong></td>
                                    <td>STB once sold will not be taken back normally; however refund amount would be
                                        determined on case to case basis. Tax, wear and tear charges etc. would be
                                        deducted in all such cases besides proportionate charges for usage period.</td>
                                    <td>STB once sold will not be taken back normally; however refund amount would be
                                        determined on case to case basis. Tax, wear and tear charges etc. would be
                                        deducted in all such cases besides proportionate charges for usage period.</td>
                                </tr>
                                <tr>
                                    <td><strong>One time activation</strong></td>
                                    <td>Rs 100 plus applicable GST</td>
                                    <td>Rs 100 plus applicable GST</td>
                                </tr>
                                <tr>
                                    <td><strong>One Time Installation</strong></td>
                                    <td>Rs 350 plus applicable GST</td>
                                    <td>Rs 350 plus applicable GST</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Terms and Conditions -->
                <div class="stb-terms-box">
                    <h3>Terms and Conditions</h3>
                    <ul>
                        <li><strong>A.</strong> STB comes with a warranty of 12 months from the date of Installation.
                        </li>
                        <li><strong>B.</strong> No repair and maintenance charges shall be applicable during the
                            warranty period, provided STB has been used in normal working conditions and is not tampered
                            with. Warranty shall not be applicable in case of damages caused due to Acts of God. (ex:
                            natural calamity).</li>
                        <li><strong>C.</strong> Annual Maintenance Contract (AMC) can be availed on an optional basis
                            post warranty period for Rs. 250/- per Year for Standard Definition (SD) box and Rs 350/-
                            per Year for High Definition box (HD).</li>
                        <li><strong>D.</strong> In case you AMC is not opted for, repairs will be undertaken by the
                            Company on a chargeable basis as per actuals.</li>
                        <li><strong>E.</strong> Re-installation charges/re-location charges shall be charged as per
                            applicable rates prescribed by TRAI under Quality of Service Regulations' 2017.</li>
                        <li><strong>F.</strong> UCN has the right to withdraw/replace this scheme at its sole discretion
                            in compliance with the regulations.</li>
                    </ul>
                </div>
            </div>

            <!-- RENTAL SCHEME CONTENT -->
            <div id="paneRental" class="stb-tab-pane" style="display: none;">
                <div class="pdf-table-box">
                    <div class="table-responsive-wrapper">
                        <table class="pdf-data-table">
                            <thead>
                                <tr>
                                    <th style="width: 25%;">PARTICULARS</th>
                                    <th style="width: 37.5%;">Standard Definition (SD)</th>
                                    <th style="width: 37.5%;">High Definition (HD)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Rent per month per Set Top Box</strong></td>
                                    <td>Rs 75 upto 36 months</td>
                                    <td>Rs 100 upto 36 months</td>
                                </tr>
                                <tr>
                                    <td><strong>After 36 months from the date of installation</strong></td>
                                    <td>No rent.</td>
                                    <td>No rent.</td>
                                </tr>
                                <tr>
                                    <td><strong>Security Deposit (Refundable)</strong></td>
                                    <td>Rs 1,000</td>
                                    <td>Rs 1,200</td>
                                </tr>
                                <tr>
                                    <td><strong>One time activation</strong></td>
                                    <td>Rs 100 plus applicable GST</td>
                                    <td>Rs 100 plus applicable GST</td>
                                </tr>
                                <tr>
                                    <td><strong>One Time Installation</strong></td>
                                    <td>Rs 350 plus applicable GST</td>
                                    <td>Rs 350 plus applicable GST</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Terms and Conditions -->
                <div class="stb-terms-box">
                    <h3>Terms and Conditions</h3>
                    <ul>
                        <li><strong>A.</strong> All the prices mentioned above are exclusive of taxes, as applicable.
                        </li>
                        <li><strong>B.</strong> The security deposit is refundable subject to a deduction of 5% from the
                            security deposit for each month of usage. Part of month will be considered as one month. The
                            STB at all times remain property of UCN.</li>
                        <li><strong>C.</strong> Replacement or repair of accessories including lead/remote etc. is
                            chargeable as per actual price (as declared by UCN) of such accessories.</li>
                        <li><strong>D.</strong> Re-installation charges/re-location charges shall be charged as per
                            applicable rates prescribed by TRAI under Quality of Service Regulations' 2017.</li>
                        <li><strong>E.</strong> UCN has the right to withdraw/replace this scheme at its sole discretion
                            in compliance with the regulations.</li>
                        <li><strong>F.</strong> The company would service the STB as per the relevant provisions of the
                            "The Telecommunication (Broadcasting and Cable Services) Standards of Quality of Service and
                            Consumer Protection (Addressable Systems Regulations, 2017). The Company would not be
                            responsible for the cases where STB has been tampered with or damaged by the subscriber or
                            in cases where damage has been caused due to Act of God.</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</div>

<script>
    function switchStbTab(tabName) {
        const btnOutright = document.getElementById('btnOutright');
        const btnRental = document.getElementById('btnRental');
        const paneOutright = document.getElementById('paneOutright');
        const paneRental = document.getElementById('paneRental');

        if (tabName === 'outright') {
            btnOutright.classList.add('active');
            btnRental.classList.remove('active');
            paneOutright.style.display = 'block';
            paneRental.style.display = 'none';
        } else {
            btnRental.classList.add('active');
            btnOutright.classList.remove('active');
            paneRental.style.display = 'block';
            paneOutright.style.display = 'none';
        }
    }
</script>
@endsection

<style>
    .stb-page-wrapper {
        background: #F8FAFC;
        min-height: 80vh;
        padding-bottom: 60px;
    }

    .packages-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
    }

    /* Hero Section with both bg-img.png and gradient */
    .packages-hero-section {
        padding: 50px 0 40px;
        background-image: url('{{ asset("asset/images/enterprises/bg-img.png") }}'),
        linear-gradient(to bottom, var(--color-white), var(--bg-light-blue, #F1F5F9));
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover, cover;
        border-bottom: 1px solid #E2E8F0;
        margin-bottom: 30px;
        min-height: 160px;
        display: flex;
        align-items: center;
    }

    .packages-breadcrumb {f 
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
        font-size: 36px;
        font-weight: 700;
        color: #1E293B;
    }

    .highlight-orange {
        color: #FF6600;
    }

    .hero-bottom-line {
        width: 55px;
        height: 2.3px;
        margin-top: 12px;
        background: linear-gradient(to right, #FF6600, #7C3AED);
        border-radius: 2px;
    }

    /* Tabs */
    .packages-tabs-row {
        display: flex;
        gap: 10px;
        margin-bottom: 30px;
        border-bottom: 2px solid #E2E8F0;
        padding-bottom: 10px;
    }

    .pkg-tab-btn {
        background: #FFF;
        border: 1px solid #CBD5E1;
        padding: 10px 25px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        color: #64748B;
        transition: all 0.2s;
    }

    .pkg-tab-btn.active {
        background: #FFF;
        color: #1E293B;
        border-color: #FF6600;
        border-bottom: 3px solid #FF6600;
    }

    /* Table styling */
    .pdf-table-box {
        background: #FFF;
        border-radius: 12px;
        border: 1px solid #CBD5E1;
        margin-bottom: 30px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
    }

    .table-responsive-wrapper {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .pdf-data-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 600px;
    }

    .pdf-data-table th {
        background: #F1F5F9;
        color: #334155;
        padding: 14px 20px;
        text-align: left;
        font-size: 13px;
        font-weight: 700;
        border-bottom: 1px solid #CBD5E1;
    }

    .pdf-data-table td {
        padding: 14px 20px;
        border-bottom: 1px solid #E2E8F0;
        font-size: 14px;
        color: #1E293B;
        line-height: 1.5;
    }

    .pdf-data-table tr:last-child td {
        border-bottom: none;
    }

    .pdf-data-table tr:hover {
        background: #F8FAFC;
    }

    /* Terms and Conditions Box */
    .stb-terms-box {
        background: #FFF;
        border-radius: 12px;
        border: 1px solid #CBD5E1;
        padding: 25px 30px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
    }

    .stb-terms-box h3 {
        font-size: 18px;
        font-weight: 700;
        color: #1E293B;
        margin-bottom: 15px;
    }

    .stb-terms-box ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .stb-terms-box li {
        font-size: 13.5px;
        color: #475569;
        line-height: 1.6;
        margin-bottom: 10px;
    }

    @media (max-width: 768px) {
        .packages-container {
            padding: 0 !important;
            width: 95%;
        }

        .pdf-data-table th,
        .pdf-data-table td {
            padding: 10px 12px;
            font-size: 12px;
        }

        .stb-terms-box {
            padding: 15px 20px;
        }
    }
</style>
