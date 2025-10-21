<?php
class BukuView {
public function tampilkan($bukuList) {
    echo "<h2>Daftar Buku</h2>";
    echo "<ul>";
     foreach ($bukuList as $b) {
    echo "<li> ID: {$b['id']} - {$b['Judul']} (Pengarang: {$b['Pengarang']}, Tahun Terbit: {$b['Tahun_Terbit']})
    </li>";
}
echo "</ul>";
}
}