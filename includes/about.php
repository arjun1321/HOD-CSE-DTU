<?php include "db.php"; ?>
                 

                 <div id="about" class="animated fadeInRight">
                  <!-- Bio -->
                    <div class="bio">
                        <div class="row well"><br>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                                <div class="img">
                                    <img src="image/profile.jpg" class="img img-responsive center-block" width="400px">
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                   <h2>Bio</h2>
                                   <div class="hr"></div>

                                   <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla unde iusto cupiditate consequatur voluptate, quaerat. Hic sed nisi amet id alias consequuntur! Perferendis, qui, placeat. Ducimus explicabo veritatis odit iste.</p>

                                   <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla unde iusto cupiditate consequatur voluptate, quaerat. Hic sed nisi amet id alias consequuntur! Perferendis, qui, placeat. Ducimus explicabo veritatis odit iste.</p>


                            </div>

                        </div>
                    </div> <!-- Bio End -->

<br>
                    <div class="academic-details">
                       <div class="row well">

                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                               <h3 class="text-center bg-info">Academic Position</h3>
                               <div class="hr"></div>
                               <ul class="academic-dates-details">
                                   <li>
                                       <div class="dates">
                                           <span>Present</span>
                                           <span>2005</span>
                                       </div>

                                       <div class="content">
                                           <h4>Head of Department</h4>
                                           <p>Computer Department, Delhi Technological University</p>
                                       </div>
                                   </li>
                                   
                                   <li>
                                       <div class="dates">
                                           <span>Present</span>
                                           <span>2005</span>
                                       </div>

                                       <div class="content">
                                           <h4>Head of Department</h4>
                                           <p>Computer Department, Delhi Technological University</p>
                                       </div>
                                   </li>
                                   
                                   <li>
                                       <div class="dates">
                                           <span>Present</span>
                                           <span>2005</span>
                                       </div>

                                       <div class="content">
                                           <h4>Head of Department</h4>
                                           <p>Computer Department, Delhi Technological University</p>
                                       </div>
                                   </li>
                                   
                                   <li>
                                       <div class="dates">
                                           <span>Present</span>
                                           <span>2005</span>
                                       </div>

                                       <div class="content">
                                           <h4>Head of Department</h4>
                                           <p>Computer Department, Delhi Technological University</p>
                                       </div>
                                   </li>
                               </ul>

                            </div>

                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                               <h3 class="text-center bg-info">Education and Training</h3>
                               <div class="hr"></div>
                               <ul class="edu-dates-details">
                                  <li>
                                      <div class="edu-dates">
                                         <span class="degree">PHD</span>
                                         <span class="year">1995</span>  
                                      </div>
                                      
                                      <div class="edu-contents">
                                          <p class="what">Ph.D in Computer Science</p>
                                          <p class="where">Delhi Technological University</p>
                                      </div>
                                  </li>
                                  
                                  <li>
                                      <div class="edu-dates">
                                         <span class="degree">PHD</span>
                                         <span class="year">1995</span>  
                                      </div>
                                      
                                      <div class="edu-contents">
                                          <p class="what">Ph.D in Computer Science</p>
                                          <p class="where">Delhi Technological University</p>
                                      </div>
                                  </li>
                                  
                                  <li>
                                      <div class="edu-dates">
                                         <span class="degree">PHD</span>
                                         <span class="year">1995</span>  
                                      </div>
                                      
                                      <div class="edu-contents">
                                          <p class="what">Ph.D in Computer Science</p>
                                          <p class="where">Delhi Technological University</p>
                                      </div>
                                  </li>
                                   
                               </ul>

                            </div>
                        </div>

                    </div><!-- academic details end -->
                    
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
                    
<br>
                   <div class="honors-awards">
                       <div class="row well">
                          <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                             <div class="text-center">
                                 <h3 class="bg-danger">Professional Activities and Honours</h3>
                                 <div class="hr"></div>
                             </div> 
                             
                             <div class="activities-list">
                                 <ul>
                                     <?php
                                            $query = "SELECT * FROM honours ORDER BY honours_id DESC ";
                                            $select_honours_query = mysqli_query($connection, $query);
                                            if(!$select_honours_query) {
                                                die("QUERY FAILED " . mysqli_error($connection));
                                            }

                                            while($row = mysqli_fetch_assoc($select_honours_query)) {

                                                $honours_desc = $row['honours_description'];
                                                echo "<li>$honours_desc</li>";
                                                
                                            }
                                     
                                     ?>
                                 </ul>
                             </div>
                    
                          </div>
                           
                       </div>
                        
                    </div><!-- honor-awards end -->
       
                </div><!-- about end -->