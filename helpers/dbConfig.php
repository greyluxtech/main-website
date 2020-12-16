<?php

$dbHost = "127.0.0.1";
$db = "greyLux";
$dbUser = "root";
$dbPass = "";

try {
    $conn = new PDO("mysql:host=$dbHost;dbname=$db", $dbUser, $dbPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Error: ".$sql . "<br>" . $e->getMessage();
  }

