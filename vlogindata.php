<?php
                                            $ch = curl_init();
                                            
                                            echo("<b>Users from rohit's Site: </b><br/><br/> ");
                                            curl_setopt($ch, CURLOPT_URL, "http://www.rohitshrishrimal.com/rgetusers.php");
                                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                            
                                            $result = curl_exec($ch);
      
                                            echo($result."<br/>");
                                            
                                            echo("<b>Users from Vinit's Site: </b><br/><br/> ");
                                            curl_setopt($ch, CURLOPT_URL, "http://www.singhvinit.com/vgetusers.php");
                                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                            
                                            $result = curl_exec($ch);
      
                                            echo($result."<br/>");
											
					    echo("<b>Users from Shantanu's Site: </b><br/><br/> ");
                                            curl_setopt($ch, CURLOPT_URL, "http://www.guptashantanu.com/loginData.php");
                                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                            
                                            $result = curl_exec($ch);
      
                                            echo($result."<br/>");

                                            echo("<b>Users from Shaskanks's Site: </b><br/><br/> ");
                                            curl_setopt($ch, CURLOPT_URL, "http://www.sportsplaypro.com/getdbusers.php");
                                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                            
                                            $result = curl_exec($ch);
      
                                            echo($result."<br/>");
											

                                            
                                            
                                            curl_close()



   ?>