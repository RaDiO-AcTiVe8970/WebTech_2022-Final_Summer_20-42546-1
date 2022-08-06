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
	    			<tr><td><a href="notice.php">All Notice</a></td></tr>
	    			<tr><td><a href="#">Update Notice</a></td></tr>
	    		</table>
	    	</div>
	    </div>
	  </div>
	  <div class="column middle">
	  	<div class="card_job">
	  		<form id="apply_course" method="post" action="#">
	  			<table>
	  				<tr>
	  					<td>Enter notice ID:<input type="text" name="nid" id="nid" placeholder="Enter Notice Number"><br>
	  					</td>
	  				</tr>
	  				<tr>
	  					<td>
	  						Enter Notice Content:<input type="text" name="nc" id="nc" placeholder="Enter Content"><br>
	  						<input type="submit" name="btn_update" id="btn_update" value="Update Notice">
	  					</td>
	  				</tr>
	  			</table>
	  		</form>
	  	<div class="card_job">
	  		<h2></h2>
	  	</div>
	  	
	  <div>
	  	
	  </div id="main">
	</div>
	<script>
		$(document).ready(function(){
			$("#btn_update").on("click",function(e){
				$.ajax({
					url:"noticecontrol_upd.php",
					type:"POST",
					success:function(data){
						$("#main").html(data);
					}
				});
			});
		});
	</script>
</body>
</html>





