<?php
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	if ( $_POST['submit']){
		if($username !="" && $password !="") {
			$password = md5($_POST['password']);
			$con = mysql_connect("localhost","root","");
			mysql_select_db("pv-gallery");
			$sql = "select * from `users` where `username`='$username' and `password`='$password'";
			$result = mysql_query($sql);
			$count = mysql_num_rows($result);
					if($count == 1) {
						//echo "Login Success";
						
						$_SESSION['login']=1;
						$_SESSION['username']=$username;
						header ("location: users.php");
					}
					else {
						echo "Login Failed";
				}
				}
		else {
				echo "Please provide username and password";
		}
	}
	
	
?>

<form class="form-horizontal" action="" method="POST">
  <div class="control-group">
    <label class="control-label" for="inputEmail"><h1>Login</h1></label>
    <div class="controls">
      Username: <input name="username" value="" type="text" id="inputEmail" placeholder="Username">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      Password: <input name="password" value="" type="password" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
     
      <button name="submit" value="login" type="submit" class="btn">Sign in</button>
    </div>
  </div>
</form>
