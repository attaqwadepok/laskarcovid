<?php

date_default_timezone_set('Asia/Jakarta');

// CONNECT TO DATABASE
// CONNECT TO DATABASE
// CONNECT TO DATABASE
$conn = mysqli_connect('localhost', 'root', '', 'covid_app');

function query($query)
{
  global $conn;

  $result = mysqli_query($conn, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
$result_kedatangan = query("SELECT * FROM kedatangan");

//ADD DATA TO DATABASE
//ADD DATA TO DATABASE
//ADD DATA TO DATABASE
function add($data)
{
  global $conn;

  $nama = $data['nama'];
  $keterangan = $data['keterangan'];
  $waktu = $data['waktu'];
  // $judul = $data['judul'];
  // $penulis = htmlspecialchars($data['penulis'], true);
  // $penerbit = $data['penerbit'];
  // $kota = $data['kota'];
  // $tahun = $data['tahun'];
  // $gambar = htmlspecialchars($data['gambar']);
  // $letak = htmlspecialchars($data['letak']);
  // $status = htmlspecialchars($data['status']);
  // $kategori = $data['kategori'];

  $query = "INSERT INTO kedatangan
              VALUES 
              ('', '$nama', '$waktu', '$keterangan')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}


// Judul TAB
// Judul TAB
// Judul TAB
class TitleTAB
{
  protected
    $home = 'Home',
    $about = 'About Us',
    $news = 'News & Info',
    $events = 'Events',
    $inputData = 'Input Data',
    $laskar = ' | Laskar Covid';

  public function home_title()
  {
    return $this->home . $this->laskar;
  }

  public function about_title()
  {
    return $this->about . $this->laskar;
  }

  public function news_title()
  {
    return $this->news . $this->laskar;
  }

  public function events_title()
  {
    return $this->events . $this->laskar;
  }

  public function input_title()
  {
    return $this->inputData . $this->laskar;
  }
}

$title = new TitleTAB;
