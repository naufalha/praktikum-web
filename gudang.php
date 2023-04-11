<html>
    <head>
        <title>gudang</title>
        <?php
        $connG=mysqli_connect('localhost','root','','gudang');
    
        ?>
    </head>

    <body>
        <h3>table barang</h3>
        <table border='1' >
<tr>
<td align='center' width='20%'><b>Kode_barang</b></td>
<td align='center' width='30%'><b>Nama_barang</b></td>
<td align='center' width='10%'><b>Kode_gudang</b></td>
<td align='center' width='10%'><b>hapus</b></td>

</tr>
<?php
$cari = "select * from barang order by Kode_barang";
$hasil_cari = mysqli_query($connG,$cari);
while ($data = mysqli_fetch_row($hasil_cari)){
echo"
<tr>
<td align='center' width='20%'>$data[0]</td>
<td align='center' width='30%'>$data[1]</td>
<td align='center' width='10%'>$data[2]</td>
<td align='center'><a href='hapus_barang.php?Kode_barang=$data[0]'>hapus</a></td>
</tr>";
}
?>
</table>
<br>
<a href="input_barang.php">
<button>tambahkan barang</button>
</a>
</center>

    <h3>daftar gudang</h3>
    <table border='1' width='50%'>
<tr>
<td align='center' width='10%'><b>Kode_gudang</b></td>
<td align='center' width='10%'><b>Nama_gudang</b></td>
<td align='center' width='10%'><b>Alamat</b></td>
</tr>
<?php
$cari = "select * from gudang order by Kode_gudang";
$hasil_cari = mysqli_query($connG,$cari);
while ($data = mysqli_fetch_row($hasil_cari)){
echo"
<tr>
<td align='center' width='10%'>$data[0]</td>
<td align='center' width='10%'>$data[1]</td>
<td align='center' width='10%'>$data[2]</td>
</tr>";
}
?>


    

    </table>

    </body>



</html>