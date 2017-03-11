<?php

if(isset($_GET['a_id'])) {
    
    $the_phd_scholar_id = $_GET['a_id'];
}
     $query = "SELECT * FROM phd_scholar WHERE scholar_id = $the_phd_scholar_id " ;
     $select_scholar_by_id = mysqli_query($connection, $query);
                                
     while($row = mysqli_fetch_assoc($select_scholar_by_id)) {
                        
        $scholar_id = $row['scholar_id'];
        $scholar_name = $row['scholar_name'];
        $scholar_project_title = $row['scholar_project_title'];
        $scholar_status = $row['scholar_status'];
        $scholar_contact = $row['scholar_contact'];
     }  

  
?> 
  
  
  <?php

    if(isset($_POST['update_scholar'])) {
        
        $phd_scholar_name = $_POST['phd_scholar_name'];
        $phd_scholar_project_title = $_POST['phd_scholar_project_title'];
        $phd_scholar_status = $_POST['phd_scholar_status'];
        $phd_scholar_contact = $_POST['phd_scholar_contact'];
        

        $query = "UPDATE phd_scholar SET ";
        
        $query .= "scholar_name = '{$phd_scholar_name}', ";
        $query .= "scholar_project_title = '{$phd_scholar_project_title}', ";
        $query .= "scholar_status = '{$phd_scholar_status}', ";
        $query .= "scholar_contact = '{$phd_scholar_contact}' ";
        $query .= "WHERE scholar_id = $the_phd_scholar_id; ";
        
        $update_scholar_query = mysqli_query($connection, $query);
        
        if(!$update_scholar_query) {
            
            die("QUERY FAILED: " . mysqli_error($connection));
        }
        
        header("Location: phd_scholar.php");
        
    }
?> 
  
  
  <form action="" method="post" enctype="multipart/form-data">
   
<!--   enctype is used form multiple form data like chossing image file -->
    <h3>Edit Ph.D Scholar</h3>
    <div class="form-group">
        <label for="phd_scholar_name">Ph.D Scholar Name</label>
        <input type="text" value="<?php echo $scholar_name; ?>" class="form-control" name="phd_scholar_name">
    </div>
    
    <div class="form-group">
        <label for="phd_scholar_project_title">Ph.D Scholar Project Title</label>
        <input type="text" value="<?php echo $scholar_project_title; ?>" class="form-control" name="phd_scholar_project_title">
    </div>
    
    <div class="form-group">
        <select name="phd_scholar_status" id="">
            <option value='<?php echo $scholar_status; ?>'><?php echo $scholar_status; ?></option>
            
            <?php
            
                if($scholar_status == 'completed') {
                    echo "<option value='ongoing'>Ongoing</option>";
                } else {
                    echo "<option value='completed'>Completed</option>";
                }
            ?>
        </select>
    </div>
    
    <div class="form-group">
        <label for="phd_scholar_contact">Ph.D Scholar Contact</label>
        <input type="text" value="<?php echo $scholar_contact; ?>" class="form-control" name="phd_scholar_contact">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_scholar" value="Update Scholar Details">
    </div>
</form>