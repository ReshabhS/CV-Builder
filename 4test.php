<?php include 'header.inc' ?>
 <?php
session_start();
if (isset($_POST['skill'])){
$_SESSION['skill'] = $_POST['skill'];}
$i=$_SESSION['i'];
if (isset($_POST['ext'])){
$_SESSION['ext'] = $_POST['ext'];}
if (isset($_POST['exp'])){
$_SESSION['exp'] = $_POST['exp'];}
if (isset($_POST['sem'])){
$_SESSION['sem'] = $_POST['sem'];}
if (isset($_POST['pro'])){
$_SESSION['pro'] = $_POST['pro'];}
if (isset($_POST['prodes'])){
$_SESSION['prodes'] = $_POST['prodes'];}
if (isset($_POST['prosk'])){
$_SESSION['prosk'] = $_POST['prosk'];}
if (isset($_POST['proyop'])){
$_SESSION['proyop'] = $_POST['proyop'];}



/*
$i=$_SESSION['i'];
$emp=array();
$emp[$i] = $_POST['emp'];
//array_push($emp,$_POST['emp']);
$_SESSION['aemp']=$emp;
*/
/*$empi=array();
array_push($empi,$_POST['emp']);
$_SESSION[aemp]=$empi;
//print_r($_SESSION[aemp]['1']);
for($j=0;$j<$i;$j++)
print_r($empi[$j]);
/*if (isset($_POST['emp'])){
$_SESSION[emp[$i]] = $_POST['emp'];}
if (isset($_POST['com'])){
$_SESSION[com[$i]] = $_POST['com'];}
if (isset($_POST['des'])){
$_SESSION['des[$i]'] = $_POST['des'];}
if (isset($_POST['role'])){
$_SESSION['role[$i]'] = $_POST['role'];}
if (isset($_POST['empfrom'])){
$_SESSION['empfrom[$i]'] = $_POST['empfrom'];}
if (isset($_POST['work'])){
$_SESSION['work[$i]'] = $_POST['work'];}
if (isset($_POST['emptill'])){
$_SESSION['emptill[$i]'] = $_POST['emptill'];}*/
$_SESSION['i']++;
?>





<style>
.row {
    position: relative;
    bottom: 100;
}
.boxi {
    position: relative;
    bottom: 320;
    left: 200;
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

#employment {
    margin: 50 70;
}
</style>



<form method="post" action="http://localhost/template.php" >
     <div role="tabpanel" class="tab-pane fade" id="employment">
                              <div id="employmentHistory">														   
											
											<div class="row" >
											<div class="col-md-2"></div>
											
											<br>
											<div class="col-md-2"></div>
											</div>
											<hr>
											 <div class="row">
                                
                                                                  <br><br> <br> <div class="rightAlign col-sm-2" ><label for="employer">Employer</label><br><br>
                                                                    </div>
                                        <div class="col-sm-3">
                                          <!--<input type="text" class="cb_employer form-control" name="emp" placeholder="BOSCH Gmbh">-->
                                        </div>
                                                                     <div class="col-sm-1"></div>
                                                                   <br> <div class="rightAlign col-sm-2" ><label for="companyLocation">Company Location</label><br><br>
                                                                    </div>
                                        <div class="col-sm-3">
                                                                    <!--<input type="text" class="cb_companyLocation form-control" name="com" placeholder="Abstatt">-->
                                        </div>
                                            <div class="col-sm-1"></div>			
                                                                    
                                      </div>
                                      
                                      <div class="row">
                                
                                                                   <br> <div class="rightAlign col-sm-2" ><label for="designation">Designation</label>
                                                                   <br><br> </div>
                                        <div class="col-sm-3">
                                         <!-- <input type="text"  class="cb_designation form-control" name="des" placeholder="Manager">-->
                                        </div>
                                                                     <div class="col-sm-1"></div>
                                                                  <br>  <div class="rightAlign col-sm-2" ><label for="rolesOfResponsibilty">Roles of Responsibilty</label><br><br>
                                                                    </div>
                                        <div class="col-sm-3">
                                                                   <!-- <input type="text"  class="cb_rolesOfResponsibilty myTags form-control" name="role" placeholder="Chasis Designer, UI/UX Development">-->
                                        </div>
                                            <div class="col-sm-1"></div>			
                                                                    
                                      </div>
                                      <div class="row">
                                     
                                
                                                                   <br> <div class="rightAlign col-sm-2" ><label for="employedFrom">Employed From</label><br><br>
                                                                    </div>
                                      <!--  <div class="col-sm-3">
                                          <input type="date"  class="cb_employedFrom form-control" name="empfrom" >
                                        </div>
                                                                     <!--<div class="col-sm-1"></div>-->
                                          <!--          <div class="rightAlign col-sm-3" >
													<div class="col-sm-6">
                                                    <label class="radio-inline">
                                                          <input type="radio" name="work" class="cb_stillWorking1" value="1"> <a id="stillWorkingRadio">Currently Working</a>
                                                     </label>
													 </div>
													 <div class="col-sm-6">
                                                     <label class="radio-inline">
                                                           <input type="radio" name="work" class="cb_emoployedTillRadio1" value="2"><a  id="emoployedTillRadio"> Employed Till</a><br>
                                                      </label>
                                                         </div>
                                                    </div>
                                        <div class="col-sm-3">
                                                      <input type="date"  class="cb_employedTill form-control" id="cb_employedTill1" name="emptill" >
                                       </div>
										
                                 <div class="col-sm-1"></div>			
                                                                   
                                      </div>-->
                                     <br>
									  <hr>
									 
								  
                             </div>  	
							 
						<div class="box">
<textarea cols="140" class="boxi" rows="50" name="emp" ></textarea></div>	 
						<hr>	 
                                      
                             </div><!-- <input type="submit" id="submit1" value="save and more" /> </form>  <!--<end of id= employent>  -->
<!--<form method="post" action="http://localhost/template.php" > -->
							  <div role="tabpanel" class="tab-pane fade " id="choosetmp">	
                                     <div id="cvMakerFooter" class="row" style="text-align:center; margin-bottom:15px;">
										<div class="row">
											<div class="rightAlign col-sm-2" ><label for="name">Career Objective*</label><br><br>
											</div>
											<div class="col-sm-3">
											<textarea style="resize:none" cols="70" rows="5"  type="text" class="form-control"   id="career_obj" name="career_obj"  placeholder="To continuously enhance my knowledge etc...." "></textarea>
											</div>
										</div>
										
                                    </div> <br><br><input id="submit1" type="submit" value="save and next" />
</form>
</body>
</html>
