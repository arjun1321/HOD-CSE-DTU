<?php

if(isset($_GET['a_id'])) {
    
    $the_honour_id = $_GET['a_id'];
}
     $query = "SELECT * FROM honours WHERE honours_id = $the_honour_id " ;
     $select_honour_by_id = mysqli_query($connection, $query);
                                
     while($row = mysqli_fetch_assoc($select_honour_by_id)) {
                        
        $honour_id = $row['honours_id'];
        $honour_description = $row['honours_description'];
     }  

    
    
    
    

    if(isset($_POST['update_honour'])) {
        
        $honour_content = $_POST['honour_content'];
        

        $query = "UPDATE honours SET ";
        
        $query .= "honours_description = '{$honour_content}' ";
        $query .= "WHERE honours_id = $honour_id; ";
        
        
        $update_honour_query = mysqli_query($connection, $query);
        
        if(!$update_honour_query) {
            
            die("QUERY FAILED: " . mysqli_error($connection));
        }
        
        header("Location: honour_awards.php");
        
    }
?> 
  
  
  <form action="" method="post" enctype="multipart/form-data">
   
<!--   enctype is used form multiple form data like chossing image file -->
    
    <div class="form-group">
        <label for="honour_content">Edit Honours and Awards</label>
        <textarea name="honour_content" id="" cols="30" rows="10" class="form-control"><?php echo $honour_description; ?></textarea>
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_honour" value="Update honour">
    </div>
</form>