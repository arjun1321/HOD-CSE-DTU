<?php include "db.php"; ?>
<div id="phdscholar" class="animated fadeInRight">
                
                        <div class="row well">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                                <div class="page-header">
                                    <h1>Administrative Activities</h1>
                                    <div class="hr"></div>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis illo possimus perferendis, dolorem, veritatis nam officiis aliquid qui consectetur, obcaecati debitis numquam, consequuntur! Error excepturi quod saepe praesentium deserunt beatae!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto labore, sed voluptatibus repellat dignissimos ipsum ipsam? Dignissimos numquam reiciendis ea, necessitatibus quia temporibus sapiente esse, nobis omnis sint veritatis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="down-arrow"></div>
                        <br>
                        
                     <div class="admin-activities">
                       <div class="row well">
                          <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                             <div class="text-center">
                                 <h3 class="bg-danger">Administrative Activities (DTU)</h3>
                                 <div class="hr"></div>
                             </div> 
                             
                             <div class="activities-list">
                                 <ul>
                                    <?php
                                            $query = "SELECT * FROM activities ORDER BY activity_id DESC ";
                                            $select_activity_query = mysqli_query($connection, $query);
                                            if(!$select_activity_query) {
                                                die("QUERY FAILED " . mysqli_error($connection));
                                            }

                                            while($row = mysqli_fetch_assoc($select_activity_query)) {

                                                $activity_desc = $row['activity_description'];
                                                echo "<li>$activity_desc</li>";
                                                
                                            }
                                     
                                     ?>
                                    
                                   
                                 </ul>
                             </div>
                    
                          </div>
                           
                       </div>
                        
                    </div><!-- admin activities end -->
                       
                        
                        
                    <!--   <footer    -->
                    <div class="footer">
                        <div style="width: 200px; margin: 0 auto;">Developer <a href="https://in.linkedin.com/in/arjun-kumar-23ab98121" target="_blank">Arjun Kumar</a> <span> | </span> <a href="login.php">Admin</a></div>
                    </div
                        
                    
</div>