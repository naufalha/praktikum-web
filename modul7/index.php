<html>
    <head>
        <title>pasien</title>
        <?php
        $connG=mysqli_connect('localhost','root','','uts_web');
    
        ?>
    </head>



    <body>

<form method="post" action="insert.php">

    <table border="1">
        <tr>
            <td><label for="no_ktp"></label>no_ktp</td>
            <td><input type="text" id="no_ktp" name="no_ktp" required><br></td>
        </tr>
        <tr>
            <td><label for="nama_pasien">nama_pasien</label></td>
            <td><input type="text" id="nama_pasien" name="nama_pasien" required><br></td>
        </tr>
        <tr>
            <td><label for="jenis_kelamin">jenis_kelamin</label></td>\
            <td><input required type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L">L <input type="radio" name="jenis_kelamin" id="jenis_kelamin_P" value="P">P</td>
        </tr>
        <tr>
            <td><label for="tanggal_lahir"></label>tanggal_lahir</td>
            <td><input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br></td>
        </tr>
        <tr>
            <td><label for="nama_dokter">nama_dokter</label></td>
            <td>
           <?php
           $sql = "SELECT nama_dokter FROM dokter";
           $result = $connG->query($sql);
           
           // Generate the radio buttons
          
           while ($row = $result->fetch_assoc()) {
             echo '<label>';
             echo '<input type="radio" name="nama_dokter" value="' . $row['nama_dokter'] . '">';
             echo $row['nama_dokter'];
             echo '</label>';
           }
           
           // Close the connection
           //$conn->close();
           
             ?>
           



            </td>
        </tr>
        
    </table>
  






  <input type="submit" value="Submit">
</form>

        <h3>table barang</h3>
        <table border='1' >
<tr>
<td align='center' width='20%'><b>id_pasien</b></td>
<td align='center' width='30%'><b>ktp</b></td>
<td align='center' width='10%'><b>nama</b></td>
<td align='center' width='10%'><b>jenis kelamin</b></td>
<td align='center' width='10%'><b>tanggal lahir</b></td>
<td align='center' width='10%'><b>update</b></td>
<td align='center' width='10%'><b>hapus</b></td>
</tr>
<?php
$cari = "select * from pasien order by id_pasien";
$hasil_cari = mysqli_query($connG,$cari);
while ($data = mysqli_fetch_row($hasil_cari)){
echo"
<tr>
<td align='center' width='20%'>$data[0]</td>
<td align='center' width='30%'>$data[1]</td>
<td align='center' width='10%'>$data[2]</td>
<td align='center' width='10%'>$data[3]</td>
<td align='center' width='10%'>$data[4]</td>

<td align='center'><a href='update_barangform.php?Kode_barang=$data[0]'>update</a></td>
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