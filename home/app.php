<?php

require_once 'php/logic.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="description" content="Selamat Datang di Web Portal Laskar Covid At-Taqwa!">
  <meta property="og:title" content="Home | Laskar Covid" />
  <meta property="og:url" content="https://www.laskarcovid.rf.gd" />
  <meta property="og:description" content="Selamat Datang di Web Portal Laskar Covid At-Taqwa!">
  <meta property="og:image" content="https://github.com/attaqwadepok/laskarcovid/blob/main/img/attaqwa-logo-covid.png">

  <title><?= $title->home_title(); ?></title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="css/mystyle.css">
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-danger border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-white size28"><strong>Laskar Covid</strong></div>
      <div class="list-group list-group-flush">
        <a href="" class="list-group-item list-group-item-action bg-danger text-white">Home</a>
        <a href="about/" class="list-group-item list-group-item-action bg-danger text-white">About Us</a>
        <a href="news/" class="list-group-item list-group-item-action bg-danger text-white">News & Info</a>
        <a href="events/" class="list-group-item list-group-item-action bg-danger text-white">Events</a>
        <a href="input/" class="list-group-item list-group-item-action bg-danger text-white">Input Data</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-danger" id="menu-toggle">Navigasi Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <div class="sidebar-heading size28"><strong>Laskar Covid At-Taqwa Depok</strong></div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4"><strong>Selamat Datang, <br> di Portal Web Laskar Covid At-Taqwa Depok.</strong></h1>
        <p>
          <em>Ini adalah web aplikasi yang dibuat untuk memudahkan update dan pencarian informasi seputar kesehatan warga Pondok.</em>
        </p>
        <button class="btn btn-danger" type="button" name="more" onclick="more()">Selengkapnya</button>
      </div>
      <div class="rounded float-right m-4" style="width: 25rem;">
        <img src="img/attaqwa-logo-covid.png" class="" style="width: 25rem" alt="...">
      </div>
    </div>
  </div>
  <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    function more() {
      location.replace('about/');
    }
  </script>

</body>

</html>
