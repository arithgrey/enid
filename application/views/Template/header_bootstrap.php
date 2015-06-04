<?= doctype('html5')?>
<html>
<head>
<title><?=$titulo?></title>	
	<!--TAGS-->	
	<?php
		$meta = array(
	        array('name' => 'robots', 'content' => 'no-cache'),
	        array('name' => 'description', 'content' => 'Social I'),
	        array('name' => 'keywords', 'content' => 'social media, business intelligence, emprendimiento'),
	        array('name' => 'robots', 'content' => 'no-cache'),
	        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
	    );	    
	?>
	<?=meta($meta);?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--CSS-->
	
	<?=link_tag('application/css/main.css');?>	
	<?=link_tag('application/css/animate.css');?>	
	<?=link_tag('application/css/bootstrap/css/bootstrap.css');?>	
	<?=link_tag('application/css/bootstrap/css/bootstrap.min.css');?>	
	<?=link_tag('application/css/bootstrap/css/bootstrap-theme.css');?>	
	<?=link_tag('application/css/extra.css');?>
	
	<link rel="stylesheet" id="responsive-style-css" href="<?=base_url('application/css/heder/header.css')?>" media="all">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!--JS-->
	<script src="<?=base_url('application/js/main.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('application/js/jquery-2.1.1.min.js')?>"></script>		
	<script type="text/javascript" src="<?=base_url('application/js/main.js')?>"></script>	
	<script type="text/javascript" src="<?=base_url('application/js/bootstrap/js/bootstrap.js')?>"></script>	
	<script type="text/javascript" src="<?=base_url('application/js/bootstrap/js/bootstrap.min.js')?>"></script>	

	<script type="text/javascript" src="<?=base_url('application/js/js/advanced-datatable/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?=base_url('application/js/js/advanced-datatable/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/js/data-tables/DT_bootstrap.js')?>"></script>
<!--dynamic table initialization -->
<script src="<?=base_url('application/js/js/dynamic_table_init.js')?>"></script>

<!--common scripts for all pages-->
<script src="<?=base_url('application/js/scripts.js')?>"></script>
<script src="<?=base_url('application/js/jsapi.js')?>"></script>
		
</head>



		<header>

			

			  <div class="col-sm-4 col-md-2">
			    <div class="thumbnail">      
			      <div class="caption">
			        <div class='panel'>			        	
			        <div class='header_title_section'> 
  		  			<h3><strong>
  		  				 <a class='textdecorationanone' href="<?=base_url('index.php/sessioncontroller/presentacion/')?>">
  		  					Dawnig Dual
  		  				</a>
  		  				</strong>
  		  				</h3>         
					</div>	
			        
			        </div>	  	
				  		<?php 
				  		if (isset($menu)) {
				  			echo ($menu);		
				  		}				  			
				  		?>				  					  		
				 	</div>
			    </div>
			  </div>
			

		</header>	

  <body>

    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">By @arithgrey</button>
          </p>
          
			
          
          <div class="jumbotron">

            <h1><?=$titulo;?></h1>

            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
            <p class="label label-primary"><?=$nombre;?></p>
          </div>



<!-- ========== THEME SECTION ========== -->

  <div id="themewrap">






