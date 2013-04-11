<?php
		//step 1 (connection)
		$con=mysql_connect("localhost", "root", "");
  
		//step 2 (database)
		mysql_select_db("pv-gallery");
  
		$id=$_GET['id'];
		$sql="delete from `pv-gallery`.`users` where`users`.`id`=$id";
		mysql_query($sql);
		
		//echo"user id".$_Get['id']."deleted";
		header("location: ../users.php");
    ?>