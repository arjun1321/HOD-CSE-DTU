
    

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
        
        <script src="//cloud.tinymce.com/stable/tinymce.min.js?apiKey=hzw9f52mw7g42ezda87tfo462v31a3tbwh34163fsqtd6vha"></script>
          <script>
              tinymce.init({ selector: 'textarea#paper2',
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
          <textarea id="paper2" name="paper_title"></textarea>
        
<!--        <input type="text" class="form-control" name="paper_title">-->
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
<!--        <script src="//cloud.tinymce.com/stable/tinymce.min.js?apiKey=hzw9f52mw7g42ezda87tfo462v31a3tbwh34163fsqtd6vha"></script>-->
          <script>
              tinymce.init({ selector: 'textarea#paper1',
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
          <textarea id="paper1" name="paper_abstract"></textarea>
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_publication" value="Add Publication">
    </div>
</form>