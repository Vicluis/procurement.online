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
                                <div class="breadcome-heading">
                                    <form role="search" class="">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
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
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th>LPO Category</th>
                                                    <th>Control No.</th>
                                                    <th>File Name</th>
                                                    <th>Size</th>
                                                    <th>Type</th>
                                                    <th>Date Uploaded</th>
                                                    <th>Download</th>
                                                    <th>Department</th>
                                                    <th>Status</th>
                                                    <th>Remarks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>Category 1</td>
                                                    <td>CTRL-101-21</td>
                                                    <td>Sample.docx</td>
                                                    <td>2.3mb</td>
                                                    <td><img src="../img/docx.png" alt="" width="30"/></td>
                                                    <td>Nov 3, 2021</td>
                                                    <td><i class="fa big-icon fa-download"></i></td>
                                                    <td>Department1</td>
                                                    <td>
                                                        <div class="btn-group project-list-ad-rd">
                                                            <button class="btn btn-white btn-xs">pending</button>
                                                        </div>
                                                    </td>
                                                    <td>Remarks</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Category 5</td>
                                                    <td>CTRL-456-21</td>
                                                    <td>Myfiles.pptx</td>
                                                    <td>2.6mb</td>
                                                    <td><img src="../img/pptx.png" alt="" width="30"/></td>
                                                    <td>Nov 4, 2021</td>
                                                    <td><i class="fa big-icon fa-download"></i></td>
                                                    <td>Department7</td>
                                                    <td>
                                                        <div class="btn-group project-list-ad">
                                                            <button class="btn btn-white btn-xs">approved</button>
                                                        </div>
                                                    </td>
                                                    <td>Remarks</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Category 2</td>
                                                    <td>CTRL-456-21</td>
                                                    <td>Documentaion.docx</td>
                                                    <td>1.8mb</td>
                                                    <td><img src="../img/docx.png" alt="" width="30"/></td>
                                                    <td>Nov 7, 2021</td>
                                                    <td><i class="fa big-icon fa-download"></i></td>
                                                    <td>Department4</td>
                                                    <td>
                                                        <div class="btn-group project-list-ad-bl">
                                                            <button class="btn btn-white btn-xs">for review</button>
                                                        </div>
                                                    </td>
                                                    <td>Remarks</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Category 3</td>
                                                    <td>CTRL-343-21</td>
                                                    <td>Myfiles.xlx</td>
                                                    <td>128kb</td>
                                                    <td><img src="../img/xls.png" alt="" width="30"/></td>
                                                    <td>Nov 7, 2021</td>
                                                    <td><i class="fa big-icon fa-download"></i></td>
                                                    <td>Department2</td>
                                                    <td>
                                                        <div class="btn-group project-list-ad">
                                                            <button class="btn btn-white btn-xs">approved</button>
                                                        </div>
                                                    </td>
                                                    <td>Remarks</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Category 3</td>
                                                    <td>CTRL-112-21</td>
                                                    <td>Mypicture.jpg</td>
                                                    <td>1mb</td>
                                                    <td><img src="../img/jpg.png" alt="" width="30"/></td>
                                                    <td>Nov 6, 2021</td>
                                                    <td><i class="fa big-icon fa-download"></i></td>
                                                    <td>Department2</td>
                                                    <td>
                                                        <div class="btn-group project-list-ad">
                                                            <button class="btn btn-white btn-xs">approved</button>
                                                        </div>
                                                    </td>
                                                    <td>Remarks</td>
                                                </tr>
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