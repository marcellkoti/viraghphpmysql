<?php
  // adatok felvétele a kapcsolathoz
  $servername = "localhost";
  $username = "vk";
  $password = "Passw0rd";
  $dbname = "vk";

  $conn = new mysqli($servername, $username, $password, $dbname); // kapcsolat létrehozása

  // kapcsolódás ellenőrzése
  if ($conn->connect_error) {
    die("Sikertelen kapcsolódás: " . $conn->connect_error); // sikertelen kapcsolódás
  } else {
    # echo "Sikeres kapcsolódás."; // sikeres kapcsolódás
  }
?>