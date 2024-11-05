<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
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

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: #4CAF50;
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #007BFF;
            text-decoration: none;
            font-size: 14px;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        p {
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Tambah Transaksi</h2>
        <form action="index.php?controller=transaksi&action=store" method="POST">
            <label for="id_transaksi">ID Transaksi:</label>
            <input type="number" name="id_transaksi" required>

            <label for="kode_barang">Kode Barang:</label>
            <input type="text" name="kode_barang" required>

            <label for="id_pelanggan">ID Pelanggan:</label>
            <input type="text" name="id_pelanggan" required>

            <label for="jumlah">Jumlah:</label>
            <input type="number" name="jumlah" required>

            <label for="harga_barang">Harga Barang:</label>
            <input type="number" name="harga_barang" required>

            <label for="tanggal_transaksi">Tanggal Transaksi:</label>
            <input type="date" name="tanggal_transaksi" required>

            <p>Total Harga: <span id="total_harga">0</span></p>

            <button type="submit">Simpan</button>
            <a href="index.php?controller=transaksi&action=index" class="back-link">Kembali</a>
        </form>
    </div>

    <!-- Script JavaScript untuk menghitung total harga secara otomatis -->
    <script>
        document.querySelector("input[name='jumlah']").addEventListener("input", calculateTotal);
        document.querySelector("input[name='harga_barang']").addEventListener("input", calculateTotal);

        function calculateTotal() {
            let jumlah = parseFloat(document.querySelector("input[name='jumlah']").value) || 0;
            let hargaBarang = parseFloat(document.querySelector("input[name='harga_barang']").value) || 0;
            let total = jumlah * hargaBarang;
            document.getElementById("total_harga").innerText = total;
        }
    </script>
</body>

</html>