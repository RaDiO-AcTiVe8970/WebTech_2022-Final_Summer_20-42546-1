<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
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
	  <div class="column middle">
	  	<div class="card_home">
	  		<h2>
	  			Welcome back, 
				<?php
					echo $username;
				?> !!
	  		</h2>
	  		<p class="potato">
	  			Skillshare is an online learning community for students to take online video classes at their own pace. The Skillshare platform offers a broad variety of specific skills such as UX design, creative writing, business analytics, graphic design, Photoshop, web development, and so much more.
	  		</p>
	  	</div>
	  </div>
	</div>
	<script type="text/javascript" src="slider.js"></script>
</body>
</html>