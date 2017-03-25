<?php include "db.php"; ?>
<div id="phdscholar" class="animated fadeInRight">
                
                        <div class="row well">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                                <div class="page-header">
                                    <h1>Ph.D Scholar</h1>
                                    <div class="hr"></div>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis illo possimus perferendis, dolorem, veritatis nam officiis aliquid qui consectetur, obcaecati debitis numquam, consequuntur! Error excepturi quod saepe praesentium deserunt beatae!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto labore, sed voluptatibus repellat dignissimos ipsum ipsam? Dignissimos numquam reiciendis ea, necessitatibus quia temporibus sapiente esse, nobis omnis sint veritatis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="down-arrow"></div>
                        <br>
                        
                     <div class="academic-details">
                       <div class="row well">

                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                               <h3 class="text-center bg-info">Ongoing</h3>
                               <div class="hr"></div>
                               <ul class="academic-dates-details">
                                  
                                  
                                 <?php
                                    
                                    $query = "SELECT * FROM phd_scholar WHERE scholar_status = 'ongoing' ORDER BY scholar_id DESC ";
                                    $select_scholar_query = mysqli_query($connection, $query);
                                    if(!$select_scholar_query) {
                                         die("QUERY FAILED " . mysqli_error($connection));
                                    }

                                    while($row = mysqli_fetch_assoc($select_scholar_query)) {

                                        $scholar_id = $row['scholar_id'];
                                        $scholar_name = $row['scholar_name'];
                                        $scholar_project_title = $row['scholar_project_title'];
                                        $scholar_contact = $row['scholar_contact'];
                                        $scholar_profile_link = $row['scholar_profile_link'];
                                        
                            ?>
                                  
                                  
                                  
                                   <li style="border-left: 2px solid #03cc85; border-bottom: 2px solid #03cc85;">
                                       <div class="scholar">
                                           <p><span><strong>Name: </strong></span><a href="<?php echo $scholar_profile_link; ?>" target="_blank"><?php echo $scholar_name; ?></a></p>
                                           <p><span><strong>Project: </strong></span><?php echo $scholar_project_title; ?></p>
                                           <p><span><strong>Email: </strong></span><?php echo $scholar_contact; ?></p>
                                       </div>
                                   </li>
                                <?php   
                                   }
                                   
                                   ?>
                               </ul>

                            </div>

                        </div>

                    </div><!-- academic details end -->
                       
                        
                        
                    <!--   <footer    -->
                    <div class="footer">
                        <div style="width: 200px; margin: 0 auto;">Developer <a href="https://in.linkedin.com/in/arjun-kumar-23ab98121" target="_blank">Arjun Kumar</a> <span> | </span> <a href="login.php">Admin</a></div>
                    </div
                        
                    
</div>