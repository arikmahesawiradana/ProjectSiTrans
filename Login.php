<?php

include 'koneksi.php';

$nama = $_GET['nama'];
$passwordnya = $_GET['passwordnya'];
$sql = "SELECT * FROM dataku WHERE nama = '$nama' AND passwordnya = '$passwordnya'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result)<1){
  echo 'FAILED';
}
else{
  $row = mysqli_fetch_assoc($result);
  $email = $row['email'];
  $saldo = $row['saldo'];
  echo json_encode(array("email"=>$email, "nama"=>'$nama', "saldo" => '$saldo'));
}
mysqli_close($con);
?>