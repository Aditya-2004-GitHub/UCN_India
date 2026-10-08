@extends('frontend.layout.app')

@section('title', 'UCN India - Home')

@section('content')
    <div class="home-page-bg">
        <section class="hero-section hero-iptv-carousel-section">
            <!-- Semantic Main Heading for SEO -->
            <h1 class="visually-hidden">UCN Smart IPTV - Watch 400+ Live Satellite Channels & 25+ Premium OTTs with Zero Set-Top Box</h1>

            <!-- Sleek Top Header & Banner Switcher Bar (Light Theme) -->
            <div class="container hero-compact-header-container">
                <div class="hero-header-row">
                    <div class="hero-header-left">
                        <div class="hero-smart-badge-wrap">
                            <span class="gov-blinking-new-mini"><span class="blink-text">NEW</span></span>
                            <a href="https://ucnsmart.com/?connect=1&source=qr" target="_blank" class="hero-smart-pill"
                                title="Explore UCN Smart IPTV Portal">
                                <span class="smart-pill-name">UCN SMART IPTV</span>
                                <span class="smart-pill-divider">—</span>
                                <span class="smart-pill-feature desktop-only">100% Boxless Live TV & Fiber Internet</span>
                                <span class="smart-pill-feature mobile-only">100% Boxless Live TV</span>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Interactive Quick Filter Tabs to Jump between Banners directly -->
                    <div class="hero-header-right">
                        <div class="hero-category-tabs" id="heroCategoryTabs">
                            <button type="button" class="hero-cat-tab is-active" data-slide-target="0">
                                <i class="fa-solid fa-bolt"></i> Base Plan ₹636
                            </button>
                            <button type="button" class="hero-cat-tab" data-slide-target="1">
                                <i class="fa-solid fa-trophy"></i> Live Sports 4K
                            </button>
                            <button type="button" class="hero-cat-tab" data-slide-target="2">
                                <i class="fa-solid fa-star"></i> Sony LIV KBC
                            </button>
                            <button type="button" class="hero-cat-tab" data-slide-target="3">
                                <i class="fa-solid fa-film"></i> Movies & OTTs
                            </button>
                            <button type="button" class="hero-cat-tab" data-slide-target="4">
                                <i class="fa-solid fa-shield-halved"></i> Epic Saga
                            </button>
                            <button type="button" class="hero-cat-tab" data-slide-target="5">
                                <i class="fa-solid fa-masks-theater"></i> Family Drama
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Peeking 3-Card Banner Carousel (ucnsmart.com style) -->
            <div class="hero-carousel-outer">
                <div class="hero-carousel-viewport" id="heroCarouselViewport">
                    <div class="hero-carousel-track" id="heroCarouselTrack">
                        @php
                            $heroSlides = [
                                [
                                    'badge_icon' => '',
                                    'badge_text' => '',
                                    'title' => '',
                                    'desc' => '',
                                    'meta' => '',
                                    'btn_text' => 'Explore Base Plan ₹636',
                                    'link' => route('iptv.plans'),
                                    'is_external' => false,
                                    'image' => asset('asset/images/hero/hero_base_plan_636.jpg'),
                                ],
                                [
                                    'badge_icon' => 'fa-solid fa-trophy',
                                    'badge_text' => 'LIVE IN 4K • MEGA SPORTS',
                                    'title' => 'Live Cricket & Global Sports in 4K',
                                    'desc' => 'Star Sports, Sony Sports & major live sporting tournaments with ultra-low latency & Dolby sound.',
                                    'meta' => '400+ Live Satellite Channels',
                                    'btn_text' => 'View Sports Channels',
                                    'link' => route('iptv.live-tv-channels'),
                                    'is_external' => false,
                                    'image' => asset('asset/images/hero/slide_sports4k.jpg'),
                                ],
                                [
                                    'badge_icon' => 'fa-solid fa-star',
                                    'badge_text' => 'SONY LIV • LIVE HD',
                                    'title' => 'Kaun Banega Crorepati & Live Shows',
                                    'desc' => 'Watch live episodes, game shows, and play along directly on your Smart TV with zero set-top box.',
                                    'meta' => 'Sony LIV Premium Included',
                                    'btn_text' => 'Watch on Smart TV',
                                    'link' => 'https://ucnsmart.com/?connect=1&source=qr',
                                    'is_external' => true,
                                    'image' => asset('asset/images/hero/KBC_hero_banner.webp'),
                                ],
                                [
                                    'badge_icon' => 'fa-solid fa-film',
                                    'badge_text' => 'BLOCKBUSTER CINEMA',
                                    'title' => 'Hollywood Hits & Global Premieres',
                                    'desc' => 'Non-stop thrillers, Hollywood action, and blockbuster cinema powered by Lionsgate Play & 25+ OTTs.',
                                    'meta' => '25+ Premium OTT Apps',
                                    'btn_text' => 'Explore OTT Lineup',
                                    'link' => route('iptv.plans'),
                                    'is_external' => false,
                                    'image' => asset('asset/images/hero/hero_banner_3.webp'),
                                ],
                                [
                                    'badge_icon' => 'fa-solid fa-shield-halved',
                                    'badge_text' => 'SONY LIV ORIGINAL • DOLBY AUDIO',
                                    'title' => 'Hastinapur Ke Veer — Epic Saga',
                                    'desc' => 'Witness dramatic storytelling, rich historical mythology, and cinematic visuals directly on your big screen.',
                                    'meta' => 'Ultra HD Streaming',
                                    'btn_text' => 'Stream on UCN Smart',
                                    'link' => 'https://ucnsmart.com/?connect=1&source=qr',
                                    'is_external' => true,
                                    'image' => asset('asset/images/hero/hero_banner_4.webp'),
                                ],
                                [
                                    'badge_icon' => 'fa-solid fa-masks-theater',
                                    'badge_text' => 'FAMILY DRAMA & COMEDY',
                                    'title' => 'Pushpa Impossible & Prime Time TV',
                                    'desc' => 'Catch all daily family entertainment live or catch-up anytime with cloud DVR & 7-day replay.',
                                    'meta' => 'Zero Set-Top Box Needed',
                                    'btn_text' => 'Get Connected Now',
                                    'link' => 'https://ucnsmart.com/?connect=1&source=qr',
                                    'is_external' => true,
                                    'image' => asset('asset/images/hero/hero_banner_5.webp'),
                                ],
                            ];
                        @endphp

                        @foreach ($heroSlides as $idx => $slide)
                            <div class="hero-slide-item {{ $idx === 0 ? 'is-active' : '' }}" data-slide-index="{{ $idx }}">
                                <a href="{{ $slide['link'] }}" class="slide-card-link" {{ $slide['is_external'] ? 'target="_blank" rel="noopener noreferrer"' : '' }} title="{{ $slide['title'] ?: 'UCN Smart IPTV' }}">
                                    <div class="slide-banner-wrapper">
                                        <img src="{{ $slide['image'] }}" alt="{{ $slide['title'] ?: 'UCN Smart IPTV' }}" class="slide-banner-img" loading="{{ $idx === 0 ? 'eager' : 'lazy' }}">
                                        @if (!empty($slide['title']))
                                            <div class="slide-gradient-overlay"></div>
                                        @endif
                                        <div class="slide-content-overlay {{ empty($slide['title']) ? 'slide-btn-only-overlay' : '' }}">
                                            @if (!empty($slide['badge_text']))
                                                <span class="slide-badge-pill">
                                                    <i class="{{ $slide['badge_icon'] }}"></i> {{ $slide['badge_text'] }}
                                                </span>
                                            @endif
                                            @if (!empty($slide['title']))
                                                <h3 class="slide-heading">{{ $slide['title'] }}</h3>
                                            @endif
                                            @if (!empty($slide['desc']))
                                                <p class="slide-desc">{{ $slide['desc'] }}</p>
                                            @endif
                                            <div class="slide-footer-row">
                                                @if (!empty($slide['meta']))
                                                    <span class="slide-pricing-tag"><i class="fa-solid fa-circle-check"></i> {{ $slide['meta'] }}</span>
                                                @endif
                                                <span class="slide-action-btn">
                                                    {{ $slide['btn_text'] }} <i class="fa-solid fa-arrow-right"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <!-- Navigation Arrow Buttons -->
                    <button type="button" class="hero-carousel-nav-btn prev-btn" id="heroCarouselPrev" aria-label="Previous Slide">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button type="button" class="hero-carousel-nav-btn next-btn" id="heroCarouselNext" aria-label="Next Slide">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>

                <!-- Carousel Indicators -->
                <div class="hero-carousel-indicators" id="heroCarouselIndicators"></div>
            </div>

            <!-- Bottom Value Strip & Device Compatibility (Light Theme) -->
            <div class="container hero-bottom-strip-container">
                <div class="hero-value-props-bar">
                    <div class="value-prop-item prop-orange">
                        <div class="value-prop-header">
                            <div class="value-icon bg-orange-soft text-orange">
                                <i class="fa-solid fa-tv"></i>
                            </div>
                            <span class="value-mini-badge badge-orange">Zero Hardware</span>
                        </div>
                        <div class="value-info">
                            <strong>100% Boxless</strong>
                            <span>Direct Smart TV App</span>
                        </div>
                    </div>
                    <div class="value-prop-divider"></div>
                    <div class="value-prop-item prop-blue">
                        <div class="value-prop-header">
                            <div class="value-icon bg-blue-soft text-blue">
                                <i class="fa-solid fa-satellite-dish"></i>
                            </div>
                            <span class="value-mini-badge badge-blue">Live & 4K</span>
                        </div>
                        <div class="value-info">
                            <strong>400+ Channels</strong>
                            <span>Live Satellite HD & Catch-up</span>
                        </div>
                    </div>
                    <div class="value-prop-divider"></div>
                    <div class="value-prop-item prop-orange">
                        <div class="value-prop-header">
                            <div class="value-icon bg-orange-soft text-orange">
                                <i class="fa-solid fa-film"></i>
                            </div>
                            <span class="value-mini-badge badge-orange">Included</span>
                        </div>
                        <div class="value-info">
                            <strong>25+ Top OTTs</strong>
                            <span>Hotstar, SonyLIV, ZEE5 & more</span>
                        </div>
                    </div>
                    <div class="value-prop-divider"></div>
                    <div class="value-prop-item prop-blue">
                        <div class="value-prop-header">
                            <div class="value-icon bg-blue-soft text-blue">
                                <i class="fa-solid fa-wifi"></i>
                            </div>
                            <span class="value-mini-badge badge-blue">Fast Wi-Fi</span>
                        </div>
                        <div class="value-info">
                            <strong>Fiber Bundled</strong>
                            <span>High-Speed from ₹636/mo</span>
                        </div>
                    </div>
                </div>

                <!-- Device Compatibility Strip -->
                <div class="hero-device-bar">
                    <span class="device-bar-label"><i class="fa-solid fa-circle-check text-orange"></i> Supported Devices:</span>
                    <div class="device-bar-chips">
                        <span class="device-chip"><i class="fa-brands fa-android text-green"></i> Android TV</span>
                        <span class="device-chip"><i class="fa-brands fa-google-play text-blue"></i> Google TV</span>
                        <span class="device-chip"><i class="fa-brands fa-apple text-dark"></i> Apple TV</span>
                        <span class="device-chip"><i class="fa-brands fa-amazon text-orange"></i> Fire TV Stick</span>
                        <span class="device-chip"><i class="fa-solid fa-tv text-blue"></i> LG webOS</span>
                        <span class="device-chip"><i class="fa-solid fa-display text-blue"></i> Samsung Tizen</span>
                        <span class="device-chip"><i class="fa-solid fa-mobile-screen text-orange"></i> Smart Mobile</span>
                    </div>
                </div>
            </div>
        </section>

            <div class="container-fluid overlap-container-wrapper">
                <div class="entertainment-overlap-card">
                    <div class="ent-text">
                        <span class="sub-heading-orange">ENDLESS ENTERTAINMENT</span>
                        <h2>The best of TV. <br><span class="highlight-text">All in one place.</span></h2>
                        <p>Enjoy 200+ digital TV channels, premium shows, live <br />sports, movies, and your favourite
                            local content<br /> on UCN IPTV & Digital TV.</p>
                        <a href="#" class="text-link-orange">Explore TV <i class="fa-solid fa-arrow-right"></i></a>
                        <img src="{{ asset('asset/images/home/elements/3.png') }}" alt="Element"
                            class="overlap-absolute-element">
                    </div>

                    <div class="entertainment-slider-wrapper">
                        <button class="slider-nav-btn prev-btn" onclick="scrollSlider(-1)" aria-label="Previous">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <div class="ent-cards-slider" id="entSlider">
                            <div class="mini-card"><img src="{{ asset('asset/images/home/EndlessEntertainment1.jpg') }}"
                                    alt="Card 1"></div>
                            <div class="mini-card"><img src="{{ asset('asset/images/home/EndlessEntertainment2.jpg') }}"
                                    alt="Card 2"></div>
                            <div class="mini-card"><img src="{{ asset('asset/images/home/EndlessEntertainment3.jpg') }}"
                                    alt="Card 3"></div>
                            <div class="mini-card"><img src="{{ asset('asset/images/home/EndlessEntertainment4.jpg') }}"
                                    alt="Card 4"></div>
                        </div>
                        <button class="slider-nav-btn next-btn" onclick="scrollSlider(1)" aria-label="Next">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="iptv-section">
            <div class="container-fluid">
                <img src="{{ asset('asset/images/home/elements/9.png') }}" alt="Shape Top Right"
                    class="iptv-elem-top-right">
                <div class="iptv-hero-box">
                    <div class="service-container">
                        <div class="iptv-text">
                            <span class="sub-heading-orange">UCN SMART IPTV</span>
                            <h2>Watch Live TV & OTT <br class="desktop-br">with <span class="highlight-brand">UCN Smart
                                    App.</span></h2>
                            <p>Turn your Smart TV, mobile phone, and tablet into an entertainment hub. Enjoy 400+ live
                                satellite TV channels, 25+ premium OTT apps, 7-day catch-up, and 100% boxless streaming.
                                Plans starting from ₹636/month.
                            </p>
                            <div class="iptv-action-buttons">
                                <a href="{{ route('iptv.plans') }}" class="btn-primary-gradient iptv-explore-btn">Explore
                                    IPTV Plans <i class="fa-solid fa-arrow-right"></i></a>
                                <a href="{{ route('iptv.live-tv-channels') }}" class="link-btn iptv-explore-btn"
                                    style="border-color: var(--primary-orange); color: var(--primary-orange);">View Channels
                                    <i class="fa-solid fa-angle-right"></i></a>
                            </div>
                            <div class="iptv-app-badges">
                                <span class="iptv-app-label">Download App:</span>
                                <div class="store-badges-group">
                                    <a href="https://play.google.com/store/apps" target="_blank" class="store-badge-card"
                                        title="Get UCN Smart on Google Play">
                                        <svg class="store-badge-svg" viewBox="0 0 512 512" width="20" height="20">
                                            <path fill="#00e5ff"
                                                d="M32.1 24.5c-3.1 3.4-4.9 8.6-4.9 15.2v432.6c0 6.6 1.8 11.8 4.9 15.2l1.3 1.3 242.3-242.3v-5.7L33.4 23.2l-1.3 1.3z" />
                                            <path fill="#ffeb3b"
                                                d="m353.9 308.8-78.2-78.2v-5.7l78.2-78.2 1.8 1 92.5 52.6c26.4 15 26.4 39.6 0 54.6l-92.5 52.9-1.8 1z" />
                                            <path fill="#ff3d00"
                                                d="M275.7 230.6 32.1 474.2c8.8 9.3 23.2 10.4 39.5 1.2l204.1-116.1-78.2-78.2-1.8-50.5z" />
                                            <path fill="#00e676"
                                                d="M275.7 224.9 71.6 108.8C55.3 99.6 40.9 100.7 32.1 110l243.6 243.6 78.2-78.2v-50.5z" />
                                        </svg>
                                        <div class="store-badge-text">
                                            <span class="store-badge-sub">GET IT ON</span>
                                            <span class="store-badge-main">Google Play</span>
                                        </div>
                                    </a>
                                    <div class="store-badge-card" title="Available for Android TV & Google TV">
                                        <svg class="store-badge-svg" viewBox="0 0 24 24" width="20" height="20"
                                            fill="#3DDC84">
                                            <path
                                                d="M17.523 15.3414c-.5511 0-.9993-.4486-.9993-.9997s.4482-.9993.9993-.9993c.551 0 .9993.4482.9993.9993.0001.5511-.4482.9997-.9993.9997m-11.046 0c-.5511 0-.9993-.4486-.9993-.9997s.4482-.9993.9993-.9993c.5511 0 .9993.4482.9993.9993 0 .5511-.4482.9997-.9993.9997m11.4045-6.02l1.9973-3.4592a.416.416 0 00-.1521-.5676.416.416 0 00-.5676.1521l-2.0223 3.503C15.5902 8.4116 13.8533 8.125 12 8.125s-3.5902.2866-5.1368.8247L4.8409 5.4467a.4161.4161 0 00-.5677-.1521.4157.4157 0 00-.1521.5676l1.9973 3.4592C2.6889 11.1867.3432 14.6589 0 18.761h24c-.3432-4.1021-2.6889-7.5743-6.1185-9.4396" />
                                        </svg>
                                        <div class="store-badge-text">
                                            <span class="store-badge-sub">AVAILABLE FOR</span>
                                            <span class="store-badge-main">Android TV</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iptv-img-wrapper">
                            <a href="{{ url('/') }}" class="iptv-img-link">
                                <picture>
                                    <source media="(max-width: 991px)" srcset="{{ asset('asset/images/home/IPTVSection-mobile.webp') }}">
                                    <img src="{{ asset('asset/images/home/IPTVSection.png') }}" alt="UCN Smart IPTV"
                                        class="iptv-main-img">
                                </picture>
                            </a>
                        </div>
                    </div>

                    <div class="iptv-features-container">
                        <div class="iptv-features-grid">
                            <div class="iptv-feat">
                                <div class="touch-icon icon-pink"><i class="fa-solid fa-tv"></i></div>
                                <div class="feat-text">
                                    <strong>400+ TV Channels</strong>
                                    <span>Live HD & 4K Satellite</span>
                                </div>
                            </div>
                            <div class="iptv-feat">
                                <div class="touch-icon icon-blue"><i class="fa-solid fa-film"></i></div>
                                <div class="feat-text">
                                    <strong>25+ OTT Apps</strong>
                                    <span>Hotstar, Sony LIV & ZEE5</span>
                                </div>
                            </div>
                            <div class="iptv-feat">
                                <div class="touch-icon icon-orange"><i class="fa-solid fa-mobile-screen-button"></i></div>
                                <div class="feat-text">
                                    <strong>100% Boxless TV</strong>
                                    <span>Zero Set-Top Box needed</span>
                                </div>
                            </div>
                            <div class="iptv-feat">
                                <div class="touch-icon icon-blue"><i class="fa-solid fa-cloud-arrow-down"></i></div>
                                <div class="feat-text">
                                    <strong>7-Day Catch-Up</strong>
                                    <span>Rewind and watch anytime</span>
                                </div>
                            </div>
                            <div class="iptv-feat">
                                <div class="touch-icon icon-green"><i class="fa-solid fa-shield-halved"></i></div>
                                <div class="feat-text">
                                    <strong>Multi-Screen</strong>
                                    <span>Watch on TV & mobile</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="iptv-sub-banners">
                    <div class="sub-banner-card premium-ent-card">
                        <div class="sub-banner-image-left">
                            <img src="{{ asset('asset/images/home/PremiumEntertainmentOfIPTV.png') }}"
                                alt="Premium Entertainment">
                        </div>
                        <div class="sub-banner-content-right">
                            <h3 class="premium-title">Premium Entertainment</h3>
                            <p class="sports-desc">Enjoy the latest blockbusters, exclusive series, kids shows, and regional
                                entertainment in 4K clarity.</p>
                            <div class="sub-badges">
                                <span><i class="fa-solid fa-film premium-badge-icon"></i> Movies</span>
                                <span><i class="fa-solid fa-play premium-badge-icon"></i> Web Series</span>
                                <span><i class="fa-solid fa-child premium-badge-icon"></i> Kids</span>
                                <span><i class="fa-solid fa-heart premium-badge-icon"></i> Lifestyle</span>
                            </div>
                        </div>
                    </div>

                    <div class="sub-banner-card sports-card">
                        <div class="sports-content-area">
                            <h3 class="sports-title">Live Sports, Every Moment</h3>
                            <p class="sports-desc">Stream live Cricket, Football, Tennis and major sporting tournaments in
                                HD clarity with zero lag on UCN Smart.</p>
                            <div class="sub-badges">
                                <span><i class="fa-solid fa-baseball sports-badge-icon"></i> Cricket</span>
                                <span><i class="fa-solid fa-futbol sports-badge-icon"></i> Football</span>
                                <span><i class="fa-solid fa-basketball sports-badge-icon"></i> Tennis</span>
                                <span><i class="fa-solid fa-ellipsis sports-badge-icon"></i> More</span>
                            </div>
                        </div>
                        <div class="sports-image-area">
                            <img src="{{ asset('asset/images/home/Sportsimg.png') }}" alt="Live Sports">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- UCN Smart IPTV Subscription Plans Section (Horizontal Cards) -->
        <section class="home-iptv-plans-section" id="iptv-plans">
            <div class="container-fluid home-iptv-plans-container">
                <div class="home-plans-header">
                    <span class="sub-heading-orange">UCN SMART IPTV PLANS</span>
                    <h2>Popular Smart TV & IPTV <br><span class="highlight-brand">Subscription Plans.</span></h2>
                    <p>
                        Superfast fiber broadband bundled with 400+ Live Satellite TV Channels and up to 25+ Premium OTT apps directly on your Smart TV.
                    </p>
                </div>

                <div class="home-horizontal-plans-wrapper">

                    <!-- PLAN 1: 50 Mbps Horizontal Card -->
                    <a href="https://ucnsmart.com" target="_blank" rel="noopener noreferrer" class="home-horizontal-plan-card" id="home-card-tier-50">
                        <div class="h-card-badge-wrap">
                            <span class="tier-badge badge-base">BASE PLAN</span>
                        </div>

                        <!-- Col 1: Pricing & Speed -->
                        <div class="h-card-col-pricing">
                            <div class="h-tier-speed-pill">
                                <i class="fa-solid fa-gauge-high"></i>
                                <span>50 Mbps</span>
                            </div>
                            <div class="h-tier-price-box">
                                <span class="h-tier-curr">₹</span>
                                <span class="h-tier-val">636</span>
                                <span class="h-tier-cycle">/-month</span>
                            </div>
                            <div class="h-price-tax-note">+ GST Applicable</div>
                            <div class="h-fiber-type-pill">
                                <i class="fa-solid fa-bolt"></i> Unlimited High-Speed Fiber
                            </div>
                        </div>

                        <!-- Col 2: Content & Key Highlights -->
                        <div class="h-card-col-content">
                            <div class="h-card-title-group">
                                <h3 class="h-card-title">50 Mbps Wi-Fi + 400+ Live Satellite Channels</h3>
                                <p class="h-card-desc">High-speed unlimited fiber broadband paired with 400+ live satellite TV channels for complete family entertainment.</p>
                            </div>

                            <!-- Inclusions Grid (Only Limited & Important Features) -->
                            <div class="h-inclusions-grid">
                                <div class="h-inc-item">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span><strong>400+</strong> Live Channels in HD</span>
                                </div>
                                <div class="h-inc-item">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span><strong>100% Boxless</strong> Smart TV App</span>
                                </div>
                                <div class="h-inc-item">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span><strong>Free</strong> Dual-Band Wi-Fi Router</span>
                                </div>
                                <div class="h-inc-item">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span><strong>25+ OTT Apps</strong> Add-on Available</span>
                                </div>
                            </div>

                            <!-- Clean OTT Showcase Bar -->
                            <div class="h-ott-simple-bar">
                                <div class="plan-ott-circles-stack active-otts">
                                    <div class="ott-circle-avatar" title="Netflix">
                                        <img src="{{ asset('asset/images/iptv/otts/netflix.png') }}" alt="Netflix" loading="lazy">
                                    </div>
                                    <div class="ott-circle-avatar" title="JioHotstar">
                                        <img src="{{ asset('asset/images/iptv/otts/jiohotstar.png') }}" alt="JioHotstar" loading="lazy">
                                    </div>
                                    <div class="ott-circle-avatar" title="ZEE5">
                                        <img src="{{ asset('asset/images/iptv/otts/z5.webp') }}" alt="ZEE5" loading="lazy">
                                    </div>
                                    <div class="ott-circle-avatar" title="Sony LIV">
                                        <img src="{{ asset('asset/images/iptv/otts/sonylive.webp') }}" alt="Sony LIV" loading="lazy">
                                    </div>
                                    <div class="ott-circle-avatar plus-circle" title="25+ OTT Apps">
                                        <span>25+</span>
                                    </div>
                                </div>
                                <span class="h-ott-simple-label">Supports 25+ OTT Apps on UCN Smart</span>
                            </div>
                        </div>

                        <!-- Col 3: Actions -->
                        <div class="h-card-col-actions">
                            <div class="h-tier-cta-btn">
                                <span>Get Connection</span>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>

                            <span class="h-redirect-hint">Redirects to <strong>ucnsmart.com</strong></span>

                            <div class="h-trust-features">
                                <span><i class="fa-solid fa-shield-check"></i> Zero Box Deposit</span>
                                <span><i class="fa-solid fa-bolt"></i> Instant Setup</span>
                            </div>
                        </div>
                    </a>

                    <!-- PLAN 2: 100 Mbps Horizontal Card (Featured Popular) -->
                    <a href="https://ucnsmart.com" target="_blank" rel="noopener noreferrer" class="home-horizontal-plan-card popular-card" id="home-card-tier-100">
                        <div class="h-card-badge-wrap">
                            <span class="tier-badge badge-popular">
                                <i class="fa-solid fa-star me-1"></i> MOST POPULAR • BEST VALUE
                            </span>
                        </div>

                        <!-- Col 1: Pricing & Speed -->
                        <div class="h-card-col-pricing">
                            <div class="h-tier-speed-pill pill-popular">
                                <i class="fa-solid fa-gauge-high"></i>
                                <span>100 Mbps</span>
                            </div>
                            <div class="h-tier-price-box">
                                <span class="h-tier-curr">₹</span>
                                <span class="h-tier-val">932</span>
                                <span class="h-tier-cycle">/-month</span>
                            </div>
                            <div class="h-price-tax-note">All OTTs & Channels Included (+ GST)</div>
                            <div class="h-fiber-type-pill pill-popular-accent">
                                <i class="fa-solid fa-tv"></i> 4K Ultra HD Fiber Stream
                            </div>
                        </div>

                        <!-- Col 2: Content & Key Highlights -->
                        <div class="h-card-col-content">
                            <div class="h-card-title-group">
                                <h3 class="h-card-title">100 Mbps Wi-Fi + 400+ Live Channels + 25+ OTT Apps</h3>
                                <p class="h-card-desc">Ultra-fast fiber designed for bufferless 4K streaming, multi-device homes & complete OTT binge-watching.</p>
                            </div>

                            <!-- Inclusions Grid (Only Limited & Important Features) -->
                            <div class="h-inclusions-grid">
                                <div class="h-inc-item">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span><strong>400+</strong> Live Channels in HD</span>
                                </div>
                                <div class="h-inc-item">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span><strong>25+ OTT Apps</strong> Included (Hotstar, ZEE5)</span>
                                </div>
                                <div class="h-inc-item">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span><strong>4K Ultra HD</strong> Multi-Screen Streaming</span>
                                </div>
                                <div class="h-inc-item">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span><strong>Free</strong> Dual-Band Wi-Fi Router</span>
                                </div>
                            </div>

                            <!-- Clean OTT Showcase Bar -->
                            <div class="h-ott-simple-bar">
                                <div class="plan-ott-circles-stack active-otts">
                                    <div class="ott-circle-avatar" title="Netflix">
                                        <img src="{{ asset('asset/images/iptv/otts/netflix.png') }}" alt="Netflix" loading="lazy">
                                    </div>
                                    <div class="ott-circle-avatar" title="JioHotstar">
                                        <img src="{{ asset('asset/images/iptv/otts/jiohotstar.png') }}" alt="JioHotstar" loading="lazy">
                                    </div>
                                    <div class="ott-circle-avatar" title="ZEE5">
                                        <img src="{{ asset('asset/images/iptv/otts/z5.webp') }}" alt="ZEE5" loading="lazy">
                                    </div>
                                    <div class="ott-circle-avatar" title="Sony LIV">
                                        <img src="{{ asset('asset/images/iptv/otts/sonylive.webp') }}" alt="Sony LIV" loading="lazy">
                                    </div>
                                    <div class="ott-circle-avatar plus-circle" title="25+ OTT Apps">
                                        <span>25+</span>
                                    </div>
                                </div>
                                <span class="h-ott-simple-label">Includes Netflix, Hotstar, ZEE5, Sony LIV & 25+ Apps</span>
                            </div>
                        </div>

                        <!-- Col 3: Actions -->
                        <div class="h-card-col-actions">
                            <div class="h-tier-cta-btn btn-bundle-active">
                                <span>Get Connection</span>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>

                            <span class="h-redirect-hint">Redirects to <strong>ucnsmart.com</strong></span>

                            <div class="h-trust-features">
                                <span><i class="fa-solid fa-shield-check"></i> Zero Box Deposit</span>
                                <span><i class="fa-solid fa-bolt"></i> Instant Setup</span>
                            </div>
                        </div>
                    </a>

                </div>

                <!-- Footer Quick Banner -->
                <div class="home-iptv-footer-banner">
                    <div class="h-footer-banner-content">
                        <div class="h-footer-badge"><i class="fa-solid fa-tv"></i> 100% BOXLESS ENTERTAINMENT</div>
                        <h4>Stream 400+ Live Satellite Channels & 25+ OTTs with UCN Smart</h4>
                        <p>Enjoy hassle-free entertainment directly on your Smart TV with zero set-top box hardware required.</p>
                    </div>
                    <div class="h-footer-banner-actions">
                        <a href="https://ucnsmart.com" target="_blank" rel="noopener noreferrer" class="btn-primary-orange-pill">
                            Visit ucnsmart.com <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <section class="broadband-section">
            <img src="{{ asset('asset/images/home/elements/7.png') }}" alt="Shape Right Wave"
                class="service-elem-right-wave">

            <div class="container-fluid broadband-container">
                <div class="services-header">
                    <span class="sub-heading-orange">BROADBAND</span>
                    <div class="service-container broadband-service-flex">
                        <div class="broadband-text-content">
                            <h2>Blazing-fast broadband <br>for <span class="highlight-brand">every home & business.</span>
                            </h2>
                            <p>Experience ultra-fast speeds, unlimited data and <br>unmatched reliability with UCN Fiber
                                Broadband.</p>

                            <div class="broadband-features-row">
                                <div class="b-feature"><i class="fa-solid fa-gauge-high"></i> Ultra-Fast Speed <span>Up to
                                        300 Mbps</span></div>
                                <div class="b-feature"><i class="fa-solid fa-infinity"></i> Unlimited Data <span>No limit.
                                        No worries.</span></div>
                                <div class="b-feature"><i class="fa-solid fa-shield-halved"></i> 99.9% Uptime <span>Always
                                        Reliable</span></div>
                            </div>

                            <a href="#" class="btn-primary-gradient broadband-avail-btn">Check Availability <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>

                        <div class="broadband-graphic-area">
                            <div class="broadband-header-imgs1">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('asset/images/home/wifi1.png') }}" alt="Wifi">
                                </a>
                            </div>
                            <div class="broadband-header-imgs2">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('asset/images/home/BroadBandImage.png') }}" alt="Broadband">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="plans-grid">
                    <img src="{{ asset('asset/images/home/elements/6.png') }}" alt="Shape Right Wave"
                        class="broadband-elem-right-wave">

                    <!-- 1st Index: UCN Smart IPTV Plan -->
                    <div class="plan-card iptv-featured-card">
                        <span class="gov-blinking-new"><span class="blink-text">NEW</span></span>
                        <span class="plan-iptv-badge">UCN SMART IPTV</span>
                        <h3><span class="text-orange">50 Mbps</span></h3>
                        <p class="plan-desc">400+ Satellite Channels & 25+ OTT Apps included.</p>
                        <div class="plan-card-footer">
                            <div class="plan-price"><span class="price-prefix">Starting at</span>₹636<span>/-month</span>
                            </div>
                            <a href="http://ucnsmartv2.iceico.co.in/#plans" target="_blank" rel="noopener noreferrer"
                                class="plan-arrow-btn orange-btn" title="View UCN Smart IPTV Plans"><i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- 2nd: 100 Mbps (Most Popular) -->
                    <div class="plan-card popular-card">
                        <span class="plan-badge-popular">MOST POPULAR</span>
                        <h3><span class="text-orange">100 Mbps</span></h3>
                        <p class="plan-desc">Ideal for multi-device homes, HD streaming & work from home.</p>
                        <div class="plan-card-footer">
                            <div class="plan-price">599<span>/-month</span></div>
                            <a href="{{ route('broadband.new_connection') }}" class="plan-arrow-btn orange-btn"><i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- 3rd: 200 Mbps -->
                    <div class="plan-card">
                        <h3><span class="text-blue">200 Mbps</span></h3>
                        <p class="plan-desc">Smooth 4K video streaming, online gaming and video calls.</p>
                        <div class="plan-card-footer">
                            <div class="plan-price">799<span>/-month</span></div>
                            <a href="{{ route('broadband.new_connection') }}" class="plan-arrow-btn blue-btn"><i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- 4th: 300 Mbps (Best Value) -->
                    <div class="plan-card featured-plan">
                        <span class="plan-badge-value">BEST VALUE</span>
                        <h3><span class="text-blue">300 Mbps</span></h3>
                        <p class="plan-desc">Blazing gigabit speed for heavy downloads and smart homes.</p>
                        <div class="plan-card-footer">
                            <div class="plan-price">999<span>/-month</span></div>
                            <a href="{{ route('broadband.new_connection') }}" class="plan-arrow-btn blue-btn active"><i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- 5th: 500 Mbps -->
                    <div class="plan-card">
                        <h3>500 Mbps</h3>
                        <p class="plan-desc">Ultra-fast priority bandwidth for power users and creators.</p>
                        <div class="plan-card-footer">
                            <div class="plan-price">1,299<span>/-month</span></div>
                            <a href="{{ route('broadband.new_connection') }}" class="plan-arrow-btn orange-btn"><i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="broadband-perks-row">
                    <div class="perk-item">
                        <div class="touch-icon bg-peach"><i class="fa-solid fa-wifi"></i></div>
                        <div>
                            <strong>Fiber Powered</strong>
                            <p>100% pure fiber network directly to your doorstep</p>
                        </div>
                    </div>
                    <div class="perk-item">
                        <div class="touch-icon bg-peach"><i class="fa-solid fa-download"></i></div>
                        <div>
                            <strong>Unlimited Downloads</strong>
                            <p>True unlimited high-speed data without data caps</p>
                        </div>
                    </div>
                    <div class="perk-item">
                        <div class="touch-icon bg-peach"><i class="fa-solid fa-shield"></i></div>
                        <div>
                            <strong>Secure Connection</strong>
                            <p>Built-in network protection and stable routing</p>
                        </div>
                    </div>
                    <div class="perk-item">
                        <div class="touch-icon bg-peach"><i class="fa-solid fa-headset"></i></div>
                        <div>
                            <strong>24/7 Support</strong>
                            <p>Local certified engineers ready to assist you anytime</p>
                        </div>
                    </div>
                </div>

                <div class="switch-banner broadband-switch-banner">
                    <div class="switch-img-box">
                        <img src="{{ asset('asset/images/home/elements/8.png') }}" alt="Switch" class="element2-img">
                    </div>
                    <div class="switch-left">
                        <h3>Switch to UCN Broadband</h3>
                        <p>Get free installation & Wi-Fi router on selected plans.</p>
                    </div>
                    <div class="switch-perks">
                        <div class="s-perk"><i class="fa-solid fa-wifi"></i> Free Wi-Fi Router <span>High-performance
                                dual-band router</span></div>
                        <div class="s-perk"><i class="fa-solid fa-screwdriver-wrench"></i> Free Installation <span>Quick &
                                professional installation</span></div>
                    </div>
                    <div>
                        <a href="#" class="btn-primary-gradient">Get Connected <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="news-section">
            <div class="container-fluid">
                <img src="{{ asset('asset/images/home/elements/14.png') }}" alt="Shape Top Right"
                    class="iptv-elem-top-right">
                <div class="service-container">
                    <div class="services-header news-header-wrapper">
                        <div>
                            <span class="sub-heading-orange">NEWS & LOCAL CONTENT</span>
                            <h2>Stay updated with <br><span class="highlight-brand">what matters most.</span></h2>
                            <p>Your trusted source for local news, stories,<br /> updates and events - all in one place.</p>
                            <a href="#" class="btn-primary-gradient">Explore all News <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="news-img">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('asset/images/home/elements/10.png') }}" alt="News and Local Content">
                        </a>
                    </div>
                </div>

                <div class="news-tabs-row">
                    <div class="news-tab active"><i class="fa-solid fa-newspaper" style="color: var(--primary-orange);"></i>
                        All News</div>
                    <div class="news-tab"><i class="fa-solid fa-location-dot" style="color: var(--color-blue);"></i> Local
                        News</div>
                    <div class="news-tab"><i class="fa-solid fa-bullhorn" style="color: #0088cc;"></i> Announcement</div>
                    <div class="news-tab"><i class="fa-solid fa-calendar" style="color: #008080;"></i> Event</div>
                    <div class="news-tab"><i class="fa-solid fa-microchip" style="color: var(--primary-orange);"></i>
                        Technology</div>
                    <div class="news-tab"><i class="fa-solid fa-tv" style="color: #8A2BE2;"></i> Entertainment</div>
                    <div class="news-tab"><i class="fa-solid fa-futbol" style="color: #0088cc;"></i> Sport</div>
                    <div class="news-tab"><i class="fa-solid fa-users" style="color: #008080;"></i> Community</div>
                </div>

                <div class="plans-grid news-cards-grid">
                    <div class="plan-card news-card-item">
                        <div class="news-card-img-wrap">
                            <img src="{{ asset('asset/images/home/latestNewsImage1.jpg') }}" alt="News 1">
                            <span class="news-badge-tag">LOCAL NEWS</span>
                        </div>
                        <h3>UCN Smart IPTV Network Launched Across Vidarbha</h3>
                        <div class="news-card-meta">
                            <span>May 25, 2024</span>
                            <span><i class="fa-regular fa-eye"></i> 2.4K</span>
                        </div>
                    </div>
                    <div class="plan-card news-card-item">
                        <div class="news-card-img-wrap">
                            <img src="{{ asset('asset/images/home/latestNewsImage2.jpg') }}" alt="News 2">
                            <span class="news-badge-tag">BROADBAND</span>
                        </div>
                        <h3>High-Speed Fiber Network Expanded to 50+ Localities</h3>
                        <div class="news-card-meta">
                            <span>May 21, 2024</span>
                            <span><i class="fa-regular fa-eye"></i> 1.8K</span>
                        </div>
                    </div>
                    <div class="plan-card news-card-item">
                        <div class="news-card-img-wrap">
                            <img src="{{ asset('asset/images/home/latestNewsImage3.jpg') }}" alt="News 3">
                            <span class="news-badge-tag">SPORTS</span>
                        </div>
                        <h3>Live Cricket Championship Streaming in 4K on UCN Smart</h3>
                        <div class="news-card-meta">
                            <span>May 18, 2024</span>
                            <span><i class="fa-regular fa-eye"></i> 3.1K</span>
                        </div>
                    </div>
                    <div class="plan-card news-card-item">
                        <div class="news-card-img-wrap">
                            <img src="{{ asset('asset/images/home/latestNewsImage4.jpg') }}" alt="News 4">
                            <span class="news-badge-tag">TECHNOLOGY</span>
                        </div>
                        <h3>Next-Gen Dual-Band Wi-Fi 6 Routers for Fast Streaming</h3>
                        <div class="news-card-meta">
                            <span>May 14, 2024</span>
                            <span><i class="fa-regular fa-eye"></i> 1.5K</span>
                        </div>
                    </div>
                    <div class="plan-card news-card-item">
                        <div class="news-card-img-wrap">
                            <img src="{{ asset('asset/images/home/latestNewsImage5.jpg') }}" alt="News 5">
                            <span class="news-badge-tag">COMMUNITY</span>
                        </div>
                        <h3>Nagpur Cultural Events & Festivals Live on UCN News</h3>
                        <div class="news-card-meta">
                            <span>May 09, 2024</span>
                            <span><i class="fa-regular fa-eye"></i> 2.9K</span>
                        </div>
                    </div>
                </div>

                <div class="enterprises-bottom-grid">
                    <div class="ent-choose-banner news-why-banner">
                        <div class="ent-choose-text">
                            <h3>Why Follow <br>UCN News?</h3>
                        </div>
                        <div class="ent-choose-stats">
                            <div class="stat-box">
                                <i class="fa-solid fa-shield-halved stat-icon"></i>
                                <strong>Trusted &</strong>
                                <span>Verified Updates</span>
                            </div>
                            <div class="stat-box">
                                <i class="fa-solid fa-newspaper stat-icon"></i>
                                <strong>Local Stories</strong>
                                <span>That matter</span>
                            </div>
                            <div class="stat-box">
                                <i class="fa-solid fa-users stat-icon"></i>
                                <strong>Community</strong>
                                <span>Focused</span>
                            </div>
                            <div class="stat-box">
                                <i class="fa-solid fa-rotate-right stat-icon"></i>
                                <strong>Always</strong>
                                <span>up to date</span>
                            </div>
                        </div>
                    </div>

                    <div class="switch-banner news-alert-banner">
                        <div class="news-alert-img-box">
                            <img src="{{ asset('asset/images/home/GetLocalUpdatesOnTheGo.png') }}"
                                alt="Get updates on the go">
                        </div>
                        <div class="switch-left">
                            <h3>Get local updates on the Go!</h3>
                            <p>Enable notifications and never miss an important update.</p>
                        </div>
                        <div>
                            <a href="#" class="btn-outline alert-btn"><i class="fa-regular fa-bell"></i> Enable Alerts</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="enterprises-section">
            <div class="container-fluid">
                <img src="{{ asset('asset/images/home/elements/11.png') }}" alt="Shape Right Wave"
                    class="enterprises-elem-right-wave">
                <div class="services-header">
                    <span class="sub-heading-orange">FOR BUSINESS</span>
                    <div class="service-container">
                        <div>
                            <h2>Power your business <br>with reliable connectivity <br><span
                                    class="highlight-text-orange">and smart solutions.</span></h2>
                            <p>Experience ultra-fast speeds, unlimited data and <br> unmatched reliability with UCN Fiber
                                Broadband.</p>
                        </div>
                        <div class="enterprises-img">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('asset/images/home/ForBusinessImage.png') }}" alt="For Business">
                            </a>
                        </div>
                    </div>

                    <div class="broadband-features-row">
                        <div class="b-feature"><i class="fa-solid fa-gauge-high"></i> High Performance <span>Fast, reliable
                                and built for growth</span></div>
                        <div class="b-feature"><i class="fa-solid fa-shield-halved"></i> Secure & Reliable <span>Advanced
                                security you can trust</span></div>
                        <div class="b-feature"><i class="fa-solid fa-headset"></i> 24x7 Business Support <span>Always here
                                when you need us</span></div>
                    </div>
                </div>

                <div class="plans-grid business-plans-grid">
                    <div class="plan-card">
                        <div class="service-icon-business bg-peach"><i class="fa-solid fa-wifi"></i></div>
                        <h3>Business Broadband</h3>
                        <p class="plan-desc">Ultra-fast, dedicated internet with high uptime for uninterrupted operations.
                        </p>
                        <a href="#" class="card-link">Explore Plans <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <div class="plan-card">
                        <div class="service-icon-business bg-peach"><i class="fa-solid fa-tv"></i></div>
                        <h3>Corporate IPTV</h3>
                        <p class="plan-desc">Custom TV solutions for offices, hotels, hospitals and enterprises.</p>
                        <a href="#" class="card-link">Explore Plans <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <div class="plan-card">
                        <div class="service-icon-business bg-peach"><i class="fa-solid fa-phone"></i></div>
                        <h3>IP Phone Solutions</h3>
                        <p class="plan-desc">Crystal clear voice communication for your business with advanced calling
                            features.</p>
                        <a href="#" class="card-link">Explore Plans <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <div class="plan-card">
                        <div class="service-icon-business bg-peach"><i class="fa-solid fa-video"></i></div>
                        <h3>Surveillance Solutions</h3>
                        <p class="plan-desc">Smart, scalable CCTV solutions to protect your business 24x7.</p>
                        <a href="#" class="card-link">Explore Plans <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <div class="plan-card">
                        <div class="service-icon-business bg-peach"><i class="fa-solid fa-server"></i></div>
                        <h3>Data Center Solutions</h3>
                        <p class="plan-desc">Secure, reliable and scalable hosting for your critical business data.</p>
                        <a href="#" class="card-link">Explore Plans <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="enterprises-bottom-grid">
                    <div class="ent-choose-banner">
                        <div class="ent-choose-text">
                            <h3>Why Businesses<br>Choose<span class="highlight-text-orange"> UCN</span></h3>
                        </div>
                        <div class="ent-choose-stats">
                            <div class="stat-box">
                                <i class="fa-solid fa-plane-up stat-icon"></i>
                                <strong>99.9%</strong>
                                <span>Uptime SLA</span>
                            </div>
                            <div class="stat-box">
                                <i class="fa-solid fa-gauge-simple-high stat-icon"></i>
                                <strong>1:1</strong>
                                <span>Symmetrical Speed</span>
                            </div>
                            <div class="stat-box">
                                <i class="fa-solid fa-shield stat-icon"></i>
                                <strong>DDoS</strong>
                                <span>Protected Fiber</span>
                            </div>
                            <div class="stat-box">
                                <i class="fa-solid fa-headset stat-icon"></i>
                                <strong>24x7</strong>
                                <span>Enterprise Support</span>
                            </div>
                        </div>
                    </div>

                    <div class="switch-banner consultation-banner">
                        <div class="consultation-img-box">
                            <img src="{{ asset('asset/images/home/ForBusiness(WhyBusinessChooseUCN).png') }}"
                                alt="Consultation">
                        </div>
                        <div class="switch-left">
                            <h3>Let's build the right solution for your business.</h3>
                            <p>Talk to our experts today.</p>
                            <a href="#" class="btn-primary-gradient consultation-btn">Request a consultation <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-section" id="services">
            <div class="container-fluid">
                <img src="{{ asset('asset/images/home/elements/5.png') }}" alt="Shape Top Right"
                    class="service-elem-top-right">
                <img src="{{ asset('asset/images/home/elements/4.png') }}" alt="Shape Right Wave"
                    class="service-elem-right-wave">
                <div class="services-header">
                    <span class="sub-heading-orange">OUR SERVICES</span>
                    <div class="service-container">
                        <div>
                            <h2>All the connections <br>you need, <span class="highlight-text-orange">in one place.</span>
                            </h2>
                            <p>Explore our range of digital services designed<br /> to keep you connected, entertained and
                                secure.</p>
                            <a href="#" class="btn-primary-gradient service-get-btn">Get Connected <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div>
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('asset/images/home/OurServicesImage.png') }}" alt="Our Services"
                                    class="service-main-img">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="services-grid">


                    <div class="service-card">
                        <div class="service-card-part">
                            <div class="service-icon bg-peach"><i class="fa-solid fa-tv"></i></div>
                            <div class="service-card-content">
                                <h3>UCN Smart IPTV</h3>
                                <p>Live TV channels, movies & catch-up on your smart devices.</p>
                            </div>
                        </div>
                        <ul class="service-features">
                            <li><i class="fa-solid fa-check"></i> 200+ Live Channels</li>
                            <li><i class="fa-solid fa-check"></i> 7-Days Catch-Up TV</li>
                            <li><i class="fa-solid fa-check"></i> Multi-Screen App Support</li>
                        </ul>
                        <a href="{{ route('iptv.plans') }}" class="card-link">Explore IPTV <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <div class="service-card">
                        <div class="service-card-part">
                            <div class="service-icon bg-peach"><i class="fa-solid fa-wifi"></i></div>
                            <div class="service-card-content">
                                <h3>Broadband</h3>
                                <p>Ultra-fast, reliable fiber internet for your home and business.</p>
                            </div>
                        </div>
                        <ul class="service-features">
                            <li><i class="fa-solid fa-check"></i> High Speed Internet</li>
                            <li><i class="fa-solid fa-check"></i> Unlimited Data Plans</li>
                            <li><i class="fa-solid fa-check"></i> 24/7 Technical Support</li>
                        </ul>
                        <a href="{{ route('broadband.plans') }}" class="card-link">Explore Broadband <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <div class="service-card">
                        <div class="service-card-part">
                            <div class="service-icon bg-peach"><i class="fa-solid fa-box"></i></div>
                            <div class="service-card-content">
                                <h3>Digital TV & STB</h3>
                                <p>Crystal-clear digital cable connection with Smart Android Box.</p>
                            </div>
                        </div>
                        <ul class="service-features">
                            <li><i class="fa-solid fa-check"></i> 4K Ultra HD Streaming</li>
                            <li><i class="fa-solid fa-check"></i> Google Voice Assistant Remote</li>
                            <li><i class="fa-solid fa-check"></i> 200+ Digital TV Channels</li>
                        </ul>
                        <a href="{{ route('iptv.set-top-box') }}" class="card-link">Explore Set-Top Box <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <div class="service-card">
                        <div class="service-card-part">
                            <div class="service-icon bg-peach"><i class="fa-solid fa-phone-volume"></i></div>
                            <div class="service-card-content">
                                <h3>IP Phone</h3>
                                <p>Seamless crystal clear voice communication for businesses.</p>
                            </div>
                        </div>
                        <ul class="service-features">
                            <li><i class="fa-solid fa-check"></i> HD Voice Quality</li>
                            <li><i class="fa-solid fa-check"></i> Multi-Line Support</li>
                            <li><i class="fa-solid fa-check"></i> Dedicated Intercom</li>
                        </ul>
                        <a href="{{ route('enterprises.registration') }}" class="card-link">Explore IP Phone <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <div class="service-card">
                        <div class="service-card-part">
                            <div class="service-icon bg-peach"><i class="fa-solid fa-shield-halved"></i></div>
                            <div class="service-card-content">
                                <h3>Surveillance</h3>
                                <p>Smart, scalable CCTV solutions to protect premises 24x7.</p>
                            </div>
                        </div>
                        <ul class="service-features">
                            <li><i class="fa-solid fa-check"></i> 24/7 HD Recording</li>
                            <li><i class="fa-solid fa-check"></i> Cloud & Local Storage</li>
                            <li><i class="fa-solid fa-check"></i> Remote Mobile View</li>
                        </ul>
                        <a href="{{ route('enterprises.registration') }}" class="card-link">Explore Surveillance <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <div class="service-card">
                        <div class="service-card-part">
                            <div class="service-icon bg-peach"><i class="fa-solid fa-newspaper"></i></div>
                            <div class="service-card-content">
                                <h3>News & Local Content</h3>
                                <p>Nagpur and Vidarbha's favorite local news and regional updates.</p>
                            </div>
                        </div>
                        <ul class="service-features">
                            <li><i class="fa-solid fa-check"></i> Real-time Local News</li>
                            <li><i class="fa-solid fa-check"></i> Cultural & Sports Coverage</li>
                            <li><i class="fa-solid fa-check"></i> 24/7 Live Broadcast</li>
                        </ul>
                        <a href="{{ url('/') }}" class="card-link">Explore News <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="expert-help-banner">
                    <div class="expert-left">
                        <span class="touch-icon bg-peach"><i class="fa-solid fa-headset"></i></span>
                        <div>
                            <strong>Need help choosing the right service?</strong>
                            <p>Our Experts are here to help you find the perfect solution.</p>
                        </div>
                    </div>
                    <div class="expert-right">
                        <a href="#" class="btn-outline link-btn">Talk to an Expert</a>
                        <a href="#" class="btn-primary-gradient">View All Plans <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="help-section">
            <div class="container-fluid">
                <div class="iptv-hero-box help-top-box">
                    <div class="help-top-flex">
                        <div class="iptv-text">
                            <span class="sub-heading-orange">HELP & SUPPORT</span>
                            <h2>We're here to <br><span class="highlight-brand">help you, always.</span></h2>
                            <p>Find answers, get support, and resolve issues quickly with our dedicated support team.</p>
                        </div>

                        <div class="help-banner-img-box">
                            <img src="{{ asset('asset/images/home/HelpAndSupport.png') }}" alt="Help and Support">
                        </div>

                        <div class="help-immediate-box">
                            <strong>Need Immediate Help?</strong>
                            <p>Our support team is available 24/7 to assist<br /> you anytime.</p>
                            <div class="help-contact-info">
                                <div class="help-contact-row">
                                    <i class="fa-solid fa-phone" style="color: var(--primary-orange);"></i> 1800 123 4567
                                    <span class="toll-free-text">(Toll-Free)</span>
                                </div>
                                <div class="help-contact-row">
                                    <i class="fa-solid fa-comments" style="color: var(--primary-orange);"></i> Live chat
                                    with us
                                    <i class="fa-solid fa-arrow-right help-arrow-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="iptv-features-container help-features-row">
                        <div class="help-features-grid">
                            <div class="iptv-feat">
                                <div class="touch-icon icon-pink"><i class="fa-solid fa-question"></i></div>
                                <div class="feat-text"><strong>Browse FAQs</strong><span>Find quick answers<br />
                                        to common questions.</span></div>
                            </div>
                            <div class="iptv-feat">
                                <div class="touch-icon icon-blue"><i class="fa-regular fa-file"></i></div>
                                <div class="feat-text"><strong>Track Your Request</strong><span>Check the status of
                                        your<br />
                                        existing support requests.</span></div>
                            </div>
                            <div class="iptv-feat">
                                <div class="touch-icon icon-orange"><i class="fa-solid fa-download"></i></div>
                                <div class="feat-text"><strong>Downloads</strong><span>Get user guides, manuals<br />
                                        and useful resources.</span>
                                </div>
                            </div>
                            <div class="iptv-feat">
                                <div class="touch-icon icon-blue"><i class="fa-solid fa-message"></i></div>
                                <div class="feat-text"><strong>Community Forum</strong><span>Connect with other<br />
                                        users and get help.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="enterprises-bottom-grid help-bottom-grid-layout">
                    <div class="sub-banner-card faq-card-wrapper" id="faqs">
                        <div class="faq-card-header">
                            <h3>Frequently Asked Questions</h3>
                            <a href="#faqs" class="view-all-faqs-link">View All FAQs <i class="fa-solid fa-arrow-right"></i></a>
                        </div>

                        <div class="faq-list">
                            <div class="faq-item" onclick="toggleFaq(this)">
                                <div class="faq-question">
                                    <span><i class="fa-solid fa-gauge-simple-high"></i> How can I check my internet
                                        connection
                                        speed?</span>
                                    <i class="fa-solid fa-chevron-down faq-arrow"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>You can check your speed by connecting to your Wi-Fi network and running an online
                                        speed test through trusted platforms, or directly via your UCN user portal
                                        dashboard.</p>
                                </div>
                            </div>

                            <div class="faq-item" onclick="toggleFaq(this)">
                                <div class="faq-question">
                                    <span><i class="fa-solid fa-wifi"></i> What should I do if my internet isn't
                                        working?</span>
                                    <i class="fa-solid fa-chevron-down faq-arrow"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>First, try restarting your Wi-Fi router and modem by unplugging them for 30 seconds.
                                        If the issue persists, check all cable connections or contact our 24/7 support team.
                                    </p>
                                </div>
                            </div>

                            <div class="faq-item" onclick="toggleFaq(this)">
                                <div class="faq-question">
                                    <span><i class="fa-solid fa-file-lines"></i> How do I pay my UCN bill online?</span>
                                    <i class="fa-solid fa-chevron-down faq-arrow"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Log in to your UCN account on our website or mobile app, go to the 'Billing &
                                        Payments' section, choose your preferred payment method (UPI, Credit/Debit Card, Net
                                        Banking), and complete the transaction securely.</p>
                                </div>
                            </div>

                            <div class="faq-item" onclick="toggleFaq(this)">
                                <div class="faq-question">
                                    <span><i class="fa-solid fa-rotate"></i> Can I upgrade or change my current plan?</span>
                                    <i class="fa-solid fa-chevron-down faq-arrow"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Yes, absolutely! You can easily upgrade your broadband or IPTV plan anytime by
                                        visiting the 'Plans & Upgrades' section in your account dashboard or by calling our
                                        customer support.</p>
                                </div>
                            </div>

                            <div class="faq-item" onclick="toggleFaq(this)">
                                <div class="faq-question">
                                    <span><i class="fa-solid fa-circle-user"></i> How can I update my account
                                        information?</span>
                                    <i class="fa-solid fa-chevron-down faq-arrow"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>To update your profile details like registered mobile number, email, or billing
                                        address, log into your portal, navigate to 'Account & Profile Settings', make the
                                        required changes, and save them.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="help-right-column">
                        <div class="sub-banner-card help-contact-card">
                            <h3>Still need help?</h3>
                            <p class="help-contact-desc">Our support experts are ready to assist you.</p>
                            <div class="help-contact-grid">
                                <div class="help-channel-box">
                                    <i class="fa-solid fa-phone channel-icon"></i>
                                    <span class="channel-title">Call Us</span>
                                    <span class="channel-sub">1800 123 4567</span>
                                </div>
                                <div class="help-channel-box">
                                    <i class="fa-solid fa-envelope channel-icon"></i>
                                    <span class="channel-title">Email Us</span>
                                    <span class="channel-sub">support@ucn</span>
                                </div>
                                <div class="help-channel-box">
                                    <i class="fa-solid fa-comments channel-icon"></i>
                                    <span class="channel-title">Live Chat</span>
                                    <span class="channel-sub">Available 24/7</span>
                                </div>
                            </div>
                        </div>

                        <div class="sub-banner-card quick-topics-card">
                            <div class="quick-topics-header">
                                <h4>Quick Help Topics</h4>
                                <a href="#" class="explore-topics-link">Explore All Topics <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="topics-tags-wrap">
                                <span class="topic-tag-pill" style="background: var(--bg-light-blue)">Billing &
                                    Payments</span>
                                <span class="topic-tag-pill" style="background: var(--bg-green)">Connection Issues</span>
                                <span class="topic-tag-pill" style="background: var(--bg-red)">Plans & Upgrades</span>
                                <span class="topic-tag-pill" style="background: var(--bg-orange)">Account & Profile</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="final-trust-bar">
                    <div>
                        <h4>Your Satisfaction is Our Priority</h4>
                        <p class="final-trust-desc">We are committed to providing the best support experience, every single
                            time.</p>
                    </div>
                    <div class="final-stats-row">
                        <div class="perk-item">
                            <div class="touch-icon bg-peach"><i class="fa-solid fa-headset"></i></div>
                            <div>
                                <strong>24/7 Support</strong>
                                <p>Support Available</p>
                            </div>
                        </div>
                        <div class="perk-item">
                            <div class="touch-icon bg-peach"><i class="fa-regular fa-smile"></i></div>
                            <div>
                                <strong>2L+</strong>
                                <p>Happy Customers</p>
                            </div>
                        </div>
                        <div class="perk-item">
                            <div class="touch-icon bg-peach"><i class="fa-solid fa-shield-halved"></i></div>
                            <div>
                                <strong>99.9%</strong>
                                <p>Issue Resolution</p>
                            </div>
                        </div>
                        <div class="perk-item">
                            <div class="touch-icon bg-peach"><i class="fa-regular fa-star"></i></div>
                            <div>
                                <strong>4.8/5</strong>
                                <p>Customer Rating</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

<script>
    function scrollSlider(direction) {
        const slider = document.getElementById('entSlider');
        const scrollAmount = 250;
        slider.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }

    function toggleFaq(element) {
        const items = document.querySelectorAll('.faq-item');
        items.forEach(item => {
            if (item !== element) {
                item.classList.remove('active');
            }
        });
        element.classList.toggle('active');
    }

    // UCN SMART IPTV 3-CARD PEEKING CAROUSEL (Infinite Loop, Touch, Autoplay)
    document.addEventListener("DOMContentLoaded", function () {
        const viewport = document.getElementById("heroCarouselViewport");
        const track = document.getElementById("heroCarouselTrack");
        const prevBtn = document.getElementById("heroCarouselPrev");
        const nextBtn = document.getElementById("heroCarouselNext");
        const indicatorsWrap = document.getElementById("heroCarouselIndicators");

        if (!viewport || !track) return;

        const originalSlides = Array.from(track.querySelectorAll(".hero-slide-item"));
        const slideCount = originalSlides.length;
        if (slideCount === 0) return;

        // Clone 2 slides before and 2 slides after for seamless infinite loop
        const clonePrefix = [
            originalSlides[slideCount - 2].cloneNode(true),
            originalSlides[slideCount - 1].cloneNode(true)
        ];
        const cloneSuffix = [
            originalSlides[0].cloneNode(true),
            originalSlides[1].cloneNode(true)
        ];

        clonePrefix.forEach(clone => {
            clone.classList.add("is-clone");
            track.insertBefore(clone, track.firstChild);
        });

        cloneSuffix.forEach(clone => {
            clone.classList.add("is-clone");
            track.appendChild(clone);
        });

        const allSlides = Array.from(track.querySelectorAll(".hero-slide-item"));
        let currentIndex = 2; // Starts at original slide 0 (offset by 2 clones)
        let isTransitioning = false;
        let autoPlayTimer = null;

        // Generate indicators for the original slides
        if (indicatorsWrap) {
            indicatorsWrap.innerHTML = "";
            for (let i = 0; i < slideCount; i++) {
                const dot = document.createElement("button");
                dot.type = "button";
                dot.className = "hero-indicator-dot" + (i === 0 ? " is-active" : "");
                dot.setAttribute("aria-label", "Go to slide " + (i + 1));
                dot.dataset.index = i;
                dot.addEventListener("click", function () {
                    if (isTransitioning) return;
                    stopAutoPlay();
                    goToSlide(i + 2);
                    startAutoPlay();
                });
                indicatorsWrap.appendChild(dot);
            }
        }
        const indicatorDots = indicatorsWrap ? Array.from(indicatorsWrap.querySelectorAll(".hero-indicator-dot")) : [];

        function getCardRatio() {
            const w = window.innerWidth;
            if (w <= 480) return 0.92;
            if (w <= 768) return 0.88;
            if (w <= 1024) return 0.80;
            if (w <= 1440) return 0.74;
            if (w <= 1700) return 0.70;
            return 0.66;
        }

        function updateCardSizes() {
            const containerWidth = viewport.clientWidth;
            const ratio = getCardRatio();
            const cardWidth = Math.round(containerWidth * ratio);

            allSlides.forEach(slide => {
                slide.style.width = cardWidth + "px";
            });

            positionTrack(false);
        }

        function positionTrack(withAnimation) {
            const containerWidth = viewport.clientWidth;
            const cardWidth = allSlides[0] ? allSlides[0].offsetWidth : Math.round(containerWidth * getCardRatio());
            const leftOffset = (containerWidth - cardWidth) / 2;
            const targetX = leftOffset - (currentIndex * cardWidth);

            if (withAnimation) {
                track.style.transition = "transform 0.55s cubic-bezier(0.22, 1, 0.36, 1)";
            } else {
                track.style.transition = "none";
            }
            track.style.transform = "translate3d(" + targetX + "px, 0, 0)";

            allSlides.forEach((slide, idx) => {
                if (idx === currentIndex) {
                    slide.classList.add("is-active");
                } else {
                    slide.classList.remove("is-active");
                }
            });

            // Update indicators & category tabs
            const realIdx = ((currentIndex - 2) % slideCount + slideCount) % slideCount;
            indicatorDots.forEach((dot, dIdx) => {
                if (dIdx === realIdx) {
                    dot.classList.add("is-active");
                } else {
                    dot.classList.remove("is-active");
                }
            });

            const catTabsWrap = document.getElementById("heroCategoryTabs");
            const catTabs = catTabsWrap ? Array.from(catTabsWrap.querySelectorAll(".hero-cat-tab")) : [];
            catTabs.forEach((tab, tIdx) => {
                if (tIdx === realIdx) {
                    tab.classList.add("is-active");
                    if (catTabsWrap && catTabsWrap.scrollWidth > catTabsWrap.clientWidth) {
                        const targetLeft = tab.offsetLeft - (catTabsWrap.clientWidth / 2) + (tab.clientWidth / 2);
                        catTabsWrap.scrollTo({ left: Math.max(0, targetLeft), behavior: "smooth" });
                    }
                } else {
                    tab.classList.remove("is-active");
                }
            });
        }

        // Attach category tab click events
        const catTabs = Array.from(document.querySelectorAll("#heroCategoryTabs .hero-cat-tab"));
        catTabs.forEach((tab, tIdx) => {
            tab.addEventListener("click", function () {
                if (isTransitioning) return;
                stopAutoPlay();
                goToSlide(tIdx + 2);
                startAutoPlay();
            });
        });

        function goToSlide(targetIdx) {
            if (isTransitioning) return;
            isTransitioning = true;
            currentIndex = targetIdx;
            positionTrack(true);
        }

        function nextSlide() {
            if (isTransitioning) return;
            goToSlide(currentIndex + 1);
        }

        function prevSlide() {
            if (isTransitioning) return;
            goToSlide(currentIndex - 1);
        }

        track.addEventListener("transitionend", function () {
            isTransitioning = false;

            // Infinite loop wrap
            if (currentIndex >= slideCount + 2) {
                currentIndex = 2;
                positionTrack(false);
            } else if (currentIndex < 2) {
                currentIndex = slideCount + 1;
                positionTrack(false);
            }
        });

        if (nextBtn) {
            nextBtn.addEventListener("click", function () {
                stopAutoPlay();
                nextSlide();
                startAutoPlay();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener("click", function () {
                stopAutoPlay();
                prevSlide();
                startAutoPlay();
            });
        }

        // Clicking side slides directly jumps to that slide
        allSlides.forEach((slide, idx) => {
            slide.addEventListener("click", function (e) {
                if (idx !== currentIndex) {
                    e.preventDefault();
                    stopAutoPlay();
                    goToSlide(idx);
                    startAutoPlay();
                }
            });
        });

        // Touch Swipe Handling for Mobile & Tablets
        let startX = 0;
        let currentX = 0;
        let isSwiping = false;

        viewport.addEventListener("touchstart", function (e) {
            if (isTransitioning) return;
            stopAutoPlay();
            startX = e.touches[0].clientX;
            currentX = startX;
            isSwiping = true;
        }, { passive: true });

        viewport.addEventListener("touchmove", function (e) {
            if (!isSwiping) return;
            currentX = e.touches[0].clientX;
        }, { passive: true });

        viewport.addEventListener("touchend", function () {
            if (!isSwiping) return;
            isSwiping = false;
            const diff = currentX - startX;
            if (Math.abs(diff) > 40) {
                if (diff < 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
            }
            startAutoPlay();
        });

        function startAutoPlay() {
            stopAutoPlay();
            autoPlayTimer = setInterval(nextSlide, 5000);
        }

        function stopAutoPlay() {
            if (autoPlayTimer) {
                clearInterval(autoPlayTimer);
                autoPlayTimer = null;
            }
        }

        viewport.addEventListener("mouseenter", stopAutoPlay);
        viewport.addEventListener("mouseleave", startAutoPlay);

        window.addEventListener("resize", function () {
            updateCardSizes();
        });

        // Initial layout configuration
        updateCardSizes();
        startAutoPlay();
    });
</script>

<style>
    /* ================================================================
       HOME UCN SMART IPTV PLANS SECTION (HORIZONTAL CARDS)
       ================================================================ */
    .home-iptv-plans-section {
        padding: 50px 0 60px;
        background: linear-gradient(180deg, #FFFFFF 0%, #F8FAFC 55%, #FFFFFF 100%);
        position: relative;
        z-index: 2;
        overflow: hidden;
    }

    .home-iptv-plans-container {
        max-width: 1680px;
        width: 100%;
        margin: 0 auto;
        padding: 0 clamp(16px, 2.5vw, 40px);
        box-sizing: border-box;
        position: relative;
        z-index: 2;
    }

    .home-plans-header {
        text-align: center;
        max-width: 780px;
        margin: 0 auto 42px auto;
    }

    .home-plans-header .sub-heading-orange {
        font-size: 15px;
        font-weight: 700;
        color: var(--primary-orange, #FD7001);
        letter-spacing: 1.2px;
        display: inline-block;
        margin-bottom: 8px;
        text-transform: uppercase;
    }

    .home-plans-header h2 {
        font-size: 38px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin-bottom: 14px;
        line-height: 1.25;
        text-wrap: balance;
    }

    .home-plans-header h2 .highlight-brand {
        background: linear-gradient(to right, var(--color-blue), var(--primary-orange));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
    }

    .home-plans-header p {
        font-size: 17px;
        color: var(--color-text-muted, #64748B);
        line-height: 1.6;
        margin: 0 auto;
        max-width: 650px;
    }

    /* Horizontal Plans Wrapper */
    .home-horizontal-plans-wrapper {
        display: flex;
        flex-direction: column;
        gap: 28px;
        max-width: 1260px;
        margin: 0 auto 45px auto;
    }

    /* Single Horizontal Plan Card (Clickable Anchor) */
    .home-horizontal-plan-card {
        background: #FFFFFF;
        border: 2px solid #E2E8F0;
        border-radius: 22px;
        padding: 28px 34px;
        position: relative;
        box-shadow: 0 4px 22px rgba(15, 23, 42, 0.04);
        display: grid;
        grid-template-columns: 240px 1fr 260px;
        gap: 28px;
        align-items: center;
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s ease, box-shadow 0.3s ease;
        box-sizing: border-box !important;
        width: 100%;
        text-decoration: none !important;
        color: inherit !important;
        cursor: pointer;
    }

    .home-horizontal-plan-card:hover {
        border-color: var(--primary-orange, #FD7001);
        transform: translateY(-4px);
        box-shadow: 0 14px 34px rgba(253, 112, 1, 0.12);
        color: inherit !important;
        text-decoration: none !important;
    }

    .home-horizontal-plan-card.popular-card {
        border-color: var(--primary-orange, #FD7001);
        background: #FFFFFF;
        box-shadow: 0 8px 30px rgba(253, 112, 1, 0.09);
    }

    .home-horizontal-plan-card:hover .h-tier-cta-btn:not(.btn-bundle-active) {
        background: var(--primary-orange, #FD7001);
        color: #FFFFFF !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(253, 112, 1, 0.3);
    }

    .home-horizontal-plan-card:hover .h-tier-cta-btn.btn-bundle-active {
        box-shadow: 0 8px 22px rgba(253, 112, 1, 0.42);
        transform: translateY(-2px);
    }

    /* Card Badge Top Right */
    .h-card-badge-wrap {
        position: absolute;
        top: -13px;
        right: 28px;
        z-index: 5;
    }

    .h-card-badge-wrap .tier-badge {
        font-size: 0.7875rem;
        font-weight: 800;
        letter-spacing: 0.6px;
        padding: 5px 15px;
        border-radius: 20px;
        text-transform: uppercase;
        display: inline-flex;
        align-items: center;
        white-space: nowrap;
        transition: all 0.25s ease;
    }

    .h-card-badge-wrap .tier-badge.badge-base {
        background: #F1F5F9;
        border: 1px solid #CBD5E1;
        color: #475569;
    }

    .h-card-badge-wrap .tier-badge.badge-popular {
        background: linear-gradient(135deg, var(--primary-orange, #FD7001), #FF851A);
        color: #FFFFFF;
        border: none;
        box-shadow: 0 3px 12px rgba(253, 112, 1, 0.35);
    }

    /* Column 1: Pricing & Speed */
    .h-card-col-pricing {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        border-right: 1px solid #F1F5F9;
        padding-right: 24px;
    }

    .h-tier-speed-pill {
        font-size: 0.925rem;
        font-weight: 700;
        color: var(--primary-orange, #FD7001);
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(253, 112, 1, 0.08);
        padding: 5px 14px;
        border-radius: 20px;
        border: 1px solid rgba(253, 112, 1, 0.25);
        margin-bottom: 10px;
    }

    .h-tier-speed-pill.pill-popular {
        background: linear-gradient(135deg, rgba(253, 112, 1, 0.12), rgba(255, 133, 26, 0.2));
        border-color: rgba(253, 112, 1, 0.4);
    }

    .h-tier-price-box {
        display: flex;
        align-items: baseline;
        line-height: 1;
        margin-bottom: 2px;
    }

    .h-tier-curr {
        font-size: 1.4rem;
        font-weight: 800;
        color: #0F172A;
        margin-right: 2px;
    }

    .h-tier-val {
        font-size: 2.5rem;
        font-weight: 900;
        color: #0F172A;
        letter-spacing: -0.5px;
    }

    .h-tier-cycle {
        font-size: 0.885rem;
        color: #64748B;
        margin-left: 3px;
        font-weight: 600;
    }

    .h-price-tax-note {
        font-size: 0.775rem;
        font-weight: 600;
        color: #94A3B8;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .h-fiber-type-pill {
        font-size: 0.8rem;
        font-weight: 700;
        color: #0284C7;
        background: #E0F2FE;
        padding: 4px 10px;
        border-radius: 6px;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }

    .h-fiber-type-pill.pill-popular-accent {
        color: #7C3AED;
        background: #F3E8FF;
    }

    /* Column 2: Content, Features & Highlights */
    .h-card-col-content {
        display: flex;
        flex-direction: column;
        gap: 11px;
        min-width: 0;
    }

    .h-card-title-group {
        margin-bottom: 2px;
    }

    .h-card-title {
        font-size: 1.25rem;
        font-weight: 800;
        color: #1E293B;
        margin: 0 0 4px 0;
        line-height: 1.3;
        transition: color 0.2s ease;
    }

    .home-horizontal-plan-card:hover .h-card-title {
        color: var(--primary-orange, #FD7001);
    }

    .h-card-desc {
        font-size: 0.9125rem;
        color: #64748B;
        line-height: 1.5;
        margin: 0;
    }

    /* Inclusions Grid */
    .h-inclusions-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 8px 16px;
        background: #F8FAFC;
        border: 1px solid #E2E8F0;
        border-radius: 12px;
        padding: 11px 16px;
    }

    .h-inc-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.885rem;
        color: #334155;
        font-weight: 500;
        line-height: 1.3;
    }

    .h-inc-item i {
        color: #10B981;
        font-size: 0.925rem;
        flex-shrink: 0;
    }

    .h-inc-item strong {
        color: #0F172A;
    }

    /* Streamlined Clean OTT Showcase Bar */
    .h-ott-simple-bar {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 8px 14px;
        background: #F8FAFC;
        border: 1px solid #E2E8F0;
        border-radius: 12px;
        box-sizing: border-box !important;
        width: 100%;
    }

    .plan-ott-circles-stack {
        display: flex;
        align-items: center;
        flex-shrink: 0;
    }

    .ott-circle-avatar {
        width: 29px;
        height: 29px;
        border-radius: 50%;
        background: #FFFFFF;
        border: 2px solid #E2E8F0;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: -7px;
        position: relative;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.08);
        transition: transform 0.2s ease;
    }

    .ott-circle-avatar:first-child {
        margin-left: 0;
    }

    .ott-circle-avatar:hover {
        transform: translateY(-2px) scale(1.15);
        z-index: 10;
    }

    .ott-circle-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .ott-circle-avatar.plus-circle {
        background: linear-gradient(135deg, var(--primary-orange, #FD7001), #FF851A);
        color: #FFFFFF;
        font-weight: 800;
        font-size: 0.685rem;
        border-color: #FFFFFF;
        z-index: 6;
    }

    .h-ott-simple-label {
        font-size: 0.835rem;
        font-weight: 600;
        color: #475569;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* Column 3: Actions */
    .h-card-col-actions {
        display: flex;
        flex-direction: column;
        align-items: stretch;
        justify-content: center;
        border-left: 1px solid #F1F5F9;
        padding-left: 24px;
        gap: 8px;
    }

    .h-tier-cta-btn {
        width: 100% !important;
        box-sizing: border-box !important;
        margin: 0 !important;
        padding: 13px 18px;
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--primary-orange, #FD7001) !important;
        background: rgba(253, 112, 1, 0.08);
        border: 1.5px solid var(--primary-orange, #FD7001);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        text-align: center;
    }

    .h-tier-cta-btn.btn-bundle-active {
        background: linear-gradient(135deg, var(--primary-orange, #FD7001), #FF851A);
        color: #FFFFFF !important;
        border-color: transparent;
        box-shadow: 0 4px 14px rgba(253, 112, 1, 0.28);
    }

    .h-redirect-hint {
        font-size: 0.775rem;
        color: #94A3B8;
        text-align: center;
        display: block;
    }

    .h-redirect-hint strong {
        color: var(--primary-orange, #FD7001);
    }

    .h-trust-features {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 8px;
        font-size: 0.775rem;
        color: #64748B;
        font-weight: 500;
        margin-top: 2px;
    }

    .h-trust-features i {
        color: #10B981;
    }

    /* Bottom Quick Banner */
    .home-iptv-footer-banner {
        background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%);
        border-radius: 18px;
        padding: 24px 32px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        color: #FFFFFF;
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.15);
    }

    .h-footer-badge {
        font-size: 0.75rem;
        font-weight: 800;
        letter-spacing: 1px;
        color: var(--primary-orange, #FD7001);
        text-transform: uppercase;
        margin-bottom: 6px;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .h-footer-banner-content h4 {
        font-size: 1.25rem;
        font-weight: 700;
        color: #FFFFFF;
        margin: 0 0 4px 0;
    }

    .h-footer-banner-content p {
        font-size: 0.885rem;
        color: #94A3B8;
        margin: 0;
    }

    .h-footer-banner-actions {
        display: flex;
        align-items: center;
        gap: 12px;
        flex-shrink: 0;
    }

    .btn-outline-dark-pill {
        padding: 10px 18px;
        border-radius: 30px;
        font-size: 0.875rem;
        font-weight: 700;
        color: #FFFFFF;
        border: 1.5px solid #475569;
        background: transparent;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.2s ease;
    }

    .btn-outline-dark-pill:hover {
        border-color: var(--primary-orange, #FD7001);
        color: var(--primary-orange, #FD7001);
    }

    .btn-primary-orange-pill {
        padding: 10px 20px;
        border-radius: 30px;
        font-size: 0.875rem;
        font-weight: 700;
        color: #FFFFFF;
        background: linear-gradient(135deg, var(--primary-orange, #FD7001), #FF851A);
        border: none;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 4px 15px rgba(253, 112, 1, 0.35);
        transition: all 0.2s ease;
    }

    .btn-primary-orange-pill:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(253, 112, 1, 0.45);
        color: #FFFFFF;
    }

    /* Responsive Media Queries */
    @media (max-width: 1080px) {
        .home-horizontal-plan-card {
            grid-template-columns: 210px 1fr 250px;
            gap: 20px;
            padding: 26px 24px;
        }

        .h-card-col-pricing {
            padding-right: 18px;
        }

        .h-card-col-actions {
            padding-left: 18px;
        }
    }

    @media (max-width: 991px) {
        .home-horizontal-plan-card {
            grid-template-columns: 1fr;
            gap: 20px;
            padding: 32px 24px 24px;
        }

        .h-card-col-pricing {
            border-right: none;
            padding-right: 0;
            border-bottom: 1px solid #F1F5F9;
            padding-bottom: 16px;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        .h-card-col-actions {
            border-left: none;
            padding-left: 0;
            border-top: 1px solid #F1F5F9;
            padding-top: 16px;
        }

        .home-iptv-footer-banner {
            flex-direction: column;
            align-items: flex-start;
            text-align: left;
            padding: 24px 20px;
        }

        .h-footer-banner-actions {
            width: 100%;
            flex-direction: column;
            gap: 10px;
        }

        .btn-outline-dark-pill,
        .btn-primary-orange-pill {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 600px) {
        .home-iptv-plans-container {
            padding: 0 16px;
        }

        .home-plans-header h2 {
            font-size: 26px;
        }

        .home-horizontal-plan-card {
            padding: 26px 16px 18px;
            border-radius: 18px;
        }

        .h-card-badge-wrap {
            right: 16px;
            top: -11px;
        }

        .h-card-badge-wrap .tier-badge {
            font-size: 0.7rem;
            padding: 4px 10px;
        }

        .h-inclusions-grid {
            grid-template-columns: 1fr;
            gap: 8px;
        }

        .h-ott-simple-bar {
            flex-direction: column;
            align-items: flex-start;
            gap: 8px;
        }

        .h-ott-simple-label {
            white-space: normal;
            font-size: 0.7875rem;
        }

        .h-trust-features {
            flex-direction: column;
            gap: 4px;
            align-items: center;
        }
    }

    /* ================================================================
       UCN SMART IPTV HERO CAROUSEL SECTION (LIGHT THEME - 3-CARD PEEK)
       ================================================================ */
    .visually-hidden {
        position: absolute !important;
        width: 1px !important;
        height: 1px !important;
        padding: 0 !important;
        margin: -1px !important;
        overflow: hidden !important;
        clip: rect(0, 0, 0, 0) !important;
        white-space: nowrap !important;
        border: 0 !important;
    }

    .hero-iptv-carousel-section {
        position: relative;
        padding: 145px 0 25px;
        background: linear-gradient(180deg, #FFFFFF 0%, #F8FAFC 50%, #EDF2F7 100%);
        overflow: hidden;
    }

    /* COMPACT TOP HEADER & QUICK TABS */
    .hero-compact-header-container {
        max-width: 1680px;
        width: 100%;
        margin: 0 auto;
        padding: 0 clamp(16px, 2.5vw, 40px);
        box-sizing: border-box;
        position: relative;
        z-index: 10;
        overflow: hidden;
    }

    .hero-header-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        flex-wrap: wrap;
        margin-bottom: 12px;
        width: 100%;
        box-sizing: border-box;
    }

    .hero-header-left {
        display: flex;
        align-items: center;
        flex-shrink: 0;
    }

    .hero-header-right {
        display: flex;
        align-items: center;
        flex-shrink: 1;
        min-width: 0;
        max-width: 100%;
    }

    .hero-smart-badge-wrap {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #FFFFFF;
        border: 1px solid rgba(253, 112, 1, 0.35);
        border-radius: 30px;
        padding: 5px 14px 5px 6px;
        box-shadow: 0 2px 10px rgba(253, 112, 1, 0.08);
        transition: all 0.25s ease;
    }

    .hero-smart-badge-wrap:hover {
        border-color: var(--primary-orange, #FD7001);
        box-shadow: 0 4px 16px rgba(253, 112, 1, 0.18);
        transform: translateY(-1px);
    }

    .gov-blinking-new-mini {
        background-color: #FF0000 !important;
        padding: 2px 7px;
        border-radius: 4px;
        line-height: 1.3;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .gov-blinking-new-mini .blink-text {
        font-size: 10px;
        font-weight: 800;
        letter-spacing: 0.5px;
        color: #FFFF00 !important;
        text-transform: uppercase;
        animation: govTextBlink 0.9s steps(1) infinite;
    }

    .hero-smart-pill {
        font-size: 13px;
        font-weight: 500;
        color: #1E293B;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        white-space: nowrap;
    }

    .hero-smart-pill .smart-pill-name {
        color: var(--primary-orange, #FD7001);
        font-weight: 800;
        letter-spacing: 0.3px;
    }

    .hero-smart-pill .smart-pill-divider {
        color: rgba(0, 0, 0, 0.3);
    }

    .hero-smart-pill .smart-pill-feature {
        color: #334155;
        font-weight: 600;
    }

    .hero-smart-pill .mobile-only {
        display: none;
    }

    .hero-smart-pill i {
        font-size: 11px;
        color: var(--primary-orange, #FD7001);
        transition: transform 0.2s ease;
    }

    .hero-smart-pill:hover i {
        transform: translate(2px, -2px);
    }

    /* QUICK FILTER CATEGORY TABS */
    .hero-category-tabs {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .hero-cat-tab {
        background: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 20px;
        padding: 6px 14px;
        font-size: 12.5px;
        font-weight: 600;
        color: #475569;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        cursor: pointer;
        transition: all 0.25s ease;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.03);
    }

    .hero-cat-tab i {
        font-size: 11.5px;
        color: var(--primary-orange, #FD7001);
        transition: color 0.2s ease;
    }

    .hero-cat-tab:hover {
        background: #FFF8F3;
        border-color: var(--primary-orange, #FD7001);
        color: var(--primary-orange, #FD7001);
        transform: translateY(-1px);
    }

    .hero-cat-tab.is-active {
        background: linear-gradient(135deg, var(--primary-orange, #FD7001) 0%, #FF5500 100%);
        border-color: var(--primary-orange, #FD7001);
        color: #FFFFFF;
        box-shadow: 0 4px 14px rgba(253, 112, 1, 0.35);
        transform: translateY(-1px);
    }

    .hero-cat-tab.is-active i {
        color: #FFFFFF;
    }

    /* CAROUSEL WRAPPER & VIEWPORT */
    .hero-carousel-outer {
        position: relative;
        width: 100%;
        max-width: 100%;
        margin: 5px auto 0;
        overflow: hidden;
        padding: 10px 0 15px;
        z-index: 3;
        box-sizing: border-box;
    }

    .hero-carousel-viewport {
        position: relative;
        width: 100%;
        max-width: 100%;
        margin: 0 auto;
        overflow: hidden;
        touch-action: pan-y;
        box-sizing: border-box;
    }

    .hero-carousel-track {
        display: flex;
        align-items: center;
        transition: transform 0.55s cubic-bezier(0.22, 1, 0.36, 1);
        will-change: transform;
        user-select: none;
    }

    /* INDIVIDUAL SLIDE CARD */
    .hero-slide-item {
        flex-shrink: 0;
        box-sizing: border-box;
        padding: 0 12px;
        transition: transform 0.5s cubic-bezier(0.25, 0.8, 0.25, 1), opacity 0.5s ease;
        transform: scale(0.92);
        opacity: 0.65;
        cursor: pointer;
    }

    .hero-slide-item.is-active {
        transform: scale(1);
        opacity: 1;
        cursor: default;
    }

    .slide-card-link {
        display: block;
        text-decoration: none;
        color: inherit;
        border-radius: 22px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 12px 35px rgba(15, 23, 42, 0.12);
        border: 2px solid #FFFFFF;
        background: #0F172A;
        transition: box-shadow 0.35s ease, transform 0.35s ease;
    }

    .hero-slide-item.is-active .slide-card-link {
        box-shadow: 0 20px 50px rgba(15, 23, 42, 0.2);
    }

    .hero-slide-item.is-active .slide-card-link:hover {
        box-shadow: 0 24px 60px rgba(15, 23, 42, 0.25);
    }

    .slide-banner-wrapper {
        position: relative;
        width: 100%;
        aspect-ratio: 16 / 9;
        height: auto;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #0B0E14;
    }

    .slide-banner-img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center center;
        display: block;
        transition: transform 0.4s ease;
    }

    .hero-slide-item.is-active:hover .slide-banner-img {
        transform: scale(1.015);
    }

    /* GRADIENT OVERLAY (Vignette for text readability) */
    .slide-gradient-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(15, 23, 42, 0.90) 0%, rgba(15, 23, 42, 0.65) 42%, rgba(15, 23, 42, 0.15) 75%, transparent 100%);
        pointer-events: none;
        z-index: 1;
    }

    /* SLIDE CONTENT OVERLAY */
    .slide-content-overlay {
        position: absolute;
        left: 44px;
        top: 50%;
        transform: translateY(-50%);
        z-index: 2;
        max-width: 520px;
        color: #FFFFFF;
        text-align: left;
    }

    .slide-content-overlay.slide-btn-only-overlay {
        top: auto;
        bottom: 24px;
        transform: none;
    }

    .slide-badge-pill {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        background: rgba(253, 112, 1, 0.25);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        border: 1px solid rgba(253, 112, 1, 0.6);
        color: #FFB37C;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.8px;
        text-transform: uppercase;
        padding: 5px 14px;
        border-radius: 20px;
        margin-bottom: 12px;
    }

    .slide-heading {
        font-size: 32px;
        font-weight: 700;
        line-height: 1.22;
        color: #FFFFFF;
        margin: 0 0 10px;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
    }

    .slide-desc {
        font-size: 15px;
        line-height: 1.55;
        color: #E2E8F0;
        margin: 0 0 18px;
        text-shadow: 0 1px 4px rgba(0, 0, 0, 0.3);
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .slide-footer-row {
        display: flex;
        align-items: center;
        gap: 18px;
        flex-wrap: wrap;
    }

    .slide-pricing-tag {
        font-size: 14px;
        font-weight: 700;
        color: #FED7AA;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .slide-pricing-tag i {
        color: #34D399;
    }

    .slide-action-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--primary-orange, #FD7001);
        color: #FFFFFF;
        font-size: 14px;
        font-weight: 700;
        padding: 9px 20px;
        border-radius: 25px;
        box-shadow: 0 4px 15px rgba(253, 112, 1, 0.4);
        transition: all 0.25s ease;
    }

    .hero-slide-item.is-active .slide-card-link:hover .slide-action-btn {
        background: #FF5500;
        transform: translateX(4px);
        box-shadow: 0 6px 18px rgba(253, 112, 1, 0.5);
    }

    /* NAVIGATION ARROW BUTTONS (Frosted white discs) */
    .hero-carousel-nav-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.94);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1.5px solid #E2E8F0;
        color: #0F172A;
        box-shadow: 0 6px 20px rgba(15, 23, 42, 0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        cursor: pointer;
        z-index: 10;
        transition: all 0.25s ease;
    }

    .hero-carousel-nav-btn.prev-btn {
        left: clamp(20px, 3vw, 48px);
    }

    .hero-carousel-nav-btn.next-btn {
        right: clamp(20px, 3vw, 48px);
    }

    .hero-carousel-nav-btn:hover {
        background: var(--primary-orange, #FD7001);
        border-color: var(--primary-orange, #FD7001);
        color: #FFFFFF;
        transform: translateY(-50%) scale(1.1);
        box-shadow: 0 8px 25px rgba(253, 112, 1, 0.4);
    }

    /* INDICATORS */
    .hero-carousel-indicators {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        margin-top: 16px;
        position: relative;
        z-index: 4;
    }

    .hero-indicator-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #CBD5E1;
        border: none;
        padding: 0;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .hero-indicator-dot:hover {
        background: #94A3B8;
    }

    .hero-indicator-dot.is-active {
        width: 32px;
        border-radius: 12px;
        background: var(--primary-orange, #FD7001);
        box-shadow: 0 2px 10px rgba(253, 112, 1, 0.4);
    }

    /* VALUE PROPS BAR & DEVICE BAR */
    .hero-bottom-strip-container {
        max-width: 1680px;
        width: 100%;
        margin: 20px auto 0;
        padding: 0 clamp(16px, 2.5vw, 40px);
        box-sizing: border-box;
        position: relative;
        z-index: 3;
    }

    .hero-value-props-bar {
        background: #FFFFFF;
        border: 1px solid rgba(226, 232, 240, 0.9);
        border-radius: 18px;
        padding: 16px 28px;
        box-shadow: 0 6px 24px rgba(15, 23, 42, 0.05);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
    }

    .value-prop-item {
        display: flex;
        align-items: center;
        gap: 12px;
        flex: 1;
    }

    .value-prop-header {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .value-mini-badge {
        display: none;
    }

    .value-prop-divider {
        width: 1px;
        height: 38px;
        background: #E2E8F0;
        flex-shrink: 0;
    }

    .value-icon {
        width: 42px;
        height: 42px;
        border-radius: 11px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
    }

    .bg-orange-soft {
        background: rgba(253, 112, 1, 0.12);
    }

    .bg-blue-soft {
        background: rgba(0, 114, 188, 0.12);
    }

    .value-info {
        display: flex;
        flex-direction: column;
        line-height: 1.3;
    }

    .value-info strong {
        font-size: 14.5px;
        color: #0F172A;
        font-weight: 700;
    }

    .value-info span {
        font-size: 12px;
        color: #64748B;
        font-weight: 500;
    }

    /* DEVICE COMPATIBILITY BAR */
    .hero-device-bar {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        margin-top: 18px;
        flex-wrap: wrap;
    }

    .device-bar-label {
        font-size: 13px;
        font-weight: 700;
        color: #475569;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .device-bar-chips {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .device-chip {
        font-size: 12px;
        font-weight: 600;
        color: #1E293B;
        background: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 20px;
        padding: 4px 12px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.02);
        transition: all 0.2s ease;
    }

    .device-chip:hover {
        border-color: var(--primary-orange, #FD7001);
        background: #FFF8F3;
        transform: translateY(-1px);
    }

    /* RESPONSIVE BREAKPOINTS */
    @media (max-width: 1200px) {
        .slide-content-overlay {
            left: 36px;
            max-width: 480px;
        }
        .slide-heading {
            font-size: 28px;
        }
    }

    @media (max-width: 991px) {
        .hero-iptv-carousel-section {
            padding: 125px 0 25px;
        }
        .hero-header-row {
            gap: 12px;
            margin-bottom: 10px;
        }
        .slide-content-overlay {
            left: 28px;
            max-width: 440px;
        }
        .slide-heading {
            font-size: 26px;
        }
        .slide-desc {
            font-size: 13.5px;
        }
        .hero-value-props-bar {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            padding: 18px 20px;
        }
        .value-prop-divider {
            display: none;
        }
    }

    @media (max-width: 768px) {
        .hero-iptv-carousel-section {
            padding: 30px 0 15px !important;
        }
        .hero-compact-header-container {
            padding: 0 14px !important;
        }
        .hero-header-row {
            flex-direction: column;
            align-items: stretch;
            gap: 8px;
            margin-bottom: 6px;
        }
        .hero-header-left {
            justify-content: center;
        }
        .hero-smart-badge-wrap {
            width: auto;
            max-width: 100%;
            justify-content: center;
            padding: 4px 12px 4px 6px;
        }
        .hero-smart-pill {
            font-size: 12px;
            gap: 5px;
        }
        .hero-smart-pill .desktop-only {
            display: none;
        }
        .hero-smart-pill .mobile-only {
            display: inline;
        }
        .hero-header-right {
            width: 100% !important;
            min-width: 0 !important;
            overflow: hidden !important;
        }
        .hero-category-tabs {
            display: flex !important;
            flex-wrap: nowrap !important;
            overflow-x: auto !important;
            white-space: nowrap !important;
            width: calc(100% + 28px) !important;
            margin: 0 -14px !important;
            padding: 2px 14px 6px 14px !important;
            -webkit-overflow-scrolling: touch !important;
            justify-content: flex-start !important;
            scrollbar-width: none !important;
            -ms-overflow-style: none !important;
            gap: 7px !important;
        }
        .hero-category-tabs::-webkit-scrollbar {
            display: none !important;
            width: 0 !important;
            height: 0 !important;
        }
        .hero-cat-tab {
            flex-shrink: 0 !important;
            white-space: nowrap !important;
            font-size: 11.5px !important;
            padding: 5.5px 12px !important;
            border-radius: 20px !important;
        }
        .hero-carousel-outer {
            padding: 4px 0 8px !important;
            margin: 0 auto !important;
        }
        .hero-slide-item {
            padding: 0 4px !important;
            transform: scale(0.96) !important;
        }
        .hero-slide-item.is-active {
            transform: scale(1) !important;
        }
        .slide-card-link {
            border-radius: 16px !important;
            border-width: 1.5px !important;
            box-shadow: 0 6px 20px rgba(15, 23, 42, 0.12) !important;
        }
        .slide-gradient-overlay {
            background: linear-gradient(0deg, rgba(15, 23, 42, 0.94) 0%, rgba(15, 23, 42, 0.65) 60%, rgba(15, 23, 42, 0.1) 100%) !important;
        }
        .slide-content-overlay {
            left: 12px !important;
            right: 12px !important;
            bottom: 10px !important;
            top: auto !important;
            transform: none !important;
            max-width: 100% !important;
        }
        .slide-content-overlay.slide-btn-only-overlay {
            bottom: 10px !important;
            left: 12px !important;
            right: auto !important;
        }
        .slide-heading {
            font-size: 16px !important;
            line-height: 1.25 !important;
            margin-bottom: 4px !important;
        }
        .slide-desc {
            font-size: 11px !important;
            line-height: 1.35 !important;
            margin-bottom: 6px !important;
            display: -webkit-box !important;
            -webkit-line-clamp: 1 !important;
            -webkit-box-orient: vertical !important;
            overflow: hidden !important;
        }
        .slide-badge-pill {
            font-size: 9.5px !important;
            padding: 2.5px 8px !important;
            margin-bottom: 4px !important;
            letter-spacing: 0.5px !important;
        }
        .slide-footer-row {
            gap: 8px !important;
        }
        .slide-action-btn {
            padding: 5px 12px !important;
            font-size: 11px !important;
            border-radius: 18px !important;
        }
        .slide-pricing-tag {
            font-size: 10.5px !important;
        }
        .hero-carousel-nav-btn {
            display: none !important;
        }
        .hero-carousel-indicators {
            margin-top: 10px !important;
            gap: 6px !important;
        }
        .hero-indicator-dot {
            width: 7px !important;
            height: 7px !important;
        }
        .hero-indicator-dot.is-active {
            width: 22px !important;
            border-radius: 6px !important;
        }
        .hero-bottom-strip-container {
            margin: 14px auto 0 !important;
            padding: 0 14px !important;
        }
        .hero-value-props-bar {
            display: grid !important;
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 10px !important;
            background: transparent !important;
            border: none !important;
            padding: 0 !important;
            box-shadow: none !important;
        }
        .value-prop-divider {
            display: none !important;
        }
        .value-prop-item {
            background: #FFFFFF !important;
            border: 1px solid rgba(226, 232, 240, 0.95) !important;
            border-radius: 16px !important;
            padding: 12px 11px !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: flex-start !important;
            gap: 8px !important;
            box-shadow: 0 4px 14px rgba(15, 23, 42, 0.04) !important;
            position: relative !important;
            overflow: hidden !important;
            transition: transform 0.2s ease, box-shadow 0.2s ease !important;
        }
        .value-prop-item:active {
            transform: scale(0.97) !important;
            box-shadow: 0 2px 8px rgba(15, 23, 42, 0.08) !important;
        }
        .value-prop-item.prop-orange {
            background: linear-gradient(180deg, #FFFFFF 0%, #FFFBF7 100%) !important;
            border-top: 2.5px solid var(--primary-orange, #FD7001) !important;
        }
        .value-prop-item.prop-blue {
            background: linear-gradient(180deg, #FFFFFF 0%, #F8FBFF 100%) !important;
            border-top: 2.5px solid #0072BC !important;
        }
        .value-prop-header {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            width: 100% !important;
        }
        .value-mini-badge {
            display: inline-flex !important;
            align-items: center !important;
            font-size: 9px !important;
            font-weight: 700 !important;
            text-transform: uppercase !important;
            letter-spacing: 0.4px !important;
            padding: 2.5px 7px !important;
            border-radius: 10px !important;
            white-space: nowrap !important;
        }
        .value-mini-badge.badge-orange {
            background: rgba(253, 112, 1, 0.12) !important;
            color: #E65100 !important;
            border: 1px solid rgba(253, 112, 1, 0.2) !important;
        }
        .value-mini-badge.badge-blue {
            background: rgba(0, 114, 188, 0.1) !important;
            color: #0072BC !important;
            border: 1px solid rgba(0, 114, 188, 0.2) !important;
        }
        .value-icon {
            width: 36px !important;
            height: 36px !important;
            font-size: 15px !important;
            border-radius: 10px !important;
        }
        .value-icon.bg-orange-soft {
            background: linear-gradient(135deg, rgba(253, 112, 1, 0.15) 0%, rgba(255, 138, 0, 0.24) 100%) !important;
            border: 1px solid rgba(253, 112, 1, 0.25) !important;
            box-shadow: 0 2px 8px rgba(253, 112, 1, 0.15) !important;
        }
        .value-icon.bg-blue-soft {
            background: linear-gradient(135deg, rgba(0, 114, 188, 0.12) 0%, rgba(0, 163, 255, 0.22) 100%) !important;
            border: 1px solid rgba(0, 114, 188, 0.22) !important;
            box-shadow: 0 2px 8px rgba(0, 114, 188, 0.15) !important;
        }
        .value-info {
            display: flex !important;
            flex-direction: column !important;
            width: 100% !important;
            gap: 2px !important;
        }
        .value-info strong {
            font-size: 13.5px !important;
            font-weight: 700 !important;
            color: #0F172A !important;
            line-height: 1.25 !important;
            white-space: nowrap !important;
            overflow: hidden !important;
            text-overflow: ellipsis !important;
        }
        .value-info span {
            font-size: 10.5px !important;
            color: #64748B !important;
            font-weight: 500 !important;
            line-height: 1.3 !important;
            display: -webkit-box !important;
            -webkit-line-clamp: 2 !important;
            -webkit-box-orient: vertical !important;
            overflow: hidden !important;
        }
        .hero-device-bar {
            padding: 8px 12px !important;
            margin-top: 12px !important;
            border-radius: 12px !important;
        }
    }

    @media (max-width: 480px) {
        .slide-heading {
            font-size: 14.5px !important;
            line-height: 1.2 !important;
        }
        .slide-desc {
            display: none !important;
        }
        .slide-pricing-tag {
            display: none !important;
        }
        .slide-action-btn {
            font-size: 10px !important;
            padding: 4.5px 10px !important;
        }
        .slide-badge-pill {
            font-size: 8.5px !important;
            padding: 2px 6px !important;
            margin-bottom: 2px !important;
        }
        .value-prop-item {
            padding: 10px 9px !important;
        }
        .value-icon {
            width: 32px !important;
            height: 32px !important;
            font-size: 13.5px !important;
        }
        .value-info strong {
            font-size: 12.5px !important;
        }
        .value-info span {
            font-size: 10px !important;
        }
        .value-mini-badge {
            font-size: 8.5px !important;
            padding: 2px 5.5px !important;
        }
    }

    body,
    html,
    * {
        font-family: 'Poppins', sans-serif !important;
    }

    .fa,
    .fas,
    .far,
    .fab,
    [class*="fa-"] {
        font-family: "Font Awesome 6 Free", "Font Awesome 6 Brands" !important;
    }

    .home-page-bg {
        background-repeat: repeat-y;
        background-position: center top;
        background-size: 100% auto;
        background-color: var(--color-white);
        width: 100%;
        max-width: 100%;
        overflow-x: hidden;
        margin-top: -140px;
        position: relative;
    }

    .hero-section,
    .services-section,
    .broadband-section,
    .iptv-section,
    .enterprises-section,
    .news-section,
    .help-section {
        background-color: transparent !important;
        position: relative;
    }

    .service-card,
    .plan-card,
    .expert-help-banner,
    .switch-banner,
    .ent-choose-banner {
        background-color: #FFFFFF !important;
    }

    .hero-section {
        position: relative;
        padding: 145px 0px 20px;
        background: transparent;
        overflow: visible;
    }

    .hero-elem-top-right {
        position: absolute;
        top: 210px;
        left: 0px;
        width: 120px;
        height: auto;
        z-index: 1;
        pointer-events: none;
    }

    .hero-elem-right-wave {
        position: absolute;
        top: 140px;
        right: 0;
        height: 550px;
        width: auto;
        z-index: 1;
        pointer-events: none;
    }

    .hero-container {
        max-width: 1680px;
        margin: 0 auto;
        width: 100%;
        padding: 0 clamp(16px, 2.5vw, 40px);
        box-sizing: border-box;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        z-index: 2;
    }

    .hero-content {
        max-width: 550px;
    }

    .hero-badge {
        display: inline-block;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 0.5px;
        margin-bottom: 15px;
        padding: 10px 16px;
        border-radius: 30px;
        background: #FFFFFF;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
        position: relative;
        z-index: 1;
        background: linear-gradient(to right, var(--primary-orange), var(--color-blue));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-badge::before {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 30px;
        padding: 1.5px;
        background: linear-gradient(to right, var(--color-light-blue), var(--primary-orange));
        -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        z-index: -1;
    }

    .hero-content h1 {
        font-size: 50px;
        font-weight: 600;
        line-height: 1.15;
        color: var(--color-text-main);
        margin: -5px 0px 10px;
    }

    .hero-content h1 span {
        background: var(--primary-orange);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-content p {
        font-size: 16px;
        color: var(--color-text-main);
        line-height: 1.6;
        margin: 5px 0px 10px;
    }

    .hero-buttons {
        display: flex;
        align-items: center;
        gap: 15px;
        flex-wrap: wrap;
        margin-bottom: 20px;
    }

    .hero-smart-badge-wrap {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 14px;
        background: #FFF8F3;
        border: 1px solid rgba(253, 112, 1, 0.35);
        border-radius: 30px;
        padding: 4px 14px 4px 6px;
        box-shadow: 0 2px 10px rgba(253, 112, 1, 0.08);
        transition: all 0.25s ease;
        margin-top: 10px;
    }

    .hero-smart-badge-wrap:hover {
        border-color: var(--primary-orange);
        box-shadow: 0 4px 16px rgba(253, 112, 1, 0.18);
        transform: translateY(-1px);
    }

    .gov-blinking-new-mini {
        background-color: #FF0000 !important;
        padding: 2px 7px;
        border-radius: 4px;
        line-height: 1.3;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .gov-blinking-new-mini .blink-text {
        font-size: 10px;
        font-weight: 800;
        letter-spacing: 0.5px;
        color: #FFFF00 !important;
        text-transform: uppercase;
        animation: govTextBlink 0.9s steps(1) infinite;
    }

    .hero-smart-pill {
        font-size: 13px;
        font-weight: 500;
        color: #1E293B;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        white-space: nowrap;
    }

    .hero-smart-pill .smart-pill-name {
        color: var(--primary-orange);
        font-weight: 800;
        letter-spacing: 0.3px;
    }

    .hero-smart-pill .smart-pill-divider {
        color: rgba(0, 0, 0, 0.35);
    }

    .hero-smart-pill .smart-pill-feature {
        color: #334155;
        font-weight: 500;
    }

    .hero-smart-pill .mobile-only {
        display: none;
    }

    .hero-smart-pill i {
        font-size: 11px;
        color: var(--primary-orange);
        transition: transform 0.2s ease;
    }

    .hero-smart-pill:hover i {
        transform: translateX(3px);
    }

    .hero-highlight-gradient {
        background: linear-gradient(135deg, var(--color-blue) 0%, var(--primary-orange) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-btn-iptv {
        background: linear-gradient(135deg, var(--primary-orange) 0%, #FF5500 100%);
        color: #ffffff !important;
        box-shadow: 0 6px 20px rgba(253, 112, 1, 0.35);
        padding: 12px 22px;
        border-radius: 30px;
        font-weight: 700;
        font-size: 15px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.25s ease;
    }

    .hero-btn-iptv:hover {
        background: linear-gradient(135deg, #e06200 0%, #E64A00 100%);
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(253, 112, 1, 0.45);
    }

    .hero-trust-highlights {
        display: flex;
        align-items: center;
        gap: 18px;
        margin-top: 5px;
        flex-wrap: wrap;
    }

    .trust-point {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 13.5px;
        font-weight: 600;
        color: var(--color-text-main);
    }

    .trust-point i {
        font-size: 15px;
    }

    .btn-primary-gradient {
        text-decoration: none;
        color: var(--color-white);
        background: linear-gradient(to right, var(--color-blue), var(--primary-orange));
        font-weight: 600;
        font-size: 15px;
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 12px 20px;
        border-radius: 30px;
    }

    .link-btn {
        text-decoration: none;
        color: var(--color-text-main);
        font-weight: 600;
        font-size: 15px;
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 12px 20px;
        border: 1px solid var(--primary-orange);
        border-radius: 30px;
        box-shadow: 0 2px 8px var(--shadow-subtle);
    }

    .link-btn:hover {
        color: var(--primary-orange);
    }

    .hero-img {
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero-img img {
        max-width: 100%;
        max-height: 100%;
        height: auto;
        width: auto;
        object-fit: contain;
    }

    .overlap-container-wrapper {
        position: relative;
        z-index: 2;
    }

    .entertainment-overlap-card {
        border: 7px solid var(--color-white);
        border-radius: 24px;
        padding: 38px;
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        gap: 30px;
        align-items: center;
        box-shadow: 0 10px 30px var(--shadow-subtle);
        position: relative;
        background: #F3EEFF !important;
        z-index: 10;
    }

    .ent-text h2 {
        font-size: 32px;
        font-weight: 700;
        line-height: 1.2;
        color: var(--color-text-main);
        margin-bottom: 15px;
    }

    .highlight-text {
        background: linear-gradient(to right, var(--color-blue), var(--primary-orange));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .ent-text p {
        font-size: 14px;
        color: var(--color-text-muted);
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .overlap-absolute-element {
        position: absolute;
        bottom: 0px;
        left: 250px;
        height: 150px;
        width: auto;
        pointer-events: none;
    }

    .text-link-orange {
        text-decoration: none;
        color: var(--primary-orange);
        background-color: var(--color-white);
        border: 1px solid var(--primary-orange);
        border-radius: 30px;
        padding: 12px 16px;
        font-weight: 600;
        font-size: 14px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        text-align: center;
        /* width: 20%; */
    }

    .text-link-orange:hover {
        color: var(--color-white);
        background-color: var(--primary-orange);
    }

    .entertainment-slider-wrapper {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%;
    }

    .ent-cards-slider {
        display: flex;
        gap: 15px;
        overflow-x: auto;
        scroll-behavior: smooth;
        scrollbar-width: none;
        -ms-overflow-style: none;
        width: 100%;
        padding: 5px 0;
        scroll-snap-type: x mandatory;
    }

    .ent-cards-slider::-webkit-scrollbar {
        display: none;
    }

    .mini-card {
        flex: 0 0 calc(25% - 11.25px);
        height: 200px;
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid var(--border-color);
        background: var(--color-white);
        scroll-snap-align: start;
        transition: transform 0.3s ease;
    }

    .mini-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .mini-card:hover {
        transform: translateY(-5px);
    }

    .slider-nav-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--color-white);
        border: 1px solid var(--border-color);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        color: var(--color-text-main);
        font-size: 14px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
        transition: all 0.2s ease;
    }

    .slider-nav-btn:hover {
        background: var(--primary-orange);
        color: var(--color-white);
        border-color: var(--primary-orange);
    }

    .prev-btn {
        left: -20px;
    }

    .next-btn {
        right: -20px;
    }

    .services-section {
        padding: 20px 100px;
        background: transparent;
        position: relative;
        z-index: 2;
    }

    .service-container {
        max-width: 1680px;
        width: 100%;
        margin: -25px auto 0;
        padding: 0;
        display: flex;
        justify-content: left;
        align-items: center;
        z-index: 1;
        position: relative;
    }

    .service-elem-top-right {
        position: absolute;
        top: 200px;
        left: 0px;
        width: 120px;
        height: auto;
        z-index: 1;
        pointer-events: none;
    }

    .service-elem-right-wave {
        position: absolute;
        top: 90px;
        right: 0;
        height: 500px;
        width: auto;
        z-index: -1;
        pointer-events: none;
    }

    .services-header {
        max-width: 100%;
        margin-bottom: 40px;
    }

    .sub-heading-orange {
        font-size: 15px;
        font-weight: 700;
        color: var(--primary-orange);
        letter-spacing: 1px;
        display: block;
        margin-bottom: 8px;
    }

    .services-header h2 {
        font-size: 38px;
        font-weight: 700;
        line-height: 1.2;
        color: var(--color-text-main);
        margin-bottom: 15px;
    }

    .highlight-text-orange {
        background: linear-gradient(to right, var(--primary-orange), #f83238);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .services-header p {
        font-size: 15px;
        color: var(--color-text-muted);
        line-height: 1.6;
    }

    .service-get-btn {
        display: inline-flex;
        width: fit-content;
        margin-top: 15px;
    }

    .service-main-img {
        height: 400px;
        width: 750px;
        object-fit: cover;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        margin-bottom: 30px;
    }

    .service-card {
        background: var(--color-white);
        border: 1px solid var(--border-color);
        border-radius: 20px;
        padding: 20px;
        box-shadow: 0 4px 15px var(--shadow-subtle);
        transition: transform 0.2s ease;
    }

    .service-card:hover {
        transform: translateY(-5px);
    }

    .service-card-part {
        display: flex;
        gap: 15px;
    }

    .service-icon {
        width: 65px;
        height: 65px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        margin-bottom: 20px;
        padding: 7px 14px;
    }

    .service-card-content {
        margin-top: -20px;
    }

    .service-card h3 {
        font-size: 20px;
        font-weight: 600;
        color: var(--color-text-main);
        margin-bottom: 0px;
    }

    .service-card p {
        font-size: 15px;
        color: var(--color-text-muted);
        line-height: 1.5;
        margin: 5px 0px 20px 0px;
    }

    .service-features {
        list-style: none;
        padding: 0;
        margin: 0 0 25px 0;
    }

    .service-features li {
        font-size: 14px;
        color: var(--color-text-main);
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 10px;
        word-spacing: 0.5px;
        letter-spacing: 0.1rem;
        padding: 0 10px;
    }

    .service-features li i {
        color: var(--primary-orange);
        font-size: 12px;
    }

    .card-link {
        text-decoration: none;
        color: var(--primary-orange);
        font-weight: 600;
        font-size: 15px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .expert-help-banner {
        background: var(--color-white);
        border: 1px solid var(--border-color);
        border-radius: 20px;
        padding: 5px 35px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 15px var(--shadow-subtle);
    }

    .expert-left {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .expert-left span {
        font-size: 25px !important;
        padding: 15px;
    }

    .expert-left strong {
        font-size: 15px;
        color: var(--color-text-main);
        display: block;
        margin-bottom: 2px;
    }

    .expert-left p {
        font-size: 13px;
        color: var(--color-text-muted);
        margin: 0;
    }

    .expert-right {
        display: flex;
        gap: 15px;
    }

    .broadband-section {
        padding: 40px 0;
        position: relative;
        z-index: 2;
        overflow: hidden;
    }

    .broadband-container {
        max-width: 1350px;
        margin: 0 auto;
        padding: 0 40px;
        position: relative;
        z-index: 2;
    }

    .broadband-service-flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        z-index: 2;
    }

    .broadband-text-content {
        max-width: 600px;
    }

    .broadband-graphic-area {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        width: 45%;
        min-height: 350px;
        z-index: 3;
    }

    .broadband-header-imgs1 {
        position: absolute;
        left: 20px;
        top: 100px;
        z-index: 4;
    }

    .broadband-header-imgs1 img {
        height: 180px;
        width: auto;
        object-fit: contain;
        background: #ffffff;
        border-radius: 16px;
    }

    .broadband-header-imgs2 {
        position: relative;
        z-index: 3;
    }

    .broadband-header-imgs2 img {
        height: 300px;
        margin-top: 150px;
        width: auto;
        object-fit: contain;
        filter: drop-shadow(0 15px 30px rgba(0, 0, 0, 0.12));
    }

    .broadband-features-row {
        display: flex;
        gap: 15px;
        margin-top: 25px;
        flex-wrap: wrap;
    }

    .b-feature {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 13px;
        font-weight: 600;
        color: var(--color-text-main);
        background: var(--color-light-bg);
        padding: 8px 15px;
        border-radius: 30px;
        border: 1px solid var(--border-color);
        z-index: 1;
    }

    .b-feature i {
        color: var(--primary-orange);
        font-size: 20px !important;
    }

    .b-feature span {
        font-weight: 400;
        color: var(--color-text-muted);
    }

    .broadband-avail-btn {
        display: inline-flex;
        width: fit-content;
        margin-top: 25px;
    }

    .broadband-elem-right-wave {
        position: absolute;
        top: 370px;
        right: 495px;
        height: 100px;
        width: auto;
        z-index: -1;
        pointer-events: none;
    }

    .plans-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 20px;
        margin: -60px 0 40px;
        padding: 20px;
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.08);
        border-radius: 18px;
        background: var(--color-white);
    }

    .plan-card {
        background: var(--color-white);
        border: 2px solid #E2E8F0;
        border-radius: 24px;
        padding: 30px 20px 25px 20px;
        margin-top: 10px;
        position: relative;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: all 0.3s ease;
        z-index: 1;
    }

    .plan-card:hover {
        border-color: var(--primary-orange);
        transform: translateY(-5px);
    }

    .plan-card.popular-card {
        border-color: rgba(255, 102, 0, 0.4);
    }

    .plan-card.featured-plan {
        border-color: var(--color-blue);
        background: linear-gradient(180deg, #F5F8FF 0%, #FFFFFF 100%);
        box-shadow: 0 8px 25px rgba(0, 102, 255, 0.08);
    }

    .plan-badge-popular,
    .plan-badge-value {
        position: absolute;
        top: -12px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 9px;
        font-weight: 700;
        letter-spacing: 0.5px;
        padding: 4px 14px;
        border-radius: 20px;
        color: var(--color-white);
        background: var(--primary-orange);
        white-space: nowrap;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .plan-badge-value {
        background: var(--color-light-blue);
    }

    .iptv-featured-card {
        border-color: rgba(253, 112, 1, 0.45) !important;
        background: linear-gradient(180deg, #FFFDFB 0%, #FFFFFF 100%) !important;
    }

    .gov-blinking-new {
        position: absolute;
        top: -11px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #FF0000 !important;
        padding: 2px 10px;
        border-radius: 4px;
        box-shadow: 0 2px 6px rgba(255, 0, 0, 0.4);
        z-index: 5;
        line-height: 1.35;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .gov-blinking-new .blink-text {
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.5px;
        color: #FFFF00 !important;
        text-transform: uppercase;
        white-space: nowrap;
        animation: govTextBlink 0.8s steps(1) infinite;
    }

    @keyframes govTextBlink {

        0%,
        49.9% {
            opacity: 1;
            visibility: visible;
        }

        50%,
        100% {
            opacity: 0;
            visibility: hidden;
        }
    }

    .plan-iptv-badge {
        font-size: 11px;
        font-weight: 700;
        color: var(--primary-orange);
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin-bottom: 3px;
        display: block;
    }

    .price-prefix {
        font-size: 11px;
        font-weight: 600;
        color: var(--color-text-muted);
        display: block;
        line-height: 1.1;
        margin-bottom: 2px;
        text-transform: none;
    }

    .service-icon-business {
        width: 85%;
        height: 65px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        margin-bottom: 20px;
        padding: 7px 14px;
    }

    .plan-card h3 {
        font-size: 18px;
        font-weight: 700;
        color: var(--color-text-main);
        margin-bottom: 8px;
    }

    .text-orange {
        color: var(--primary-orange);
    }

    .text-blue {
        color: var(--color-blue);
    }

    .plan-desc {
        font-size: 15px;
        color: var(--color-text-muted);
        line-height: 1.5;
        margin-bottom: 30px;
    }

    .plan-card-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: auto;
    }

    .plan-price {
        font-size: 22px;
        font-weight: 700;
        color: var(--color-text-main);
    }

    .plan-price span {
        font-size: 13px;
        font-weight: 400;
        color: var(--color-text-muted);
    }

    .plan-arrow-btn {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #FFF3EC;
        border: 1px solid rgba(255, 102, 0, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-orange);
        text-decoration: none;
        font-size: 13px;
        transition: all 0.2s ease;
    }

    .plan-arrow-btn.blue-btn,
    .plan-arrow-btn.active {
        background: var(--color-blue);
        color: var(--color-white);
        border-color: var(--color-blue);
        box-shadow: 0 4px 10px rgba(0, 102, 255, 0.3);
    }

    .plan-arrow-btn:hover {
        transform: scale(1.05);
    }

    .broadband-perks-row {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
        background: var(--color-light-bg);
        border: 1px solid var(--border-color);
        border-radius: 20px;
        padding: 25px 10px;
        margin-bottom: 30px;
        width: 98%;
    }

    .perk-item {
        display: flex;
        gap: 12px;
        align-items: center;
    }

    .perk-item strong {
        font-size: 16px;
        color: var(--color-text-main);
        display: block;
        margin-bottom: 2px;
    }

    .perk-item i {
        font-size: 20px;
        padding: 10px;
        margin: 5px;
    }

    .perk-item p {
        font-size: 14px;
        color: var(--color-text-muted);
        margin: 0;
    }

    .switch-banner {
        background: linear-gradient(135deg, #F8F9FA 0%, #FFFFFF 100%);
        border: 7px solid var(--color-white);
        border-radius: 20px;
        padding: 0px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 15px var(--shadow-subtle);
    }

    .broadband-switch-banner {
        margin-top: 15px !important;
    }

    .switch-img-box img {
        max-width: 220px;
        height: 110px;
    }

    .switch-left h3 {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 4px;
    }

    .switch-left p {
        font-size: 14px;
        color: var(--color-text-muted);
        margin: 0;
    }

    .switch-perks {
        display: flex;
        gap: 30px;
    }

    .consultation-banner {
        background: var(--color-white) !important;
        border: 1px solid var(--border-color);
        border-radius: 24px;
        padding: 20px 30px;
        display: flex;
        align-items: center;
        gap: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
    }

    .consultation-img-box {
        width: 180px;
        height: 130px;
        background: #E2E8F0;
        border-radius: 12px;
        overflow: hidden;
        flex-shrink: 0;
    }

    .consultation-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .consultation-banner .switch-left h3 {
        font-size: 16px;
        font-weight: 700;
        color: var(--color-text-main);
        margin-bottom: 4px;
    }

    .consultation-banner .switch-left p {
        font-size: 12px;
        color: var(--color-text-muted);
        margin: 3px;
    }

    .consultation-btn {
        color: var(--color-white) !important;
        padding: 10px 20px;
        font-size: 13px;
        border-radius: 30px;
        box-shadow: 0 4px 12px rgba(255, 122, 21, 0.25);
        white-space: nowrap;
        width: 200px;
    }

    .s-perk {
        font-size: 15px;
        font-weight: 600;
        color: var(--color-text-main);
    }

    .s-perk i {
        color: var(--primary-orange);
        margin-right: 6px;
        font-size: 20px;
    }

    .s-perk span {
        display: block;
        font-size: 13px;
        font-weight: 400;
        color: var(--color-text-muted);
    }

    .iptv-section {
        padding: 20px 0;
        position: relative;
        z-index: 2;
    }

    .iptv-hero-box {
        border-radius: 20px;
        padding: 40px 20px;
        margin-bottom: 25px;
    }

    .iptv-elem-top-right {
        position: absolute;
        top: 20px;
        left: 0px;
        width: 80px;
        height: auto;
        z-index: -1;
        pointer-events: none;
    }

    .sub-heading-blue {
        font-size: 15px;
        font-weight: 700;
        color: var(--color-blue);
        letter-spacing: 1px;
        display: block;
        margin-bottom: 8px;
    }

    .iptv-text h2 {
        font-size: 38px;
        font-weight: 700;
        line-height: 1.25;
        color: var(--color-text-main);
        margin-bottom: 15px;
        text-wrap: balance;
    }

    .highlight-brand {
        background: linear-gradient(to right, var(--color-blue), var(--primary-orange));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .iptv-text p {
        font-size: 17px;
        color: var(--color-text-muted);
        line-height: 1.6;
        max-width: 600px;
    }

    .btn-primary-accent {
        background: linear-gradient(135deg, var(--color-blue), var(--primary-orange));
        color: var(--color-white);
        padding: 12px 24px;
        border-radius: 30px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .iptv-action-buttons {
        display: flex;
        gap: 15px;
        align-items: center;
        flex-wrap: wrap;
    }

    .iptv-explore-btn {
        display: inline-flex;
        width: fit-content;
        margin-top: 15px;
    }

    .iptv-app-badges {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 24px;
        flex-wrap: wrap;
    }

    .iptv-app-label {
        font-size: 13px;
        font-weight: 700;
        color: var(--color-text-main);
        letter-spacing: 0.3px;
        white-space: nowrap;
    }

    .store-badges-group {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        flex-wrap: nowrap;
    }

    .store-badge-card {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        background: #000000;
        color: #ffffff !important;
        border: 1.5px solid #1e293b;
        border-radius: 10px;
        padding: 7px 14px;
        text-decoration: none !important;
        transition: all 0.25s ease;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        white-space: nowrap;
        flex-shrink: 0;
    }

    .store-badge-card:hover {
        background: #0f172a;
        border-color: var(--primary-orange);
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(253, 112, 1, 0.25);
    }

    .store-badge-svg {
        flex-shrink: 0;
    }

    .store-badge-text {
        display: flex;
        flex-direction: column;
        text-align: left;
        line-height: 1.15;
    }

    .store-badge-sub {
        font-size: 9px;
        font-weight: 600;
        letter-spacing: 0.6px;
        color: #94a3b8;
        text-transform: uppercase;
    }

    .store-badge-main {
        font-size: 13px;
        font-weight: 700;
        color: #ffffff;
        letter-spacing: 0.2px;
    }

    .iptv-img-wrapper {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .iptv-img-link {
        display: inline-block;
        text-decoration: none;
    }

    .iptv-main-img {
        height: 350px;
        width: auto;
        max-width: 100%;
        object-fit: contain;
    }

    .iptv-features-container {
        background: var(--color-white);
        border: 1px solid var(--border-color);
        border-radius: 24px;
        padding: 24px 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        margin-top: 55px;
    }

    .iptv-features-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 10px;
        align-items: center;
    }

    .iptv-feat {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 0 6px;
        position: relative;
    }

    .iptv-feat .touch-icon {
        width: 44px;
        height: 44px;
        min-width: 44px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px !important;
        padding: 0 !important;
    }

    .feat-text {
        display: flex;
        flex-direction: column;
        min-width: 0;
    }

    .iptv-feat i {
        font-size: 18px !important;
        padding: 0 !important;
    }

    .iptv-feat:not(:last-child)::after {
        content: '';
        position: absolute;
        right: -5px;
        top: 50%;
        transform: translateY(-50%);
        width: 1px;
        height: 36px;
        background: #E2E8F0;
    }

    .icon-pink {
        background: #FCE7F3;
        color: #DB2777;
    }

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

    .icon-green {
        background: #DCFCE7;
        color: #16A34A;
    }

    .feat-text strong {
        font-size: 15.5px;
        font-weight: 700;
        color: var(--color-text-main);
        display: block;
        margin-bottom: 2px;
        white-space: nowrap;
    }

    .feat-text span {
        font-size: 12.5px;
        color: var(--color-text-muted);
        line-height: 1.3;
        display: block;
        white-space: nowrap;
    }

    .iptv-sub-banners {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 25px;
    }

    .sub-banner-card {
        background: var(--color-white);
        border: 7px solid var(--color-white);
        border-radius: 20px;
        padding: 100px 40px;
        box-shadow: 0 4px 15px var(--shadow-subtle);
        margin-top: -10px;
        position: relative;
        overflow: hidden;
    }

    .premium-ent-card {
        background: var(--bg-orange) !important;
        display: flex;
        align-items: center;
        gap: 30px;
        padding: 2px 40px !important;
    }

    .sub-banner-image-left {
        width: 40%;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sub-banner-image-left img {
        width: 100%;
        height: auto;
        max-height: 200px;
        object-fit: contain;
    }

    .sub-banner-content-right {
        flex: 1;
        z-index: 2;
    }

    .premium-title {
        color: #8A2BE2;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .premium-badge-icon {
        color: #8A2BE2 !important;
    }

    .sports-card {
        background: #FFF5EC !important;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        overflow: hidden;
        padding: 0px 40px !important;
    }

    .sports-content-area {
        max-width: 60%;
        z-index: 2;
    }

    .sports-title {
        color: var(--primary-orange);
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .sports-desc {
        font-size: 14px;
        color: var(--color-text-muted);
        margin-bottom: 25px;
        line-height: 1.5;
        width: 100% !important;
    }

    .sports-badge-icon {
        color: var(--primary-orange);
        margin-right: 4px;
    }

    .sports-image-area {
        position: absolute;
        right: 0;
        bottom: 0;
        top: 0;
        width: 40%;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        z-index: 1;
        pointer-events: none;
    }

    .sports-image-area img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .sub-badges {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .sub-badges span {
        background: var(--color-light-bg);
        border: 1px solid var(--border-color);
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 15px;
        font-weight: 600;
        color: var(--color-text-main);
    }

    .sub-badges span i {
        color: #8A2BE2;
        margin-right: 4px;
    }

    .enterprises-section {
        padding: 70px 8px;
        background: transparent;
        position: relative;
        z-index: 2;
    }

    .enterprises-elem-right-wave {
        position: absolute;
        top: 10px;
        right: 125px;
        height: 500px;
        width: auto;
        z-index: 1;
        pointer-events: none;
    }

    .enterprises-img {
        position: absolute;
        top: -50px;
        right: 155px;
        height: 500px;
        width: auto;
    }

    .business-plans-grid {
        grid-template-columns: repeat(5, 1fr);
    }

    .enterprises-bottom-grid {
        display: grid;
        grid-template-columns: 2fr 1.5fr;
        gap: 25px;
        margin-top: 30px;
    }

    .ent-choose-banner {
        background: linear-gradient(135deg, #6062c7 0%, #04a3eb 100%);
        border-radius: 20px;
        padding: 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: var(--color-white);
        box-shadow: 0 4px 15px var(--shadow-subtle);
    }

    .ent-choose-text h3 {
        font-size: 24px;
        font-weight: 700;
        line-height: 1.2;
        color: var(--color-white);
    }

    .ent-choose-stats {
        display: flex;
        gap: 20px;
    }

    .ent-choose-stats .stat-box strong {
        color: var(--color-white);
    }

    .news-why-banner {
        background: linear-gradient(135deg, #03a0e9 0%, #313388 100%);
        border-radius: 24px;
        padding: 30px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: var(--color-white);
        box-shadow: 0 10px 30px rgba(0, 97, 242, 0.2);
    }

    .news-why-banner .ent-choose-text h3 {
        font-size: 24px;
        font-weight: 700;
        line-height: 1.25;
        color: var(--color-white);
        margin: 0;
    }

    .news-why-banner .ent-choose-stats {
        display: flex;
        align-items: center;
        gap: 30px;
    }

    .news-why-banner .stat-box {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        position: relative;
    }

    .news-why-banner .stat-box:not(:last-child)::after {
        content: '';
        position: absolute;
        right: -15px;
        top: 50%;
        transform: translateY(-50%);
        width: 1px;
        height: 35px;
        background: rgba(255, 255, 255, 0.25);
    }

    .news-why-banner .stat-icon {
        font-size: 20px;
        margin-bottom: 8px;
        color: var(--color-white);
    }

    .news-why-banner .stat-box strong {
        font-size: 13px;
        font-weight: 700;
        color: var(--color-white);
        display: block;
        margin-bottom: 2px;
    }

    .news-why-banner .stat-box span {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.8);
    }

    .btn-outline {
        background: transparent;
        border: 1px solid var(--primary-orange);
        color: var(--primary-orange);
        padding: 10px 20px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .stat-box i {
        background-color: #2359ab;
        border: 1px solid var(--primary-orange);
        border-radius: 50%;
        font-size: 24px;
        padding: 15px;
    }

    .ent-choose-stats .stat-box span {
        color: rgba(255, 255, 255, 0.7);
    }

    .news-section {
        padding: 70px 0;
        background: transparent;
        position: relative;
        z-index: 2;
    }

    .news-header-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        max-width: 100%;
        margin-bottom: 30px;
    }

    .news-img {
        position: absolute;
        top: 10px;
        right: 851px;
        width: 120px;
        height: auto;
        z-index: 1;
        pointer-events: none;
    }

    .news-tabs-row {
        display: flex;
        gap: 15px;
        margin-bottom: 30px;
        overflow-x: auto;
        padding-bottom: 10px;
    }

    .news-tab {
        background: var(--color-white);
        border: 1px solid var(--border-color);
        padding: 10px 20px;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        white-space: nowrap;
        transition: all 0.2s ease;
        color: var(--color-text-main);
    }

    .news-tab i {
        font-size: 18px;
    }

    .news-tab.active,
    .news-tab:hover {
        border-color: #8A2BE2 !important;
    }

    .news-cards-grid {
        grid-template-columns: repeat(5, 1fr) !important;
        margin-bottom: 30px;
    }

    .news-card-item {
        padding: 15px !important;
    }

    .news-card-img-wrap {
        background: var(--border-color);
        height: 120px;
        border-radius: 12px;
        margin-bottom: 12px;
        position: relative;
        overflow: hidden;
    }

    .news-card-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .news-badge-tag {
        position: absolute;
        top: 10px;
        left: 10px;
        background: var(--primary-orange);
        color: var(--color-white);
        font-size: 9px;
        font-weight: 700;
        padding: 3px 8px;
        border-radius: 6px;
    }

    .news-card-item h3 {
        font-size: 14px;
        line-height: 1.4;
        margin-bottom: 10px;
    }

    .news-card-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 13px;
        color: var(--color-text-muted);
    }

    .news-alert-banner {
        margin: 0;
        background: #F8F5FF !important;
        border: 1px solid #E2E8F0;
        border-radius: 20px;
        padding: 25px 35px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        position: relative;
        overflow: hidden;
    }

    .news-alert-img-box {
        width: 90px;
        height: 90px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .news-alert-img-box img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .news-alert-banner .switch-left {
        flex: 1;
    }

    .news-alert-banner .switch-left h3 {
        font-size: 18px;
        font-weight: 700;
        color: var(--color-text-main);
        margin-bottom: 4px;
    }

    .news-alert-banner .switch-left p {
        font-size: 13px;
        color: var(--color-text-muted);
        margin: 0;
    }

    .alert-btn {
        background: #FFFFFF;
        border: 1px solid #D8B4FE;
        color: #9333EA;
        padding: 10px 20px;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 2px 6px rgba(147, 51, 234, 0.08);
        white-space: nowrap;
    }

    .alert-btn:hover {
        background: #9333EA;
        color: #FFFFFF;
        border-color: #9333EA;
    }

    .help-section {
        padding: 30px 0;
        background: transparent;
        position: relative;
        z-index: 2;
    }

    .help-top-flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 25px;
        margin-bottom: 15px;
    }

    .help-top-flex .iptv-text {
        flex: 1;
        max-width: 35%;
    }

    .help-banner-img-box {
        flex: 1.2;
        height: 240px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .help-banner-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .help-features-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 15px;
        align-items: center;
    }

    .help-immediate-box {
        flex: unset !important;
        width: 320px !important;
        background: var(--color-light-bg);
        border: 1px solid var(--border-color);
        border-radius: 16px;
        padding: 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
    }

    .help-immediate-box strong {
        font-size: 14px;
        color: var(--color-text-main);
        display: block;
        margin-bottom: 4px;
    }

    .help-immediate-box p {
        font-size: 12px;
        color: var(--color-text-muted);
        margin-bottom: 12px;
    }

    .help-contact-info {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .help-contact-row {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 13px;
        font-weight: 600;
        color: var(--color-text-main);
    }

    .toll-free-text {
        font-size: 10px;
        color: var(--color-text-muted);
        font-weight: 400;
    }

    .help-arrow-icon {
        font-size: 13px;
        margin-left: auto;
    }

    .help-features-row {
        margin-top: 0 !important;
    }

    .help-bottom-grid-layout {
        grid-template-columns: 1.5fr 1.5fr;
        align-items: start;
    }

    .faq-card-wrapper {
        padding: 15px 20px !important;
        scroll-margin-top: 110px;
    }

    .faq-card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .faq-card-header h3 {
        font-size: 20px;
        margin: 0;
    }

    .view-all-faqs-link {
        font-size: 14px;
        color: var(--primary-orange);
        text-decoration: none;
        font-weight: 600;
    }

    .faq-list {
        display: flex;
        flex-direction: column;
        gap: 0;
    }

    .faq-item {
        border-bottom: 1px solid var(--border-light);
        padding: 5px 0;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .faq-question {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 13px;
        font-weight: 600;
        color: var(--color-text-main);
        background: var(--bg-orange);
        padding: 4px;
        border-radius: 15px;
    }

    .faq-question:hover {
        color: var(--primary-orange);
    }

    .faq-question i {
        padding: 8px;
        font-size: 20px;
        color: var(--primary-orange);
    }

    .faq-arrow {
        font-size: 13px;
        color: var(--color-text-muted);
        transition: transform 0.3s ease;
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
        font-size: 12px;
        color: var(--color-text-muted);
        line-height: 1.5;
    }

    .faq-answer p {
        margin: 10px 0 0 0;
    }

    .faq-item.active .faq-answer {
        max-height: 150px;
    }

    .faq-item.active .faq-arrow {
        transform: rotate(180deg);
        color: var(--primary-orange);
    }

    .faq-item.active .faq-question {
        color: var(--primary-orange);
    }

    .help-right-column {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .help-contact-card {
        padding: 18px 25px !important;
        background: var(--bg-orange);
    }

    .help-contact-card h3 {
        font-size: 16px;
    }

    .help-contact-desc {
        font-size: 14px;
        margin-bottom: 10px;
    }

    .help-contact-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
        text-align: center;
    }

    .help-channel-box {
        background: var(--color-light-bg);
        padding: 10px;
        border-radius: 10px;
        border: 1px solid var(--border-color);
    }

    .channel-icon {
        color: var(--primary-orange);
        margin-bottom: 4px;
    }

    .channel-title {
        display: block;
        font-size: 14px;
        font-weight: 600;
    }

    .channel-sub {
        font-size: 12px;
        color: var(--color-text-muted);
    }

    .quick-topics-card {
        padding: 20px !important;
    }

    .quick-topics-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px;
    }

    .quick-topics-header h4 {
        font-size: 16px;
        font-weight: 700;
        margin: 0;
    }

    .explore-topics-link {
        font-size: 14px;
        color: var(--primary-orange);
        text-decoration: none;
        font-weight: 600;
    }

    .topics-tags-wrap {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

    .topic-tag-pill {
        padding: 10px 13px;
        border-radius: 12px;
        font-size: 13px;
        font-weight: 600;
    }

    .final-trust-bar {
        background: var(--color-light-bg);
        border: 1px solid var(--border-color);
        border-radius: 20px;
        padding: 25px 35px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 30px;
    }

    .final-trust-bar h4 {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 4px;
    }

    .final-trust-desc {
        font-size: 14px;
        color: var(--color-text-muted);
        margin: 0;
    }

    .final-stats-row {
        display: flex;
        gap: 30px;
        align-items: center;
    }

    .final-stat-item {
        text-align: center;
    }

    .final-stat-item strong {
        display: block;
        font-size: 16px;
        color: var(--color-text-main);
    }

    .final-stat-item span {
        font-size: 14px;
        color: var(--color-text-muted);
    }

    @media (max-width: 1200px) {
        .plans-grid {
            grid-template-columns: repeat(3, 1fr) !important;
        }

        .broadband-perks-row {
            grid-template-columns: repeat(2, 1fr);
        }

        .enterprises-section .plans-grid {
            grid-template-columns: repeat(3, 1fr) !important;
        }

        .enterprises-bottom-grid {
            grid-template-columns: 1fr;
        }

        .iptv-features-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .news-section .plans-grid {
            grid-template-columns: repeat(3, 1fr) !important;
        }
    }

    @media (max-width: 1024px) {
        .home-page-bg {
            background-image: none !important;
            margin-top: 0px;
        }

        .hero-section {
            padding: 60px 20px;
        }

        .hero-container {
            padding: 0px;
            flex-direction: column;
            text-align: center;
            gap: 30px;
        }

        .hero-content {
            max-width: 100%;
        }

        .hero-buttons {
            justify-content: center;
        }

        .hero-img img {
            max-width: 100%;
            margin-left: 0;
        }

        .entertainment-overlap-card {
            grid-template-columns: 1fr !important;
            gap: 25px;
            padding: 25px;
        }

        .service-main-img {
            height: 150px;
            width: 300px;
            object-fit: cover;
        }

        .service-container,
        .broadband-service-flex {
            flex-direction: column;
            gap: 30px;
            text-align: center;
        }

        .iptv-img-wrapper {
            width: 100% !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            text-align: center !important;
            margin: 20px auto 0 !important;
        }

        .iptv-img-link {
            display: inline-flex !important;
            justify-content: center !important;
            align-items: center !important;
            width: 100% !important;
            max-width: 550px !important;
            margin: 0 auto !important;
        }

        .iptv-img-link picture {
            width: 100% !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
        }

        .iptv-main-img {
            width: 100% !important;
            max-width: 550px !important;
            height: auto !important;
            max-height: 350px !important;
            object-fit: contain !important;
            margin: 0 auto !important;
            display: block !important;
        }

        .broadband-graphic-area {
            width: 100%;
            justify-content: center;
            min-height: auto;
        }

        .broadband-header-imgs1 {
            position: relative;
            left: 0;
            top: 0;
        }

        .broadband-header-imgs2 img,
        .broadband-header-imgs1 img {
            height: auto;
            max-height: 200px;
        }

        .services-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .iptv-features-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        .iptv-sub-banners {
            grid-template-columns: 1fr;
        }

        .news-why-banner {
            flex-direction: column;
            gap: 25px;
            text-align: center;
            padding: 25px;
        }

        .news-why-banner .ent-choose-stats {
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .help-section .help-top-flex {
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 25px;
            width: 100%;
        }

        .help-section .help-top-flex .iptv-text {
            max-width: 100%;
        }

        .help-banner-img-box {
            width: 100%;
            height: 200px;
            border-radius: 20px;
        }

        .help-immediate-box {
            width: 100% !important;
            max-width: 100% !important;
            box-sizing: border-box !important;
            margin: 0 auto !important;
        }

        .help-features-grid {
            grid-template-columns: 1fr !important;
            display: flex !important;
            flex-direction: column !important;
            gap: 15px !important;
            width: 100% !important;
            padding: 0 !important;
        }

        .help-features-row {
            width: 100% !important;
            box-sizing: border-box !important;
            background: var(--color-white);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 15px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }

        .overlap-absolute-element,
        .hero-elem-top-right,
        .hero-elem-right-wave,
        .service-elem-top-right,
        .service-elem-right-wave,
        .broadband-elem-right-wave,
        .iptv-elem-top-right,
        .enterprises-elem-right-wave,
        .enterprises-img {
            display: none !important;
        }
    }

    @media (max-width: 768px) {
        .enterprises-section .plans-grid {
            grid-template-columns: repeat(1, 1fr) !important;
        }

        .news-section .plans-grid {
            grid-template-columns: repeat(1, 1fr) !important;
        }

        .hero-section {
            padding: 40px 15px;
        }

        .hero-content h1 {
            font-size: 32px;
            line-height: 1.2;
        }

        .hero-content p {
            font-size: 14px;
        }

        .hero-buttons {
            flex-direction: column;
            width: 100%;
            gap: 10px;
        }

        .hero-smart-badge-wrap {
            width: fit-content;
            max-width: 96%;
            margin: 0 auto 14px auto;
            padding: 3px 10px 3px 5px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        .hero-smart-pill {
            font-size: 11px;
            gap: 4px;
            white-space: nowrap;
        }

        .hero-smart-pill .smart-pill-name {
            font-size: 11px;
            font-weight: 800;
        }

        .hero-smart-pill .desktop-only {
            display: none !important;
        }

        .hero-smart-pill .mobile-only {
            display: inline !important;
            font-size: 11px;
        }

        .gov-blinking-new-mini {
            padding: 1.5px 5px;
        }

        .gov-blinking-new-mini .blink-text {
            font-size: 9px;
        }

        .hero-btn-iptv {
            width: 80% !important;
            justify-content: center !important;
        }

        .hero-trust-highlights {
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }

        .btn-primary-gradient,
        .link-btn {
            width: 80%;
            justify-content: center;
        }

        .ent-cards-slider {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
        }

        .mini-card {
            flex: 0 0 100% !important;
            width: 100% !important;
            height: 250px;
            scroll-snap-align: start;
        }

        .entertainment-overlap-card {
            padding: 10px 10px;
        }

        .services-section {
            padding: 20px 15px;
        }

        .services-grid {
            grid-template-columns: 1fr !important;
        }

        .plans-grid {
            grid-template-columns: 1fr !important;
            margin: 20px 0;
            padding: 15px;
        }

        .expert-help-banner {
            flex-direction: column !important;
            gap: 20px !important;
            text-align: center !important;
            padding: 20px 15px !important;
            width: 100% !important;
            box-sizing: border-box !important;
        }

        .expert-left {
            flex-direction: column !important;
            text-align: center !important;
            gap: 10px !important;
        }

        .expert-right {
            width: 100% !important;
            flex-direction: column !important;
            gap: 10px !important;
            justify-content: center !important;
        }

        .expert-right .link-btn,
        .expert-right .btn-primary-gradient {
            width: 100% !important;
            justify-content: center !important;
            box-sizing: border-box !important;
        }

        .broadband-container {
            padding: 0px 20px;
        }

        .broadband-perks-row,
        .iptv-features-grid,
        .help-features-grid {
            grid-template-columns: 1fr !important;
            display: flex;
            flex-direction: column;
            gap: 15px;
            padding: 20px 15px;
            width: 90%;
        }

        .broadband-graphic-area {
            width: 100% !important;
            min-height: auto !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            justify-content: center !important;
            position: relative !important;
            left: 0 !important;
            top: 0 !important;
        }

        .broadband-header-imgs1,
        .broadband-header-imgs2 {
            position: relative !important;
            left: 0 !important;
            top: 0 !important;
            margin: 10px 0 !important;
            text-align: center !important;
            width: 100% !important;
        }

        .broadband-header-imgs1 img,
        .broadband-header-imgs2 img {
            max-width: 100% !important;
            height: auto !important;
            margin: 0 auto !important;
        }

        .perk-item,
        .iptv-feat {
            width: 100%;
            align-items: flex-start;
            text-align: left;
        }

        .iptv-img-wrapper {
            width: 100% !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            text-align: center !important;
            margin: 15px auto 0 !important;
            padding: 0 10px !important;
            box-sizing: border-box !important;
        }

        .iptv-img-link {
            display: inline-flex !important;
            justify-content: center !important;
            align-items: center !important;
            width: 100% !important;
            max-width: 440px !important;
            margin: 0 auto !important;
        }

        .iptv-img-link picture {
            width: 100% !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
        }

        .iptv-main-img {
            width: 100% !important;
            max-width: 440px !important;
            height: auto !important;
            max-height: 280px !important;
            object-fit: contain !important;
            margin: 0 auto !important;
            display: block !important;
        }

        .iptv-text {
            width: 100% !important;
            text-align: center !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
        }

        .iptv-text h2 {
            font-size: 26px !important;
            line-height: 1.3 !important;
            text-align: center !important;
            margin-bottom: 12px !important;
        }

        .iptv-text h2 .desktop-br {
            display: none !important;
        }

        .iptv-text p {
            font-size: 14.5px !important;
            line-height: 1.55 !important;
            text-align: center !important;
            margin: 0 auto 20px auto !important;
            max-width: 100% !important;
        }

        .iptv-action-buttons {
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            gap: 12px !important;
            width: 100% !important;
            margin: 0 auto !important;
        }

        .iptv-action-buttons .iptv-explore-btn {
            width: 85% !important;
            max-width: 300px !important;
            justify-content: center !important;
            text-align: center !important;
            box-sizing: border-box !important;
            margin-top: 0 !important;
        }

        .iptv-app-badges {
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 10px !important;
            width: 100% !important;
            margin-top: 24px !important;
        }

        .iptv-app-badges .iptv-app-label {
            width: 100% !important;
            text-align: center !important;
            margin-bottom: 4px !important;
            font-size: 13px !important;
            display: block !important;
        }

        .store-badges-group {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 10px !important;
            width: 100% !important;
            flex-wrap: wrap !important;
        }

        .iptv-app-badges .store-badge-card {
            width: auto !important;
            min-width: 145px !important;
            justify-content: center !important;
            box-sizing: border-box !important;
            padding: 8px 14px !important;
        }

        .switch-banner,
        .news-alert-banner {
            flex-direction: column;
            gap: 20px;
            text-align: center;
            padding: 25px 15px;
            width: 80%;
            justify-self: center;
        }

        .switch-perks {
            flex-direction: column;
            gap: 15px;
        }

        .consultation-banner {
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }

        .consultation-img-box {
            width: 100%;
            height: 120px;
        }

        .consultation-btn {
            width: 80%;
            justify-content: center;
        }

        .ent-choose-banner {
            flex-direction: column;
            gap: 20px;
            text-align: center;
            padding: 20px;
            width: 80%;
            justify-self: center;
        }

        .ent-choose-stats {
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        .premium-ent-card {
            flex-direction: column !important;
            align-items: center !important;
            text-align: center !important;
            padding: 20px 15px !important;
        }

        .sub-banner-image-left {
            position: relative !important;
            width: 100% !important;
            height: 160px !important;
            display: flex !important;
            justify-content: center !important;
            margin-bottom: 15px !important;
        }

        .sub-banner-image-left img {
            max-height: 100% !important;
            width: auto !important;
            object-fit: contain !important;
        }

        .sub-banner-content-right {
            max-width: 100% !important;
            text-align: center !important;
        }


        /* 2. Sports Card: Text pehle, Image niche (column use karenge bina reverse ke) */
        .sports-card {
            flex-direction: column !important;
            /* Yahan column-reverse se hata kar column kar diya hai */
            align-items: center !important;
            text-align: center !important;
            padding: 20px 15px !important;
        }

        .sports-content-area {
            max-width: 100% !important;
            text-align: center !important;
            order: 1 !important;
            /* Text pehle aayega */
        }

        .sports-image-area {
            position: relative !important;
            width: 100% !important;
            height: 160px !important;
            display: flex !important;
            justify-content: center !important;
            margin-bottom: 15px !important;
            margin-top: 10px !important;
            right: auto !important;
            top: auto !important;
            bottom: auto !important;
            order: 2 !important;
            /* Image text ke baad aayegi */
        }

        .sports-image-area img {
            max-height: 100% !important;
            width: auto !important;
            object-fit: contain !important;
        }

        /* Common Badges centering for both cards */
        .sub-badges {
            justify-content: center !important;
        }

        .services-header,
        .news-header-wrapper {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 15px;
        }

        .news-section .service-container {
            flex-direction: column !important;
            position: relative !important;
        }

        .news-img {
            position: relative !important;
            top: 0 !important;
            right: 0 !important;
            width: 100% !important;
            max-width: 570px !important;
            margin: 15px auto !important;
            text-align: center !important;
            display: flex !important;
            justify-content: center !important;
        }

        .news-img img {
            width: 100% !important;
            height: auto !important;
            object-fit: contain !important;
        }

        .news-cards-grid {
            grid-template-columns: 1fr !important;
        }

        .help-contact-grid {
            grid-template-columns: 1fr !important;
        }

        .faq-card-header {
            flex-direction: column !important;
            align-items: flex-start !important;
            gap: 8px !important;
            margin-bottom: 15px !important;
        }

        .faq-card-wrapper {
            padding: 15px 12px !important;
            width: 100% !important;
            box-sizing: border-box !important;
        }

        .faq-question {
            padding: 12px 15px !important;
            font-size: 13px !important;
            gap: 10px !important;
            border-radius: 12px !important;
        }

        .faq-question span {
            display: flex;
            align-items: center;
            gap: 8px;
            flex: 1;
        }

        .faq-question i {
            padding: 0 !important;
            font-size: 16px !important;
            flex-shrink: 0;
        }

        .faq-arrow {
            flex-shrink: 0;
        }

        .final-trust-bar {
            flex-direction: column !important;
            text-align: center !important;
            gap: 20px !important;
            padding: 20px 15px !important;
            width: 95% !important;
            justify-self: center;
            box-sizing: border-box !important;
        }

        .final-stats-row {
            display: flex !important;
            flex-direction: column !important;
            gap: 15px !important;
            width: 100% !important;
        }

        .final-stats-row .perk-item {
            width: 100% !important;
            display: flex !important;
            align-items: center !important;
            justify-content: flex-start !important;
            background: var(--color-white) !important;
            border: 1px solid var(--border-color) !important;
            border-radius: 14px !important;
            padding: 12px 15px !important;
            box-sizing: border-box !important;
            text-align: left !important;
        }
    }

    @media (max-width: 480px) {
        .iptv-img-wrapper {
            margin: 10px auto 0 !important;
            padding: 0 4px !important;
        }

        .iptv-img-link {
            max-width: 100% !important;
        }

        .iptv-main-img {
            max-width: 100% !important;
            max-height: 250px !important;
        }
    }
</style>