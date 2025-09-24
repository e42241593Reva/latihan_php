<?php
// MENENTUKAN DISKON BELANJA
$totalBelanja = 250000;

if ($totalBelanja >= 500000) {
    echo "Anda dapat diskon 20%";
} elseif ($totalBelanja >= 250000) {
    echo "Anda dapat diskon 10%";
} else {
    echo "Belanja lagi untuk mendapatkan diskon!";
}
?>