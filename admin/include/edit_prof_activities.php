


<?php

if(isset($_GET['a_id'])) {
    
    $the_activity_id = $_GET['a_id'];
}
     $query = "SELECT * FROM prof_activities WHERE prof_activity_id = $the_activity_id " ;
     $select_activity_by_id = mysqli_query($connection, $query);
                                
     while($row = mysqli_fetch_assoc($select_activity_by_id)) {
                        
        $activity_id = $row['prof_activity_id'];
        $activity_description = $row['prof_activity_description'];
     }  

    
    
    
    

    if(isset($_POST['update_activity'])) {
        
        $activity_content = $_POST['activity_content'];
        

        $query = "UPDATE prof_activities SET ";
        
        $query .= "prof_activity_description = '{$activity_content}' ";
        $query .= "WHERE prof_activity_id = $activity_id; ";
        
        
        $update_activity_query = mysqli_query($connection, $query);
        
        if(!$update_activity_query) {
            
            die("QUERY FAILED: " . mysqli_error($connection));
        }
        
        header("Location: professional_activities.php");
        
    }
?> 
  
  
  <form action="" method="post" enctype="multipart/form-data">
   
<!--   enctype is used form multiple form data like chossing image file -->
    
    <div class="form-group">
        <label for="activity_content">Edit Professional Activity Description</label>
        <textarea name="activity_content" id="" cols="30" rows="10" class="form-control"><?php echo $activity_description; ?></textarea>
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_activity" value="Update Activity">
    </div>
</form>