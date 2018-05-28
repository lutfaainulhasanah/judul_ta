<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>Pengajuan Judul Tugas Akhir</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/assets/plugins/bootstrap/css/bootstrap.css'?>" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/assets/css/main.css'?>" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/assets/css/theme.css'?>" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/assets/css/MoneAdmin.css'?>" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/assets/plugins/Font-Awesome/css/font-awesome.css'?>" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="<?php echo base_url().'assets/assets/css/layout2.css'?>" rel="stylesheet" />
       <link href="<?php echo base_url().'assets/assets/plugins/flot/examples/examples.css'?>" rel="stylesheet" />
       <link rel="stylesheet" href="<?php echo base_url().'assets/assets/plugins/timeline/timeline.css'?>" />
    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.html" class="navbar-brand">
                    <img src="<?php echo base_url().'assets/assets/img/lg.png'?>" alt="" />
                        
                        </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url('Login_ta')?>"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        
       <div id="left" >
        <?php $this->load->view('menu');?>
        </div>
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Welcome back <?php echo $this->session->userdata('');?></h2>
                    </div>
                </div>
                  <hr />
                   <!-- CHART & CHAT  SECTION -->                                  
			<div class="demo-container">
			<div id="placeholderRT" class="demo-placeholder"></div>
		</div>
                 <!--END CHAT & CHAT SECTION -->             

                 <!--  STACKING CHART  SECTION   -->
                <div class="row">
                   <div class="col-lg-12">
                    
                    <div class="panel panel-default">
                            <div class="panel-heading">
                            Sales   Stacking
                            </div>

                            <div class="panel-body">
                              
			<div class="demo-container">
			<div id="placeholderStack" class="demo-placeholder"></div>
		</div>
                                <p class="stackControls">
			<button class="btn btn-primary" >With stacking</button>
			<button class="btn btn-primary">Without stacking</button>
		</p>

		<p class="graphControls">
			<button class="btn btn-primary">Bars</button>
			<button class="btn btn-primary">Lines</button>
			<button class="btn btn-primary">Lines with steps</button>
		</p>
		</div>
		
                            </div>
                    </div>
                     
                </div>
                 <!--END STACKING CHART SCETION  -->                
            </div>

        </div>
        <!--END PAGE CONTENT -->
    </div>

    <!--END MAIN WRAPPER -->

    <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  Teknologi Informasi &nbsp;2018 &nbsp;</p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="<?php echo base_url().'assets/assets/plugins/jquery-2.0.3.min.js'?>"></script>
     <script src="<?php echo base_url().'assets/assets/plugins/bootstrap/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js'?>"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url().'assets/assets/plugins/flot/jquery.flot.js'?>"></script>
    <script src="<?php echo base_url().'assets/assets/plugins/flot/jquery.flot.resize.js'?>"></script>
    <script src="<?php echo base_url().'assets/assets/plugins/flot/jquery.flot.time.js'?>"></script>
    <script  src="<?php echo base_url().'assets/assets/plugins/flot/jquery.flot.stack.js'?>"></script>
    <script src="<?php echo base_url().'assets/assets/js/for_index.js'?>"></script>
   
    <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>