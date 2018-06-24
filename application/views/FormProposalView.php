<?php
    if(isset($proposal)) {
    $link = "../../";
        ?>
        <h1>Ubah proposal</h1>
        <?php
    }else {
        ?>
        <h1>Tambah proposal</h1>
        <?php
    $link = "../";
    }
?>
<form method="post">

    <div>
        <label for="nim">Nim :</label><br>
        <input type="text" id="nim" value="<?php if(isset($proposal)) { echo $proposal[0]->nim; } ?>" name="nim">
    </div>
     <div>
          <label for="cover">Cover :</label><br>
        <input type="file" accept="application/pdf" id="cover" value="<?php if(isset($proposal)) { echo $proposal[0]->cover; } ?>" name="cover">
    </div>
  <div>
          <label for="bab1">Bab1 :</label><br>
        <input type="file" accept="application/pdf" id="bab1" value="<?php if(isset($proposal)) { echo $proposal[0]->bab1; } ?>" name="bab1">
    </div>
    <div>
          <label for="bab2">Bab2 :</label><br>
        <input type="file" accept="application/pdf" id="bab2" value="<?php if(isset($proposal)) { echo $proposal[0]->bab2; } ?>" name="bab2">
    </div>
    <div>
          <label for="bab3">Bab3 :</label><br>
        <input type="file" accept="application/pdf" id="bab3" value="<?php if(isset($proposal)) { echo $proposal[0]->bab3; } ?>" name="bab3">
    </div>
    <div>
          <label for="pengajuan">Pengajuan :</label><br>
        <input type="file" accept="application/pdf" id="pengajuan" value="<?php if(isset($proposal)) { echo $proposal[0]->pengajuan; } ?>" name="pengajuan">
    </div>
   
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>

</form>
<a href="<?php echo $link; ?>">Kembali</a>