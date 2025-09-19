

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
 
    /* Footer */
    footer {
      padding: 70px 0 30px;
      background: linear-gradient(135deg, #0c0c1d, #16162b);
      position: relative;
      overflow: hidden;
      color: #fff;
    }

    /* Subtle animated circles background */
    footer::before {
      content: "";
      position: absolute;
      width: 400px;
      height: 400px;
      background: radial-gradient(circle, rgba(74, 108, 247, 0.15) 0%, transparent 70%);
      top: -50px;
      left: -100px;
      animation: float 10s infinite alternate ease-in-out;
    }

    footer::after {
      content: "";
      position: absolute;
      width: 350px;
      height: 350px;
      background: radial-gradient(circle, rgba(234, 106, 79, 0.15) 0%, transparent 70%);
      bottom: -80px;
      right: -80px;
      animation: float 12s infinite alternate-reverse ease-in-out;
    }

    @keyframes float {
      from { transform: translateY(0px); }
      to { transform: translateY(30px); }
    }

    .footer-content {
      position: relative;
      z-index: 2;
    }

    footer h5 {
      background: linear-gradient(to right, #ea6a4f, #4a6cf7);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: 700;
      margin-bottom: 20px;
    }

    footer a {
      color: #ccc;
      text-decoration: none;
      transition: all 0.3s;
      display: inline-block;
    }

    footer a:hover {
      color: #ea6a4f;
      transform: translateX(5px);
    }

    .social-icons a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 45px;
      height: 45px;
      background: linear-gradient(145deg, #1e1e3a, #25254d);
      color: white;
      border-radius: 50%;
      margin-right: 12px;
      transition: all 0.4s ease;
      perspective: 600px;
    }

    .social-icons a:hover {
      transform: rotateY(20deg) translateY(-5px);
      background: linear-gradient(145deg, #ea6a4f, #d45a42);
      box-shadow: 0 8px 15px rgba(234, 106, 79, 0.3);
    }

/* Newsletter pill box */
.newsletter-form .input-group {
  background: rgba(255, 255, 255, 0.08);
  border-radius: 50px;
  overflow: hidden;
}

.newsletter-input {
  background: transparent !important;
  border: none !important;
  color: white;
  padding: 14px 20px;
}

.newsletter-input::placeholder {
  color: #aaa;
}

.newsletter-btn {
  background: #ea6a4f;
  color: white;
  border: none;
  border-radius: 50px;
  padding: 10px 25px;
  transition: all 0.3s ease;
}

.newsletter-btn:hover {
  background: #4a6cf7;
}



    /* Back to top */
    .back-to-top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 50px;
      height: 50px;
      background: #ea6a4f;
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      opacity: 0;
      transition: all 0.3s;
      z-index: 1000;
      box-shadow: 0 5px 15px rgba(234, 106, 79, 0.4);
    }

    .back-to-top.visible {
      opacity: 1;
    }

    .back-to-top:hover {
      background:  rgba(234, 106, 79, 0.4);
      transform: translateY(-5px);
    }

    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding-top: 20px;
      margin-top: 40px;
    }
  </style>

  <footer>
    <div class="container footer-content">
      <div class="row">
        <div class="col-lg-5 mb-5 mb-lg-0">
          <h5>MySite</h5>
          <p class="mt-4">Delivering the best coupons and deals every day. Saving you money since 2025.</p>

     <div class="newsletter-form">
  <div class="input-group">
    <input type="email" class="form-control newsletter-input text-white" placeholder="Your email address">
    <button class="btn newsletter-btn" type="button">Subscribe</button>
  </div>
</div>
        </div>

        <div class="col-lg-3 col-md-4 mb-5 mb-md-0">
          <h5>Quick Links</h5>
        <ul class="list-unstyled">
  <li class="mb-1"><a href="/"><i class="bi bi-house-door-fill me-3 text-white"></i>Home</a></li>
  <li class="mb-1"><a href="about.php"><i class="bi bi-info-circle-fill me-3 text-white"></i>About</a></li>
  <li class="mb-1"><a href="blog.php"><i class="bi bi-journal-text me-3 text-white"></i>Blog</a></li>
  <li class="mb-1"><a href="contact.php"><i class="bi bi-telephone-fill me-3 text-white"></i>Contact</a></li>
  <li class="mb-1"><a href="privacy.php"><i class="bi bi-shield-lock-fill me-3 text-white"></i>Privacy Policy</a></li>
</ul>


        </div>

        <div class="col-lg-4 col-md-4">
          <h5>Follow Us</h5>
          <p>Stay connected for daily deals and exclusive offers</p>

          <div class="social-icons d-flex mt-4">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
            <a href="#"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>

      <!-- Partners logos -->
      <!-- <div class="partners mt-4">
        <img src="https://dummyimage.com/100x40/fff/aaa.png&text=Visa" alt="Visa">
        <img src="https://dummyimage.com/100x40/fff/aaa.png&text=PayPal" alt="PayPal">
        <img src="https://dummyimage.com/100x40/fff/aaa.png&text=Mastercard" alt="Mastercard">
        <img src="https://dummyimage.com/100x40/fff/aaa.png&text=Stripe" alt="Stripe">
      </div> -->

      <div class="footer-bottom text-center">
        <p class="mb-0">&copy; <span id="years"></span> MySite. All rights reserved. | <a href="#">Terms</a> | <a href="#">Privacy</a></p>
      </div>
    </div>

    <a href="#" class="back-to-top">
      <i class="bi bi-arrow-up"></i>
    </a>
  </footer>
  <script>
  const currentYears = new Date().getFullYear();
  document.getElementById("years").textContent = currentYears;
</script>
  <script>
    // Back to top button
    const backToTopButton = document.querySelector('.back-to-top');
    window.addEventListener('scroll', () => {
      backToTopButton.classList.toggle('visible', window.pageYOffset > 300);
    });
  </script>

