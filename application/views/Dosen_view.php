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
<h1 align="center">Daftar Dosen</h1>
<table border="1" align="center" class="table table-striped table-bordered table-hover" id="dataTables-example">
    <tr>
        <td>NIP</td>
        <td>Nama Dosen</td>
        <td>Prodi</td>
        <td> Status</td>
        <td><div align="center">opsi</div></td>
    </tr>
    <tr>
    <?php
    foreach ($data as $row): ?>
		<td><?php echo $row->nip;?></td>
		<td><?php echo $row->nama_dosen;?></td>
		<td><?php echo $row->prodi;?></td>
		<td><?php echo $row->status;?></td>
    	<td><p align="center">
<a href="<?php echo base_url(); ?>Daftar_dosen/update/<?php echo $row->nip;?>"> <button class='btn btn-mini btn-primary'>Update</button></a>
  </p></td>
    </tr>
    <?php
    endforeach;?>
</table>
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