<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Perkuliahan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            padding: 10px;
            text-align: center;
            color: #fff;
        }
        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        nav a:hover {
            background-color: #555;
        }
        table {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Jadwal Perkuliahan</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="admin.php">Admin</a>
    </nav>
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
            $koneksi = mysqli_connect("db", "admin_user", "admin_password", "kuliah");

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
