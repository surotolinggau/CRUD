<?php
	require_once('core/init.php');
	$result = tampil();
	//print_r($result);
?>


<a href="add.php" id="tambah">Tambah Data</a>

	<div id="head">
		<div class="col-3">
			Nama
		</div>
		<div class="col-3">
			Password
		</div>
		<div class="col-3">
			Umur
		</div>
	</div>
	<div class="clear"></div>
	<?php while($row=mysqli_fetch_assoc($result)):?>
	<div id="body">
		<div class="col-3">
			<?= $row['nama'];?>
		</div>
		<div class="col-3">
			<?= $row['password'];?>
		</div>
		<div class="col-3">
			<?= $row['umur'];?>
		</div>
		<div class="col-3">
			<a href="hapus.php?id=<?php echo $row['id'];?>" id="hapus">Hapus</a>
		</div>
		<div class="col-3">
			<a href="edit.php?id=<?php echo $row['id'];?>" id="edit">Edit</a>
		</div>
		<div class="clear"></div>
		</div>
		<?php endwhile; //endwhile?>
