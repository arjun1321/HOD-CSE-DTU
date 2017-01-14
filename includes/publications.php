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
                                        $paper_author = $row['paper_author'];
                                        $paper_journal = $row['paper_journal'];
                                        $paper_link = $row['paper_link'];
                                        $paper_type = $row['paper_type'];
                                        $paper_date = $row['paper_date'];
                                        $paper_abstract = $row['paper_abstract'];
                                        
                            ?>
                                              
                                    <div class="panel panel-info">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="<?php echo '#'.$paper_id; ?>" aria-expanded="true" aria-controls="collapseOne" class="collapsed accordion-link">
                                                 <h4 class="panel-title paper-title">
                                                  <?php echo $paper_title; ?>
                                                  </h4>
                                                 <div class="paper-author"><strong><?php echo $paper_author; ?></strong></div>
                                                 
                                                 <div class="paper-conference">
                                                     <p><span>Journals</span> <span><?php echo $paper_date; ?></span> <?php echo $paper_journal; ?> 
                                                     <p class="abstract">Abstract</span></p>
                                                 </div>
                                                 <div class="paper-link">
                                                    <a href="<?php echo $paper_link; ?>" target="_blank">Paper Link</a>
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
                                        
                                        
                                        
                            
                                          
                                          
<!--
                                          <div class="panel panel-info">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <a class="collapsed accordion-link" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                 <h4 class="panel-title">
                                                  Collapsible Group Item #2
                                                  </h4>
                                                </a>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                              <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                              </div>
                                            </div>
                                          </div>
-->
                                          
                           </div>  
                             
                       </div>
                   </div>   
                         
</div><!-- publications end -->
                
               
              
             
            
           
          
         
        
       
      
     
    
   
  
