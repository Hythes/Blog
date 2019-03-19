<?php
	require '../../backend/koneksi.php';
	$k = $database->select('label','*',$_GET['id']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Label</title>
</head>
<body>
	<form action="../../backend/label/edit.php" method="POST">
		<input type="hidden" name="id" value="<?=$_GET['id']?>">
		<input type="text" name="judul" placeholder="Nama Label" value="<?=$k[0]['NAMA']?>">
		<input type="submit" name="kirim">
	</form>
</body>
</html>