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

// Yorumlari al
$isim = $_POST["ad"];
$yorum = $_POST["yorum"];
$puan = $_POST["puan"];

$sql = "INSERT INTO yorum (isim, yorum, puan) VALUES ('".$isim."', '".$yorum."', '".$puan."')";

if ($conn->query($sql) !== TRUE) {
  die("Yorum eklenirken hata olustu: <br>" . $conn->error);
}

header("Location:index.html");
?>
