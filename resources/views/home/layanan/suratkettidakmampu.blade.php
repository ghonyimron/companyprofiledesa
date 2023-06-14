<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Junrejo - Profil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/main.css" rel="stylesheet">
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
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Junrejo</h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/profil">Profil Desa</a></li>
          <li><a href="/agenda">Agenda</a></li>
          <li class="dropdown"><a href="layanan"><span>Layanan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="">Surat Keterangan Usaha</a></li>
              <li><a href="layanan/suratkettidakmampu">Surat Keterangan Tidak Mampu</a></li>
              <li><a href="#">Pembuatan KTP</a></li>
            </ul>
          </li>
          <li><a href="/berita">Berita</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/logout">LogOut</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <nav>
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li>Layanan</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

        <!-- ======= Layanan Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
      
              <div class="section-header">
                <h2>Layanan Surat Keterengan tidak Mampu</h2>
                <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
              </div>
      
              <div class="row gx-lg-0 gy-4">
      
                <div class="col-12">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">Nomor NIK</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nomor NIK">
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Anda">
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Tempat Lahir Anda">
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal"  placeholder="name@example.com">
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Alamat Anda">
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">Nomor Hp</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nomor Hp Anda">
                    </div>
                    <div class="my-4">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                      </div>
                      <div class="text-center"><button type="submit">Buat Surat</button></div>
                  </form>
                </div><!-- End Contact Form -->
      
              </div>
      
            </div>
        </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="/" class="logo d-flex align-items-center">
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

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>