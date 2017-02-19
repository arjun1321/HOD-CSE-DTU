<h4>View Event Organised</h4>
<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Event Id</th>
                                    <th>Event Description</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                               
                               
<?php
    
    $query = "SELECT * FROM event_org ORDER BY event_org_id DESC " ;
    $select_event = mysqli_query($connection, $query);
                                
     while($row = mysqli_fetch_assoc($select_event)) {
                        
        $event_org_id = $row['event_org_id'];
        $event_org_details = $row['event_org_details'];

    echo "<tr>";
    echo "<td>$event_org_id</td>";
    echo "<td>$event_org_details</td>";

    echo "<td><a href='event_organised.php?p_id=edit_event_organised&a_id=$event_org_id'>Edit</a></td>";
          
    echo "<td><a href='event_organised.php?delete=$event_org_id'>Delete</a></td>";
    echo "</tr>";

  }

?>                               
                              
                            </tbody>
                        </table>
                        
                       
<?php



if(isset($_GET['delete'])) {
    
    $the_event_id = $_GET['delete'];
    
    $query = "DELETE FROM event_org WHERE event_org_id = {$the_event_id}";
    $delete_query = mysqli_query($connection, $query);
    
    header("Location: event_organised.php");
}
?>                    
                     
                    
                   
                  
                 
                
               