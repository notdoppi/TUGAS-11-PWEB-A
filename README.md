# TUGAS-11-PWEB-A
pada tugas kali ini kita membuat sebuah web laundry dengan mengimpelementasikan backend dan juga API.

## Desktripsi Umum
Laundry Crafty merupakan sistem informasi berbasis web yang digunakan untuk membantu pengelolaan usaha laundry secara digital. Web ini dirancang untuk mempermuda pencatatan data pelanggan, layanan laundry, transaksi cucian, serta pengelolaan laporan pendapatan. Dengan adanya web ini, proses rekapitlasi bisa dilakukan lebih cepat, akurat, dan terstruktur.

## Tujuan Proyek
- Memberikan solusi digital dalam pengelolaan usaha laundry.
- Mempermudah proses pencatatan dan pengolahan data transaksi.
- Mengurangi risiko kesalahan pencatatan secara manual.
- Menyediakan laporan pendapatan secara otomatis dan akurat.
- Meningkatkan efisiensi kerja admin dan kasir.

## Fitur Utama
- sistem keamanan dengan login akun
- manajemen data pelanggan (CRUD)
- manajemen data layanan laundry
- pencatatan transaksi laundry
- perhitungan harga otomatis
- pembaruan status pemesanan
- laporan pendapatan

## Peran Pengguna
1. Admin
  bertugas untuk mengelola seluruh data seperti pelanggan, layanan, transaksi, pengguna, serta melihat laporan pendapatan.
3. Kasir
  bertugas untuk mencatat transaksi laundry dan memperbarui status cucian.

## Spesifikasi Teknis
- Bahasa Pemrograman : PHP
- Database : MySQL
- Web Server : Apache (XAMPP)
- Frontend : HTML, CSS, Bootstrap
- Tools Pendukung : VSCode, phpMyAdmin

## Struktur Database
1. Tabel Pelanggan :
   menyimpan data pelanggan :
   - nama
   - alamat
   - nomor telepon
2. Tabel Layanan :
   menyimpan jenis layanan laundry beserta harga per kilogram
3. Tabel Transaksi :
   menyimpan data transaksi yang berisi informasi pelanggan, layanan, tanggal masuk, tanngal selesai, berat, total harga, status cucian
4. Tabel User :
   menyimpan data akun pengguna yang digunakan untuk login

![image](https://github.com/notdoppi/TUGAS-11-PWEB-A/blob/98e9a4fea7a82991fda6fd5ff3a2027efe37c955/tugas%2011/table%20database.jpg)

## FrontEnd
Untuk FrontEnd menggunakan framework Bootstrap agar tampilan terlihat rapi. setap halaman dilengkapi dengan :
- Navigation Bar
- Form input dengan tampilan simple
- Tabel data untuk menampilkan pelanggan, layanan, dan transaksi.
- Menu tambah, edit, hapus, dan simpan dengan berbeda warna untuk mempermudah user

## Tampilan Web

### **Login Page**
![image](https://github.com/notdoppi/TUGAS-11-PWEB-A/blob/3132b9edef985ca631acba50d293c42790805862/tugas%2011/login%20page.jpg)

### **Dashboard**
![image](https://github.com/notdoppi/TUGAS-11-PWEB-A/blob/3132b9edef985ca631acba50d293c42790805862/tugas%2011/dashboard.jpg)

### **Pelanggan**
![image](https://github.com/notdoppi/TUGAS-11-PWEB-A/blob/3132b9edef985ca631acba50d293c42790805862/tugas%2011/tab%20pelanggan.jpg)

Menambah pelanggan
![image](https://github.com/notdoppi/TUGAS-11-PWEB-A/blob/3132b9edef985ca631acba50d293c42790805862/tugas%2011/tambah%20pelanggan.jpg)

Mengedit pelanggan
![image](https://github.com/notdoppi/TUGAS-11-PWEB-A/blob/3132b9edef985ca631acba50d293c42790805862/tugas%2011/edit%20pelanggan.jpg)

### **Layanan**
![image](https://github.com/notdoppi/TUGAS-11-PWEB-A/blob/3132b9edef985ca631acba50d293c42790805862/tugas%2011/tab%20layanan.jpg)

Menambah layanan
![image](https://github.com/notdoppi/TUGAS-11-PWEB-A/blob/3132b9edef985ca631acba50d293c42790805862/tugas%2011/tambah%20layanan.jpg)

Mengedit layanan
![image](https://github.com/notdoppi/TUGAS-11-PWEB-A/blob/3132b9edef985ca631acba50d293c42790805862/tugas%2011/edit%20layanan.jpg)

### **Transaksi**
![image](https://github.com/notdoppi/TUGAS-11-PWEB-A/blob/3132b9edef985ca631acba50d293c42790805862/tugas%2011/tab%20transaksi.jpg)

Menambah Transaksi
![image](https://github.com/notdoppi/TUGAS-11-PWEB-A/blob/3132b9edef985ca631acba50d293c42790805862/tugas%2011/tambah%20transaksi.jpg)

### **Laporan**
![image](https://github.com/notdoppi/TUGAS-11-PWEB-A/blob/3132b9edef985ca631acba50d293c42790805862/tugas%2011/laporan.jpg)
