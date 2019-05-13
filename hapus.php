<?php
	require_once('core/init.php');
	require_once('template/header.php');
	
	if(isset($_GET['id'])){
		if(hapusData($_GET['id'])){
			header('location: index.php');
		}else{
			echo "Tambah Data gagal";
		}
	}
?>