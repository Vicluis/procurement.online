<div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header" style="padding:0px !important;">
                    <a href="#"><div ="imgcontainer" style="width: auto;min-height: 100px;max-height: 100px;"><img src="../img/<?php echo $_SESSION['userprofile'];?>" alt="" style="max-width: 100%;height: 100px;"/></div>
                    </a>
                    <h3><?php echo mb_strimwidth($_SESSION['useremail'], 0, 15, "...");?></h3>
                    <p><?php echo $_SESSION['usertype']; ?></p>
                    
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="index.php" ><i class="fa big-icon fa-tachometer"></i> <span class="mini-dn">Dashboard</span> </span></a>
                        </li>
                        <li class="nav-item">
                            <a href="department.php" ><i class="fa big-icon fa-building"></i> <span class="mini-dn">Department</span> </span></a>
                        </li>
                        <li class="nav-item">
                            <a href="category.php" ><i class="fa big-icon fa-windows"></i> <span class="mini-dn">LPO Category</span> </span></a>
                        </li>
                        <li class="nav-item">
                            <a href="department-user.php" ><i class="fa big-icon fa-users"></i> <span class="mini-dn">Department User</span> </span></a>
                        </li>
                        <li class="nav-item">
                            <a href="approver-user.php" ><i class="fa big-icon fa-user"></i> <span class="mini-dn">Approver User</span> </span></a>
                        </li>
						<li class="nav-item">
                            <a href="designation.php" ><i class="fa big-icon fa-users"></i> <span class="mini-dn">Designation</span> </span></a>
                        </li>
                        <li class="nav-item">
                            <a href="lpo.php" ><i class="fa big-icon fa-folder"></i> <span class="mini-dn">LPO Files</span> </span></a>
                        </li>
                        <!--<li class="nav-item">
                            <a href="comments.php" ><i class="fa big-icon fa-comment"></i> <span class="mini-dn">Comments</span> </span></a>
                        </li>
                        <li class="nav-item">
                            <a href="settings.php" ><i class="fa big-icon fa-cog"></i> <span class="mini-dn">Settings</span> </span></a>
                        </li>-->
                        <li class="nav-item">
                            <a href="department-report.php" ><i class="fa big-icon fa-bar-chart"></i> <span class="mini-dn">Department Reports</span> </span></a>
                        </li>
                        <li class="nav-item">
                            <a href="status-report.php" ><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Status Reports</span> </span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
