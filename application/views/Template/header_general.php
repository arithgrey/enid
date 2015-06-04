<?=doctype('html5')?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">
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
      <?=link_tag('application/css/css/style-responsive.css');?>
      <?=link_tag('application/css/css/style.css');?>  
            
      <?=link_tag('application/css/main.css');?>      
      <?=link_tag('application/css/animate.css');?> 
      <?=link_tag('application/css/bootstrap/css/bootstrap.css');?>   
      <?=link_tag('application/css/bootstrap/css/bootstrap.min.css');?>   
      <?=link_tag('application/css/bootstrap/css/bootstrap-theme.css');?> 


  

      <?=link_tag('application/js/js/iCheck/skins/minimal/minimal.css');?>
      <?=link_tag('application/js/js/iCheck/skins/square/square.css');?>
      <?=link_tag('application/js/js/iCheck/skins/square/red.css');?>
      <?=link_tag('application/js/js/iCheck/skins/square/blue.css');?>
      <?=link_tag('application/css/extra.css');?>

<!--dashboard calendar-->

  <?=link_tag('application/css/css/clndr.css');?>  

  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="<?base_url('application/js/js/morris-chart/morris.css')?>">

  <!--common-->


        <script src="<?=base_url('application/js/js/jquery-1.10.2.min.js')?>"></script>
        <script src="<?=base_url('application/js/js/jquery-ui-1.9.2.custom.min.js')?>"></script>  
        <script src="<?=base_url('application/js/js/jquery-migrate-1.2.1.min.js')?>"></script>
        <script src="<?=base_url('application/js/js/bootstrap.min.js')?>"></script>
        <script src="<?=base_url('application/js/js/modernizr.min.js')?>"></script>
        <script src="<?=base_url('application/js/js/jquery.nicescroll.js')?>"></script>
        
        <script type="text/javascript"  src="<?=base_url('application/js/main.js')?>"></script> 

        <script src="<?=base_url('application/js/js/iCheck/jquery.icheck.js')?>"></script>
        <script src="<?=base_url('application/js/js/icheck-init.js')?>"></script>
        <script src="<?=base_url('application/js/js/scripts.js')?>"></script>


        <script type="text/javascript" src="<?=base_url('application/js/js/advanced-datatable/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?=base_url('application/js/js/advanced-datatable/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/js/data-tables/DT_bootstrap.js')?>"></script>
<!--dynamic table initialization -->
<script src="<?=base_url('application/js/js/dynamic_table_init.js')?>"></script>

<!--common scripts for all pages-->
<script src="<?=base_url('application/js/scripts.js')?>"></script>
<script src="<?=base_url('application/js/jsapi.js')?>"></script>







<!--Termina la sección principal -->



<div class="row">
  <div class="container align-center">
                    <!--statistics start-->
                    <div class="row state-overview">
                 
                        <div class="col-md-12">
                            <div class="panel green">
                                <div class="state-value">
                                    <div class="value"><?=$titulo;?></div>
                                    <div class="title"><?=$descriptionpage;?></div>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>               
</div>








