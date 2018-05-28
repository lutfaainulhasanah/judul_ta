<!DOCTYPE html>
<html>
<head>
<title>Daftar Dosen</title>
</head>
<body>
<h1 align="center">Daftar Dosen</h1>
<table border="1" align="center">
    <tr>
        <td>NIP</td>
        <td>Nama Dosen</td>
        <td>Prodi</td>
        <td> Status</td>
        <td><div align="center">opsi</div></td>
    </tr>
    <tr>
    <?php
    foreach ($data as $row): ?>
		<td><?php echo $row->nip;?></td>
		<td><?php echo $row->nama_dosen;?></td>
		<td><?php echo $row->prodi;?></td>
		<td><?php echo $row->status;?></td>
    	<td><p align="center">
<a href="<?php echo base_url(); ?>Daftar_dosen/update/<?php echo $row->nip;?>"> <button class='btn btn-mini btn-primary'>Update</button></a>
  </p></td>
    </tr>
    <?php
    endforeach;?>
</table>
</body>
</html>