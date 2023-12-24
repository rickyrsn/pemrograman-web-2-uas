<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Perkuliahan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Jadwal Perkuliahan</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Mata Kuliah</th>
            <th>Hari</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
        </tr>
        <?php
            // Koneksi ke database (gantilah sesuai dengan konfigurasi server Anda)
            $koneksi = mysqli_connect("db", "admin_user", "admin_password", "database_kuliah");

            // Periksa koneksi
            if (!$koneksi) {
                die("Koneksi database gagal: " . mysqli_connect_error());
            }

            // Query untuk mendapatkan data jadwal perkuliahan
            $result = mysqli_query($koneksi, "SELECT * FROM jadwal_perkuliahan");

            // Periksa apakah query berhasil dijalankan
            if (!$result) {
                die("Query gagal: " . mysqli_error($koneksi));
            }

            // Tampilkan data dalam tabel
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['mata_kuliah'] . "</td>";
                echo "<td>" . $row['hari'] . "</td>";
                echo "<td>" . $row['jam_mulai'] . "</td>";
                echo "<td>" . $row['jam_selesai'] . "</td>";
                echo "</tr>";
            }

            // Tutup koneksi database
            mysqli_close($koneksi);
        ?>
    </table>
</body>
</html>
