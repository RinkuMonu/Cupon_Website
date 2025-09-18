<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Unique Coupon Page</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    /* Navbar */
    .navbar {
      background: #ffffff;
      /* white background */
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;

    }

    .nav-link {

      font-weight: 500;
      margin: 0 10px;
      position: relative;
      transition: color 0.3s;
    }

    .nav-link:hover {
      color: #ea6a4f !important;
      /* brighter red on hover */
    }

    .nav-link.active {
      color: #ea6a4f !important;
      /* brighter red on hover */
    }

    .nav-link::after {
      content: "";
      position: absolute;
      width: 0%;
      height: 2px;
      left: 0;
      bottom: -5px;
      background: #ea6a4f;
      /* reddish underline */
      transition: 0.3s ease;
    }

    .nav-link:hover::after {
      width: 100%;
    }


    /* Search Box */
    .search-box {
      position: relative;
      max-width: 250px;
    }

    .search-box input {
      border-radius: 30px;
      padding-left: 40px;
    }

    .search-box i {
      position: absolute;
      top: 50%;
      left: 15px;
      transform: translateY(-50%);
      color: #ea6a4f;
    }

    /* Mobile Adjustments */
    @media (max-width: 768px) {
      .search-box {
        width: 100%;
        margin-top: 10px;
      }

      .nav-link {
        margin: 5px 0;
      }
    }

  </style>
</head>

<body>

  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">MySite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ps-2 ps-md-0" id="navbarNav">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Privacy Policy</a>
            </li>
          </ul>
          <form class="d-flex search-box mt-2 mt-lg-0">
            <i class="bi bi-search"></i>
            <input class="form-control" type="search" placeholder="Search">
          </form>
        </div>
      </div>
    </nav>
  </header>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>