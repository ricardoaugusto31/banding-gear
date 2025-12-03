# BandingGear

BandingGear adalah aplikasi web sederhana untuk manajemen inventaris periferal komputer (seperti Mouse, Keyboard, Headset, Monitor, dll) dan manajemen pengguna. Aplikasi ini dibangun menggunakan Framework PHP **Laravel 6**.

## 🚀 Fitur Utama

Aplikasi ini memiliki beberapa fitur inti untuk pengelolaan data:

### 1. Manajemen Periferal (*Peripherals*)
- **Daftar Periferal**: Menampilkan daftar barang dengan fitur pencarian dan *pagination* menggunakan DataTables.
- **Tambah Data (Create)**: Formulir untuk menambahkan periferal baru termasuk upload gambar produk.
- **Edit Data (Update)**: Mengubah detail periferal yang sudah ada.
- **Hapus Data (Delete)**: Menghapus data periferal dari sistem.
- **Kategori**: Mendukung berbagai kategori seperti Mouse, Keyboard, Headset, Monitor, Mousepad, Microphone, dan Webcam.

### 2. Manajemen Pengguna (*Users*)
- **Daftar Pengguna**: Melihat daftar pengguna terdaftar beserta foto profilnya.
- **Tambah Pengguna**: Menambahkan user baru secara manual (selain lewat registrasi).
- **Hapus Pengguna**: Menghapus akun pengguna.

### 3. Autentikasi
- **Login & Register**: Sistem keamanan untuk akses aplikasi.
- **Logout**: Keluar dari sesi pengguna.

## 🛠️ Teknologi yang Digunakan

- **Backend**: Laravel Framework 6.20
- **Database**: MySQL
- **Frontend**: 
  - Bootstrap 4 (Styling)
  - DataTables (Tabel interaktif)
  - Bootstrap Icons
- **Server**: PHP >= 7.2
