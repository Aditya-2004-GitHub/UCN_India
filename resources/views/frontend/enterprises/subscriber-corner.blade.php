@extends('frontend.layout.app')

@section('title', 'UCN India - User Login')

@section('content')
<div class="login-page-wrapper">
    <!-- Hero Banner / Breadcrumb Section -->
    <section class="login-hero-section">
        <div class="container-fluid login-container">
            <div class="login-breadcrumb">
                <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                <span>Consumer Corner</span> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                <span>User Login</span>
            </div>
            <h1>User <span class="highlight-orange">Login</span></h1>
            <div class="hero-bottom-line"></div>
        </div>
    </section>

    <!-- Login Form Section -->
    <section class="login-form-section">
        <div class="container-fluid login-container">
            <div class="login-card-box">
                <form action="#" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="username" class="form-control-custom" placeholder="Enter Username"
                            required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control-custom" placeholder="Enter password"
                            required>
                    </div>

                    <div class="login-actions">
                        <button type="submit" class="btn-login-submit">Login</button>
                        <a href="#" class="forgot-password-link">Forgot Password</a>
                    </div>

                </form>
            </div>
        </div>
    </section>
</div>
@endsection

<style>
    .login-page-wrapper {
        background-color: var(--color-light-bg, #F8FAFC);
        min-height: 80vh;
        padding-bottom: 60px;
    }

    .login-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
    }

    /* Hero Section */
    .login-hero-section {
       padding: 60px 0;
        background-image: url('{{ asset("asset/images/enterprises/bg-img.png") }}'),
        linear-gradient(to bottom, var(--color-white), var(--bg-light-blue));
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100% 100%, cover;
        border-bottom: 1px solid #E2E8F0;
        margin-bottom: 30px;
        min-height: 160px;
        display: flex;
        align-items: center;
    }

    .login-breadcrumb {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .login-breadcrumb a {
        color: var(--color-purple, #7C3AED);
        text-decoration: none;
    }

    .login-hero-section h1 {
        font-size: 36px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
    }

    .highlight-orange {
        color: var(--primary-orange, #FF6600);
    }

    .hero-bottom-line {
        width: 55px;
        height: 2.3px;
        margin-top: 12px;
        background: linear-gradient(to right, var(--primary-orange, #FF6600), var(--color-purple, #7C3AED));
        border-radius: 2px;
    }

    /* Login Card Box */
    .login-card-box {
        background: #FFFFFF;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        border: 1px solid #E2E8F0;
        max-width: 500px;
        margin: 0 auto;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin-bottom: 20px;
    }

    .form-group label {
        font-size: 14px;
        font-weight: 600;
        color: var(--color-text-main, #1E293B);
    }

    .form-control-custom {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #CBD5E1;
        border-radius: 10px;
        background: #FFFFFF;
        font-size: 14px;
        color: var(--color-text-main, #1E293B);
        outline: none;
        transition: border-color 0.2s;
    }

    .form-control-custom:focus {
        border-color: var(--primary-orange, #FF6600);
        box-shadow: 0 0 0 3px rgba(255, 102, 0, 0.1);
    }

    /* Login Actions Row */
    .login-actions {
        margin-top: 30px;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .btn-login-submit {
        background: var(--primary-orange, #FF6600);
        color: #FFFFFF;
        border: none;
        padding: 12px;
        border-radius: 10px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        transition: opacity 0.2s, transform 0.1s;
        box-shadow: 0 4px 12px rgba(255, 102, 0, 0.2);
        width: 100px;
    }

    .btn-login-submit:hover {
        opacity: 0.95;
        transform: translateY(-1px);
    }

    .forgot-password-link {
        font-size: 14px;
        color: #DC2626;
        /* Red shade like original screenshot */
        text-decoration: none;
        font-weight: 600;
        width: fit-content;
    }

    .forgot-password-link:hover {
        text-decoration: underline;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .login-card-box {
            padding: 25px;
        }

        .login-container {
            padding: 0 !important;
            width: 95%;
        }
    }
</style>
