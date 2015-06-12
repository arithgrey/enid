<?=doctype('html5')?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="author" content="arithgrey">
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



  

      <?=link_tag('application/js/js/iCheck/skins/minimal/minimal.css');?>    
      <?=link_tag('application/js/js/iCheck/skins/square/square.css');?>   
      <?=link_tag('application/js/js/iCheck/skins/square/red.css');?>   
      <?=link_tag('application/js/js/iCheck/skins/square/blue.css');?> 
  
      <!--dashboard calendar-->
      <?=link_tag('application/js/js/iCheck/skins/minimal/minimal.css');?>    
      <?=link_tag('application/css/css/clndr.css');?>    
  
      <!--Morris Chart CSS -->
      <?=link_tag('application/js/js/morris-chart/morris.css');?>

       <!--common-->
       <?=link_tag('application/css/css/style.css');?>  
       <?=link_tag('application/css/css/style-responsive.css');?>  

        <?=link_tag('application/css/main.css');?>      
        <?=link_tag('application/css/animate.css');?> 
        <?=link_tag('application/css/extra.css');?>

  
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  <style type="text/css">
      .main-content{
            background: #FEFFE5!important;

      }
      .sticky-header , .left-side-show{
        
            background: #FEFFE5!important;
            
            box-shadow: 0 5px 0 #51a3c8;
            color: black !important;
      }
      
      .header-section,   .notification-menu , .menu-right , .notification-menu, .menu-right   , .dropdown-toggle , .sticky-header .logo {
            
            background: #00BAFD !important;
            //background: #36606F !important;
      }
  </style>
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
             <a href="<?=base_url()?>"><img width="25%" src="<?=base_url('application/img/Enid.png')?>" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="<?=base_url()?>"><img width="80%" src="<?=base_url('application/img/Enid.png')?>" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img width="80%" src="<?=base_url('application/img/Enid.png')?>" class="media-object"> 
                    <div class="media-body">
                        <h4><a href="#"><?=$nombre;?></a></h4>
                        <span><?=$titulo;?></span>
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
            
            <ul class="nav nav-pills nav-stacked custom-nav">
            
            <?php echo $menu;  ?>

            </u>    
            
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->

    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"><img width="95%" src="<?=base_url('application/img/general/viewing.png')?>"></i></a>
            <!--toggle button end-->

            <!--search start-->
            
            <!--search end-->

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
                                <li class="new">
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Dashboard done</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
                                                <span class="">90%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Web Development</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-info">
                                                <span class="">66% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Mobile App</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="33" role="progressbar" class="progress-bar progress-bar-danger">
                                                <span class="">33% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Issues fixed</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar">
                                                <span class="">80% </span>
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
                                <li class="new">
                                    <a href="">
                                        <span class="thumb"><img src="images/photos/user1.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">John Doe <span class="badge badge-success">new</span></span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="images/photos/user2.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jonathan Smith</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="images/photos/user3.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jane Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="images/photos/user4.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Mark Henry</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
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
                            <span class="badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">Notifications</h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #1 overloaded.  </span>
                                        <em class="small">34 mins</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #3 overloaded.  </span>
                                        <em class="small">1 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #5 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
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
                            <li><a href="<?=base_url('index.php/sessioncontroller/logout')?>"><i class="fa fa-sign-out"></i> Salir </a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!--body wrapper start-->


        <!-- Placed js at the end of the document so the pages load faster -->

<script src="<?=base_url('application/js/js/jquery-1.10.2.min.js')?>"></script>
<script src="<?=base_url('application/js/js/jquery-ui-1.9.2.custom.min.js')?>"></script>
<script src="<?=base_url('application/js/js/jquery-migrate-1.2.1.min.js')?>"></script>
<script src="<?=base_url('application/js/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('application/js/js/modernizr.min.js')?>"></script>

<script src="<?=base_url('application/js/js/jquery.nicescroll.js')?>"></script>


<!--easy pie chart-->
<script src="<?=base_url('application/js/js/easypiechart/jquery.easypiechart.js')?>"></script>
<script src="<?=base_url('application/js/js/easypiechart/easypiechart-init.js')?>"></script>

<!--Sparkline Chart-->
<script src="<?=base_url('application/js/js/sparkline/jquery.sparkline.js')?>"></script>
<script src="<?=base_url('application/js/js/sparkline/sparkline-init.js')?>"></script>

<!--icheck -->
<script src="<?=base_url('application/js/js/iCheck/jquery.icheck.js')?>"></script>
<script src="<?=base_url('application/js/js/icheck-init.js')?>"></script>


<!-- jQuery Flot Chart-->

<script src="<?=base_url('application/js/js/flot-chart/jquery.flot.js')?>"></script>
<script src="<?=base_url('application/js/js/flot-chart/jquery.flot.tooltip.js')?>"></script>
<script src="<?=base_url('application/js/js/flot-chart/jquery.flot.resize.js')?>"></script>

<!--Morris Chart-->
<script src="<?=base_url('application/js/js/morris-chart/morris.js')?>"></script>
<script src="<?=base_url('application/js/js/morris-chart/raphael-min.js')?>"></script>


<!--Calendar-->
<script src="<?=base_url('application/js/js/calendar/clndr.js')?>"></script>
<script src="<?=base_url('application/js/js/calendar/evnt.calendar.init.js')?>"></script>
<script src="<?=base_url('application/js/js/calendar/moment-2.2.1.js')?>"></script>


<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<!--common scripts for all pages-->

<script src="<?=base_url('application/js/js/scripts.js')?>"></script>
<!--Dashboard Charts-->
<script src="<?=base_url('application/js/js/dashboard-chart-init.js')?>"></script>
<script type="text/javascript"  src="<?=base_url('application/js/main.js')?>"></script> 
<script src="<?=base_url('application/js/jsapi.js')?>"></script>


        <div class="wrapper">

