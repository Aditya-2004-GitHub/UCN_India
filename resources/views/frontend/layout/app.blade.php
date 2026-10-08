<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UCNIndia')</title>

    <!-- CSS Assets / Tailwind / Bootstrap -->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('asset/images/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @stack('styles')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        :root {
            --primary-orange: #fd7001;
            --color-orange-bright: #FF5500;
            --color-blue: #393186;
            --color-light-blue: #0448f4;
            --color-light-bg: #fefefe;
            --color-white: #FFFFFF;
            --color-text-main: #333333;
            --color-text-muted: #525252;
            --border-color: #424040;
            --shadow-subtle: #00000017;
            --bg-purple: #8a2be226;
            --bg-orange: #FFF3EC;
            --bg-light-blue: #0448f426;
            --bg-green:#dfffec;
            --bg-red:#fde9ed;
            --color-purple: #8A2BE2;
            --color-green:#269f7b;
            --color-red:#ff0000;
        }

        html {
            scroll-behavior: smooth;
            overflow-x: hidden;
            max-width: 100%;
            width: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif !important;
            overflow-x: hidden;
            max-width: 100%;
            width: 100%;
        }

        main {
            overflow-x: hidden;
            max-width: 100%;
            width: 100%;
        }

        /* Font Awesome icons ke liye explicit rule taaki font override na ho */
        .fa, .fas, .far, .fab, [class*="fa-"] {
            font-family: "Font Awesome 6 Free", "Font Awesome 6 Brands" !important;
        }

    /* 2. Heavy elements par hardware acceleration enable karein */
    .request-form-card,
    .quick-help-sidebar,
    .product-card-box,
    .sub-banner-card,
    .switch-banner {
        will-change: transform;
        transform: translateZ(0);
        backface-visibility: hidden;
    }

    /* 3. Transition ko 'all' ki jagah sirf specific properties par rakhein */
    .custom-input,
    .custom-textarea,
    .submit-btn,
    .quick-help-item {
        transition: border-color 0.2s ease, box-shadow 0.2s ease, transform 0.2s ease !important;
    }
    </style>
</head>

<body>

    <!-- Include Header -->
    @include('frontend.layout.header')

    <!-- Main Content Section -->
    <main>
        @yield('content')
    </main>

    <!-- Include Footer -->
    @include('frontend.layout.footer')

    <!-- JS Assets -->
    <script src="{{ asset('asset/js/script.js') }}"></script>
    @stack('scripts')

    <script>
        document.getElementById('menuToggle').addEventListener('click', function () {
        const nav = document.getElementById('mainNav');
        nav.classList.toggle('active');
    });
    </script>
</body>

</html>
