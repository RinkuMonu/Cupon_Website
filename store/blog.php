<?php include 'header.php'; ?>
<link rel="stylesheet" href="blog.css">
<link rel="stylesheet" href="style.css" />
<div class="container py-4">
  <!-- Section Header -->
  <div class="shadow d-flex justify-content-between align-items-center mb-4" style="margin: 100px 0px;">
    <h1 class="fw-bold"><i class="bi bi-chat-dots icon-color"></i> Our Blogs </h1>
    <a href="#" class="text-decoration-none fw-semibold">All News →</a>
  </div>

 
  <div class="row g-4" style="margin-bottom: 20px;">
    <div class="col-md-4">
      <a href="blogdetails.html" class="text-decoration-none text-dark">
        <div class="news-card">
          <div class="position-relative">
            <img src="https://picsum.photos/id/1018/600/400" alt="News Image" class="img-fluid">
            <span class="full-article-btn">Full Article</span>
          </div>
          <div class="news-body">
            <h5 class="blog-title mt-2">Image Post Format voluptate velit esse cillum</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua</p>
            <div class="d-flex justify-content-between news-meta">
              <span>📅 March 3, 2015</span>
              <span>💬 0</span>
            </div>
          </div>
        </div>
      </a>
    </div>



  </div>
</div>
<?php include 'footer.php'; ?>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>