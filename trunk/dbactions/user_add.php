<?php

//print_r($_POST);
/*if(isset($_POST['submit'])){
	$error = false;
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$email= trim($_POST['email']);
	$type = trim($_POST['type']);
	$created_at = trim($_POST['created_at']);

	
	if($username=='') {
		$error = true;
		$username_error="Please provide username";
		}
		if($email=='') {
		$error = true;
		$email_error="Please provide email";
		}
		if($email=='') {
		$error = true;
		$email_error="Please provide last name";
		}
		
		*/
		
		
		//step 1 (connection)
		$con=mysql_connect("localhost", "root", "");
  
		//step 2 (database)
		mysql_select_db("pv-gallery");
		
	
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$created_at=$_POST['created_at'];
  		$type=$_POST['type'];

	
		$sql = "INSERT INTO `pv-gallery`.`users` (`id`, `username`, `password`, `email`, `type`, `created_at`) VALUES (NULL, '$username', '$password', '$email', '$type', '$created_at');";
		mysql_query($sql);
		
		//echo"user id".$_Get['id']."deleted";
		header("location: ../users.php");
		
    ?>