<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

/*
|--------------------------------------------------------------------------
| Utility Routes (avoid in production ideally)
|--------------------------------------------------------------------------
*/

Route::get('cache:clear', function () {
    Artisan::call('cache:clear');
    return 'done';
});

Route::get('route:clear', function () {
    Artisan::call('route:clear');
    return 'done';
});

Route::get('config:clear', function () {
    Artisan::call('config:clear');
    return 'done';
});

Route::get('optimize', function () {
    Artisan::call('optimize');
    return 'done';
});

/*
|--------------------------------------------------------------------------
| Main Pages
|--------------------------------------------------------------------------
*/
/* Header Routes*/
Route::get('/find-lco', function () {
    return view('frontend.header-actions.find_lco');
})->name('find_lco');

Route::get('/new-connection', function () {
    return view('frontend.header-actions.new_connection');
})->name('new_connection');

Route::get('/recharge', function () {
    return view('frontend.header-actions.recharge');
})->name('recharge');


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

// Broadband Group Routes
Route::prefix('broadband')->name('broadband.')->group(function () {

    // URL: /broadband/new-connection
    Route::get('/new-connection', function () {
        return view('frontend.broadband.new_connection');
    })->name('new_connection');

    // URL: /broadband/plans
    Route::get('/plans', function () {
        return view('frontend.broadband.plans');
    })->name('plans');

    // URL: /broadband/my-account
    Route::get('/my-account', function () {
        return view('frontend.broadband.my_account');
    })->name('my_account');

    // URL: /broadband/parental-control
    Route::get('/parental-control', function () {
        return view('frontend.broadband.parental_controlparental_control');
    })->name('parental_control');

});

// IPTV Group Routes
Route::prefix('iptv')->name('iptv.')->group(function () {

    // URL: /iptv/plans
    Route::get('/plans', function () {
        $plans = Cache::remember('ucnsmart_iptv_plans', 300, function () {
            try {
                $response = Http::timeout(5)->get('https://ucnsmart.com/api/plans');
                if ($response->successful()) {
                    $json = $response->json();
                    if (!empty($json['data']) && is_array($json['data'])) {
                        return $json['data'];
                    }
                }
            } catch (\Exception $e) {
                Log::warning('Failed to fetch IPTV plans from ucnsmart.com API: ' . $e->getMessage());
            }
            return null;
        });

        if (empty($plans)) {
            $plans = [
                [
                    'id' => 1,
                    'slug' => 'tier-50',
                    'speed' => '50',
                    'speed_unit' => 'Mbps',
                    'speed_display' => '50 Mbps',
                    'base_name' => '50 Mbps Wi-Fi + Satellite Channels',
                    'bundle_name' => '50 Mbps Wi-Fi + Satellite Channels + OTT',
                    'pricing' => [
                        'base_monthly' => 636,
                        'addon_monthly' => 169,
                        'bundle_monthly' => 805,
                        'formatted_base' => '₹636/mo',
                        'formatted_addon' => '₹169/mo',
                        'formatted_bundle' => '₹805/mo'
                    ],
                    'badges' => [
                        'base' => 'BASE PLAN',
                        'bundle' => 'MOST POPULAR • BEST VALUE'
                    ],
                    'features' => [
                        '50 Mbps Unlimited High-Speed Fiber',
                        '400+ Live Satellite Channels in HD',
                        'Free Dual-Band Wi-Fi Router & Setup'
                    ],
                    'otts' => [
                        'count' => 15,
                        'apps' => [
                            ['filename' => 'netflix.webp', 'icon_url' => 'https://ucnsmart.com/OTTs logo/netflix.webp'],
                            ['filename' => 'jiohotstar.webp', 'icon_url' => 'https://ucnsmart.com/OTTs logo/jiohotstar.webp'],
                            ['filename' => 'z5.webp', 'icon_url' => 'https://ucnsmart.com/OTTs logo/z5.webp'],
                            ['filename' => 'sonylive.webp', 'icon_url' => 'https://ucnsmart.com/OTTs logo/sonylive.webp'],
                        ]
                    ]
                ],
                [
                    'id' => 2,
                    'slug' => 'tier-100',
                    'speed' => '100',
                    'speed_unit' => 'Mbps',
                    'speed_display' => '100 Mbps',
                    'base_name' => '100 Mbps Wi-Fi + Satellite Channels',
                    'bundle_name' => '100 Mbps Wi-Fi + Satellite Channels + OTT',
                    'pricing' => [
                        'base_monthly' => 763,
                        'addon_monthly' => 169,
                        'bundle_monthly' => 932,
                        'formatted_base' => '₹763/mo',
                        'formatted_addon' => '₹169/mo',
                        'formatted_bundle' => '₹932/mo'
                    ],
                    'badges' => [
                        'base' => 'PRO FIBER',
                        'bundle' => 'ULTIMATE ENTERTAINMENT'
                    ],
                    'features' => [
                        '100 Mbps Ultra-Fast Fiber Internet',
                        '400+ Live Satellite Channels in HD',
                        '4K Ultra HD & Multi-Device Streaming'
                    ],
                    'otts' => [
                        'count' => 14,
                        'apps' => [
                            ['filename' => 'netflix.webp', 'icon_url' => 'https://ucnsmart.com/OTTs logo/netflix.webp'],
                            ['filename' => 'jiohotstar.webp', 'icon_url' => 'https://ucnsmart.com/OTTs logo/jiohotstar.webp'],
                            ['filename' => 'z5.webp', 'icon_url' => 'https://ucnsmart.com/OTTs logo/z5.webp'],
                            ['filename' => 'sonylive.webp', 'icon_url' => 'https://ucnsmart.com/OTTs logo/sonylive.webp'],
                        ]
                    ]
                ]
            ];
        }

        return view('frontend.iptv.plans', compact('plans'));
    })->name('plans');

    Route::get('/live-tv-channels', function () {
        return view('frontend.iptv.live-tv-channels');
    })->name('live-tv-channels');

    Route::get('/set-top-box', function () {
        return view('frontend.iptv.set-top-box');
    })->name('set-top-box');

});

// Digital TV Group Routes
Route::prefix('digital-tv')->name('digitaltv.')->group(function () {

    // URL: /digital-tv/new-connection
    Route::get('/new-connection', function () {
        return view('frontend.digital-tv.new-connection');
    })->name('new_connection');

    // URL: /digital-tv/products
    Route::get('/products', function () {
        return view('frontend.digital-tv.products');
    })->name('products');

    // URL: /digital-tv/local-channels
    Route::get('/local-channels', function () {
        return view('frontend.digital-tv.local-channels');
    })->name('local_channels');

});

// URL: /help-support
Route::prefix('help-support')->name('help.')->group(function () {

    Route::get('/complaints', function () {
        return view('frontend.help-support.complaints');
    })->name('complaints');

    Route::get('/helpdesk', function () {
        return view('frontend.help-support.helpdesk');
    })->name('helpdesk');

    Route::get('/upgradetohd', function () {
        return view('frontend.help-support.upgradetohd');
    })->name('upgradetohd');

});

// PDF Routes (Already working)
Route::get('/pdf/subscriber-form-caf', function () {
    return response()->file(public_path('asset/pdf/subscriber-form-caf.pdf'));
})->name('pdf.subscriber-form-caf');

Route::get('/pdf/ucn-suggested-packages', function () {
    return response()->file(public_path('asset/pdf/ucn-suggested-packages.pdf'));
})->name('pdf.ucn-suggested-packages');

Route::get('/pdf/iptv-channels', function () {
    return response()->file(public_path('asset/pdf/iptv-channels.pdf'));
})->name('pdf.iptv-channels');

Route::get('/pdf/network-capacity-fees', function () {
    return response()->file(public_path('asset/pdf/network-capacity-fees.pdf'));
})->name('pdf.network-capacity-fees');

Route::get('/pdf/package-request-form', function () {
    return response()->file(public_path('asset/pdf/package-request-form.pdf'));
})->name('pdf.package-request-form');


// Enterprises Static Pages Routes (Without Controller)
Route::prefix('enterprises')->group(function () {
    Route::get('/online-registration', function () {
        return view('frontend.enterprises.online-registration');
    })->name('enterprises.registration');

    Route::get('/subscriber-corner', function () {
        return view('frontend.enterprises.subscriber-corner');
    })->name('enterprises.subscriber-corner');

    Route::get('/broadcasters-packages', function () {
        return view('frontend.enterprises.broadcasters-packages');
    })->name('enterprises.broadcasters-packages');

    Route::get('/fta-channels', function () {
        return view('frontend.enterprises.fta-channels');
    })->name('enterprises.fta-channels');

    Route::get('/stb-scheme', function () {
        return view('frontend.enterprises.stb-scheme');
    })->name('enterprises.stb-scheme');

    Route::get('/faqs', function () {
        return redirect('/#faqs');
    })->name('enterprises.faqs');
});
/*
|--------------------------------------------------------------------------
| Footer Pages & PDF Routes
|--------------------------------------------------------------------------
*/

// PDF Direct Open Routes (Public folder ya storage se PDF link karne ke liye)
Route::get('/pdf/manual-of-practice', function () {
    return response()->file(public_path('asset/pdf/manual-of-practices.pdf'));
})->name('pdf.manual_practice');

Route::get('/pdf/internet-application-form', function () {
    return response()->file(public_path('asset/pdf/internet-application-form.pdf'));
})->name('pdf.application_form');

// Footer Informational Pages Group
Route::prefix('footer')->name('footer.')->group(function () {
    Route::get('/advertise-with-us', function () { return view('frontend.footer.advertise'); })->name('advertise');
    Route::get('/terms-and-conditions', function () { return view('frontend.footer.terms'); })->name('terms');
    Route::get('/compliances', function () { return view('frontend.footer.compliances'); })->name('compliances');
    Route::get('/privacy-policy', function () { return view('frontend.footer.privacy'); })->name('privacy');
    Route::get('/service-quality', function () { return view('frontend.footer.service_quality'); })->name('service_quality');
    Route::get('/work-with-us', function () { return view('frontend.footer.work_with_us'); })->name('work_with_us');
    Route::get('/contact-us', function () { return view('frontend.footer.contact_us'); })->name('contact_us');
    Route::get('/careers', function () { return view('frontend.footer.careers'); })->name('careers');
    Route::get('/refund-policy', function () { return view('frontend.footer.refund_policy'); })->name('refund_policy');
    Route::get('/fair-usage-policy', function () { return view('frontend.footer.fair_usage_policy'); })->name('fair_usage_policy');
});
