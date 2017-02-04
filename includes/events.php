
<?php include "db.php"; ?>                

<div id="events-gallery" class="animated fadeInRight">
                    <div class="events-head">
                        <div class="row well">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                                <div class="page-header">
                                    <h1>Events &amp; Gallery</h1>
                                    <div class="hr"></div>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis illo possimus perferendis, dolorem, veritatis nam officiis aliquid qui consectetur, obcaecati debitis numquam, consequuntur! Error excepturi quod saepe praesentium deserunt beatae!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto labore, sed voluptatibus repellat dignissimos ipsum ipsam? Dignissimos numquam reiciendis ea, necessitatibus quia temporibus sapiente esse, nobis omnis sint veritatis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="down-arrow"></div>
                    <br>
                    
                    <div class="event-organised">
                       <div class="row well">
                          <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                             <div class="text-center">
                                 <h3 class="bg-danger">Event/FDP Organised (DTU)</h3>
                                 <div class="hr"></div>
                             </div> 
                             
                             <div class="activities-list">
                                 <ul>
                                     <?php
                                            $query = "SELECT * FROM event_org ORDER BY event_org_id DESC ";
                                            $select_event_org_query = mysqli_query($connection, $query);
                                            if(!$select_event_org_query) {
                                                die("QUERY FAILED " . mysqli_error($connection));
                                            }

                                            while($row = mysqli_fetch_assoc($select_event_org_query)) {

                                                $event_org_details = $row['event_org_details'];
                                                echo "<li>$event_org_details</li>";
                                                
                                            }
                                     
                                     ?>
                                 </ul>
                             </div>
                    
                          </div>
                           
                       </div>
                        
                    </div><!-- honor-awards end -->
                    
                    <div class="events">
                        <div class="row well">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                                <h3 class="text-center">Events &amp; Gallery</h3>
                                <div class="hr"></div>
                                
                                
                                <div class="row">
                                   
                                   <?php
                                            $query = "SELECT * FROM gallery ORDER BY gallery_id DESC ";
                                            $select_gallery_query = mysqli_query($connection, $query);
                                            if(!$select_gallery_query) {
                                                die("QUERY FAILED " . mysqli_error($connection));
                                            }

                                            while($row = mysqli_fetch_assoc($select_gallery_query)) {

                                                $gallery_id = $row['gallery_id'];
                                                $gallery_title = $row['gallery_title'];
                                                $gallery_image = $row['gallery_image'];
                                                $gallery_date = $row['gallery_date'];
                                                $gallery_place = $row['gallery_place'];
                                                $gallery_description = $row['gallery_description'];
                                                
                                           ?>     
                                           
                                   
                                   
                                   
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-6">            
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3><?php echo $gallery_title; ?></h3>
                                                <p>        
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo $gallery_id; ?>">
                                                  View
                                                </button></p>
                                           </div>
                                            <img src="image/<?php echo $gallery_image; ?>" alt="..." class="img img-responsive">  
                                            
                                        </div>
                                        
                                    </div>
                               
                                    <?php
                                     }

                                    ?>
            
                                </div>
                             </div>
                        </div>
                    </div>
                    
    
                </div><!-- event end -->
                
                <!-- Modal -->
                
                <?php
                    $query = "SELECT * FROM gallery ORDER BY gallery_id DESC ";
                    $select_gallery_query = mysqli_query($connection, $query);
                    if(!$select_gallery_query) {
                        die("QUERY FAILED " . mysqli_error($connection));
                    }

                    while($row = mysqli_fetch_assoc($select_gallery_query)) {

                        $gallery_id = $row['gallery_id'];
                        $gallery_title = $row['gallery_title'];
                        $gallery_image = $row['gallery_image'];
                        $gallery_date = $row['gallery_date'];
                        $gallery_place = $row['gallery_place'];
                        $gallery_description = $row['gallery_description'];

                   ?>
                
                <div class="modal fade" id="myModal<?php echo $gallery_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-primary" id="myModalLabel"><?php echo $gallery_title; ?></h4>
                      </div>
                      <div class="modal-body">
                       <img src="image/<?php echo $gallery_image; ?>" alt="" class="img img-responsive center-block">
                       <hr>
                       <div style="margin-bottom: 10px;">
                            <span class="bg-primary modal-date">Date</span><span class="mod-date text-danger bg-info"><?php echo $gallery_date; ?></span>
                            <span class="bg-primary modal-place">Place</span><span class="mod-place text-danger bg-info"><?php echo $gallery_place; ?></span>
                       </div>
                       <div class="gallery-desc text-danger">
                           <?php echo $gallery_description; ?>
                       </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                 <?php
                     }

                    ?>
                              