<h4>View Honours and Awards</h4>
<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Honour Id</th>
                                    <th>Honour and Award Description</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                               
                               
<?php
    
    $query = "SELECT * FROM honours ORDER BY honours_id DESC " ;
    $select_honours = mysqli_query($connection, $query);
                                
     while($row = mysqli_fetch_assoc($select_honours)) {
                        
        $honours_id = $row['honours_id'];
        $honours_description = $row['honours_description'];

    echo "<tr>";
    echo "<td>$honours_id</td>";
    echo "<td>$honours_description</td>";

    echo "<td><a href='honour_awards.php?p_id=edit_honour_awards&a_id=$honours_id'>Edit</a></td>";
          
    echo "<td><a href='honour_awards.php?delete=$honours_id'>Delete</a></td>";
    echo "</tr>";

  }

?>                               
                              
                            </tbody>
                        </table>
                        
                       
<?php



if(isset($_GET['delete'])) {
    
    $the_honour_id = $_GET['delete'];
    
    $query = "DELETE FROM honours WHERE honours_id = {$the_honour_id}";
    $delete_query = mysqli_query($connection, $query);
    
    header("Location: honour_awards.php");
}
?>                    
                     
                    
                   
                  
                 
                
               