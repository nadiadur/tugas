<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portfolio Details </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('tampilan/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('tampilan/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('tampilan/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tampilan/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('tampilan/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tampilan/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('tampilan/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

        
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center">
        
              <div class="logo me-auto">
                <h1><a href="index.html">Asrama Pendidikan Islam</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
              </div>
              <nav id="navbar" class="navbar">
              
                <i class="bi bi-list mobile-nav-toggle"></i>
              </nav><!-- .navbar -->
        
    <!-- Header and other sections -->
            </header>
    <main id="main">

        <!-- Breadcrumbs -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portofolio Details</h2>
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                       
                        <li>Portofolio Details</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- Portfolio Details Section -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="{{ asset('tampilan/assets/img/portfolio/kamar.png') }}" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('tampilan/assets/img/portfolio/almari.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Kamar Santri</h3>
                            <ul>
                                <li><strong>Category</strong>: Fasilitas</li>
                                <li><strong>Lokasi</strong>: Kamar Pondok</li>
                                <li><strong>Tanggal </strong>: 16 Mei, 2024</li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>Deskripsi Pelaksanaan</h2>
                            <p>
                                Kamar santri di pondok merupakan fasilitas penting yang menyediakan ruang pribadi bagi setiap santri. Kamar ini dirancang untuk memberikan kenyamanan dan privasi yang diperlukan selama masa tinggal di pondok. Setiap kamar dilengkapi dengan fasilitas dasar seperti tempat tidur, meja belajar, dan lemari untuk menyimpan barang. Lingkungan kamar yang bersih dan teratur mendukung proses belajar dan istirahat santri, serta menciptakan suasana yang kondusif untuk kegiatan sehari-hari.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Portfolio Details Section -->

    </main>
@include('asrama.footer');
    <!-- Footer and other sections -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('tampilan/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('tampilan/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('tampilan/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('tampilan/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('tampilan/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('tampilan/assets/js/main.js') }}"></script>

</body>

</html>
