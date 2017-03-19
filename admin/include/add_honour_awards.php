

    <?php

    if(isset($_POST['create_honour'])) {
        
        $honour_content = $_POST['honour_content'];
        

        $query = "INSERT INTO honours(honours_description) ";
        
        $query .= "VALUES('{$honour_content}') ";
        
        
        $create_honour_query = mysqli_query($connection, $query);
        
        if(!$create_honour_query) {
            
            die("QUERY FAILED: " . mysqli_error($connection));
        }
        
        header("Location: honour_awards.php");
        
    }
?> 
  
  
  <form action="" method="post" enctype="multipart/form-data">
   
<!--   enctype is used form multiple form data like chossing image file -->
    
    <div class="form-group">
        <label for="honour_content">Add Honours And Awards</label>
        <textarea name="honour_content" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_honour" value="Add Honour">
    </div>
</form>