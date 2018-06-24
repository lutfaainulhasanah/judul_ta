<!DOCTYPE html>
<html>
<head>
	<title>FORM UPDATE USULAN MAHASISWA</title>
</head>
<body>
	<h1>dekaaaa</h1>
	<center>
		<h1>UPDATE USULAN JUDUL MAHASISWA</h1>
		
	</center>
	<?php foreach($judul as $j){ ?>
	<form action="<?php echo base_url(). 'Usulan_dosen/Update'; ?>" method="post">
		<table border="1" style="margin:20px auto;">


			<tr>
				<td>Id Judul</td>
				<td>
					<input type="text" name="id_judul" disabled value="<?php echo $j->id_judul ?>"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>
				<input type="text" name="nim" disabled value="<?php echo $j->nim ?>">
				</td>
			</tr>
			<tr>
				
				<td>Golongan</td>
				<td>
				<input type="text" name="id_gol" disabled value="<?php echo $j->id_gol ?>"></td>
			</td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td>
				<input type="text" name="id_prodi" disabled value="<?php echo $j->id_prodi ?>"></td>
			</tr>			
			<tr>
			<tr>
				<td>NIP</td>
				<td>
				<input type="text" name="nip" disabled value="<?php echo $j->nip ?>"></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td>
				<input type="text" name="judul" disabled value="<?php echo $j->judul ?>"></td>
			</tr>
			<tr>
				<td>Judul Dosen</td>
				<td>
				<input type="text" name="judul_dosen" disabled value="<?php echo $j->judul_dosen ?>"></td>
			</tr>
			<tr>
				<td>Ringkasan</td>
				<td>
				<input type="textarea" name="ringkasan" disabled value="<?php echo $j->ringkasan ?>"></td>
			</tr>
			<tr>
				<td>Tugas</td>
				<td>
				<input type="text" name="tugas" value="<?php echo $j->tugas ?>"></td>
			</tr>
			<tr>
				<td>Catatan</td>
				<td>
				<input type="text" name="catatan" value="<?php echo $j->catatan ?>"></td>
			</tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</body>
</html>