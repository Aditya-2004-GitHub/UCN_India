<footer class="site-footer">
    <div class="footer-container">
        <!-- Top Main Footer Section -->
        <div class="footer-main-grid">

            <!-- Column 1: Quick Links -->
            <div class="footer-col quick-links-col">
                <h3 style="position: relative; margin-bottom: 25px;">
                    Quick Links
                    <span
                        style="display: block; width: 35px; height: 1.8px; background: linear-gradient(to right, var(--primary-orange), var(--color-purple)); margin-top: 6px; border-radius: 2px;"></span>
                </h3>
                <div class="quick-links-grid">
                    <ul>
                        <li><a href="{{ route('pdf.manual_practice') }}" target="_blank"><i
                                    class="fa-solid fa-angle-right custom-bullet"></i> Manual of Practice</>
                        </li>
                        <li><a href="{{ route('footer.advertise') }}"><i
                                    class="fa-solid fa-angle-right custom-bullet"></i> Advertise with Us</a></li>
                        <li><a href="{{ route('footer.terms') }}"><i class="fa-solid fa-angle-right custom-bullet"></i>
                                Terms & Conditions</a>
                        </li>
                        <li><a href="{{ route('footer.compliances') }}"><i
                                    class="fa-solid fa-angle-right custom-bullet"></i> Compliances</a></li>
                        <li><a href="{{ route('footer.privacy') }}"><i
                                    class="fa-solid fa-angle-right custom-bullet"></i> Privacy Policy</a></li>
                        <li><a href="{{ route('footer.service_quality') }}"><i
                                    class="fa-solid fa-angle-right custom-bullet"></i> Service Quality</a></li>
                    </ul>

                    <ul>
                        <li><a href="{{ route('pdf.application_form') }}" target="_blank"><i
                                    class="fa-solid fa-angle-right custom-bullet"></i> Internet Application
                                Form</a></li>
                        <li><a href="{{ route('footer.work_with_us') }}"><i
                                    class="fa-solid fa-angle-right custom-bullet"></i> Work with Us</a></li>
                        <li><a href="{{ route('help.helpdesk') }}"><i class="fa-solid fa-angle-right custom-bullet"></i>
                                Help & Support</a></li>
                        <li><a href="{{ route('footer.contact_us') }}"><i
                                    class="fa-solid fa-angle-right custom-bullet"></i> Contact Us</a></li>
                        <li><a href="{{ url('/about') }}"><i class="fa-solid fa-angle-right custom-bullet"></i> About
                                Us</a></li>
                        <li><a href="{{ route('footer.careers') }}"><i
                                    class="fa-solid fa-angle-right custom-bullet"></i> Careers</a></li>
                    </ul>

                </div>
            </div>

            <!-- Column 2: Get in touch -->
            <div class="footer-col get-in-touch-col">
                <h3 style="position: relative; margin-bottom: 25px;">
                    Get in touch
                    <span
                        style="display: block; width: 35px; height: 1.8px; background: linear-gradient(to right, var(--primary-orange), var(--color-purple)); margin-top: 6px; border-radius: 2px;"></span>
                </h3>
                <div class="touch-item">
                    <span class="touch-icon bg-peach"><i class="fa-solid fa-location-dot"></i></span>
                    <div>
                        <strong>Head Office:</strong>
                        <p>502, Milestone, 12,<br /> Ramdaspeth,<br /> Nagpur-440010.</p>
                    </div>
                </div>
                <div class="touch-item">
                    <span class="touch-icon bg-peach"><i class="fa-solid fa-phone"></i></span>
                    <div>
                        <strong>Phone:</strong>
                        <p>0712-0033888 / 6633000</p>
                    </div>
                </div>
            </div>

            <!-- Column 3: Digital TV & Broadband -->
            <div class="footer-col digital-tv-col">
                <h3 style="position: relative; margin-bottom: 25px;">
                    Digital TV & Broadband
                    <span
                        style="display: block; width: 35px; height: 1.8px; background: linear-gradient(to right, var(--primary-orange), var(--color-purple)); margin-top: 6px; border-radius: 2px;"></span>
                </h3>
                <div class="touch-item">
                    <span class="touch-icon bg-peach"><i class="fa-solid fa-headset"></i></span>
                    <div>
                        <strong>Call Center:</strong>
                        <p style="color: var(--primary-orange); cursor:pointer;">08009333999</p>
                    </div>
                </div>
                <div class="touch-item">
                    <span class="touch-icon bg-peach"><i class="fa-solid fa-envelope"></i></span>
                    <div>
                        <strong>Email:</strong>
                        <p style="margin-bottom: 4px;">For Cable TV Service:<br><a
                                href="mailto:care@ucnindia.com">care@ucnindia.com</a></p>
                        <p>For Internet Service:<br><a href="mailto:in@ucnindia.com">in@ucnindia.com</a></p>
                    </div>
                </div>
            </div>

            <!-- Column 4: Newsletter & App Download Sidebar Cards -->
            <div class="footer-sidebar-col">
                <!-- Newsletter Box -->
                <div class="footer-card newsletter-card">
                    <div class="newsletter-header">
                        <span class="stat-dot bg-peach"></span>
                        <div class="newsletter-title-wrap">
                            <h4>Stay Updated</h4>
                            <p>Get the latest news, offers and updates from UCN.</p>
                        </div>
                    </div>
                    <form action="#" method="POST">
                        @csrf
                        <input type="email" placeholder="Enter your Email.." required>
                        <button type="submit" class="subscribe-btn">Subscribe <i
                                class="fa-solid fa-arrow-right"></i></button>
                    </form>
                </div>

                <!-- Self Care App Box -->
                <div class="footer-card app-card">
                    <h4>UCN Self Care App</h4>
                    {{-- <p>Manage your account, recharge, raise complaints & more.</p> --}}
                    <div class="app-badges">
                        <a href="#"><img src="{{ asset('asset/images/home/playstore.png') }}" alt="Google Play"></a>
                        <a href="#"><img src="{{ asset('asset/images/home/appstore.png') }}" alt="App Store"></a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Middle Stats / Brand Banner Box -->
        <div class="footer-stats-bar">
            <div class="stat-left">
                <span class="connect-label">Proudly Connecting</span>
                <h2>Nagpur & Beyond</h2>
                <p>Building a stronger digital future for everyone.</p>
            </div>
            <div class="stat-items">
                <div class="stat-box">
                    <span class="stat-dot bg-purple"></span>
                    <strong>300+ Mbps</strong>
                    <span>Top Speed</span>
                </div>
                <div class="stat-box">
                    <span class="stat-dot bg-peach"></span>
                    <strong>99.9%</strong>
                    <span>Uptime Guarantee</span>
                </div>
                <div class="stat-box">
                    <span class="stat-dot bg-cyan"></span>
                    <strong>2L+</strong>
                    <span>Happy Customers</span>
                </div>
                <div class="stat-box">
                    <span class="stat-dot bg-teal"></span>
                    <strong>10+ Years</strong>
                    <span>of Trust</span>
                </div>
            </div>
            <div class="footer-socials">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="#"><img src="{{ asset('asset/images/home/facebook.png') }}" alt="Facebook" /></a>
                    <a href="#"><img src="{{ asset('asset/images/home/instagram.png') }}" alt="Instagram" /></a>
                    <a href="#"><img src="{{ asset('asset/images/home/youtube1.png') }}" alt="Youtube" /></a>
                    <a href="#"><img src="{{ asset('asset/images/home/twitter1.png') }}" alt="Twitter" /></a>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright & Legal Bar -->
        <div class="footer-bottom-bar">
            <div class="copyright">
                ©2024 UCN. All Rights Reserved.
            </div>
            <div class="legal-links">
                <a href="{{ route('footer.privacy') }}">Privacy Policy</a>
                <a href="{{ route('footer.terms') }}">Terms & Conditions</a>
                <a href="{{ route('footer.refund_policy') }}">Refund Policy</a>
                <a href="{{ route('footer.fair_usage_policy') }}">Fair Usage Policy</a>
            </div>
            <div class="payment-security">
                <span><i class="fa-solid fa-lock"></i> Secure Payments</span>
                <div class="payment-logos">
                    <img src="{{ asset('asset/images/home/visa.png') }}" alt="Visa">
                    <img src="{{ asset('asset/images/home/mastercard.png') }}" alt="Mastercard">
                    <img src="{{ asset('asset/images/home/rupay.png') }}" alt="RuPay">
                    <img src="{{ asset('asset/images/home/mobile-banking.png') }}" alt="Banking">
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Scroll Up Button -->
<button id="scrollTopBtn" class="scroll-top-btn" title="Go to top">
    <i class="fas fa-arrow-up"></i>
</button>

<script>
    // Scroll Up Logic
    const scrollTopBtn = document.getElementById("scrollTopBtn");
    window.onscroll = function() {
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            scrollTopBtn.style.display = "block";
        } else {
            scrollTopBtn.style.display = "none";
        }
    };
    scrollTopBtn.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
</script>

<style>
    .scroll-top-btn {
        display: none;
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 9999;
        background-color: var(--primary-orange);
        color: white;
        border: none;
        padding: 12px 14px;
        border-radius: 50%;
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .scroll-top-btn:hover {
        background-color: var(--color-blue);
    }

    /* --- FOOTER STYLES --- */
    .site-footer {
        background: var(--color-light-bg);
        padding: 20px 0;
        font-family: 'Poppins', sans-serif;
        color: var(--color-text-main);
        border-top: 1px solid var(--border-light);
        margin-top: 10px;
    }

    .footer-container {
        max-width: 90%;
        margin: 0 auto;
        padding: 0 20px;
    }

    .footer-main-grid {
        display: grid;
        grid-template-columns: 2.2fr 1.2fr 1.3fr 1.4fr;
        gap: 20px;
        background: var(--color-white);
        padding: 20px 25px;
        border-radius: 20px;
        box-shadow: 0 4px 15px var(--shadow-subtle);
        margin-bottom: 25px;
        align-items: start;
    }

    .quick-links-col,
    .get-in-touch-col {
        border-right: 1px solid var(--border-color);
        padding-right: 15px;
    }

    .footer-col h3 {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 25px;
        color: var(--color-text-main);
        display: inline-block;
        position: relative;
    }

    .footer-col h3 .heading-line{
        display: block;
        /* Absolute hata kar block kar diya taaki hide na ho */
        width: 35px;
        height: 2px;
        background: linear-gradient(to right, var(--primary-orange), var(--color-blue));
        border-radius: 2px;
        margin-top: 6px;
        /* Heading ke thoda niche gap dene ke liye */
    }

    .footer-sidebar-col h4 {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 20px;
        color: var(--color-text-main);
    }

    /* Quick Links 2-Column Split */
    .quick-links-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }

    .footer-col ul {
        list-style: none;
        /* Default disc bullets remove kiye */
        padding-left: 0;
        margin: 0;
    }

    .footer-col ul li {
        margin-bottom: 12px;
    }

    .footer-col ul li a {
        text-decoration: none;
        color: var(--color-text-muted);
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 6px;
        transition: color 0.2s;
    }

    /* Custom Pinkish Bullet Arrows */
    .custom-bullet {
        font-size: 10px;
        background: linear-gradient(to bottom, var(--primary-orange), var(--color-blue));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
        /* Gradient clip ke liye zaroori hai */
    }

    .footer-col ul li a:hover {
        color: var(--primary-orange);
    }

    /* Get in touch & Digital TV sections */
    .touch-item {
        display: flex;
        gap: 12px;
        margin-bottom: 18px;
        font-size: 14px;
        color: var(--color-text-muted);
    }

    .touch-item strong {
        color: var(--color-text-main);
        display: block;
        margin-bottom: 8px;
        font-size: 16px;
    }

    .touch-item p {
        margin: 0;
        line-height: 1.5;
        font-size: 14px;
    }

    .touch-item a {
        color: var(--primary-orange);
        text-decoration: none;
    }

    .touch-icon {
        width: 34px !important;
        height: 34px!important;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px!important;
        flex-shrink: 0;
    }

    .bg-peach {
        background: rgba(255, 182, 143, 0.25);
        color: var(--primary-orange);
    }

    .bg-purple {
        background: rgba(138, 43, 226, 0.15);
        color: #8A2BE2;
    }

    .bg-cyan {
        background: rgba(0, 210, 255, 0.15);
        color: #0088cc;
    }

    .bg-teal {
        background: rgba(0, 128, 128, 0.15);
        color: #048000;
    }

    /* Sidebar Cards (Newsletter & App) */
    .footer-card {
        background: var(--color-light-bg);
        border: 1px solid var(--border-color);
        padding: 10px;
        border-radius: 12px;
        margin-bottom: 15px;
    }

    .newsletter-header {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 10px;
    }

    .newsletter-header .stat-dot {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        flex-shrink: 0;
        margin-top: 2px;
    }

    .newsletter-title-wrap h4 {
        font-size: 14px;
        font-weight: 600;
        color: var(--color-text-main);
        margin: 0 0 2px 0;
    }

    .newsletter-title-wrap p {
        font-size: 11px;
        color: var(--color-text-muted);
        margin: 0;
        line-height: 1.3;
    }

    .newsletter-card input {
        width: 100%;
        padding: 8px 12px;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        font-size: 12px;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 8px;
        outline: none;
        box-sizing: border-box;
    }

    .subscribe-btn {
        width: 100%;
        background: linear-gradient(135deg, var(--color-blue), var(--primary-orange));
        color: var(--color-white);
        border: none;
        padding: 8px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
    }

    .app-badges {
        display: flex;
    }

    .app-badges img {
        height: 100px;
        width: 100px;
        margin-top: -40px
    }

    /* Middle Stats Bar */
    .footer-stats-bar {
        background: var(--color-white);
        padding: 25px 30px;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 4px 15px var(--shadow-subtle);
        margin-bottom: 25px;
        gap: 40px;
    }

    .stat-left {
        text-align: center;
    }

    .stat-left h2 {
        font-size: 22px;
        margin: 2px 0;
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(to right, var(--primary-orange), var(--color-light-blue));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .connect-label {
        font-size: 14px;
        color: var(--color-text-muted);
    }

    .stat-left p {
        font-size: 13px;
        color: var(--color-text-muted);
        margin: 0;
    }

    .stat-items {
        display: flex;
        gap: 30px;
        border-left: 1px solid var(--border-color);
        border-right: 1px solid var(--border-color);
        padding: 0 30px;
    }

    .stat-box {
        text-align: center;
    }

    .stat-dot {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: block;
        margin: 0 auto 5px;
    }

    .stat-box strong {
        display: block;
        font-size: 13px;
        color: var(--color-text-main);
    }

    .stat-box span {
        font-size: 11px;
        color: var(--color-text-muted);
    }

    .footer-socials h4 {
        font-size: 14px;
        margin-bottom: 6px;
    }

    .social-icons {
        display: flex;
        gap: 8px;
    }

    .social-icons img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
    }

    /* Bottom Bar */
    .footer-bottom-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 13px;
        color: var(--color-text-muted);
        padding: 0 10px;
    }

    .legal-links {
        display: flex;
        gap: 20px;
    }

    .legal-links a {
        text-decoration: none;
        color: var(--color-text-muted);
    }

    .legal-links a:hover {
        color: var(--primary-orange);
    }

    .payment-security {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .payment-logos {
        display: flex;
        gap: 6px;
    }

    .payment-logos img {
        height: 24px;
        width: auto;
    }

    /* Responsive Media Queries */
    @media (max-width: 1024px) {
        .footer-main-grid {
            grid-template-columns: 1fr 1fr;
        }

        .quick-links-col {
            border-right: none;
        }

        .footer-stats-bar {
            flex-direction: column;
            gap: 20px;
            text-align: center;
        }

        .stat-items {
            border: none;
            padding: 0;
            flex-wrap: wrap;
            justify-content: center;
        }

        .stat-left {
            text-align: center;
        }
    }

    @media (max-width: 768px) {
        .footer-main-grid {
            grid-template-columns: 1fr;
        }

        .get-in-touch-col {
            border-right: none;
        }

        .footer-bottom-bar {
            flex-direction: column;
            gap: 15px;
            text-align: center;
        }
    }
</style>
