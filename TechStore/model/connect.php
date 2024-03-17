<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=data_asmgd2; charset=utf8", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connection Thanh cong";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>