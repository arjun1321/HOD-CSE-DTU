
<?php include "db.php"; ?>                

<div id="events-gallery" class="animated fadeInRight">
                    <div class="events-head">
                        <div class="row well">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                                <div class="page-header">
                                    <h1>Events</h1>
                                    <div class="hr"></div>
                                    <p class="text-justify">Prof. Verma has organised various conferences, faculty development programme, seminar and workshop etc. Recently, he was organising chair of the India International Conference on  Imformation Processing (IICIP-2016). In 2015 he has organised faculty development programme on information security and challenges.</p>
                                    
                                    
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
                    
                    
                    
                    <div class="footer">
                        <div style="width: 200px; margin: 0 auto;">Developer <a href="https://in.linkedin.com/in/arjun-kumar-23ab98121" target="_blank">Arjun Kumar</a> <span> | </span> <a href="login.php">Admin</a></div>
                    </div
                    
    
                </div><!-- event end -->
                
               
                              