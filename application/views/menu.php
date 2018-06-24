<div id="left">
            <div class="media user-media well-small">
                <div class="media-body">
                    <h5 class="media-heading"> <?php echo $this->session->userdata('ses_nama');?></h5>
                </div>
                <br />
            </div>
<ul id="menu" class="collapse">
<!--status menu untuk koordinator-->

<?php if($this->session->userdata('akses')=='Koordinator'){?>
    <li class="panel active"><a href="<?php echo base_url().'page'?>"><i class="icon-home"></i> Home</a></li>
    <li><a href="<?php echo base_url().'Page/dosen'?>" > <i class="icon-user"></i> Dosen </a></li>
    <li><a href="<?php echo base_url().'Page/penelitian'?>"><i class="icon-edit"></i> Penelitian </a></li>
    <li><a href="<?php echo base_url().'Page/dospem'?>"><i class="icon-check"></i> Dospem </a></li>
    <li><a href="<?php echo base_url().'Page/usulan_judul'?>"><i class="icon-th-list"></i> Usulan Judul</a></li>

<!--status menu untuk reviewer-->
<?php }elseif ($this->session->userdata('akses')=='Reviewer'){?>
    <li class="panel active"><a href="<?php echo base_url().'page'?>"><i class="icon-home"></i> Home</a></li>
    <li><a href="<?php echo base_url().'Page/penelitian'?>"><i class="icon-edit"></i> Penelitian</a></li>
    <li><a href="<?php echo base_url().'Page/dospem'?>"><i class="icon-check"></i> Dospem</a></li>
    <li><a href="<?php echo base_url().'Page/usulan_judul'?>"><i class="icon-th-list"></i> Usulan Judul</a></li>

<!--status menu untuk dosen-->
<?php }elseif ($this->session->userdata('akses')=='Dosen'){?>
    <li class="panel active"><a href="<?php echo base_url().'page'?>"><i class="icon-home"></i> Home</a></li>
    <li><a href="<?php echo base_url().'Page/penelitian'?>"><i class="icon-edit"></i> Penelitian</a></li>
    <li><a href="<?php echo base_url().'Page/dospem'?>"><i class="icon-check"></i> Dospem</a></li>

<!--status menu untuk mahasiswa-->
<?php }else{?>
    <li class="panel active"><a href="<?php echo base_url().'Page/judul_penelitian'?>"><i class="icon-home"></i> Home</a></li>
    <li><a href="<?php echo base_url().'Page/judul'?>"><i class="icon-tasks"></i> Judul TA</a></li>
    <li><a href="<?php echo base_url().'Page/proposal'?>"><i class="icon-list"></i> Ujian Proposal</a></li>

<?php }?>

            </ul>
</div>