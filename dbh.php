<?php

$username = "root";
$password = "";
$host = "127.0.0.1";
$dbname = "loginexercise";

try {
$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected Successfully";



}
catch(Exception $e) {
  echo "Connection failed " . $e->getMessage();
  die();
}


 ?>
