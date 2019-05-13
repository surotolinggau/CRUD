<?php
	require_once('core/init.php');
	require_once('template/header.php');

if(isset($_POST['submit'])){
	$data=array('nama'=>$_POST['nama'], 'password'=>$_POST['password'], 'umur' =>(int)$_POST['umur']);
	if(editData($_GET['id'], $data)){
		header('location: index.php');
	}else{
		echo "Query Update Data gagal";
	}
}

$result=edit($_GET['id']);
//print_r($result);
while($row=mysqli_fetch_assoc($result)){
?>

<h3>Edit Data</h3>
	<form action="" method="post">
		Nama : 	<input type="text" name="nama" value="<?php echo $row['nama'];?>" /><br/>
		Password : 	<input type="text" name="password" value="<?php echo $row['password'];?>" /><br/>
		Umur : 	<input type="number" name="umur" value="<?php echo $row['umur'];?>" /><br/>
		<input type="submit" value="Edit Data" name="submit" id="tambah">
	</form>
<?php } //endwhile?>