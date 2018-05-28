<!DOCTYPE html>
<html>
<head>
<title>Update Dosen</title>
</head>
<body>
<h1 align="center">Daftar Dosen</h1>
<p align="center">
		<form action="<?php echo base_url()?>Daftar_dosen/update" method="post">
<table border="1" align="center">
          <tr>
            <td width="125">NIP</td>
            <td width="140"><label for="nip"></label>
            <input type="text" name="nip" ></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td><label for="nama"></label>
            <input type="text" name="nama"  ></td>
          </tr>
          <tr>
            <td>Prodi</td>
            <td><label for="prodi"></label>
            <input type="text" name="prodi"  ></td>
          </tr>
          <tr>
            <td>Status</td>
            <td><label for="status"></label>
            <input type="text" name="status" ></td>
          </tr>
</table>
</div>
  <td><p align="center">
<input type="submit" name="btnedit" value="Update">
					<a href="<?php echo base_url()?>Daftar_dosen">Kembali</a></td>
    </div>
</body>
</html>