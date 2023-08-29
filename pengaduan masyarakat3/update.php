<?php
 
include "koneksi.php";
$id $_GET['id'];

$query = $koenksi->query("SELECT * FROM pengaduan WHERE id_pengaduan ="$id"");
$data = $query->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bs/bs1/css/bootstrap.min.css">
</head>
<body>

    <?php include "update_beranda.php"?>

    <br>

    <div class="container">
        <form action="proses_update.php?id=<?= $data['id_pengaduan']?>" method="POST">
        <table>
            <label for="exampleFormControlTextarea1" class="form-label">laporan</label>
            <input class="form-control" id="examplFormControlTextarea1" rows="3" name="laporan" value="<?php echo $data ['isi_laporan']?>" require></input>
        <button class="btn btn-primary" type="submit">laporkan</button>
        </table>
    </div>

</body>
</html>