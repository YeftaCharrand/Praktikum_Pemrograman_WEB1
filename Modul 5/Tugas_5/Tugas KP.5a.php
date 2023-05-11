<?php 
$nama_lengkap = "Andi Firmansyah"; 
$ttl= "Cilacap, 26 April 1991"; 
$alamat = "Jl. Kalimantan, Cilacap"; 
$agama = "Islam"; 
$pekerjaan = "Mahasiswa"; 
$status = "Perjaka" ; 
// echo "Nama Lengkap : " . $nama_lengkap . "<br>"; 
// echo "Tempat/Tanggal Lahir :" . $ttl . "<br>"; 
// echo "Alamat: " . $alamat . "<br>"; 
// echo "Agama : " . $agama . "<br>";
// echo "Pekerjaan : " . $pekerjaan . "<br>";
// echo "Status: " . $status . "<br>";
 
echo "<h2>" . "BIODATA SAYA ADALAH SEBAGAI BERIKUT". "</h2>";

?>

<table border=0>
    <tr>
        <td>Nim</td>
        <td>:</td>
        <td>
            <?php
                echo"$nama_lengkap";
            ?>
        </td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>
            <?php
             echo"$ttl";
            ?>
        </td>
    </tr>
    <tr>
        <td>Umur</td>
        <td>:</td>
        <td>
            <?php
             echo"$alamat";
            ?>
        </td>
    </tr>
    <tr>
        <td>Nilai</td>
        <td>:</td>
        <td>
            <?php
              echo"$agama";
            ?>
        </td>
    </tr>
    <tr>
        <td>Nilai</td>
        <td>:</td>
        <td>
            <?php
              echo"$pekerjaan";
            ?>
        </td>
    </tr>
    <tr>
        <td>Nilai</td>
        <td>:</td>
        <td>
            <?php
              echo"$status";
            ?>
        </td>
    </tr>
</table> 
