<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Transaksi</title>
    <style>
        /* Style untuk navigasi */
        nav {
            margin-bottom: 20px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            background-color: #f8f9fa;
            padding: 10px;
        }

        nav ul li {
            display: inline;
            margin-right: 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #007bff;
        }

        /* Style untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Style untuk tombol aksi */
        a {
            text-decoration: none;
            padding: 5px 10px;
            color: white;
            border-radius: 4px;
        }

        a[href*="detail"] {
            background-color: #17a2b8;
        }

        /* Style untuk tombol tambah data */
        a[href*="create"] {
            display: inline-block;
            margin-bottom: 10px;
            background-color: #28a745;
            color: white;
            padding: 7px 12px;
            border-radius: 4px;
            text-decoration: none;
        }
    </style>
</head>

<body>

<!-- Navigasi -->
<nav>
    <ul>
        <li><a href="index.php?controller=home&action=index">Home</a></li>
        <li><a href="index.php?controller=barang&action=index">Barang</a></li>
        <li><a href="index.php?controller=pelanggan&action=index">Pelanggan</a></li>
        <li><a href="index.php?controller=transaksi&action=index">Transaksi</a></li>
    </ul>
</nav>

<!-- Judul Halaman -->
<h2>Daftar Transaksi</h2>

<!-- Tombol Tambah Data -->
<a href="index.php?controller=transaksi&action=create">Tambah Data</a>

<!-- Tabel Transaksi -->
<table>
    <tr>
        <th>No</th>
        <th>ID Transaksi</th>
        <th>Kode Barang</th>
        <th>ID Pelanggan</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
        <th>Tanggal Transaksi</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($transaksiList as $key => $transaksi): ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $transaksi['id_transaksi'] ?></td>
            <td><?= $transaksi['kode_barang'] ?></td>
            <td><?= $transaksi['id_pelanggan'] ?></td>
            <td><?= $transaksi['jumlah'] ?></td>
            <td><?= $transaksi['total_harga'] ?></td>
            <td><?= $transaksi['tanggal'] ?></td>
            <td><a href="index.php?controller=transaksi&action=detail&id=<?= $transaksi['id_transaksi'] ?>">Detail</a></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
