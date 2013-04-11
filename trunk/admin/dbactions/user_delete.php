<?php
session_start();
if(!$_SESSION['login']) header("location: login.php");
?>
<?php
		//step 1 (connection)
		$con=mysql_connect("localhost", "root", "");
  
		//step 2 (database)
		mysql_select_db("test");
  
		$id=$_GET['id'];
		$sql="delete from `test`.`table`where`table`.`id`=$id";
		mysql_query($sql);
		
		//echo"user id".$_Get['id']."deleted";
		header("location: ../database1.php");
    ?>