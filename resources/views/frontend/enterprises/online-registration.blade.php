@extends('frontend.layout.app')

@section('title', 'UCN India - User Registration')

@section('content')
<div class="registration-page-wrapper">
    <!-- Hero Banner / Breadcrumb Section -->
    <section class="reg-hero-section">
        <div class="container-fluid reg-container">
            <div class="reg-breadcrumb">
                <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                <span>User Registration</span>
            </div>
            <h1>User <span class="highlight-orange">Registration</span></h1>
            <div class="hero-bottom-line"></div>
        </div>
    </section>

    <!-- Registration Form Section -->
    <section class="reg-form-section">
        <div class="container-fluid reg-container">
            <div class="reg-card-box">
                <form action="#" method="POST">
                    @csrf

                    <div class="form-grid">
                        <!-- First Name -->
                        <div class="form-group">
                            <label>First Name <span class="required">*</span></label>
                            <input type="text" name="first_name" class="form-control-custom" placeholder="Enter First Name" required>
                        </div>

                        <!-- Last Name -->
                        <div class="form-group">
                            <label>Last Name <span class="required">*</span></label>
                            <input type="text" name="last_name" class="form-control-custom" placeholder="Enter Last Name" required>
                        </div>

                        <!-- Mobile No -->
                        <div class="form-group">
                            <label>Mobile No <span class="required">*</span></label>
                            <input type="tel" name="mobile" class="form-control-custom" placeholder="Enter Mobile No" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control-custom" placeholder="Enter email">
                        </div>

                        <!-- User Name -->
                        <div class="form-group">
                            <label>User Name <span class="required">*</span></label>
                            <input type="text" name="username" class="form-control-custom" placeholder="Enter Username" required>
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label>Password <span class="required">*</span></label>
                            <input type="password" name="password" class="form-control-custom" placeholder="Enter password" required>
                        </div>

                        <!-- Security Question -->
                        <div class="form-group">
                            <label>Security Question <span class="required">*</span></label>
                            <select name="security_question" class="form-control-custom" required>
                                <option value="" disabled selected>Select</option>
                                <option value="pet">What is your pet's name?</option>
                                <option value="school">What was your first school?</option>
                                <option value="city">What city were you born in?</option>
                            </select>
                        </div>

                        <!-- Security Answer -->
                        <div class="form-group">
                            <label>Security Answer <span class="required">*</span></label>
                            <input type="text" name="security_answer" class="form-control-custom" placeholder="Enter Security Answer" required>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-submit-row">
                        <button type="submit" class="btn-submit-reg">Submit Your Registration</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
</div>
@endsection

<style>
    .registration-page-wrapper {
        background-color: var(--color-light-bg, #F8FAFC);
        min-height: 80vh;
        padding-bottom: 60px;
    }

    .reg-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
    }

    /* Hero Section */
    .reg-hero-section {
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

    .reg-breadcrumb {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .reg-breadcrumb a {
        color: var(--color-purple, #7C3AED);
        text-decoration: none;
    }

    .reg-hero-section h1 {
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

    /* Form Card Box */
    .reg-card-box {
        background: #FFFFFF;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        border: 1px solid #E2E8F0;
        max-width: 1000px;
        margin: 0 auto;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 25px 30px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .form-group label {
        font-size: 14px;
        font-weight: 600;
        color: var(--color-text-main, #1E293B);
    }

    .required {
        color: #EF4444;
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

    /* Submit Row */
    .form-submit-row {
        margin-top: 40px;
        display: flex;
        justify-content: center;
    }

    .btn-submit-reg {
        background: var(--primary-orange, #FF6600);
        color: #FFFFFF;
        border: none;
        padding: 12px 35px;
        border-radius: 10px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        transition: opacity 0.2s, transform 0.1s;
        box-shadow: 0 4px 12px rgba(255, 102, 0, 0.2);
    }

    .btn-submit-reg:hover {
        opacity: 0.95;
        transform: translateY(-1px);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }
        .reg-card-box {
            padding: 20px;
        }
        .reg-container {
            padding: 0 !important;
            width: 95%;
        }
    }
</style>
