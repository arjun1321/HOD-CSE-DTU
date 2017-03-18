<?php include "db.php"; ?>
               <div id="contact" class="animated fadeInRight">
                
                        <div class="row well">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                                <div class="page-header">
                                    <h1>Contact</h1>
                                    <div class="hr"></div>

                                </div>
                            </div>
                            
                             <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                               <ul class="academic-dates-details">  
                                    
                                   <li style="border-left: 2px solid #03cc85; border-bottom: 2px solid #03cc85;">
                                       <div class="scholar">
                                           <p><i class="fa fa-address-card-o" aria-hidden="true"></i> &nbsp;&nbsp;Department of Computer Science, Delhi Technological University, Bawana Road Delhi-42</p>
                                           <p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;opvera.dce@gmail.com, opverma@dce.ac.in</p>
                                           <p><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;&nbsp;011-27294672</p>
                                           
                                       </div>
                                   </li>
                               </ul>

                            </div>

                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                               <ul class="academic-dates-details">

                                   <li style="border-left: 2px solid #03cc85; border-bottom: 2px solid #03cc85; ">
                                       <div class="followme">
                                          <h3>Follow Me</h3>
                                           <div class="social-media">
                                                <ul>
                                                    <li><a href="https://www.facebook.com/omprakash.verma.1481" class="social"><i class="fa fa-facebook fa-2x"></i></a></li>
                                                    <li><a href="#" class="social"><i class="fa fa-twitter fa-2x"></i></a></li>
                                                    <li><a href="https://in.linkedin.com/in/dr-o-p-verma-2925b7b" class="social"><i class="fa fa-linkedin fa-2x"></i></a></li>
                                                    <li><a href="https://scholar.google.co.in/citations?user=vJyORdgAAAAJ&hl=en&oi=ao"><i class="ai ai-google-scholar ai-2x"></i></a></li>
                                                    <li><a href=""><i class="ai ai-academia ai-2x"></i></a></li>
                                                </ul>
                                            </div>
                                       </div>
                                   </li>
                                   
                                   
                               </ul>

                            </div>
                            
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                                <div id="map" style="height: 400px;"></div>
                                <script>
                                  function initMap() {
                                    var uluru = {lat: 28.7500749, lng: 77.1176652};
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                      zoom: 16,
                                      center: uluru
                                    });
                                    var marker = new google.maps.Marker({
                                      position: uluru,
                                      map: map
                                    });
                                  }
                                </script>
                                
                                <script async defer
                                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBID9nxDyfddYo-7BZ9QAxGNQk6RYlcqmQ&callback=initMap">
                                </script>
                            </div>
                            
                            
                        </div>
                                
                        
                        
                    <div class="footer">
                        <div style="width: 200px; margin: 0 auto;">Developer <a href="https://in.linkedin.com/in/arjun-kumar-23ab98121" target="_blank">Arjun Kumar</a> <span> | </span> <a href="login.php">Admin</a></div>
                    </div
                    
</div>