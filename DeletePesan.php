<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$sql = "DELETE FROM pesan WHERE nama ='$nama'";
if ($con -> query($sql)===TRUE){
  echo "SUKSES";
}
else{
  echo "ERROR";
}

?>