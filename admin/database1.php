<?php
session_start();
if(!$_SESSION['login']) header("location: login_r.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
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

  <?php include"view/nav.php" ?>

    <div class="container">

      <h1>Bootstrap starter template</h1>
      <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>
	 <?php
		//step 1 (connection)
		$con=mysql_connect("localhost", "root", "");
  
		//step 2 (database)
		mysql_select_db("test");
  
		//step 3 SQL/get result
		$sql="SELECT * from `table`";
		$result = mysql_query($sql);						
		
    ?>
	
		<div class="bs-docs-example">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>email</th>
				  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
			  <?php 
			//step 4 (grab/process result of query)
			$i=1;
			while($row = mysql_fetch_assoc($result)){
		 		
			
		?> 
			  
			  
                <tr>
				<td>1</td>
                <td><?php echo $row['f_name'];?></td>
				<td><?php echo $row['l_name'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><a href="#">View</a> |
				<a href="dbaction/user_edit.php?id=<?php echo $row['id'];?>"> Edit</a>    | 
				<a href="dbaction/user_delete.php?id=<?php echo $row['id'];?>">Delete</a> </td>
                  </tr>
				  <?php } ?>
              </tbody>
            </table>
			
			
			<?php
	//step 5 (close connection)
		mysql_close($con);
     ?>
	 
	 
	 
	 
			<h3>Add new users</h3>
			<form class="form-horizontal" action="dbaction/user_add.php" method="POST">
  
   <div class="control-group">
    <label class="control-label" for="f_name">First name</label>
    <div class="controls">
      <input type="text" name="f_name" >
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="l_name">Last Name</label>
    <div class="controls">
      <input type="text" name="l_name">
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="Username">email</label>
    <div class="controls">
      <input type="text" name="email">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="Username">password</label>
    <div class="controls">
      <input type="password" name="password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      
       
    
     <button type="submit" class="btn" name="submit">Add User</button>
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
