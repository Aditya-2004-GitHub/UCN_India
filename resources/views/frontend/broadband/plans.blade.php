@extends('frontend.layout.app')

@section('title', 'UCN India - Broadband Plans')

@section('content')
<div class="plans-page-wrapper">
    <!-- Hero Banner Section -->
    <section class="plans-hero-section">
        <div class="container-fluid plans-hero-container">
            <!-- 1st Div: Content Area -->
            <div class="plans-hero-content">
                <div class="plans-breadcrumb">
                    <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <a href="#">Broadband</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <span>Plans</span>
                </div>
                <h1>Broadband</h1>
                <p class="hero-subtext">Experience ultra-fast and reliable broadband for your home and business.</p>
                <div class="hero-bottom-line"></div>
            </div>

            <!-- 2nd Div: Image/Graphic Area -->
            <div class="plans-hero-graphic">
                <img src="{{ asset('asset/images/broadband/plan/plans-bg.png') }}" alt="Background Pattern"
                    class="hero-bg-img">
                <img src="{{ asset('asset/images/ucn-logo.png') }}" alt="Broadband Plans Graphic"
                    class="plans-hero-img">
            </div>
        </div>
    </section>

    <!-- Overlapping Select City Section -->
    <section class="city-selector-section">
        <div class="container-fluid plans-container">
            <div class="city-selector-card">
                <div class="city-icon-box">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="city-title">Select Your City</div>
                <div class="city-dropdown-box">
                    <select id="citySelect" class="city-select-input" onchange="filterPlans(this.value)">
                        <option value="" disabled selected>Select city</option>
                        <option value="nagpur">Nagpur</option>
                        <option value="pune">Pune</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="amravati">Amravati</option>
                        <option value="akola">Akola</option>
                        <option value="jabalpur">Jabalpur</option>
                        <option value="bhopal">Bhopal</option>
                        <option value="indore">Indore</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Plans Listing Section (Initially Hidden) -->
    <section id="plansListingSection" class="plans-listing-section" style="display: none;">
        <div class="container-fluid plans-container">

            <!-- Nagpur Plans Container -->
            <div id="nagpurPlans" class="city-plans-container" style="display: none;">

                @php
                // Helper function to render clean structured table with peach speed box merged via rowspan
                function renderPlanTable($speedText, $plans) {
                $rows = count($plans);
                $html = '<div class="plan-table-wrapper">
                    <table class="ucn-plan-table">
                        <thead>
                            <tr>
                                <th>Speed <span class="sub-text">(Mbps)</span></th>
                                <th>Effective Monthly Price <span class="sub-text">(₹)</span></th>
                                <th>Validity Months</th>
                                <th>Total Price <span class="sub-text">(₹)</span></th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>';

                            foreach($plans as $index => $plan) {
                            $html .= '<tr>';
                                if($index === 0) {
                                $html .= '<td rowspan="'.$rows.'" class="speed-td"><strong>'.$speedText.'</strong></td>
                                ';
                                }
                                $html .= '<td>'.$plan[0].' <span class="gst-tag">+GST</span></td>';
                                $html .= '<td>'.$plan[1].'</td>';
                                $html .= '<td>'.$plan[2].' <span class="gst-tag">+GST</span></td>';
                                $html .= '<td class="text-end">
                                    <div class="table-action-btns"><button class="btn-book-now">Book Now</button></div>
                                </td>';
                                $html .= '</tr>';
                            }
                            $html .= '</tbody>
                    </table>
                </div>';
                return $html;
                }
                @endphp

                {!! renderPlanTable('10 Mbps', [
                ['₹250', '12 Months', '₹3000'],
                ['₹300', '6 Months', '₹1800']
                ]) !!}

                {!! renderPlanTable('20 Mbps', [
                ['₹333', '12 Months', '₹3996'],
                ['₹350', '6 Months', '₹2100']
                ]) !!}

                {!! renderPlanTable('30 Mbps', [
                ['₹350', '12 Months', '₹4200'],
                ['₹375', '6 Months', '₹2250'],
                ['₹400', '3 Months', '₹1200']
                ]) !!}

                {!! renderPlanTable('40 Mbps', [
                ['₹399', '12 Months', '₹4788'],
                ['₹450', '6 Months', '₹2700'],
                ['₹475', '3 Months', '₹1425'],
                ['₹500', '1 Month', '₹500']
                ]) !!}

                {!! renderPlanTable('50 Mbps', [
                ['₹499', '12 Months', '₹5988'],
                ['₹585', '6 Months', '₹3510'],
                ['₹618', '3 Months', '₹1853'],
                ['₹650', '1 Month', '₹650']
                ]) !!}

                {!! renderPlanTable('100 Mbps', [
                ['₹599', '12 Months', '₹7188'],
                ['₹675', '6 Months', '₹4050'],
                ['₹713', '3 Months', '₹2138'],
                ['₹750', '1 Month', '₹750']
                ]) !!}

                {!! renderPlanTable('125 Mbps', [
                ['₹699', '12 Months', '₹8388'],
                ['₹765', '6 Months', '₹4590'],
                ['₹808', '3 Months', '₹2423'],
                ['₹850', '1 Month', '₹850']
                ]) !!}

                {!! renderPlanTable('150 Mbps', [
                ['₹799', '12 Months', '₹9588'],
                ['₹900', '6 Months', '₹5400'],
                ['₹950', '3 Months', '₹2850'],
                ['₹1000', '1 Month', '₹1000']
                ]) !!}

                {!! renderPlanTable('200 Mbps', [
                ['₹999', '12 Months', '₹11988'],
                ['₹1125', '6 Months', '₹6750'],
                ['₹1188', '3 Months', '₹3563'],
                ['₹1250', '1 Month', '₹1250']
                ]) !!}

                {!! renderPlanTable('300 Mbps', [
                ['₹1199', '12 Months', '₹14388'],
                ['₹1350', '6 Months', '₹8100'],
                ['₹1425', '3 Months', '₹4275'],
                ['₹1500', '1 Month', '₹1500']
                ]) !!}

                {!! renderPlanTable('Business Plan<br><small style="font-size: 14px; font-weight: 500;">100
                    Mbps</small>', [
                ['₹1999', '12 Months', '₹23988'],
                ['₹2250', '6 Months', '₹13500'],
                ['₹2375', '3 Months', '₹7125'],
                ['₹2500', '1 Month', '₹2500']
                ]) !!}

                {!! renderPlanTable('Business Plan<br><small style="font-size: 14px; font-weight: 500;">150
                    Mbps</small>', [
                ['₹2399', '12 Months', '₹28788'],
                ['₹2700', '6 Months', '₹16200'],
                ['₹2850', '3 Months', '₹8550'],
                ['₹3000', '1 Month', '₹3000']
                ]) !!}

            </div>

            <!-- Other Cities Container Message -->
            <div id="otherPlans" class="city-plans-container" style="display: none;">
                <div class="no-plans-alert">
                    <i class="fa-solid fa-circle-info"></i>
                    <p>Showing customized high-speed internet plans available for <strong
                            id="selectedCityName"></strong> region. Contact local LCO for more specific offers.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Main Content Section (Terms & Self Troubleshoot) -->
    <section class="plans-content-section">
        <div class="container-fluid plans-container">
            <div class="plans-grid-layout">

                <!-- Left Box: Terms and Conditions -->
                <div class="plan-info-card">
                    <h3>Terms and Conditions</h3>
                    <div class="terms-list">
                        <div class="term-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>UCN Broadband reserves the right to modify/withdraw tariff plans without prior
                                notice.</span>
                        </div>
                        <div class="term-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Activation and installation charges are non-refundable.</span>
                        </div>
                        <div class="term-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Tariff plans/offers are subject to Guidelines/Directives/Orders issued by TRAI and/or
                                DOT.</span>
                        </div>
                        <div class="term-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Download speed indicates only up to ISP node.</span>
                        </div>
                        <div class="term-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Installation Charges as per Actuals.</span>
                        </div>
                        <div class="term-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Documents Required: Photo ID proof, Address Proof, passport size photo.</span>
                        </div>
                    </div>
                </div>

                <!-- Right Box: Self Troubleshoot -->
                <div class="plan-info-card">
                    <h3>Self Troubleshoot</h3>
                    <div class="troubleshoot-list">
                        <a href="#" class="troubleshoot-item">
                            <div class="troubleshoot-icon bg-orange"><i class="fa-solid fa-wifi"></i></div>
                            <span class="troubleshoot-text">No Internet Connection</span>
                            <i class="fa-solid fa-angle-right arrow-icon"></i>
                        </a>
                        <a href="#" class="troubleshoot-item">
                            <div class="troubleshoot-icon bg-orange"><i class="fa-solid fa-gauge-high"></i></div>
                            <span class="troubleshoot-text">Slow Internet Speed</span>
                            <i class="fa-solid fa-angle-right arrow-icon"></i>
                        </a>
                        <a href="#" class="troubleshoot-item">
                            <div class="troubleshoot-icon bg-orange"><i class="fa-solid fa-triangle-exclamation"></i>
                            </div>
                            <span class="troubleshoot-text">Frequent Disconnections</span>
                            <i class="fa-solid fa-angle-right arrow-icon"></i>
                        </a>
                        <a href="#" class="troubleshoot-item">
                            <div class="troubleshoot-icon bg-orange"><i class="fa-solid fa-network-wired"></i></div>
                            <span class="troubleshoot-text">Wi-Fi Not Working</span>
                            <i class="fa-solid fa-angle-right arrow-icon"></i>
                        </a>
                        <a href="#" class="troubleshoot-item">
                            <div class="troubleshoot-icon bg-orange"><i class="fa-solid fa-user-lock"></i></div>
                            <span class="troubleshoot-text">Login / Access Issues</span>
                            <i class="fa-solid fa-angle-right arrow-icon"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Why Choose UCN Broadband Section -->
            <div class="why-choose-banner">
                <h2>Why Choose <span class="highlight-orange">UCN Broadband</span>?</h2>
                <div class="why-choose-grid">
                    <div class="why-item">
                        <div class="why-icon icon-peach"><i class="fa-solid fa-gauge-high"></i></div>
                        <div class="why-text">
                            <strong>Faster In-Home & Business Internet</strong>
                            <p>Surf, stream and share on more devices with our faster in-home Wi-Fi.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon icon-green"><i class="fa-solid fa-layer-group"></i></div>
                        <div class="why-text">
                            <strong>Wide range of plans</strong>
                            <p>Get the best plan suiting your requirements. Top up plans just in case you run out of
                                data.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon icon-purple"><i class="fa-solid fa-shield-halved"></i></div>
                        <div class="why-text">
                            <strong>Get more Dependability</strong>
                            <p>Stream videos and music smoothly without any cuts or buffers.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon icon-blue"><i class="fa-solid fa-headset"></i></div>
                        <div class="why-text">
                            <strong>Superior Service and Support</strong>
                            <p>Reliable & fast service you can trust 100%.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<script>
    function filterPlans(city) {
        const listingSection = document.getElementById('plansListingSection');
        const nagpurPlans = document.getElementById('nagpurPlans');
        const otherPlans = document.getElementById('otherPlans');
        const cityNameSpan = document.getElementById('selectedCityName');

        listingSection.style.display = 'block';

        if (city.toLowerCase() === 'nagpur') {
            nagpurPlans.style.display = 'block';
            otherPlans.style.display = 'none';
        } else {
            nagpurPlans.style.display = 'none';
            otherPlans.style.display = 'block';
            cityNameSpan.innerText = city.charAt(0).toUpperCase() + city.slice(1);
        }
    }
</script>
@endsection

<style>
    body,
    html,
    * {
        font-family: 'Poppins', sans-serif !important;
    }

    .plans-page-wrapper {
        background-color: var(--color-light-bg, #F8FAFC);
        overflow-x: hidden;
    }

    .plans-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
    }

    /* --- HERO SECTION --- */
    .plans-hero-section {
        padding: 40px 0 80px;
        background: linear-gradient(to bottom, var(--color-white), var(--bg-light-blue));
    }

    .plans-hero-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 30px;
    }

    .plans-hero-content {
        flex: 1;
    }

    .plans-hero-graphic {
        position: relative;
        flex-shrink: 0;
        width: 320px;
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero-bg-img {
        position: absolute;
        width: 100%;
        height: auto;
        object-fit: contain;
        z-index: 1;
        margin-left: -300px;
    }

    .plans-hero-img {
        position: absolute;
        width: 80%;
        height: auto;
        object-fit: contain;
        z-index: 2;
    }

    .plans-breadcrumb {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .plans-breadcrumb a {
        color: var(--color-purple, #7C3AED);
        text-decoration: none;
    }

    .plans-hero-content h1 {
        font-size: 42px;
        font-weight: 700;
        color: var(--primary-orange);
        line-height: 1.3;
        margin-bottom: 10px;
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

    /* --- CITY SELECTOR CARD --- */
    .city-selector-section {
        margin-top: -45px;
        position: relative;
        z-index: 10;
        margin-bottom: 40px;
    }

    .city-selector-card {
        background: #FFFFFF;
        border-radius: 20px;
        padding: 25px 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
        display: flex;
        align-items: center;
        gap: 20px;
        border: 1px solid #E2E8F0;
    }

    .city-icon-box {
        width: 50px;
        height: 50px;
        background: #FFF3EC;
        color: var(--primary-orange, #FF6600);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
    }

    .city-title {
        font-size: 20px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        white-space: nowrap;
    }

    .city-dropdown-box {
        flex: 1;
        max-width: 400px;
        margin-left: auto;
    }

    .city-select-input {
        width: 100%;
        padding: 12px 20px;
        border: 1px solid var(--primary-orange, #FF6600);
        border-radius: 12px;
        background: #FFF;
        font-size: 14px;
        color: var(--color-text-main, #1E293B);
        outline: none;
        cursor: pointer;
    }

    /* --- PLANS LISTING STYLES & RESPONSIVENESS --- */
    .plans-listing-section {
        margin-bottom: 40px;
    }

    .plan-table-wrapper {
        background: #fff;
        border-radius: 14px;
        border: 1px solid #E2E8F0;
        margin-bottom: 25px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .ucn-plan-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 580px;
    }

    .ucn-plan-table th {
        background: #FF6600;
        color: #fff;
        padding: 12px 10px;
        font-size: 13px;
        text-align: left;
        font-weight: 600;
        white-space: nowrap;
    }

    .ucn-plan-table td {
        padding: 12px 10px;
        font-size: 13px;
        border-bottom: 1px solid #E2E8F0;
        color: #1E293B;
        white-space: nowrap;
    }

    .ucn-plan-table tbody tr:last-child td {
        border-bottom: none;
    }

    .speed-td {
        background: #F3D2BA;
        color: #1E293B;
        font-size: 20px;
        font-weight: 700;
        text-align: center;
        width: 130px;
        vertical-align: middle;
        border-right: 1px solid #E2E8F0;
    }

    .sub-text {
        font-size: 11px;
        opacity: 0.85;
    }

    .gst-tag {
        font-size: 11px;
        color: #64748B;
        font-weight: 600;
    }

    .table-action-btns {
        display: flex;
        flex-direction: column;
        gap: 4px;
        justify-content: flex-end;
    }

    .btn-view-details {
        background: #0284C7;
        color: #fff;
        border: none;
        padding: 4px 8px;
        font-size: 11px;
        width: 100%;
        text-align: center;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: opacity 0.2s;
    }

    .btn-book-now {
        background: #16A34A;
        color: #fff;
        border: none;
        padding: 6px 12px;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        transition: opacity 0.2s;
        width: 80%;
    }

    .btn-view-details:hover,
    .btn-book-now:hover {
        opacity: 0.9;
    }

    .no-plans-alert {
        background: #EFF6FF;
        border: 1px solid #BFDBFE;
        padding: 30px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        gap: 15px;
        color: #1E40AF;
        font-size: 15px;
    }

    .no-plans-alert i {
        font-size: 22px;
    }

    /* --- CONTENT SECTION & CARDS --- */
    .plans-content-section {
        padding: 0 0 40px;
    }

    .plans-grid-layout {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-bottom: 40px;
    }

    .plan-info-card {
        background: #FFFFFF;
        border-radius: 24px;
        padding: 35px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        border: 1px solid #E2E8F0;
    }

    .plan-info-card h3 {
        font-size: 22px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 10px;
    }

    .plan-info-card h3::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 2px;
        background: var(--primary-orange, #FF6600);
    }

    /* Terms List Styling */
    .terms-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .term-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        line-height: 1.5;
        border-bottom: 1px dashed #E2E8F0;
        padding-bottom: 15px;
    }

    .term-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .term-item i {
        color: var(--primary-orange, #FF6600);
        margin-top: 3px;
        flex-shrink: 0;
    }

    /* Troubleshoot List Styling */
    .troubleshoot-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .troubleshoot-item {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 12px 15px;
        border-radius: 16px;
        background: #F8FAFC;
        border: 1px solid #E2E8F0;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .troubleshoot-item:hover {
        border-color: var(--primary-orange, #FF6600);
        background: #FFF;
        transform: translateY(-2px);
    }

    .troubleshoot-icon {
        width: 45px;
        height: 45px;
        border-radius: 12px;
        background: #FFF3EC;
        color: var(--primary-orange, #FF6600);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
    }

    .troubleshoot-text {
        font-size: 14px;
        font-weight: 600;
        color: var(--color-text-main, #1E293B);
        flex: 1;
    }

    .arrow-icon {
        font-size: 13px;
        color: var(--color-text-muted, #64748B);
    }

    /* --- WHY CHOOSE BANNER --- */
    .why-choose-banner {
        background: #FFFFFF;
        border-radius: 24px;
        padding: 45px 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        border: 1px solid #E2E8F0;
        text-align: center;
    }

    .why-choose-banner h2 {
        font-size: 28px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin-bottom: 40px;
    }

    .highlight-orange {
        color: var(--primary-orange, #FF6600);
    }

    .why-choose-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        text-align: left;
    }

    .why-item {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .why-icon {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .icon-peach {
        background: #FFF3EC;
        color: #FF6600;
    }

    .icon-green {
        background: #DCFCE7;
        color: #16A34A;
    }

    .icon-purple {
        background: #F3E8FF;
        color: #9333EA;
    }

    .icon-blue {
        background: #E0F2FE;
        color: #0284C7;
    }

    .why-text strong {
        font-size: 15px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        display: block;
        margin-bottom: 6px;
    }

    .why-text p {
        font-size: 13px;
        color: var(--color-text-muted, #64748B);
        margin: 0;
        line-height: 1.5;
    }

    /* --- RESPONSIVE MEDIA QUERIES --- */
    @media (max-width: 1200px) {
        .why-choose-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }
    }

    @media (max-width: 1024px) {
        .plans-hero-container {
            flex-direction: column;
            text-align: left;
        }

        .plans-container,
        .plans-hero-container {
            padding: 0 20px !important;
        }

        .plans-grid-layout {
            grid-template-columns: 1fr;
        }

        .plans-hero-graphic {
            width: 100%;
            height: 180px;
        }
    }

    @media (max-width: 768px) {

        .plans-container {
            padding: 0 !important;
        }

        .plans-hero-container {
            padding: 0 15px !important;
        }

        .plans-hero-content h1 {
            font-size: 32px;
        }
        .city-plans-container{
            width: 95%;
            justify-self: center;
        }

        .city-selector-card {
            flex-direction: row !important;
            align-items: center !important;
            padding: 15px !important;
            gap: 12px !important;
            flex-wrap: wrap;
            width: 85%;
            justify-self: center;
        }

        .city-icon-box {
            width: 40px !important;
            height: 40px !important;
            font-size: 16px !important;
        }

        .city-title {
            font-size: 14px !important;
            white-space: nowrap;
        }

        .city-dropdown-box {
            width: 100% !important;
            max-width: 100% !important;
            margin-left: 0 !important;
        }

        .city-select-input {
            padding: 10px 12px !important;
            font-size: 13px !important;
        }

        .hero-bg-img {
            margin-left: 0px;
        }

        .why-choose-grid {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .why-item {
            align-items: center;
        }

        .why-text {
            text-align: center;
        }

        .plan-info-card,
        .why-choose-banner {
            padding: 25px 15px;
            width: 85%;
            justify-self: center;
        }
    }
</style>
