<!DOCTYPE html>
<html>
<head>
	<title>Form Usulan Judul TA</title>
</head>
<body>
	<header>
        <center>
            <h1>Form Usulan Judul Tugas Akhir</h1>
        <p>
			<label for="nim">NIM : </label>
			<input type="text" name="nim" placeholder="nim" />
		</p>
		<p>
			<label for="nama">Nama Lengkap : </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
		<p>
	<td>Prodi : </td>
		<td><select class="form-control" name="prodi">
                <option  value="">-</option>                    
            <?php foreach($get_prodi as $row) { ?>
                <option value="<?php echo $row->prodi;?>">
                	<?php echo $row->prodi;?></option>
            <?php } ?>
        </select></td>
	</p>
		</p>
		<p>
		<td>Golongan : </td>
		<td><select class="form-control" name="golongan">
                <option  value="">-</option>                    
            <?php foreach($get_golongan as $row) { ?>
                <option value="<?php echo $row->golongan;?>">
                	<?php echo $row->golongan;?></option>
            <?php } ?>
        </select></td>
	</p>
	<p>
		<label for="judul">Judul : </label>
		<input type="text" name="judul" placeholder="judul" />
	</p>
	<p>
		<label for="juduldosen">Judul Dosen: </label>
		<input type="text" name="juduldosen" placeholder="judul dosen" />
	</p>
	<p>
		<td>Dosen Pembimbing : </td>
		<td><select name="dospem">
		<option value>dosen pembimbing</option>
		</select></td>
	</p>
	<p>
		<label for="ringkasan">Ringkasan : </label>
		<textarea name="ringkasan" placeholder="ringkasan"></textarea>
	</p>
	  

<input type="submit" name="proses" value="Submit"/>
<input type="reset" name="reset" value="Reset"/>
 
</center>
	</header>
</body>
</html>