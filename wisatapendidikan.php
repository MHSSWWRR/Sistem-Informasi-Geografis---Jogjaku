<?php
session_start();
$sesiData = !empty($_SESSION['sesiData'])?$_SESSION['sesiData']:'';
if(!empty($sesiData['status']['msg'])){
    $statusPsn = $sesiData['status']['msg'];
    $jenisStatusPsn = $sesiData['status']['type'];
    unset($_SESSION['sesiData']['status']);
}
?>
<?php
require_once('bdd.php');


$sql = "SELECT id, title, keterangan, start, end, color FROM events ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>JOGJAKU</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="images/jogjakublack.png">
</head>

<body>
<!-- header section -->
<section>
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.php">JOGJAKU</a>
      <nav class="navigation" role="navigation">
      <ul class="primary-nav">
          <li><a href="index.php">Beranda</a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wisata <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li>
                            <a style="color:grey" href="wisataalam.php">Wisata Alam</a>
                       </li>
                       <li>
                            <a style="color:grey" href="wisatasejarah.php">Wisata Sejarah</a>
                       </li>
                       <li>
                            <a style="color:grey" href="wisatapendidikan.php">Wisata Pendidikan</a>
                       </li>
                    </ul>
              </li>
          <li><a href="artikel.php">Artikel</a></li>
          <li><a href="galeri.php">Galeri</a></li>
          <li><a href="testimonial.php">Testimonial</a></li>
          <li><a href="tentang.php">Tentang Kami</a></li>
          <?php 
                        if(!isset($_SESSION['is_login'])){
                    ?>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <?php }else{?>
                    <li>
                    <a href="akunuser.php?logoutSubmit=1" class="logout">Logout (<?= $_SESSION['namauser'];?>)</a>
                    </li><?php }?>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    </header> 
</section>
<!-- header section --> 
<!-- intro section -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
    <br>
      <h6>WISATA PENDIDIKAN</h6>
    </div>
  </div>
</section>
<!-- intro section --> 
<!-- services section -->

<section id="services" class="services service-section">
  <div class="container">
      <div class="row">
            <div class="col-md-6">
                         <section id="testimonials" class="section testimonials no-padding">
                  <div class="container-fluid">
                    <div class="row no-gutter">
                      <div class="flexslider">
                      <ul class="slides">
                      <li>
                          <img src="images/foto/pendidikan/a.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/pendidikan/a.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/pendidikan/a.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Museum Batik Yogyakarta</h2>
                <p>Museum Batik Yogyakarta adalah museum batik pertama di Jogja dan pada tahun 2001 museum ini memperoleh penghargaan dari MURI sebagai pemrakarsa berdiriya Museum Sulaman pertama di Indonesia.</p>
                <p>Museum yang tertelak di Jalan Dr. Sutomo Jogjakrta ini menyimpan sebanya 1.259 koleksi, terdiri dari kain batik, peralatan membatik seperti canting tulis, canting cat, bahan warna tradisional, malam batik dan juga parafin.</p>
                <p>Museum ini diresmikan pada 12 Mei 1977 oleh Kanwil P&K Daerah Istimewa Yogyakarta.</p>
            </div>
        </div>
    </div>
    <section id="services" class="services service-section">
            <div class="container">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Jalan Dr Sutomo No. 13 A, Bausasran, Danurejan, Bausasran, Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55211</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                    <p>museumbatik.com</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
                  <div class="services-content">
                    <p>(0274) 562338</p>
                  </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.947512974857!2d110.3771246!3d-7.795382200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a578011cd318b%3A0xe236d09576ad28c8!2sHotel%20Museum%20Batik%20Yogyakarta!5e0!3m2!1sid!2sid!4v1734322761856!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
      </section>
  </div>
</section>
<section id="services" class="services service-section">
  <div class="container">
      <div class="row">
            <div class="col-md-6">
                         <section id="testimonials" class="section testimonials no-padding">
                  <div class="container-fluid">
                    <div class="row no-gutter">
                      <div class="flexslider">
                      <ul class="slides">
                      <li>
                          <img src="images/foto/pendidikan/b.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/pendidikan/b.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/pendidikan/b.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Museum Dharma Wiratama</h2>
                <p>Museum Dharga Wiratama terletak di Jalan Jend. Sudirman No. 75 Yogyakarta. Bagi kamu pecinta dunia militer, tempat yang satu ini wajib kamu kunjungi saat berada di Jogja.</p>
                <p>Pada tahun 1950 – 1980 gedung ini digunakan sebagai Markas Komando Resirem (makorem), dan mulai dari tahun 1980 gedung di beralih menjadi Museum Dharma Wiratama Yogakarta, hinnga sekarang.</p>
                <p>Kalau kamu mau tau kehebatan TNI Angkatan Darat, kamu harus mampir kesini, disini terdapat begitu banyak koleksi bersejarah, mulai dari Tank Stuart MK I dan II bautan Amerika, hingga samurai, golok, pistol ada di museum ini.</p>
            </div>
        </div>
    </div>
    <section id="services" class="services service-section">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Jl. Jend. Sudirman No.75, Terban, Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55223</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Tidak tersedia</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
                  <div class="services-content">
                    <p>(0274) 561417</p>
                  </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.065087934637!2d110.375582!3d-7.782923999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5833a9864e7d%3A0x85ca2d673e7aceb4!2sMuseum%20TNI%20AD%20Dharma%20Wiratama!5e0!3m2!1sid!2sid!4v1734322818651!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
      </section>
  </div>
</section>
<section id="services" class="services service-section">
  <div class="container">
      <div class="row">
            <div class="col-md-6">
                         <section id="testimonials" class="section testimonials no-padding">
                  <div class="container-fluid">
                    <div class="row no-gutter">
                      <div class="flexslider">
                      <ul class="slides">
                      <li>
                          <img src="images/foto/pendidikan/c.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/pendidikan/c.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/pendidikan/c.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Museum Perjuangan Yogyakarta</h2>
                <p>Museum Perjuangan adalah sebuah museum yang sengaja didirikan untuk mengenang sejarah perjuangan Bangsa Indonesia dan mengenang setengah abad masa Kebangkitan Nasional.</p>
                <p>Museum yang terletak di Jalan Kolonel Sugiyono No. 24 Yogyakarta ini dibangun pada 17 Agustus 1959 dan peletakan batu pertama dilakukan oleh Sri Paku Alam VIII.</p>
                <p>Bangunan museum ini cukup artistik, pada bagian atas nya bangunan ini terinspirasi gaya arsitektur kekaisaran Romawi Kuno, sementara pada bagian bawahnya diadaptasi dari gaya bangunan Candi Mataram Hindu.</p>
            </div>
        </div>
    </div>
    <section id="services" class="services service-section">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Jl. Kolonel Sugiyono No.24, Brontokusuman, Mergangsan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55153</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Tidak tersedia</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
                  <div class="services-content">
                    <p>(0274) 387576</p>
                  </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.74849120882!2d110.37181869999999!3d-7.816425499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5798b77b074f%3A0x6c69556d4022dc2c!2sMuseum%20Perjuangan!5e0!3m2!1sid!2sid!4v1734322852164!5m2!1sid!2sid"width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
      </section>
  </div>
</section>
<!-- services section --> 
<!-- work section -->
<!-- overlay --> 
<!-- work section --> 
<!-- our team section -->
<!-- our team section --> 
<!-- Testimonials section -->
<!-- Testimonials section --> 
<!-- contact section -->
<!-- contact section --> 

<!-- Footer section -->
<footer class="footer">
  <div class="footer-top section">
    <div class="container" align="center">
      <div class="row">
        <a style="padding:20px"; href="#"><i class="fa fa-facebook"></i></a>
        <a style="padding:20px"; href="#"><i class="fa fa-twitter"></i></a>
        <a style="padding:20px"; href="#"><i class="fa fa-linkedin"></i></a>
        <a style="padding:20px"; href="#"><i class="fa fa-google-plus"></i></a>
        <br>
        <br>
<p>Copyright © 20123 jogjaku.com All Rights Reserved. Made by Vitto
      </div>
    </div>
  </div>
</footer>
  <!-- footer top --> 

<!-- Footer section --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script>
</body>
</html>