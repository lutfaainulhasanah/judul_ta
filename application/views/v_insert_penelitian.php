<form name="form1" method="post" action="" enctype="multipart/form-data">
  <div align="center">
    <p>FORM INPUT JUDUL PENELITIAN/p>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
      <tr>
        <td width="125">Id_Penelitian</td>
        <td width="140"><label for="id_penelitian"></label>
        <input type="text" name="id_penelitian" id="id_penelitian"required></td>
      </tr>
      <tr>
        <td width="125">NIP</td>
        <td width="140"><label for="nip"></label>
        <input type="text" name="nip" id="nip" required></td>
      </tr>
      <tr>
        <td width="125">Judul</td>
        <td width="140"><label for="judul"></label>
        <input type="text" name="judul" id="judul" required></td>
      </tr>
      <tr>
        <td>Kuota</td>
        <td><label for="kuota"></label>
        <input type="file" name="kuota" id="kuota" required></td>
      </tr>
    </table>
  </div>
  <p align="center">
    <button class='btn btn-mini btn-primary'>Tambah</button>
    <button class='btn btn-mini btn-primary' onclick="javascript: window.location.href=''">kembali</button>
  </p>
</form>