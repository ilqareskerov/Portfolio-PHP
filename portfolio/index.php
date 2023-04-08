<?php
  require './include/db.php';

  $sql = "SELECT * FROM `home`,`about`,`background`,`contact`,`portfolio`,`section_controll`";
  $query = mysqli_query($db,$sql);
  if($query)
    $data = mysqli_fetch_assoc($query);
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.9.1
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style type="text/css">

    body{
      background-image: url('./image/<?=$data['background']?>');
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.html"><?=$data['title']?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2><?=$data['subtitle']?></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <?php
          if($data["home_section"])
          echo'<li><a class="nav-link active" href="#header">Home</a></li>';
          
          if($data["about_section"])
          echo'<li><a class="nav-link active" href="#about">About</a></li>';

          if($data["resume_section"])
          echo'<li><a class="nav-link active" href="#resume">Resume</a></li>';
          if($data["portfolio_section"])
          echo'<li><a class="nav-link active" href="#portfolio">Portfolio</a></li>';
          if($data["contact_section"])
          echo'<li><a class="nav-link active" href="#contact">Contact</a></li>'
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <?php
      $r="select * from social_media;";
      $quer=mysqli_query($db,$r);
      $data2=mysqli_fetch_assoc($quer);
      ?>
      <?php
      if($data["showicons"]){?>
      <div class="social-links">
        <a href="https://twitter.com/<?=$data2["twitter"]?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/<?=$data2["facebook"]?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/<?=$data2["instagram"]?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/<?=$data2["linkedin"]?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
      <?php
      }?>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="image/<?=$data["profile_pic"]?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?=$data['about_title']?></h3>
          <p class="fst-italic">
            <?=$data['about_subtitle']?>
          </p>
          <div class="row">
          <?php
              $sql = 'select * from `personal_info`';
              $query = mysqli_query($db,$sql);
              if($query)
                while($infoData = mysqli_fetch_assoc($query)){
                  $infoHtml .= '<div class="col-lg-6">';
                  $infoHtml .= '<ul>';
                  $infoHtml .= '<li><i class="bi bi-chevron-right"></i> <strong>'.@$infoData['label'].':</strong> <span>'.@$infoData['value'].'</span></li>';
                  $infoHtml .= '</ul>';
                  $infoHtml .= '</div>';
                }
              echo $infoHtml;
            ?>
          </div>
          <p>
        <?=$data['about_desc']?>    
        </p>
        </div>
      </div>

    </div><!-- End About Me -->


    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-12">
          <?php
          $query1="select * from skills;";
          $data0=mysqli_query($db,$query1);
          while($data1=mysqli_fetch_assoc($data0)){
          ?>
          <div class="progress">
            <span class="skill"><?=$data1["skill_name"]?> <i class="val"><?=$data1["skill_level"]?>%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow='<?=$data1["skill_level"]?>' aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <?php
          }
          ?>
        </div>


      </div>

    </div><!-- End Skills -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
        <h3 class="resume-title">Education</h3>
          <?php
            $resumeHtml="";
            $sql = "select * from `resume` where `type` = 'e'";
            $query = mysqli_query($db,$sql);
            if($query)
                while ($resumeData = mysqli_fetch_assoc($query)) {
                    $resumeHtml .= '<div class="resume-item">';
                    $resumeHtml .= '<h4'.@$resumeData['title'].'</h4>';
                    $resumeHtml .= '<h5>'.@$resumeData['time'].'</h5>';
                    $resumeHtml .= '<p><em>'.@$resumeData['org'].'</em></p>';
                    $resumeHtml .= '<p>'.@$resumeData['about_exp'].'</p>';
                    $resumeHtml .= '</div>';   
                }
                
                echo $resumeHtml;
          ?>
        </div>

        <div class="col-lg-6">
          <h3 class="resume-title">Professional Experience</h3>
          <?php
            $resumeHtml="";
            $sql = "select * from `resume` where `type` = 'w'";
            $query = mysqli_query($db,$sql);
            if($query)
                while ($resumeData = mysqli_fetch_assoc($query)) {
                    $resumeHtml .= '<div class="resume-item" style="max-width:100%;
                    max-height:100%;">';
                    $resumeHtml .= '<h4'.@$resumeData['title'].'</h4>';
                    $resumeHtml .= '<h5>'.@$resumeData['time'].'</h5>';
                    $resumeHtml .= '<p><em>'.@$resumeData['org'].'</em></p>';
                    $resumeHtml .= '<p>'.@$resumeData['about_exp'].'</p>';
                    $resumeHtml .= '</div>';   
                }
                echo $resumeHtml;
          ?>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <?php
          $sql = 'select * from `portfolio`';
          $query = mysqli_query($db,$sql);
          while($dataa = mysqli_fetch_assoc($query)){
            echo '
            <div class="col-lg-4 col-md-6 portfolio-item filter-'.strtolower($dataa['project_type']).'">
            <div class="portfolio-wrap">
              <img src="image/'.$dataa['project_pic'].'" class="img-fluid" style="width:100%;" alt="">
              <div class="portfolio-info">
                <h4>'.$dataa['project_name'].'</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="image/'.$dataa['project_pic'].'" data-gallery="portfolioGallery" class="portfolio-lightbox" title="'.$dataa['project_name'].'"><i class="bx bx-plus"></i></a>
                  <a href="'.$dataa['project_link'].'"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
            ';
          }
        ?>
        

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p><?=$data['adress']?></p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p><?=$data['email']?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p><?=$data['number']?></p>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>