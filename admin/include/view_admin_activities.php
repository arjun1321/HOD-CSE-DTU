<?php session_start();
ob_start();
?>

<?php

    if(!$_SESSION['username'] || $_SESSION['username'] == null) {
        header("Location: ../../login.php");
    }
    
    
?>



<h4>View Administrative Activities</h4>
<div class="table-responsive">
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
    
    $query = "SELECT * FROM activities ORDER BY activity_id DESC " ;
    $select_activity = mysqli_query($connection, $query);
                                
     while($row = mysqli_fetch_assoc($select_activity)) {
                        
        $activity_id = $row['activity_id'];
        $activity_description = $row['activity_description'];

    echo "<tr>";
    echo "<td>$activity_id</td>";
    echo "<td>$activity_description</td>";

    echo "<td><a href='administrative_activities.php?p_id=edit_admin_activities&a_id=$activity_id'>Edit</a></td>";
          
    echo "<td><a href='administrative_activities.php?delete=$activity_id'>Delete</a></td>";
    echo "</tr>";

  }

?>                               
                              
                            </tbody>
                        </table>
</div>
                       
<?php



if(isset($_GET['delete'])) {
    
    $the_activity_id = $_GET['delete'];
    
    $query = "DELETE FROM activities WHERE activity_id = {$the_activity_id}";
    $delete_query = mysqli_query($connection, $query);
    
    header("Location: administrative_activities.php");
}
?>                    
                     
                    
                   
                  
                 
                
               