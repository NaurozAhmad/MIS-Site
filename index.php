
<!DOCTYPE html>
<html class=" ">
<head>
     <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
     <meta charset="utf-8" />
     <title>Dashboard - Overview</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
     <meta content="" name="description" />
     <meta content="" name="author" />

     <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
     <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->

     <!-- CORE CSS FRAMEWORK - START -->
     <link rel="stylesheet" type="text/css" href="assets/css/core.min.css">
     <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.css" />

     <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
     <link rel="stylesheet" href="assets/css/plugins.min.css" />
     <link rel="stylesheet" href="assets/css/charts.min.css" />
     <!-- assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css -->

     <!-- CORE CSS TEMPLATE - START -->
     <link rel="stylesheet" href="assets/css/custom.min.css" />

 </head>
 <!-- END HEAD -->

 <!-- BEGIN BODY -->
 <body class=" ">
    <?php require_once('includes/header.html') ?>
    <!-- START CONTAINER -->
    <div class="page-container row-fluid" style="position: relative;">

        <?php require_once('includes/sidebar.html') ?>
        
        <!-- START CONTENT -->
        <section id="main-content" class=" ">
            <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <div class="btn-group btn-group-justified">         
                                <a href="index.php" type="button" class="btn btn-dashboard active btn-lg">Overview</a>
                                <a href="admin.php" type="button" class="btn btn-dashboard btn-lg">Admin</a>
                                <a href="under.html" type="button" class="btn btn-dashboard btn-lg">Projects</a>
                                <a href="under.html" type="button" class="btn btn-dashboard btn-lg">Revenue</a>
                                <a href="under.html" type="button" class="btn btn-dashboard btn-lg">Finance</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>


                <div class="col-lg-12">
                    <section class="box nobox">
                        <div class="content-body">
                            <div class="row">

                                <div class="col-md-3 col-sm-5 col-xs-12">

                                    <div class="r1_graph1 db_box">
                                        <span class='bold'>98.95%</span>
                                        <span class='pull-right'><small>SERVER UP</small></span>
                                        <div class="clearfix"></div>
                                        <span class="db_dynamicbar">Loading...</span>
                                    </div>


                                    <div class="r1_graph2 db_box">
                                        <span class='bold'>2332</span>
                                        <span class='pull-right'><small>USERS ONLINE</small></span>
                                        <div class="clearfix"></div>
                                        <span class="db_linesparkline">Loading...</span>
                                    </div>


                                    <div class="r1_graph3 db_box">
                                        <span class='bold'>342/123</span>
                                        <span class='pull-right'><small>ORDERS / SALES</small></span>
                                        <div class="clearfix"></div>
                                        <span class="db_compositebar">Loading...</span>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-7 col-xs-12">
                                    <div class="r1_maingraph db_box">
                                        <span class='pull-left'>
                                            <i class='icon-purple fa fa-square icon-xs'></i>&nbsp;<small>PAGE VIEWS</small>&nbsp; &nbsp;<i class='fa fa-square icon-xs icon-primary'></i>&nbsp;<small>UNIQUE VISITORS</small>
                                        </span>
                                        <span class='pull-right switch'>
                                            <i class='icon-default fa fa-line-chart icon-xs'></i>&nbsp; &nbsp;<i class='icon-secondary fa fa-bar-chart icon-xs'></i>&nbsp; &nbsp;<i class='icon-secondary fa fa-area-chart icon-xs'></i>
                                        </span>

                                        <div id="db_morris_line_graph" style="height:272px;width:95%;"></div>
                                        <div id="db_morris_area_graph" style="height:272px;width:90%;display:none;"></div>
                                        <div id="db_morris_bar_graph" style="height:272px;width:90%;display:none;"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 col-sm-5 col-xs-12">
                                    <div class="wid-notification" style="max-height: 340px; min-height: auto;">
                                        <h4>Latest</h4>

                                        <ul class="list-unstyled notification-widget" style="height: 268px;">


                                            <li class="unread status-available">
                                                <a href="javascript:;">
                                                    <div>
                                                        <span class="name">
                                                            <p class="time small">15 mins ago</p>
                                                        </span>
                                                        <span class="desc small">
                                                            Sometimes it takes a lifetime to win a battle.
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>


                                            <li class="unread status-available">
                                                <a href="javascript:;">
                                                    <div>
                                                        <span class="name">
                                                            <p class="time small">15 mins ago</p>
                                                        </span>
                                                        <span class="desc small">
                                                            Sometimes it takes a lifetime to win a battle.
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="unread status-available">
                                                <a href="javascript:;">
                                                    <div>
                                                        <span class="name">
                                                            <p class="time small">15 mins ago</p>
                                                        </span>
                                                        <span class="desc small">
                                                            Sometimes it takes a lifetime to win a battle.
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>

                                    </div>
                                </div>
                            </div> <!-- End .row -->

                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="r4_counter db_box">
                                        <i class='pull-left fa fa-users icon-md icon-rounded icon-primary'></i>
                                        <div class="stats">
                                            <h4><strong>1,450</strong></h4>
                                            <span>Total Employees</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="r4_counter db_box">
                                        <i class='pull-left fa fa-road icon-md icon-rounded icon-orange'></i>
                                        <div class="stats">
                                            <h4><strong>243</strong></h4>
                                            <span>Active Projects</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="r4_counter db_box">
                                        <i class='pull-left fa fa-money icon-md icon-rounded icon-purple'></i>
                                        <div class="stats">
                                            <h4><strong>PKR. 3424</strong></h4>
                                            <span>Last Month Profit</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="r4_counter db_box">
                                        <i class='pull-left fa fa-bar-chart icon-md icon-rounded icon-warning'></i>
                                        <div class="stats">
                                            <h4><strong>1.6</strong></h4>
                                            <span>Income / Expense Ratio</span>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End .row -->
                        </div>
                    </section>
                </div>
            </section>
        </section>
        <!-- END CONTENT -->
        
    </div>
    <!-- END CONTAINER -->
    <?php require_once('includes/footer.html') ?>


    <!-- CORE JS FRAMEWORK - START --> 
    <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
    <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
    <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
    <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>
    <!-- CORE JS FRAMEWORK - END --> 


    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
    <script src="assets/plugins/jquery-ui/smoothness/jquery-ui.min.js" type="text/javascript"></script> 
    <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/plugins/easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
    <script src="assets/plugins/morris-chart/js/raphael-min.js" type="text/javascript"></script>
    <script src="assets/plugins/morris-chart/js/morris.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="assets/plugins/gauge/gauge.min.js" type="text/javascript"></script>
    <script src="assets/plugins/icheck/icheck.min.js" type="text/javascript"></script>
    <script src="assets/js/dashboard.js" type="text/javascript"></script>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


    <!-- CORE TEMPLATE JS - START --> 
    <script src="assets/js/scripts.js" type="text/javascript"></script>

    <script src="assets/js/custom.js" type="text/javascript"></script>

</body>
</html>





<script type="text/javascript">


</script>