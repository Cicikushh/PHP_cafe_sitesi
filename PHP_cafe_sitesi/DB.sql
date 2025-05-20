CREATE DATABASE espresso_kosesi_db;
USE espresso_kosesi_db;
CREATE TABLE barista(
    barista_id INT PRIMARY KEY AUTO_INCREMENT,
    isim VARCHAR(32),
    eposta VARCHAR(128),
    telefon VARCHAR(32),
    sifre VARCHAR(32)
);
CREATE TABLE yorum(
    musteri_id INT PRIMARY KEY AUTO_INCREMENT,
    isim VARCHAR(32),
    yorum VARCHAR(192),
    puan VARCHAR(32)
);