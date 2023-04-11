<?php

?>
<form method="post" action="insert_barang.php">
  <label for="kode_barang">kode_barang</label>
  <input type="text" id="kode_barang" name="kode_barang"><br>

  <label for="nama_barang">nama_barang</label>
  <input type="nama_barang" id="nama_barang" name="nama_barang"><br>



  <?php
  // Connect to the database
  $conn=mysqli_connect('localhost','root','','gudang');

// Query the database for the options
$sql = "SELECT kode_gudang, nama_gudang FROM gudang";
$result = $conn->query($sql);

// Generate the radio buttons
echo '<label>Choose an option:</label>';
while ($row = $result->fetch_assoc()) {
  echo '<label>';
  echo '<input type="radio" name="kode_gudang" value="' . $row['kode_gudang'] . '">';
  echo $row['nama_gudang'];
  echo '</label>';
}

// Close the connection
$conn->close();

  ?>

  <input type="submit" value="Submit">
</form>
