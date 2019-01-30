<?php
session_start();
if(isset($_SESSION['email']))
{
	  require_once('../Connections/cn.php');
	  mysql_select_db($database_cn, $cn);
	  $r=@mysql_query("SELECT * FROM music_type order by id desc");
	  $msg=""; 
	  
	  if(isset($_GET['editid']))
	  {
		  $id=$_GET['editid'];
		  $rup=@mysql_query("select * from music_type where id='$id'");
		  $rw=@mysql_fetch_assoc($rup);
		 
	  }  
	  
   if(isset($_GET['deleteid']))
	  {
		  $id=$_GET['deleteid'];
		  $r=mysql_query("select * from music_type where id='$id'");
		  $rr=mysql_fetch_array($r);
		  @unlink("music_img/".$rr[2]);
	      @mysql_query("delete from music_type where id='$id'");
		  @header("location:add_music.php");		 	  
	  }
	  
	  if(isset($_POST['Insert']))
	  {
      if( $_FILES['image']['name'] != "" )
		  {
          $name=$_POST['name'];
			  $image="music_img/".$_FILES['image']['name'];
			  move_uploaded_file($_FILES["image"]["tmp_name"],"../music_img/". $_FILES["image"]["name"]);
			  $r=@mysql_query("insert into music_type (name,image) values('".$_POST['name']."','".$image."')");
			  //echo "successfuly uploaded";
		  }
		  else
		  {
			  //die("No file specified!");
		  }
		 
			 
			  
			  //echo "successfuly uploaded";
		  
	  
	  header("location:add_music.php");
	  $msg="Record inserted";
	  
	  }
	  
	  if(isset($_POST['Update']))
	  {
		  $id=$_POST['id'];
      $name=$_POST['name'];
      
                  
		  $image="music_img/".$_FILES['image']['name'];
		  if($_FILES['image']['name']!="")
		  {  
			move_uploaded_file($_FILES["image"]["tmp_name"],"../music_img/". $_FILES["image"]["name"]);
		    $rupdate=@mysql_query("update music_type set name='".$name."',image='".$image."' where id='$id'");
		  
		  }
		  else
		  {
		    $rupdate=@mysql_query("update music_type set name='".$name."' where id='$id'");
		  }





		 
		    $rupdate=@mysql_query("update music_type set name='".$name."' where id='$id'");
		 
		  header("location:add_music.php");
	  }


	  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Urban Beatz Music</title>
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
</head>
<body class="infobar-offcanvas">
<?php include("header.php"); ?>
<div id="wrapper">
  <div id="layout-static">
    
    <?php include("menu.php");?>
    
    <div class="static-content-wrapper">
      <div class="static-content">
        <div class="page-content">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Manage Music Category</li>
          </ol>
          <!--<div class="page-heading">            
                                <h1>>Manage user</h1>
                                <div class="options">
    <div class="btn-toolbar">
        <a href="#" class="btn btn-default"><i class="fa fa-fw fa-wrench"></i></a>
    </div>
</div>
                            </div>-->
          <div class="container-fluid">
            <div class="row">
             <div class="col-xs-12">
                <div class="panel panel-midnightblue">
                  <div class="panel-heading">
                    <h2>Add Data</h2>
                  </div>
                  <div class="panel-body">
                    <form class="form-horizontal row-border" enctype="multipart/form-data" action="add_music.php" id="framework_form" data-parsley-validate name="frm" method="post">
                      <div class="form-group">
                        <label class="col-sm-1 control-label">* Name</label>
                        <div class="col-sm-3">
                          <input placeholder="Enter Name" required class="form-control" name="name" value="<?php echo @$rw['name'];?>">
                        </div>
                        <label class="col-sm-1 control-label">* Image</label>
                        <div class="col-sm-3">
                          <input type="file" class="form-control" name="image" value="<?php echo @$rw['image'];?>">
                          
                          <?php if(@$rw['image']!= "" ) { ?>
                          		<img src="../<?php echo $rw['image']?>" width="100px" height="80px"/>
                          <?php } else {  }?>
                          
                        </div>
                        
                      </div>
                      
                      <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-5">
                          <div class="btn-toolbar">
                            <?php if(isset($_GET['editid'])) { ?>
                            <input type="hidden" name="id" value="<?php echo @$rw['id'];?>">
                            <input type="submit" name="Update" class="btn btn-info" value="Edit">
                            <?php }	else{	?>
                            <input type="submit" name="Insert" class="btn btn-info" value="Add">
                            <?php } 	?>
                            <input type="reset" name="reset" value="Cancel" class="btn btn-default" />
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            
              <div class="col-md-12">
                <div class="panel panel-default" id="panel-tabletools" data-widget='{"draggable":"false"}'>
                  <div class="panel-heading" > <b style="color:#000;">Data</b>
                    <div class="panel-ctrls"
					data-action-collapse='{"target": ".panel-body"}'
					data-action-expand=''
					data-action-colorpicker=''> </div>
                  </div>
                  <div class="panel-body panel-no-padding">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="tabletools">
                      <thead>
                        <tr>
                          <th>Sr No</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1;
							while($row=@mysql_fetch_array($r))
							{ ?>
                        <tr>
                          <td><?php echo $i++;?></td>
                          <td><?php echo $row['name']?></td>
                          <td>
                          <?php if($row['image']!= "" ) { ?>
                          		<img src="../<?php echo $row['image']?>" width="100px" height="80px"/>
                          <?php } else {  }?>
                          </td>
                          
                          <td><a href="add_music.php?editid=<?php echo $row['id'];?>">
                            <button class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> </button>
                            </a> <a href="add_music.php?deleteid=<?php echo $row['id'];?>">
                            <button class="btn btn-danger btn-sm" onClick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-remove"></i> </button>
                            </a> 
                            <a href="subcat.php?cid=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Add Music</a>
                            </td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                    <div class="panel-footer"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- .container-fluid --> 
        </div>
        <!-- #page-content --> 
      </div>
      <?php include("footer.php");?>
    </div>
  </div>
</div>

<!-- Load site level scripts --> 

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

<script>
// See Docs
	window.ParsleyConfig = {
    	  successClass: 'has-success'
		, errorClass: 'has-error'
		, errorElem: '<span></span>'
		, errorsWrapper: '<span class="help-block"></span>'
		, errorTemplate: "<div></div>"
		, classHandler: function(el) {
    		return el.$element.closest(".form-group");
		}
	};
</script> 
<script type="text/javascript" src="assets/plugins/form-parsley/parsley.js"></script> <!-- Validate Plugin / Parsley --> 
<script type="text/javascript" src="assets/demo/demo-formvalidation.js"></script> 
<script type="text/javascript" src="assets/plugins/datatables/jquery.dataTables.js"></script> <!-- Data Tables --> 

<script type="text/javascript" src="assets/plugins/datatables/TableTools/js/dataTables.tableTools.js"></script> <!-- Table Tools --> 
<script type="text/javascript" src="assets/plugins/datatables/ColReorder/js/dataTables.colReorder.min.js"></script> <!-- ColReorder --> 
<script type="text/javascript" src="assets/plugins/datatables/KeyTable/js/dataTables.keyTable.js"></script> <!-- KeyTable --> 

<script type="text/javascript" src="assets/plugins/datatables/dataTables.bootstrap.js"></script> <!-- Bootstrap Support for Datatables --> 

<script type="text/javascript" src="assets/plugins/wijets/wijets.js"></script> <!-- Wijet --> 

<script type="text/javascript" src="assets/demo/demo-tables-advanceddatatables.js"></script> 

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