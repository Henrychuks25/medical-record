<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hospital Board</title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i>
            </a>

            <a class="brand" href="index.php">
               Hospital Board
            </a>

            <div class="nav-collapse collapse navbar-inverse-collapse">


                <ul class="nav pull-right">

                    <li class="nav-user dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="images/user.png" class="nav-avatar" />
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Your Profile</a></li>
                            <li><a href="#">Edit Profile</a></li>
                            <li><a href="#">Account Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.nav-collapse -->
        </div>
    </div><!-- /navbar-inner -->
</div><!-- /navbar -->



<div class="wrapper">
    <div class="container">
        <div class="row">



            <div class="span12">
                <div class="content">

                    <div class="module">
                        <div class="module-head">
                            <h3 class="align-center">User Registration</h3>
                        </div>
                        <div class="module-body">



                            <br />

                            <form class="form-horizontal row-fluid" method="post" action="process/register.php">
                                <div class="control-group">
                                    <label class="control-label" for="username">Username</label>
                                    <div class="controls">
                                        <input type="text" id="name" placeholder="Username" name="username" class="span8">

                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="email">Email Address</label>
                                    <div class="controls">
                                        <input type="email" id="email" placeholder="Email Address" name="email" class="span8">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="password">Password</label>
                                    <div class="controls">
                                        <input  type="text" placeholder="Password" name="password" class="span8">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="role">User Roles</label>
                                    <div class="controls">
                                        <select tabindex="1" class="span8" name="role">
                                            <option value="">Select here..</option>
                                            <option value="patient">Patient</option>
                                            <option value="pharmacy">Pharmacy</option>
                                            <option value="doctor">Doctor</option>
                                            <option value="staff">Staff</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="submit" class="btn">Submit Form</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                </div><!--/.content-->
            </div><!--/.span9-->
        </div>
    </div><!--/.container-->
</div><!--/.wrapper-->

<div class="footer">
    <div class="container">


        <b class="copyright">&copy; 2019 Edmin - EGrappler.com </b> All rights reserved.
    </div>
</div>

<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>