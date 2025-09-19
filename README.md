# E-Commerce Form Project

Project ini dibuat untuk memenuhi tugas pribadi mata kuliah **Pemrograman Web**.  
Menggunakan **Class Form (OOP PHP)** yang sudah dimodifikasi untuk menginput data **produk/jasa/layanan** ke dalam database.  

## ✨ Fitur
- Input data produk (nama, harga, deskripsi, kategori, status, dll.)
- Mendukung berbagai tipe input form:
  - Text
  - Password
  - Radio
  - Checkbox
  - Dropdown / Select
  - Textarea
  - File Upload (gambar produk)
- Penyimpanan data ke database MySQL.

## 🗂️ Struktur Folder
ecommerce-form/
│
├── form-produk/
│ ├── form.php # Form input produk
│ ├── simpan.php # Proses simpan ke database
│ └── classForm.php # Class Form OOP
│
├── db/
│ └── db_produk.sql # File SQL untuk import ke MySQL
│
└── README.md # Dokumentasi project


## ⚙️ Cara Menjalankan
1. Import database:
   - Buka **phpMyAdmin** atau MySQL client.
   - Import file `db/db_produk.sql`.
2. Letakkan project ini di dalam folder `htdocs` (XAMPP) atau `www` (Laragon).
3. Akses di browser: http://localhost/ecommerce-form/form-produk/form.php

4. Isi form dan simpan → data akan masuk ke tabel `produk`.

## 👨‍💻 Author
- Nama: *Gilang Abdian Anggara*
- NIM: *V3424053*
- Kelas: *B*

---
