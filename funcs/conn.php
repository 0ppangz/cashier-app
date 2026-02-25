<?php

$dsH  = "mysql:host=127.0.0.1;dbname=cashApp";
$user = "root";
$pass = "";
try {
  $login = new PDO($dsH,$user,$pass);
} catch (PDOException $e){
  die( $e -> getMessage());
}
?>