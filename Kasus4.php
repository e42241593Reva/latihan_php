<?php
// MENENTUKAN METODE PEMBAYARAN
$metode = "Transfer";

if ($metode == "COD") {
    echo "Bayar di tempat.";
} elseif ($metode == "Transfer") {
    echo "Silakan transfer ke rekening BRI.";
} elseif ($metode == "E-Wallet") {
    echo "Gunakan OVO, GoPay, atau Dana.";
} else {
    echo "Metode pembayaran tidak tersedia.";
}
?>