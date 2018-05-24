<div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Welcome back <?php echo $this->session->userdata('ses_nama');?></h2>
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