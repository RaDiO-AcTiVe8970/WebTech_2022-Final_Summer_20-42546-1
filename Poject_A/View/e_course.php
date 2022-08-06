<!DOCTYPE html>
<html>
<head>
	<title>Course</title>
	<link rel="stylesheet" type="text/css" href="update_design.css">
	<link rel="stylesheet" type="text/css" href="slider.css">
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
	    			<tr><td><a href="course.php">All Course </a></td></tr>
	    			<tr><td><a href="#">Enrolled Course</a></td></tr>
	    		</table>
	    	</div>
	    </div>
	  </div>
	  <div class="column middle">
	  	<div class="card_job">
	  		<h3>Enrolled Courses</h3>
	  	</div>
	  	<?php
	  		include("../Control/course_e_control.php");
	  	?>
	  </div>
	</div>
</body>
</html>