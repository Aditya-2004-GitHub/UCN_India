<?php

use Illuminate\Support\Facades\Route;

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
        return view('frontend.iptv.plans');
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
