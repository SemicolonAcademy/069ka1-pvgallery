<?php
session_start();
if(!$_SESSION['login']) header("location: login.php");
?>
<?php
		//step 1 (connection)
		$con=mysql_connect("localhost", "root", "");
		//step 2 (database)
		mysql_select_db("test");
		$password=$_POST['password'];
		$f_name=$_POST['f_name'];
		$l_name=$_POST['l_name'];
		$email=$_POST['email'];
		$sql = "INSERT INTO `test`.`table` (`id`, `f_name`, `l_name`, `password`, `email`) VALUES (NULL, '$f_name','$l_name','$password','$email');";
		mysql_query($sql);
		header("location: ../database1.php");
    ?>