<?php
	session_start();
	$_SESSION['login']=0;
	$_SESSION['username']="";
	
	session_destroy();
	header ("location: index.php");


	
?>