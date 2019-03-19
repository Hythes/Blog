<?php
	require '../../backend/koneksi.php';
	$sohw = $database->select('label','*');
	$i = 1;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Label</title>
</head>
<body>
	<a href="buat.php">Buat Label</a>
	<table border="1">
		<thead>
			<th>No</th>
			<th>Nama Label</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php foreach($sohw as $show): ?>
				<tr>
					<td><?=$i?></td>
					<td><?=$show['NAMA']?></td>
					<td>
						<a href="edit.php?id=<?=$show['ID']?>">Edit</a>
						<a href="../../backend/label/delete.php?id=<?=$show['ID']?>">Delete</a>
					</td>
				</tr>
			<?php $i++;endforeach;?>
		</tbody>
	</table>
</body>
</html>