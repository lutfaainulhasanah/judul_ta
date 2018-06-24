<!DOCTYPE html>
<html>
<head>
<title>Usulan</title>
</head>
<body>
<h1>Usulan Judul</h1>
<table border="1">
    <tr>
        <td>Id Judul</td>
        <td>NIM</td>
        <td>Golongan</td>
        <td>Prodi</td>
        <td>NIP</td>
        <td>Judul</td>
        <td>Judul Dosen</td>
        <td>Ringkasan</td>
        <td>Tugas</td>
        <td>Catatan</td>
        <td>Opsi</td>
    </tr>
    <?php
    $no = 1;
    foreach($data as $j){
    ?>
    <tr>
        <td><?php echo $j->id_judul ?></td>
        <td><?php echo $j->nim ?></td>
        <td><?php echo $j->id_gol ?></td>
        <td><?php echo $j->id_prodi ?></td>
        <td><?php echo $j->nip ?></td>
        <td><?php echo $j->judul ?></td>
        <td><?php echo $j->judul_dosen ?></td>
        <td><?php echo $j->ringkasan ?></td>
        <td><?php echo $j->tugas ?></td>
        <td><?php echo $j->catatan ?></td>
        <td>
            <?php echo anchor('Usulan_dosen/edit/'.$j->id_judul,'Edit'); ?>
            </td>
    </tr>
    <?php } ?>

    
</table><br>
     
</body>
</html>