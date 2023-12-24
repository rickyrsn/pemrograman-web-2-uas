<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
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
        form {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="time"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1>Admin Page</h1>
    </header>
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
