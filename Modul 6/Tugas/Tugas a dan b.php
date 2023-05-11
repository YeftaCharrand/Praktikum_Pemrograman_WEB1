<!-- Lembar Tugas KP.6 (a) dan (b)  -->

<?php
$server = $_SERVER['PHP_SELF'];
?>
<h1>FORM PENJUMLAHAN</h1>
<hr color="black" width="100%" align="left">
<form action="<?php echo $server;?>" method="post">
<table border="0">
    <tr>
        <td>Nilai A</td>
        <td>:</td>
        <td><input type="text" name="a"></td>
    </tr>
    <tr>
        <td>Nilai B</td>
        <td>:</td>
        <td><input type="text" name="b"></td>
    </tr>
    <tr>
        <td>&nbsp</td>
        <td>&nbsp</td>
        <td><input type="submit" name="button" value="Tambah">
<input type="reset" name="reset" value="Reset">
    </td>
    </tr>
</table>
</form>

<?php
    $a=$_POST["a"];
    $b=$_POST["b"];
    $hasil=$a+$b;
    echo "Hasil : $hasil";

?>