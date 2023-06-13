<!doctype html>
<html class="no-js" lang="en">
<?php
include('../connection.php');
$err=0;
$fldidd="None";
$flddesigcode="";
$flddesigdesc="";
extract($_POST);

//echo $fld_username . " , ".$fld_password . "ad asd";
if(isset($fld_desigcode)){
	
	$fld_desigcode = $_POST['fld_desigcode'];
	$fld_desigdesc = $_POST['fld_desigdesc'];
	$fld_idtxt = $_POST['fld_idtxt'];
	if($fld_idtxt=="None"){
	 $q = mysqli_query($con,"select * from tbl_designation where fld_desigcode='$fld_desigcode'");
	  if(mysqli_num_rows($q)>0){
	   $err = 1;
	  }
	  else{
		  $q = mysqli_query($con,"insert into tbl_designation(fld_desigcode,fld_desigdesc)VALUES('$fld_desigcode','$fld_desigdesc')");
		  $err = 2;
	  }
	}
	else{
		$q = mysqli_query($con,"UPDATE tbl_designation SET fld_desigcode='$fld_desigcode',fld_desigdesc='$fld_desigdesc' where fld_id='$fld_idtxt'");
		$err = 3;
	}
}

$deptId = (isset($_GET['deptId']) && $_GET['deptId'] != '') ? $_GET['deptId'] : 0;
$deptact = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
if($deptId!=''){
	
	if($deptact=="edit"){
	$qdept = mysqli_query($con,"select * from tbl_designation");
	while($rdept=mysqli_fetch_array($qdept)){
		if(md5($rdept['fld_id'])==$deptId){
			
			$fldidd = $rdept['fld_id'];
			$flddesigcode = $rdept['fld_desigcode'];
			$flddesigdesc = $rdept['fld_desigdesc'];
		}
	 }
	}
	if($deptact=="delete"){
		$qdept = mysqli_query($con,"select * from tbl_designation");
	while($rdept=mysqli_fetch_array($qdept)){
		if(md5($rdept['fld_id'])==$deptId){
			$fld_id = $rdept['fld_id'];
		}
	 }
		$qdept = mysqli_query($con,"Delete from tbl_designation where fld_id='$fld_id'");
		$err = 4;
	}
}
?>
<?php include 'includes/header.php' ?>

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
                                    <li><span class="bread-blod">Department</span>
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
                                    <li><span class="bread-blod">Department</span>
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
                                <h1><i class="fa big-icon fa-users"></i> Designations</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">

                                <div class="row">
								<form method="POST" id="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <div class="col-lg-4">
                                        <div class="basic-login-inner"><br><br>
                                            <h3>Create New Designation</h3><br>
<input type="hidden" name="fld_idtxt" value="<?php echo $fldidd;?>">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px">Designation
                                                            Code</label>
                                                        <div class="col-lg-12">
                                                            <input type="text" class="form-control"
                                                                name="fld_desigcode" value="<?php echo $flddesigcode; ?>" placeholder="ex. Mngr" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px">Designation
                                                            Description</label>
                                                        <div class="col-lg-12">
                                                            <input type="text" class="form-control"
                                                                name="fld_desigdesc" value="<?php echo $flddesigdesc; ?>" placeholder="ex. Manager" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="btn-group project-list-ad">
															<button type="submit" name="sbumit"  class="btn btn-md btn-block"><i
                                                                        class="fa fa-paper-plane"></i> Submit</button>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                         
                                        </div>
                                    </div>
									</form>
                                    <div class="col-lg-8">
									<form>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                            data-show-export="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Designation Code</th>
                                                    <th>Designation Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
											 
                                            <tbody>
                                               <?php 
												$dq = mysqli_query($con,"select * from tbl_designation order by fld_id");
												while($dr=mysqli_fetch_array($dq)){
													$afld_id=$dr['fld_id'];
													echo "<tr>";
												?>		
												 <td><?php echo $dr['fld_desigcode'];?></td>
												 <td><?php echo $dr['fld_desigdesc'];?></td><td>
												 <div class="btn-group project-list-ad">
                                                            <a href="javascript:changestatus('<?php echo md5($afld_id); ?>', 'edit');" class="btn btn-white btn-xs"><i
                                                                    class="fa fa-pencil"></i> Edit</a>
                                                        </div>
                                                        <div class="btn-group project-list-ad-rd">
                                                            <a href="javascript:;" onclick="changestatus('<?php echo md5($afld_id); ?>', 'delete');return false;" class="btn btn-white btn-xs"><i
                                                                    class="fa fa-trash"></i> Delete</a>
                                                        </div>
												 </td>			
                                                <?php
												echo "</tr>";
												}
												?>												
                                            </tbody>
                                        </table>
										</form>
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
Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to "+ status +" this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, '+ status +' it!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = 'designation.php?action='+ status +'&deptId='+userId;
  }
})
	//if(confirm('Are you sure you wants to ' + status+ ' it ?')) {
		//window.location.href = 'department.php?action='+ status +'&userId='+userId;
	//}
}
</script>
<script type='text/javascript'>
	if(<?php echo $err; ?> == 1){
		Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Designation already Exist!'
            });
		
	}
	if(<?php echo $err; ?> == 2){
			Swal.fire(
  'Saved',
  'The New Designation Details has been Added!',
  'success'
);
		
	}
	if(<?php echo $err; ?> == 3){
		Swal.fire(
  'Updated!',
  'The Designation Details has been Updated!',
  'success'
);
}
	if(<?php echo $err; ?> == 4){
		Swal.fire(
  'Deleted!',
  'The Designation Details has been Deleted!',
  'success'
);
		
	}
    </script>
</html>