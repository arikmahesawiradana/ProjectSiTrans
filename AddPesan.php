<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$titik = $_POST['titik'];
$tujuan = $_POST['tujuan'];
$waktu = $_POST['waktu'];
$plat = $_POST['plat'];
$harga = $_POST['harga'];
$statusa = "waiting";
$sql = "INSERT INTO pesan (nama, titik, tujuan, waktu, plat, harga, statusa) VALUES('$nama','$titik','$tujuan','$waktu','$plat','$harga','$statusa')";
if(mysqli_query($con,$sql)){
  echo 'SUKSES';
}
else{
  echo 'GAGAL';
}
mysql_close();
?>