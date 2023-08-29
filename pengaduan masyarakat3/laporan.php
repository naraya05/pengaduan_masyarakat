<?php
//PDO
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");

$query = $koneksi->query("select * from pengaduan");
$data = $query->fetchall();

?>

<html>
<link rel="stylesheet" href="bs/bs1/css/bootstrap.min.css">
<head>
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
<body>
            
      
<div class="container">
      <h3 style="text-align: center;">data laporan</h3>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">tanggal</th>
            <th scope="col">nik</th>
            <th scope="col">laporan</th>
            <th scope="col">foto</th>
            <th scope="col">status</th>
        
          </tr>
        </thead>
        <tbody>
         <?php foreach($data as $pengaduan) { ?>
          <tr>
            <td><?= $pengaduan['id_pengaduan']?></td>
            <td><?= $pengaduan['tgl_pengaduan']?></td>
            <td><?= $pengaduan['nik'] ?></td>
            <td><?= $pengaduan ['isi_laporan']?></td>
            <td><img src="image/<?= $pengaduan ['foto'] ?>"></td>
            <td><?= $pengaduan ['status']?></td>
            <td> <a href="update.php"><button type="button" class="btn btn-outline-info">update</button></a>
            <td> <a href="<?= $pengaduan['id_pengaduan']?>"><button type="button" class="btn btn-outline-danger">X</button></a>

           <?php }?>
         
            

        </tbody>
      </table>
   </div>
</body> 
</html>