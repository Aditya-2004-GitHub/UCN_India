@extends('frontend.layout.app')

@section('title', 'UCN India - Privacy Policy')

@section('content')
<div class="privacy-page-wrapper">
    <!-- Hero Banner Section -->
    <section class="privacy-hero-section">
        <div class="container-fluid privacy-hero-container">
            <div class="privacy-hero-content">
                <div class="privacy-breadcrumb">
                    <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                    <span>Privacy Policy</span>
                </div>
                <h1>Privacy <span class="highlight-orange">Policy</span></h1>
                <p class="hero-subtext">Learn how we collect, use, and safeguard your personal information.</p>
                <div class="hero-bottom-line"></div>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="privacy-content-section">
        <div class="container-fluid privacy-container">

            <div class="privacy-main-card">

                <!-- Privacy Block 1 -->
                <div class="privacy-block">
                    <p>UCN India takes your privacy seriously. Please read the following to learn more about our privacy
                        policy. Registration Data and certain other information about you are subject to our Privacy
                        Policy. In particular, We believe it is important for You to know how We treat information about
                        You that We may receive from this Web site <a href="https://www.ucnindia.com"
                            target="_blank">"www.ucnindia.com"</a> ("Site").</p>
                    <p>In general, You can visit this site without telling Us who You are or revealing any information
                        about Yourself. Our web servers collect the domain names, the Internet Protocol (IP) addresses
                        of the visitors' computers which connect it to the internet, and not the e-mail addresses, of
                        visitors. Domain name information that we collect is not used to personally identify you and
                        instead is aggregated to measure the number of visits, average time spent on the site, pages
                        viewed, etc.</p>
                    <p>We use this information to measure the use of our site and to improve its content. In addition,
                        there are portions of this Web site where We may need to collect personal information from You
                        for a specific purpose, such as to provide you with certain information You request. The
                        information collected from You may include Your name, address, telephone, fax number, or e-mail
                        address, etc. This Privacy Policy is applicable to any personal information, which is given by
                        You to Us ("User Information") via this Site and is devised to help You feel more confident
                        about the privacy and security of Your personal details. When You leave your contact details
                        please note that We are not bound to reply. This Web site is not intended for persons under 13
                        years of age. We do not knowingly solicit or collect personal information from or about
                        children, and we do not knowingly market our products or services to children.</p>
                </div>

                <!-- Privacy Block 2: Data Collection -->
                <div class="privacy-block">
                    <h3>Data Collection</h3>
                    <p>When using the Site you may be asked to enter User Information. Such User Information will only
                        be used for the purposes for which it was collected, for any other purposes specified at the
                        collection point and in accordance with this Privacy Policy.</p>
                </div>

                <!-- Privacy Block 3: How we may use Your data -->
                <div class="privacy-block">
                    <h3>How we may use Your data</h3>
                    <p>By entering Your User Information, You accept that We may retain Your User Information and that
                        it may be held by Us or any third party company which processes it on Our behalf. UCN India does
                        not rent, sell, or share personal information about you with other people or non-affiliated
                        companies.</p>
                    <p>We shall be entitled to Use Your User Information for the following purposes:</p>
                    <ul class="privacy-list">
                        <li>Market research, including statistical analysis of User behavior which We may disclose to
                            third parties in depersonalized, aggregated form.</li>
                        <li>In order to enable Us to comply with any requirements imposed on Us by law.</li>
                        <li>In order to send You periodic communications (this may include e-mail), about features,
                            products and services, events and special offers. Such communications from Us may include
                            advertising for third party companies or organizations.</li>
                    </ul>
                    <p>For your convenience you can withdraw consent by replying to the "unsubscribe" link in e-mails
                        from us.</p>
                    <p>Please also note that we do not disclose your personal information to third parties to enable
                        them to send you direct marketing without Your permission to do so.</p>
                </div>

                <!-- Privacy Block 4: Security of Data Collected -->
                <div class="privacy-block">
                    <h3>Security of Data Collected</h3>
                    <p>We maintain strict physical, electronic, and administrative safeguards to protect your personal
                        information from unauthorized or inappropriate access. We restrict access to information about
                        you to those UCN India employees who need to know the information to respond to your inquiry or
                        request. Employees who misuse personal information are subject to disciplinary action.</p>
                </div>

                <!-- Privacy Block 5: Contact Us -->
                <div class="privacy-block">
                    <h3>Contact Us</h3>
                    <p>If You have any questions about this privacy policy, please use the <a
                            href="{{ route('footer.contact_us') }}">Contact Us</a> page. We welcome Your questions and
                        suggestions about Our privacy policy.</p>
                </div>

                <!-- Privacy Block 6: Changes to this Policy -->
                <div class="privacy-block">
                    <h3>Changes to this Policy</h3>
                    <p>Please check this privacy policy to inform Yourself of any change. Any site that You may connect
                        to from here is not covered by this privacy policy.</p>
                </div>

            </div>

        </div>
    </section>
</div>
@endsection

<style>
    body,
    html,
    * {
        font-family: 'Poppins', sans-serif !important;
    }

    .privacy-page-wrapper {
        background-color: var(--color-light-bg, #F8FAFC);
        overflow-x: hidden;
    }

    .privacy-container,
    .privacy-hero-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto !important;
        padding: 0 40px !important;
    }

    /* --- HERO SECTION --- */
    .privacy-hero-section {
        padding: 40px 0 60px;
        background: linear-gradient(to bottom, var(--color-white), var(--bg-light-blue));
    }

    .privacy-breadcrumb {
        font-size: 14px;
        color: var(--color-text-muted, #64748B);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .privacy-breadcrumb a {
        color: var(--color-purple, #7C3AED);
        text-decoration: none;
    }

    .privacy-hero-content h1 {
        font-size: 42px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        line-height: 1.3;
        margin-bottom: 10px;
    }

    .highlight-orange {
        color: var(--primary-orange, #FF6600);
    }

    .hero-subtext {
        font-size: 15px;
        color: var(--color-text-muted, #64748B);
        line-height: 1.6;
        margin-top: 10px;
    }

    .hero-bottom-line {
        width: 55px;
        height: 2.3px;
        margin-top: 15px;
        background: linear-gradient(to right, var(--primary-orange), var(--color-purple));
        border-radius: 2px;
    }

    /* --- CONTENT SECTION --- */
    .privacy-content-section {
        padding: 40px 0;
    }

    .privacy-main-card {
        background: #FFFFFF;
        border-radius: 24px;
        padding: 45px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        border: 1px solid #E2E8F0;
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .privacy-block h3 {
        font-size: 20px;
        font-weight: 700;
        color: var(--color-text-main, #1E293B);
        margin-bottom: 15px;
        margin-top: 10px;
    }

    .privacy-block p {
        font-size: 15px;
        color: var(--color-text-muted, #64748B);
        line-height: 1.7;
        margin-bottom: 15px;
    }

    .privacy-block a {
        color: var(--color-blue);
        text-decoration: none;
        font-weight: 600;
    }

    .privacy-block a:hover {
        text-decoration: underline;
    }

    .privacy-list {
        margin: 0 0 15px 0;
        padding-left: 20px;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .privacy-list li {
        font-size: 15px;
        color: var(--color-text-muted, #64748B);
        line-height: 1.6;
    }

    /* --- RESPONSIVE MEDIA QUERIES --- */
    @media (max-width: 1024px) {

        .privacy-container,
        .privacy-hero-container {
            padding: 0 20px !important;
        }
    }

    @media (max-width: 768px) {

        .privacy-container
         {
            padding: 0  !important;
        }
        .privacy-hero-container {
            padding: 0 10px !important;
        }
        .hero-subtext {
            font-size: 14.5px;
        }

        .privacy-hero-content h1 {
            font-size: 32px;
        }

        .privacy-main-card {
            padding: 25px 20px;
            gap: 20px;
            width: 80%;
            justify-self: center;
        }

        .privacy-block h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }
    }
</style>
