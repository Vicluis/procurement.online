<!doctype html>
<html class="no-js" lang="en">

<?php 
include('../connection.php');
include 'includes/header.php'
 ?>

<body class="materialdesign">

    <?php include 'includes/sidebar.php' ?>
    <?php include 'includes/topbar.php' ?>

    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                <!--<div class="breadcome-heading">
                                    <form role="search" class="">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </div>-->
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Department User</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->

    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30 des-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcome-heading">
                                    <form role="search" class="">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Department User</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->

    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1><i class="fa big-icon fa-folder-open"></i> LPO Management</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                            data-show-export="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>LPO Category</th>
                                                    <th>Control No.</th>
                                                    <th>Date Uploaded</th>
                                                    <th>Download</th>
                                                    <th>Department</th>
                                                    <th>Approver 1</th>
                                                    <th>Approver 2</th>
                                                    <th>Approver 3</th>
                                                    <th>Approver 4</th>
                                                    <th>Remarks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php
											$ctr = 1;
											 $q = mysqli_query($con,"Select * from tbl_lpofiles");
											 while($r = mysqli_fetch_array($q)){
												 
											 
											?>
											<tr>
											<td><?php echo $ctr; ?></td>
											<td><?php echo $r['fld_lpocategory']; ?></td>
											<td><?php echo $r['fld_lpocontrolnum']; ?></td>
											<td><?php echo $r['fld_lpodateupload']; ?></td>
											<td><a href="<?php echo '../lpos/'.$r['fld_lpofile']; ?>"><i class="fa big-icon fa-download"></i></a></td>
											<td><?php echo $r['fld_departmentuploader']; ?></td>
											<td><?php echo $r['fld_approverone']; ?></td>
											<td><?php echo $r['fld_approvertwo']; ?></td>
											<td><?php echo $r['fld_approverthree']; ?></td>
											<td><?php echo $r['fld_approverfour']; ?></td>
											<td><?php echo $r['fld_remarks']; ?></td>
											<?php 
											$ctr++;
											 echo "</tr>";
											 }
											?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->
    </div>
    </div>


    <?php include 'includes/footer.php' ?>
</body>

</html>