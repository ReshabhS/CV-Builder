<html>
<head>
<title></title>
<style>
body {
    background-color: #e5eade;
}
.heading {
    font-family: "cursive";
    font-size: 60pt;
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
<!--<script type="text/javascript">
function ReplaceContentInContainer(id,content)
{
var container=document.getElementById(id);
container.innerHTML = content;
}
var edu="";
var skills="";
var t="<br>hekko";
</script>-->
</head>
<body>
<div class="fixed">
<span class="heading">Step : 2 Choose a template</span>
<br/><br/>

<form>
<!--<a href="javascript:ReplaceContentInContainer('div1',t)">-->
<a href="http://localhost/test.php"> <input id="submit1" type="button" value="Personal-Information" />
</a><a href="http://localhost/2test.php"><input id="submit1" type="button" value="Education" />
</a><a href="http://localhost/3test.php"><input id="submit1" type="button" value="Skills" />
</a><a href="http://localhost/4test.php"><input id="submit1" type="button" value="Employment" />
</a><input id="submit1" type="button" value="Templates" />
</form>
</div>

