<?php
	require_once('core/init.php');
	require_once('template/header.php');

	if(isset($_POST['submit'])){
		$data=array('nama'=>$_POST['nama'], 'password'=>$_POST['password'], 'umur' =>(int)$_POST['umur']);
		if(tambahData($data)){
			header('location: index.php');
		}else{
			echo "Tambah Data gagal";
		}
	}
?>

<h3>Tambah Data</h3>
	<form action="" method="post">
		Nama : 	<input type="text" name="nama" /><br/>
		Password : 	<input type="password" name="password" /><br/>
		Umur : 	<input type="number" name="umur" /><br/>
		<input type="submit" value="Tambah Data" name="submit" id="tambah">
	</form>