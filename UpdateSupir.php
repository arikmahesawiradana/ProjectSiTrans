<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$statusa = "naik";
$sql = "UPDATE pesan SET statusa = '$statusa' WHERE nama='$nama'";
if($con->query($sql) === TRUE){
  echo 'SUKSES';
}
else {
  echo 'GAGAL';
}
$con->close();
?>