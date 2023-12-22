<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        form {
            width: 50%;
            margin: 20px auto;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Admin Page</h2>
    
    <form action="insert.php" method="post">
        <label for="mata_kuliah">Mata Kuliah:</label>
        <input type="text" name="mata_kuliah" required>
        
        <label for="hari">Hari:</label>
        <input type="text" name="hari" required>
        
        <label for="jam_mulai">Jam Mulai:</label>
        <input type="time" name="jam_mulai" required>
        
        <label for="jam_selesai">Jam Selesai:</label>
        <input type="time" name="jam_selesai" required>
        
        <input type="submit" value="Tambah Jadwal">
    </form>
</body>
</html>
