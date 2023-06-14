@extends('layouts.main')

@section('container')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero ">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Selamat Datang di <span>Desa Junrejo</span></h2>
          <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
              <a href="login" class="btn-get-started">Login</a>
              <a href="https://www.youtube.com/watch?v=1OX5S8B1ruU" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/background.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= Profil Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="col-lg-12">
          <h3>Sejarah Berdirinya Desa Junrejo</h3>
          <img src="assets/img/profil.jpg" class="img-fluid rounded-4 mb-4" alt="">
          <p>Dari hasil pelacakan sejarah oleh sesepuh dan tokoh masyarakat Desa Junrejo disebutkan bahwa asal-usul Desa kami yang bernama Desa Junrejo berasal dari kata “DYON– RETJO“ atau  “JUN WATU“. Dyon menurut bahasa jawa kuno artinya tempat air gentong, sehingga Dyion-Retjo atau Arca Dyion Watu bias bermakna tempat air dari batu.</p>
          <p>Konon menurut sumber informasi yang didapat dari cerita turun temurun, keberadaan JUN tersebut sejak abad IX atau Masa Kerajaan Tumapel/Singosari. Pada tahun 1914 M di Desa Junwatu ditemukan benda berupa ”JUN” dan di Desa Telogo rejo ditemukan ”TELOGO”(menurut masyarakat setempat disebut pula ”JEDING”dalam bahasa Jawa).</p>
        </div>

        <div class="row gy-4 mt-3">
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <h3 class="fst-italic"> Visi</h3>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i>Desa Junrejo yang Maju artinya Desa yang memiliki sumberdaya manusia unggul, potensisosial, ekonomi dan ekologi, serta kemampuan mengelolanya untuk peningkatan kesejahteraan masyarakat Desa, kualitas hidup manusia, dan menanggulangi kemiskinan.</li>
                <li><i class="bi bi-check-circle-fill"></i>Adapun yang dimaksud Transparan adalah Pemerintah Desa dalam pembuatan Kebijakan dan Pengelolaan keuangan dilakukan secara terbuka untuk diketahui oleh masyarakat, guna meningkatkan kepercayaan kepada Pemerintah Desa.</li>
                <li><i class="bi bi-check-circle-fill"></i>Sedangkan yang dimaksud dengan Sejahtera adalah Mewujudkan masyarakat yang terpenuhi hak-hak dasarnya baik dari aspek kesehatan, pendidikan dan ekonomi yang ditandai dengan meningkatnya angka Indek Pembangunan Manusia (IPM) yang didukung dengan terwujudnya kebebasan kehidupan beragama dan bernegara yang ditunjukkan dengan penurunan angka kemiskinan dan jumlah keluarga Pra Sejahtera</li>
              </ul>
              
            </div>
          </div>
          <div class="col-lg-6">
            <div class="content ps- ps-lg-5">
              <h3 class="fst-italic">Misi</h3>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i>Meningkatkan kualitas sumberdaya manusia yang unggul dan bermartabat</li>
                <li><i class="bi bi-check-circle-fill"></i>Meningkatkan perekonomian Desa melalui penguatan Badan Usaha MilikDesa (BUMDes) dan pemberdayaan ekonomi masyarakat</li>
                <li><i class="bi bi-check-circle-fill"></i>Meningkatkan infrastruktur dan utilitas desa, untuk mendukung tata lingkungan desa yang bersih, sehat dan indah</li>
                <li><i class="bi bi-check-circle-fill"></i>Melestarikan dan mengembangkanbudayalokalDesaJunrejo</li>
              </ul>
            </div>
            
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Berita Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Politics</p>

              <h2 class="title">
                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Sports</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Entertainment</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->

@endsection