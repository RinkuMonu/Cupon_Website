<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="style.css" />
  <style>

    /* --- Root Variables & Base Styles --- */
    :root {
        --primary-color: #ea6a4f;
        --primary-dark: #d45f45;
        --primary-light: #fef0ec;
        --light-bg: #f8f9fa;
        --dark-text: #2c3e50;
        --medium-text: #5a6270;
        --border-color: #eef2f7;
    }


    /* --- Sidebar Navigation --- */
    .sidebar-card {
        position: sticky;
        top: 2rem;
        background-color: #ffffff;
        border-radius: 0.75rem;
        border: 1px solid var(--border-color);
        padding: 1.5rem;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.04);
    }

    .sidebar-title {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        color: var(--dark-text);
        font-size: 1.1rem;
        padding-left: 0.5rem;
        margin-bottom: 1rem;
    }

    .policy-nav .nav-link {
        color: var(--medium-text);
        font-weight: 500;
        padding: 0.75rem 1rem;
        margin-bottom: 0.25rem;
        border-radius: 0.5rem;
        transition: all 0.2s ease-in-out;
        display: flex;
        align-items: center;
        gap: 0.8rem;
    }

    .policy-nav .nav-link i {
        width: 20px;
        font-size: 1rem;
        transition: all 0.2s ease-in-out;
    }

    .policy-nav .nav-link:hover,
    .policy-nav .nav-link:focus,
    .policy-nav .nav-link.active {
        /* background-color: var(--primary-color);
        color: white; */
        transform: translateX(5px);
    }

    /* --- Main Content Area --- */
    .policy-content section {
        padding-top: 1rem;
        margin-bottom: 3.5rem;
    }

    .policy-content h2 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        color: var(--dark-text);
        margin-bottom: 1.5rem;
        font-size: 2rem;
    }

    .lead-text {
        font-size: 1.15rem;
        color: var(--dark-text);
        margin-bottom: 2rem;
        padding-bottom: 2rem;
        border-bottom: 1px solid var(--border-color);
    }

    /* --- Data Type Cards (replaces cookie-type-card) --- */
    .data-card {
        background-color: #ffffff;
        border: 1px solid var(--border-color);
        padding: 1.5rem;
        height: 100%;
        border-radius: 0.75rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .data-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.07);
    }

    .data-card h5 {
        color: var(--dark-text);
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 0.75rem;
    }

    .data-card h5 i {
        color: var(--primary-color);
    }

    .data-card p {
        font-size: 0.95rem;
        line-height: 1.6;
    }

    /* --- Custom List Styling --- */
    .styled-list {
        list-style: none;
        padding-left: 0;
    }

    .styled-list li {
        position: relative;
        padding-left: 2.2rem;
        margin-bottom: 1rem;
    }

    .styled-list li::before {
        content: '\f058';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        position: absolute;
        left: 0;
        top: 0.2rem;
        color: var(--primary-color);
        font-size: 1.2rem;
    }

    /* --- Contact Box --- */
    .contact-box {
        background-color: var(--dark-text);
        color: #fff;
        padding: 2.5rem;
        border-radius: 1rem;
        text-align: center;
    }

    .contact-box h4 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
    }

    .contact-box a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
        word-break: break-all;
    }

    .contact-box a:hover {
        text-decoration: underline;
    }

    /* --- Responsive Adjustments --- */
    @media (max-width: 991.98px) {
        .sidebar-card {
            position: static;
            margin-bottom: 2.5rem;
            box-shadow: none;
        }
    }


    @media (max-width: 575.98px) {

        /* small phones */
        h1.header-title {
            font-size: 1.9rem !important;
            line-height: 1.3;
        }

        .policy-content h2 {
            font-size: 1.5rem !important;
            line-height: 1.35;
        }

        .lead-text {
            font-size: 1.05rem !important;
            line-height: 1.6;
        }

        .data-card h5 {
            font-size: 1.1rem !important;
            margin-bottom: 0.5rem;
        }

        .data-card p,
        .styled-list li {
            font-size: 1rem !important;
            /* more readable, not oversized */
            line-height: 1.55;
        }

        .contact-box h4 {
            font-size: 1.2rem !important;
            margin-bottom: 0.5rem;
        }

        .contact-box p,
        .contact-box a {
            font-size: 1rem !important;
            line-height: 1.5;
        }
    }
  </style>
</head>
<?php include 'header.php'; ?>
<div class="header-hero position-relative">
    <div class="container py-5">
        <div class="row align-items-center gy-3 ">
            <div class="col-lg-7">
                <div class="mb-2" style="font-size: 1.01em; color: #888">
                    SEPTEMBER 2024
                </div>
                <h1 class="header-title">
                    Our <br /><span class="highlight">Cookie Policy</span>
                </h1>
                <div class="hero-icons my-3">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Privacy Team" />
                    <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="Privacy Team" />
                    <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Privacy Team" />
                </div>
                <p class="header-info">
                    Your trust matters to us. We are committed to protecting your personal data
                    and ensuring transparency in how we collect, use, and safeguard your information.
                    Please review our privacy policy to understand your rights and our practices.
                </p>
            </div>

            <div class="col-lg-5 text-center position-relative">
                <img src="privacy.png" class="img-fluid hero-img-people" width="600" alt="Students" />
                <div class="hero-indicator">
                    <div class="hero-indicator-inner">
                        Last Updated<br />
                        <span style="font-size: 1.13em; font-weight: 800">September 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-lg-3">
            <div class="sidebar-card">
                <h5 class="sidebar-title">On this page</h5>
                <nav class="nav policy-nav flex-column">
                    <a class="nav-link" href="#collection"><i class="fas fa-database"></i> Information We Collect</a>
                    <a class="nav-link" href="#usage"><i class="fas fa-tasks"></i> How We Use Information</a>
                    <a class="nav-link" href="#sharing"><i class="fas fa-share-alt"></i> Sharing & Disclosure</a>
                    <a class="nav-link" href="#rights"><i class="fas fa-user-check"></i> Your Rights & Choices</a>
                    <a class="nav-link" href="#contact"><i class="fas fa-envelope"></i> Contact Us</a>
                </nav>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="policy-content">
                <p class="lead-text">Your trust is our top priority. This Privacy Policy explains how we collect, use, and protect your personal information. We are committed to transparency in our data practices. Last updated: September 19, 2025</p>

                <section id="collection">
                    <h2>Information We Collect</h2>
                    <p>To provide and improve our services, we collect information in a few different ways. Below are the types of data we may gather.</p>
                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <div class="data-card">
                                <h5><i class="fas fa-user"></i>Personal Data</h5>
                                <p class="mb-0">Information you provide to us directly, such as your name, email address, and contact details when you sign up or contact us.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="data-card">
                                <h5><i class="fas fa-desktop"></i>Usage Data</h5>
                                <p class="mb-0">Data collected automatically when you use our service, like your IP address, browser type, pages visited, and time spent on pages.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="data-card">
                                <h5><i class="fas fa-cookie-bite"></i>Tracking & Cookie Data</h5>
                                <p class="mb-0">We use cookies and similar tracking technologies to monitor activity on our service and hold certain information to enhance your experience.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="data-card">
                                <h5><i class="fas fa-mobile-alt"></i>Device Data</h5>
                                <p class="mb-0">Information about the device you use to access our services, including the hardware model, operating system, and unique device identifiers.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="usage">
                    <h2>How We Use Your Information</h2>
                    <p>We use the collected data for various purposes, all aimed at providing a better, more secure service:</p>
                    <ul class="styled-list mt-3">
                        <li>To provide, operate, and maintain our services</li>
                        <li>To improve, personalize, and expand our services</li>
                        <li>To understand and analyze how you use our services</li>
                        <li>To communicate with you, for customer service, and for marketing</li>
                        <li>To process your transactions and manage orders</li>
                        <li>To find and prevent fraud and enhance security</li>
                    </ul>
                </section>

                <section id="sharing">
                    <h2>Sharing & Disclosure</h2>
                    <p>We do not sell your personal data. We may share your information only in the following limited circumstances: with your consent, with trusted third-party service providers who work on our behalf, for legal compliance and protection, or in connection with business transfers.</p>
                </section>

                <section id="rights">
                    <h2>Your Rights & Choices</h2>
                    <p>You have rights regarding your personal data. Depending on your location, these may include the right to access, correct, or delete your information. You also have choices about the collection and use of your data, such as managing your cookie preferences through your browser settings.</p>
                </section>

                <section id="contact">
                    <div class="contact-box">
                        <h4><i class="fas fa-envelope me-2"></i>Questions?</h4>
                        <p class="mb-1 mt-3">If you have any questions about this Privacy Policy or our data practices, please contact us:</p>
                        <p class="mb-0"><strong><a href="mailto:privacy@yourwebsite.com">privacy@yourwebsite.com</a></strong></p>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>