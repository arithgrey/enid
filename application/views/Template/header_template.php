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
      

<!--dashboard calendar-->

  <?=link_tag('application/css/css/clndr.css');?>  
<?=link_tag('application/css/extra.css');?>
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

        <?=link_tag('application/css/extra.css');?>
        <script type="text/javascript" src="<?=base_url('application/js/js/advanced-datatable/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?=base_url('application/js/js/advanced-datatable/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/js/data-tables/DT_bootstrap.js')?>"></script>
<!--dynamic table initialization -->
<script src="<?=base_url('application/js/js/dynamic_table_init.js')?>"></script>

<!--common scripts for all pages-->
<script src="<?=base_url('application/js/scripts.js')?>"></script>
<script src="<?=base_url('application/js/jsapi.js')?>"></script>

</head>

<style type="text/css">
#leftcontenido{
   
}
.logo a{
    color: black;
}
.menu-list span{
    color: black;
}
.main-content{
    background: white;
}
#themewrapsection{
    //background: #34495E;
    background:  #1AAEC6;
}
</style>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side" id='leftcontenido'>
        
        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">John Doe</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                  <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                  <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>





            <!--sidebar nav start-->            

  
            <!-- visible to small devices only -->
         

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                
                <li class="active"><a href=""><i class="fa fa-home">
                    </i> <span>+<?=$titulo;?></span>
                    </a>
                </li>
                
                <?php echo $menu;  ?>

                <!--
                <li class="menu-list">
                    <a href="#">
                        <i class="fa fa-th-list"></i>
                         <span>Data Tables</span>
                    </a>
                </li>

                <li>
                   <a href="ok">
                    <i class="fa fa-sign-in"></i>   
                    <span>  +Login Page</span>
                    </a>
                </li>
            -->

            </ul>
            <!--sidebar nav end-->
  
            

              



            <!--sidebar nav end-->






            <!--
                <ul class="nav nav-pills nav-stacked custom-nav" id='main_bar'>                
                    <li class="active">
                        <a href="<?=base_url()?>">
                            
                            <span>Layouts</span>
                    </li>
                    <li class="">
                        <a href="">
                            
                            <span>Layouts</span>
                    </li>
                    <li>
                        <a href="login.html"><i class="fa fa-sign-in"></i> 
                         
                    </li>
                </ul>
        -->            
            <!--sidebar nav end-->
            </div>
    </div>






    <!-- left side end-->
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"> 
                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
             </i></a>
            <!--toggle button end-->

            
            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-tasks"></i>
                            <span class="badge">8</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 8 pending task</h5>
                            <ul class="dropdown-list user-list">
                                <li class="new">
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Database update</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
                                                <span class="">40%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="new"><a href="">See All Pending Task</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 5 Mails </h5>
                            <ul class="dropdown-list normal-list">
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="images/photos/user5.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jim Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="new"><a href="">Read All Mails</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge"><?=$perfilactual;?> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">Notifications</h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #31 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new"><a href="">See All Notifications</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="images/photos/user-avatar.png" alt="" />
                            <?=$nombre;?>

                
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="#"><i class="fa fa-user"></i> Mi cuenta </a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Ayuda</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Configuración</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Acerca de Dawnigdual</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Guia de primeros pasos</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Mi organización</a></li>
                            
                               
                                                     
                            <li><a href="<?=base_url('index.php/sessioncontroller/logout')?>"><i class="fa fa-sign-out"></i> Salir</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>






        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row"> <!--Inicia row-->               
                <div class='col-xs-12 col-sm-1'></div>
                  <div class='col-xs-12 col-sm-10'>
                      <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">By @arithgrey</button>
          </p>
        
            <div data-wow-delay="0.2s" class="wow bounceInDown animated" >
                  <div class="jumbotron">
                    <h1 class='text-left'>Dawning Dual</h1>
                    <p class='dinamic_description_jumbo text-center'>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
                   
                  
                  
                    <p class="label label-primary minititle"><?=$titulo;?></p>
                  
                    
                  </div>
            </div>      
                  </div>
                  <div class='col-xs-12 col-sm-1'></div>                
            </div><!--Termina row-->      


    <div class='row'>
    <div class='col-xs-12 col-sm-1'></div><!--Margen a la derecha-->                





     