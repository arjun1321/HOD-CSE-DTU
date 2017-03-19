<?php include "../includes/db.php"; ?>

<?php session_start();
ob_start();
?>

<?php

    if(!$_SESSION['username'] || $_SESSION['username'] == null) {
        header("Location: ../login.php");
    }
    
    
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dr. OP Verma | Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Dr. OP Verma | Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               
                <li><a href="../index.php">Home</a></li>
                <li>
                    <a href="../includes/admin_logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
                
                
            </ul>
            
            
            <?php include "include/navigations.php" ?>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin 
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                    <br><br>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-10" style="margin-bottom: 10px;">
                        <a href="administrative_activities.php" class="btn btn-success">Administrative Activities</a>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-10" style="margin-bottom: 10px;">
                        <a href="professional_activities.php" class="btn btn-success">Professional Activities</a>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-10" style="margin-bottom: 10px;">
                        <a href="honour_awards.php" class="btn btn-success">Honours &amp; Awards</a>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-10" style="margin-bottom: 10px;">
                        <a href="event_organised.php" class="btn btn-success">Event Organised</a>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-10" style="margin-bottom: 10px;">
                        <a href="publications.php" class="btn btn-success">Publications</a>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-10" style="margin-bottom: 10px;">
                        <a href="event_gallery.php" class="btn btn-success">Events &amp; Gallery</a>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-10" style="margin-bottom: 10px;">
                        <a href="phd_scholar.php" class="btn btn-success">Ph.D Scholar</a>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-10" style="margin-bottom: 10px;">
                        <a href="change_password.php" class="btn btn-success">Change Password</a>
                    </div>
                </div>
                <br><br><br>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
