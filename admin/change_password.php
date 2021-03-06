<?php include "../includes/db.php"; ?>
<?php session_start();
        ob_start();
?>

<?php session_start();?>

<?php

    if(!$_SESSION['username'] || $_SESSION['username'] == null) {
        header("Location: ../login.php");
    }
    
    
?>

<?php

                $db_username = null;
                $db_user_password = null;
        if(isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            
            $query = "SELECT * FROM login WHERE username = '{$username}' ";
            $select_user_query = mysqli_query($connection, $query);
            if(!$select_user_query) {
                die("QUERY FAILED " . mysqli_error($connection));
            }
            
            while($row = mysqli_fetch_assoc($select_user_query)) {
                $db_userid = $row['userid'];
                $db_username = $row['username'];
                $db_user_password = $row['password'];
            }
            
            
        
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
                   
                <div class="row">
                    <form action="change_password.php" method="post" enctype="multipart/form-data">
   
                    <!--   enctype is used form multiple form data like chossing image file -->

                        <div class="form-group">
                            <label for="username">Username: </label>
                            <input type="text" value="<?php echo $db_username; ?>" name="username">
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Password: </label>
                            <input type="password" value="" name="password">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="change_password" value="Change Password">
                        </div>
                        
                        
                        <?php
                        
                            if(isset($_POST['change_password'])) {
                                $user_name = $_POST['username'];
                                $user_password = $_POST['password'];
                                
                                $user_name = mysqli_real_escape_string($connection, $user_name);
                                $user_password = mysqli_real_escape_string($connection, $user_password);
                                
                                $user_password_hash = password_hash($user_password, PASSWORD_DEFAULT);
                                
                                $query = "UPDATE login SET ";
                                $query .= "username = '{$user_name}', ";
                                $query .= "password = '{$user_password_hash}' ";
                                $query .= "WHERE userid = $db_userid; ";
                                
                                $change_password_query = mysqli_query($connection, $query);
                                
                                if(!$change_password_query) {
                                    die("QUERY FAILED: " . mysqli_error($connection));
                                } else {
                                    echo '<div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Password Changed.
</div>';
                                }
                                
                                
                            }
                        ?>
                        
                        
                    </form>
                    
                </div>

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
