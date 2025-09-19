<?php
// Koneksi DB
$koneksi = new mysqli("localhost","root","","db_produk");
if($koneksi->connect_error){
    die("Koneksi gagal: ".$koneksi->connect_error);
}

// Ambil data dari form
$nama       = $_POST['nama_produk'];
$deskripsi  = $_POST['deskripsi'];
$harga      = $_POST['harga'];
$stok       = $_POST['stok'];
$kategori   = $_POST['kategori'];
$merek      = $_POST['merek'];
$kondisi    = $_POST['kondisi'];
$fitur      = isset($_POST['fitur']) ? implode(", ", $_POST['fitur']) : "";

// Upload file
$targetDir = "uploads/";
if(!is_dir($targetDir)){
    mkdir($targetDir,0777,true);
}
$fotoName = time() . "_" . basename($_FILES['foto']['name']);
$targetFile = $targetDir . $fotoName;

if(move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile)){
    $sql = "INSERT INTO produk (nama_produk, deskripsi, harga, stok, kategori, merek, kondisi, fitur, foto) 
            VALUES ('$nama','$deskripsi','$harga','$stok','$kategori','$merek','$kondisi','$fitur','$fotoName')";

    if($koneksi->query($sql)===TRUE){
        echo "Produk berhasil disimpan. <a href='index.php'>Tambah lagi</a>";
    } else {
        echo "Error: ".$koneksi->error;
    }
} else {
    echo "Upload foto gagal.";
}

$koneksi->close();
?>
