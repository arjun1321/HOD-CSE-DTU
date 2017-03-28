

<?php

if(isset($_GET['a_id'])) {
    
    $the_paper_id = $_GET['a_id'];
}
     $query = "SELECT * FROM papers WHERE paper_id = $the_paper_id " ;
     $select_paper_by_id = mysqli_query($connection, $query);
                                
     while($row = mysqli_fetch_assoc($select_paper_by_id)) {
                        
        $paper_id = $row['paper_id'];
        $paper_title = $row['paper_title'];
//        $paper_author = $row['paper_author'];
//        $paper_journal = $row['paper_journal'];
        $paper_link = $row['paper_link'];
        $paper_type = $row['paper_type'];
//        $paper_date = $row['paper_date'];
        $paper_abstract = $row['paper_abstract'];
     }  

  
?> 
  
  
  <?php

    if(isset($_POST['update_publication'])) {
        
        $paper_title = $_POST['paper_title'];
//        $paper_author = $_POST['paper_author'];
//        $paper_journal = $_POST['paper_journal'];
        $paper_link = $_POST['paper_link'];
        $paper_type = $_POST['paper_type'];
//        $paper_date = $_POST['paper_date'];
        $paper_abstract = $_POST['paper_abstract'];
        

        $query = "UPDATE papers SET ";
        
        $query .= "paper_title = '{$paper_title}', ";
//        $query .= "paper_author = '{$paper_author}', ";
//        $query .= "paper_journal = '{$paper_journal}', ";
        $query .= "paper_link = '{$paper_link}', ";
        $query .= "paper_type = '{$paper_type}', ";
//        $query .= "paper_date = '{$paper_date}', ";
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
        <script src="//cloud.tinymce.com/stable/tinymce.min.js?apiKey=hzw9f52mw7g42ezda87tfo462v31a3tbwh34163fsqtd6vha"></script>
          <script>
              tinymce.init({ selector: 'textarea#paper',
                              height: 150,
                              menubar: false,
                              plugins: [
                                'advlist autolink lists link image charmap print preview anchor',
                                'searchreplace visualblocks code fullscreen',
                                'insertdatetime media table contextmenu paste code'
                              ],
                              toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                              content_css: '//www.tinymce.com/css/codepen.min.css'
                           });
        </script>
          <textarea id="paper" name="paper_title"><?php echo $paper_title; ?></textarea>
    </div>
    
<!--
    <div class="form-group">
        <label for="paper_author">Paper Author</label>
        <input type="text" value="" class="form-control" name="paper_author">
    </div>
-->
    
<!--
    <div class="form-group">
        <label for="paper_journal">Paper Journal</label>
        <input type="text" value="" class="form-control" name="paper_journal">
    </div>
-->
    
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
    
<!--
    <div class="form-group">
        <label for="paper_date">Paper Date</label>
        <input type="text" value="" class="form-control" name="paper_date">
    </div>
-->
    
    <div class="form-group">
        <label for="paper_abstract">Paper Abstract</label>
        <script src="//cloud.tinymce.com/stable/tinymce.min.js?apiKey=hzw9f52mw7g42ezda87tfo462v31a3tbwh34163fsqtd6vha"></script>
          <script>
              tinymce.init({ selector: 'textarea#paper',
                              height: 150,
                              menubar: false,
                              plugins: [
                                'advlist autolink lists link image charmap print preview anchor',
                                'searchreplace visualblocks code fullscreen',
                                'insertdatetime media table contextmenu paste code'
                              ],
                              toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                              content_css: '//www.tinymce.com/css/codepen.min.css'
                           });
        </script>
          <textarea id="paper" name="paper_abstract"><?php echo $paper_abstract; ?></textarea>
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_publication" value="Update Publication">
    </div>
</form>