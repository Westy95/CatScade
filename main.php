<!DOCTYPE html>
<html>
<title>Home</title>
<head>
<style>

h1.monospace {font-family: "Lucida Console", monospace;}

body{background-color: #37474F;}

body {text-align: center;}

.catGame{position: absolute;
			left: 0px;
			top: 250px;}
.catGame{background-color: #BDBDBD;}

.LG{position: fixed;
		right: 0px;
		top: 0px;}

.VB{position: fixed;
	right: 0px;
	bottom: 0px;
}

.tribute{position: fixed;
		right: 0px; 
		bottom: 260px;
}

</style>
</head>
<?php

session_start();

//session from login
$email = $_SESSION["email"];

//connects to the database
$servername= "localhost";
$username= "root";
$pwd= "";
$db= "westgame";

?>

<body>

<a href = "login.html">
<input class ="LG" type ="button" value ="Log Out >>>>">
</a>

<table class="catGame" border="0" cellpadding="0" cellspacing="0"><tr>
	<td align="center"><a href="http://www.kittencannon.us" TITLE = "Click To Play Kitten Cannon!" TARGET = "_blank">
		<img src = "http://www.kittencannon.us/kittencannon.jpg" border="0"></a><BR>
		<a href = "http://www.kittencannon.us" TITLE = "Click To Play Kitten Cannon!" TARGET = "_blank">Kitten Cannon</a></td>
	</tr>
</table>

<h1 class= "monospace"><font color="white">CatScade</font></h1>

<audio id="mp3" src="meow.mp3"></audio>

<button id = "button" onclick= "playMeow()"> Meow!</button>

<div id="factLocation" style="color: #FFFFFF">
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
</script>

<script>
	function playMeow(){
		
	}
</script>

    <script>  
$("button").click(function (){
    $.getJSON('catFacts.php', function(jsonItem) {
        $("#factLocation").html(jsonItem.facts); 
    	});
	});
</script>

</div>

<h2 class= "tribute"><font color="white">R.I.P Virgo-Babey</h2>

<img src= "https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-xfa1/v/t1.0-9/10689431_10152884117198996_6138272126081748628_n.jpg?oh=ef5c2e4cd875d51dae198f9b7151cd4b&oe=559E7C58&__gda__=1440254645_4ff44f7e11b0a9de5545741a9d0c0039"
style= "width:200px; height:260px" class= "VB">

</body>
</html>