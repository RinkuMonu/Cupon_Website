     <head>
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
            --light-bg: #f8f9fa; /* Slightly cooler background for contrast */
            --dark-text: #2c3e50;
            --medium-text: #5a6270;
            --border-color: #eef2f7;
        }

    

        /* --- Better Sidebar --- */
        .sidebar-card {
            position: sticky;
            top: 2rem;
            background-color: #ffffff;
            border-radius: 0.75rem;
            border: 1px solid var(--border-color);
            padding: 1.5rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.04);
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
            gap: 0.8rem; /* Space between icon and text */
        }
        
        .policy-nav .nav-link i {
            width: 20px; /* Ensures consistent alignment */
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

        /* --- Disclosure Cards --- */
        .disclosure-card {
            background-color: #ffffff;
            border: 1px solid var(--border-color);
            padding: 1.5rem;
            height: 100%;
            border-radius: 0.75rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .disclosure-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.07);
        }

        .disclosure-card h5 {
            color: var(--dark-text);
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 0.75rem;
        }
        
        .disclosure-card h5 i {
             color: var(--primary-color);
        }
        
        .disclosure-card p {
            font-size: 0.95rem;
            line-height: 1.6;
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
        /* --- Responsive Adjustments --- */

/* Tablet & below */
@media (max-width: 991.98px) {
  .sidebar-card {
    position: static;
    margin-bottom: 2rem;
    box-shadow: none;
  }

  .header-hero .header-title {
    font-size: 2rem;
    text-align: center;
  }

  .header-hero .header-info {
    text-align: center;
  }

  .hero-icons {
    justify-content: center;
  }

  .hero-img-people {
    max-width: 80%;
  }
}

/* Mobile screens */
@media (max-width: 575.98px) {
  .header-hero {
    text-align: center;
  }

  .header-hero .header-title {
    font-size: 1.8rem;
    line-height: 1.3;
  }

  .header-hero .hero-info {
    font-size: 0.95rem;
  }

  .hero-icons img {
    width: 40px;
    height: 40px;
  }

  .hero-indicator {
    font-size: 0.9rem;
    padding: 0.75rem;
  }

  .policy-content h2 {
    font-size: 1.5rem;
  }

  .lead-text {
    font-size: 1rem;
  }

  .disclosure-card {
    padding: 1rem;
  }

  .contact-box {
    padding: 1.5rem;
  }
}
/* Small devices (phones <576px) */
@media (max-width: 575.98px) {
  /* Hero Section */
  .header-hero {
    text-align: center;
    padding: 2rem 1rem;
  }
  .header-hero .header-title {
    font-size: 1.6rem;
    line-height: 1.3;
  }
  .header-hero .header-info {
    font-size: 0.95rem;
    margin-top: 1rem;
  }
  .hero-img-people {
    max-width: 90%;
    margin: 1rem auto 0;
  }
  .hero-icons img {
    width: 36px;
    height: 36px;
  }

  /* Sidebar */
  .sidebar-card {
    margin-top: 2rem;
    text-align: center;
  }
  .sidebar-title {
    font-size: 1rem;
  }
  .policy-nav .nav-link {
    justify-content: center;
    font-size: 0.95rem;
  }

  /* Content */
  .policy-content h2 {
    font-size: 1.4rem;
    text-align: center;
  }
  .lead-text {
    font-size: 1rem;
    text-align: center;
  }
  .disclosure-card {
    padding: 1rem;
  }
  .disclosure-card h5 {
    font-size: 1rem;
  }
  .disclosure-card p {
    font-size: 0.9rem;
  }

  /* Contact Box */
  .contact-box {
    padding: 1.5rem;
    font-size: 0.95rem;
  }
  .contact-box h4 {
    font-size: 1.1rem;
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
                    Our <br /><span class="highlight">Disclosure Policy</span>
                </h1>
                <div class="hero-icons my-3">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Disclosure Team" />
                    <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="Disclosure Team" />
                    <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Disclosure Team" />
                </div>
                <p class="header-info">
                    Transparency is important to us. Our Disclosure Policy explains how and when we may share information 
                    about our users, customers, or business practices. Please review this policy to understand the situations 
                    in which information may be disclosed and your rights regarding that information.
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
                    <a class="nav-link" href="#purpose"><i class="fas fa-bullseye"></i> Purpose</a>
                    <a class="nav-link" href="#types"><i class="fas fa-list-ul"></i> Types of Disclosures</a>
                    <a class="nav-link" href="#handling"><i class="fas fa-user-shield"></i> How We Handle</a>
                    <a class="nav-link" href="#contact"><i class="fas fa-envelope"></i> Contact Us</a>
                </nav>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="policy-content">
                <p class="lead-text">We value transparency and want you to understand how and when we may disclose information. This Disclosure Policy outlines the situations in which information may be shared and your rights regarding that information. Last updated: September 19, 2025</p>

                <section id="purpose">
                    <h2>Purpose of Disclosure</h2>
                    <p>Disclosure helps us comply with legal requirements, protect our rights, and maintain transparency in our business operations. We only share information when necessary and in accordance with applicable laws and regulations.</p>
                </section>

                <section id="types">
                    <h2>Types of Disclosures</h2>
                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <div class="disclosure-card">
                                <h5><i class="fas fa-gavel me-2"></i>Legal Obligations</h5>
                                <p class="mb-0">We may disclose information to comply with legal requirements or respond to lawful requests from public authorities.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="disclosure-card">
                                <h5><i class="fas fa-building me-2"></i>Business Transactions</h5>
                                <p class="mb-0">Information may be shared in connection with mergers, acquisitions, or sales of company assets.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="disclosure-card">
                                <h5><i class="fas fa-users me-2"></i>Third-Party Service Providers</h5>
                                <p class="mb-0">We may share necessary information with trusted partners who perform services on our behalf.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="disclosure-card">
                                <h5><i class="fas fa-shield-alt me-2"></i>Protection of Rights</h5>
                                <p class="mb-0">We may disclose information to protect our rights, property, or safety, as well as the rights, property, or safety of others.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="handling">
                    <h2>How We Handle Disclosures</h2>
                    <p>We ensure that any disclosure is done securely and responsibly, limiting access to only those who need the information and taking steps to protect your privacy whenever possible. We are committed to notifying users about requests for their information unless prohibited by law or in emergency circumstances.</p>
                </section>

                <section id="contact">
                    <div class="contact-box">
                        <h4><i class="fas fa-envelope me-2"></i>Contact Us</h4>
                        <p class="mb-1 mt-3">If you have questions or comments about this Disclosure Policy, please contact us at:</p>
                        <p class="mb-0"><strong><a href="mailto:privacy@yourwebsite.com">privacy@yourwebsite.com</a></strong></p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

