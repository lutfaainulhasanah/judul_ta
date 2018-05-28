<div id="left" >
<ul id="menu" class="collapse">
<!--status menu untuk koordinator-->

<?php if($this->session->userdata('akses')=='Koordinator'){?>
    <li class="panel active"><a href="<?php echo base_url().'page'?>">Home</a></li>
    <li><a href="<?php echo base_url().'Dosen_view'?>"> Dosen </a></li>
    <li><a href="<?php echo base_url().'penelitian'?>">Penelitian </a></li>
    <li><a href="<?php echo base_url().'dospem'?>"> Dospem </a></li>
    <li><a href="<?php echo base_url().'usulan_judul'?>"> Usulan Judul</a></li>

<!--status menu untuk reviewer-->
<?php }elseif ($this->session->userdata('akses')=='Reviewer'){?>
    <li class="panel active"><a href="<?php echo base_url().'page'?>">Home</a></li>
    <li><a href="<?php echo base_url().'penelitian'?>">Penelitian</a></li>
    <li><a href="<?php echo base_url().'dospem'?>">Dospem</a></li>
    <li><a href="<?php echo base_url().'usulan_judul'?>">Usulan Judul</a></li>

<!--status menu untuk dosen-->
<?php }elseif ($this->session->userdata('akses')=='Dosen'){?>
    <li class="panel active"><a href="<?php echo base_url().'page'?>">Home</a></li>
    <li><a href="<?php echo base_url().'penelitian'?>">Penelitian</a></li>
    <li><a href="<?php echo base_url().'dospem'?>">Dospem</a></li>

<!--status menu untuk mahasiswa-->
<?php }else{?>
    <li class="panel active"><a href="<?php echo base_url().'judul_penelitian'?>">Home</a></li>
    <li><a href="<?php echo base_url().'judul'?>">Judul TA</a></li>
    <li><a href="<?php echo base_url().'proposal'?>">Ujian Proposal</a></li>

<?php }?>

            </ul>
</div>