<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$passwordnya = $_POST['passwordnya'];
$saldo = 100000;
$sql = "INSERT INTO dataku (nama, email, passwordnya, saldo) VALUES('$nama','$email','$passwordnya','$saldo')";
if(mysqli_query($con,$sql)){
  echo 'SUKSES';
}
else{
  echo 'GAGAL';
}
mysql_close();
?>