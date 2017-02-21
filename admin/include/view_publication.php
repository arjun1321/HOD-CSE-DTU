<h4>View Publications/Published papers</h4>
<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Paper Id</th>
                                    <th>Paper Title</th>
                                    <th>Paper Author</th>
                                    <th>Paper Journal</th>
                                    <th>Paper Link</th>
                                    <th>Paper Type</th>
                                    <th>Paper Date</th>
                                    <th>Paper Abstract</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                               
                               
<?php
    
    $query = "SELECT * FROM papers ORDER BY paper_id DESC " ;
    $select_paper = mysqli_query($connection, $query);
                                
     while($row = mysqli_fetch_assoc($select_paper)) {
                        
        $paper_id = $row['paper_id'];
        $paper_title = $row['paper_title'];
        $paper_author = $row['paper_author'];
        $paper_journal = $row['paper_journal'];
        $paper_link = $row['paper_link'];
        $paper_type = $row['paper_type'];
        $paper_date = $row['paper_date'];
        $paper_abstract = $row['paper_abstract'];

    echo "<tr>";
    echo "<td>$paper_id</td>";
    echo "<td>$paper_title</td>";
    echo "<td>$paper_author</td>";
    echo "<td>$paper_journal</td>";
    echo "<td>$paper_link</td>";
    echo "<td>$paper_type</td>";
    echo "<td>$paper_date</td>";
    echo "<td>$paper_abstract</td>";
         

    echo "<td><a href='publications.php?p_id=edit_publication&a_id=$paper_id'>Edit</a></td>";
          
    echo "<td><a href='publications.php?delete=$paper_id'>Delete</a></td>";
    echo "</tr>";

  }

?>                               
                              
                            </tbody>
                        </table>
                        
                       
<?php



if(isset($_GET['delete'])) {
    
    $the_paper_id = $_GET['delete'];
    
    $query = "DELETE FROM papers WHERE paper_id = {$the_paper_id}";
    $delete_query = mysqli_query($connection, $query);
    
    header("Location: publications.php");
}
?>                    
                     
                    
                   
                  
                 
                
               