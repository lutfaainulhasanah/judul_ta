<!DOCTYPE html>
<html>
<head>
<title>Daftar Usulan</title>
</head>
<body>
<h1>Usulan Judul</h1>
<table border="1">
	
    <tr>
        <td>ID JUDUL</td>
        <td>NIM</td>
        <td>ID GOL</td>
        <td>ID PRODI</td>
        <td>NIP</td>
        <td>JUDUL</td>
        <td>JUDUL DOSEN</td>
        <td>RINGKASAN</td>
        <td>TUGAS</td>
        <td>CATATAN</td>
    </tr>
	<?php
	$no = 1;
	foreach($judul as $j){
	?>
<tr>
<td><?php echo $id_judul++?></td>
<td><?php echo $j->nim?></td>
<td><?php echo $j->id_gol?></td>
<td><?php echo $j->id_prodi?></td>
<td><?php echo $j->nip?></td>
<td><?php echo $j->judul?></td>
<td><?php echo $j->judul_dosen?></td>
<td><?php echo $j->ringkasan?></td>
<td><?php echo $j->tugas?></td>
<td><?php echo $j->catatan?></td>
</tr>
<?php } ?>

</table>
</body>
</html>