


<?php

if(isset($_GET['a_id'])) {
    
    $the_gallery_id = $_GET['a_id'];
}
     $query = "SELECT * FROM gallery WHERE gallery_id = $the_gallery_id " ;
     $select_gallery_by_id = mysqli_query($connection, $query);
                                
     while($row = mysqli_fetch_assoc($select_gallery_by_id)) {
                        
        $gallery_id = $row['gallery_id'];
        $gallery_title = $row['gallery_title'];
        $gallery_image = $row['gallery_image'];
        $gallery_date = $row['gallery_date'];
        $gallery_place = $row['gallery_place'];
        $gallery_description = $row['gallery_description'];
     }  

  
?> 
  
  
  <?php

    if(isset($_POST['update_gallery'])) {
        
        $gallery_title = $_POST['gallery_title'];
        
        // uploading image
    
        if(isset($_FILES['gallery_image'])){
      $errors= array();
      $file_name = $_FILES['gallery_image']['name'];
      $file_size = $_FILES['gallery_image']['size'];
      $file_tmp = $_FILES['gallery_image']['tmp_name'];
      $file_type = $_FILES['gallery_image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['gallery_image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"../image/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   } 
        
        // uploading image script complete
        
        
   
        $gallery_date = $_POST['gallery_date'];
        $gallery_place = $_POST['gallery_place'];
        $gallery_description = $_POST['gallery_description'];
        

        $query = "UPDATE gallery SET ";
        
        $query .= "gallery_title ='{$gallery_title}', ";
        $query .= "gallery_image ='{$file_name}', ";
        $query .= "gallery_date ='{$gallery_date}', ";
        $query .= "gallery_place ='{$gallery_place}', ";
        $query .= "gallery_description ='{$gallery_description}' ";
        $query .= "WHERE gallery_id = $the_gallery_id; ";
        
        
        $update_gallery_query = mysqli_query($connection, $query);
        
        if(!$update_gallery_query) {
            
            die("QUERY FAILED: " . mysqli_error($connection));
        }
        
        header("Location: event_gallery.php");
        
    }
?> 
  
  
  <form action="" method="post" enctype="multipart/form-data">
   
<!--   enctype is used form multiple form data like chossing image file -->
    <h3>Edit Gallery</h3>
     <div class="form-group">
        <label for="gallery_title">Gallery Title</label>
        <input type="text" class="form-control" name="gallery_title" value="<?php echo $gallery_title; ?>">
    </div>
    
    <div class="form-group">
        <label for="gallery_image">Gallery Image</label><br>
        <img width="100" src="../image/<?php echo $gallery_image; ?>">
        <input type="file" name="gallery_image" value="" required>
    </div>
    
    <div class="form-group">
        <label for="gallery_date">Gallery Date</label>
        <input type="text" class="form-control" name="gallery_date" value="<?php echo $gallery_date; ?>">
    </div>
    
    <div class="form-group">
        <label for="gallery_place">Gallery Place</label>
        <input type="text" class="form-control" name="gallery_place" value="<?php echo $gallery_place; ?>">
    </div>
    
    <div class="form-group">
        <label for="gallery_description">Gallery Description</label>
<!--        <textarea rows="10" class="form-control" name="gallery_description"></textarea>-->
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
          <textarea id="paper" name="gallery_description"><?php echo $gallery_description; ?></textarea>
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_gallery" value="Update Gallery">
    </div>
</form>