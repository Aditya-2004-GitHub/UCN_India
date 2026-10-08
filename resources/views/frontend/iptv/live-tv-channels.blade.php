@extends('frontend.layout.app')

@section('title', 'UCN India - Live TV Channels')

@section('content')
<div class="packages-page-wrapper">
    <!-- Hero Banner Section -->
    <section class="packages-hero-section">
        <div class="container-fluid packages-container packages-hero-flex">
            <div>
                <div class="packages-breadcrumb">
                    <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <span>IPTV</span> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <span>Live TV Channels</span>
                </div>
                <h1>Explore 400+ <span class="highlight-orange"><br />Live TV Channels</span></h1>
                <p class="hero-subtitle">Stream your favorite channels in crystal clear HD and 4K quality across sports,
                    movies, news, and entertainment.</p>
                <div class="hero-bottom-line"></div>
            </div>
            <div class="upgrade-hero-graphic">
                <img src="{{ asset('asset/images/iptv/liveTVChannel.png') }}" alt="Live TV Channels Graphic"
                    class="upgrade-hero-img">
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="packages-content-section">
        <div class="container-fluid packages-container">

            <!-- Search & Filter Bar -->
            <div class="channels-filter-bar">
                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" id="channelSearch" placeholder="Search channels by name..."
                        onkeyup="filterChannels()">
                </div>
                <div class="category-tabs-scroll">
                    <button class="cat-btn active" onclick="filterCategory('all', this)">All Channels</button>
                    <button class="cat-btn" onclick="filterCategory('sports', this)">Sports</button>
                    <button class="cat-btn" onclick="filterCategory('entertainment', this)">Entertainment</button>
                    <button class="cat-btn" onclick="filterCategory('movies', this)">Movies</button>
                    <button class="cat-btn" onclick="filterCategory('news', this)">News</button>
                    <button class="cat-btn" onclick="filterCategory('kids', this)">Kids</button>
                </div>
            </div>

            <!-- Channels Grid -->
            <div class="channels-grid" id="channelsGrid">
                <!-- Channel Item 1 -->
                <div class="channel-card" data-category="sports" data-name="Star Sports 1 HD">
                    <div class="channel-badge hd-badge">HD</div>
                    <div class="channel-icon-box bg-peach"><i class="fa-solid fa-baseball"></i></div>
                    <div class="channel-info">
                        <h4>Star Sports 1 HD</h4>
                        <span class="cat-tag">Sports</span>
                    </div>
                </div>

                <!-- Channel Item 2 -->
                <div class="channel-card" data-category="entertainment" data-name="Star Plus HD">
                    <div class="channel-badge hd-badge">HD</div>
                    <div class="channel-icon-box icon-blue"><i class="fa-solid fa-tv"></i></div>
                    <div class="channel-info">
                        <h4>Star Plus HD</h4>
                        <span class="cat-tag">Entertainment</span>
                    </div>
                </div>

                <!-- Channel Item 3 -->
                <div class="channel-card" data-category="movies" data-name="Sony Max">
                    <div class="channel-badge sd-badge">SD</div>
                    <div class="channel-icon-box icon-orange"><i class="fa-solid fa-film"></i></div>
                    <div class="channel-info">
                        <h4>Sony Max</h4>
                        <span class="cat-tag">Movies</span>
                    </div>
                </div>

                <!-- Channel Item 4 -->
                <div class="channel-card" data-category="news" data-name="Aaj Tak HD">
                    <div class="channel-badge hd-badge">HD</div>
                    <div class="channel-icon-box icon-blue"><i class="fa-solid fa-newspaper"></i></div>
                    <div class="channel-info">
                        <h4>Aaj Tak HD</h4>
                        <span class="cat-tag">News</span>
                    </div>
                </div>

                <!-- Channel Item 5 -->
                <div class="channel-card" data-category="kids" data-name="Cartoon Network">
                    <div class="channel-badge sd-badge">SD</div>
                    <div class="channel-icon-box icon-pink"><i class="fa-solid fa-child"></i></div>
                    <div class="channel-info">
                        <h4>Cartoon Network</h4>
                        <span class="cat-tag">Kids</span>
                    </div>
                </div>

                <!-- Channel Item 6 -->
                <div class="channel-card" data-category="sports" data-name="Sony Ten 1">
                    <div class="channel-badge hd-badge">HD</div>
                    <div class="channel-icon-box bg-peach"><i class="fa-solid fa-futbol"></i></div>
                    <div class="channel-info">
                        <h4>Sony Ten 1</h4>
                        <span class="cat-tag">Sports</span>
                    </div>
                </div>

                <!-- Channel Item 7 -->
                <div class="channel-card" data-category="entertainment" data-name="Zee TV">
                    <div class="channel-badge sd-badge">SD</div>
                    <div class="channel-icon-box icon-orange"><i class="fa-solid fa-clapperboard"></i></div>
                    <div class="channel-info">
                        <h4>Zee TV</h4>
                        <span class="cat-tag">Entertainment</span>
                    </div>
                </div>

                <!-- Channel Item 8 -->
                <div class="channel-card" data-category="movies" data-name="Zee Cinema HD">
                    <div class="channel-badge hd-badge">HD</div>
                    <div class="channel-icon-box icon-orange"><i class="fa-solid fa-video"></i></div>
                    <div class="channel-info">
                        <h4>Zee Cinema HD</h4>
                        <span class="cat-tag">Movies</span>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
@endsection

<script>
    function filterCategory(category, btnElement) {
        // Active tab styling toggle
        const buttons = document.querySelectorAll('.cat-btn');
        buttons.forEach(btn => btn.classList.remove('active'));
        btnElement.classList.add('active');

        // Filter cards
        const cards = document.querySelectorAll('.channel-card');
        cards.forEach(card => {
            const cardCat = card.getAttribute('data-category');
            if (category === 'all' || cardCat === category) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }

    function filterChannels() {
        const input = document.getElementById('channelSearch').value.toLowerCase();
        const cards = document.querySelectorAll('.channel-card');

        cards.forEach(card => {
            const name = card.getAttribute('data-name').toLowerCase();
            if (name.includes(input)) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>

<style>
    .packages-page-wrapper {
        background: #F8FAFC;
        min-height: 80vh;
        padding-bottom: 60px;
        font-family: 'Poppins', sans-serif;
    }

    .packages-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
    }

    .packages-hero-section {
        padding: 50px 0 40px;
        background-image: url('{{ asset("asset/images/enterprises/bg-img.png") }}'),
        linear-gradient(to bottom, var(--color-white), var(--bg-light-blue, #F1F5F9));
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover, cover;
        border-bottom: 1px solid #E2E8F0;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
    }

    .packages-hero-flex {
        display: flex;
        justify-content: space-between;
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
        font-size: 38px;
        font-weight: 700;
        color: #1E293B;
        margin-bottom: 12px;
    }

    .highlight-orange {
        background: var(--primary-orange);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-subtitle {
        font-size: 15px;
        color: #64748B;
        max-width: 600px;
        line-height: 1.6;
        margin-bottom: 0;
    }

    .hero-bottom-line {
        width: 55px;
        height: 2.3px;
        margin-top: 15px;
        background: linear-gradient(to right, var(--color-blue), var(--primary-orange));
        border-radius: 2px;
    }

    .upgrade-hero-graphic {
        width: 450px;
        height: 260px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .upgrade-hero-img {
        max-width: 100%;
        max-height: 300px;
        object-fit: contain;
        margin-right: 100px;
    }

    /* Filter Bar */
    .channels-filter-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        margin-bottom: 35px;
        flex-wrap: wrap;
    }

    .search-box {
        position: relative;
        flex: 1;
        min-width: 280px;
    }

    .search-box i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #64748B;
    }

    .search-box input {
        width: 100%;
        padding: 12px 15px 12px 45px;
        border: 1px solid #CBD5E1;
        border-radius: 30px;
        font-size: 14px;
        outline: none;
        background: #FFFFFF;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
        font-family: 'Poppins', sans-serif;
    }

    .search-box input:focus {
        border-color: var(--primary-orange);;
    }

    .category-tabs-scroll {
        display: flex;
        gap: 10px;
        overflow-x: auto;
        padding-bottom: 5px;
    }

    .cat-btn {
        background: #FFFFFF;
        border: 1px solid #CBD5E1;
        padding: 10px 20px;
        border-radius: 25px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        color: #64748B;
        white-space: nowrap;
        transition: all 0.2s;
    }

    .cat-btn.active,
    .cat-btn:hover {
        background: var(--primary-orange);;
        color: #FFFFFF;
        border-color: var(--primary-orange);;
        box-shadow: 0 4px 10px var(--bg-orange);
    }

    /* Channels Grid */
    .channels-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .channel-card {
        background: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 16px;
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
        position: relative;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
        transition: all 0.3s ease;
    }

    .channel-card:hover {
        transform: translateY(-4px);
        border-color: var(--primary-orange);
        box-shadow: 0 6px 20px rgba(138, 43, 226, 0.08);
    }

    .channel-badge {
        position: absolute;
        top: 12px;
        right: 12px;
        font-size: 9px;
        font-weight: 700;
        padding: 2px 8px;
        border-radius: 6px;
    }

    .hd-badge {
        background: var(--bg-orange);
        color: var(--primary-orange);;
    }

    .sd-badge {
        background: #F1F5F9;
        color: #64748B;
    }

    .channel-icon-box {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
    }

    .channel-info h4 {
        font-size: 15px;
        font-weight: 700;
        color: #1E293B;
        margin-bottom: 2px;
    }

    .cat-tag {
        font-size: 12px;
        color: #64748B;
    }

    /* Icon theme colors */
    .icon-navy {
        background: #EEF2FF;
        color: var(--color-blue);
    }

    .icon-orange {
        background: #FFEDD5;
        color: #F97316;
    }

    .icon-blue {
        background: #E0F2FE;
        color: #0284C7;
    }

    .icon-pink {
        background: #FCE7F3;
        color: #DB2777;
    }

    .bg-peach {
        background: rgba(255, 182, 143, 0.25);
        color: #FF6600;
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .channels-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 1024px) {
        .packages-hero-flex {
            flex-direction: column;
            text-align: center;
            gap: 25px;
        }

        .hero-subtitle {
            margin: 0 auto;
        }

        .hero-bottom-line {
            margin: 15px auto 0 auto;
        }

        .upgrade-hero-graphic {
            justify-content: center;
            width: 100%;
        }

        .channels-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .packages-container {
            padding: 0 15px !important;
            width: 100% !important;
            box-sizing: border-box !important;
        }

        .upgrade-hero-img {
            margin-right: 0px;
        }

        .packages-hero-section h1 {
            font-size: 28px;
        }

        .channels-filter-bar {
            flex-direction: column !important;
            align-items: stretch !important;
            gap: 15px !important;
            width: 100% !important;
        }

        .search-box {
            width: 100% !important;
            min-width: 100% !important;
            box-sizing: border-box !important;
        }

        .category-tabs-scroll {
            display: flex !important;
            flex-wrap: wrap !important;
            /* Mobile par tabs ko wrap karne ke liye */
            overflow-x: visible !important;
            gap: 8px !important;
            width: 100% !important;
        }

        .cat-btn {
            flex: 1 1 calc(33.333% - 6px) !important;
            /* Ek row mein 3 clean buttons fit honge */
            text-align: center !important;
            padding: 8px 6px !important;
            font-size: 11px !important;
            white-space: nowrap !important;
            box-sizing: border-box !important;
        }

        .channels-grid {
            grid-template-columns: 1fr !important;
        }
    }
</style>
