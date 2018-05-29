<!DOCTYPE html>
<html>
<head>
  <title>Penelitian Dosen</title>
</he[ad>
<body>
  <h2 align="center">Daftar Penelitian Dosen </h2>
  <p align="center">
    <form action="<?php echo base_url()?>Page/update" method="post">
  <table border="1" align="center">
    <tr>
      <td>Id Penelitian</td>
      <td>
        <input type="text" name="nim" value="<?php echo @$user[0]['id_penelitian']; ?>"></td>
    </tr>
    <tr>
      <td>Nip</td>
      <td>
        <input type="text" name="nim" value="<?php echo @$user[0]['nip']; ?>"></td>
    </tr>
    <tr>
      <td>Judul</td>
      <td><input type="text" name="nama" value="<?php echo @$user[0]['judul_penelitian']; ?>"></td>
    </tr>
    <tr>
      <td>Kuota</td>
      <td><input type="text" name="nama" value="<?php echo @$user[0]['kuota']; ?>"></td>
    </tr>
        <td></td>
        <td><input type="submit" name="btnedit" value="Edit">
          <a href="<?php echo base_url()?>Penelitian">Kembali</a></td>
      </tr>
    
  </table>
  </form>
  </p>

</body>
</html>