<?php
// Koneksi ke database (gantilah sesuai dengan konfigurasi server Anda)
$koneksi = mysqli_connect("db", "admin_user", "admin_password", "kuliah");

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Ambil data dari formulir
$mata_kuliah = $_POST['mata_kuliah'];
$hari = $_POST['hari'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];

// Query untuk memasukkan data ke database
$query = "INSERT INTO jadwal_perkuliahan (mata_kuliah, hari, jam_mulai, jam_selesai) VALUES ('$mata_kuliah', '$hari', '$jam_mulai', '$jam_selesai')";

// Jalankan query
if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil ditambahkan.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
