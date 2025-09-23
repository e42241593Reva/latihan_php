<?php
// hanya 1 jenis string operasi: penyambungan (concatenation) string. Operator ini menggunakan karakter titik (.) atau (.=).
// Operator penyambungan string ini membutuhkan 2 inputan yang bertipe data string.
$a = "Hello ";
$b = "World!";
$a .= $b;
echo $a; // Hello World!
echo "<br />";

$a = "belajar ";
$b = "PHP ";
$c = "di Politeknik Negeri Jember";
$hasil= "Saya sedang ".$a.$b.$c;
echo $hasil; // Saya sedang belajar PHP di Politeknik Negeri Jember
?>