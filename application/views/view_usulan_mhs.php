<!DOCTYPE html>
<html>
<head>
<title>Penggunaan Tag Tabel</title>
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
        <td colspan="2">Opsi</td>

    </tr>    
    <?php
       
        foreach ($data as $row) : ?>
        <tr>
            <td><?php echo $row->id_judul; ?></td>
            <td><?php echo $row->nim; ?></td>
            <td><?php echo $row->id_gol;?></td>
            <td><?php echo $row->id_prodi;?></td>
            <td><?php echo $row->nip;?></td>
            <td><?php echo $row->judul;?></td>
            <td><?php echo $row->judul_dosen;?></td>
            <td><?php echo $row->ringkasan;?></td>
            <td><?php echo $row->tugas;?></td>
            <td><?php echo $row->catatan;?></td>
            <td><a href="<?php echo base_url(); ?>Usulan_mhs/delete/<?php echo $row->id_judul;?>">Hapus</a></td>
            <td><a href="<?php echo base_url(); ?>Entri/edit/<?php echo $row->nim;?>">Edit</a></td>
        </tr>
        <?php endforeach;?>
</table><br>
     <button>Insert</button>
</body>
</html>