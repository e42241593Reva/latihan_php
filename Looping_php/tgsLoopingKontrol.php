<?php
echo "TOTAL TABUNGAN REVA<br><br>";

$tabunganHarian = [10000, 20000, 15000, 5000];
$total = 0;

for ($i = 0; $i < count($tabunganHarian); $i++) {
    echo "Tabungan hari ke-" . ($i+1) . ": Rp " . $tabunganHarian[$i] . "<br>";
    $total += $tabunganHarian[$i];
}

echo "<br>Total Tabungan: Rp " . $total . "<br>";

if ($total >= 50000) {
    echo "Status: Tabungan Banyak<br>";
} else {
    echo "Status: Tabungan Sedikit<br>";
}
?>
