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
      <h6>WISATA ALAM</h6>
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
                          <img src="images/foto/alam/a1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/a2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/a1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/a2.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Taman Tebing Breksi</h2>
                <p>Tak jauh dari komplek Candi Prambanan ada suatu tempat yang juga  ramai dikunjungi oleh para wisatawan, berbentuk alami Taman Breksi atau Tebing Breksi sangat menarik perhatian wisatawan, kawasan wisata ini berlokasi di Desa Sambirejo Sleman Yogyakarta.</p>
                <br>
            </div>
      </div>
      <section id="services" class="services service-section">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Sambirejo, Prambanan, Sambirejo, Prambanan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55572</p>
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
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.077841999164!2d110.50200241110568!3d-7.781571392205754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5aa458b4665b%3A0xa4b0fc6ad0ae38c7!2sTebing%20Breksi!5e0!3m2!1sid!2sid!4v1734322024279!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
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
                          <img src="images/foto/alam/b1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/b2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/b1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/b2.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Puncak Becici</h2>
                <p>Puncak Becici memiliki hutan pinus seluas 4,4 hektar dengan hawa yang sejuk. Pada sore hari, pengunjung bisa menikmati sunset. Dari sini pula, pengunjung bisa melihat kecantikan Candi Prambanan bagian utara serta indahnya pantai selatan. </p>
                <p>Pada Senin-Jumat, jumlah kunjungan ke Puncak Becici 700 orang per hari. Jumlah ini meningkat di Sabtu-Minggu dan hari libur, menjadi 1.500 pengunjung.</p>
            </div>
        </div>
    </div>
    <section id="services" class="services service-section">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Gunungcilik RT. 07 / RW. 02, Muntuk, Dlingo, Muntuk, Dlingo, Bantul, Daerah Istimewa Yogyakarta 55783</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                    <p>puncakbecici.blogspot.com</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
                  <div class="services-content">
                    <p>0823-2905-5550</p>
                  </div>
                </div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.9333188757673!2d110.43259714722787!3d-7.902035471867588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a531aaaaaaaab%3A0x6c28149b91ea59f4!2sPuncak%20Pinus%20Becici!5e0!3m2!1sid!2sid!4v1734322199781!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                          <img src="images/foto/alam/c1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/c2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/c1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/c2.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Bukit Panguk</h2>
                <p>Lokasi Bukit Panguk Jogjayang berada di bibir bukit memang menjadi spot terbaik untuk hunting foto disana, selain itu kamu juga bisa memanjakan mata dengan pemandangan alam yang luar biasa indahnya dengan latar pegunungan hijau yang berbaur dengan birunya langit yang cerah.</p>
            </div>
        </div>
    </div>
    <section id="services" class="services service-section">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Kediwung, Mangunan, Dlingo, Mangunan, Dlingo, Bantul, Daerah Istimewa Yogyakarta 55783</p>
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
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3920969825713!2d110.43818191110725!3d-7.958369492033179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bacb24995d023%3A0x95aec26c5e9774a2!2sBukit%20Panguk%20Kediwung!5e0!3m2!1sid!2sid!4v1734322326371!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                          <img src="images/foto/alam/d1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/d2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/d1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/d2.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Embung Nglanggeran</h2>
                <p>Embung Nglanggeran adalah salah satu objek wisata yang baru di Gunung Kidul. Mengingat umur dari tempat wisata tersebut baru 3 tahun. Embung Nglanggeran diresmikan menjadi objek wisata oleh Raja Jogja yaitu Sri Sulta HB X pada 19 Februari 2013.</p>
                <p>Selain menjadi tempat wisata, Embung Nglanggeran berfungsi sebagai penampung atau penyimpan air untuk mengairi kebun-kebun yang ada di bawah Bukit Nglanggeran. Oleh sebab itu tempat ini juga disebut dengan Kebun Buah Nglanggeran.</p>
            </div>
        </div>
    </div>
    <section id="services" class="services service-section">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Nglanggeran, Patuk, Nglanggeran, Patuk, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55862</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                    <p>gunungapipurba.com</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
                  <div class="services-content">
                    <p>Tidak tersedia</p>
                  </div>
                </div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.4570460378177!2d110.54199334722458!3d-7.847139872058077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a4e40416ef711%3A0x5e15a88116b3577e!2sEmbung%20Nglanggeran!5e0!3m2!1sid!2sid!4v1734322370823!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
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