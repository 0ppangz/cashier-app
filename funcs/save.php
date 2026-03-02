<?php
include 'main.php';
if (isset($_POST)) {
  $data = json_decode(file_get_contents("php://input"),true);
  $data = json_encode($data, JSON_PRETTY_PRINT);
  file_put_contents('data.json', $data);
}




