<?php include 'includes/header.php'; ?>
<!-- Section 1: Intro with Image and Description -->
<div id="about-intro-section" class="container my-5">
  <div class="row align-items-center g-4"> <!-- Added g-4 for spacing between columns -->
    <div class="col-md-6">
      <img src="https://randomuser.me/api/portraits/men/76.jpg" alt="Intro Image" class="img-fluid about-image">
    </div>
    <div class="col-md-6">
      <h2>Why RTS will be The Right Partner for You...</h2>
      <p>PT Rajawali Telekomunikasi Selular (RTS) is a reputable national company with a strong track record since its establishment in 2009. With expertise in managing multiple companies across diverse sectors including Mobile Retail, Telecommunication Distribution, Telecommunication infrastructure, Payment and Biller Purchase, and Digital Payment Ecosystem. RTS offers comprehensive solutions for your business needs.</p>
      <p>As your trusted business partner, RTS specializes in digital payments offering a wide range of telecommunication and information technology products to cater to your customers demands. Moreover, we empower our partners by equipping them with strategic plans tailored to their respective sectors, enabling them to thrive in their business endeavors.</p>
    </div>
  </div>
</div>


<!-- Section 2: Creative Students Description -->
<div id="about-creative-section" class="container my-5">
  <div class="row align-items-center g-4"> <!-- Added g-4 for spacing between columns -->
    <div class="col-md-6">
      <h2>Kami Mahasiswa Kreatif</h2>
      <p>RTS specializes in digital payments, offering a wide range of telecommunication and information technology products to cater to your customers demands. Moreover, we empower our partners by equipping them with strategic plans tailored to their respective sectors, enabling them to thrive in their business endeavors.</p>
      <a href="forum.php" class="btn btn-discuss">Let's Discuss</a>
    </div>
    <div class="col-md-6">
      <img src="https://randomuser.me/api/portraits/women/76.jpg" alt="Creative Image" class="img-fluid about-image">
    </div>
  </div>
</div>



<!-- Section 3: Owner Cards with Social Media -->
<div id="about-executive-section" class="container my-5">
  <h2 class="text-center mb-4">Our Executive Team</h2>
  <p class="text-center mb-4">9 Members are now involved in the project and we are hiring more marketing specialists, blockchain engineers, and growing our development and marketing team.</p>
  <div class="row">
    <?php for ($i = 1; $i <= 9; $i++): ?>
    <div class="col-md-4 mb-4">
      <div class="card user-card">
        <img src="https://randomuser.me/api/portraits/men/<?= $i % 10 ?>.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Staff Image" style="width: 150px; height: 150px;">
        <div class="card-body text-center">
          <h5 class="card-title">Staff Name <?= $i ?></h5>
          <p class="card-text">Short description here...</p>
          <div class="social-icons">
            <a href="#" class="me-2"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="me-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="me-2"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
    <?php endfor; ?>
  </div>
</div>



<?php include 'includes/footer.php'; ?>
