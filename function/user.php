<?php

function run($query){
	global $con;
	if(mysqli_query($con,$query)){
		return true;
	}else{
		return false;
	}
}

function run1($query){
	global $con;
	$result= mysqli_query($con,$query) or die("query tampil gagal");
	return $result;
}

function tambahData($data){
	$kunci=implode(", ",array_keys($data));
	$i=0;
	foreach($data as $key=>$value){
		if(!is_int($value)){
			$nilaiArray[$i]= "'".$value."'";
		}else{
			$nilaiArray[$i]= $value;
		}
		$i++;
	}
	$nilai=implode(", ",$nilaiArray);
	$query="INSERT INTO user ($kunci) VALUES ($nilai)";
	return run($query);
}

function editData($id,$data){
	$i=0;
	foreach($data as $key=>$value){
		if(!is_int($value)){
			$nilaiArray[$i]= $key." = '". $value ."'";
		}else{
			$nilaiArray[$i]= $key." = ". $value;
		}
		$i++;
	}
	$nilai=implode(", ",$nilaiArray);
	$query="UPDATE user SET $nilai WHERE id = $id";
	return run($query);
}

function tampil(){
	$query="SELECT * FROM user";
	return run1($query);
}

function edit($id){
	$query="SELECT * FROM user WHERE id=$id";
	return run1($query);
}

function hapusData($id){
	$query="DELETE FROM user WHERE id=$id";
	return run($query);
}

?>