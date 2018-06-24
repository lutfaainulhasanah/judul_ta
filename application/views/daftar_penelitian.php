<div id="content">
    <div class="inner">
        <div class="row">
            <div class="col-lg-12">
                <h2> Data Tables </h2>
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
<h1>Judul Penelitian</h1>
<table border="1" class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
    <tr>
        <th>NIP</th>
        <th>Judul Penelitian</th>
        <th>Kuota</th>
        <th colspan="2">Opsi</th>
    </tr>
    </thead>
    <tbody>
     <?php
       
        foreach ($penelitian as $row) : ?>
        <tbody>
        <tr class="odd gradeX">
            <td><?php echo $row->nip; ?></td>
            <td><?php echo $row->judul_penelitian;?></td>
            <td><?php echo $row->kuota;?></td>
            <td><button class="btn btn-primary"><i class="icon-pencil icon-white"><a href="<?php echo base_url(); ?>Page/edit/<?php echo $row->id_penelitian;?>"></i>Edit</a></button></td>
            
        </tr>
    </tbody>
        <?php endforeach;?>
</table><br>
     <button class="btn btn-primary"><i class="icon-plus icon-white"><a href="<?php echo base_url()?>Page/input"> Insert</a></i></button>
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