<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css" />

    <style>
   
    


        /* Contact box */
        .contact-container {
            background: #fff;
            border-radius: 12px;
            padding: 2.5rem;
            max-width: 950px;
            margin: 0 auto 4rem;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.07);
        }

        /* Form */
        .form-label {
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.4rem;
        }

        .form-control {
            border-radius: 6px;
            padding: 0.7rem;
            border: 1px solid #ddd;
            transition: border-color 0.2s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: none;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 0.7rem 1.6rem;
            border-radius: 6px;
            font-weight: 600;
            transition: background-color 0.2s ease, transform 0.2s ease;
        }

        .btn-primary:hover {
            background-color: #b94734;
            transform: translateY(-2px);
        }

        /* Contact info */
        .contact-info {
            background: #fdfdfd;
            border: 1px solid #eee;
            border-radius: 10px;
            padding: 1.8rem;
        }

        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.2rem;
        }

        .info-icon {
            flex-shrink: 0;
            background: #f2f2f2;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 1.2rem;
            margin-right: 0.9rem;
        }

        .info-content h5 {
            margin: 0;
            font-size: 1rem;
            font-weight: 600;
        }

        .info-content p {
            margin: 0;
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        .btn-send{
background-color: #ea6a4f !important;
border-color: #ea6a4f !important;
        }

    </style>
</head>

<body>
<?php include 'header.php'; ?>
     <div class="header-hero position-relative">
<div class="container">
        <!-- Banner -->
    <div class="row align-items-center gy-3">
    <div class="col-lg-7">
  <div class="mb-2" style="font-size: 1.01em; color: #888">
    SEPTEMBER 2024
  </div>
  <h1 class="header-title">
    Let’s stay <br /><span class="highlight">connected </span>with you
  </h1>
  <div class="hero-icons my-3">
    <img src="https://randomuser.me/api/portraits/men/11.jpg" alt="" />
    <img src="https://randomuser.me/api/portraits/women/25.jpg" alt="" />
    <img src="https://randomuser.me/api/portraits/men/35.jpg" alt="" />
  </div>
  <p class="header-info">
    We’d love to hear from you. Whether you have a question, feedback, or just 
    want to say hello—reach out anytime and our team will get back to you soon.
  </p>
</div>
    </div>

        <div class="col-lg-5 text-center position-relative">
            <img src="contact.png" class="img-fluid hero-img-people" width="600" alt="Students" />
            <div class="hero-indicator">
                <div class="hero-indicator-inner">
                    Last Updated<br />
                    <span style="font-size: 1.13em; font-weight: 800">September 2024</span>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Contact Section -->
<div class="bg-white pt-5">
        <div class="contact-container ">
        <div class="row g-4">
            <!-- Form -->
            <div class="col-lg-8">
                <form id="contactForm" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address *</label>
                        <input type="email" class="form-control" id="email" required>
                        <div class="invalid-feedback">Please provide a valid email address.</div>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" pattern="[0-9+\-\s()]*">
                        <div class="invalid-feedback">Please provide a valid phone number.</div>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message *</label>
                        <textarea class="form-control" id="message" rows="5" required></textarea>
                        <div class="invalid-feedback">Please enter your message.</div>
                    </div>

                    <button type="submit" class="btn btn-send text-white ">
                        <i class="fas fa-paper-plane me-2"></i>Send Message
                    </button>

                </form>
            </div>

            <!-- Info -->
            <div class="col-lg-4">
                <div class="contact-info">
                    <h5 class="mb-3">Contact Information</h5>
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-phone"></i></div>
                        <div class="info-content">
                            <h5>Phone</h5>
                            <p>+1 (555) 123-4567</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-envelope"></i></div>
                        <div class="info-content">
                            <h5>Email</h5>
                            <p>info@yourcompany.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Validation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('contactForm');
            const successMessage = document.getElementById('successMessage');
            const phoneInput = document.getElementById('phone');

            phoneInput.addEventListener('input', function () {
                this.value = this.value.replace(/[^0-9+\-\s()]/g, '');
            });

            form.addEventListener('submit', function (event) {
                event.preventDefault();

                if (!form.checkValidity()) {
                    event.stopPropagation();
                    form.classList.add('was-validated');
                    return;
                }
                successMessage.style.display = 'block';
                form.reset();
                form.classList.remove('was-validated');
                setTimeout(() => { successMessage.style.display = 'none'; }, 5000);
            });
        });
    </script>
</body>
<?php include 'footer.php'; ?>

</html>