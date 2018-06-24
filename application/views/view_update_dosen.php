<!DOCTYPE html>
<html>
<head>
<title>Update Dosen</title>
</head>
<body>
<h1 align="center">Daftar Dosen</h1>
<p align="center">
<?php
    foreach ($data as $row): ?>
		<form action="<?php echo base_url()?>Daftar_dosen/update" method="post">
		<input name="nipOld" value="<?php echo $id; ?>" style="visibility: hidden"/>		
<table border="1" align="center">

          <tr>
            <td width="125">NIP</td>
            <td width="140"><label for="nip"></label>
            <input type="text" name="nip" value="<?php echo $row->nip;?>" readonly> </td>
          </tr>
          <tr>
            <td>Nama</td>
            <td><label for="nama"></label>
            <input type="text" name="nama"value="<?php echo $row->nama_dosen;?>">  </td>
          </tr>
          <tr>
			<td>Prodi</td>
			<td><select name="prodi"><?php foreach ($prodi as $ros ) {
				echo '<option value="'.$ros->id_prodi.'">'.$ros->prodi.'</option>';
			}
		echo '</select>';?></td>
		</tr>
		<tr>
		<td>Status</td>
            <td><label for="status"></label>
            <input type="text" name="status"value="<?php echo $row->status;?>">  </td>
              </tr>
       
      	  
        <tr>
            <td>Kuota</td>
            <td><label for="kuota"></label>
            <input type="text" name="kuota"value="<?php echo $row->kuota;?>">  </td>
          </tr>     
</table>
</div>
  <td><p align="center">
<input type="submit" name="btnedit" value="Simpan">
<a href="<?php echo base_url()?>Daftar_dosen"><button class='btn btn-mini btn-primary'>Kembali</a></td>
</form>
<?php
    endforeach;?>
    </div>
</body>
</html>