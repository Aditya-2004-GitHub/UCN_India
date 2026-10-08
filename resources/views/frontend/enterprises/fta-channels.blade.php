@extends('frontend.layout.app')

@section('title', 'UCN India - FTA Channels')

@section('content')
<div class="fta-page-wrapper">
    <!-- Hero Banner with Background Image & Gradient -->
    <section class="packages-hero-section">
        <div class="container-fluid packages-container">
            <div class="packages-breadcrumb">
                <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                <span>Consumer Corner</span> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                <span>FTA Channels</span>
            </div>
            <h1>FTA <span class="highlight-orange">Channels</span></h1>
            <div class="hero-bottom-line"></div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="packages-content-section">
        <div class="container-fluid packages-container">

            <div class="fta-section-title">
                <h2>FTA Channel List</h2>
            </div>

            @php
            $ftaChannels = [
            "ABP NEWS", "INDIA TV", "REPUBLIC TV", "REPUBLIC BHARAT SD",
            "NEWS 24", "MASTI", "E 24", "B4U MUSIC",
            "INSYNC", "FASHION TV", "MAIBOLI", "ABP MAJHA",
            "TV9 MARATHI", "SAAM TV", "AWAZ INDIA", "LORD BUDDHA",
            "FAKT MARATHI", "ALJAZEERA ENGLISH", "RUSSIA TODAY", "EURO NEWS",
            "TV 5 MONDE", "DW ENGLISH HD", "EWTN ASIA", "AASTHA TV",
            "SANSKAR", "SATSANG", "HARE KRSNA", "PEACE OF MIND",
            "SHRADDHA", "AASTHA BHAJAN", "SAADHNA", "DIVYA",
            "SHUBH TV", "SHUBHSANDESH", "PTC PUNJABI", "PTC NEWS",
            "PTC CHAKDE", "SANGEET BANGLA", "CHARDIKLA TIME TV", "RUPASHI BANGLA",
            "WIN TV", "DAYSTAR", "GOD TV", "SOHAM GUJRATI",
            "MH1 MUSIC", "SANSAD TV RAJYASABHA HD", "KASHISH TV", "SANGEET BHOJPURI",
            "BHOJPURI CINEMA", "PARAS", "JINVANI", "ARIHANT",
            "TV9 TELUGU", "V6 NEWS", "TTD", "SRI SANKARA",
            "AMRITA TV", "KAIRALI", "JEEVAN TV", "SHALOM",
            "ASIANET NEWS", "MAZHAVIL MANORAMA", "SUBHAVAARTHA", "NEPAL 1",
            "VTV GUJRATI", "TV9 GUJRATI", "DD NATIONAL", "DD INDIA",
            "DD SAHYADRI", "DD BHARTI", "DD NEWS", "DD SPORTS",
            "DD KISAN", "SANSAD TV - LOKSABHA", "SANSAD TV - RAJYASABHA", "DD PUNJABI",
            "DD BANGLA", "DD ORIYA", "DD URDU", "DD BIHAR",
            "DD UP", "DD MP", "DD RAJASTHAN", "DD KASHIR",
            "DD PODHIGAI", "DD SAPTAGIRI", "DD CHANDANA", "DD MALAYALAM","LOKSHAHI",
            "CNA", "FRANCE 24", "VEDIC",
            "ANJAN TV", "SHEMAROO TV", "ABP ANANDA", "SUN MARATHI",
            "GOLDMINES BOLLYWOOD", "FASHION TV HD", "GOLDMINES", "SHEMAROO UMANG",
            "TIMES NOW NAVBHARAT SD", "GOLDMINES MOVIES", "DD CHHATTISGARH", "FATEH TV",
            "MADHA", "NEWS STATE MP AND CG", "PITAARA", "PTC SIMRAN",
            "RENGONI", "SAILEELA", "OTV", "SWAYAM PRABHA 31",
            "UCN MARATHI TADKA", "UCN BEATS", "SWAYAM PRABHA 28", "SHEMAROO MARATHIBANA",
            "AAKASH BANGLA", "DD ARUNPRABHA", "SWAYAM PRABHA 27", "TV 9 BHARATVARSH",
            "DD YADAGIRI", "MCX", "UCN DIL SE", "ISHWAR BHAKTI",
            "FOOD FOOD", "UCN NEWS", "UCN BUDDHA", "UCN SINDHI",
            "UCN URDU", "DD ASSAM", "UCN PRIME", "UCN PLUS",
            "UCN SHRADDHA", "UCN INFO", "UCN BLOCKBUSTER", "UCN HOLLYWOOD",
            "UCN PUB", "UCN CINEMA HD", "UCN MARATHI", "UCN PRAVACHAN",
            "UCN SOCIAL MEDIA HD", "MRP INFO", "UCN SOCIAL MEDIA", "UCN COMEDY",
            "UCN CLASSIC", "UCN LAMHE", "UCN GUJRATI", "UCN PUNJABI",
            "UCN NATARANG", "UCN NEWS HD", "UCN BHOJPURI", "UCN RAGINI",
            "UCN SUFI", "UCN EVENT", "UCN GURBANI", "UCN POP STUDIO",
            "UCN DAKSHIN EXPRESS", "JAI MAHARASHTRA", "DD GIRNAR", "SUN MARATHI HD",
            "PUBLIC MUSIC", "AASTHA KANNADA", "TV9 KANNADA", "CG MANORANJAN",
            "SHEMAROO JOSH", "INDIA TV SPEED NEWS", "NDTV MARATHI", "PUDHARI NEWS",
            "SUN NEO HD", "SUN NEO SD", "UCN DAIRO", "UCN FASHION FITNESS",
            "UCN HORROR", "UCN LITIL STAR", "UCN LIVE", "UCN QAWWALI",
            "UCN ROX", "BHAKTHI TV", "DD NAGALAND", "DD MEGHALAYA",
            "DD GOA", "STAR UTSAV MOVIES", "STAR UTSAV", "NEWS 18 INDIA",
            "COLORS RISHTEY", "COLORS CINEPLEX SUPERHITS", "COLORS CINEPLEX BOLLYWOOD", "ASIANET NEWS",
            "FILAMCHI", "SHOWBOX", "GNT", "AAJ TAK",
            "SONY PAL", "SONY WAH", "ZEE ANMOL CINEMA 2", "BIG MAGIC",
            "ZEE ANMOL CINEMA", "ZEE 24 KALAK", "ZEE ACTION", "ZEE ANMOL",
            "ZEE BISKOPE", "ZEE NEWS", "NDTV MP CG", "DD SPORTS HD",
            "DD NEWS HD", "DD NATIONAL HD", "NAZARA"
            ];
            @endphp

            <div class="fta-grid-container">
                @foreach($ftaChannels as $channel)
                <div class="fta-channel-card">
                    <span>{{ $channel }}</span>
                </div>
                @endforeach
            </div>

        </div>
    </section>
</div>
@endsection

<style>
    .fta-page-wrapper {
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

    /* Hero Section with bg-img.png and gradient */
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

    /* Section Title */
    .fta-section-title {
        margin-bottom: 25px;
    }

    .fta-section-title h2 {
        font-size: 22px;
        font-weight: 700;
        color: #1E293B;
        position: relative;
        padding-left: 15px;
    }

    .fta-section-title h2::before {
        content: '';
        position: absolute;
        left: 0;
        top: 4px;
        bottom: 4px;
        width: 4px;
        background: #FF6600;
        border-radius: 4px;
    }

    /* FTA Grid Layout */
    .fta-grid-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 15px;
    }

    .fta-channel-card {
        background: #FFFFFF;
        border: 1px solid #CBD5E1;
        border-radius: 8px;
        padding: 15px 20px;
        text-align: center;
        font-size: 14px;
        font-weight: 600;
        color: #334155;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
        transition: all 0.2s ease;
    }

    .fta-channel-card:hover {
        border-color: #FF6600;
        color: #FF6600;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(255, 102, 0, 0.08);
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .fta-grid-container {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {
        .packages-container {
            padding: 0 !important;
            width: 95%;
        }

        .fta-grid-container {
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .fta-channel-card {
            padding: 12px 10px;
            font-size: 13px;
        }
    }

    @media (max-width: 480px) {
        .fta-grid-container {
            grid-template-columns: 1fr;
        }
    }
</style>F
