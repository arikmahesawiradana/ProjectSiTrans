<?php

include 'koneksi.php';

$plat = $_POST['plat'];
$resultArray = array();
$sql = "SELECT * FROM pesan WHERE plat='$plat'";
$result = mysqli_query($con,$sql);
if ($result -> num_rows > 0){
  while ($row = $result -> fetch_assoc()){
    array_push($resultArray, $row);
  }
}
echo json_encode($resultArray);
mysqli_close($con);
?>