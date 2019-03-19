<?php
	require '../../backend/koneksi.php';

	$s = $database->delete('label',$_GET['id']);
	if($s->rowCount() == 1){
		header('Location: index.php?s=1');
	}else{
		header('Location: index.php?s=0');
	}
?>