CREATE DATABASE IF NOT EXISTS db_produk;
USE db_produk;

CREATE TABLE produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(100) NOT NULL,
    deskripsi TEXT NOT NULL,
    harga DECIMAL(15,2) NOT NULL,
    stok INT NOT NULL,
    kategori VARCHAR(50) NOT NULL,
    merek VARCHAR(50) NOT NULL,
    kondisi ENUM('baru','bekas') NOT NULL,
    fitur VARCHAR(255),
    foto VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
