<?=doctype('html5')?>
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
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!--CSS-->
		<?=link_tag('application/css/foundation.min.css');?>
		<?=link_tag('application/css/normalize.css');?>
		<?=link_tag('application/css/foundation.css');?>
		<?=link_tag('application/css/main.css');?>		
		<?=link_tag('application/css/navegacion.css');?>
		<?=link_tag('application/css/animate.css');?>			
		<?=link_tag('application/css/extra.css');?>
	<!--JS-->

		<script src="<?=base_url('application/js/main.js')?>"></script>
		<script type="text/javascript" src="<?=base_url('application/js/jquery-2.1.1.min.js')?>"></script>
		<script type="text/javascript" src="<?=base_url('application/js/foundation.min.js')?>"></script>	
		<script type="text/javascript" src="<?=base_url('application/js/main.js')?>"></script>	
		<script src="<?=base_url('application/js/vendor/jquery.js')?>"></script>
		<script src="<?=base_url('application/js/foundation/foundation.js')?>"></script>
		<script src="<?=base_url('application/js/foundation/foundation.equalizer.js')?>"></script>
		<script src="<?=base_url('application/js/vendor/modernizr.js')?>"></script>
		<script src="<?=base_url('application/js/vendor/jquery.js')?>"></script>
		<script src="<?=base_url('application/js/foundation/foundation.js')?>"></script>
		<script src="<?=base_url('application/js/foundation/foundation.offcanvas.js')?>"></script>
		
		<script type="text/javascript" src="<?=base_url('application/js/js/advanced-datatable/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?=base_url('application/js/js/advanced-datatable/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/js/data-tables/DT_bootstrap.js')?>"></script>
<!--dynamic table initialization -->
<script src="<?=base_url('application/js/js/dynamic_table_init.js')?>"></script>

<!--common scripts for all pages-->
<script src="<?=base_url('application/js/scripts.js')?>"></script>
<script src="<?=base_url('application/js/jsapi.js')?>"></script>

	

		<script>
		    $(document).foundation();
	    </script>
	    <?=link_tag('application/css/extra.css');?>

	<style type="text/css">	
	#title_page{
		//background:  #26AFCC;
		background:  rgb(0, 140, 186);
		color: white;
		font-size: 1.4em;
		text-align: center;
		padding: 2px;
	}
	</style>


</head>
<body>
	<div id=''>
		<header>
			<div class="row">
			  <div class="row">
			  	<div class="large-12 columns">
				  	<div class="large-4 columns">
				  		<a href="<?=base_url()?>"><h1 id="main_title_page">Dawnig Dual</h1></a>
				  	</div>
				  	<div class ='large-8 columns'>						
				  		<?php 
				  		if (isset($menu)) {
				  			echo ($menu);		
				  		}				  			
				  		?>				  	
				  		
				  	</div>					  
				</div>  	
			  </div>					  
			  <label id="title_page" class="small-12 small-centered columns"><?=$titulo;?></label>
			</div> 			
		</header>
	
	<div id='wrapper' class='wrapper'>
		<div class='content' id='content'>
			


				