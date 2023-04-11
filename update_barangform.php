<?php
			$conn = mysqli_connect('localhost', 'root','','gudang');
			$kode_barang = $_GET['Kode_barang'];
			$cari = "select * from barang where kode_barang= '$kode_barang'";
			$hasil_cari = mysqli_query($conn,$cari);
			$data = mysqli_fetch_array($hasil_cari);
			
			if($data > 0){
				
			
		?>
<html>
	<head>
		<title>Update barang</title>
	</head>				
			<body>
				<h3>Update barang</h3>
				<table>
					<form method="POST" action="update_barang.php">
					<tr>
						<td>kode_barang</td>
						<td>:</td>
						<td><input type="text" name="kode_barang" size="10" value="<?=$data['Kode_barang']?>" ></td>
					</tr>
					<tr>
						<td>nama_barang</td>
						<td>:</td>
						<td><input type="text" name="Nama_barang" size="30" ></td>
					</tr>
					<tr>
                    <?php
  // Connect to the database
  $conn=mysqli_connect('localhost','root','','gudang');

// Query the database for the options
$sql = "SELECT kode_gudang, nama_gudang FROM gudang";
$result = $conn->query($sql);

// Generate the radio buttons
echo '<label>pilih gudang:</label>';
while ($row = $result->fetch_assoc()) {
  echo '<label>';
  echo '<input type="radio" name="kode_gudang" value="' . $row['kode_gudang'] . '">';
  echo $row['nama_gudang'];
  echo '</label>';
}

// Close the connection
$conn->close();

  ?>
					</tr>
					
					<tr>
						<td><input type="submit" name="submit" value="UPDATE DATA"></td>
					</tr>
					</form>
				</table>
			<?php
			}
			?>
				
			</body>
	</html>



