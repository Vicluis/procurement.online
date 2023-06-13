<!doctype html>
<html class="no-js" lang="en">

<?php
include('../connection.php');
include ('includes/header.php'); 
$err =0;
$deptId = (isset($_GET['deptId']) && $_GET['deptId'] != '') ? $_GET['deptId'] : 0;
$deptact = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
if($deptId!=''){
	if($deptact=="approved"){
		 $q = mysqli_query($con,"SELECT * from tbl_lpofiles");
		 $st="Approved";
		 $pst="Approved";
		 $dtappr = date("Y-m-d h:i:sa");
		 while($r=mysqli_fetch_array($q)){
			 if(md5($r['fld_id'])==$deptId){
				 $levelnya = $_SESSION['approverlevel'];
				 $apid = $_SESSION['approverid'];
				 $theid = $r['fld_id'];
				 if($levelnya=="Level 2"){
					  
					 $x = mysqli_query($con,"select * from tbl_lpofiles where fld_approverone='$pst' AND fld_id='$theid'");
					 $apctrup = mysqli_num_rows($x);
					if($apctrup>0){
						$x = mysqli_query($con,"UPDATE tbl_lpofiles SET fld_approvertwo='$st',fld_approvertwoid='$apid',fld_dateapproved='$dtappr' where fld_id='$theid'");
						$err = 1;
					}
					else{
						$err =2;
					}
				 }
				 else if($levelnya=="Level 3"){
					 $x = mysqli_query($con,"select * from tbl_lpofiles where fld_approvertwo='$pst' AND fld_id='$theid'");
					 $apctrup = mysqli_num_rows($x);
					if($apctrup>0){
						$x = mysqli_query($con,"UPDATE tbl_lpofiles SET fld_approverthree='$st',fld_approverthreeid='$apid',fld_dateapproved='$dtappr' where fld_id='$theid'");
						$err = 1;
					}
					else{
						$err =2;
					}
					 
				 }
				  else if($levelnya=="Level 4"){
					 $x = mysqli_query($con,"select * from tbl_lpofiles where fld_approverthree='$pst' AND fld_id='$theid'");
					 $apctrup = mysqli_num_rows($x);
					if($apctrup>0){
						$x = mysqli_query($con,"UPDATE tbl_lpofiles SET fld_approverfour='$st',fld_approverfourid='$apid',fld_dateapproved='$dtappr' where fld_id='$theid'");
						$err = 1;
					}
					else{
						$err =2;
					}
				 }
				 else{
					// echo "else <br/>";
					 //echo $st .",fld_approveroneid=".$apid.",fld_dateapproved=".$dtappr.",fld_id=".$theid;
					 $x = mysqli_query($con,"UPDATE tbl_lpofiles SET fld_approverone='$st',fld_approveroneid='$apid',fld_dateapproved='$dtappr' where fld_id='$theid'");
					 $err = 1;
				 }
			 }
		 }
	}
}
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
                                </div> -->
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">LPOs</span>
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
                                    <li><span class="bread-blod">LPOs</span>
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
                                <h1><i class="fa big-icon fa-eye"></i> For Pending LPOs</h1>
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
                                                    <!--<th data-field="state" data-checkbox="true"></th>-->
													<th></th>
                                                    <th>LPO Category</th>
                                                    <th>Control No.</th>
                                                    <th>Date Uploaded</th>
                                                    <th>Download</th>
                                                    <th>Department</th>
                                                    <th>Remarks</th>
													<th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php 
											$ctr=1;
											$st="Pending";
	$id = $_SESSION['approverid'];
	$levelnya = $_SESSION['approverlevel'];
	if($levelnya=="Level 1"){
	$q = mysqli_query($con,"select * from tbl_lpofiles where fld_approverone='$st'");
	}
	if($levelnya=="Level 2"){
	$q = mysqli_query($con,"select * from tbl_lpofiles where fld_approvertwo='$st'");
	}
	if($levelnya=="Level 3"){
	$q = mysqli_query($con,"select * from tbl_lpofiles where fld_approverthree='$st'");
	}
	if($levelnya=="Level 4"){
	$q = mysqli_query($con,"select * from tbl_lpofiles where fld_approverfour='$st'");
	}
	
	while($r=mysqli_fetch_array($q)){
		$afld_id=$r['fld_id'];
		echo "<tr>";
											?>
											<td><?php echo $ctr; ?></td>
											<td><?php echo $r['fld_lpocategory']; ?></td>
											<td><?php echo $r['fld_lpocontrolnum']; ?></td>
											<td><?php echo $r['fld_lpodateupload']; ?></td>
											<td><a href="<?php echo '../lpos/'.$r['fld_lpofile']; ?>"><i class="fa big-icon fa-download"></i></a></td>
											<td><?php echo $r['fld_departmentuploader']; ?></td>
											<td><?php echo $r['fld_remarks']; ?></td>
											<td><div class="btn-group project-list-ad">
                                                            <a href="javascript:;" onclick="changestatus('<?php echo md5($afld_id); ?>', 'approved');return false;" class="btn btn-white btn-xs"><i
                                                                    class="fa fa-pencil"></i> To Approved</a>
                                                        </div></td>
											<?php 
											echo "</tr>";
											$ctr++;
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
<script>
function changestatus(userId, status) {
	//"You won't be able to "+ status +" this!"
	var txt;
	if(status=="Pending"){
		txt = "User can login again";
	} 
	if(status=="Inactive"){
	txt = "User can not login";	
	}
Swal.fire({
  title: 'Put to Approved?',
  text: 'Are You sure You want to put this on Aprroved',
  icon: 'question',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, set to '+ status +'!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = 'pending.php?action='+ status +'&deptId='+userId;
  }
})
	//if(confirm('Are you sure you wants to ' + status+ ' it ?')) {
		//window.location.href = 'department.php?action='+ status +'&userId='+userId;
	//}
}
</script>
<script type='text/javascript'>
	if(<?php echo $err; ?> == 2){
		Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please wait for the Previous Approver Action!'
            });
		
	}
	if(<?php echo $err; ?> == 1){
			Swal.fire(
  'Updated',
  'The LPO has been Moved to Approved!',
  'success'
);
		
	}
	if(<?php echo $err; ?> == 3){
		Swal.fire(
  'Updated!',
  'The Department User has been Updated!',
  'success'
);
}
</script>
</html>