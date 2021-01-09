<?php

require_once '../php/logic.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title->about_title(); ?></title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/mystyle.css">
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-danger border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-white size28"><strong>Laskar Covid</strong></div>
      <div class="list-group list-group-flush">
        <a href="../" class="list-group-item list-group-item-action bg-danger text-white">Home</a>
        <a href="" class="list-group-item list-group-item-action bg-danger text-white">About Us</a>
        <a href="../news/" class="list-group-item list-group-item-action bg-danger text-white">News & Info</a>
        <a href="../events/" class="list-group-item list-group-item-action bg-danger text-white">Events</a>
        <a href="../input/" class="list-group-item list-group-item-action bg-danger text-white">Input Data</a>
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
        <h1 class="mt-4"><strong>Tentang Laskar Covid At-Taqwa</strong></h1>
        <hr>
        <h2><u>Visi</u></h2>
        <p><em>Melakukan tindak preventif dan menerapkan protokol kesehatan bagi warga Ponpes At-Taqwa depok</em></p>
        <hr>
        <h2><u>Program</u></h2>
        <ul>
          <li><em>Mengadakan sarana kebersihan yang memadai di lingkungan pondok.</em></li>
          <li><em>Mengadakan prasarana kesehatan (obat dan vitamin) bagi seluruh warga pondok.</em></li>
          <li><em>Membuat Spanduk / banner yang dapat mengingatkan tentang kebersihan dan kesehatan bersama.</em></li>
          <li><em>Mengecek dan memantau kondisi kesehatan warga pondok secara berkala.</em></li>
          <li><em>Membuat tempat cuci tangan di beberapa titik di dalam pondok.</em></li>
          <li><em>Memastikan suply obat-obatan danvitamin tersedia dengan baik.</em></li>
          <li><em>Membuat tempat penerimaan paket secara khusus untuk warga pondok.</em></li>
        </ul>
        <hr>
        <h2><u>Struktur</u></h2>
        <table cellpadding=3>
          <tr>
            <td>Ketua</td>
            <td>:</td>
            <td><em>Ust. Ilham F. Alviansyah</em></td>
          </tr>
          <tr>
            <td>Wakil Ketua I</td>
            <td>:</td>
            <td><em>Ust. Ganjar Nugraha</em></td>
          </tr>
          <tr>
            <td>Wakil Ketua II</td>
            <td>:</td>
            <td><em>Ust. Rizwan Santosa</em></td>
          </tr>
          <tr>
            <td>Anggota</td>
            <td>:</td>
            <td><em>Dzikri</em></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><em>Hanif</em></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><em>Vaisal</em></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><em>Ayyaz</em></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><em>Diyah</em></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><em>Alima</em></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><em>Sahira</em></td>
          </tr>
        </table>
        <hr class="md-4">
        <h2 id="admin"><u>Narahubung Admin</u></h2>
        <p><em>email : <a href="https://mail.google.com/mail/u/0/#inbox?compose=new">alvinrinjani@gmail.com</a></em></p>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
</body>

</html>