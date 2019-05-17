<?php


include "process/auth.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hospital Management System</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a>
                    <a class="brand" href="index.php">Welcome User </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">


                        <ul class="nav pull-right">

                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                    </a></li>
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                        </i>Pharmacy </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="pharmacy/register.php"><i class="icon-hospital"></i>Add Drugs </a></li>
                                        <li><a href="pharmacy/view.php"><i class="icon-beaker"></i>View Drugs </a></li>

                                    </ul>
                                </li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            

                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#t"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Doctors </a>
                                    <ul id="t" class="collapse unstyled">
                                        <li><a href="doctor/register.php"><i class="icon-user"></i>Register </a></li>
                                        <li><a href="doctor/view.php"><i class="icon-user"></i>View Record</a></li>

                                    </ul>
                                </li>

                            </ul>


                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#tP"><i class="menu-icon icon-cog">
                                        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                        </i>Staff </a>
                                    <ul id="tP" class="collapse unstyled">
                                        <li><a href="staff/register.php"><i class="icon-user"></i>Register </a></li>
                                        <li><a href="staff/record.php"><i class="icon-user"></i>View Record</a></li>

                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="pharmacy/register.php" class="btn-box big span4"><i class=" icon-hospital"></i>
                                        <p class="text-muted">
                                           Add Drugs</p>
                                    </a><a href="pharmacy/view.php" class="btn-box big span4"><i class="icon-beaker"></i>
                                        <p class="text-muted">
                                            View Drugs</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-remove-sign"></i>
                                        <p class="text-muted">
                                            Remove</p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid">

                                    <div class="btn-box-row row-fluid">
                                        <a href="#" class="btn-box big span4"><i class=" icon-folder-open"></i>
                                            <p class="text-muted">
                                               Staff Records</p>
                                        </a><a href="#" class="btn-box big span4"><i class="icon-user"></i>
                                            <p class="text-muted">
                                                Manage</p>
                                        </a><a href="#" class="btn-box big span4"><i class="icon-medkit"></i>
                                            <p class="text-muted">
                                                Others</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="btn-box-row row-fluid">

                                    <div class="btn-box-row row-fluid">
                                        <a href="#" class="btn-box big span4"><i class=" icon-folder-open"></i>
                                            <p class="text-muted">
                                                Add Patient</p>
                                        </a><a href="#" class="btn-box big span4"><i class="icon-user"></i>
                                            <p class="text-muted">
                                                Manage Patient</p>
                                        </a><a href="#" class="btn-box big span4"><i class="icon-medkit"></i>
                                            <p class="text-muted">
                                                Doctor Report</p>
                                        </a>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; <?php echo date("Y"); ?></b> |NOU153182350. All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
