<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ponpes Asrama Perguruan Islam
    </title>
    @include('asrama.link')
</head>
<body>
    
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
    
          <div class="logo me-auto  d-flex align-items-center" style="display: flex; align-items: center;">
            <img src="tampilan/assets/img/logo1.png" class="img-fluid" alt="" style="width: 40px; height: auto; margin-right: 20px;">

            <h1><a href="index.html">Asrama Perguruan Islam</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>
          
          @include('asrama.nav')

        </div>
    </header>

@include('asrama.home');

<main id="main">
    @include('asrama.about');
    @include('asrama.jadwal');
    @include('details.portofolio1');
    @include('asrama.guru');
    @include('asrama.contact');
</main>

<footer id="footer">
@include('asrama.footer')
    </footer>
</body>




<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="tampilan/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="tampilan/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="tampilan/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="tampilan/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="tampilan/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="tampilan/assets/js/main.js"></script>

</body>

</html>