<div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Welcome back <?php echo $this->session->userdata('ses_nama');?></h2>
                    </div>
                </div>

                <hr />

                  <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <div class="panel-body">
                          <div class="table-responsive">
  <h2 align="center">Data Penelitian</h2>
  <p align="center">
    <form action="<?php echo base_url()?>Page/update" method="post">
  <table border="1" align="center" class="table table-striped table-bordered table-hover" id="dataTables-example">
    <tr>
      <td>ID Penelitian</td>
      <td>
        <input type="text" disabled="" name="id_penelitian" value="<?php echo @$user[0]['id_penelitian']; ?>" \></td>
    </tr>
    <tr>
      <td>NIP</td>
      <td><input type="text" disabled="" name="nip" value="<?php echo @$user[0]['nip']; ?>"></td>
    </tr>
    <tr>
      <td>Judul Penelitian</td>
      <td><input type="text" name="judul_penelitian" value="<?php echo @$user[0]['judul_penelitian']; ?>"></td>
    </tr>
    <tr>
      <td>Kuota</td>
      <td><input type="textarea" name="kuota" value="<?php echo @$user[0]['kuota']; ?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><button type="submit" name="btnedit" class="btn btn-primary"><i class="icon-save icon-white"></i> Simpan</button>
          <button type="submit" name="btnedit" class="btn btn-primary"><i class="icon-save icon-white"><a href="<?php echo base_url()?>Page/penelitian"></i>Kembali</a></button></td>
      </tr>
    
  </table>
  </form>
  </p>
</div>
        
                            </div>
                    </div>
                  </div>
                     
                </div>
                 <!--END STACKING CHART SCETION  -->                
            </div>

        </div>
        <!--END PAGE CONTENT -->
    </div>