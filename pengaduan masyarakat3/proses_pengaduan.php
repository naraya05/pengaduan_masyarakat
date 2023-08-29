<?php

//echo $_POST['laporan'];

//var_dump($_FILES['foto']);

//file poto
$isi_laporan = $_POST['isi_laporan'];
;  
$nik = $_POST['nik'];
$tanggal = date('Y-m-d');

//file foto
$nama_foto = $_FILES['foto']['name'];
$asal_foto = $_FILES['foto']['tmp_name'];


//PDO
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");

$koneksi->query("INSERT INTO pengaduan VALUES('', '$tanggal', '$nik', '$isi_laporan', '$nama_foto', '0')");

if ($koneksi){
    echo "koneksi berjalan";
}





move_uploaded_file($asal_foto, "image/$nama_foto");

