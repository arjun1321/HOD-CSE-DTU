

<h4>View Ph.D Scholar</h4>
<div class="table-responsive">
<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Scholar Id</th>
                                    <th>Scholar Name</th>
                                    <th>Scholar Project Title</th>
                                    <th>Scholar Status</th>
                                    <th>Scholar Contact</th>
                                    <th>Scholar Profile Link</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                               
                               
<?php
    
    $query = "SELECT * FROM phd_scholar ORDER BY scholar_id DESC " ;
    $select_scholar = mysqli_query($connection, $query);
     $serialno = 0;                           
     while($row = mysqli_fetch_assoc($select_scholar)) {
        $serialno++;                
        $scholar_id = $row['scholar_id'];
        $scholar_name = $row['scholar_name'];
        $scholar_project_title = $row['scholar_project_title'];
        $scholar_status = $row['scholar_status'];
        $scholar_contact = $row['scholar_contact'];
        $scholar_profile_link = $row['scholar_profile_link'];
         

    echo "<tr>";
    echo "<td>$serialno</td>";
    echo "<td>$scholar_name</td>";
    echo "<td>$scholar_project_title</td>";
    echo "<td>$scholar_status</td>";
    echo "<td>$scholar_contact</td>";
    echo "<td>$scholar_profile_link</td>";
         

    echo "<td><a href='phd_scholar.php?p_id=edit_phd_scholar&a_id=$scholar_id'>Edit</a></td>";
          
    echo "<td><a href='phd_scholar.php?delete=$scholar_id'>Delete</a></td>";
    echo "</tr>";

  }

?>                               
                              
                            </tbody>
                        </table>
</div>
<?php



if(isset($_GET['delete'])) {
    
    $the_scholar_id = $_GET['delete'];
    
    $query = "DELETE FROM phd_scholar WHERE scholar_id = {$the_scholar_id}";
    $delete_query = mysqli_query($connection, $query);
    
    header("Location: phd_scholar.php");
}
?>                    
                     
                    
                   
                  
                 
                
               