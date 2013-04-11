<?php
session_start();
if (!$_SESSION['login']) header ("location: index.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PV Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">VIG</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
			  <li class="active"><a href="logout.php">@<?php echo $_SESSION['username'];?>Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <h1>Photo Video and Music Gallery</h1>
      
	 <?php
		//step 1 (connection)
		$con=mysql_connect("localhost", "root", "");
  
		//step 2 (database)
		mysql_select_db("pv-gallery");
  
		//step 3 SQL/get result
		$sql="SELECT * from `users`";
		$result = mysql_query($sql);						
		
    ?>
		<div class="bs-docs-example">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Type</th>
				  <th>Created at</th>
				  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
			  <?php 
			//step 4 (grab/process result of query)
			$i=0;
			while($row = mysql_fetch_assoc($result)){
		 	$i++;	
			//echo "<pre>";print_r($row);echo "</pre>";
			
		?> 
			  
			  
                <tr>
				<td><?php echo $i; ?></td>
                <td><?php echo $row['username'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['type'];?></td>
				<td><?php echo $row['created_at'];?></td>
				

				<td><a href="#">View</a> |
				<a href="dbactions/user_edit.php?id=<?php echo $row['id'];?>"> Edit</a>    | 
				<a href="dbactions/user_delete.php?id=<?php echo $row['id'];?>">Delete</a> </td>
                  </tr>
				  <?php } ?>
              </tbody>
            </table>
			
			
			<?php
	//step 5 (close connection)
		mysql_close($con);
     ?>
	 
	 
	 
	 
			<h3>Add new users</h3>
			<form class="form-horizontal" action="dbactions/user_add.php" method="POST">
  
   <div class="control-group">
    <label class="control-label" for="username">Username</label>
    <div class="controls">
      <input type="text" name="username" >
	  
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="email">Email</label>
    <div class="controls">
      <input type="text" name="email">
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="password">Password</label>
    <div class="controls">
      <input type="password" name="password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      
       
    
      <button name="submit" value="adduser" type="submit" class="btn">Add User</button>
    </div>
  </div>
</form>
          </div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
