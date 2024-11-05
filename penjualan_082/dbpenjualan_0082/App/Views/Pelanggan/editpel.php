<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Pelanggan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .button-container {
            display: flex;
            gap: 10px; /* Memberikan jarak antara tombol Update dan Batal */
            align-items: center;
            margin-top: 10px;
        }

        button {
            padding: 10px 20px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: #4CAF50;
        }

        button:hover {
            background-color: #45a049;
        }

        .back-link {
            color: #007BFF;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h1>Edit Pelanggan</h1>
        <form action="index.php?controller=pelanggan&action=update" method="POST">
            <label for="id_pelanggan">ID Pelanggan:</label>
            <input type="text" name="id_pelanggan" value="<?= $pelanggan['id_pelanggan'] ?>" required>

            <label for="nama_pelanggan">Nama Pelanggan:</label>
            <input type="text" name="nama_pelanggan" value="<?= $pelanggan['nama_pelanggan'] ?>" required>

            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" value="<?= $pelanggan['alamat'] ?>" required>

            <div class="button-container">
                <button type="submit">Update</button>
                <a href="index.php?controller=pelanggan&action=index" class="back-link">Batal</a>
            </div>
        </form>
    </div>

</body>

</html>