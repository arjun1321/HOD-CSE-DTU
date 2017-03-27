<?php include "db.php"; ?>
                  

                  
<div id="publications" class="animated fadeInRight">
                   <div class="row well">
                       <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                           <div class="page-header">
                               <h1>Published Papers</h1>
                               <div class="hr"></div>
                               <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur voluptatem reprehenderit quaerat neque saepe ex sed perferendis obcaecati, culpa beatae vitae repudiandae corporis nulla, in, quas qui dolorem fugiat dignissimos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora a eaque consectetur soluta rem, ipsa facere ipsam amet porro perspiciatis voluptatum ex, iste labore quaerat sit quod commodi vitae tempore.</p>
                           </div>
                        </div>
                    </div>
                    <div class="down-arrow"></div>
                    
 <br>                  
                   <div class="row well">                      
                       <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                           <div class="text-center">
                                 <h3 class="bg-danger">International Journals</h3>
                                 <div class="hr"></div>
                           </div>
                             
                           <div class="paper-list">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        
                            <?php
                                    
                                    $query = "SELECT * FROM papers WHERE paper_type = 'journal' ORDER BY paper_id DESC ";
                                    $select_papers_query = mysqli_query($connection, $query);
                                    if(!$select_papers_query) {
                                         die("QUERY FAILED " . mysqli_error($connection));
                                    }

                                    while($row = mysqli_fetch_assoc($select_papers_query)) {

                                        $paper_id = $row['paper_id'];
                                        $paper_title = $row['paper_title'];
//                                        $paper_author = $row['paper_author'];
//                                        $paper_journal = $row['paper_journal'];
                                        $paper_link = $row['paper_link'];
                                        $paper_type = $row['paper_type'];
//                                        $paper_date = $row['paper_date'];
                                        $paper_abstract = $row['paper_abstract'];
//                                        $paper_volume_no = $row['paper_volume_no'];
//                                        $paper_page_no = $row['paper_page_no'];
                                        
                            ?>
                                              
                                    <div class="panel panel-info">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="<?php echo '#'.$paper_id; ?>" aria-expanded="true" aria-controls="collapseOne" class="collapsed accordion-link">
                                                 <p style="font-size: 20px;"><?php echo $paper_title; ?></p>
                                                 
                                                  <p style="color: blue;">Abstract</p>
                                               
                                                <div class="paper-link">
                                                    <a href="<?php echo $paper_link; ?>" target="_blank" class="btn btn-primary btn-sm">Paper Link</a>
                                                 </div>
                                                </a>
                                              
                                            </div>
                                            <div id="<?php echo $paper_id; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                              <div class="panel-body">
                                               <h4 class="abstract-title">Abstract</h4>
                                               <p><?php echo $paper_abstract; ?></p>
                                        
                                              </div>
                                            </div>
                                          </div>         
                                               
                            <?php
               
                                    }
          
                            ?>            
                                        
                                        
                                
                                     
                            
                                          
                                          
                           </div>  
                             
                       </div>
                   </div> 
                </div><!-- international journal end -->
                        
           <div class="footer">
                        <div style="width: 200px; margin: 0 auto;">Developer <a href="https://in.linkedin.com/in/arjun-kumar-23ab98121" target="_blank">Arjun Kumar</a> <span> | </span> <a href="login.php">Admin</a></div>
                    </div
                         
</div><!-- publications end -->
                
               
              
             
            
           
          
         
        
       
      
     
    
   
  
