@extends('frontend.layout.app')

@section('title', 'UCN India - Broadcaster Packages')

@section('content')
<div class="packages-page-wrapper">
    <!-- Hero Banner with Background Image & Gradient -->
    <section class="packages-hero-section">
        <div class="container-fluid packages-container">
            <div class="packages-breadcrumb">
                <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                <span>Consumer Corner</span> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                <span>Broadcaster Packages</span>
            </div>
            <h1>Broadcaster <span class="highlight-orange">Packages</span></h1>
            <div class="hero-bottom-line"></div>
        </div>
        <div class="upgrade-hero-graphic">
            <img src="{{ asset('asset/images/enterprises/broadcasterPackages.png') }}" alt="Upgrade Hero Graphic"
                class="upgrade-hero-img">
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="packages-content-section">
        <div class="container-fluid packages-container">

            <!-- Tabs Switcher -->
            <div class="packages-tabs-row">
                <button class="pkg-tab-btn active" id="btnBouquets" onclick="switchTab('bouquets')">Bouquets</button>
                <button class="pkg-tab-btn" id="btnAlacartes" onclick="switchTab('alacartes')">Ala Cartes</button>
            </div>

            <!-- BOUQUETS TAB CONTENT (Accordion Style) -->
            <div id="paneBouquets" class="tab-pane">

                @php
                $broadcasterBouquets = [
                'STAR' => [
                ['SVP MARATHI HINDI', 135, 159.30], ['DISNEY KIDS PACK HD', 22, 25.96], ['DISNEY KIDS PACK', 18, 21.24],
                ['SPP MARATHI HINDI', 205, 241.90], ['SPP LITE BENGALI HINDI', 190, 224.20], ['SVP HINDI', 120, 141.60],
                ['SPP MARATHI LITE HINDI HD', 250, 295.00], ['SPP HINDI', 190, 224.20], ['SPP LITE HINDI HD', 220,
                259.60],
                ['SVP LITE TELUGU', 75, 88.50], ['SPP LITE TELUGU', 135, 159.30], ['STAR DISNEY KIDS PACK', 25, 29.50],
                ['STAR DISNEY KIDS PACK HD', 38, 44.84], ['SVP LITE HINDI HD', 160, 188.80], ['SVP MARATHI LITE HINDI
                HD', 180, 212.40],
                ['SVP LITE BENGALI HINDI', 120, 141.60], ['SPP GUJARATI HINDI', 185, 218.30], ['SVP GUJARATI LITE HINDI
                HD', 160, 188.80],
                ['SVP GUJARATI HINDI', 125, 147.50], ['SPP GUJARATI LITE HINDI HD', 220, 259.60]
                ],
                'ZEE' => [
                ['ZEE ALL IN ONE PACK TELUGU SD', 85, 100.30], ['ZEE ALL IN ONE PACK BANGLA SD', 64, 75.52],
                ['ZEE ALL IN ONE PACK HINDI HD', 97, 114.46], ['ZEE ALL IN ONE PACK HINDI SD', 58, 68.44],
                ['ZEE PRIME PACK TELUGU SD', 34, 40.12], ['ZEE ALL IN ONE PACK TELUGU KANNADA HD', 110, 129.80],
                ['ZEE ALL IN ONE PACK KANNADA SD', 79, 93.22], ['ZEE ALL IN ONE PACK MARATHI HD', 119, 140.42],
                ['ZEE ALL IN ONE PACK MARATHI SD', 64, 75.52], ['ZEE ALL IN ONE PACK ODIA SD', 59, 69.62]
                ],
                'SONY' => [
                ['HAPPY INDIA 2026 SMART HINDI', 58, 68.44], ['HAPPY INDIA 2026 ENGLISH DELIGHT', 13, 15.34],
                ['HAPPY INDIA 2026 ENGLISH DELIGHT HD', 33, 38.94], ['HAPPY INDIA 2026 SMART PLUS BANGLA', 96, 113.28],
                ['HAPPY INDIA 2026 SMART PLUS HINDI', 93, 109.74], ['HAPPY INDIA 2026 SMART SOUTH', 30, 35.40],
                ['HAPPY INDIA 2026 SMART HD MARATHI', 38, 44.84], ['HAPPY INDIA 2026 SPORTS ACTION', 53, 62.54],
                ['HAPPY INDIA 2026 SMART BANGLA', 61, 71.98], ['HAPPY INDIA 2026 SMART MARATHI', 61, 71.98],
                ['HAPPY INDIA 2026 SMART PLUS MARATHI', 96, 113.28], ['HAPPY INDIA 2026 SMART HD HINDI', 36, 42.48],
                ['HAPPY INDIA 2026 SMART HD PLUS HINDI', 45, 53.10]
                ],
                'DISCOVERY' => [
                ['WBD FAMILY HD', 28, 33.04], ['WBD FAMILY SD', 17, 20.06], ['WBD LIFE SD', 15, 17.70], ['WBD LIFE HD',
                26, 30.68]
                ],
                'ZMCL' => [
                ['ZMCL WEST PACK SD', 1, 1.18]
                ],
                'BBC' => [
                ['BBC INDIA BOUQUET', 3, 3.54]
                ],
                'SUN' => [
                ['SD 2 TELUGU BASIC BOUQUET', 41, 48.38], ['SD 1 TAMIL BASIC BOUQUET', 54, 63.72],
                ['SD 3 KANNADA BASIC BOUQUET', 41, 48.38], ['SD 4 MALAYALAM BASIC BOUQUET', 24, 28.32],
                ['SD 1 SUN ULTIMATE BOUQUET', 118, 139.24]
                ],
                'E-TV' => [
                ['ETV FAMILY PACK 1', 31, 36.58]
                ],
                'TARANG GROUP' => [
                ['TARANG BOUQUET', 21.25, 25.08]
                ],
                'JAYA TV GROUP' => [
                ['JAYA BOUQUET HD', 10.5, 12.39]
                ],
                'TV TODAY' => [
                ['NEWS BOUQUET HD', 1.75, 2.07]
                ],
                'TIMES NOW' => [
                ['BOUQUET 1', 5, 5.90], ['BOUQUET 2', 15, 17.70], ['BOUQUET 3 HD', 28, 33.04],
                ['BOUQUET 4 HD', 7, 8.26], ['BOUQUET 5', 1, 1.18]
                ],
                'NDTV' => [
                ['NDTV NORTH INFO', 3.5, 4.13], ['NDTV NORTH LIFE', 4, 4.72], ['NDTV SOUTH INFO', 3, 3.54], ['NDTV
                ULTRA', 4.5, 5.31]
                ],
                'EPIC' => [
                ['IN10 VALUE PACK', 9, 10.62]
                ]
                ];
                @endphp

                @foreach($broadcasterBouquets as $broadcaster => $packages)
                <div class="pdf-table-box accordion-box">
                    <div class="pdf-header accordion-toggle" onclick="toggleAccordion(this)">
                        <span>{{ $broadcaster }}</span>
                        <i class="fa-solid fa-chevron-down accordion-icon"></i>
                    </div>
                    <div class="accordion-content">
                        <div class="table-responsive-wrapper">
                            <table class="pdf-data-table">
                                <thead>
                                    <tr>
                                        <th style="width: 10%;">Sr. No.</th>
                                        <th style="width: 45%;">Packages Name</th>
                                        <th style="width: 15%;">Rate</th>
                                        <th style="width: 15%;">Rate Incl</th>
                                        <th style="width: 15%; text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($packages as $index => $pkg)
                                    <tr>
                                        <td>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</td>
                                        <td><strong>{{ $pkg[0] }}</strong></td>
                                        <td>₹{{ $pkg[1] }}</td>
                                        <td>₹{{ number_format($pkg[2], 2) }}</td>
                                        <td style="text-align: center;"><button class="btn-view-channel">View
                                                channel</button></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <!-- ALA CARTES TAB CONTENT (Accordion Style) -->
            <div id="paneAlacartes" class="tab-pane" style="display: none;">

                @php
                $broadcasterAlacartes = [
                'STAR' => [
                ['DISNEY INTERNATIONAL HD', 19.00, 22.42], ['STAR MOVIES SELECT HD', 19.00, 22.42], ['STAR SPORTS SELECT
                HD', 19.00, 22.42], ['STAR SPORTS 3', 19.00, 22.42], ['STAR SPORTS 2 KANNADA', 19.00, 22.42], ['HUNGAMA
                TV', 2.00, 2.36], ['NAT GEO WILD', 2.00, 2.36], ['STAR JALSHA', 25.00, 29.50], ['STAR BHARAT HD', 19.00,
                22.42], ['DISNEY CHANNEL', 12.00, 14.16], ['SUPER HUNGAMA', 4.00, 4.72], ['STAR SPORTS 2', 19.00,
                22.42], ['STAR MOVIES HD', 19.00, 22.42], ['STAR SUVARNA', 19.00, 22.42], ['DISNEY JUNIOR', 4.00, 4.72],
                ['STAR SPORTS SELECT SD 2', 10.00, 11.80], ['MAA TV', 30.00, 35.40], ['STAR SPORTS HD 1', 19.00, 22.42],
                ['ASIANET MOVIES', 19.00, 22.42], ['STAR SPORTS HD 2', 19.00, 22.42], ['MAA MOVIES', 19.00, 22.42],
                ['STAR SPORTS 1 HINDI HD', 19.00, 22.42], ['ASIANET PLUS', 7.00, 8.26], ['SUVARNA PLUS', 12.00, 14.16],
                ['STAR JALSHA MOVIES', 15.00, 17.70], ['MAA MUSIC', 5.00, 5.90], ['MAA GOLD', 12.00, 14.16], ['STAR
                SPORTS SELECT HD 2', 15.00, 17.70], ['STAR SPORTS 1 TELUGU', 19.00, 22.42], ['PRAVAH PICTURE HD', 10.00,
                11.80], ['PRAVAH PICTURE SD', 6.00, 7.08], ['DISNEY CHANNEL HD', 17.00, 20.06], ['STAR MOVIES SELECT',
                10.00, 11.80], ['STAR GOLD ROMANCE', 3.00, 3.54], ['STAR GOLD 2 HD', 8.00, 9.44], ['STAR GOLD THRILLS',
                2.00, 2.36], ['STAR PLUS', 19.00, 22.42], ['STAR PLUS HD', 25.00, 29.50], ['STAR BHARAT', 15.00, 17.70],
                ['STAR GOLD', 19.00, 22.42], ['STAR GOLD SELECT HD', 8.00, 9.44], ['STAR GOLD SELECT SD', 7.00, 8.26],
                ['STAR PRAVAH HD', 19.00, 22.42], ['STAR SPORTS 1 HINDI', 19.00, 22.42], ['STAR MOVIES', 19.00, 22.42],
                ['STAR SPORTS SELECT SD 1', 19.00, 22.42], ['STAR SPORTS 1', 19.00, 22.42], ['STAR PRAVAH', 19.00,
                22.42], ['STAR GOLD 2', 8.00, 9.44], ['NGC', 3.00, 3.54], ['STAR VIJAY', 30.00, 35.40], ['STAR SPORTS
                KHEL', 1.00, 1.18], ['ASIANET', 30.00, 35.40], ['STAR GOLD HD', 19.00, 22.42], ['NGC HD', 14.00, 16.52],
                ['NAT GEO WILD HD', 8.00, 9.44],
                ['COLORS BANGLA CINEMA', 15.00, 17.70], ['MTV HD', 8.00, 9.44], ['NICK HD+', 19.00, 22.42], ['COLORS
                CINEPLEX HD', 19.00, 22.42], ['CNBC TV18', 4.00, 4.72], ['NEWS18 MADHYA PRADESH CHHATTISGARH', 0.10,
                0.12], ['HISTORY HD', 7.00, 8.26], ['NICK JR./TEEN NICK', 1.00, 1.18], ['HISTORY TV18', 3.00, 3.54],
                ['NEWS18 BIHAR JHARKHAND', 0.10, 0.12], ['NEWS18 RAJASTHAN', 0.10, 0.12], ['NICK', 19.00, 22.42],
                ['COLORS INFINITY', 10.00, 11.80], ['CNBC TV18 PRIME HD', 1.00, 1.18], ['COLORS MARATHI HD', 19.00,
                22.42], ['COLORS CINEPLEX', 15.00, 17.70], ['COLORS INFINITY HD', 15.00, 17.70], ['M TV', 5.00, 5.90],
                ['COLORS', 19.00, 22.42], ['NEWS18 MARATHI', 0.10, 0.12], ['CNN NEWS 18', 0.50, 0.59], ['COLORS BANGLA',
                7.00, 8.26], ['NEWS18 DELHI NCR JAMMU KASHMIR', 0.10, 0.12], ['COLORS GUJRATI', 7.00, 8.26], ['COLORS
                MARATHI', 15.00, 17.70], ['CNBC AWAAZ', 0.10, 0.12], ['COLORS HD', 19.00, 22.42], ['COLORS KANNADA',
                30.00, 35.40], ['SONIC', 2.00, 2.36], ['NEWS18 UTTAR PRADESH UTTARAKHAND', 0.10, 0.12], ['COLORS KANNADA
                CINEMA', 10.00, 11.80], ['NEWS18 BANGLA', 0.10, 0.12], ['NEWS18 PUNJAB HARYANA', 0.10, 0.12], ['STAR
                SPORTS 2 TELUGU', 19.00, 22.42], ['STAR SPORTS 2 TAMIL', 19.00, 22.42], ['NEWS18 ASSAM NORTHEAST', 0.10,
                0.12], ['COLORS SUPER', 1.00, 1.18], ['STAR SPORTS 2 HINDI', 19.00, 22.42], ['STAR SPORTS 2 HINDI HD',
                19.00, 22.42], ['CNBC BAJAAR', 1.00, 1.18], ['COLORS GUJARATI CINEMA', 7.00, 8.26], ['NEWS 18 GUJARATI',
                0.10, 0.12]
                ],
                'SONY' => [
                ['SONY SAB HD', 30.00, 35.40], ['SONY BBC EARTH HD', 19.00, 22.42], ['SONY YAY', 6.00, 7.08], ['SONY
                SPORTS TEN 2 HD', 30.00, 35.40], ['SONY SPORTS TEN 3 HD', 30.00, 35.40], ['SONY SPORTS TEN 1 HD', 30.00,
                35.40], ['SONY SPORTS TEN 3', 19.00, 22.42], ['SONY AATH', 10.00, 11.80], ['SONY SPORTS TEN 2', 19.00,
                22.42], ['SONY PIX', 10.00, 11.80], ['SONY SPORTS TEN 1', 19.00, 22.42], ['SONY ENTERTAINMENT
                TELEVISION', 19.00, 22.42], ['SONY MAX', 19.00, 22.42], ['SONY MAX HD', 19.00, 22.42], ['SONY MARATHI',
                10.00, 11.80], ['SONY BBC EARTH', 3.00, 3.54], ['SONY SAB', 19.00, 22.42], ['SONY SPORTS TEN 5', 19.00,
                22.42], ['SONY PIX HD', 19.00, 22.42], ['SONY MAX 2', 3.00, 3.54], ['SONY ENTERTAINMENT TELEVISION HD',
                30.00, 35.40], ['SONY SPORTS TEN 5 HD', 30.00, 35.40], ['SONY MAX 1', 5.00, 5.90]
                ],
                'ZEE' => [
                ['ZEE ZEST HD', 10.00, 11.80], ['ZEE CINEMALU', 15.00, 17.70], ['ZEE KANNADA', 19.00, 22.42], ['ZEE
                MARATHI HD', 19.00, 22.42], ['ZEE TALKIES HD', 19.00, 22.42], ['ZEE TAMIL', 19.00, 22.42], ['ZEE YUVA',
                1.00, 1.18], ['AND TV', 10.00, 11.80], ['UNITE8 SPORTS 2', 8.00, 9.44], ['ZEE BANGLA SONAR', 10.00,
                11.80], ['AND PICTURES HD', 19.00, 22.42], ['ZEE TV HD', 19.00, 22.42], ['ZEE TELUGU', 19.00, 22.42],
                ['ZEE BOLLYWOOD', 3.00, 3.54], ['ZEE MARATHI', 19.00, 22.42], ['ZEE TALKIES', 9.00, 10.62], ['ZEE
                CINEMA', 19.00, 22.42], ['ZEE TV', 19.00, 22.42], ['ZEE SARTHAK TV', 19.00, 22.42], ['AND TV HD', 19.00,
                22.42], ['ZEE ZEST', 1.00, 1.18], ['AND PICTURES', 15.00, 17.70], ['BIG MAGIC', 1.00, 1.18], ['ZEE
                CINEMA HD', 19.00, 22.42], ['ZING', 0.10, 0.12], ['ZEE BANGLA', 19.00, 22.42], ['UNITE8 SPORTS 1', 7.00,
                8.26], ['UNITE8 SPORTS 1 HD', 9.00, 10.62], ['AND XPLOR HD', 4.00, 4.72], ['ZEE PUNJABI', 10.00, 11.80],
                ['ZEE CLASSIC', 1.00, 1.18], ['UNITE8 SPORTS 2 HD', 11.00, 12.98]
                ],
                'DISCOVERY' => [
                ['INVESTIGATION DISCOVERY', 1.00, 1.18], ['INVESTIGATION DISCOVERY HD', 2.00, 2.36], ['CNN', 2.00,
                2.36], ['ANIMAL PLANET', 2.00, 2.36], ['POGO', 5.00, 5.90], ['DISCOVERY CHANNEL', 4.00, 4.72], ['CARTOON
                NETWORK', 5.00, 5.90], ['EUROSPORT', 5.00, 5.90], ['TLC HD WORLD', 3.00, 3.54], ['ANIMAL PLANET HD
                WORLD', 5.00, 5.90], ['DISCOVERY TURBO', 1.00, 1.18], ['DISCOVERY KIDS', 4.00, 4.72], ['DISCOVERY
                SCIENCE', 1.00, 1.18], ['DISCOVERY HD WORLD', 10.00, 11.80], ['TLC', 2.00, 2.36], ['CARTOON NETWORK HD
                PLUS', 7.00, 8.26], ['EUROSPORT HD', 7.00, 8.26]
                ],
                'ZMCL' => [
                ['ZEE MADHYA PRADESH CHHATTISGARH', 0.10, 0.12], ['ZEE BHARAT', 0.10, 0.12], ['WION', 1.00, 1.18],
                ['SALAAM TV', 0.10, 0.12], ['ZEE PUNJAB HARYANA HIMACHAL', 0.10, 0.12], ['ZEE 24 TAAS', 0.10, 0.12],
                ['ZEE BUSINESS', 0.10, 0.12], ['ZEE UTTAR PRADESH UTTARAKHAND', 0.10, 0.12]
                ],
                'TRAVEL XP' => [
                ['TRAVEL XP', 3.00, 3.54], ['TRAVEL XP HD', 9.00, 10.62], ['FOODXP SD', 1.50, 1.77]
                ],
                'BBC' => [
                ['BBC NEWS', 1.50, 1.77], ['BBC CBEEBIES', 3.00, 3.54]
                ],
                'SUN' => [
                ['SURYA MOVIES', 12.00, 14.16], ['GEMINI TV', 19.00, 22.42], ['UDAYA TV', 19.00, 22.42], ['GEMINI
                MOVIES', 19.00, 22.42], ['K TV', 19.00, 22.42], ['SUN MUSIC', 6.00, 7.08], ['UDAYA MOVIES', 19.00,
                22.42], ['SURYA TV', 12.00, 14.16], ['SUN TV', 19.00, 22.42], ['GEMINI MUSIC', 4.00, 4.72], ['GEMINI
                COMEDY', 5.00, 5.90], ['GEMINI LIFE', 7.00, 8.26], ['KUSHI TV', 4.00, 4.72], ['CHINTU TV', 6.00, 7.08],
                ['UDAYA COMEDY', 7.00, 8.26], ['UDAYA MUSIC', 6.00, 7.08]
                ],
                'E-TV' => [
                ['ETV PLUS', 13.00, 15.34], ['ETV TELUGU', 19.00, 22.42], ['ETV ANDRA PRADESH', 2.00, 2.36], ['ETV
                TELANGANA', 2.00, 2.36]
                ],
                'TARANG GROUP' => [
                ['TARANG', 17.00, 20.06], ['TARANG MUSIC', 2.00, 2.36], ['PRARTHANA', 2.00, 2.36], ['ALANKAR', 4.00,
                4.72]
                ],
                'JAYA TV GROUP' => [
                ['JAYA TV HD', 19.00, 22.42], ['JAYA MAX', 3.75, 4.43], ['JAYA MOVIES', 3.75, 4.43], ['JAYA PLUS SD',
                1.00, 1.18]
                ],
                'TV TODAY' => [
                ['AAJ TAK HD', 2.50, 2.95], ['INDIA TODAY', 1.80, 2.12]
                ],
                'NDTV' => [
                ['NDTV GOOD TIMES', 1.50, 1.77], ['NDTV 24/7', 3.00, 3.54], ['NDTV PROFIT', 1.00, 1.18], ['NDTV INDIA',
                1.00, 1.18]
                ],
                'TIMES NOW' => [
                ['TIMES NOW', 3.00, 3.54], ['MOVIES NOW', 10.00, 11.80], ['ZOOM TV', 0.50, 0.59], ['MN+ HD', 10.00,
                11.80], ['ET NOW', 2.00, 2.36], ['ROMEDY NOW', 5.00, 5.90], ['MIRROR NOW', 0.10, 0.12], ['MNX', 5.00,
                5.90], ['MOVIES NOW HD', 16.00, 18.88], ['TIMES NOW WORLD HD', 3.00, 3.54], ['ET NOW SWADESH', 1.00,
                1.18], ['MNX HD', 10.00, 11.80]
                ],
                'EPIC' => [
                ['EPIC TV', 5.00, 5.90], ['EPIC KIDS', 5.00, 5.90]
                ],
                'SURYANSH BROADCASTING PRIVATE LIMITED' => [
                ['FLOWERS TV', 10.00, 11.80]
                ]
                ];
                @endphp

                @foreach($broadcasterAlacartes as $broadcaster => $channels)
                <div class="pdf-table-box accordion-box">
                    <div class="pdf-header accordion-toggle" onclick="toggleAccordion(this)">
                        <span>{{ $broadcaster }}</span>
                        <i class="fa-solid fa-chevron-down accordion-icon"></i>
                    </div>
                    <div class="accordion-content">
                        <div class="table-responsive-wrapper">
                            <table class="pdf-data-table">
                                <thead>
                                    <tr>
                                        <th style="width: 10%;">Sr. No.</th>
                                        <th style="width: 50%;">Channel Name</th>
                                        <th style="width: 20%;">Rate</th>
                                        <th style="width: 20%;">Rate Incl</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($channels as $index => $ch)
                                    <tr>
                                        <td>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</td>
                                        <td><strong>{{ $ch[0] }}</strong></td>
                                        <td>₹{{ number_format($ch[1], 2) }}</td>
                                        <td>₹{{ number_format($ch[2], 2) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section>
</div>

<script>
    function switchTab(tabName) {
        const btnBouquets = document.getElementById('btnBouquets');
        const btnAlacartes = document.getElementById('btnAlacartes');
        const paneBouquets = document.getElementById('paneBouquets');
        const paneAlacartes = document.getElementById('paneAlacartes');

        if (tabName === 'bouquets') {
            btnBouquets.classList.add('active');
            btnAlacartes.classList.remove('active');
            paneBouquets.style.display = 'block';
            paneAlacartes.style.display = 'none';
        } else {
            btnAlacartes.classList.add('active');
            btnBouquets.classList.remove('active');
            paneAlacartes.style.display = 'block';
            paneBouquets.style.display = 'none';
        }
    }

    function toggleAccordion(headerElement) {
        const accordionBox = headerElement.parentElement;
        const content = accordionBox.querySelector('.accordion-content');

        // Toggle active class for icon rotation
        accordionBox.classList.toggle('active');

        // Toggle visibility smoothly
        if (content.style.display === 'block') {
            content.style.display = 'none';
        } else {
            content.style.display = 'block';
        }
    }
</script>
@endsection

<style>
    .packages-page-wrapper {
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
    /* .packages-hero-section .packages-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    } */

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
        justify-content: space-between;
    }

    .packages-breadcrumb {
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

    .upgrade-hero-graphic {
        position: relative;
        width: 450px;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        flex-shrink: 0;
        margin-right: 150px;
    }

    .upgrade-hero-img {
        position: absolute;
        width: 100%;
        height: auto;
        object-fit: contain;
    }

    /* Tabs */
    .packages-tabs-row {
        display: flex;
        gap: 10px;
        margin-bottom: 30px;
        border-bottom: 2px solid #E2E8F0;
        padding-bottom: 10px;
        justify-content: center;
    }

    .pkg-tab-btn {
        background: #FFF;
        border: 1px solid #CBD5E1;
        padding: 10px 25px;
        border-radius: 8px;
        font-size: 15px;
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

    /* Accordion Style Boxes */
    .pdf-table-box {
        background: #FFF;
        border-radius: 12px;
        border: 1px solid #CBD5E1;
        margin-bottom: 20px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
    }

    .pdf-header {
        background: #26a07c;
        color: #FFF;
        padding: 15px 20px;
        font-size: 17px;
        font-weight: 700;
        text-transform: uppercase;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        user-select: none;
        transition: background 0.2s;
    }

    .pdf-header:hover {
        background: #019065;
    }

    .accordion-icon {
        transition: transform 0.3s ease;
        font-size: 14px;
    }

    /* Accordion content hidden by default */
    .accordion-content {
        display: none;
        background: #FFF;
    }

    .accordion-box.active .accordion-icon {
        transform: rotate(180deg);
    }

    /* Horizontal scroll wrapper for mobile screens */
    .table-responsive-wrapper {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .pdf-data-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 500px;
        /* Ensures horizontal scroll works smoothly on small mobile screens */
    }

    .pdf-data-table th {
        background: #F1F5F9;
        color: #334155;
        padding: 12px 20px;
        text-align: left;
        font-size: 13px;
        font-weight: 700;
        border-bottom: 1px solid #CBD5E1;
        white-space: nowrap;
    }

    .pdf-data-table td {
        padding: 12px 20px;
        border-bottom: 1px solid #E2E8F0;
        font-size: 14px;
        color: #1E293B;
        white-space: nowrap;
    }

    .pdf-data-table tr:last-child td {
        border-bottom: none;
    }

    .pdf-data-table tr:hover {
        background: #F8FAFC;
    }

    .btn-view-channel {
        background: #0EA5E9;
        color: #FFF;
        border: none;
        padding: 6px 14px;
        border-radius: 6px;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
    }

    .btn-view-channel:hover {
        opacity: 0.9;
    }

    @media (max-width: 768px) {
        .packages-hero-section {
            flex-direction: column;
            text-align: center;
            padding: 30px 15px;
        }

        .packages-hero-section .packages-container {
            flex-direction: column;
            text-align: center;
        }

        .packages-breadcrumb {
            justify-content: center;
        }

        .hero-bottom-line {
            margin: 12px auto 0 auto;
        }

        .upgrade-hero-graphic {
            width: 100%;
            height: 200px;
            justify-content: center;
            margin-right: 15px;
            margin-top: 30px;
        }

        .packages-container {
            padding: 0 !important;
            width: 95%;
        }

        .upgrade-hero-img {
            width: 100%;
        }

        .pdf-data-table th,
        .pdf-data-table td {
            padding: 10px 12px;
            font-size: 12px;
        }
    }
</style>
