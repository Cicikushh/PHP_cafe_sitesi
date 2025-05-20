<?php

// Veritabani baglantisi
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "espresso_kosesi_db";

// Baglanti olusturma
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Baglanti hatasi: " . $conn->connect_error);
}

// Barista bilgilerini al
$isim = $_POST["isim"];
$eposta = $_POST["eposta"];
$telefon = $_POST["telefon"];
$sifre = $_POST["sifre"];
$sifre_tekrar = $_POST["sifre_tekrar"];

if ($sifre !== $sifre_tekrar) {
    die("Sifreler uyusmuyor.");
}

$sql = "INSERT INTO barista (isim, eposta, telefon, sifre) VALUES ('".$isim."', '".$eposta."', '".$telefon."', '".$sifre."')";

if ($conn->query($sql) !== TRUE) {
  die("Barista eklenirken hata olustu: <br>" . $conn->error);
}

header("Location:index.html");
?>
