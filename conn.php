<?php
	$db=mysqli_connect("localhost","root","","1dialaway");
	if(!$db){
		die("conncetion failure<br>");
	}	
	mysqli_query($db,"SET NAMES 'utf8'");
?>