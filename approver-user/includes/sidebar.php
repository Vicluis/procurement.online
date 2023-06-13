<div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><div ="imgcontainer" style="width: auto;min-height: 100px;max-height: 100px;"><img src="../img/<?php echo $_SESSION['userprofile'];?>" alt="" style="max-width: 100%;height: 100px;"/></div>
                    </a>
                    <h3><?php echo mb_strimwidth($_SESSION['useremail'], 0, 12, "...");?></h3>
                    <p><?php echo $_SESSION['usertype']; ?></p>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="index.php" ><i class="fa big-icon fa-tachometer"></i> <span class="mini-dn">Dashboard</span> </span></a>
                        </li>
                        <!--<li class="nav-item">
                            <a href="files.php" ><i class="fa big-icon fa-folder-open"></i> <span class="mini-dn">Files</span> </span></a>
                        </li>-->
                        <li class="nav-item">
                            <a href="approve.php" ><i class="fa big-icon fa-thumbs-up"></i> <span class="mini-dn">Approved Files</span> </span></a>
                        </li>
                        <li class="nav-item">
                            <a href="pending.php" ><i class="fa big-icon fa-file"></i> <span class="mini-dn">Pending Files</span> </span></a>
                        </li>
                        <li class="nav-item">
                            <a href="for-review.php" ><i class="fa big-icon fa-eye"></i> <span class="mini-dn">For Review Files</span> </span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
