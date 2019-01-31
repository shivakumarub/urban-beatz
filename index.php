<?php
session_start();
if(isset($_SESSION['email']))
{
	  require_once('../Connections/cn.php');
	  mysql_select_db($database_cn, $cn);
	  
      //$query_Recordset1 = "SELECT * FROM business_info";
//	  $Recordset1 = mysql_query($query_Recordset1, $cn) or die(mysql_error());
//	  $row_Recordset1 = mysql_fetch_assoc($Recordset1);
//	  $totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Home</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="description" content="Avenger Admin Theme">
<meta name="author" content="KaijuThemes">
<link type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link type="text/css" href="assets/css/styles.css" rel="stylesheet">
<!-- Core CSS with all styles -->

<link type="text/css" href="assets/plugins/jstree/dist/themes/avenger/style.min.css" rel="stylesheet">
<!-- jsTree -->
<link type="text/css" href="assets/plugins/codeprettifier/prettify.css" rel="stylesheet">
<!-- Code Prettifier -->
<link type="text/css" href="assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">
<!-- iCheck -->

<link type="text/css" href="assets/plugins/form-daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
<!-- DateRangePicker -->
<link type="text/css" href="assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
<!-- FullCalendar -->
<link type="text/css" href="assets/plugins/charts-chartistjs/chartist.min.css" rel="stylesheet">
<!-- Chartist -->

</head>

<body class="infobar-offcanvas">
<?php include('header.php');?>
<div id="wrapper">
  <div id="layout-static">
    <?php include('menu.php');?>
    <div class="static-content-wrapper">
      <div class="static-content">
        <div class="page-content">
          <ol class="breadcrumb">
            <li class=""><a href="index.php">Home</a></li>
            <li class="active"><a href="">Dashboard</a></li>
          </ol>
           <div class="page-heading">
            <h1>Dashboard</h1>
          </div>
          <div class="container-fluid">
            <div data-widget-group="group1">
             <div class="row">
                <?php /*?><div class="col-md-3">
                  <div class="amazo-tile tile-success">
                    <div class="tile-heading">
                      <div class="title">Total Business Info</div>
                    </div>
                    <div class="tile-body">
                      <div class="content"><?php echo $totalRows_Recordset1;?></div>
                    </div>
                    
                  </div>
                </div><?php */?>
                <!--<div class="col-md-3">
                  <div class="amazo-tile tile-info" href="#">
                    <div class="tile-heading">
                      <div class="title">Goals</div>
                      <div class="secondary">orders this month</div>
                    </div>
                    <div class="tile-body">
                      <div class="content">3,690</div>
                    </div>
                    <div class="tile-footer"> <span class="info-text text-right">82% of 4,500</span>
                      <div class="progress">
                        <div class="progress-bar" style="width: 82%"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="amazo-tile tile-white">
                    <div class="tile-heading">
                      <div class="title">Items</div>
                      <div class="secondary">past 28 days</div>
                    </div>
                    <div class="tile-body"> <span class="content">407</span> </div>
                    <div class="tile-footer text-center"> <span class="info-text text-right" style="color: #f04743">13.4% <i class="fa fa-level-down"></i></span>
                      <div id="sparkline-item" class="sparkline-bar"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="amazo-tile tile-white">
                    <div class="tile-heading"> <span class="title">Commision</span> <span class="secondary">past 28 days</span> </div>
                    <div class="tile-body"> <span class="content">$9,500</span> </div>
                    <div class="tile-footer"> <span class="info-text text-right" style="color: #94c355">9.2% <i class="fa fa-level-up"></i></span>
                      <div id="sparkline-commission" class="sparkline"></div>
                    </div>
                  </div>
                </div>-->
              </div>
            </div>
          </div>
          <!-- .container-fluid --> 
          
          <!-- .container-fluid --> 
      </div>
        <!-- #page-content --> 
    </div>
      <?php include('footer.php');?>
  </div>
</div>
</div>

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> --> 

<script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script> <!-- Load jQuery --> 
<script type="text/javascript" src="assets/js/jqueryui-1.9.2.min.js"></script> <!-- Load jQueryUI --> 

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> <!-- Load Bootstrap --> 

<script type="text/javascript" src="assets/plugins/easypiechart/jquery.easypiechart.js"></script> <!-- EasyPieChart--> 
<script type="text/javascript" src="assets/plugins/sparklines/jquery.sparklines.min.js"></script> <!-- Sparkline --> 
<script type="text/javascript" src="assets/plugins/jstree/dist/jstree.min.js"></script> <!-- jsTree --> 

<script type="text/javascript" src="assets/plugins/codeprettifier/prettify.js"></script> <!-- Code Prettifier  --> 
<script type="text/javascript" src="assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> <!-- Swith/Toggle Button --> 

<script type="text/javascript" src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script> <!-- Bootstrap Tabdrop --> 

<script type="text/javascript" src="assets/plugins/iCheck/icheck.min.js"></script> <!-- iCheck --> 

<script type="text/javascript" src="assets/js/enquire.min.js"></script> <!-- Enquire for Responsiveness --> 

<script type="text/javascript" src="assets/plugins/bootbox/bootbox.js"></script> <!-- Bootbox --> 

<script type="text/javascript" src="assets/plugins/simpleWeather/jquery.simpleWeather.min.js"></script> <!-- Weather plugin--> 

<script type="text/javascript" src="assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller --> 

<script type="text/javascript" src="assets/plugins/jquery-mousewheel/jquery.mousewheel.min.js"></script> <!-- Mousewheel support needed for jScrollPane --> 

<script type="text/javascript" src="assets/js/application.js"></script> 
<script type="text/javascript" src="assets/demo/demo.js"></script> 

<!-- End loading site level scripts --> 

<!-- Load page level scripts--> 

<script type="text/javascript" src="assets/plugins/fullcalendar/fullcalendar.min.js"></script> <!-- FullCalendar --> 

<script type="text/javascript" src="assets/plugins/wijets/wijets.js"></script> <!-- Wijet --> 

<script type="text/javascript" src="assets/plugins/charts-chartistjs/chartist.min.js"></script> <!-- Chartist --> 
<script type="text/javascript" src="assets/plugins/charts-chartistjs/chartist-plugin-tooltip.js"></script> <!-- Chartist --> 

<script type="text/javascript" src="assets/plugins/form-daterangepicker/moment.min.js"></script> <!-- Moment.js for Date Range Picker --> 
<script type="text/javascript" src="assets/plugins/form-daterangepicker/daterangepicker.js"></script> <!-- Date Range Picker --> 

<script type="text/javascript" src="assets/demo/demo-index.js"></script> <!-- Initialize scripts for this page--> 

<!-- End loading page level scripts-->

</body>
</html>
<?php
}
else
{
	header("location:login.php");
}
?>