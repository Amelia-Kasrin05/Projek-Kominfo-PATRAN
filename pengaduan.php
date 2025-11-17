<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PATRAN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="landingpage.php">PATRAN</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="homepage.php">Home</a></li>
          <li><a class="nav-link" href="daftartransportasilogin.html">Daftar Transportasi</a></li>
          <li><a class="nav-link" href="contactus.html">Contact Us</a></li>
          <li><a class="nav-link scrollto active" href="formpengaduan.html">Pengaduan</a></li>
          <li class="dropdown"><a href="#"><span>My Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="landingpage.php">Logout</a></li>
            </ul>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
  <br>
  <br>
  <br>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Form Pengaduan</h2>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="contact-about">
            <h3>Padang Transportasi Rancak</h3>
            <p>Website Sistem Pelayanan Informasi Transportasi Umum Masyarakat Kota Padang. PATRAN merupakan sebuah website yang mampu membantu memberikan informasi Transportasi Umum yang ada di Kota Padang serta membantu menyampaikan saran atau keluhan masyarakat tentang layanan transportasi yang ada di Kota Padang. </p>
            <div class="social-links">
              <a href="http://twitter.com/" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="http://instagram.com/khoirul.gnwn" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/in/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
          <div class="info">
            <div>
              <i class="ri-map-pin-line"></i>
              <p>Kota Padang</p>
            </div>

            <div>
              <i class="ri-mail-send-line"></i>
              <p>Patran@gmail.com</p>
            </div>

            <div>
              <i class="ri-phone-line"></i>
              <p>0850000000000</p>
            </div>
          </div>
        </div>

        <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
          <form action="addpengaduan.php" method="post" role="form" class="php-email-form">
            <div class="form-group">
              <input type="text" name="nama" class="form-control" placeholder="Nama" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" placeholder="Jenis Transportasi" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="plat" placeholder="Plat Nomor kendaraan" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Ketikkan Pengaduan Anda" required></textarea>
            </div>

            <div>
              <div id="loading" style="display:none;">Loading...</div>
              <div id="error-message" style="display:none; color:red;">Terjadi kesalahan, silakan coba lagi.</div>
              <div id="sent-message" style="display:none; color:green;">Pengaduan Anda Telah Terkirim. Terima kasih!</div>
            </div>

            <div class="text-center"><button type="submit" id="submit-btn">Kirim</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Khoirul Gunawan & Amelia Kasrin</strong>. All Rights Reserved
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Contact Us</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Custom Notification Script -->
  <script>
    document.querySelector('.php-email-form').addEventListener('submit', function(e) {
      e.preventDefault();  

    
      document.getElementById('loading').style.display = 'block';

      
      setTimeout(function() {
        
        document.getElementById('loading').style.display = 'none';
        document.getElementById('sent-message').style.display = 'block';
        document.querySelector('.php-email-form').reset();
      }, 2000); 
    });
  </script>

</body>

</html>

