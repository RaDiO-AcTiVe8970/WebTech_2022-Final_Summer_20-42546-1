<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
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
	    			<tr><td><a href="#">Available Jobs</a></td></tr>
	    			<tr><td><a href="app_job.php">Current Applied Jobs</a></td></tr>
	    		</table>
	    	</div>
	    </div>
	  </div>
	  <div class="column middle">
	  	<div class="card_job">
	  		<form id="apply_course" method="post" action="#">
	  			<table>
	  				<tr>
	  					<td>Enter job ID:<input type="text" name="jid" id="jid"><br>
	  						<input type="submit" name="btn_App" id="btn_App" value="Apply">
	  					</td>
	  				</tr>
	  			</table>
	  		</form>
	  	</div>
	  	<?php
	  		include("../Control/jobcontrol_apply.php");
			include("../Control/jobcontrol.php");
		?>
	  </div>
	</div>
</body>
</html>





