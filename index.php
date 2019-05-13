<?php
require_once('./core/Model.php');
$query = new DBquery();

?>
<DOCTYPE html>
<html>
<head>
	<title> RELASI </title>
</head>
<body>
	<strong> TAMBAH USER </strong>
	<table border="1">
		<tr>
			<form method="POST" action="add.php?action=addUsers">
				<td> Masukan Username </td>
				<td>
					<input name="addusers" type="text">
					<input type="submit" name="add" value="tambahkan">
				</td>
			</form>
		</tr>
	</table>
	<strong> LIHAT USER & SKILL </strong>
	<table border="1" width="50%">
		<tr>
			<th> Nama </th>
			<th> Skill </th>
			<th> Tambah Skill </th>
		</tr>
		<?php
			foreach($query->getUserSkills() as $row):
		?>
		<tr>
			<td> <?= $row['name'] ?> </td>
			<td> 
				<?php 
					if($row[1] == ".") {
						echo "Belum ditambahkan";
					} else {
						echo $row[1];
					}
				?> </td>
			<form method="POST" action="add.php?action=update">
				<td>
					<input name="id" type="hidden" value="<?= $row['id'] ?>">
					<input name="skill" type="text">
					<input type="submit" name="update" values="tambahkan">
				</td>
			</form>
		</tr>
		<?php
			endforeach;
		?>
	</table>
</body>