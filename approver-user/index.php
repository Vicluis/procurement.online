<!doctype html>
<html class="no-js" lang="en">

<?php include 'includes/header.php' ?>
<link rel="stylesheet" href="../css/c3.min.css">

<body class="materialdesign"><div class="wrapper-pro">

    <?php include '../connection.php' ?>
    <?php include 'includes/sidebar.php' ?>
    <?php include 'includes/topbar.php' ?>

    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
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
                                    <li><span class="bread-blod">Dashboard</span>
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
    <div class="breadcome-area des-none mg-b-30">
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
                                    <li><span class="bread-blod">Dashboard</span>
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
    <!-- income order visit user Start -->
	<?php
	//for approved
	$levelnya =$_SESSION['approverlevel'];
	$st="Approved";
	$id = $_SESSION['approverid'];
	//echo "pucha - " . $id . " - " . $levelnya ;
	if($levelnya=="Level 1"){
		//echo " dito";
	$q = mysqli_query($con,"select * from tbl_lpofiles where fld_approveroneid='$id' AND fld_approverone='$st'");
	}
	if($levelnya=="Level 2"){
	$q = mysqli_query($con,"select * from tbl_lpofiles where fld_approvertwoid='$id' AND fld_approvertwo='$st'");
	}
	if($levelnya=="Level 3"){
	$q = mysqli_query($con,"select * from tbl_lpofiles where fld_approverthreeid='$id' AND fld_approverthree='$st'");
	}
	if($levelnya=="Level 4"){
	$q = mysqli_query($con,"select * from tbl_lpofiles where fld_approverfourid='$id' AND fld_approverfour='$st'");
	}
	$apctrup = mysqli_num_rows($q);
	//echo $apctrup . " ilan";
	if($apctrup>0){
		$q = mysqli_query($con,"select * from tbl_lpofiles");
	    $ilanlhat = mysqli_num_rows($q);
		$total = $ilanlhat;
		$portion = $apctrup;
		$percentageapproved = ($portion / $total) * 100; // 20
	}
	else{
		$apctrup = 0;
		$percentageapproved = 0;
	}
	
	$st="Pending";
	$id = $_SESSION['approverid'];
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
	$pendctrup = mysqli_num_rows($q);
	if($pendctrup>0){
		$q = mysqli_query($con,"select * from tbl_lpofiles");
	    $ilanlhat = mysqli_num_rows($q);
		$total = $ilanlhat;
		$portion = $pendctrup;
		$percentagepending = ($portion / $total) * 100; // 20
	}
	else{
		$pendctrup = 0;
		$percentagepending = 0;
	}
	
	$st="Waiting";
	$id = $_SESSION['approverid'];
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
	$waitctrup = mysqli_num_rows($q);
	
	if($waitctrup>0){
		$q = mysqli_query($con,"select * from tbl_lpofiles");
	    $ilanlhat = mysqli_num_rows($q);
		$total = $ilanlhat;
		$portion = $waitctrup;
		$percentagewaiting = ($portion / $total) * 100; // 20
	}
	else{
		$waitctrup = 0;
		$percentagewaiting = 0;
	}
	?>
    <div class="income-order-visit-user-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>LPOs</h2>
                                <div class="main-income-phara">
                                <p><i class="fa big-icon fa-folder fa-2x"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter"><?php echo $apctrup; ?></span></h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline1"></span>
                                </div>
                            </div>
                            <div class="income-range">
                                <p>Approved LPOs</p>
                                <span class="income-percentange"><?php echo $percentageapproved ."% "; ?><i class="fa fa-thumbs-up"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>LPOs</h2>
                                <div class="main-income-phara order-cl">
                                <p><i class="fa big-icon fa-folder fa-2x"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter"><?php echo $pendctrup; ?></span></h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline6"></span>
                                </div>
                            </div>
                            <div class="income-range order-cl">
                                <p>Pending LPOs</p>
                                <span class="income-percentange"><?php echo $percentagepending ."% "; ?> <i class="fa fa-file"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>LPOs</h2>
                                <div class="main-income-phara visitor-cl">
                                <p><i class="fa big-icon fa-folder-open fa-2x"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter"><?php echo $waitctrup; ?></span></h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline2"></span>
                                </div>
                            </div>
                            <div class="income-range visitor-cl">
                                <p>For Review LPOs</p>
                                <span class="income-percentange"><?php echo $percentagewaiting ."% "; ?> <i class="fa fa-eye"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <?php include 'includes/footer.php' ?>
</body>

</html>