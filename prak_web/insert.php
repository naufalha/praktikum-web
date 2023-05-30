<?php
$conn = new mysqli('localhost','root','','uts_web');
$stmt = $conn->prepare("INSERT INTO pasien (no_ktp, nama_pasien, jenis_kelamin,tanggal_lahir,nama_dokter) VALUES (?, ?, ?, ?,?)");

$no_ktp = mysqli_real_escape_string($conn, $_POST['no_ktp']);
$nama_pasien = mysqli_real_escape_string($conn, $_POST['nama_pasien']);
$jenis_kelamin = mysqli_real_escape_string($conn, $_POST['jenis_kelamin']);
$tanggal_lahir = mysqli_real_escape_string($conn, $_POST['tanggal_lahir']);
$nama_dokter = mysqli_real_escape_string($conn, $_POST['nama_dokter']);

$stmt->bind_param("sssss", $no_ktp, $nama_pasien, $jenis_kelamin,$tanggal_lahir,$nama_dokter);

$stmt->execute();
echo "New records created successfully";

$stmt->close();
$conn->close();
header("Location: index.php")
?>