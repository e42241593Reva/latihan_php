<?php
// Membuat array 2 dimensi berisi data siswa
$siswa = [
    ["Nama" => "Reva",   "Matematika" => 95, "Bahasa" => 89],
    ["Nama" => "Dira",   "Matematika" => 88, "Bahasa" => 92],
    ["Nama" => "Saka",   "Matematika" => 76, "Bahasa" => 80]
];

// Cetak nilai Bahasa dari siswa ke-2 (indeks ke-1)
echo "Nilai Bahasa siswa ke-2 (" . $siswa[1]["Nama"] . "): " . $siswa[1]["Bahasa"] . "<br><br>";

// Cetak semua data siswa menggunakan looping
echo "Data semua siswa:<br>";
foreach ($siswa as $data) {
    echo "Nama: " . $data["Nama"] . " | ";
    echo "Matematika: " . $data["Matematika"] . " | ";
    echo "Bahasa: " . $data["Bahasa"] . "<br>";
}
?>
