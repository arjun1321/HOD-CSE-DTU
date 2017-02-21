<?php

if(isset($_GET['a_id'])) {
    
    $the_paper_id = $_GET['a_id'];
}
     $query = "SELECT * FROM papers WHERE paper_id = $the_paper_id " ;
     $select_paper_by_id = mysqli_query($connection, $query);
                                
     while($row = mysqli_fetch_assoc($select_paper_by_id)) {
                        
        $paper_id = $row['paper_id'];
        $paper_title = $row['paper_title'];
        $paper_author = $row['paper_author'];
        $paper_journal = $row['paper_journal'];
        $paper_link = $row['paper_link'];
        $paper_type = $row['paper_type'];
        $paper_date = $row['paper_date'];
        $paper_abstract = $row['paper_abstract'];
     }  

  
?> 
  
  
  <?php

    if(isset($_POST['update_publication'])) {
        
        $paper_title = $_POST['paper_title'];
        $paper_author = $_POST['paper_author'];
        $paper_journal = $_POST['paper_journal'];
        $paper_link = $_POST['paper_link'];
        $paper_type = $_POST['paper_type'];
        $paper_date = $_POST['paper_date'];
        $paper_abstract = $_POST['paper_abstract'];
        

        $query = "UPDATE papers SET ";
        
        $query .= "paper_title = '{$paper_title}', ";
        $query .= "paper_author = '{$paper_author}', ";
        $query .= "paper_journal = '{$paper_journal}', ";
        $query .= "paper_link = '{$paper_link}', ";
        $query .= "paper_type = '{$paper_type}', ";
        $query .= "paper_date = '{$paper_date}', ";
        $query .= "paper_abstract = '{$paper_abstract}' ";
        $query .= "WHERE paper_id = $the_paper_id; ";
        
        $update_paper_query = mysqli_query($connection, $query);
        
        if(!$update_paper_query) {
            
            die("QUERY FAILED: " . mysqli_error($connection));
        }
        
        header("Location: publications.php");
        
    }
?> 
  
  
  <form action="" method="post" enctype="multipart/form-data">
   
<!--   enctype is used form multiple form data like chossing image file -->
    <h3>Edit Publication</h3>
    <div class="form-group">
        <label for="paper_title">Paper Title</label>
        <input type="text" value="<?php echo $paper_title; ?>" class="form-control" name="paper_title">
    </div>
    
    <div class="form-group">
        <label for="paper_author">Paper Author</label>
        <input type="text" value="<?php echo $paper_author; ?>" class="form-control" name="paper_author">
    </div>
    
    <div class="form-group">
        <label for="paper_journal">Paper Journal</label>
        <input type="text" value="<?php echo $paper_journal; ?>" class="form-control" name="paper_journal">
    </div>
    
    <div class="form-group">
        <label for="paper_link">Paper Link</label>
        <input type="text" value="<?php echo $paper_link; ?>" class="form-control" name="paper_link">
    </div>
    
    <div class="form-group">
        <select name="paper_type" id="">
            <option value='<?php echo $paper_type; ?>'><?php echo $paper_type; ?></option>
            
            <?php
            
                if($paper_type == 'journal') {
                    echo "<option value='conference'>Conference</option>";
                } else {
                    echo "<option value='journal'>Journal</option>";
                }
            ?>
        </select>
    </div>
    
    <div class="form-group">
        <label for="paper_date">Paper Date</label>
        <input type="text" value="<?php echo $paper_date; ?>" class="form-control" name="paper_date">
    </div>
    
    <div class="form-group">
        <label for="paper_abstract">Paper Abstract</label>
        <input type="text" value="<?php echo $paper_abstract; ?>" class="form-control" name="paper_abstract">
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_publication" value="Update Publication">
    </div>
</form>