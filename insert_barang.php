<?php
$conn = new mysqli('localhost','root','','gudang');
$stmt = $conn->prepare("INSERT INTO barang (Kode_barang, Nama_barang, Kode_gudang) VALUES (?, ?, ?)");

$Kode_barang = mysqli_real_escape_string($conn, $_POST['kode_barang']);
$Nama_barang = mysqli_real_escape_string($conn, $_POST['nama_barang']);
$Kode_gudang = mysqli_real_escape_string($conn, $_POST['kode_gudang']);
$stmt->bind_param("sss", $Kode_barang, $Nama_barang, $Kode_gudang);

$stmt->execute();
echo "New records created successfully";

$stmt->close();
$conn->close();
header("Location: gudang.php")
?>
