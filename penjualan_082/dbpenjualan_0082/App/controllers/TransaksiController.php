<?php
require_once __DIR__ . '/../models/Transaksi.php'; 

class TransaksiController
{
    private $transaksiModel;

    public function __construct($db)
    {
        $this->transaksiModel = new Transaksi($db); 
    }

    public function index()
    {
        $transaksiList = $this->transaksiModel->getAllTransaksi();
        require_once __DIR__ . '/../views/transaksi/indextrans.php';
    }

    public function create()
    {
        require_once __DIR__ . '/../views/transaksi/createtrans.php'; 
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id_transaksi = uniqid('TRX');
            $kode_barang = $_POST['kode_barang'];
            $id_pelanggan = $_POST['id_pelanggan'];
            $jumlah = $_POST['jumlah'];
            $harga_barang = $_POST['harga_barang'];
            $total_harga = $harga_barang * $jumlah;
            $tanggal_transaksi = $_POST['tanggal'];

            $data = [
                'id_transaksi' => $id_transaksi,
                'kode_barang' => $kode_barang,
                'id_pelanggan' => $id_pelanggan,
                'jumlah' => $jumlah,
                'total_harga' => $total_harga,
                'tanggal' => $tanggal_transaksi
            ];

            $this->transaksiModel->create($data); 
        }

        
        header("Location: index.php?controller=transaksi&action=index");
        exit();
    }






    public function detail($id)
    {
        $transaksiDetail = $this->transaksiModel->getDetailTransaksi($id);

        // Cek jika data tidak ditemukan
        if (!$transaksiDetail) {
            echo "Detail transaksi tidak ditemukan.";
            return; // Berhenti jika tidak ada data
        }

        require_once __DIR__ . '/../views/transaksi/detail.php';
    }
}
