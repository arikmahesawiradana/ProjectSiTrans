<?php
 
 $host = "localhost";
 $user = "n1602200_arik";
 $password = "Mencoba11";
 $db = "n1602200_lomba";

$con = new mysqli($host, $user, $password, $db);

if ($con->connect_error){
  die("failed");
}
?>