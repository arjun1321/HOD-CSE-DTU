<?php

    if(isset($_POST['create_event'])) {
        
        $event_content = $_POST['event_content'];
        

        $query = "INSERT INTO event_org(event_org_details) ";
        
        $query .= "VALUES('{$event_content}') ";
        
        
        $create_event_query = mysqli_query($connection, $query);
        
        if(!$create_event_query) {
            
            die("QUERY FAILED: " . mysqli_error($connection));
        }
        
        header("Location: event_organised.php");
        
    }
?> 
  
  
  <form action="" method="post" enctype="multipart/form-data">
   
<!--   enctype is used form multiple form data like chossing image file -->
    
    <div class="form-group">
        <label for="event_content">Add Event Organised</label>
        <textarea name="event_content" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_event" value="Add Event">
    </div>
</form>