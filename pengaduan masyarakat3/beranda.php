<?php
//PDO
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");

$query = $koneksi->query("select * from pengaduan");
$data = $query->fetchall();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="bs/bs1/css/bootstrap.min.css">
   <link rel="stylesheet" href="background.css">
</head>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand">Pengorbanan masyarakat</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="beranda.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="laporan.php">Laporan</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            </form>
          </div>
        </div>
      </nav>            
  <link rel="stylesheet" href="bs/bs1/css/bootstrap.min.css">
</head>
  
  
  <div class="container">
    <form action="proses_pengaduan.php" method="POST" enctype="multipart/form-data">
    <div class="container">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">NIK</label>
  <input type="text" class="form-control" name="nik">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Isi laporan disini</label>
  <textarea class="form-control" name="isi_laporan" rows="3"></textarea>
  <div class="mb-3">
    <label for="formFile" class="form-label">Default file input example</label>
    <input class="form-control" type="file" id="formFile" name="foto">
  </div>
  <button type="submit" class="btn btn-primary">laporkan</button>
</div>
</body>
</html>