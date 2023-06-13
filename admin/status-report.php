<!doctype html>
<html class="no-js" lang="en">

<?php 
include('../connection.php');
include 'includes/header.php'; ?>
<link rel="stylesheet" href="../css/c3.min.css">

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
                                    <li><span class="bread-blod">Status Reports</span>
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
	<?php
	//for counting
	$st= "Pending";
	 $q = mysqli_query($con,"select * from tbl_lpofiles where fld_approverfour='$st'");
	 $pendctr=mysqli_num_rows($q);
	 
	 $st= "Approved";
	 $q = mysqli_query($con,"select * from tbl_lpofiles where fld_approverfour='$st'");
	 $approvedctr=mysqli_num_rows($q);
	 
	 $st= "Waiting";
	 $q = mysqli_query($con,"select * from tbl_lpofiles where fld_approverfour='$st'");
	 $forreviewctr=mysqli_num_rows($q);
	 $forthepie="";
	 $forthepie = "['Pending'," .$pendctr ."],"; 
	 $forthepie = $forthepie."['For Review'," .$forreviewctr ."],"; 
	 $forthepie = $forthepie."['Approved'," .$approvedctr ."]"; 
	?>
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
                                    <li><span class="bread-blod">Status Reports</span>
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
                                <h1><i class="fa big-icon fa-pie-chart"></i> Status Reports</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">

                                <div class="row">
                                    <div class="col-lg-4">
                                    <table data-toggle="table">
                                            <thead>
                                                <tr>
                                                    <th>Status</th>
                                                    <th>LPOs</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Pending</td>
                                                    <td><?php echo $pendctr; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>For review</td>
                                                    <td><?php echo $forreviewctr; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Approved</td>
                                                    <td><?php echo $approvedctr; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                        <div class="col-lg-8">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Number of LPO by Status</h1>
                                    </div>
                                </div>
                                <div class="sparkline8-graph">
                                    <div id="pie"></div>
                                </div>
                            </div>
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
    <script src="../js/c3-charts/d3.min.js"></script>
    <script src="../js/c3-charts/c3.min.js"></script>
     <!--<script src="../js/c3-charts/c3-active.js"></script>-->
   <script>
   (function ($) {
 "use strict";
 
	$("#sparkline1").sparkline([34, 43, 43, 35, 44, 32, 44, 52, 25], {
        type: 'line',
        lineColor: '#17997f',
		lineWidth: 1,
		barSpacing: '100px',
        fillColor: '#03a9f4',
    });
    $("#sparkline2").sparkline([-4, -2, 2, 0, 4, 5, 6, 7], {
        type: 'bar',
        barColor: '#03a9f4',
        negBarColor: '#303030'});

    $("#sparkline3").sparkline([1, 1, 2], {
        type: 'pie',
        sliceColors: ['#03a9f4', '#303030', '#ff9999']});

    $("#sparklinedask1").sparkline([1, 3, 2], {
        type: 'pie',
		width: '80',
            height: '80',
        sliceColors: ['#03a9f4', '#303030', '#ff9999']});

    $("#sparklinedask2").sparkline([1, 1, 2], {
        type: 'pie',
		width: '80',
            height: '80',
        sliceColors: ['#03a9f4', '#303030', '#ff9999']});

    $("#sparkline4").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
        type: 'line',
        lineColor: '#03a9f4',
        fillColor: '#ffffff',
    });

    $("#sparkline5").sparkline([1, 1, 0, 1, 1, 1, 1, 1, -1, -2, -3, -4], {
        type: 'tristate',
        posBarColor: '#03a9f4',
        negBarColor: '#303030'});


    $("#sparkline6").sparkline([4, 6, 7, 7, 4, 3, 2, 1, 4, 4, 5, 6, 3, 4, 5, 8, 7, 6, 9, 3, 2, 4, 1, 5, 6, 4, 3, 7, ], {
        type: 'discrete',
        lineColor: '#03a9f4'});

    $("#sparkline7").sparkline([52, 12, 44], {
        type: 'pie',
        height: '150px',
        sliceColors: ['#03a9f4', '#303030', '#e4f0fb']});

    $("#sparkline8").sparkline([5, 6, 7, 2, 0, 4, 2, 4, 5, 7, 2, 4, 12, 14, 4, 2, 14, 12, 7], {
        type: 'bar',
        barWidth: 8,
        height: '150px',
        barColor: '#03a9f4',
        negBarColor: '#303030'});

    $("#sparkline9").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
        type: 'line',
        lineWidth: 1,
        width: '150px',
        height: '150px',
        lineColor: '#999',
        fillColor: '#03a9f4',
    });
	
	 $('.sparklineadminpro').sparkline([ [1], [2], [3], [4, 2], [3], [5, 3] ], { type: 'bar', barColor: '#03a9f4',
        negBarColor: '#303030',});
	
	
	

	var sparklineCharts = function(){
		 $("#sparkline22").sparkline([34, 43, 43, 35, 44, 32, 44, 52], {
			 type: 'line',
			 width: '100%',
			 height: '60',
			 lineColor: '#1ab394',
			 fillColor: "#ebebeb"
		 });

		 $("#sparkline23").sparkline([24, 43, 43, 55, 44, 62, 44, 72], {
			 type: 'line',
			 width: '100%',
			 height: '60',
			 lineColor: '#1ab394',
			 fillColor: "#ebebeb"
		 });

		 $("#sparkline24").sparkline([74, 43, 23, 55, 54, 32, 24, 12], {
			 type: 'line',
			 width: '100%',
			 height: '60',
			 lineColor: '#ed5565',
			 fillColor: "#ebebeb"
		 });

		 $("#sparkline25").sparkline([24, 43, 33, 55, 64, 72, 44, 22], {
			 type: 'line',
			 width: '100%',
			 height: '60',
			 lineColor: '#ed5565',
			 fillColor: "#ebebeb"
		 });

		 $("#sparkline51").sparkline([1, 4], {
			 type: 'pie',
			 height: '140',
			 sliceColors: ['#1ab394', '#ebebeb']
		 });

		 $("#sparkline52").sparkline([5, 3], {
			 type: 'pie',
			 height: '140',
			 sliceColors: ['#1ab394', '#ebebeb']
		 });

		 $("#sparkline53").sparkline([2, 2], {
			 type: 'pie',
			 height: '140',
			 sliceColors: ['#ed5565', '#ebebeb']
		 });

		 $("#sparkline54").sparkline([2, 3], {
			 type: 'pie',
			 height: '140',
			 sliceColors: ['#ed5565', '#ebebeb']
		 });
	};

	var sparkResize;

	$(window).resize(function(e) {
		clearTimeout(sparkResize);
		sparkResize = setTimeout(sparklineCharts, 500);
	});

	sparklineCharts();



	
	
})(jQuery); 
   </script>
   <script>
   (function ($) {
 "use strict";
  

            c3.generate({
                bindto: '#lineChart',
                data:{
                    columns: [
                        ['data1', 30, 200, 100, 400, 150, 250],
                        ['data2', 50, 20, 10, 40, 15, 25]
                    ],
                    colors:{
                        data1: '#03a9f4',
                        data2: '#303030'
                    }
                }
            });

            c3.generate({
                bindto: '#slineChart',
                data:{
                    columns: [
                        ['data1', 30, 200, 100, 400, 150, 250],
                        ['data2', 130, 100, 140, 200, 150, 50]
                    ],
                    colors:{
                        data1: '#03a9f4',
                        data2: '#303030'
                    },
                    type: 'spline'
                }
            });

            c3.generate({
                bindto: '#scatter',
                data:{
                    xs:{
                        data1: 'data1_x',
                        data2: 'data2_x'
                    },
                    columns: [
                        ["data1_x", 3.2, 3.2, 3.1, 2.3, 2.8, 2.8, 3.3, 2.4, 2.9, 2.7, 2.0, 3.0, 2.2, 2.9, 2.9, 3.1, 3.0, 2.7, 2.2, 2.5, 3.2, 2.8, 2.5, 2.8, 2.9, 3.0, 2.8, 3.0, 2.9, 2.6, 2.4, 2.4, 2.7, 2.7, 3.0, 3.4, 3.1, 2.3, 3.0, 2.5, 2.6, 3.0, 2.6, 2.3, 2.7, 3.0, 2.9, 2.9, 2.5, 2.8],
                        ["data2_x", 3.3, 2.7, 3.0, 2.9, 3.0, 3.0, 2.5, 2.9, 2.5, 3.6, 3.2, 2.7, 3.0, 2.5, 2.8, 3.2, 3.0, 3.8, 2.6, 2.2, 3.2, 2.8, 2.8, 2.7, 3.3, 3.2, 2.8, 3.0, 2.8, 3.0, 2.8, 3.8, 2.8, 2.8, 2.6, 3.0, 3.4, 3.1, 3.0, 3.1, 3.1, 3.1, 2.7, 3.2, 3.3, 3.0, 2.5, 3.0, 3.4, 3.0],
                        ["data1", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
                        ["data2", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8]
                    ],
                    colors:{
                        data1: '#03a9f4',
                        data2: '#303030'
                    },
                    type: 'scatter'
                }
            });

            c3.generate({
                bindto: '#stocked',
                data:{
                    columns: [
					   <?php echo $datacolumn;?>
                        //['LPOs', 430],
                        //['LPs', 140]
                    ],
                    colors:{
                        data1: '#03a9f4'
                    },
                    type: 'bar',
                    groups: [
					    <?php echo $groups; ?>
                        //['LPOs','Lps']
                    ]
                },
				legend: {
  		position: 'bottom'
		}
            });

            c3.generate({
                bindto: '#gauge',
                data:{
                    columns: [
                        ['data', 91.4]
                    ],

                    type: 'gauge'
                },
                color:{
                    pattern: ['#03a9f4', '#303030']

                }
            });

            c3.generate({
                bindto: '#pie',
                data:{
                    columns: [
                        <?php echo $forthepie; ?>
                    ],
                    colors:{
                        data1: '#03a9f4',
                        data2: '#303030',
                        data3: '#ef0032'
                    },
                    type : 'pie'
                }
            });



})(jQuery); 
   </script>
</body>

</html>