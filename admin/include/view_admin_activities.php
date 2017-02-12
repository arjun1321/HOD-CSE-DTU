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
    
    $query = "SELECT * FROM activities" ;
    $select_activity = mysqli_query($connection, $query);
                                
     while($row = mysqli_fetch_assoc($select_activity)) {
                        
        $activity_id = $row['activity_id'];
        $activity_description = $row['activity_description'];

    echo "<tr>";
    echo "<td>$activity_id</td>";
    echo "<td>$activity_description</td>";

    echo "<td><a href='index.php?source=activities&edit=$activity_id'>Edit</a></td>";
          
    echo "<td><a href='index.php?delete=$activity_id'>Delete</a></td>";
    echo "</tr>";

  }

?>                               
                              
                            </tbody>
                        </table>
                        
                       
<?php
if(isset($_GET['unapprove'])) {
    
    $the_comment_id = $_GET['unapprove'];
    
    $query = "UPDATE comments SET comment_status = 'unapproved' WHERE comment_id = $the_comment_id"; 
    $unapprove_comment_query = mysqli_query($connection, $query);
    
    header("Location: comments.php");
}


if(isset($_GET['approve'])) {
    
    $the_comment_id = $_GET['approve'];
    
    $query = "UPDATE comments SET comment_status = 'approved' WHERE comment_id = $the_comment_id"; 
    $approve_comment_query = mysqli_query($connection, $query);
    
    header("Location: comments.php");
}


if(isset($_GET['delete'])) {
    
    $the_comment_id = $_GET['delete'];
    
    $query = "DELETE FROM comments WHERE comment_id = {$the_comment_id}";
    $delete_query = mysqli_query($connection, $query);
    
    header("Location: comments.php");
}
?>                    
                     
                    
                   
                  
                 
                
               