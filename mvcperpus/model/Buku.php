<?php
class Buku {
private $dataBuku = [
["id" => 1, "Judul" => "Laskar Pelangi", "Pengarang" => "Andrea Hirata", "Tahun_Terbit" => 2005],
["id" => 2, "Judul" => "Selamat Tinggal", "Pengarang" => "Tere Liye", "Tahun_Terbit" => 2020],
["id" => 3, "Judul" => "Bumi Manusia", "Pengarang" => "Pramoedya Ananta Toer", "Tahun_Terbit" => 1980],
["id" => 4, "Judul" => "Laut Bercerita", "Pengarang" => "Leila S. Chudori", "Tahun_Terbit" => 2017],
];
// Mengambil semua data produk
public function getAllBuku() {
return $this->dataBuku;
}
}