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
      <h6>WISATA SEJARAH</h6>
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
                          <img src="images/foto/sejarah/a.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/sejarah/a.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/sejarah/a.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Candi Borobudur</h2>
                <p>Tempat wisata di Jawa Tengah ini memiliki luas 123 x 123 meter persegi dan terdiri dari 10 tingkat. Bangunannya tersusun dari balok vulkanik yang membentuk 504 arca, 72 stupa dan sebuah stupa induk besar di puncaknya. Uniknya, balok-balok ini tersusun tanpa menggunakan perekat ataupun semen, kompleks ini terlihat seperti sebuah susunan lego raksasa.</p>
                <p>Candi Borobudur disebut sebagai salah satu mahakarya terbesar manusia sepanjang sejarah. Susunan balok vulkanik dan pahatan reliefnya merupakan sebuah karya seni yang tak tertandingi nilainya.</p>
                <br>
            </div>
      </div>
      <section id="services" class="services service-section">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Jl. Badrawati, Borobudur, Magelang, Jawa Tengah</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                    <p>borobudurpark.com</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
                  <div class="services-content">
                    <p>(0293) 788266</p>
                  </div>
                </div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.6973690168893!2d110.20117101110402!3d-7.607873792375559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8cf009a7d697%3A0xdd34334744dc3cb!2sCandi%20Borobudur!5e0!3m2!1sid!2sid!4v1734322444231!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
      </section>
    </div>
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
                          <img src="images/foto/sejarah/b.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/sejarah/b.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/sejarah/b.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Benteng Vredeburg</h2>
                <p>Benteng Vredeburg merupakan salah satu wisata sejarah yang ada di Jogjakarta, benteng ini merupakan museum perjuangan nasional Indonesia dan kini menjadi salah satu destinasi wisata edukasi baik itu mengenai seni, kebudayaan juga ilmu pengetahuan sejarah.</p>
                <p>Benteng Vredeburg terletak tak jauh dari Keraton Kesultanan Yogyakarta, lokasinya terletak di Jalan Ahmad Yani atau lebih dikenal dengan jalan Malioboro, karena lokasinya tepat di ujung jalan Malioboro.</p>
                <br>
            </div>
      </div>
      <section id="services" class="services service-section">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Jl. Margo Mulyo / Jl. A. Yani No.6, Ngupasan, Gondomanan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55122</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                    <p>vredeburg.id</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
                  <div class="services-content">
                    <p>(0274) 586934</p>
                  </div>
                </div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8994117152442!2d110.3627866111058!3d-7.800473292187265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5788a69f397b%3A0xa0f373129ee68edd!2sBenteng%20Vredeburg%2C%20Ngupasan%2C%20Kec.%20Gondomanan%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta%2055122!5e0!3m2!1sid!2sid!4v1734322474671!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                          <img src="images/foto/sejarah/c.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/sejarah/c.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/sejarah/c.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Monumen Serangan Umum 1 Maret</h2>
                <p>Gak jauh dari Benteng Vredeburg, terdapat sebuah Monumen Serangan Umum 1 Maret. Posisi monumen ini tepat berada di seberang Kantor Pos Besar Yogyakarta guys. FYI, monumen ini dibangun untuk memperingati serangan umum yang dilakukan oleh Tentara Nasional Indonesia yang dikomandoi oleh Letnan Kolonel Soeharto, saat itu Indonesia sudah dianggap lumpuh oleh Belanda, dan untuk menunjukkan taring nya, TNI melakukan serangan tepat pada tanggal 1 Maret 1949.</p>
                <p>Untuk menuju ke lokasi ini, kamu cukup berjalan lurus dari jalan Malioboro Jogja ke arah selatan hingga ketemu perempatan Kantor Pos Besar Jogjakarta.</p>
            </div>
        </div>
    </div>
    <section id="services" class="services service-section">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Ngupasan, Gondomanan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55122</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Tidak tersedia</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Tidak tersedia</p>
                  </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8994117152442!2d110.3627866111058!3d-7.800473292187265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5788b5ba6d3b%3A0x6722b1744aec3f53!2sMonumen%20Serangan%20Umum%201%20Maret%201949!5e0!3m2!1sid!2sid!4v1734322554499!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                          <img src="images/foto/sejarah/d.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/sejarah/d.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/sejarah/d.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Makam Imogiri, Makam Para Raja Mataram</h2>
                <p>Wah, apa asiknya ya berwisata ke pemakaman? Mungkin kamu bertanya demikian kan guys. Ini alasannya guys, Pertama, ketika berkunjung ke makam, kita akan selalu ingat kematian, otomatis kita akan menambah keimanan. Kedua, Makam Imogiri merupakan makam bersejarah yang ada di Yogyakarta, makam Imogiri merupakan komplek pemakaman Raja – Raja Mataram dan juga keluarganya.</p>
            </div>
        </div>
    </div>
    <section id="services" class="services service-section">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Kecamatan Imogiri Kabupaten Bantul, Provinsi Daerah Istimewa Yogyakarta</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Tidak tersedia</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Tidak tersedia</p>
                  </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.7563690904517!2d110.3957999!3d-7.9204973999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a54f951ef760f%3A0x99cd48194e507430!2sMakam%20Raja-Raja%20Imogiri!5e0!3m2!1sid!2sid!4v1734322698463!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
      </section>
  </div>
</section>
<!-- services section --> 

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