<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Detail Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .form-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .detail-item {
            margin-bottom: 10px;
            font-size: 1em;
        }

        .detail-item strong {
            display: inline-block;
            width: 150px;
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
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Detail Transaksi ID: <?= htmlspecialchars($transaksiDetail['id_transaksi']) ?></h2>
        
        <div class="detail-item">
            <strong>Nama Barang:</strong>
            <span><?= htmlspecialchars($transaksiDetail['nama_barang']) ?></span>
        </div>
        
        <div class="detail-item">
            <strong>Nama Pelanggan:</strong>
            <span><?= htmlspecialchars($transaksiDetail['nama_pelanggan']) ?></span>
        </div>
        
        <div class="detail-item">
            <strong>Jumlah:</strong>
            <span><?= htmlspecialchars($transaksiDetail['jumlah']) ?></span>
        </div>
        
        <div class="detail-item">
            <strong>Total Harga:</strong>
            <span><?= htmlspecialchars($transaksiDetail['total_harga']) ?></span>
        </div>
        
        <div class="detail-item">
            <strong>Tanggal Transaksi:</strong>
            <span><?= htmlspecialchars($transaksiDetail['tanggal']) ?></span>
        </div>

        <a href="index.php?controller=transaksi&action=index" class="back-link">Kembali ke Daftar Transaksi</a>
    </div>

</body>

</html>