<?php
// SISTEM MOOD TRACKER (REKOMENDASI MUSIK)
$mood = "Galau";

if ($mood == "Senang") {
    echo "Rekomendasi lagu: 'Bahagia' - GAC, 'Hari Baru' - RAN, 'Kamulah Satu-Satunya' - Dewa 19.";
} elseif ($mood == "Galau") {
    echo "Rekomendasi lagu: 'Separuh Aku' - Noah, 'Bertahan Terluka' - Fabio Asher, 'Kasih Tak Sampai' - Padi.";
} elseif ($mood == "Santai") {
    echo "Rekomendasi lagu: 'Cinta dan Rahasia' - Yura Yunita ft. Glenn Fredly, 'Hanya Rindu' - Andmesh, 'Kangen' - Dewa 19.";
} elseif ($mood == "Sedih") {
    echo "Rekomendasi lagu: 'Hampa' - Ari Lasso, 'Kisah Cintaku' - Chrisye, 'Pupus' - Dewa 19.";
} elseif ($mood == "Semangat") {
    echo "Rekomendasi lagu: 'Manusia Kuat' - Tulus, 'Jangan Menyerah' - D'masiv, 'Kebyar-Kebyar' - Gombloh.";
} else {
    echo "Rekomendasi lagu umum: 'Cinta Luar Biasa' - Andmesh, 'Hati-Hati di Jalan' - Tulus, 'Merasa Indah' - Tiara Andini.";
}
?>