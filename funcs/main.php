<?php
// Connectingto database.
include 'conn.php';

function select($sel) {
  global $login;
  $resl = mysqli_query($login,$sel);
  
  $rows = [];
  while ($row = mysqli_fetch_assoc($resl)) {
    $rows[] = $row;
  }
  return $rows;
}

?>