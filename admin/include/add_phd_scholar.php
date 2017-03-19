

    <?php

    if(isset($_POST['create_phd_scholar'])) {
        
        $phd_scholar_name = $_POST['phd_scholar_name'];
        $phd_scholar_project_title = $_POST['phd_scholar_project_title'];
        $phd_scholar_status = $_POST['phd_scholar_status'];
        $phd_scholar_contact = $_POST['phd_scholar_contact'];
        

        $query = "INSERT INTO phd_scholar(scholar_name, scholar_project_title, scholar_status, scholar_contact) ";
        
        $query .= "VALUES('{$phd_scholar_name}', '{$phd_scholar_project_title}', '{$phd_scholar_status}', '{$phd_scholar_contact}') ";
        
        
        $create_phd_scholar_query = mysqli_query($connection, $query);
        
        if(!$create_phd_scholar_query) {
            
            die("QUERY FAILED: " . mysqli_error($connection));
        }
        
        header("Location: phd_scholar.php");
        
    }
?> 
  
  
  <form action="" method="post" enctype="multipart/form-data">
   
<!--   enctype is used form multiple form data like chossing image file -->
    <h3>Add Ph.D Scholar</h3>
    <div class="form-group">
        <label for="phd_scholar_name">Ph.D Scholar Name</label>
        <input type="text" class="form-control" name="phd_scholar_name">
    </div>
    
    <div class="form-group">
        <label for="phd_scholar_project_title">Ph.D Scholar Project Title</label>
        <input type="text" class="form-control" name="phd_scholar_project_title">
    </div>
    
    <div class="form-group">
        <select name="phd_scholar_status" id="">
            <option value="completed">Completed</option>
            <option value="ongoing">Ongoing</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="phd_scholar_contact">Ph.D Scholar Contact</label>
        <input type="text" class="form-control" name="phd_scholar_contact">
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_phd_scholar" value="Add Ph.D Scholar">
    </div>
</form>