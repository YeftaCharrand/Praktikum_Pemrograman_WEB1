<!-- proses_tugas.php -->

<?php
$kode=$_GET['kode'];
$judul=$_GET['judul'];
$penerbit=$_GET['penerbit'];
$pengarang=$_GET['pengarang'];
$tahun=$_GET['tahun'];
    echo "kode buku : " . $kode . "<br>";
    echo "judul buku : " . $judul ."<br>";
    echo "penerbit : " . $penerbit . "<br>";
    echo "penerbit : " . $pengarang . "<br>";
    echo "tahun terbit : ". $tahun ."<br>";
?>