<!DOCTYPE html>
<html>
<head>
	<title>My Profile!</title>
	<link rel="stylesheet" type="text/css" href="update_design.css">
</head>
<body>
	<div class="header">
	  <h1>Skill Share System</h1>
	</div>

	<div class="topnav">
		<a href="home.php">Home</a>
	  <a href="jobs.php">Job</a>
	  <a href="notice.php">Notice</a>
	  <a href="course.php">Course</a>
	  <a href="../Control/logout.php" style="float:right">Logout</a>
	  <a href="profile.php" style="float:right">My Profile, 
	  	<?php
			session_start();
			$username=$_SESSION['uname'];
			$password=$_SESSION['pass'];
			echo $username;
		?>
	</a>
	</div>

	<div class="row">
	  <div class="column side">
	    <div class="card_side">
	    	<div class="side">
	    		<table>
	    			<tr><td><a href="#">Account Details</a></td></tr>
	    			<tr><td><a href="update_info.php">Update Details</a></td></tr>
	    			<tr><td><a href="delete.php">Delete Account</a></td></tr>
	    		</table>
	    	</div>
	    </div>
	  </div>
	  <div class="column middle">
	  	<div class="card">
				<p>
					<?php  
					include("../Control/profilecontrol.php");
					?>
				</p>
	  	</div>
	  </div>
	</div>
	<script src="../Control/updatecontrol.js"></script>
</body>
</html>