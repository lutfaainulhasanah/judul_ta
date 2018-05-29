
  <h4>Tambah Daftar Penelitian</h4>
  <div align="center">
    <p>
      <form action="input" method="post">
      <table style="margin:20px auto;">
      <tr>
        <td>Id Penelitian</td>
        <td><input type="text" name="nim" value="<?php if(isset($data)) { echo $data[0]->id_penelitian; } ?>"></td>
      </tr>
      <tr>
        <td>NIP</td>
        <td><select name="prodi"><?php foreach ($nama_dosen as $row ) {?>
        <option value="<?php echo $row->nip;?>"><?php echo $row->dosen;?></option>
        <?php } ?></select></td>
      </tr>
      <tr>
        <td>Juudl</td>
        <td><input type="text" name="Judul" value="<?php if(isset($data)) { echo $data[0]->judul; } ?>"></td>
      </tr>
      <tr>
        <td>Kuota</td>
        <td><input type="text" name="judul" value="<?php if(isset($data)) { echo $data[0]->judul; } ?>"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="btntambah" value="Tambah">
          <a href="<?php echo base_url()?>Penelitian">Kembali</a></td>
      </tr>
    </table>
  </form> 
    </p>
  </div>