<!doctype html>
<html class="no-js" lang="en">
<?php
include('../connection.php');
include ('includes/header.php'); 
$fldid="None";
$fldidd="None";
$fldoldemail = "None";
$flddeptcode="";
$flddesigcode="";
$fldusername="";
$fldfullname="";
$fldstatus="Active";
$usertype="Department";
$err=0;
extract($_POST);
if(isset($fld_username)){
	$fld_deptcode = $_POST['fld_deptcode'];
	$fld_fullname = $_POST['fld_fullname'];
	$fld_desigcode = $_POST['fld_desigcode'];
	$fld_idtxt = $_POST['fld_idtxt'];
	$fld_username = $_POST['fld_username'];
	$fld_password = $_POST['fld_password'];
	$fldoldemail = $_POST['fld_oldemail'];
	  if($fld_idtxt=="None"){
	 $q = mysqli_query($con,"select * from tbl_users where fld_email='$fld_username'");
	if(mysqli_num_rows($q)>0){
	   $err = 1;
	  }
	  else{
		  $filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
$extension  = pathinfo( $_FILES["file"]["name"], PATHINFO_EXTENSION ); // jpg
$basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg
$source       = $_FILES["file"]["tmp_name"];
$destination  = "../img/{$basename}";
/* move the file */
move_uploaded_file( $source, $destination );
//echo "Stored in: {$destination}";

		  $salt = createSalt();
		  $new_pass =  hash('sha256', $salt . $fld_password); 
		  $q = mysqli_query($con,"insert into tbl_users(fld_email,fld_password,fld_profilepic,fld_usertype,fld_userstatus)VALUES('$fld_username','$new_pass','$basename','$usertype','$fldstatus')");
		  
		  $q = mysqli_query($con,"insert into tbl_departmentuser(fld_fullname,fld_deptcode,fld_desigcode,fld_profilepic,fld_emailadd,fld_password,fld_accountstatus)VALUES('$fld_fullname','$fld_deptcode','$fld_desigcode','$basename','$fld_username','$new_pass','$fldstatus')");
		  $err = 2;
	  }
	}
	else{
		//update 
		if($fldoldemail==$fld_username){
			//echo $fldoldemail ."==". $fld_username . '=' . 
			$filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
$extension  = pathinfo( $_FILES["file"]["name"], PATHINFO_EXTENSION ); // jpg
$basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg
$source       = $_FILES["file"]["tmp_name"];
$destination  = "../img/{$basename}";
/* move the file */
move_uploaded_file( $source, $destination );
//echo "Stored in: {$destination}";

		  $salt = createSalt();
		  $new_pass =  hash('sha256', $salt . $fld_password); 
		  $q = mysqli_query($con,"UPDATE tbl_users SET fld_password='$new_pass',fld_profilepic='$basename' where fld_email='$fldoldemail'");
		  
		  $q = mysqli_query($con,"UPDATE tbl_departmentuser SET fld_fullname='$fld_fullname',fld_deptcode='$fld_deptcode',fld_desigcode='$fld_desigcode',fld_profilepic='$basename',fld_password='$new_pass' where fld_id='$fld_idtxt'");
		  $err = 3;
		  $fldoldemail="None";
		  $fldidd="None";
		}
		else{
			$q = mysqli_query($con,"select * from tbl_users where fld_email='$fld_username'");
	if(mysqli_num_rows($q)>0){
	   $err = 1;
	  }
	  else{
		   $filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
$extension  = pathinfo( $_FILES["file"]["name"], PATHINFO_EXTENSION ); // jpg
$basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg
$source       = $_FILES["file"]["tmp_name"];
$destination  = "../img/{$basename}";
/* move the file */
move_uploaded_file( $source, $destination );
//echo "Stored in: {$destination}";

		  $salt = createSalt();
		  $new_pass =  hash('sha256', $salt . $fld_password); 
		  $q = mysqli_query($con,"UPDATE tbl_users SET fld_email='$fld_username',fld_password='$new_pass',fld_profilepic='$basename' where fld_email='$fldoldemail'");
		  
		  $q = mysqli_query($con,"UPDATE tbl_departmentuser SET fld_emailadd='$fld_username',fld_fullname='$fld_fullname',fld_deptcode='$fld_deptcode',fld_desigcode='$fld_desigcode',fld_profilepic='$basename',fld_password='$new_pass' where fld_id='fld_idtxt'");
		  $err = 3;
		  $fldoldemail="None";
		  $fldidd="None";
		}
	}

}
}
$deptId = (isset($_GET['deptId']) && $_GET['deptId'] != '') ? $_GET['deptId'] : 0;
$deptact = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
if($deptId!=''){
	
	if($deptact=="edit"){
	$qdept = mysqli_query($con,"select * from tbl_departmentuser");
	while($rdept=mysqli_fetch_array($qdept)){
		if(md5($rdept['fld_id'])==$deptId){
			
			$fldidd = $rdept['fld_id'];
			$fld_deptcod = $rdept['fld_deptcode'];
			$fldfullname = $rdept['fld_fullname'];
			$fldusername = $rdept['fld_emailadd'];
			$fldoldemail = $rdept['fld_emailadd'];
			$q = mysqli_query($con,"select * from tbl_department where fld_deptcode='$fld_deptcod'");
			if(mysqli_num_rows($q)>0){
				$r=mysqli_fetch_array($q);
				$flddeptcode = "<option value='".$r['fld_deptcode']."'>".$r['fld_deptdesc']."</option>";
			}
			else{
				$flddeptcode="";
			}
			$flddesigdesc = $rdept['fld_desigcode'];
			 $q = mysqli_query($con,"select * from tbl_designation where fld_desigcode='$flddesigdesc'");
			 if(mysqli_num_rows($q)>0){
				 $r=mysqli_fetch_array($q);
				 $flddesigcode = "<option value='".$r['fld_desigdesc'] ."'>".$r['fld_desigdesc']."</option>";
			 }
			 else{
				 $flddesigcode="";
			 }
		}
	 }
	}
	if($deptact=="delete"){
		
		$qdept = mysqli_query($con,"select * from tbl_departmentuser");
	while($rdept=mysqli_fetch_array($qdept)){
		if(md5($rdept['fld_id'])==$deptId){
			$fld_d = $rdept['fld_id'];
			$delusername = $rdept['fld_emailadd'];
			$qept = mysqli_query($con,"Delete from tbl_departmentuser where fld_id='$fld_d'");
			
			$qept = mysqli_query($con,"Delete from tbl_users where fld_email='$delusername'");
		$err = 4;
		}
	 }
		
	}
	if($deptact=="Inactive"){
		$stat = "Inactive";
		$qdept = mysqli_query($con,"select * from tbl_departmentuser");
	while($rdept=mysqli_fetch_array($qdept)){
		if(md5($rdept['fld_id'])==$deptId){
			//echo md5($rdept['fld_id']) ."== " . $deptId ."<br/>";
			$fld_id = $rdept['fld_id'];
			$fldemail = $rdept['fld_emailadd'];
			$qt = mysqli_query($con,"UPDATE tbl_departmentuser SET fld_accountstatus='$stat' where fld_id='$fld_id'");
		$q =mysqli_query($con,"UPDATE tbl_users SET fld_userstatus='$stat' where fld_email='$fldemail'");
		}
	 }
		
		$err = 5;
	}
	if($deptact=="Active"){
		$stat = "Active";
		$qdept = mysqli_query($con,"select * from tbl_departmentuser");
	while($rdept=mysqli_fetch_array($qdept)){
		if(md5($rdept['fld_id'])==$deptId){
			$fld_id = $rdept['fld_id'];
			$fldemail = $rdept['fld_emailadd'];
			$qt = mysqli_query($con,"UPDATE tbl_departmentuser SET fld_accountstatus='$stat' where fld_id='$fld_id'");
		$q = mysqli_query($con,"UPDATE tbl_users SET fld_userstatus='$stat' where fld_email='$fldemail'");
			//echo $fld_id . ' id ' . $fldemail . ' awd awd';
		}
	 }
	// echo $fld_id . ' id ' . $fldemail . ' awd awd';
		
		$err = 6;
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
                                <h1><i class="fa big-icon fa-users"></i> Department Users</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">

                                <div class="row">
								<form method="POST" id="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
								
                                    <div class="col-lg-4">
                                        <div class="basic-login-inner"><br><br>
                                            <h3>Create New Department User</h3><br>
											<input type="hidden" name="fld_oldemail" value="<?php echo $fldoldemail;?>">
											<input type="hidden" name="fld_idtxt" value="<?php echo $fldidd;?>">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px"><i class="fa big-icon fa-user"></i> User Information</label>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px">Department
                                                            Code</label>
                                                        <div class="col-lg-12">
														<select class="form-control" name="fld_deptcode" required>
														  <?php
														   echo $flddeptcode;
														    $q = mysqli_query($con,"select * from tbl_department order by fld_id");
															while($r=mysqli_fetch_array($q)){
															?>
															<option value="<?php echo $r['fld_deptcode'];?>"><?php echo $r['fld_deptdesc'];?></option>
															<?php															
															}
														  ?>
														</select>
                                                           <!-- <input type="text" class="form-control"
                                                                placeholder="ex. DPMT-101-21" />-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px">Full
                                                            Name</label>
                                                        <div class="col-lg-12">
                                                            <input type="text" class="form-control" name="fld_fullname" value="<?php echo $fldfullname; ?>"
                                                                placeholder="ex. John Doe" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px">Designation</label>
                                                        <div class="col-lg-12">
														<select class="form-control" name="fld_desigcode" required>
														  <?php
														  echo $flddesigcode;
														    $q = mysqli_query($con,"select * from tbl_designation order by fld_id");
															while($r=mysqli_fetch_array($q)){
															?>
															<option value="<?php echo $r['fld_desigcode'];?>"><?php echo $r['fld_desigdesc'];?></option>
															<?php															
															}
														  ?>
														</select>
                                                          <!--  <input type="text" class="form-control"
                                                                placeholder="ex. Designation1" />-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px">Profile</label>
                                                        <div class="col-lg-12">
                                                            <input type="file" name="file"class="form-control" accept="image/*"  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px"><i class="fa big-icon fa-lock"></i> Account Information</label>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px">Email</label>
                                                        <div class="col-lg-12">
                                                            <input type="email" class="form-control" name="fld_username" value="<?php echo $fldusername; ?>"placeholder="John"required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px">Password</label>
                                                        <div class="col-lg-12">
                                                            <input type="password" class="form-control" name="fld_password" required />
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
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                            data-show-export="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>#</th>
                                                    <th>Department Code</th>
                                                    <th>Profile</th>
                                                    <th>Full Name</th>
                                                    <th>Designation</th>
                                                    <th>Account Status</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php 
											$ctr=1;
											 $q = mysqli_query($con,"select * from tbl_departmentuser order by fld_id");
											 while($r=mysqli_fetch_array($q)){
												 $afld_id=$r['fld_id'];
											  echo "<tr>";	 
											?>
											 <td><?php echo $ctr;?></td>
											 <td><?php echo $r['fld_deptcode'];?></td>
											 <td><img src="../img/<?php echo $r['fld_profilepic'];?>" width="30"></td>
											 <td><?php echo $r['fld_fullname'];?></td>
											 <td><?php echo $r['fld_desigcode'];?></td>
											 <td><?php if($r['fld_accountstatus']=="Active"){
											?>
											<div class="btn-group project-list-ad">
                                                          
															<a href="javascript:;" onclick="changestatus('<?php echo md5($afld_id); ?>', 'Inactive');return false;" class="btn btn-white btn-xs"> Active</a>
                                                        </div>
											<?php											
											 }
											 else{
												 ?>
											<div class="btn-group project-list-ad-rd">
                                                            <a href="javascript:;" onclick="changestatus('<?php echo md5($afld_id); ?>', 'Active');return false;" class="btn btn-white btn-xs"> Inactive</a>
                                                        </div>
												 <?php
											 }
											 
											 ?></td>
											 <td><div class="btn-group project-list-ad">
                                                            <a href="javascript:;" onclick="changestatus('<?php echo md5($afld_id); ?>', 'edit');return false;" class="btn btn-white btn-xs"><i
                                                                    class="fa fa-pencil"></i> Edit</a>
                                                        </div>
                                                        <div class="btn-group project-list-ad-rd">
                                                            <a href="javascript:;" onclick="changestatus('<?php echo md5($afld_id); ?>', 'delete');return false;" class="btn btn-white btn-xs"><i
                                                                    class="fa fa-trash"></i> Delete</a>
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
	if(status=="Active"){
		txt = "User can login again";
	} 
	if(status=="Inactive"){
	txt = "User can not login";	
	}
Swal.fire({
  title: 'Are you sure?',
  text: txt,
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, set to '+ status +'!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = 'department-user.php?action='+ status +'&deptId='+userId;
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
                text: 'Email already Exist!'
            });
		
	}
	if(<?php echo $err; ?> == 2){
			Swal.fire(
  'Saved',
  'The New Department User has been Added!',
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
	if(<?php echo $err; ?> == 4){
		Swal.fire(
  'Deleted!',
  'The Department User has been Deleted!',
  'success'
);
		
	}
	if(<?php echo $err; ?> == 5){
		Swal.fire(
  'Inactivate!',
  'The User account has been set to Inactive!',
  'success'
);
		
	}
	if(<?php echo $err; ?> == 6){
		Swal.fire(
  'Active!',
  'The User account has been set to Active!',
  'success'
);
		
	}
    </script>
</html>