<?php require_once("connection.php");?>
<!DOCTYPE html>
<html class=" ">
<head>
<!-- 
* @Package: Ultra Admin - Responsive Theme
* @Subpackage: Bootstrap
* @Version: 1.0
* This file is part of Ultra Admin Theme.
-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Employees</title>
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
<link href="assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css -->

<!-- CORE CSS TEMPLATE - START -->
<link rel="stylesheet" href="assets/css/custom.min.css" />
<link rel="stylesheet" href="./assets/css/custom.css" />

<link href="assets/plugins/datatables/css/jquery.dataTables.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class=" ">
  <?php require_once('includes/header.html') ?>
  <!-- START CONTAINER -->
  <div class="page-container row-fluid">

    <?php require_once('includes/sidebar.html') ?>

    <!-- START CONTENT -->
    <section id="main-content" class=" ">
      <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>

          <div class="page-title">
            <div class="pull-left">
                <h2>Personnel</h2>

            </div>

        </div>
    </div>
    <div class="clearfix"></div>


<div class="col-lg-12">
    <a href="#myModal" data-toggle="modal" class="btn btn-purple">
        Add Employee
    </a>
  <section class="box"> 
    <!-- This is filter Section -->
    <form id="filter-form" name="filter-form" action="#" method="post" class="form-inline">
        <div class="form-element">
            <label class="form-label">Designation</label>
            <select id="s2example-1" name="filter_designation">
                <option value="">All</option>
                <option value="Chairman">Chairman</option>
                <option value="Member">Member</option>
                <option value="General Manager">General Manager</option>
                <option value="Director">Director</option>
                <option value="Deputy Director">Deputy Director</option>
                <option value="Driver">Driver</option>
                <option value="Computer Operator">Computer Operator</option>
                <option value="Clerk">Clerk</option>
            </select>
        </div>
        <div class="form-element">
            <label class="form-label">Status</label>
            <select class="" id="s2example-2" name="filter_status">
                <option value="">All</option>
                <option value="Computer Bureau">Computer Bureau</option>
                <option value="Transport">Transport</option>
                <option value="Finance">Finance</option>
                <option value="0">HR</option>
                <option value="0">Operations</option>
            </select>
        </div>
        <div class="form-element">
            <label class="form-label">BS</label>
            <select class="" style="width: 100%; height: 32px;" name="filter_bs">
                <option value="">All</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>



<!-- This is filter Section -->

    </section>
</div>
<div class="col-lg-12">
    <section class="box ">    
        <div style="display: block;" class="content-body">    
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="table-responsive">
                        <table class="table table-striped dt-responsive display" cellspacing="0" width="100%">

              <?php 
              if(isset($_POST['submit']))
              {
                 $designation = $_POST['filter_designation'];
                 $status = $_POST['filter_status'];
                 $bs = $_POST['filter_bs'];
                 	
                 	$sql = "SELECT * FROM employee where employee.employee_designation LIKE '$designation' and employee.employee_status LIKE '$status' and employee.employee_bs = '$bs'";
              
                $result = mysqli_query($conn, $sql);   
                if (mysqli_num_rows($result) > 0) {
// output data of each row
                  $i=1;?>
                <thead> 
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Father / Husband Name</th>
                      <th>Designation</th>
                      <th>Status</th>
                      <th>BS</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                while($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <tr>
                    <th scope="row"><?php echo $i;?></th>
                    <td><a href="profile.php" style="color:inherit;"><?php echo $row['employee_name'];?></a></td>
                    <td><?php echo $row['employee_fhname'];?></td>
                    <td><?php echo $row['employee_designation'];?></td>
                    <td><?php echo $row['employee_status'];?></td>
                    <td><?php echo $row['employee_bs'];?></td>
                </tr>
                <?php         $i++;       }
                mysqli_close($conn); }else if(mysqli_num_rows($result) == 0){echo "No Records Found";}
            }
            else{
              $sql = "SELECT * FROM employee";
              $result = mysqli_query($conn, $sql);   
              if (mysqli_num_rows($result) > 0) {
// output data of each row
                $i=1;?>
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Father / Husband Name</th>
                    <th>Designation</th>
                    <th>Status</th>
                    <th>BS</th>
                </tr>
            </thead>
            <tbody>
              <?php 
              while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                  <th scope="row"><?php echo $i;?></th>
                  <td><a href="profile.php" style="color:inherit;"><?php echo $row['employee_name'];?></a></td>
                  <td><?php echo $row['employee_fhname'];?></td>
                  <td><?php echo $row['employee_designation'];?></td>
                  <td><?php echo $row['employee_status'];?></td>
                  <td><?php echo $row['employee_bs'];?></td>
              </tr>
              <?php         $i++;       }
              mysqli_close($conn); } }?>

          </tbody>
      </table>
  </div>
</div>
</div>
</div>
</section></div></section>
</section>
<!-- END CONTENT -->

</div>
<!-- END CONTAINER -->

<?php require_once('includes/footer.html') ?>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Add Employee Record Here</h4>
            </div>
            <div class="modal-body">
                <form id="form" action="add.php" method="post" enctype="multipart/form-data">
                    <div class="row"> 
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="form-label" for="field-1">Name</label>
                                <span class="desc">e.g. "Muhammad Faisal"</span>
                                <div class="controls">
                                    <input type="text" name="employee_name" class="form-control" id="field-1" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="field-2">Father / Husband Name</label>
                                <span class="desc">e.g. "Jawad Khan"</span>
                                <div class="controls">
                                    <input type="text" name="employee_fhname" class="form-control" id="field-2" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="fileToUpload">Upload Picture</label>
                                <span class="desc">&nbsp;</span>
                                <div class="controls">
                                    <input type="file" name="file" class="" id="file"  >
                                </div><br>

                                <div class="form-group">
                                    <label class="form-label" for="field-4">Designation</label>
                                    <span style="display: hidden;" class="desc">Select Designation</span>
                                    <div class="controls">
                                        <select class="form-control input-sm m-bot15" name="employee_designation">
                                            <option value="Chairman">Chairman</option>
                                            <option value="Member">Member</option>
                                            <option value="General Manager">General Manager</option>
                                            <option value="Director">Director</option>
                                            <option value="Deputy Director">Deputy Director</option>
                                            <option value="Driver">Driver</option>
                                            <option value="Computer Operator">Computer Operator</option>
                                            <option value="Clerk">Clerk</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="field-5">Current Status</label>
                                    <span class="desc">Select Status</span>
                                    <div class="controls">
                                        <select class="form-control input-sm m-bot15" name="employee_status">
                                            <option value="Computer Bureau">Computer Bureau</option>
                                            <option value="Transport">Transport</option>
                                            <option value="Finance">Finance</option>
                                            <option value="HR">HR</option>
                                            <option value="Operations">Operations</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="field-6">BS</label>
                                <span class="desc">e.g. "17, 18 , 18, 20 etc"</span>
                                <div class="controls">
                                    <input type="text" name="employee_bs" class="form-control" id="field-6" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="hidden" value="employee">
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- CORE JS FRAMEWORK - START --> 
<script src="assets/js/core.min.js"></script>
<script src="assets/plugins/select2/select2.min.js" type="text/javascript"></script>
<!-- CORE TEMPLATE JS - START --> 
<script src="assets/js/scripts.js" type="text/javascript"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>