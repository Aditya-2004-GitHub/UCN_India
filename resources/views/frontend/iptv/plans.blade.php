@extends('frontend.layout.app')

@section('title', 'UCN India - UCN Smart TV & IPTV Plans')

@section('content')
<div class="packages-page-wrapper">
    <!-- Hero Section -->
    <section class="packages-hero-section">
        <div class="container-fluid packages-container packages-hero-flex">
            <div>
                <div class="packages-breadcrumb">
                    <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 0.725rem;"></i>
                    <span>IPTV</span> <i class="fa-solid fa-angle-right" style="font-size: 0.725rem;"></i>
                    <span>Smart TV Plans</span>
                </div>
                <h1>All-in-One High Speed Fiber & <span class="highlight-orange"><br/>Smart TV Plans</span></h1>
                <p class="hero-subtitle">
                    Stream 400+ Live Satellite TV Channels in HD & 4K with 25+ Premium OTT apps directly on your Smart TV with 100% Boxless convenience!
                </p>
                <div class="hero-bottom-line"></div>
            </div>
            <div class="upgrade-hero-graphic">
                <img src="{{ asset('asset/images/iptv/plans.png') }}" alt="UCN Smart TV Plans Graphic" class="upgrade-hero-img">
            </div>
        </div>
    </section>

    <!-- Plans Content Section -->
    <section class="packages-content-section">
        <div class="container-fluid packages-container">

            <div class="section-title-wrap">
                <span class="sub-heading-orange">UCN SMART ENTERTAINMENT BUNDLES</span>
                <h2>Popular Smart TV & IPTV <span class="highlight-orange">Subscription Plans</span></h2>
                <p>
                    Experience ultra-fast Wi-Fi, 400+ Live Satellite TV Channels, and up to 25+ Premium OTT apps in a single, transparent subscription.
                </p>
            </div>

            <!-- 2-Column Centered Plans Grid -->
            <div class="plans-grid-iptv" id="iptvPlansContainer">
                @foreach($plans as $index => $plan)
                    @php
                        $slug = $plan['slug'] ?? ('tier-' . ($plan['speed'] ?? ($index + 1)));
                        $speedDisplay = $plan['speed_display'] ?? (($plan['speed'] ?? '') . ' ' . ($plan['speed_unit'] ?? 'Mbps'));
                        $priceBase = (int)($plan['pricing']['base_monthly'] ?? 0);
                        $priceAddon = (int)($plan['pricing']['addon_monthly'] ?? 169);
                        $priceBundle = (int)($plan['pricing']['bundle_monthly'] ?? ($priceBase + $priceAddon));
                        $baseName = $plan['base_name'] ?? ($speedDisplay . ' Wi-Fi + Satellite Channels');
                        $bundleName = $plan['bundle_name'] ?? ($speedDisplay . ' Wi-Fi + Satellite Channels + OTT');
                        $badgeBase = $plan['badges']['base'] ?? 'BASE PLAN';
                        $badgeBundle = $plan['badges']['bundle'] ?? 'MOST POPULAR • BEST VALUE';
                        
                        // By default, keep all OTT addons unselected as requested
                        $isPopular = ($index === 1);
                        $hasOtt = false;
                        $currentPrice = $priceBase;
                        $currentTitle = $baseName;
                        
                        $ottApps = $plan['otts']['apps'] ?? [];
                        $ottCount = $plan['otts']['count'] ?? (count($ottApps) > 0 ? count($ottApps) : 25);
                        $previewOtts = array_slice($ottApps, 0, 4);

                        $features = $plan['features'] ?? [];
                        $extraPerks = [
                            'Free Dual-Band Wi-Fi Router & Setup',
                            '100% Boxless TV (No Set-Top Box Needed)',
                            '1 Smart TV + Mobile App Access'
                        ];
                        foreach ($extraPerks as $perk) {
                            if (count($features) >= 5) break;
                            $keyword = explode(' ', $perk)[1] ?? $perk;
                            $found = false;
                            foreach ($features as $f) {
                                if (stripos($f, $keyword) !== false) {
                                    $found = true;
                                    break;
                                }
                            }
                            if (!$found) {
                                $features[] = $perk;
                            }
                        }
                    @endphp

                    <div class="smart-plan-card {{ $isPopular ? 'popular-card' : '' }} {{ $hasOtt ? 'has-ott-active' : '' }}" id="card-{{ $slug }}">
                        <div class="tier-card-badge-wrap">
                            @if($hasOtt)
                                <span class="tier-badge badge-popular" id="badge-{{ $slug }}">
                                    <i class="fa-solid fa-star me-1"></i> {{ $badgeBundle }}
                                </span>
                            @else
                                <span class="tier-badge badge-base" id="badge-{{ $slug }}">{{ $badgeBase }}</span>
                            @endif
                        </div>

                        <div class="tier-card-header">
                            <div class="tier-speed-pill">
                                <i class="fa-solid fa-gauge-high"></i>
                                <span>{{ $speedDisplay }}</span>
                            </div>
                            <div class="tier-price-box">
                                <span class="tier-price-curr">₹</span>
                                <span class="tier-price-val" id="price-val-{{ $slug }}">{{ $currentPrice }}</span>
                                <span class="tier-price-cycle">/-month</span>
                            </div>
                        </div>

                        <h3 class="tier-plan-title" id="title-{{ $slug }}">{{ $currentTitle }}</h3>
                        <p class="plan-desc">
                            @if($index === 0)
                                Unlimited high-speed fiber paired with live satellite entertainment for everyday family enjoyment.
                            @else
                                Ultra-fast fiber designed for bufferless 4K streaming, multi-device homes & full OTT binge-watching.
                            @endif
                        </p>

                        <!-- Base Inclusions -->
                        <div class="tier-base-inclusions">
                            <div class="inclusions-heading">
                                <i class="fa-solid fa-circle-check"></i>
                                <span>BASE PLAN INCLUDES:</span>
                            </div>
                            <ul class="inclusions-list">
                                @foreach($features as $feature)
                                    <li><i class="fa-solid fa-check"></i> <span>{{ $feature }}</span></li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Interactive OTT Add-on Box -->
                        <div class="tier-ott-addon-box {{ $hasOtt ? 'addon-selected' : '' }}" 
                             id="addon-box-{{ $slug }}" 
                             onclick="togglePlanTier('{{ $slug }}')"
                             role="button"
                             tabindex="0"
                             onkeydown="if(event.key==='Enter'||event.key===' '){event.preventDefault();togglePlanTier('{{ $slug }}');}"
                             aria-label="Add {{ $ottCount }}+ Premium OTT Apps for ₹{{ $priceAddon }} per month">
                            
                            <div class="addon-header-row">
                                <div class="addon-title-group">
                                    <div class="addon-checkbox-custom {{ $hasOtt ? 'checked' : '' }}" id="addon-check-{{ $slug }}">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <div class="addon-title-text">
                                        <span class="addon-main-title">Add 25+ Premium OTT Apps</span>
                                        <span class="addon-subtitle">Netflix, Hotstar, ZEE5, Sony LIV & more</span>
                                    </div>
                                </div>
                                <div class="addon-price-badge {{ $hasOtt ? 'badge-added' : '' }}" id="addon-badge-{{ $slug }}">
                                    {{ $hasOtt ? '✓ ADDED (+₹' . $priceAddon . ')' : '+₹' . $priceAddon . '/mo' }}
                                </div>
                            </div>

                            <div class="addon-ott-preview">
                                <div class="plan-ott-circles-stack {{ $hasOtt ? 'active-otts' : '' }}" id="ott-circles-{{ $slug }}">
                                    @foreach($previewOtts as $app)
                                        @php
                                            $appName = pathinfo($app['filename'] ?? '', PATHINFO_FILENAME);
                                            $fallbackLocal = asset('asset/images/iptv/otts/' . ($app['filename'] ?? 'netflix.webp'));
                                            $iconUrl = !empty($app['icon_url']) ? $app['icon_url'] : $fallbackLocal;
                                        @endphp
                                        <div class="ott-circle-avatar" title="{{ ucfirst($appName) }}">
                                            <img src="{{ $iconUrl }}" alt="{{ $appName }}" loading="lazy" onerror="this.src='{{ $fallbackLocal }}'">
                                        </div>
                                    @endforeach
                                    <div class="ott-circle-avatar plus-circle" title="25+ OTT Apps">
                                        <span>25+</span>
                                    </div>
                                </div>
                                <div class="addon-status-text {{ $hasOtt ? 'active' : '' }}" id="addon-status-{{ $slug }}">
                                    {{ $hasOtt ? 'Full OTT Bundle Unlocked (25+ Apps)' : 'Tap to include 25+ OTTs for only ₹' . $priceAddon . ' more' }}
                                </div>
                            </div>
                        </div>

                        <!-- Price Breakdown Bar -->
                        <div class="tier-breakdown-bar" id="breakdown-{{ $slug }}">
                            @if($hasOtt)
                                <span>₹{{ $priceBase }} Base + ₹{{ $priceAddon }} OTT = <strong>₹{{ $priceBundle }}/mo</strong> + GST</span>
                            @else
                                <span>Base Plan: <strong>₹{{ $priceBase }}/mo</strong> + GST (No OTTs)</span>
                            @endif
                        </div>

                        <!-- Footer Action -->
                        <div class="plan-card-footer">
                            <a href="https://ucnsmart.com/?connect=1&source=qr" target="_blank" class="tier-cta-btn {{ $hasOtt ? 'btn-bundle-active' : '' }}" id="cta-{{ $slug }}">
                                <span id="cta-text-{{ $slug }}">
                                    {{ $hasOtt ? 'Subscribe with OTTs (₹' . $priceBundle . '/mo)' : 'Select Base Plan (₹' . $priceBase . '/mo)' }}
                                </span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Bottom UCN Smart Switch / Portal Banner -->
            <div class="switch-banner iptv-perks-banner">
                <div class="switch-left">
                    <h3>Experience 100% Boxless Live TV with UCN Smart</h3>
                    <p>Stream 400+ live satellite channels & 25+ OTT apps directly inside the UCN Smart TV App with zero box deposit.</p>
                </div>
                <div class="switch-perks">
                    <div class="s-perk"><i class="fa-solid fa-tv"></i> Boxless TV <span>Zero Physical Hardware</span></div>
                    <div class="s-perk"><i class="fa-solid fa-bolt"></i> Ultra Fast Fiber <span>Zero Buffering & Lag</span></div>
                </div>
                <div>
                    <a href="https://ucnsmart.com/?connect=1&source=qr" target="_blank" class="btn-primary-orange">
                        Visit UCN Smart Portal <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>
</div>

<!-- Interactive Tier Toggle JavaScript -->
<script>
    const planTiersData = {
        @foreach($plans as $index => $plan)
            @php
                $slug = $plan['slug'] ?? ('tier-' . ($plan['speed'] ?? ($index + 1)));
                $priceBase = (int)($plan['pricing']['base_monthly'] ?? 0);
                $priceAddon = (int)($plan['pricing']['addon_monthly'] ?? 169);
                $priceBundle = (int)($plan['pricing']['bundle_monthly'] ?? ($priceBase + $priceAddon));
                $baseName = $plan['base_name'] ?? (($plan['speed_display'] ?? '') . ' Wi-Fi + Satellite Channels');
                $bundleName = $plan['bundle_name'] ?? (($plan['speed_display'] ?? '') . ' Wi-Fi + Satellite Channels + OTT');
                $badgeBase = $plan['badges']['base'] ?? 'BASE PLAN';
                $badgeBundle = $plan['badges']['bundle'] ?? 'MOST POPULAR • BEST VALUE';
                $isPopular = ($index === 1) || (isset($plan['badges']['bundle']) && str_contains(strtoupper($plan['badges']['bundle']), 'POPULAR'));
            @endphp
            '{{ $slug }}': {
                id: '{{ $slug }}',
                priceBase: {{ $priceBase }},
                priceAddon: {{ $priceAddon }},
                priceBundle: {{ $priceBundle }},
                baseName: {!! json_encode($baseName) !!},
                bundleName: {!! json_encode($bundleName) !!},
                badgeBase: {!! json_encode($badgeBase) !!},
                badgeBundle: {!! json_encode($badgeBundle) !!},
                hasOtt: false
            },
        @endforeach
    };

    function togglePlanTier(tierId) {
        const tier = planTiersData[tierId];
        if (!tier) return;
        tier.hasOtt = !tier.hasOtt;
        renderPlanTier(tier);
    }

    function renderPlanTier(tier) {
        const card = document.getElementById(`card-${tier.id}`);
        const badge = document.getElementById(`badge-${tier.id}`);
        const priceVal = document.getElementById(`price-val-${tier.id}`);
        const title = document.getElementById(`title-${tier.id}`);
        const addonBox = document.getElementById(`addon-box-${tier.id}`);
        const addonCheck = document.getElementById(`addon-check-${tier.id}`);
        const addonBadge = document.getElementById(`addon-badge-${tier.id}`);
        const addonStatus = document.getElementById(`addon-status-${tier.id}`);
        const ottCircles = document.getElementById(`ott-circles-${tier.id}`);
        const breakdown = document.getElementById(`breakdown-${tier.id}`);
        const cta = document.getElementById(`cta-${tier.id}`);
        const ctaText = document.getElementById(`cta-text-${tier.id}`);

        if (!card) return;

        if (tier.hasOtt) {
            card.classList.add('has-ott-active');
            if (badge) {
                badge.className = 'tier-badge badge-popular';
                badge.innerHTML = `<i class="fa-solid fa-star me-1"></i> ${tier.badgeBundle}`;
            }
            if (priceVal) priceVal.textContent = tier.priceBundle;
            if (title) title.textContent = tier.bundleName;
            if (addonBox) addonBox.classList.add('addon-selected');
            if (addonCheck) addonCheck.classList.add('checked');
            if (addonBadge) {
                addonBadge.className = 'addon-price-badge badge-added';
                addonBadge.textContent = `✓ ADDED (+₹${tier.priceAddon})`;
            }
            if (addonStatus) {
                addonStatus.className = 'addon-status-text active';
                addonStatus.textContent = 'Full OTT Bundle Unlocked (25+ Apps)';
            }
            if (ottCircles) ottCircles.classList.add('active-otts');
            if (breakdown) {
                breakdown.innerHTML = `<span>₹${tier.priceBase} Base + ₹${tier.priceAddon} OTT = <strong>₹${tier.priceBundle}/mo</strong> + GST</span>`;
            }
            if (cta) cta.classList.add('btn-bundle-active');
            if (ctaText) ctaText.textContent = `Subscribe with OTTs (₹${tier.priceBundle}/mo)`;
        } else {
            card.classList.remove('has-ott-active');
            if (badge) {
                badge.className = 'tier-badge badge-base';
                badge.textContent = tier.badgeBase;
            }
            if (priceVal) priceVal.textContent = tier.priceBase;
            if (title) title.textContent = tier.baseName;
            if (addonBox) addonBox.classList.remove('addon-selected');
            if (addonCheck) addonCheck.classList.remove('checked');
            if (addonBadge) {
                addonBadge.className = 'addon-price-badge';
                addonBadge.textContent = `+₹${tier.priceAddon}/mo`;
            }
            if (addonStatus) {
                addonStatus.className = 'addon-status-text';
                addonStatus.textContent = `Tap to include 25+ OTTs for only ₹${tier.priceAddon} more`;
            }
            if (ottCircles) ottCircles.classList.remove('active-otts');
            if (breakdown) {
                breakdown.innerHTML = `<span>Base Plan: <strong>₹${tier.priceBase}/mo</strong> + GST (No OTTs)</span>`;
            }
            if (cta) cta.classList.remove('btn-bundle-active');
            if (ctaText) ctaText.textContent = `Select Base Plan (₹${tier.priceBase}/mo)`;
        }
    }
</script>

<style>
    /* Strict Box-Sizing & Layout Isolation */
    .packages-page-wrapper,
    .packages-page-wrapper *,
    .packages-page-wrapper *::before,
    .packages-page-wrapper *::after {
        box-sizing: border-box !important;
    }

    .packages-page-wrapper {
        background: #F8FAFC;
        min-height: 80vh;
        padding-bottom: 70px;
        font-family: 'Poppins', sans-serif;
    }

    .packages-container {
        max-width: 1250px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 30px !important;
    }

    .packages-hero-section {
        padding: 50px 0 40px;
        background-image: url('{{ asset("asset/images/enterprises/bg-img.png") }}'),
        linear-gradient(to bottom, var(--color-white), var(--bg-light-blue, #F1F5F9));
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover, cover;
        border-bottom: 1px solid #E2E8F0;
        margin-bottom: 45px;
        display: flex;
        align-items: center;
    }

    .packages-hero-flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .packages-breadcrumb {
        font-size: 0.975rem;
        color: #64748B;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .packages-breadcrumb a {
        color: var(--primary-orange);
        text-decoration: none;
        font-weight: 500;
    }

    .packages-hero-section h1 {
        font-size: 2.475rem;
        font-weight: 800;
        color: #1E293B;
        margin-bottom: 12px;
        line-height: 1.25;
    }

    .highlight-orange {
        color: var(--primary-orange);
    }

    .hero-subtitle {
        font-size: 1.0375rem;
        color: #64748B;
        max-width: 600px;
        line-height: 1.6;
        margin-bottom: 0;
    }

    .hero-bottom-line {
        width: 55px;
        height: 3px;
        margin-top: 15px;
        background: linear-gradient(to right, var(--color-blue), var(--primary-orange));
        border-radius: 2px;
    }

    .upgrade-hero-graphic {
        width: 420px;
        height: 250px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .upgrade-hero-img {
        max-width: 100%;
        max-height: 280px;
        object-fit: contain;
    }

    .section-title-wrap {
        text-align: center;
        max-width: 720px;
        margin: 0 auto 45px auto;
    }

    .sub-heading-orange {
        font-size: 0.9125rem;
        font-weight: 800;
        color: var(--primary-orange);
        letter-spacing: 1.2px;
        display: block;
        margin-bottom: 8px;
        text-transform: uppercase;
    }

    .section-title-wrap h2 {
        font-size: 2.1rem;
        font-weight: 800;
        color: #1E293B;
        margin-bottom: 12px;
    }

    .section-title-wrap p {
        font-size: 1.0375rem;
        color: #64748B;
        line-height: 1.6;
    }

    /* 2-Column Centered Plans Grid */
    .plans-grid-iptv {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 32px;
        max-width: 1140px;
        margin: 0 auto 50px auto;
        align-items: stretch;
    }

    /* Smart Plan Card */
    .smart-plan-card {
        background: #FFFFFF;
        border: 2px solid #E2E8F0;
        border-radius: 22px;
        padding: 34px 28px 28px;
        position: relative;
        box-shadow: 0 4px 22px rgba(0, 0, 0, 0.04);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s ease, box-shadow 0.3s ease;
        box-sizing: border-box !important;
        width: 100%;
    }

    .smart-plan-card:hover {
        border-color: var(--primary-orange);
        transform: translateY(-5px);
        box-shadow: 0 14px 34px rgba(253, 112, 1, 0.08);
    }

    .smart-plan-card.popular-card {
        border-color: var(--primary-orange);
        background: #FFFFFF;
        box-shadow: 0 8px 30px rgba(253, 112, 1, 0.09);
    }

    .smart-plan-card.has-ott-active {
        border-color: var(--primary-orange);
        box-shadow: 0 10px 32px rgba(253, 112, 1, 0.12);
    }

    /* Top Badge */
    .tier-card-badge-wrap {
        position: absolute;
        top: -13px;
        right: 24px;
        z-index: 5;
    }

    .tier-badge {
        font-size: 0.7875rem;
        font-weight: 800;
        letter-spacing: 0.6px;
        padding: 5px 14px;
        border-radius: 20px;
        text-transform: uppercase;
        display: inline-flex;
        align-items: center;
        white-space: nowrap;
        transition: all 0.25s ease;
    }

    .tier-badge.badge-base {
        background: #F1F5F9;
        border: 1px solid #CBD5E1;
        color: #475569;
    }

    .tier-badge.badge-popular {
        background: linear-gradient(135deg, var(--primary-orange), #FF851A);
        color: #FFFFFF;
        border: none;
        box-shadow: 0 3px 12px rgba(253, 112, 1, 0.35);
    }

    /* Header: Speed Pill & Price */
    .tier-card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 14px;
    }

    .tier-speed-pill {
        font-size: 0.9125rem;
        font-weight: 700;
        color: var(--primary-orange);
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(253, 112, 1, 0.08);
        padding: 5px 13px;
        border-radius: 20px;
        border: 1px solid rgba(253, 112, 1, 0.25);
    }

    .tier-price-box {
        display: flex;
        align-items: baseline;
    }

    .tier-price-curr {
        font-size: 1.35rem;
        font-weight: 700;
        color: #1E293B;
        margin-right: 2px;
    }

    .tier-price-val {
        font-size: 2.1rem;
        font-weight: 800;
        color: #1E293B;
        line-height: 1;
        transition: color 0.2s ease;
    }

    .tier-price-cycle {
        font-size: 0.85rem;
        color: #64748B;
        margin-left: 3px;
        font-weight: 500;
    }

    /* Plan Title & Desc */
    .tier-plan-title {
        font-size: 1.225rem;
        font-weight: 700;
        color: #1E293B;
        margin-top: 4px;
        margin-bottom: 6px;
        line-height: 1.35;
        min-height: 2.7em;
        display: flex;
        align-items: center;
    }

    .plan-desc {
        font-size: 0.9125rem;
        color: #64748B;
        line-height: 1.5;
        margin-bottom: 18px;
    }

    /* Base Inclusions Box */
    .tier-base-inclusions {
        background: #F8FAFC;
        border: 1px solid #E2E8F0;
        border-radius: 14px;
        padding: 14px 16px;
        margin-bottom: 18px;
    }

    .inclusions-heading {
        font-size: 0.7875rem;
        font-weight: 800;
        letter-spacing: 0.6px;
        color: #64748B;
        text-transform: uppercase;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .inclusions-heading i {
        color: var(--primary-orange);
    }

    .inclusions-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .inclusions-list li {
        font-size: 0.9125rem;
        color: #334155;
        display: flex;
        align-items: center;
        gap: 8px;
        line-height: 1.35;
        font-weight: 500;
    }

    .inclusions-list li i {
        color: var(--primary-orange);
        font-size: 0.85rem;
        flex-shrink: 0;
    }

    /* Add-on Box */
    .tier-ott-addon-box {
        background: #F8FAFC;
        border: 1.5px dashed #CBD5E1;
        border-radius: 14px;
        padding: 14px 16px;
        margin-bottom: 16px;
        cursor: pointer;
        transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        user-select: none;
        box-sizing: border-box !important;
        width: 100%;
    }

    .tier-ott-addon-box:hover {
        background: rgba(253, 112, 1, 0.04);
        border-color: rgba(253, 112, 1, 0.45);
        transform: translateY(-2px);
    }

    .tier-ott-addon-box.addon-selected {
        background: linear-gradient(135deg, rgba(253, 112, 1, 0.08), rgba(253, 112, 1, 0.02));
        border: 1.5px solid var(--primary-orange);
        box-shadow: 0 4px 15px rgba(253, 112, 1, 0.1);
    }

    .addon-header-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        margin-bottom: 10px;
    }

    .addon-title-group {
        display: flex;
        align-items: center;
        gap: 10px;
        min-width: 0;
    }

    .addon-checkbox-custom {
        width: 24px;
        height: 24px;
        border-radius: 6px;
        border: 2px solid #CBD5E1;
        background: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.85rem;
        color: transparent;
        transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
        flex-shrink: 0;
    }

    .addon-checkbox-custom.checked {
        background: var(--primary-orange);
        border-color: var(--primary-orange);
        color: #FFFFFF;
        box-shadow: 0 2px 8px rgba(253, 112, 1, 0.4);
        transform: scale(1.05);
    }

    .addon-title-text {
        display: flex;
        flex-direction: column;
        min-width: 0;
    }

    .addon-main-title {
        font-size: 0.9125rem;
        font-weight: 700;
        color: #1E293B;
        white-space: nowrap;
    }

    .addon-subtitle {
        font-size: 0.7875rem;
        color: #64748B;
        margin-top: 1px;
    }

    .addon-price-badge {
        font-size: 0.85rem;
        font-weight: 800;
        padding: 4px 10px;
        border-radius: 16px;
        white-space: nowrap;
        background: rgba(253, 112, 1, 0.1);
        border: 1px solid rgba(253, 112, 1, 0.25);
        color: var(--primary-orange);
        transition: all 0.25s ease;
        flex-shrink: 0;
    }

    .addon-price-badge.badge-added {
        background: #10B981;
        border-color: #10B981;
        color: #FFFFFF;
        box-shadow: 0 2px 8px rgba(16, 185, 129, 0.3);
    }

    .addon-ott-preview {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        padding-top: 8px;
        border-top: 1px solid #E2E8F0;
    }

    .plan-ott-circles-stack {
        display: flex;
        align-items: center;
        transition: opacity 0.25s ease;
    }

    .plan-ott-circles-stack:not(.active-otts) {
        opacity: 0.65;
        filter: grayscale(40%);
    }

    .plan-ott-circles-stack.active-otts {
        opacity: 1;
        filter: none;
    }

    .ott-circle-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: #FFFFFF;
        border: 2px solid #E2E8F0;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: -8px;
        position: relative;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
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
        background: linear-gradient(135deg, var(--primary-orange), #FF851A);
        color: #FFFFFF;
        font-weight: 800;
        font-size: 0.725rem;
        border-color: #FFFFFF;
        z-index: 6;
    }

    .addon-status-text {
        font-size: 0.7875rem;
        font-weight: 500;
        color: #64748B;
        text-align: right;
        line-height: 1.3;
        transition: color 0.2s ease;
        white-space: nowrap;
    }

    .addon-status-text.active {
        color: var(--primary-orange);
        font-weight: 700;
    }

    /* Breakdown Bar */
    .tier-breakdown-bar {
        font-size: 0.85rem;
        color: #64748B;
        background: #F8FAFC;
        padding: 9px 12px;
        border-radius: 10px;
        margin-bottom: 16px;
        text-align: center;
        border: 1px solid #E2E8F0;
        box-sizing: border-box !important;
        width: 100%;
    }

    .tier-breakdown-bar strong {
        color: #1E293B;
    }

    /* Card Footer & CTA Button - Strictly Contained */
    .plan-card-footer {
        margin-top: auto;
        padding-top: 10px;
        width: 100%;
        box-sizing: border-box !important;
    }

    .tier-cta-btn {
        width: 100% !important;
        max-width: 100% !important;
        box-sizing: border-box !important;
        margin: 0 !important;
        padding: 13px 18px;
        font-size: 0.975rem;
        font-weight: 700;
        color: var(--primary-orange) !important;
        background: rgba(253, 112, 1, 0.06);
        border: 1.5px solid var(--primary-orange);
        border-radius: 12px;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        cursor: pointer;
    }

    .tier-cta-btn:hover {
        background: var(--primary-orange);
        color: #FFFFFF !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(253, 112, 1, 0.3);
    }

    .tier-cta-btn.btn-bundle-active {
        background: linear-gradient(135deg, var(--primary-orange), #FF851A) !important;
        color: #FFFFFF !important;
        border: 1.5px solid var(--primary-orange) !important;
        box-shadow: 0 4px 16px rgba(253, 112, 1, 0.28);
    }

    .tier-cta-btn.btn-bundle-active:hover {
        background: linear-gradient(135deg, #E65C00, #FD7001) !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 22px rgba(253, 112, 1, 0.4);
    }

    /* Switch Banner */
    .switch-banner {
        background: linear-gradient(135deg, #FFFFFF 0%, #FFF8F3 100%);
        border: 1.5px solid #FFEDD5;
        border-radius: 20px;
        padding: 30px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 18px rgba(253, 112, 1, 0.05);
        margin-top: 40px;
        box-sizing: border-box !important;
    }

    .switch-left h3 {
        font-size: 1.35rem;
        font-weight: 800;
        color: #1E293B;
        margin-bottom: 6px;
    }

    .switch-left p {
        font-size: 0.975rem;
        color: #64748B;
        margin: 0;
        max-width: 600px;
    }

    .switch-perks {
        display: flex;
        gap: 28px;
    }

    .s-perk {
        font-size: 1.0375rem;
        font-weight: 700;
        color: #1E293B;
    }

    .s-perk i {
        color: var(--primary-orange);
        margin-right: 6px;
        font-size: 1.35rem;
    }

    .s-perk span {
        display: block;
        font-size: 0.85rem;
        font-weight: 400;
        color: #64748B;
        margin-top: 2px;
    }

    .btn-primary-orange {
        background: linear-gradient(135deg, var(--primary-orange), #FF851A);
        color: #FFFFFF;
        padding: 13px 26px;
        border-radius: 30px;
        text-decoration: none;
        font-size: 0.975rem;
        font-weight: 700;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        white-space: nowrap;
        box-shadow: 0 4px 14px rgba(253, 112, 1, 0.3);
        transition: all 0.25s ease;
    }

    .btn-primary-orange:hover {
        background: linear-gradient(135deg, #E65C00, var(--primary-orange));
        color: #FFFFFF;
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(253, 112, 1, 0.4);
    }

    /* Responsive */
    @media (max-width: 991px) {
        .plans-grid-iptv {
            grid-template-columns: 1fr;
            max-width: 540px;
        }
        .packages-hero-flex {
            flex-direction: column;
            text-align: center;
            gap: 25px;
        }
        .hero-subtitle,
        .hero-bottom-line {
            margin: 0 auto;
        }
        .hero-bottom-line {
            margin-top: 15px;
        }
        .upgrade-hero-graphic {
            justify-content: center;
            width: 100%;
        }
        .switch-banner {
            flex-direction: column;
            gap: 22px;
            text-align: center;
            padding: 28px 20px;
        }
        .switch-perks {
            justify-content: center;
            flex-wrap: wrap;
        }
    }

    @media (max-width: 768px) {
        .packages-container {
            padding: 0 16px !important;
            width: 100%;
        }
        .packages-hero-section h1 {
            font-size: 1.85rem;
        }
        .section-title-wrap h2 {
            font-size: 1.6rem;
        }
        .smart-plan-card {
            padding: 30px 20px 22px;
        }
        .switch-perks {
            flex-direction: column;
            gap: 14px;
        }
    }

    @media (max-width: 480px) {
        .addon-main-title,
        .addon-status-text {
            white-space: normal;
        }
        .addon-header-row {
            flex-wrap: wrap;
        }
    }
</style>
@endsection
