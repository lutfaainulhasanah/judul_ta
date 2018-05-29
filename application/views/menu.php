<div id="left" >
<ul id="menu" class="collapse">
<!--status menu untuk koordinator-->

<?php if($this->session->userdata('akses')=='Koordinator'){?>
    <li class="panel active"><a href="<?php echo base_url().'page'?>">Home</a></li>
    <li><a href="<?php echo base_url().'Page/dosen'?>"> Dosen </a></li>
    <li><a href="<?php echo base_url().'Page/penelitian'?>">Penelitian </a></li>
    <li><a href="<?php echo base_url().'Page/dospem'?>"> Dospem </a></li>
    <li><a href="<?php echo base_url().'Page/usulan_judul'?>"> Usulan Judul</a></li>

<!--status menu untuk reviewer-->
<?php }elseif ($this->session->userdata('akses')=='Reviewer'){?>
    <li class="panel active"><a href="<?php echo base_url().'page'?>">Home</a></li>
    <li><a href="<?php echo base_url().'Page/penelitian'?>">Penelitian</a></li>
    <li><a href="<?php echo base_url().'Page/dospem'?>">Dospem</a></li>
    <li><a href="<?php echo base_url().'Page/usulan_judul'?>">Usulan Judul</a></li>

<!--status menu untuk dosen-->
<?php }elseif ($this->session->userdata('akses')=='Dosen'){?>
    <li class="panel active"><a href="<?php echo base_url().'page'?>">Home</a></li>
    <li><a href="<?php echo base_url().'Page/penelitian'?>">Penelitian</a></li>
    <li><a href="<?php echo base_url().'Page/dospem'?>">Dospem</a></li>

<!--status menu untuk mahasiswa-->
<?php }else{?>
    <li class="panel active"><a href="<?php echo base_url().'Page/judul_penelitian'?>">Home</a></li>
    <li><a href="<?php echo base_url().'Page/judul'?>">Judul TA</a></li>
    <li><a href="<?php echo base_url().'Page/proposal'?>">Ujian Proposal</a></li>

<?php }?>

            </ul>
</div>