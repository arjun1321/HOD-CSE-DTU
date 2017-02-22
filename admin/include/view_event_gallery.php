<h4>View Gallery</h4>
<div class="table-responsive">
<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Gallery Id</th>
                                    <th>Gallery Title</th>
                                    <th>Gallery Image</th>
                                    <th>Gallery Date</th>
                                    <th>Gallery Place</th>
                                    <th>Gallery Description</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                               
                               
<?php
    
    $query = "SELECT * FROM gallery ORDER BY gallery_id DESC " ;
    $select_gallery = mysqli_query($connection, $query);
                                
     while($row = mysqli_fetch_assoc($select_gallery)) {
                        
        $gallery_id = $row['gallery_id'];
        $gallery_title = $row['gallery_title'];
        $gallery_image = $row['gallery_image'];
        $gallery_date = $row['gallery_date'];
        $gallery_place = $row['gallery_place'];
        $gallery_description = $row['gallery_description'];

    echo "<tr>";
    echo "<td>$gallery_id</td>";
    echo "<td>$gallery_title</td>";
    echo "<td><img width='100' src='../image/$gallery_image' alt='image'></td>";
    echo "<td>$gallery_date</td>";
    echo "<td>$gallery_place</td>";
    echo "<td>$gallery_description</td>";
         

    echo "<td><a href='event_gallery.php?p_id=edit_event_gallery&a_id=$gallery_id'>Edit</a></td>";
          
    echo "<td><a href='event_gallery.php?delete=$gallery_id'>Delete</a></td>";
    echo "</tr>";

  }

?>                               
                              
                            </tbody>
                        </table>
                        </div>
                       
<?php



if(isset($_GET['delete'])) {
    
    $the_gallery_id = $_GET['delete'];
    
    $query = "DELETE FROM gallery WHERE gallery_id = {$the_gallery_id}";
    $delete_query = mysqli_query($connection, $query);
    
    header("Location: event_gallery.php");
}
?>                    
                     
                    
                   
                  
                 
                
               