<div id="content">
             
            <div class="inner" style="min-height: 70px;">
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
                            Sales   Stacking
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
  <h4>Tambah Daftar Penelitian</h4>
  <div align="center">
    <p>
      <form action="input" method="post">
      <table style="margin:20px auto;" class="table table-striped table-bordered table-hover" id="dataTables-example">
      <tr>
        <td>Id Penelitian</td>
        <td><input type="text" name="id_penelitian" value="<?php $kodeunik; ?>"></td>
      </tr>
      <tr>
        <td>NIP</td>
        <td><input type="text" name="nip" value="<?php echo $this->session->userdata('ses_id');?>"></td>
      </tr>
      <tr>
        <td>Juudl</td>
        <td><input type="text" name="judul_penelitian" value="<?php if(isset($data)) { echo $data[0]->judul_penelitian; } ?>"></td>
      </tr>
      <tr>
        <td>Kuota</td>
        <td><input type="text" name="kuota" value="<?php if(isset($data)) { echo $data[0]->kuota; } ?>"></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit" name="btntambah" class="btn btn-primary"><i class="icon-save icon-white"></i> Simpan</button>
          <button type="submit" name="btnedit" class="btn btn-primary"><a href="<?php echo base_url()?>Page/penelitian"></i>Kembali</a></button></td>
      </tr>
    </table>
  </form> 
    </p>
  </div>
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