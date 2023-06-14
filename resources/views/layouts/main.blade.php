<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Desa Junrejo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">junrejo@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span> +62 843 721 987 444</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt=""> 
        <h1>Desa Junrejo<span></span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="profil">Profil Desa</a></li>
          <li><a href="agenda">Agenda</a></li>
          <li class="dropdown"><a href="layanan"><span>Layanan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/layanan/surat-ket-usaha">Surat Keterangan Usaha</a></li>
              <li><a href="layanan/suratkettidakmampu">Surat Keterangan Tidak Mampu</a></li>
              <li><a href="#">Pembuatan KTP</a></li>
            </ul>
          </li>
          <li><a href="berita">Berita</a></li>
          <li><a href="contact">Contact</a></li>
          <li><a href="logout">LogOut</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->


  <main id="main">
    
    @yield('container')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="/.html" class="logo d-flex align-items-center">
            <span>Desa Junrejo</span>
          </a>
          <p>Junrejo adalah salah satu desa di Kecamatan Junrejo, Kota Batu. Berjarak kurang lebih 5 KM dari Kota Malang. Desa Junrejo dikenal sebagai salah satu desa yang subur dan beriklim sejuk di kawasan wisata Kota Batu. Desa ini juga terkenal dengan keindahan alamnya, seperti perbukitan dan persawahan yang mempesona.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6 footer-links">
          <h4>Jam Kerja</h4>
          <p>Bekerja 6 hari dalam seminggu, setiap hari, kecuali hari libur</p>
          <div class="row">
            <div class="col-6"><p class="text-start">Senin - Kamis</p></div>
            <div class="col-6"><p class="text-end">08:00 - 16:00</p></div>
          </div>
          <div class="row">
            <div class="col-6"><p class="text-start">Jumat</p></div>
            <div class="col-6"><p class="text-end">08:00 - 12:00</p></div>
          </div>
          <div class="row">
            <div class="col-6"><p class="text-start">Sabtu</p></div>
            <div class="col-6"><p class="text-end">08:00 - 16:00</p></div>
          </div>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Desa Junrejo Kecamatan Junrejo,<br>
            Kota Batu, Provinsi Jawa Timur<br>
            Kode Pos 65321  <br><br>
            <strong>Phone:</strong> +62 843 721 987 444<br>
            <strong>Email:</strong> junrejo@gmail.com.com<br>
          </p>
        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Junrejo</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.instagram.com/gugunzsrgr/">Abd. Ghony Imron</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>