
    

    <?php

    if(isset($_POST['create_publication'])) {
        
        $paper_title = $_POST['paper_title'];
//        $paper_author = $_POST['paper_author'];
//        $paper_journal = $_POST['paper_journal'];
        $paper_link = $_POST['paper_link'];
        $paper_type = $_POST['paper_type'];
//        $paper_date = $_POST['paper_date'];
        $paper_abstract = $_POST['paper_abstract'];
        

        $query = "INSERT INTO papers(paper_title, paper_link, paper_type, paper_abstract) ";
        
        $query .= "VALUES('{$paper_title}', '{$paper_link}', '{$paper_type}', '{$paper_abstract}') ";
        
        
        $create_paper_query = mysqli_query($connection, $query);
        
        if(!$create_paper_query) {
            
            die("QUERY FAILED: " . mysqli_error($connection));
        }
        
        header("Location: publications.php");
        
    }
?> 
  
  
  <form action="" method="post" enctype="multipart/form-data">
   
<!--   enctype is used form multiple form data like chossing image file -->
    <h3>Add Publication</h3>
    <div class="form-group">
        <label for="paper_title">Paper Title</label>
        <input type="text" class="form-control" name="paper_title">
    </div>
    
<!--
    <div class="form-group">
        <label for="paper_author">Paper Author</label>
        <input type="text" class="form-control" name="paper_author">
    </div>
-->
    
<!--
    <div class="form-group">
        <label for="paper_journal">Paper Journal</label>
        <input type="text" class="form-control" name="paper_journal">
    </div>
-->
    
    <div class="form-group">
        <label for="paper_link">Paper Link</label>
        <input type="text" class="form-control" name="paper_link">
    </div>
    
    <div class="form-group">
        <select name="paper_type" id="">
            <option value="journal">Journal</option>
            <option value="conference">Conference</option>
        </select>
    </div>
    
<!--
    <div class="form-group">
        <label for="paper_date">Paper Date</label>
        <input type="text" class="form-control" name="paper_date">
    </div>
-->
    
    <div class="form-group">
        <label for="paper_abstract">Paper Abstract</label>
        <textarea class="form-control" name="paper_abstract" rows="10"></textarea>
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_publication" value="Add Publication">
    </div>
</form>