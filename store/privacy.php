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
              --light-bg: #f8f9fa;
              --dark-text: #2c3e50;
              --medium-text: #5a6270;
              --border-color: #eef2f7;
          }

          body {
              font-family: 'Inter', sans-serif;
              background-color: var(--light-bg);
              color: var(--medium-text);
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
              /* background-color: var(--primary-color); */
              /* color: white; */
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
              /* Font Awesome check-circle icon */
              font-family: 'Font Awesome 6 Free';
              font-weight: 900;
              position: absolute;
              left: 0;
              top: 0.2rem;
              color: var(--primary-color);
              font-size: 1.2rem;
          }

          .styled-list strong {
              color: var(--dark-text);
              font-weight: 600;
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

          /* Tablet adjustments (≤991px) */
          @media (max-width: 991.98px) {
              .header-hero {
                  text-align: center;
              }

              /* .header-hero .col-lg-7 {
                  order: 2;
              }

              .header-hero .col-lg-5 {
                  order: 1;
                  margin-bottom: 1.5rem;
              } */

              .sidebar-card {
                  position: static;
                  margin-bottom: 2rem;
                  box-shadow: none;
              }
          }

          /* Small tablets & large phones (≤767px) */
          @media (max-width: 767.98px) {
              h1.header-title {
                  font-size: 2rem;
                  line-height: 1.3;
              }

              .policy-content h2 {
                  font-size: 1.5rem;
                  line-height: 1.35;
              }

              .lead-text {
                  font-size: 1rem;
                  line-height: 1.5;
              }

              .hero-icons img {
                  width: 45px;
                  height: 45px;
                  border-radius: 50%;
              }

              .contact-box {
                  padding: 1.8rem;
              }
          }

          /* Small phones (≤575px) */
          @media (max-width: 575.98px) {
              h1.header-title {
                  font-size: 1.6rem;
                  line-height: 1.25;
              }

              .header-info {
                  font-size: 0.95rem;
                  line-height: 1.5;
              }

              .policy-content h2 {
                  font-size: 1.3rem;
                  line-height: 1.3;
              }

              .styled-list li {
                  font-size: 0.95rem;
                  line-height: 1.45;
              }

              .hero-icons img {
                  width: 38px;
                  height: 38px;
              }

              .contact-box h4 {
                  font-size: 1.1rem;
              }

              .contact-box p,
              .contact-box a {
                  font-size: 0.95rem;
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
                    Our <br /><span class="highlight">Privacy Policy</span>
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
                      <a class="nav-link" href="#cookies"><i class="fas fa-cookie-bite"></i> Use of Cookies</a>
                      <a class="nav-link" href="#usage"><i class="fas fa-tasks"></i> How We Use Information</a>
                      <a class="nav-link" href="#disclosure"><i class="fas fa-share-alt"></i> Disclosure of Information</a>
                      <a class="nav-link" href="#security"><i class="fas fa-shield-alt"></i> Security of Information</a>
                      <a class="nav-link" href="#contact"><i class="fas fa-envelope"></i> Contact Us</a>
                  </nav>
              </div>
          </div>

          <div class="col-lg-9">
              <div class="policy-content">
                  <p class="lead-text">Your privacy is important to us. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website. Please read this policy carefully. If you do not agree with the terms of this privacy policy, please do not access the site. Last updated: September 19, 2025</p>

                  <section id="collection">
                      <h2>Information We Collect</h2>
                      <p>We may collect information about you in a variety of ways. The information we may collect on the Site includes:</p>
                      <ul class="styled-list">
                          <li><strong>Personal Data:</strong> Personally identifiable information, such as your name, shipping address, email address, and telephone number, and demographic information, such as your age, gender, hometown, and interests, that you voluntarily give to us when you register with the Site or when you choose to participate in various activities related to the Site, such as online chat and message boards.</li>
                          <li><strong>Derivative Data:</strong> Information our servers automatically collect when you access the Site, such as your IP address, your browser type, your operating system, your access times, and the pages you have viewed directly before and after accessing the Site.</li>
                          <li><strong>Mobile Device Data:</strong> Device information, such as your mobile device ID, model, and manufacturer, and information about the location of your device, if you access the Site from a mobile device.</li>
                      </ul>
                  </section>

                  <section id="cookies">
                      <h2>Use of Cookies</h2>
                      <p>We may use cookies, web beacons, tracking pixels, and other tracking technologies on the Site to help customize and improve your experience. When you access the Site, your personal information is not collected through the use of tracking technology. Most browsers are set to accept cookies by default. You can remove or reject cookies, but be aware that such action could affect the availability and functionality of the Site.</p>
                  </section>

                  <section id="usage">
                      <h2>How We Use Your Information</h2>
                      <p>Having accurate information about you permits us to provide you with a smooth, efficient, and customized experience. Specifically, we may use information collected about you via the Site to:</p>
                      <ul class="styled-list">
                          <li>Create and manage your account.</li>
                          <li>Process your payments and refunds.</li>
                          <li>Email you regarding your account or order.</li>
                          <li>Fulfill and manage purchases, orders, payments, and other transactions related to the Site.</li>
                          <li>Request feedback and contact you about your use of the Site.</li>
                          <li>Monitor and analyze usage and trends to improve your experience with the Site.</li>
                          <li>Prevent fraudulent transactions, monitor against theft, and protect against criminal activity.</li>
                      </ul>
                  </section>

                  <section id="disclosure">
                      <h2>Disclosure of Your Information</h2>
                      <p>We may share information we have collected about you in certain situations. Your information may be disclosed as follows:</p>
                      <ul class="styled-list">
                          <li><strong>By Law or to Protect Rights:</strong> If we believe the release of information about you is necessary to respond to legal process, to investigate or remedy potential violations of our policies, or to protect the rights, property, and safety of others, we may share your information as permitted or required by any applicable law, rule, or regulation.</li>
                          <li><strong>Business Transfers:</strong> We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.</li>
                          <li><strong>Third-Party Service Providers:</strong> We may share your information with third parties that perform services for us or on our behalf, including payment processing, data analysis, email delivery, hosting services, customer service, and marketing assistance.</li>
                      </ul>
                  </section>

                  <section id="security">
                      <h2>Security of Your Information</h2>
                      <p>We use administrative, technical, and physical security measures to help protect your personal information. While we have taken reasonable steps to secure the personal information you provide to us, please be aware that despite our efforts, no security measures are perfect or impenetrable, and no method of data transmission can be guaranteed against any interception or other type of misuse.</p>
                  </section>

                  <section id="contact">
                      <div class="contact-box">
                          <h4><i class="fas fa-envelope me-2"></i>Contact Us</h4>
                          <p class="mb-1 mt-3">If you have questions or comments about this Privacy Policy, please contact us at:</p>
                          <p class="mb-0"><strong><a href="mailto:privacy@yourwebsite.com">privacy@yourwebsite.com</a></strong></p>
                      </div>
                  </section>
              </div>
          </div>
      </div>
  </div>
  <?php include 'footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>