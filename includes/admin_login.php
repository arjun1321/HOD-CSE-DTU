<?php include "db.php";
        ob_start();
?>

<?php session_start();?>

<?php

    if(isset($_POST['login'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // To prevent form sql injection
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
        
        $query = "SELECT * FROM login WHERE username = '{$username}' ";
        $select_user_query = mysqli_query($connection, $query);
        if(!$select_user_query) {
            die("QUERY FAILED " . mysqli_error($connection));
        }
        $row = mysqli_fetch_array($select_user_query);
        
        if($row) {
                
            $db_user_id = $row['userid'];
            $db_username = $row['username'];
            $db_user_password = $row['password'];

        }
  
        
        if($username !== $db_username && $password !== $db_user_password) {
            header("Location: ../login.php");
            
        } else if($username == $db_username && $password == $db_user_password) {
            
            $_SESSION['username'] = $db_username;
            echo "index";
            header("Location: ../admin/index.php");
            
        } else {
            
            header("Location: ../login.php");
            
        }
        
        
    }
    
    
?>