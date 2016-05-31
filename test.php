   <?php include'header.inc' ; ?>
<?php $_SESSION['i']=0; ?>
       <style>
#basic {
    font-size: 18;
    margin: 50 70;
}
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
</style>
   <form action="http://localhost/2test.php" method="post">
            <div class="tab-content">
                 <div role="tabpanel" class="tab-pane fade in active" id="basic"><br><hr>	                           			   
                              <div class="row">
                                <input type="hidden" id="custIDval" value="<?php echo $custId; ?>"/>
                              <br>  <div class="rightAlign col-sm-2" ><label for="name">Name  </label><br><br>
                                </div>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"   id="cb_name" name="name"  placeholder="Tony Stark">
                                </div>
                                 <div class="col-sm-1"></div>
                              <br>  <div class="rightAlign col-sm-2" ><label for="url">Gender </label><br><br>
                                </div>
                                <div class="col-sm-3">
                                                <label class="radio-inline">
												
                                                              <input type="radio" name="gender" class="cb_gender" value="male" > Male
                                                            </label>
												
                                                            <label class="radio-inline">
                                                              <input type="radio" name="gender" class="cb_gender" value="female" > Female
                                                            </label>
											
                                </div>
                                 <div class="col-sm-1"></div>	                                
                              </div>
                               
                            <div class="row">
                                
                               <br> <div class="rightAlign col-sm-2" ><label for="jobdescription">Address </label><br><br>
                                </div>
                                <div class="col-sm-3">
                                  <textarea  class="form-control" id="cb_address"  style="resize:none" cols="70" rows="5" name="address" type="text" ></textarea>
							
                                </div>
                                 <div class="col-sm-1"></div>
                               <br> <div class="rightAlign col-sm-2" ><label for="nation">Nationalitiy	</label><br><br></div>					 
                                <div class="col-sm-3"> 
								<input type="text"  class="form-control"  id="cb_nationality" name="nation" placeholder="Indian"  />                
                            
                             </div> 
                                                     <div class="col-sm-1"></div>
                              </div>
    
    
                                <div class="row">
                                
                               <br> <div class="rightAlign col-sm-2" ><label for="city">City </label><br><br>
                                </div>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  id="cb_city" name="city" placeholder="Delhi">
                                </div>
								
								
                             <div class="col-sm-1"></div>	
                               <br> <div class="rightAlign col-sm-2" ><label for="dob">Date of Birth </label><br><br>	</div>					 
                                <div class="col-sm-3"> 
                                <input type="date" class="form-control"  id="cb_dob" name="dob" placeholder="dd/mm/yyyy"> 
                            
                             </div> 
                                    <div class="col-sm-1"></div>
                              </div>
                                
                                
                            
                             
                             
                             
                             <div class="row"> 
                                    
                                  <br>  <div class="rightAlign col-sm-2" ><?php //RESHABH ?><label for="contact" >Contact Number </label><br><br></div>
                                    <div class="col-sm-3">
                                    <input type="tel" class="form-control"  name="contact" id="cb_contact"  placeholder="(xxx) xxx-xxxx">
                                    </div>	
                                    <div class="col-sm-1"></div>
                                   <br> <div class="rightAlign col-sm-2" ><label for="email">Email	</label><br><br></div>					 
                                    <div class="col-sm-3"> 
                                      <input type="email"  class="form-control"  id="cb_email"  name="email" placeholder="user_name@domian.com">
                                     </div> 
<div class="row">
                                
                               <br> <div class="rightAlign col-sm-2" ><label for="jobdescription">Personal Statement</label><br><br>
                                </div>
                                <div class="col-sm-3">
                                  <textarea  class="form-control" id="cb_address" style="resize:none" cols="140" rows="4" name="perso" type="text" ></textarea><br><br>
							
                                                                     	
                                    
                        </div>
						    
                        
                        
                                    
                </div>
<input type="submit" id="submit1" value="Save and Next" />
</form>
                      
                      </body>
</html>
