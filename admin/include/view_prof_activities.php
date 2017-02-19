<h4>View Professional Activities</h4>
<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Activity Id</th>
                                    <th>Activity Description</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                               
                               
<?php
    
    $query = "SELECT * FROM prof_activities ORDER BY prof_activity_id DESC " ;
    $select_activity = mysqli_query($connection, $query);
                                
     while($row = mysqli_fetch_assoc($select_activity)) {
                        
        $activity_id = $row['prof_activity_id'];
        $activity_description = $row['prof_activity_description'];

    echo "<tr>";
    echo "<td>$activity_id</td>";
    echo "<td>$activity_description</td>";

    echo "<td><a href='professional_activities.php?p_id=edit_prof_activities&a_id=$activity_id'>Edit</a></td>";
          
    echo "<td><a href='professional_activities.php?delete=$activity_id'>Delete</a></td>";
    echo "</tr>";

  }

?>                               
                              
                            </tbody>
                        </table>
                        
                       
<?php



if(isset($_GET['delete'])) {
    
    $the_activity_id = $_GET['delete'];
    
    $query = "DELETE FROM prof_activities WHERE prof_activity_id = {$the_activity_id}";
    $delete_query = mysqli_query($connection, $query);
    
    header("Location: professional_activities.php");
}
?>                    
                     
                    
                   
                  
                 
                
               