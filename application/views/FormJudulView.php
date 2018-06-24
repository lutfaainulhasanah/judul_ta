<?php
    if(isset($judul)) {
    $link = "../../";
        ?>
        <h1>Ubah Judul</h1>
        <?php
    }else {
        ?>
        <h1>Tambah Judul</h1>
        <?php
    $link = "../";
    }
?>
<form method="post">

    <div>
        <label for="nim">Nim :</label><br>
        <input type="text" id="nim" value="<?php if(isset($judul)) { echo $judul[0]->nim; } ?>" name="nim">
    </div>
  <div>
          <label for="judul">Judul :</label><br>
        <input type="text" id="judul" value="<?php if(isset($judul)) { echo $judul[0]->judul; } ?>" name="judul">
    </div>
    <div>
        <label for="ringkasan">Ringkasan</label><br>
        <textarea name="ringkasan" cols="50" rows="8" id="ringkasan"><?php if(isset($judul)) { echo $judul[0]->ringkasan; } ?></textarea>
    </div>
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>

</form>
<a href="<?php echo $link; ?>">Kembali</a>