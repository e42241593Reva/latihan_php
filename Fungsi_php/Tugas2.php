<?php
// Ambil informasi tanggal sekarang dengan getdate()
$tanggalSekarang = getdate();

// Susun format dd-mm-yyyy
$hari   = $tanggalSekarang['mday'];   // tanggal (1-31)
$bulan  = $tanggalSekarang['mon'];    // bulan (1-12)
$tahun  = $tanggalSekarang['year'];   // tahun (misalnya 2025)

// Tampilkan hasil
echo "Tanggal sekarang (getdate): " . $hari . "-" . $bulan . "-" . $tahun;
?>
