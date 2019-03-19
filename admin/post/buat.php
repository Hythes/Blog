<?php
	require '../../backend/koneksi.php';
	$label = $database->select('label','*');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Buat Post</title>
</head>
<body>
	<form enctype="multipart/form-data" method="POST" action="<?=$base_url?>create.php">
		<input type="text" name="judul" placeholder="judul">
		<input type="text" name="deskripsi" placeholder="Deskripsi">
		<textarea name="text"></textarea>
		<input type="file" name="foto">
		<select name="label">
			<?php foreach($label as $l):?>
				<option value="<?=$l['ID']?>"><?=$l['NAMA']?></option>
			<?php endforeach;?>
		</select>
		<input type="hidden" name="admin_id">
		
	</form>
</body>
</html>