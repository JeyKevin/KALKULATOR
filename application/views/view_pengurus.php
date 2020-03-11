<h1>Database Dalam CI</h1>
<?php echo form_open('pengurus/addpengurus');?>
<table>
	
	<tr><td> ID </td> <td> <?php echo form_input('id'); ?> </td> </tr>

	<tr> <td>Nama</td> <td><?php echo form_input('nama'); ?></td> </tr>

	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="radio" name="gender" value="L">Laki-Laki</td>
	</tr>

	<tr>
		<td></td>
		<td><input type="radio" name="gender" value="P">Perempuan</td>
	</tr>

	<tr> <td> Alamat </td> <td> <?php echo form_input('alamat'); ?> </td> </tr>

	<tr> <td>Gaji</td> <td> <?php echo form_input('gaji'); ?> </td> </tr>

	<tr> <td></td> <td> <?php echo form_submit('submit','simpan'); ?> <input type="reset" value="batal"> </td> </tr>

</table>

<?php form_close(); ?>
<br>
<hr>


<br>
<br>

<h1>Database Dalam CI</h1>

<table border="2">
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>Gaji</th>
		<th>Aksi</th>
	</tr>

<?php 
foreach ($data->result_array()as $row) {
 ?>
 <tr>
 	<td><?php echo $row['id']; ?></td>
 	<td><?php echo $row['nama']; ?></td>
 	<td><?php echo $row['gender']; ?></td>
 	<td><?php echo $row['alamat']; ?></td>
 	<td><?php echo $row['gaji']; ?></td>
 	<td> 
 		<?php echo anchor('pengurus/edit/'.$row['id'],'Edit') ?>
 		<?php echo anchor('pengurus/delete/'.$row['id'],'Hapus') ?>

 	</td>
 </tr>
<?php } ?>
</table>

