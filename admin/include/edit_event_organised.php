<?php

if(isset($_GET['a_id'])) {
    
    $the_event_id = $_GET['a_id'];
}
     $query = "SELECT * FROM event_org WHERE event_org_id = $the_event_id " ;
     $select_event_by_id = mysqli_query($connection, $query);
                                
     while($row = mysqli_fetch_assoc($select_event_by_id)) {
                        
        $event_id = $row['event_org_id'];
        $event_description = $row['event_org_details'];
     }  

    
    
    
    

    if(isset($_POST['update_event'])) {
        
        $event_content = $_POST['event_content'];
        

        $query = "UPDATE event_org SET ";
        
        $query .= "event_org_details = '{$event_content}' ";
        $query .= "WHERE event_org_id = $event_id; ";
        
        
        $update_event_query = mysqli_query($connection, $query);
        
        if(!$update_event_query) {
            
            die("QUERY FAILED: " . mysqli_error($connection));
        }
        
        header("Location: event_organised.php");
        
    }
?> 
  
  
  <form action="" method="post" enctype="multipart/form-data">
   
<!--   enctype is used form multiple form data like chossing image file -->
    
    <div class="form-group">
        <label for="event_content">Edit Event Organised</label>
        <textarea name="event_content" id="" cols="30" rows="10" class="form-control"><?php echo $event_description; ?></textarea>
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_event" value="Update Event">
    </div>
</form>