<?php
// Start the buffering //
ob_start();
?>
<html>
<head>

<!-- <meta http-equiv="refresh" content="0; url=http://localhost/letsc.php" /> -->
 <meta http-equiv="refresh" content="10;url=http://localhost/letsc.php">
        <script type="text/javascript">
            window.location.href = "http://localhost/letsc.php"
        </script>
</head>
<body>

<?php
session_start();
$searray=array();
$searray = $_SESSION['se'];  //Assigns session var to $array
$hearray=array();
$hearray = $_SESSION['he'];
$garray=array();
$garray = $_SESSION['g'];  
$pgarray=array();
$pgarray = $_SESSION['pg']; 
$cerarray=array();
$cerarray = $_SESSION['cer']; 



//echo $searray[0][school];    
//print_r($searray);


//print_r($_SESSION['aemp']);
if (isset($_POST['temp'])){
$_SESSION['val'] = $_POST['temp'];}
//echo $_SESSION['i'];
switch($_SESSION['val'])
{  
   case '1' :
            {
             echo '<hr />
<p lang="en-US" style="margin-top: 0.11cm; margin-bottom: 0.11cm; line-height: 100%;"><span style="font-family: Times New Roman,serif;"><span style="font-size: medium;"><span style="font-family: Arial,sans-serif;"><span style="font-size: small;"><strong>'.$_SESSION['name'].'</strong></span></span><span style="font-family: Arial,sans-serif;"><span style="font-size: small;"><br /> </span></span><span style="color: #0000ff;"><span style="text-decoration: underline;"><a href="mailto:email@address.co.uk"><span style="font-family: Arial,sans-serif;"><span style="font-size: small;"><strong>'.$_SESSION['email'].'</strong></span></span></a></span></span><span style="font-family: Arial,sans-serif;"><span style="font-size: small;"><br /> </span></span><span style="font-family: Arial,sans-serif;"><span style="font-size: small;">'.$_SESSION['contact'].'</span></span><span style="font-family: Arial,sans-serif;"><span style="font-size: small;"><br /> </span></span><span style="font-family: Arial,sans-serif;"><span style="font-size: small;">'.$_SESSION['address'].'</span></span></span></span></p>
<!--<p lang="en-US" style="margin-top: 0.42cm; margin-bottom: 0.11cm; line-height: 100%;">&nbsp;</p>-->
<hr />
<p lang="en-US" style="margin-bottom: 0cm; line-height: 100%;"><span style="font-family: Arial,sans-serif;"><span style="font-size: small;"><strong>PERSONAL STATEMENT</strong></span></span> </p>
<p lang="en-US" style="margin-bottom: 0cm; line-height: 100%;"><span style="font-family: Times New Roman,serif;"><span style="font-size: small;"><span style="font-family: Arial,sans-serif;">'.$_SESSION['perso'].'</span></span></span></p>
<!--<p class="western" lang="en-US" style="margin-bottom: 0cm; line-height: 100%;">&nbsp;</p>-->
<hr />
<p class="western" lang="en-US" style="margin-bottom: 0cm; line-height: 100%;"><span style="font-family: Arial,sans-serif;"><span style="font-size: small;"><strong>KEY SKILLS</strong></span></span></p>
<br>
<p class="western" lang="en-US" style="margin-bottom: 0cm; line-height: 100%;"><span style="font-family: Arial,sans-serif;"><span style="font-size: small;"><strong>Technical Skills</strong></span></span></p>
<p class="western" lang="en-US" style="margin-bottom: 0cm; line-height: 100%;"><span style="font-family: Arial,sans-serif;"><span style="font-size: small;"><pre>'.$_SESSION['skill'].'</pre></span></span></p>


<!--<p class="western" lang="en-US" style="margin-bottom: 0cm; line-height: 100%;">&nbsp;</p>-->
<h5 class="western" lang="en-US" style="font-style: normal;"></h5>EMPLOYMENT<hr><br>';
/*for($j=0;$j<$_SESSION['i'];$j++)
{ echo '<ul><li>Worked at '.$_SESSION['emp[$j]'].' at the post of '.$_SESSION['emp[$j]'].'</li><li>Role --'.$_SESSION['role[$j]'].'</li><li>Worked from'.$_SESSION['empfrom[$j]'].'to ';
if($_SESSION['work']==2)
echo $_SESSION['emptill[$j]'];
else
echo 'till now';
echo '</li></ul>';
echo '<br>';
}*/


echo '<pre>'.$_SESSION['emp'].'</pre><p lang="en-US" style="margin-bottom: 0cm; line-height: 100%;"><span style="font-family: Arial,sans-serif;"><span style="font-size: small;"><strong>Education</strong></span></span></p>';
if (isset($pgarray[0][roll])){
echo 'POST GRADUATION<br>
Completed Post Graduation from '.$pgarray[0][clg].' affiliated to '.$pgarray[0][board].' scoring '.$pgarray[0][mark].' percent marks<br><br>';
}

if (isset($garray[0][groll])){
echo 'GRADUATION<br>
Completed Graduation from '.$garray[0][clg].' affiliated to '.$garray[0][board].' scoring '.$garray[0][mark].' percent marks<br><br>';
}

if (isset($searray[0][school])){
echo 'Secondary Education<br>
Completed Secondary Education from '.$searray[0][school].' affiliated to '.$searray[0][board].' scoring '.$searray[0][mark].' percent marks<br><br>';
}           

if (isset($hearray[0][heschool])){
echo 'Higher Secondary Education<br>Completed Higher Secondary Education from '.$hearray[0][school].' affiliated to '.$hearray[0][board].' scoring '.$hearray[0][mark].' percent marks<br><br>';
}           



echo '<hr/>
<!--<p class="western" lang="en-US" style="margin-bottom: 0cm; line-height: 100%;">&nbsp;</p>-->
<p class="western" lang="en-US" style="margin-bottom: 0cm; line-height: 100%;"><span style="font-family: Arial,sans-serif;"><span style="font-size: small;"><strong>PERSONAL INTERESTS</strong></span></span></p>

<p class="western" lang="en-US" style="margin-bottom: 0cm; line-height: 100%;"><span style="font-family: Arial,sans-serif;"><span style="font-size: small;"><pre>'.$_SESSION['ext'].' </span></span></p>
<!--<p>&nbsp;</p>
<p>&nbsp;</p>-->' ;


} break;
case 2 : echo'<p class="western" lang="en-US" style="margin-bottom: 0cm;" align="center"><span style="font-family: Arial,sans-serif;"><span style="font-size: x-large;"><strong>'.$_SESSION['name'].'</strong></span></span><span style="font-family: Arial,sans-serif;"><br /> </span><span style="color: #0000ff;"><span style="text-decoration: underline;"><span style="font-family: Arial,sans-serif;">'.$_SESSION['email'].'</span></span></span><span style="font-family: Arial,sans-serif;"><br /> '.$_SESSION['contact'].'<br /> '.$_SESSION['city'].'</span></p>

<p class="western" lang="en-US" style="margin-bottom: 0cm;">&nbsp;</p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;">&nbsp;</p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;" align="center"><span style="font-family: Arial,sans-serif;"><span style="font-size: large;"><strong>~~~~~~~~~~ PERSONAL STATEMENT ~~~~~~~~~~</strong></span></span></p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;" align="center"><span style="color: #0000ff;"><span style="text-decoration: underline;"><span style="font-family: Arial,sans-serif;">'.$_SESSION['perso'].'</span></span></span></p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;">&nbsp;</p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;">< <span style="font-family: Arial,sans-serif;">'.$_SESSION['career_obj'].'</span></p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;">&nbsp;</p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;">&nbsp;</p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;" align="center"><span style="font-family: Arial,sans-serif;"><span style="font-size: large;"><strong>~~~~~~~~~~ EMPLOYMENT HISTORY ~~~~~~~~~~</strong></span></span></p>

<strong><pre>'.$_SESSION['emp'].'</pre></strong>
<strong>~~~~~~~~~~ KEY SKILLS ~~~~~~~~~~</strong></span></span></p>

<p class="western" lang="en-US" style="margin-bottom: 0cm;">&nbsp;</p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;"><span style="font-family: Arial,sans-serif;"><strong>Technical Skills</strong></span></p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;"><span style="font-family: Arial,sans-serif;"><srong><pre>'.$_SESSION['skill'].'</pre></strong></span></p>

<p class="western" lang="en-US" style="margin-bottom: 0cm;">&nbsp;</p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;">&nbsp;</p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;" align="center"><span style="font-family: Arial,sans-serif;"><span style="font-size: large;"><strong>~~~~~~~~~~ EDUCATION ~~~~~~~~~~</strong></span></span></p>

<p class="western" lang="en-US" style="margin-bottom: 0cm;">&nbsp;</p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;"><span style="font-family: Arial,sans-serif;"> </span>';

if (isset($pgarray[0][roll])){
echo 'POST GRADUATION<br>
Completed Post Graduation from '.$pgarray[0][clg].' affiliated to '.$pgarray[0][board].' scoring '.$pgarray[0][mark].' percent marks<br><br>';
}

if (isset($garray[0][groll])){
echo 'GRADUATION<br>
Completed Graduation from '.$garray[0][clg].' affiliated to '.$garray[0][board].' scoring '.$garray[0][mark].' percent marks<br><br>';
}

if (isset($searray[0][school])){
echo 'Secondary Education<br>
Completed Secondary Education from '.$searray[0][school].' affiliated to '.$searray[0][board].' scoring '.$searray[0][mark].' percent marks<br><br>';
}           

if (isset($hearray[0][heschool])){
echo 'Higher Secondary Education<br>Completed Higher Secondary Education from '.$hearray[0][school].' affiliated to '.$hearray[0][board].' scoring '.$hearray[0][mark].' percent marks<br><br>';
}           





echo '<br /> </span></p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;">&nbsp;</p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;" align="center"><span style="font-family: Arial,sans-serif;"><span style="font-size: large;"><strong>~~~~~~~~~~ PERSONAL INTERESTS ~~~~~~~~~~</strong></span></span></p>

<p class="western" lang="en-US" style="margin-bottom: 0cm;">&nbsp;</p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;"><span style="font-family: Arial,sans-serif;"><pre>'.$_SESSION['ext'].'</pre> </span></p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;">&nbsp;</p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;">&nbsp;</p>
<p class="western" lang="en-US" style="margin-bottom: 0cm;" align="center"><span style="font-family: Arial,sans-serif;"><span style="font-size: large;"><strong>~~~~~~~~~~ REFERENCES ~~~~~~~~~~</strong></span></span></p>

<p class="western" lang="en-US" style="margin-bottom: 0cm;"><span style="font-family: Arial,sans-serif;">References are available on request. </span></p>';break;

case 3 : { echo '<p>&nbsp;</p>
<p lang="en-GB" style="page-break-after: avoid;" align="left"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong>'.$_SESSION['name'].'</strong></span></span></p>
<p lang="en-GB" style="page-break-after: avoid;" align="left"><span style="font-family: Arial Narrow,sans-serif;"><span style="font-size: xx-large;"><strong><span style="color: #0000ff;"><span style="text-decoration: underline;"><a class="western" href="mailto:email@address.co.uk"><span style="font-family: Times New Roman,serif;"><span style="font-size: small;">'.$_SESSION['email'].'</span></span></a></span></span></strong></span></span></p>
<p lang="en-GB" style="font-weight: normal; page-break-after: avoid;" align="left"><span style="font-family: Times New Roman,serif;"><span style="font-size: small;">'.$_SESSION['contact'].'</span></span></p>
<p lang="en-GB" style="font-weight: normal; page-break-after: avoid;" align="left"><span style="font-family: Times New Roman,serif;"><span style="font-size: small;">'.$_SESSION['address'].'</span></span></p>
<p>&nbsp;</p>
<p class="western" lang="en-GB" align="left"><span style="font-family: Times New Roman,serif;"><span style="font-size: small;"><strong>PERSONAL STATEMENT</strong></span></span></p>
<p class="western" lang="en-GB" align="left">&nbsp;</p>
<p class="western" lang="en-GB" align="left"><span style="font-family: Times New Roman,serif;"><span style="font-size: small;">'.$_SESSION['perso'].'. </span></span></p>
<p class="western" lang="en-GB" align="left">&nbsp;</p>

<h4 class="western" lang="en-GB" align="left"><span style="font-family: Times New Roman,serif;"><span style="font-size: small;">PERSONAL SKILLS</span></span></h4>
<p class="western" lang="en-GB" align="left">&nbsp;</p>
<p lang="en-GB" align="left"><span style="font-family: Times New Roman,serif;"><span style="font-size: small;"></span></span></p>
<h4 class="western" lang="en-GB" align="left"><span style="font-family: Times New Roman,serif;"><span style="font-size: small;"><span style="font-weight: normal;">Flexibility, p</span></span></span><span style="font-family: Times New Roman,serif;"><span style="font-size: small;"><span style="font-weight: normal;"><pre>'.$_SESSION['skill'].'</pre></span></span></span></h4>
<p>&nbsp;</p>
<p lang="en-GB" style="page-break-after: avoid;" align="left"><span style="font-size: small;"><strong><span style="font-family: Times New Roman,serif;">CAREER HISTORY</span></strong></span></p>
<p>&nbsp;</p><pre>'.$_SESSION['emp'].'</pre><p>&nbsp;</p>
<h3 class="western" lang="en-GB" style="font-weight: normal;" align="left"><span style="font-family: Times New Roman,serif;"><span style="font-size: small;">Education:</span></span></h3>
<p class="western" lang="en-GB" align="left">&nbsp;</p>';


if (isset($pgarray[0][roll])){
echo 'POST GRADUATION<br>
Completed Post Graduation from '.$pgarray[0][clg].' affiliated to '.$pgarray[0][board].' scoring '.$pgarray[0][mark].' percent marks<br><br>';
}

if (isset($garray[0][groll])){
echo 'GRADUATION<br>
Completed Graduation from '.$garray[0][clg].' affiliated to '.$garray[0][board].' scoring '.$garray[0][mark].' percent marks<br><br>';
}

if (isset($searray[0][school])){
echo 'Secondary Education<br>
Completed Secondary Education from '.$searray[0][school].' affiliated to '.$searray[0][board].' scoring '.$searray[0][mark].' percent marks<br><br>';
}           

if (isset($hearray[0][heschool])){
echo 'Higher Secondary Education<br>Completed Higher Secondary Education from '.$hearray[0][school].' affiliated to '.$hearray[0][board].' scoring '.$hearray[0][mark].' percent marks<br><br>';
}           
      
echo '<p class="western" lang="en-GB" align="left"><span style="font-family: Times New Roman,serif;"><span style="font-size: medium;"><span style="font-size: small;"><strong>PERSONAL INTERESTS</strong></span></span></span></p>
<p class="western" lang="en-GB" align="left">&nbsp;</p>
<p class="western" lang="en-GB" align="left"><span style="font-family: Times New Roman,serif;"><span style="font-size: medium;"><span style="font-size: small;">'.$_SESSION['ext'].'.</span></span></span></p>
<p class="western" lang="en-GB" align="left">&nbsp;</p>
<p>&nbsp;</p>'; break; }

case 4 :{
echo '
<p lang="en-GB" style="margin-bottom: 0cm; line-height: 100%;" align="center"><span style="color: #ff0000;"><span style="font-family: Calibri,sans-serif;"><span style="font-size: x-large;">'.$_SESSION['name'].'</span></span></span></p>
<p lang="en-GB" style="margin-left: -1cm; margin-right: -1.08cm; margin-bottom: 0cm; line-height: 100%;" align="center"><span style="color: #ff0000;"><span style="font-family: Calibri,sans-serif;"><span style="font-size: small;"><span style="text-decoration: underline;"></span></span></span></span></p>
<p lang="en-GB" style="margin-bottom: 0cm; line-height: 100%;" align="center"><span style="color: #ff0000;"><span style="font-family: Calibri,sans-serif;"><span style="font-size: small;">'.$_SESSION['address'].'</span></span></span></p>
<p lang="en-GB" style="margin-bottom: 0cm; line-height: 100%;" align="center"><span style="font-family: Calibri,sans-serif;"><span style="font-size: small;"><span style="color: #ff0000;"><span lang="en-IN">'.$_SESSION['contact'].'</span></span><span style="color: #ff0000;"> | </span><span style="color: #ff0000;"><span style="text-decoration: underline;">email address</span></span><span style="color: #ff0000;"></span></span></span></p>
<p lang="en-GB" style="margin-left: -1cm; margin-right: -1.08cm; margin-bottom: 0cm; line-height: 100%;" align="justify">&nbsp;</p>
<p lang="en-GB" style="margin-left: -1cm; margin-right: -1.08cm; margin-bottom: 0cm; line-height: 100%;" align="justify">&nbsp;</p>
<p lang="en-GB" style="margin-left: -1cm; margin-right: -1.08cm; margin-bottom: 0cm; line-height: 100%;" align="justify"><span style="font-family: Calibri,sans-serif;"><span style="font-size: small;"><strong>Profile</strong></span></span></p>
<p lang="en-GB" style="margin-left: -1cm; margin-right: -1.08cm; margin-bottom: 0cm; line-height: 100%;" align="justify"><span style="color: #ff0000;"><span style="font-family: Calibri,sans-serif;"><span style="font-size: small;">'.$_SESSION['career_obj'].'</span></span></span></p>
<p lang="en-GB" style="margin-left: -1cm; margin-right: -1.08cm; margin-bottom: 0cm; line-height: 100%;" align="justify">&nbsp;</p>
<strong>Skills Matrix</strong></span></span></p>
<pre>'.$_SESSION['skill'].'
<strong>Personal Attributes</strong></span></span></p>
'.$_SESSION['perso'].'
<strong>Career Detail</strong></span></span></p><pre>'.$_SESSION['emp'].'</pre>
<strong>Education and Qualifications</strong><br>';


if (isset($pgarray[0][roll])){
echo 'POST GRADUATION<br>
Completed Post Graduation from '.$pgarray[0][clg].' affiliated to '.$pgarray[0][board].' scoring '.$pgarray[0][mark].' percent marks<br><br>';
}

if (isset($garray[0][groll])){
echo 'GRADUATION<br>
Completed Graduation from '.$garray[0][clg].' affiliated to '.$garray[0][board].' scoring '.$garray[0][mark].' percent marks<br><br>';
}

if (isset($searray[0][school])){
echo 'Secondary Education<br>
Completed Secondary Education from '.$searray[0][school].' affiliated to '.$searray[0][board].' scoring '.$searray[0][mark].' percent marks<br><br>';
}           

if (isset($hearray[0][heschool])){
echo 'Higher Secondary Education<br>Completed Higher Secondary Education from '.$hearray[0][school].' affiliated to '.$hearray[0][board].' scoring '.$hearray[0][mark].' percent marks<br><br>';
}           


echo '<strong>Hobbies and Interests - </strong><span style="color: #ff0000;"><pre>'.$_SESSION['ext'].'</pre></span></span></span></p>
<p lang="en-GB" style="margin-left: -1cm; margin-right: -1.08cm; margin-bottom: 0cm; line-height: 100%;">&nbsp;</p>
<p lang="en-GB" style="margin-left: -1cm; margin-right: -1.08cm; margin-bottom: 0cm; line-height: 100%;" align="center"><span style="font-family: Calibri,sans-serif;"><span style="font-size: small;"><strong>References are available on request</strong></span></span></p>
<p lang="en-GB" style="margin-left: -1cm; margin-right: -1.08cm; margin-bottom: 0cm; line-height: 100%;" align="center">&nbsp;</p>
<p lang="en-GB" style="margin-left: -1cm; margin-right: -1.08cm; margin-bottom: 0cm; line-height: 100%;"><span style="font-family: Calibri,sans-serif;"><span style="font-size: small;"><span style="font-family: Arial,sans-serif;"><span style="font-size: small;"><strong></strong></span></span></span></span></p>';
break;
}
}

?>


</body>
</html>
<?php


// Get the content that is in the buffer and put it in your file //

file_put_contents('yourpage.html', ob_get_contents());
/*if(sleep(600)==0){
session_unset(); session_destroy(); 
}*/
?>
