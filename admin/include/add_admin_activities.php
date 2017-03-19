<?php session_start();
ob_start();
?>

<?php

    if(!$_SESSION['username'] || $_SESSION['username'] == null) {
        header("Location: ../../login.php");
    }
    
    
?>
    

    <?php

    if(isset($_POST['create_activity'])) {
        
        $activity_content = $_POST['activity_content'];
        

        $query = "INSERT INTO activities(activity_description) ";
        
        $query .= "VALUES('{$activity_content}') ";
        
        
        $create_activity_query = mysqli_query($connection, $query);
        
        if(!$create_activity_query) {
            
            die("QUERY FAILED: " . mysqli_error($connection));
        }
        
        header("Location: administrative_activities.php");
        
    }
?> 
  
  
  <form action="" method="post" enctype="multipart/form-data">
   
<!--   enctype is used form multiple form data like chossing image file -->
    
    <div class="form-group">
        <label for="activity_content">Add Administrative Activity Description</label>
        <textarea name="activity_content" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_activity" value="Add Activity">
    </div>
</form>