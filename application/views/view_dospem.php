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
    
    <tr>
        <th>Id Penelitian</th>
        <th>NIP</th>
        <th>Judul Penelitian</th>
        <th>Status</th>
    </tr>
    
    
     <?php
       
        foreach ($data as $row) : ?>
        <tbody>
        <tr class="odd gradeX">
            <td><?php echo $row->nim; ?></td>
            <td><?php echo $row->nama_mhs; ?></td>
            <td><?php echo $row->judul;?></td>
            <td><select>
                <option value="1">Choose Here</option>
                <option value="2">Terima</option>
                <option value="">Tolak</option>
            </select></td>
                        
        </tr>
    
        <?php endforeach;?>
</table><br>
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