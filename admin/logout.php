<?php
session_start();
		$password=$_POST['password'];
		$email=$_POST['email'];
					//echo"log in success!";
					//set session
					$_SESSION['login']=0;
					$_SESSION['email']="";
					session_destroy();
					header("location: login_r.php");
  ?> 
