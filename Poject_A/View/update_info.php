<?php

	include("../Control/updatecontrol.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Info</title>
	<link rel="stylesheet" type="text/css" href="update_design.css">
</head>
<body>
	<div class="header">
	  <h1>Skill Share System</h1>
	</div>

	<div class="topnav">
		a href="home.php">Home</a>
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
	    			<tr><td><a href="profile.php">Account Details</a></td></tr>
	    			<tr><td><a href="#">Update Details</a></td></tr>
	    			<tr><td><a href="delete.php">Delete Account</a></td></tr>
	    		</table>
	    	</div>
	    </div>
	  </div>
	  <div class="column middle">
	  	<div class="card">
	  		<form action="#" onsubmit="return validate()" method="post">
	  			<table class="table_update">
					<tr class="u_t">
						<td >Username:
							<td>
								<input type="text" id="uname" name="uname" placeholder="Enter Username">
								<br>
							</td>
						</td>
					<tr class="u_t">
						<td>Password:
							<td>
								<input type="password" id="pass" name="pass" placeholder="Enter Password">
							</td>
						</td>
					</tr>
					<tr class="u_t">
						<td>E-Mail:
							<td>
							<input type="email" id="email" name="email" placeholder="Enter E-Mail">
							</td>
						</td>
					</tr>
					<tr class="u_t">
						<td>Religion:
							<td>
								<select name="rel">
									<option value="">Please Choose Religion!</option>
									<option value="Islam">Islam</option>
									<option value="Hindu">Hindu</option>
									<option value="Christian">Chirstian</option>
									<option value="Buddha">Buddha</option>
								</select>
							</td>
						</td>
					</tr>
					<tr class="u_t">
						<td>Nationality:
							<td>
								<input type="text" id="nt" name="nt" placeholder="Enter Nationality">
							</td>
						</td>
					</tr>
					<tr class="u_t">
						<td>Address:
							<td>
								<textarea name="address" rows="3" cols="30" placeholder="Enter Address"></textarea>
							</td>
						</td>
					</tr>
					<tr class="u_t">
						<td >Gender:
							<td id="u_t">
								<input type="radio" name="gender" value="Male">Male
								<input type="radio" name="gender" value="Female">Female
								<input type="radio" name="gender" value="Other">Others
							</td>
						</td>
					</tr>
				</table>
				
				<input type="submit" class="up_btn" id="btn_up" name="btn_up" value="Update Profile">
	  		</form>
	  	</div>
	  </div>
	</div>
	<script src="../Control/updatecontrol.js"></script>
</body>
</html>