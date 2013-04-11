<?php
session_start();
if(!$_SESSION['login']) header("location: login_r.php");
?>
<?php
		$con=mysql_connect("localhost", "root", "");
  		mysql_select_db("pv-gallery");
  		$id=$_GET['id'];
		$sql = "SELECT * FROM `users` where `id`=$id";
		$result=mysql_query($sql);
		$row=mysql_fetch_assoc($result);
    ?>
	
				<h3>update user <?php echo "$row[f_name]";?> </h3>
			<form class="form-horizontal" action="" method="POST">
   <div class="control-group error">

    <label class="control-label" for="f_name" >First name</label>
    <div class="controls">
      <input type="text" name="f_name" value="<?php echo "$row[f_name]"; ?>" >
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="l_name">Last Name</label>
    <div class="controls">
      <input type="text" name="l_name" value="<?php echo "$row[l_name]"; ?>">
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="Username">email</label>
    <div class="controls">
      <input type="text" name="email" value="<?php echo "$row[email]"; ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="Username">password</label>
    <div class="controls">
      <input type="password" name="password"value="<?php echo "$row[password]"; ?>">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">     
	<button type="submit" class="btn" name="submit">update User</button>
    </div>
  </div>
</form>
<?php
		//step 1 (connection)
		$con=mysql_connect("localhost", "root", "");
		//step 2 (database)
		mysql_select_db("test");
		$password=$_POST['password'];
		$f_name=$_POST['f_name'];
		$l_name=$_POST['l_name'];
		$email=$_POST['email'];
		$sql = "UPDATE `test`.`table` SET `f_name` = \''$f_name'\', `l_name` = \''$l_name'\', `password` = \''$password'\', `email` = \''$email'\' WHERE `table`.`id` = 73 LIMIT 1;";
		mysql_query($sql);
		header("location: ./users.php");
 ?>


