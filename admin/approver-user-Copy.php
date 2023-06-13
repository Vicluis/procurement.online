<!doctype html>
<html class="no-js" lang="en">

<?php 
include('../connection.php');
include ('includes/header.php'); 
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
                                    <li><span class="bread-blod">Approver User</span>
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
                                    <li><span class="bread-blod">Approver User</span>
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
                                <h1><i class="fa big-icon fa-user"></i> Approver Users</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="basic-login-inner"><br><br>
                                            <h3>Create New Approver User</h3><br>
                                            <form action="#">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px"><i class="fa big-icon fa-user"></i> User Information</label>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px">Full
                                                            Name</label>
                                                        <div class="col-lg-12">
                                                            <input type="text" class="form-control"
                                                                placeholder="ex. John Doe" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px">Designation</label>
                                                        <div class="col-lg-12">
                                                            <input type="text" class="form-control"
                                                                placeholder="ex. Designation1" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px">Profile</label>
                                                        <div class="col-lg-12">
                                                            <input type="file" class="form-control"/>
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
                                                        <label style="float:left;padding-left:15px">Username</label>
                                                        <div class="col-lg-12">
                                                            <input type="tet" class="form-control" placeholder="John"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px">Password</label>
                                                        <div class="col-lg-12">
                                                            <input type="password" class="form-control" placeholder="**********"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="btn-group project-list-ad">
                                                                <a href="#" class="btn btn-md btn-block"><i
                                                                        class="fa fa-paper-plane"></i> Submit</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                            data-show-export="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th>Profile</th>
                                                    <th>Full Name</th>
                                                    <th>Designation</th>
                                                    <th>Account Status</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td><img src="../img/5.jpg" alt="" width="30"/></td>
                                                    <td>Cedric Lee</td>
                                                    <td>Designation 5</td>
                                                    <td><div class="btn-group project-list-ad-rd">
                                                            <button class="btn btn-white btn-xs">Inactive</button>
                                                        </div></td>
                                                        <td>
                                                        <div class="btn-group project-list-ad">
                                                            <a href="#" class="btn btn-white btn-xs"><i
                                                                    class="fa fa-pencil"></i> Edit</a>
                                                        </div>
                                                        <div class="btn-group project-list-ad-rd">
                                                            <a href="#" class="btn btn-white btn-xs"><i
                                                                    class="fa fa-trash"></i> Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><img src="../img/4.jpg" alt="" width="30"/></td>
                                                    <td>Charde Marshall</td>
                                                    <td>Designation 1</td>
                                                    <td><div class="btn-group project-list-ad">
                                                            <button class="btn btn-white btn-xs">Active</button>
                                                        </div></td>
                                                        <td>
                                                        <div class="btn-group project-list-ad">
                                                            <a href="#" class="btn btn-white btn-xs"><i
                                                                    class="fa fa-pencil"></i> Edit</a>
                                                        </div>
                                                        <div class="btn-group project-list-ad-rd">
                                                            <a href="#" class="btn btn-white btn-xs"><i
                                                                    class="fa fa-trash"></i> Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><img src="../img/2.jpg" alt="" width="30"/></td>
                                                    <td>Ashton Cox</td>
                                                    <td>Designation 2</td>
                                                    <td><div class="btn-group project-list-ad">
                                                            <button class="btn btn-white btn-xs">Active</button>
                                                        </div></td>
                                                        <td>
                                                        <div class="btn-group project-list-ad">
                                                            <a href="#" class="btn btn-white btn-xs"><i
                                                                    class="fa fa-pencil"></i> Edit</a>
                                                        </div>
                                                        <div class="btn-group project-list-ad-rd">
                                                            <a href="#" class="btn btn-white btn-xs"><i
                                                                    class="fa fa-trash"></i> Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><img src="../img/3.jpg" alt="" width="30"/></td>
                                                    <td>William Smith</td>
                                                    <td>Designation 6</td>
                                                    <td><div class="btn-group project-list-ad-rd">
                                                            <button class="btn btn-white btn-xs">Inactive</button>
                                                        </div></td>
                                                        <td>
                                                        <div class="btn-group project-list-ad">
                                                            <a href="#" class="btn btn-white btn-xs"><i
                                                                    class="fa fa-pencil"></i> Edit</a>
                                                        </div>
                                                        <div class="btn-group project-list-ad-rd">
                                                            <a href="#" class="btn btn-white btn-xs"><i
                                                                    class="fa fa-trash"></i> Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><img src="../img/1.jpg" alt="" width="30"/></td>
                                                    <td>John Kelly</td>
                                                    <td>Designation 4</td>
                                                    <td><div class="btn-group project-list-ad">
                                                            <button class="btn btn-white btn-xs">Active</button>
                                                        </div></td>
                                                        <td>
                                                        <div class="btn-group project-list-ad">
                                                            <a href="#" class="btn btn-white btn-xs"><i
                                                                    class="fa fa-pencil"></i> Edit</a>
                                                        </div>
                                                        <div class="btn-group project-list-ad-rd">
                                                            <a href="#" class="btn btn-white btn-xs"><i
                                                                    class="fa fa-trash"></i> Delete</a>
                                                        </div>
                                                    </td>
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