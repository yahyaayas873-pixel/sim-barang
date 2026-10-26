<?php
class Barang {
    // Properti dasar 
    public $kode;
    public $nama;
    public $jumlah;

    // Konstruktor untuk inisialisasi data objek
    public function __construct($kode, $nama, $jumlah) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->jumlah = $jumlah;
    }

    // Method untuk menampilkan format informasi barang
    public function getInfoBarang() {
        return "Barang [Kode: {$this->kode}, Nama: {$this->nama}, Jumlah: {$this->jumlah}]";
    }
}
?>
