<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="Dr. OP Verma">
    <meta name="author" content="Arjun Kumar">

    <title>Dr. OP Verma</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    
    
     <!--     top navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top text-white" role="navigation">
           <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle menu-icon" data-toggle="offcanvas" data-target="#wrapper" aria-expanded="false" aria-controls="navbar">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
               
               <a class="navbar-brand top-name" href="#" >Dr. OP Verma</a>
            </div>
            
           </div>
        </div>



    <div id="wrapper">
        
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
          
          <div class="profile sidebar-brand text-center text-muted">
                 <img src="image/profile.jpg" alt="Dr. OP Verma" class="img img-responsive center-block img-circle" width="100px">
                 
                 <div class="profile-head">
                     <h3 class="tname"><a href="index.html" class="text-muted">Dr. OP Verma</a></h3> 
                     <p class="tname">Head Of Departmant</p>
                     <p class="tname">Computer Science and Engineering</p>
                     <p class="tname">Delhi Technological University</p>
                 </div>
                  
          </div>
           
            <div class="menu-nav">
                       
               <ul class="sidebar-nav">
                    
                    <li class="top">
                        <a href="index.php" class="border fsize"><i class="fa fa-user fa-2x pull-left text-muted icon"></i>About</a>
                    </li>
                    <li>
                        <a href="index.php?p_id=research" class="fsize"><i class="fa fa-book fa-2x pull-left text-muted icon"></i>Research</a>
                    </li>
                    <li>
                        <a href="index.php?p_id=publications" class="fsize"><i class="fa fa-pencil-square-o fa-2x pull-left text-muted icon"></i>Publications</a>
                    </li>
                    <li>
                        <a href="index.php?p_id=teaching" class="fsize"><i class="fa fa-clock-o fa-2x pull-left text-muted icon"></i>Teaching</a>
                    </li>
                    <li>
                        <a href="index.php?p_id=events" class="fsize"><i class="fa fa-camera-retro fa-2x pull-left text-muted icon"></i>Events &amp; Gallery</a>
                    </li>
                    <li>
                        <a href="index.php?p_id=phdscholar" class="fsize"><i class="fa fa-graduation-cap fa-2x pull-left text-muted icon"></i>Ph.D Scholar</a>
                    </li>
                    <li class="last">
                        <a href="index.php?p_id=contact" class="fsize"><i class="fa fa-phone-square fa-2x pull-left text-muted icon"></i>Contact</a>
                    </li>
                </ul>
                
            </div>
            
            <div class="social-icons">
                <ul>
                    <li><a href="#" class="social right-border"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#" class="social right-border"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#" class="social"><i class="fa fa-linkedin fa-2x"></i></a></li>
                </ul>
            </div> 
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                
                
              <?php
                    if(isset($_GET['p_id'])) {
                        
                        $p_id = $_GET['p_id'];
                        if($p_id == 'research') {
                            include "includes/research.php";
                            
                        } else if($p_id == 'publications') {
                            include "includes/publications.php";
                            
                        } else if($p_id == 'teaching') {
                            include "includes/teaching.php";
                            
                        } else if($p_id == 'phdscholar') {
                            include "includes/phdscholar.php";
                            
                        } else if($p_id == 'events') {
                            include "includes/events.php";
                        
                        } else if($p_id == 'contact') {
                            include "includes/contact.php";
                            
                        } else {
                            include "includes/about.php";
                        }
                    } else {
                        include "includes/about.php";
                    }
                
                ?>
                
                
                
            </div><!-- container fluid end -->
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script> 
    $(".navbar-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
        
    </script>

</body>

</html>
