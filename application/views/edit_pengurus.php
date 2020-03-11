<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
</head>
<body>

<h2>Edit Data</h2>
	
<?php echo form_open ('pengurus/edit_submit'); ?>

<table>
<?php foreach ($data->result_array() as $row) { ?>

	<tr>
		<td>ID</td>
		<td><input type="text" name="id" value="<?php echo $row ['id']; ?>" readonly="yes"></td>
	</tr>		

	<tr>
		<td>Nama</td>
		<td><?php echo form_input('nama',$row['nama']); ?></td>
	</tr>

	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="radio" name="gender" value="L" <?php if(!(strcmp($row['gender'],"L"))) {echo "CHECKED";} ?>>Laki-Laki</td>
	</tr>

	<tr>
		<td></td>
		<td><input type="radio" name="gender" value="P" <?php if(!(strcmp($row['gender'],"P"))) {echo "CHECKED";} ?>>Perempuan</td>
	</tr>

	<tr>
		<td>Alamat</td>
		<td><?php echo form_input('alamat',$row['alamat']); ?></td>
	</tr>

	<tr>
		<td>Gaji</td>
		<td><?php echo form_input('gaji',$row['gaji']); ?></td>
	</tr>

	<tr>
		<td></td>
		<td><?php echo form_submit('submit','ubah'); ?> <input type="button" value="batal" onclick="self.history.back"> </td>
	</tr>


<?php } ?>

</table>

<?php echo form_close(); ?>

</body>
</html>