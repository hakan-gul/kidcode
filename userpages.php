<?php
session_start();
?>
<?php
if($_SESSION["name"]) {
?>
<!doctype html>
<html lang="tr">

  <head>
    <title>KidCode</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Audiowide&effect=3d|emboss|anaglyph|3d-float">
    <link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="carousel.css">


  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <nav class="navbar bg-dark text-cursive text-light" data-bs-theme="dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./images/logo-light.png" alt="Logo" width="200" height="50" class="d-inline-block align-text-top" data-aos="flip-up"
              data-aos-duration="2000"></a>
            
            <form class="d-flex " role="search" data-aos="flip-up"
            data-aos-duration="2000">
            <a href="logout.php" class="btn btn-primary btn-custom-1 text-cursive font-effect-3d-float float-end ms-auto">Çıkış Yap</a>

            </form>
          </div>
        
      </nav>

      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" style="background-color:#3D4668">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" data-aos="fade-down"
        data-aos-duration="2000">
          <div class="carousel-item carousel-image bg-img-1 active">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p> -->
            </div>
          </div>
          <div class="carousel-item carousel-image bg-img-2">
          </div>
          <div class="carousel-item carousel-image bg-img-3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <div class="site-section py-5" style="background-color:#3D4668">
      <div class="container">
        <div class="row ">
          <div class="tex-center" data-aos="fade-up"
          data-aos-duration="2000">
          <h2 class="text-white m-0 font-effect-3d text-cursive">Haydi algoritma öğrenerek bu yolculuğa çıkalım!</h2>
          <!-- <a href="signin.php" class="btn btn-primary btn-custom-1 text-cursive font-effect-3d-float float-end ms-auto">Üye Ol</a> -->
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section" style="background-color: #39B5E0;" >
      <div class="container">
        <div class="row mb-5" data-aos="fade-up"
        data-aos-duration="2000">
          <div class="col-12 text-center" >
            <span class="text-cursive h5 text-red d-block">Sizin için</span>
            <h2 class="text-white text-cursive">Paketler</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0" >
            <div class="package text-center bg-white" style="box-shadow: -28px 28px 14px 0px rgba(0,0,0,0.1);"  data-aos="fade-down"
            data-aos-duration="2000">
              <span class="img-wrap"><img src="images/flaticon/svg/001-jigsaw.svg" alt="Image" class="img-fluid"></span>
              <h3 class="text-cursive font-effect-anaglyph">Algoritma</h3>
              <p class="font-size-20">Algoritma ve programlamaya giriş dersi sayesinde programlamaya sağlam ve net bir giriş yapabileceksiniz.</p>
              <p><a href="./algoritma" class="btn btn-primary btn-custom-1 mt-4 text-cursive font-effect-3d-float">Öğrenmeye Başla</a></p>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="package text-center bg-white" style="box-shadow: 0px 28px 14px 0px rgba(0,0,0,0.1);"  data-aos="fade-up"
            data-aos-duration="2000">
              <span class="img-wrap"><img src="images/flaticon/svg/002-target.png" alt="Image" class="img-fluid"></span>
              <h3 class="text-cursive font-effect-anaglyph">HTML / CSS</h3>
              <p class="font-size-20">HTML / CSS dersleri sayesinde hayalinizdeki eğlenceli website tasarımlarını özgürce kodlayabileceksiniz.</p>
               <p><a href="./htmlcss" class="btn btn-warning btn-custom-1 mt-3 text-cursive font-effect-3d-float">Öğrenmeye Başla</a></p> 
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="package text-center bg-white" style="box-shadow: 28px 28px 14px 0px rgba(0,0,0,0.1);"  data-aos="fade-down"
            data-aos-duration="2000">
              <span class="img-wrap"><img src="images/flaticon/svg/003-mission.png" alt="Image" class="img-fluid"></span>
              <h3 class="text-cursive font-effect-anaglyph">Python</h3>
              <p class="font-size-20">Python dersleri sayesinde robotik kodlama, yapay zeka ve yazılımın birçok dalı için güzel bir temel oluşturabileceksiniz.</p>
               <p><a href="./python/index.html" class="btn btn-success btn-custom-1 mt-4 text-cursive font-effect-3d-float">Öğrenmeye Başla</a></p> 
            </div>
          </div>
        </div>
      </div>
    </div>

    
    

    <div class="site-section py-5 bg-warning">
      <div class="container">
        <div class="row justify-content">
          <div class="d-flex" data-aos="fade-up"
          data-aos-duration="2000">
          <h2 class="text-white m-0 font-effect-3d text-cursive ">Geleceğin kodlama kahramanları için!</h2>
          <!-- <a href="signin.php" class="btn btn-primary btn-custom-1 text-cursive font-effect-3d-float float-end ms-auto">Üye Ol</a> -->
          </div>
        </div>
      </div>
    </div>
    <footer class="site-footer" >
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12" >
            <div class="text-cursive" data-aos="fade-down"
            data-aos-duration="2000">
              <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tüm Hakları Saklıdır. | This website is designed by <a href="https://hakangul.online" target="_blank" >Hakan Gul</a>
            </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
      AOS.init();
    </script>
    <?php
}else echo "<h1>Please login first .</h1>";
?>
  </body>

</html>

