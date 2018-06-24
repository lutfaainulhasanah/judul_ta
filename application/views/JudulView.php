<h1>Form Usulan Judul TA</h1>

<h3>
    <a href="judul/tambah">+ Tambah Usulan judul</a>
</h3>

<table border="1" cellpadding="5">
    <tr>
        <th>Nim</th>
        <th>Judul</th>
        <th>Ringkasan</th>
        <th></th>
    </tr>
    <?php
    foreach ($judul as $row) {
        ?>
        <tr>
            <td><?php echo $row->nim; ?></td>
            <td><?php echo $row->judul; ?></td>
            <td><?php echo substr($row->ringkasan, 0, 70); ?>...</td>
            <td>
                <a href="<?php echo "judul/ubah/" . $row->id_judul; ?>">Ubah</a>
                <a href="<?php echo "judul/hapus/" . $row->id_judul; ?>">Hapus</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>