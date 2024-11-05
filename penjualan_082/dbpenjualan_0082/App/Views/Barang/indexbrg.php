<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <title>Halaman Barang</title>
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

        a[href*="edit"] {
            background-color: #ffc107;
        }

        a[href*="delete"] {
            background-color: #dc3545;
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
<h1>Daftar Barang</h1>

<!-- Tombol Tambah Data -->
<a href="index.php?controller=barang&action=create">Tambah Data</a>

<!-- Tabel Barang -->
<table>
    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($data as $key => $barang): ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $barang['kode_barang'] ?></td>
            <td><?= $barang['nama_barang'] ?></td>
            <td><?= $barang['harga'] ?></td>
            <td><?= $barang['stok'] ?></td>
            <td>
                <a href="index.php?controller=barang&action=edit&id=<?= $barang['kode_barang'] ?>">Edit</a>
                <a href="index.php?controller=barang&action=delete&id=<?= $barang['kode_barang'] ?>">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
