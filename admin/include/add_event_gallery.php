<?php

    if(isset($_POST['create_gallery'])) {
        
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
        

        $query = "INSERT INTO gallery(gallery_title, gallery_image, gallery_date, gallery_place, gallery_description) ";
        
        $query .= "VALUES('{$gallery_title}', '{$file_name}', '{$gallery_date}', '{$gallery_place}', '{$gallery_description}') ";
        
        
        $create_gallery_query = mysqli_query($connection, $query);
        
        if(!$create_gallery_query) {
            
            die("QUERY FAILED: " . mysqli_error($connection));
        }
        
        header("Location: event_gallery.php");
        
    }
?> 
  
  
  <form action="" method="post" enctype="multipart/form-data">
   
<!--   enctype is used form multiple form data like chossing image file -->
    <h3>Add Gallery</h3>
    <div class="form-group">
        <label for="gallery_title">Gallery Title</label>
        <input type="text" class="form-control" name="gallery_title">
    </div>
    
    <div class="form-group">
        <label for="gallery_image">Gallery Image</label>
        <input type="file" name="gallery_image" required>
    </div>
    
    <div class="form-group">
        <label for="gallery_date">Gallery Date</label>
        <input type="text" class="form-control" name="gallery_date">
    </div>
    
    <div class="form-group">
        <label for="gallery_place">Gallery Place</label>
        <input type="text" class="form-control" name="gallery_place">
    </div>
    
    <div class="form-group">
        <label for="gallery_description">Gallery Description</label>
        <input type="text" class="form-control" name="gallery_description">
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_gallery" value="Add Gallery">
    </div>
</form>