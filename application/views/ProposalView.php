<h1>Pengajuan Proposal</h1>

<h3>
    <a href="proposal/tambah">+ Tambah Proposal</a>
</h3>

<table border="1" cellpadding="5">
    <tr>
        <th>Nim</th>
        <th>Cover</th>
        <th>Bab1</th>
        <th>Bab2</th>
        <th>Bab3</th>
        <th>Pengajuan</th>
        <th></th>
    </tr>
    <?php
    foreach ($proposal as $row) {
        ?>
        <tr>
            <td><?php echo $row->nim; ?></td>
            <td><?php echo $row->cover; ?></td>
            <td><?php echo $row->bab1; ?></td>
            <td><?php echo $row->bab2; ?></td>
            <td><?php echo $row->bab3; ?></td>
            <td><?php echo $row->pengajuan; ?></td>
            <td>
                <a href="<?php echo "proposal/hapus/" . $row->id_judul; ?>">Hapus</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>