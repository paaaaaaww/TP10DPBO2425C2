# TP10DPBO2425C2
Saya Fauzia Rahma Nisa mengerjakan Tugas Praktikum 10 dalam mata kuliah Desain dan Pemrograman Berdasarkan Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

**1. Desain program**

Web app ini dibuat sebagai tugas praktikum dengan tema Skin Clinic, untuk memanajemen data pasien, dokter, treatment, dan booking treatment secara sederhana. Program menggunakan PHP dengan struktur MVVM (Model-View ViewModel), CRUD lengkap untuk semua tabel, dan data binding pada form.

Tabel dan Atribut 

a. pasien

- id_pasien (INT, PK, AUTO_INCREMENT)
- nama (VARCHAR)
- no_hp (VARCHAR)

b. dokter

- id_dokter (INT, PK, AUTO_INCREMENT)
- nama (VARCHAR)
- spesialis (VARCHAR)

c. treatment

- id_treatment (INT, PK, AUTO_INCREMENT)
- nama_treatment (VARCHAR)
- harga (INT)

d. booking_treatment

- id_booking (INT, PK, AUTO_INCREMENT)
- id_pasien (INT, FK → pasien.id_pasien)
- id_dokter (INT, FK → dokter.id_dokter)
- id_treatment (INT, FK → treatment.id_treatment)
- tanggal_booking (DATE)

Relasi

- booking_treatment.id_pasien → pasien.id_pasien
- booking_treatment.id_dokter → dokter.id_dokter
- booking_treatment.id_treatment → treatment.id_treatment

Struktur program menggunakan MVVM:

Penjelasan:

- Models → Berisi kelas untuk berinteraksi langsung dengan database (CRUD).
- ViewModels → Berisi logika aplikasi, memanggil model, menyiapkan data untuk view.
- Views → Berisi tampilan HTML dengan data dari ViewModel (data binding).
- index.php → Controller utama, menentukan entity (pasien, dokter, treatment, booking) dan aksi (list, add, edit, save, update, delete).
- Database.php → Mengatur koneksi ke MySQL.
  
**2. Alur Program**

   Program ini bekerja dengan cara yang cukup sederhana. Pertama, pengguna memilih jenis data yang ingin dikelola, yaitu pasien, dokter, treatment, atau booking. Setelah itu, pengguna bisa memilih aksi yang ingin dilakukan, seperti melihat daftar data, add, edit, update, delete.

Setiap form untuk menambah atau mengedit data terhubung langsung dengan database melalui ViewModel. Misalnya, pada form booking, dropdown pasien, dokter, dan treatment otomatis menampilkan data yang ada di database sehingga pengguna tidak perlu mengetik manual. Setelah data diisi dan dikirim, ViewModel akan memanggil Model untuk menyimpan atau memperbarui data di database.

Hasil dari setiap aksi kemudian ditampilkan kembali di halaman list. Selain itu, setiap form memiliki validasi agar field penting tidak boleh kosong, sehingga mencegah kesalahan input dan menjaga integritas data.

**3. Dokumentasi**

Klik dibawah ini untuk melihat dokumentasi 

[![Watch the video](https://img.youtube.com/vi/zSrneCFTT1M/0.jpg)](https://youtu.be/zSrneCFTT1M)
