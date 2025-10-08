<?php
// Array asosiatif multidimensi berisi 3 produk e-commerce dari brand ESQA
$produk = [
    [
        "Nama" => "ESQA Flawless Cushion Foundation",
        "Kategori" => "Makeup",
        "Harga" => 155000,
        "Rating" => 4.9
    ],
    [
        "Nama" => "ESQA Wonder Crush Serum Liquid Blush On",
        "Kategori" => "Blush & Highlighter",
        "Harga" => 90000,
        "Rating" => 4.9
    ],
    [
        "Nama" => "ESQA Slick Drip Serum Lip Tint",
        "Kategori" => "Lip Product",
        "Harga" => 65000,
        "Rating" => 4.9
    ]
];

// Mencari produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $item) {
    if ($item["Harga"] > $tertinggi["Harga"]) {
        $tertinggi = $item;
    }
}

// Cetak produk dengan harga tertinggi
echo "<b>Produk dengan harga tertinggi:</b><br>";
echo "Nama: " . $tertinggi["Nama"] . "<br>";
echo "Kategori: " . $tertinggi["Kategori"] . "<br>";
echo "Harga: Rp " . number_format($tertinggi["Harga"], 0, ',', '.') . "<br>";
echo "Rating: " . $tertinggi["Rating"] . "<br>";
?>
