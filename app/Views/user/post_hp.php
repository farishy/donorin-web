<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Rapid Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?= base_url(); ?>/user/img/favicon.png" rel="icon">
  <link href="<?= base_url(); ?>/user/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?= base_url(); ?>/user/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url(); ?>/user/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url(); ?>/user/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/user/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/user/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/user/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url(); ?>/user/css/style.css" rel="stylesheet">
  

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
  Header
  ============================-->
  
<section id="post" style="margin-top:0;" >
<div class="container" >
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1 mt-3"><?= $artikel['judulArtikel'];?></h1>
                    <!--
                         Post meta content-->
                    <div class="text-muted fst-italic mb-2"></div>
                    <!-- Post categories-->
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" style="width: 900px; height: 400px; object-fit: cover;" src="<?= $artikel['gambarArtikel'];?>" alt="900x400" /></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4"><?= $artikel['kontenArtikel'];?></p>
                    <p class="mb-4">
                </section>
            </article>
            
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="<?= base_url(); ?>/user/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/user/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?= base_url(); ?>/user/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/user/lib/easing/easing.min.js"></script>
  <script src="<?= base_url(); ?>/user/lib/mobile-nav/mobile-nav.js"></script>
  <script src="<?= base_url(); ?>/user/lib/wow/wow.min.js"></script>
  <script src="<?= base_url(); ?>/user/lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url(); ?>/user/lib/counterup/counterup.min.js"></script>
  <script src="<?= base_url(); ?>/user/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url(); ?>/user/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>/user/lib/lightbox/js/lightbox.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?= base_url(); ?>/user/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?= base_url(); ?>/user/js/main.js"></script>
  

</body>
</html>
