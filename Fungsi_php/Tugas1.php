<?php
// Fungsi untuk mencari bilangan terbesar dari dua bilangan
function cariTerbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// Contoh penggunaan
$bil1 = 100;
$bil2 = 150;

echo "Bilangan pertama: " . $bil1 . "<br>";
echo "Bilangan kedua: " . $bil2 . "<br>";
echo "Bilangan terbesar adalah: " . cariTerbesar($bil1, $bil2);
?>
