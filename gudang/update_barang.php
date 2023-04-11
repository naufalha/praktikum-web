<?php
	$conn= mysqli_connect('localhost', 'root', '','gudang');
	
	$Kode_barang=$_POST['kode_barang'];
	$Nama_barang=$_POST['Nama_barang'];
	$Kode_gudang=$_POST['kode_gudang'];

	$submit=$_POST['submit'];
	$update="UPDATE barang set kode_barang='$Kode_barang', Nama_barang='$Nama_barang', kode_gudang='$kode_gudang' WHERE kode_barang='$Kode_barang'";
	
	if($submit){
		if ($nim=''){
			echo "NIM tidak boleh kosong, diisi dulu";
		}elseif ($nama=''){
			echo "Nama tidak boleh kosong";
		}elseif ($alamat=''){
			echo "Alamat tidak boleh kosong";
		}if ($nim=''){
			echo "NIM tidak boleh kosong, diisi dulu";
		}else
			mysqli_query($conn,$update);
			echo "
			<script>
			alert('data berhasil di update');
			document.location.href='gudang.php';
			</script>";
		}
	
?>