<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Produk</title>
  <link rel="stylesheet" href="..//Assets/css/style.css">
</head>
<body>

<?php
require("classForm.php");
// ===================
// PAKAI FORM
// ===================
$form = new Form("simpan.php","Simpan Produk");
$form->addText("nama_produk","Nama Produk","Contoh: Laptop ASUS ROG",true);
$form->addTextarea("deskripsi","Deskripsi","Tulis deskripsi produk...",true);
$form->addNumber("harga","Harga (Rp)","1000000",true);
$form->addNumber("stok","Stok","10",true);
$form->addSelect("kategori","Kategori",[
    "laptop"=>"Laptop",
    "hp"=>"Handphone",
    "aksesoris"=>"Aksesoris",
    "elektronik_lain"=>"Elektronik Lainnya"
]);
$form->addText("merek","Merek","Contoh: Samsung",true);
$form->addRadio("kondisi","Kondisi",[
    "baru"=>"Baru",
    "bekas"=>"Bekas"
]);
$form->addCheckbox("fitur","Fitur Tambahan",[
    "garansi"=>"Garansi Resmi",
    "gratis_ongkir"=>"Gratis Ongkir",
    "cod"=>"Bayar di Tempat"
]);
$form->addFile("foto","Foto Produk",true);

$form->displayForm("Form Tambah Produk");
?>

</body>
</html>
