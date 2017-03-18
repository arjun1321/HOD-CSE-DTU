<?php include "db.php"; ?>
<div id="phdscholar" class="animated fadeInRight">
                
                        <div class="row well">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                                <div class="page-header">
                                    <h1>Professional Activities</h1>
                                    <div class="hr"></div>
                                    <p class="text-justify">He is a member of various technical and professional organisations like IEEE. <strong>He is life member of computer society of india (CSI) and indian society for technical educations (ISTE).</strong> He has established a technical society named "Society for IT Engineers" at DTU in 2010.</p>
                                </div>
                            </div>
                        </div>
                        <div class="down-arrow"></div>
                        <br>
                        
                     <div class="honors-awards">
                       <div class="row well">
                          <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                             <div class="text-center">
                                 <h3 class="bg-danger">Professional Activities</h3>
                                 <div class="hr"></div>
                             </div> 
                             
                             <div class="activities-list">
                                 <ul>
                                     <?php
                                            $query = "SELECT * FROM prof_activities ORDER BY prof_activity_id DESC ";
                                            $select_prof_activity_query = mysqli_query($connection, $query);
                                            if(!$select_prof_activity_query) {
                                                die("QUERY FAILED " . mysqli_error($connection));
                                            }

                                            while($row = mysqli_fetch_assoc($select_prof_activity_query)) {

                                                $prof_activity_description = $row['prof_activity_description'];
                                                echo "<li>$prof_activity_description</li>";
                                                
                                            }
                                     
                                     ?>
                                 </ul>
                             </div>
                    
                          </div>
                           
                       </div>
                        
                    </div><!-- honor-awards end -->
                        
                        
                    <!--   <footer    -->
                    <div class="footer">
                        <div style="width: 200px; margin: 0 auto;">Developer <a href="https://in.linkedin.com/in/arjun-kumar-23ab98121" target="_blank">Arjun Kumar</a> <span> | </span> <a href="login.php">Admin</a></div>
                    </div
                        
                    
</div>