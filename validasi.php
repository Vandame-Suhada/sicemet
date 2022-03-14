<html>
<head><!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>body {
      background-color: #252525;
      }
   </style>
</head>
<body>
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <img src="assets/img/logo_sicemet.png" alt="Italian Trulli" style="width:250px;height:70px;">
      <!--<h1 class="logo mr-auto"><a href="index.html">SiCemet</a></h1>
       Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="main-nav d-none d-lg-block">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="index.html #about">About Us</a></li>
          <li class="active"><a href="#services">Metodologi</a></li>
          <!--<li><a href="#portfolio">Portfolio</a></li>-->
          <li><a href="index.html #team">Our Team</a></li>
          
          <li><a href="index.html #footer">Contact</a></li>
        </ul>
      </nav><!-- .main-nav-->

    </div>
</header><!-- End Header -->
</body>

<?php
    class Metodology {
      // Properties
      public $nama;
      public $karakter=[];
      public $nilaiMetode=0;
      public $gambar="";
      public $link="";

      function __construct($nama,$karakter,$nilaiMetode,$gambar,$link){
        $this->nama=$nama;
        $this->karakter=$karakter;
        $this->nilaiMetode=$nilaiMetode;
        $this->gambar=$gambar;
        $this->link=$link;
      }

    }
    $incremental=new Metodology("Incremental",["DapatDijelaskan","Kompleks","1-3bulan",">12Orang","Campuran","Terlibat"],0,"assets/img/inc.png","incremental.html");
    $spiral=new Metodology("Spiral",["BelumJelas","Kompleks","1-3bulan",">12Orang","Berpengalaman","Terlibat"],0,"assets/img/sp.png","spiral.html");
    $rad=new Metodology("Rad",["DapatDijelaskan","Sederhana","1-3bulan",">12Orang","Campuran","Terlibat"],0,"assets/img/r.png","rad.html");
    $scrum=new Metodology("Scrum",["DapatDijelaskan","Kompleks","1-3bulan",">12Orang","Berpengalaman","TidakTerlibat"],0,"assets/img/sc.png","scrum.html");
    $xp=new Metodology("Extreme Programming",["DapatDijelaskan","Sederhana","1-3bulan","<12Orang","Campuran","Terlibat"],0,"assets/img/ex.png","xtreampro.html");
    $vshaped=new Metodology("Vhsaped",["DapatDijelaskan","Sederhana","<1bulan",">12Orang","Campuran","TidakTerlibat"],0,"assets/img/vs.png","vshaped.html");
    $prototyping=new Metodology("Prototyping",["BelumJelas","Kompleks","1-3bulan",">12Orang","Campuran","Terlibat"],0,"assets/img/pro.png","prototyping.html");

    $metode=[$incremental,$spiral,$rad,$scrum,$xp,$vshaped,$prototyping];
    $userData=[]; //karakteristik porject dari user
    if(isset($_GET['radio1'])&& isset($_GET['radio2'])&& isset($_GET['radio3'])&& isset($_GET['radio4'])&& isset($_GET['radio5'])
    && isset($_GET['radio6'])){
        $userData[]=$_GET['radio1'];  
        $userData[]=$_GET['radio2'];
        $userData[]=$_GET['radio3'];
        $userData[]=$_GET['radio4'];
        $userData[]=$_GET['radio5'];
        $userData[]=$_GET['radio6'];
        for($i=0;$i<7;$i++){ //karena ada 7 metodologi
            for($j=0;$j<6;$j++){ //karena ada 6 karakteristik
                if($userData[$j]==$metode[$i]->karakter[$j]){
                    $metode[$i]->nilaiMetode+=1;
                }
            }
        }
        usort($metode, function($a,$b){return $a->nilaiMetode < $b->nilaiMetode;}); //mengurutkan array metode yg berisi obj, berdasarkan nilai metode
        // echo '<pre>';
        // print_r($metode);
        // echo '</pre>';  
    }

?>

<div class="container" style="position: absolute;left: 100px; top: 150px;" >
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
        <div class="tim">
          <div class="section-header">
            <h3>Saran Metodologi</h3>
            <br></br>
          </div>
        <div class="row">
        <?php
              // Menampilkan html card
              for($r=0;$r<3;$r++){
            ?>
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="box">           
                <div class="icon" style="background: #fceef3;"></div>
                <h4 class="title">
                    <?php echo '<img src="'.$metode[$r]->gambar.'">'; ?>
                </h4>
                <p class="description">
                <?php echo "<a class='btn btn-primary' href='".$metode[$r]->link."' target='_blank'>View Detail</a>";?>
                </p>
              </div>
            </div>
            <?php
            }
            ?>
      </div>

    <section id="hero" class="hero section-bg">
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-5">
                    <a href="checkb.html" class="btn btn-success" style="position:absolute;right:0px;" >Tes Lagi?</a>
                </div>
            </div>
    </hero>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</html>