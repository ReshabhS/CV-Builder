  <?php include 'header.inc' ?>    
  <?php
session_start();
if (isset($_POST['name'])){
$_SESSION['name'] = $_POST['name'];}
if (isset($_POST['gender'])){   
$_SESSION['gender'] = $_POST['gender'];}
if (isset($_POST['address'])) {
$_SESSION['address'] = $_POST['address'];}
if (isset($_POST['nation'])) { 
$_SESSION['nation'] = $_POST['nation'];}
if (isset($_POST['city'])){  
$_SESSION['city'] = $_POST['city'];}
if (isset($_POST['dob'])){  
$_SESSION['dob'] = $_POST['dob'];}
if (isset($_POST['contact'])){  
$_SESSION['contact'] = $_POST['contact'];}
if (isset($_POST['email'])) { 
$_SESSION['email'] = $_POST['email'];}
if (isset($_POST['perso'])) { 
$_SESSION['perso'] = $_POST['perso'];}    
?>                     
<style>
#submit1 {
    width: 250;
    height: 40;
    color: black;
    background-color: whitesmoke;
    border-radius: 16pt;
    animation: alternate;
    border: 2px solid #4CAF50;
}
#submit1:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    border-radius: 16px;
    width: 250;
    height: 40;
}
#education {
    font-size: 18;
    margin: 50 70;
}
#education {
    font-size: 18;
    margin: 50 70;
}
#academicSE {
  background-color: #F5F5F5;
}
#academicHE {
  background-color: #F5F5F5;
}
#diploma {
  background-color: #F5F5F5;
}
#ug {
  background-color: #F5F5F5;
}
#pg {
  background-color: #F5F5F5;
}
#certification {
  background-color: #F5F5F5;
}
</style>

<form action="http://localhost/3test.php" method="post">
<div role="tabpanel" class="tab-pane fade" id="education"><br>
		
                              
                              
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"><hr><br>
                                      <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                          <h4 class="panel-title">
                                           
                                              Secondary Education Details
                                            
                                          </h4>
                                        </div>
                                        <div id="academicSE" class="panel-collapse collapse" role="tabpanel" aria-labelledby="academicSE">
                                          <div class="panel-body">
                                            
                                            
                                            <div class="row">
                                
                               <br> <div class="rightAlign col-sm-2" ><label for="schoolName">School Name </label><br><br>
                                </div>
                                                        <div class="col-sm-3">
                                                          <input type="text"  class="form-control"  id="cb_school" name="seschool" placeholder="Delhi Public School">
                                                        </div>
                                                        <div class="col-sm-1"></div>
                                                       <br> <div class="rightAlign col-sm-2" ><label for="boardName">Board </label><br><br>
                                                                                    </div>
                                                        <div class="col-sm-3">
                                                                  
                                                            <input type="text" class="form-control" name="seboard" id="cb_boardName" placeholder="Central Board of Secondary Education">
                                                                             
                                                        </div>
                                                            <div class="col-sm-1"></div>			
                                
                                    </div>
                                           
                                            
                                            
                                            
                                            
                                          
                                          
                                           <div class="row">
                                
                             <br>   <div class="rightAlign col-sm-2" ><label for="passYear">Year of Passing </label><br><br>
                                </div>
                                                        <div class="col-sm-3">
                                                          <input type="year" name="seyop" class="form-control"  id="cb_passYear" >
                                                        </div>
                                                         <div class="col-sm-1"></div>
                                                       <br>   <div class="rightAlign col-sm-2" ><label for="marksSE">Marks </label><br><br>
                                                           </div>
                                                        <div class="col-sm-3">
                                                             <div class="input-group">     
                                                            <input type="text"  class="form-control" name="semark" id="cb_marksSE"   placeholder="75">
                                                            <span class="input-group-addon"> &#37;</span>
                                                            </div>                 
                                                        </div>
                                                            <div class="col-sm-1"></div>			
                                
                                    </div>
                                          
                                          
                                        </div>
                                      </div>
                                      </div>
                                      <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOneTwo">
                                          <h4 class="panel-title">
                                          
                                              Higher Education Details
                                           
                                          </h4>
                                        </div>
                                        <div id="academicHE" class="panel-collapse collapse" role="tabpanel" aria-labelledby="academicSE">
                                          <div class="panel-body">
                                            
                                            
                                            <div class="row">
                                
                              <br>  <div class="rightAlign col-sm-2" ><label for="schoolName2">School Name</label><br><br>
                                </div>
                                                        <div class="col-sm-3">
                                                          <input type="text" class="form-control"  id="cb_schoolName2" name="heschool"   placeholder="Delhi Public School">
                                                        </div>
                                                                                     <div class="col-sm-1"></div>
                                                                                   <br> <div class="rightAlign col-sm-2" ><label for="boardName2">Board </label><br><br>
                                                                                    </div>
                                                        <div class="col-sm-3">
                                                                  
                                                            <input type="text"  class="form-control"  id="cb_boardName2" name="heboard"   placeholder="Centarl board of secondary education">
                                                                             
                                                        </div>
                                                            <div class="col-sm-1"></div>			
                                
                                    </div>
                                            
                                            
                                            
                                            
                                            
                                          
                                          
                                           <div class="row">
                                
                                <br><div class="rightAlign col-sm-2" ><label for="passYear2">Year of Passing </label><br><br>
                                </div>
                                                        <div class="col-sm-3">
                                                          <input type="year"   class="form-control" name="heyop" id="cb_passYear2" >
                                                        </div>
                                                         <div class="col-sm-1"></div>
                                                          <br><div class="rightAlign col-sm-2" ><label for="marksHE">Marks </label><br><br>
                                                           </div>
                                                        <div class="col-sm-3">
                                                             <div class="input-group">     
                                                            <input type="text" class="form-control"  id="cb_marksHE" name="hemark"    placeholder="85">
                                                            <span class="input-group-addon">&#37;</span>
                                                            </div>                 
                                                        </div>
                                                            <div class="col-sm-1"></div>			
                                
                                    </div>
                                          
                                          
                                        </div>
                                      </div>
                                      </div>
                                      
                                      
                                      <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                          <h4 class="panel-title">
                                           
                                          <!--   Diploma
                                            
                                          </h4>
                                        </div>
                                        <div id="diploma" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                          <div class="panel-body">
										   <div id="diplomaDetails" >                                       
                                        
                                           
                                            <div class="row">
                                
                               <br> <div class="rightAlign col-sm-2" ><label for="diplomaRoll">Roll No</label><br>
                                </div>
                                                            <div class="col-sm-3">
                                                                  <input type="text"  class="cb_diplomaRoll form-control" name="diproll" placeholder="12XX3200">
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                          <br>  <div class="rightAlign col-sm-2" ><label for="diplomaPRN">PRN</label><br><br>
                                                                                            </div>
                                                           <div class="col-sm-3">
                                                                <input type="text"  class="cb_diplomaPRN form-control" name="dipPRN" placeholder="12XX3200">
                                                                </div>
                                                           <div class="col-sm-1"></div>			
                                                                                            
                                         </div>
                                         
                                         <div class="row">
                                
                               <br> <div class="rightAlign col-sm-2" ><label for="diplomaCourse">Course Name </label><br>
                                </div>
                                                            <div class="col-sm-3">
                                                                  <input type="text"  class="cb_diplomaCourse form-control" name="dipcourse" placeholder="Tig Welding">
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                          <br>  <div class="rightAlign col-sm-2" ><label for="diplomaPassYear">Year of Passing </label>
         <br>                                                                                   </div>
                                                           <div class="col-sm-3">
                                                                <input type="year"  class="cb_diplomaPassYear form-control" name="dipyop"  placeholder="2000">
                                                                </div>
                                                           <div class="col-sm-1"></div>			
                                                                                            
                                         </div>
                                            
                                            <div class="row">
                                
                               <br> <div class="rightAlign col-sm-2" ><label for="diplomaName">College Name </label><br>
                                </div>
                                                            <div class="col-sm-3">
                                                                  <input type="text"  class="cb_diplomaName form-control" name="dipclg" placeholder="Sehshadripuram College">
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                            <br><div class="rightAlign col-sm-2" ><label for="diplomaBoard">Board/University Name </label><br>
                                                                                            </div>
                                                           <div class="col-sm-3">
                                                                <input type="text"  class="cb_diplomaBoard form-control" name="dipboard" placeholder="VV Pura Board">
                                                                </div>
                                                                    <div class="col-sm-1"></div>			
                                                                                            
                                         </div>
                                           <div class="row" >
                                
                               <br> <div class="rightAlign col-sm-2" ><label for="diplomaMarks">Marks </label><br>
                                </div>
                                                        <div class="col-sm-3">
                                                          <div class="input-group">     
                                                            <input type="text"  class="cb_diplomaMarks form-control" name="dipmark" placeholder="85">
                                                            <span class="input-group-addon">&#37;</span>
                                                            </div> 
                                                        </div>
                                                         <div class="col-sm-1"></div>
                                                          <div class="rightAlign col-sm-2" >
                                                           </div>
                                                        <div class="col-sm-3">
                                                                             
                                                        </div>
                                                            <div class="col-sm-1"></div>			
                                
                                    </div>  
										 
                                          <br><br>
                                          </div>
                                         
                                           
                                             
                                           
                                          </div>
                                        </div>
                                      </div>
                                      -->
                                      
                                      
                                      <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                          <h4 class="panel-title">
                                           
                                              Graduation
                                           
                                          </h4>
                                        </div>
                                        <div id="ug" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                          <div class="panel-body">
                                           <div id="ugDetails" >
									
                                            <div class="row">
                                
                               <br> <div class="rightAlign col-sm-2" ><label for="ugRoll">Roll No</label><br><br>
                                </div>
                                                            <div class="col-sm-3">
                                                                  <input type="text"  class="cb_ugRoll form-control" name="groll" placeholder="12XX3200">
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                            <br><div class="rightAlign col-sm-2" ><label for="ugPRN">PRN</label><br><br>
                                                                                            </div>
                                                           <div class="col-sm-3">
                                                                <input type="text"  class="cb_ugPRN form-control" name="gPRN" placeholder="12XX3200">
                                                                </div>
                                                           <div class="col-sm-1"></div>			
                                                                                            
                                         </div>
                                         
                                         <div class="row">
                                
                                <br><div class="rightAlign col-sm-2" ><label for="ugCourse">Course Name</label><br><br>
                                </div>
                                                            <div class="col-sm-3">
                                                                  <input type="text"  class="cb_ugCourse form-control" name="gcourse" placeholder="B. Tech">
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                           <br> <div class="rightAlign col-sm-2" ><label for="ugPassYear">Year of Passing </label><br><br>
                                                                                            </div>
                                                           <div class="col-sm-3">
                                                                <input type="year"  class="cb_ugPassYear form-control" name="gyop" placeholder="2000" >
                                                                </div>
                                                           <div class="col-sm-1"></div>			
                                                                                            
                                         </div>
                                            
                                            <div class="row">
                                
                               <br> <div class="rightAlign col-sm-2" ><label for="ugName">College Name</label><br><br>
                                </div>
                                                            <div class="col-sm-3">
                                                                  <input type="text"  class="cb_ugName form-control" name="gclg" placeholder="Indian Institute of Technology">
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                           <br> <div class="rightAlign col-sm-2" ><label for="ugBoard">University Name</label><br><br>
                                                                                            </div>
                                                           <div class="col-sm-3">
                                                                <input type="text"  class="cb_ugBoard form-control"  name ="gboard" placeholder="VTU">
                                                                </div>
                                                                    <div class="col-sm-1"></div>			
                                                                                            
                                         </div>
                                           <div class="row" >
                                
                               <br> <div class="rightAlign col-sm-2" ><label for="ugMarks">Marks </label><br><br>
                                </div>
                                                        <div class="col-sm-3">
                                                          <div class="input-group">     
                                                            <input type="text"  class="cb_ugMarks form-control" name="gmark" placeholder="85">
                                                            <span class="input-group-addon">&#37;</span>
                                                            </div> 
                                                        </div>
                                                         <div class="col-sm-1"></div>
                                                          <div class="rightAlign col-sm-2" >
                                                           </div>
                                                        <div class="col-sm-3">
                                                                             
                                                        </div>
                                                            <div class="col-sm-1"></div>			
                                
                                    </div>
															
                                          <br><br>
										  
										  </div> 
										  
														
 </div>  </div>  </div> 

										 
                                      
                                      
                                      <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                          <h4 class="panel-title">
                                           
                                              Post Graduate
                                            
                                          </h4>
                                        </div>
                                        <div id="pg" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                          <div class="panel-body">
                                           <div id="pgDetails" >					   
										   
										   
										  
										      <div class="row">
                                
                               <br> <div class="rightAlign col-sm-2" ><label for="pgRoll">Roll No</label><br><br>
                                </div>
                                                            <div class="col-sm-3">
                                                                  <input type="text"  class="cb_pgRoll  form-control" name="pgroll" placeholder="12XX3200">
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                           <br> <div class="rightAlign col-sm-2" ><label for="pgPRN">PRN</label><br><br>
                                                                                            </div>
                                                           <div class="col-sm-3">
                                                                <input type="text"  class="cb_pgPRN form-control"  name="pgPRN" placeholder="12XX3200">
                                                                </div>
                                                           <div class="col-sm-1"></div>			
                                                                                            
                                         </div>
                                         
                                         <div class="row">
                                
                               <br> <div class="rightAlign col-sm-2" ><label for="pgCourse">Course Name</label><br>
                                </div>
                                                            <div class="col-sm-3">
                                                                  <input type="text"  class="cb_pgCourse form-control" name="pgcourse" placeholder="M.S.">
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                            <br><div class="rightAlign col-sm-2" ><label for="pgPassYear">Year of Passing</label><br><br>
                                                                                            </div>
                                                           <div class="col-sm-3">
                                                                <input type="year"  class="cb_pgPassYear form-control" name="pgyop" placeholder="2000">
                                                                </div>
                                                           <div class="col-sm-1"></div>			
                                                                                            
                                         </div>
                                            
                                            <div class="row">
                                
                               <br> <div class="rightAlign col-sm-2" ><label for="pgName">College Name</label><br><br>
                                </div>
                                                            <div class="col-sm-3">
                                                                  <input type="text"  class="cb_pgName form-control" name="pgclg" placeholder="Texas AM">
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                           <br> <div class="rightAlign col-sm-2" ><label for="pgBoard">University Name</label><br><br>
                                                                                            </div>
                                                           <div class="col-sm-3">
                                                                <input type="text"  class="cb_pgBoard form-control"  name="pgboard" placeholder="Texas SU">
                                                                </div>
                                                                    <div class="col-sm-1"></div>			
                                                                                            
                                         </div>
                                           <div class="row" >
                                
                               <br> <div class="rightAlign col-sm-2" ><label for="pgMarks">Marks</label><br><br>
                                </div>
                                                        <div class="col-sm-3">
                                                          <div class="input-group">     
                                                            <input type="text"  class="cb_pgMarks form-control" name="pgmark" placeholder="85">
                                                            <span class="input-group-addon">&#37;</span>
                                                            </div> 
                                                        </div>
                                                         <div class="col-sm-1"></div>
                                                          <div class="rightAlign col-sm-2" >
                                                           </div>
                                                        <div class="col-sm-3">
                                                                             
                                                        </div>
                                                            <div class="col-sm-1"></div>			
                                
                                    </div>  
									
                                          <br><br>
										  
										   </div> 
                                         
                                          </div>
                                        </div>
                                      </div>
                                      
                                      
                                      
                                      <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFive">
                                          <h4 class="panel-title">
                                           
                                              Professional Certifications
                                            
                                          </h4>
                                        </div>
										             
										
                                        <div id="certification" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                          <div class="panel-body">
                                           <div id="certificationDetails" >							   
										    
									
									 <div class="row">
                                
                               <br> <div class="rightAlign col-sm-2" ><label for="certCourse">Course Name</label><br><br>
                                </div>
                                                            <div class="col-sm-3">
                                                                  <input type="text"  class="cb_certCourse form-control" name="cercourse" placeholder="Ruby on Rails">
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                            <br><div class="rightAlign col-sm-2" ><label for="certInstitute">Institute Name</label><br><br>
                                                                                            </div>
                                                           <div class="col-sm-3">
                                                                <input type="text"  class="cb_certInstitute form-control" name="cerins" placeholder="Dev Institute">
                                                                </div>
                                                           <div class="col-sm-1"></div>			
                                                                                            
                                         </div>
                                         
                                         <div class="row">
                                
                               <br> <div class="rightAlign col-sm-2" ><label for="certMarks">Marks</label><br><br>
                                </div>
                                                            <div class="col-sm-3">
                                                                  <input type="text"  class="cb_certMarks form-control" name="cermark" placeholder="B+">
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                           <br> <div class="rightAlign col-sm-2" ><label for="certPassYear">Year of Passing</label><br><br>
                                                                                            </div>
                                                           <div class="col-sm-3">
                                                                <input type="year"  class="cb_certPassYear form-control" name="ceryop" placeholder="2015" >
                                                                </div>
                                                                   
                                         </div>
                                            
                                          
                                             
                                          <br><br>
									
									
                                          </div> 
                                          
                                          </div>
                                        </div>
                                      </div>
									
                                      
                                    </div>	
							   
                </div><input type="submit" id="submit1" value="Save and Next" /> </form></body></html>
