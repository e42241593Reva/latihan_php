<?php
// MENENTUKAN ONGKIR BERDASARKAN KOTA
$kota = "Surabaya";

switch ($kota) {
    case "Jakarta":
        echo "Ongkir Rp35.000";
        break;
    case "Surabaya":
        echo "Ongkir Rp10.000";
        break;
    case "Semarang":
        echo "Ongkir Rp25.000";
        break;
    default:
        echo "Ongkir Rp15.000";
}
?>