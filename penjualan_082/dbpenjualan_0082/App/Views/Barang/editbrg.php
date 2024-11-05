<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
    <style>
        /* Style untuk form */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; /* Mengatur tata letak menjadi kolom */
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px; /* Menambahkan jarak antara judul dan form */
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>Edit Barang</h1>
    <form action="index.php?controller=barang&action=update" method="POST">
        <input type="hidden" name="kode_barang" value="<?= $barang['kode_barang'] ?>">

        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" value="<?= $barang['nama_barang'] ?>" required>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" value="<?= $barang['harga'] ?>" required>

        <label for="stok">Stok:</label>
        <input type="number" name="stok" value="<?= $barang['stok'] ?>" required>

        <button type="submit">Update</button>
        <a href="index.php?controller=barang&action=index">Batal</a>
    </form>
</body>
</html>
