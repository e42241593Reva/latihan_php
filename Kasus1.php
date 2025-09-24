<?php
// PEMILIHAN OUTFIT BERDASARKAN CUACA
$cuaca = "Hujan";

if ($cuaca == "Hujan") {
    echo "Sebaiknya pakai jaket anti air dan bawa payung.";
} elseif ($cuaca == "Cerah") {
    echo "Gunakan kacamata hitam dan pakaian ringan.";
} elseif ($cuaca == "Dingin") {
    echo "Pakai sweater atau hoodie agar hangat.";
} else {
    echo "Pilih outfit yang nyaman sesuai kondisi.";
}
?>