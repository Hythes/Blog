<?php
	require '../koneksi.php';
	if(isset($_POST['kirim'])){
		$w = $database->update('label',[
				'NAMA' => $_POST['judul']
			],$_GET['id']);
		if($w->rowCount() == 1){
			return header("Location: ".$base_url."admin/label/index.php");
		}else{
			return header("Location: ".$base_url."admin/label/index.php?err=1");
		}
	}
?>