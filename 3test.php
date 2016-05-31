<?php include 'header.inc' ; ?>
<?php 
session_start();
//$_SESSION['color']="red";
$i=0;

//echo $_SESSION['color'];
$i=0;
$se = array_fill(0,4,0);
$he = array_fill(0,4,0);
$dip = array_fill(0,7,0);
$g = array_fill(0,7,0);
$pg = array_fill(0,7,0);
$cer = array_fill(0,4,0);

$se = array(
    $i => array(
        'school' => $_POST['seschool'] ,
        'board' => $_POST['seboard'] ,
          'yop'=> $_POST['seyop'] ,
         'mark'=> $_POST['semark'],
     ),
    );
    
$he = array(
    $i => array(
      'school' => $_POST['heschool'] ,
        'board' => $_POST['heboard'] ,
          'yop'=> $_POST['heyop'] ,
         'mark'=> $_POST['hemark'],
     ),
    );


/*$dip = array(
    $i => array(
    'roll' =>  $_POST['diproll'],
'PRN' => $_POST['dipPRN'],
'course' =>  $_POST['dipcourse'],
'yop' => $_POST['dipyop'],
    'clg' =>  $_POST['dipclg'],
'board' => $_POST['dipboard'],
'mark' => $_POST['dipmark'],
   ),
  );
*/
$g = array(
    $i => array(
'roll' => $_POST['groll'],
'PRN' => $_POST['gPRN'],
'course' => $_POST['gcourse'],
'yop' => $_POST['gyop'],
'clg' => $_POST['gclg'],
'board' => $_POST['gboard'],
'mark' => $_POST['gmark'],
),
);

$pg = array(
    $i => array(
'roll' => $_POST['pgroll'],
'PRN' => $_POST['pgPRN'],
'course' => $_POST['pgcourse'],
'yop' => $_POST['pgyop'],
'clg' => $_POST['pgclg'],
'board' => $_POST['pgboard'],
'mark' => $_POST['pgmark'],
),
); 
$cer = array(
    $i => array(
'course' => $_POST['cercourse'],
'ins' =>$_POST['cerins'] ,
'mark' => $_POST['cermark'],
'yop' =>  $_POST['ceryop'],
),
);

$i++;

$_SESSION['se'] = $se;
$_SESSION['he'] = $he;
$_SESSION['dip'] = $dip;
$_SESSION['g'] = $g;
$_SESSION['pg'] = $pg;
$_SESSION['cer'] = $cer;

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

#skills {
    margin: 50 70;
    font: 18;
}
</style>
 <form action="http://localhost/4test.php" method="post">
  <div id="skills">	<br><hr><br>			 
							 
                                
                                <div class="row">
							
                               <br> <div class="rightAlign col-sm-2" ><label for="skill">Skills</label><br><br>
                                </div>
                                <div class="col-sm-3">
                                 <textarea  class="form-control" id="cb_address" style="resize:none" cols="70" rows="5" name="skill" type="text" ></textarea>
							
                                </div>
                                 <div class="col-sm-1"></div>
                               <br> <div class="rightAlign col-sm-2" ><label for="expertise">Expertise</label><br><br>
                                </div>
                                <div class="col-sm-3">
                                                
                                              <textarea  class="form-control" id="cb_address" style="resize:none" cols="70" rows="5" name="exp" type="text" ></textarea>
					
                                </div>
                    <div class="col-sm-1"></div>			
                               
                              </div>
                              
                              
                              <div class="row">
                                
                               <br> <div class="rightAlign col-sm-2" ><label for="extraCurricular">Extra Curricular</label><br><br>
                                </div>
                                <div class="col-sm-3">
                                  <textarea  class="form-control" id="cb_address" style="resize:none" cols="70" rows="5" name="ext" type="text" ></textarea>
					</div>
                                 <div class="col-sm-1"></div><br>
                                <div class="rightAlign col-sm-2" ><label for="seminar">Seminar/Workshops</label><br><br>
                                </div>
                                <div class="col-sm-3">
                                                <input type="text"  class="cb_seminar form-control" name="sem"  placeholder="GSOC">    </div>
                    <div class="col-sm-1"></div>			
                                
                              </div>
                              <hr>
					
							   
                              <div class="row">
                             <br> <div class=" col-sm-12" >Projects</div><br>
                              </div>
                              <div id="projectHistory">													  
							    <div class="row">
                                     <br> <div class="rightAlign col-sm-2" ><label for="projectName">Project Title</label><br><br>
                                      </div>
                                        <div class="col-sm-3">
                                          <input type="text"  class="cb_projectName form-control" name="pro" placeholder="Inventory Management System">
                                        </div>
                                                                     <div class="col-sm-1"></div>
                                                                   <br> <div class="rightAlign col-sm-2" ><label for="projectDescription">Project Description</label><br><br>
                                                                    </div>
                                        <div class="col-sm-3">
                                                                    <input type="text"  class="cb_projectDescription form-control" name="prodes" placeholder="Internet of Things">
                                        </div>
                                            <div class="col-sm-1"></div>
                              
                              </div>
                              
                              <div class="row">
                                     <br> <div class="rightAlign col-sm-2" ><label for="projectSkills">Project Skills</label><br><br>
                                                                    </div>
                                        <div class="col-sm-3">
                                          <input type="text"  class="cb_projectSkills myTags form-control" name="prosk" placeholder="C,Arduino">
                                        </div>
                                                                     <div class="col-sm-1"></div>
                                                                   <br> <div class="rightAlign col-sm-2" ><label for="projectYear">Year of Project</label>
                                                                    </div><br><br>
                                        <div class="col-sm-3">
                                                                    <input type="year"  class="cb_projectYear form-control" name="proyop" placeholder="2014">
                                        </div>
                                            <div class="col-sm-1"></div>
                              
                              </div>
                              <hr>
							  
							  
							  
							  
							  
                              
                              </div>
                              
                             </div>
<input type="submit" id="submit1" value="save and next" /></form>
                             
</body>
</html>
