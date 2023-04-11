<?php
	$conn= mysqli_connect('localhost', 'root', '','gudang');
	$Kode_barang = $_GET['Kode_barang'];

    $hapus="DELETE FROM barang WHERE Kode_barang='$Kode_barang' ";

    
    mysqli_query($conn,$hapus);
    echo "alert('data berhasil di hapus')";
    header("Location: gudang.php");

// Output the value of the "Kode_barang" parameter
echo "Kode_barang = " . $Kode_barang;
?>