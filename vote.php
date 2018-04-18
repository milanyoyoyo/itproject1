<?php
session_start();
 if (empty($_SESSION['name']))
{
header('Location:loginssession1.html');
}
if (empty($_SESSION["declare"]))
{
header('Location:result1.html');
}
?>

<html>
<head>
<title>Voting system</title>

<script type="text/javascript">
var ajaxRequest=new XMLHttpRequest();
function getcandidatelist()  
{
   if (!ajaxRequest)  {
         document.getElementById("showcandidate").innerHTML = "Request error!ajax object could not be created";
         return;      } 
   ajaxRequest.onreadystatechange = ajaxResponse;
   ajaxRequest.open("GET","list.php");
   ajaxRequest.send();
}
function ajaxResponse()  //This gets called when the readyState changes.
{
 if (ajaxRequest.readyState != 4)  //  check to see if we're done
    {  return;  }
 else {
   if (ajaxRequest.status == 200) //  check to see if successful
        {
                 document.getElementById("showcandidate").innerHTML =
                               ajaxRequest.responseText; }
   else {
     alert("Request failed: " + ajaxRequest.statusText);
        }
   }
}
var count = 0;

function verification()
	{   
		var voted_for=document.getElementById("myform").elements['vote'].value;
		document.getElementById("showcandidate1").innerHTML=voted_for;
		   ajaxRequest.open("GET","logout.php?vote="+voted_for);
   ajaxRequest.send();
	
	}
</script>
</head>
<body onload="getcandidatelist();">
	<h1>Elections</h1>

	<h2>List of candidates  for the Elections of the year 2017-2018</h2>

	<form >
   	   <input type="button" value="list of candidates"  onclick="getcandidatelist();"/>

	</form>

	<div id="showcandidate" class="displaybox">
	</div>
	<br>
	<input type="submit" value="Submit" onclick="verification();"/>
	<br>
	<br>
	<div id="showcandidate1" class="displaybox"></div>

</body>
</html>
