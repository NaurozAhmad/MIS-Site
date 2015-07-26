
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
     <!-- assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css -->

     <!-- CORE CSS TEMPLATE - START -->
     <link rel="stylesheet" href="assets/css/custom.min.css" />

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


                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="col-lg-12">
                    <section class="box nobox">
                        <div class="content-body">
                            <div class="row">
                                <!-- Page data goes here -->
                                <a href="#myModal" data-toggle="modal" class="btn btn-purple  pull-left">
                                    Add Employee
                                </a>
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
                                                    <div class="col-md-8 col-sm-9 col-xs-10">
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
                                                <span class="desc">Select Designation</span>
                                                <div class="controls">
                                                 <select class="form-control input-sm m-bot15" name="employee_designation">
                                                    <option>Chairman</option>
                                                    <option>Member</option>
                                                    <option>General Manager</option>
                                                    <option>Director</option>
                                                    <option>Deputy Director</option>
                                                    <option>Driver</option>
                                                    <option>Computer Operator</option>
                                                    <option>Clerk</option>
                                                </select>
                                            </div></div>
                                            <div class="form-group">
                                                <label class="form-label" for="field-5">Current Status</label>
                                                <span class="desc">Select Status</span>
                                                <div class="controls">
                                                 <select class="form-control input-sm m-bot15" name="employee_status">
                                                    <option>Computer Bureau</option>
                                                    <option>Transport</option>
                                                    <option>Finance</option>
                                                    <option>HR</option>
                                                    <option>Operations</option>
                                                </select>
                                            </div></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-6">BS</label>
                                            <span class="desc">e.g. "17, 18 , 18, 20 etc"</span>
                                            <div class="controls">
                                              <input type="text" name="employee_bs" class="form-control" id="field-6" >
                                          </div>
                                      </div>

                                  </div>
                              </div><input type="hidden" name="hidden" value="employee">
                              <button type="submit" name="submit" class="btn btn-success">Submit</button>

                          </form>



                      </div>
                  </div>
              </div>
          </div>

      </div> <!-- End .row -->
  </div>
</section>
</div>

<div class="col-lg-12">
    <section class="box "> 
<!-- This is filter Section -->

<table>
    <tr>
        <td style="padding-left:10px"><select class="form-control input-sm m-bot15" name="">
                                                    <option>Select Designation</option>
                                                    <option>Chairman</option>
                                                    <option>Member</option>
                                                    <option>General Manager</option>
                                                    <option>Director</option>
                                                    <option>Deputy Director</option>
                                                    <option>Driver</option>
                                                    <option>Computer Operator</option>
                                                    <option>Clerk</option>
                                                </select></td>
        <td style="padding-left:10px"> <select class="form-control input-sm m-bot15" name="">
                                                    <option>Select Designation</option>
                                                    <option>Chairman</option>
                                                    <option>Member</option>
                                                    <option>General Manager</option>
                                                    <option>Director</option>
                                                    <option>Deputy Director</option>
                                                    <option>Driver</option>
                                                    <option>Computer Operator</option>
                                                    <option>Clerk</option>
                                                </select></td>
        <td style="padding-left:10px"> <select class="form-control input-sm m-bot15" name="">
                                                    <option>Select Designation</option>
                                                    <option>Chairman</option>
                                                    <option>Member</option>
                                                    <option>General Manager</option>
                                                    <option>Director</option>
                                                    <option>Deputy Director</option>
                                                    <option>Driver</option>
                                                    <option>Computer Operator</option>
                                                    <option>Clerk</option>
                                                </select></td>
                                                 <td style="padding-left:10px"><button type="submit" name="submit" class="btn btn-default">Filter</button>
<td>
    </tr>
   
</table>


                                               


<!-- This is filter Section -->

    </section>
</div>
<div class="col-lg-12">
    <section class="box ">    
        <div style="display: block;" class="content-body">    <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
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
                            require_once("connection.php");

                            $sql = "SELECT * FROM employee";
                            $result = mysqli_query($conn, $sql);   

                            if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                             
                                $i=1;
                                while($row = mysqli_fetch_assoc($result)) {
                                    
                                 

                                      ?>
                                    <tr>
                                        <th scope="row"><?php echo $i;?></th>
                                        <td><?php echo $row['employee_name'];?></td>
                                        <td><?php echo $row['employee_fhname'];?></td>
                                        <td><?php echo $row['employee_designation'];?></td>
                                        <td><?php echo $row['employee_status'];?></td>
                                        <td><?php echo $row['employee_bs'];?></td>
                                    </tr>
                                    <?php         $i++;       }
                                 mysqli_close($conn); } ?>
                                
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

<!-- CORE JS FRAMEWORK - START --> 
<script src="assets/js/core.min.js"></script>

<!-- CORE TEMPLATE JS - START --> 
<script src="assets/js/scripts.js" type="text/javascript"></script>
</body>
</html>