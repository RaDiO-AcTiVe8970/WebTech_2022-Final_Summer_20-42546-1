<?php
	include("../Control/registrationcontrol.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
		<link rel="stylesheet" type="text/css" href="profile_design.css">
	</head>
	<body>
		<div class="container_reg">
		<div class="justify-content-center">
		<h1>Welcome to Registration Page!</h1>
		<form action="#" method="post">
		<fieldset>
			<legend>Login Information</legend>
				<table>
					<tr>
						
						<td>Username:
							<td>
								<input type="text" id="uname" name="uname" placeholder="Enter Username">
								<?php
									if($isPost==true && $username=="")
									{
										$error=1;
										echo "<span style='color:red;'>*Required Username</span>";
									}
								?>
								<br>
							</td>
						</td>
					<tr>
						<td>Password:
							<td>
								<input type="password" id="pass" name="pass" placeholder="Enter Password">
								<?php
									if($isPost==true && $password=="")
									{
										$error=1;
										echo "<span style='color:red;'>*Required Password</span>";
									}
								?>
							</td>
						</td>
					</tr>
					<tr>
						<td>E-Mail:
							<td>
							<input type="email" id="email" name="email" placeholder="Enter E-Mail">
							</td>
						</td>
					</tr>
				</table>
		</fieldset>
		<fieldset>
			<legend>General Information</legend>
				<table>
					<tr>
						<td>Religion:
							<td>
								<select name="rel">
									<option value="">Please Choose Religion!</option>
									<option value="Islam">Islam</option>
									<option value="Hindu">Hindu</option>
									<option value="Christian">Chirstian</option>
									<option value="Buddha">Buddha</option>
								</select>
								<?php
									if($isPost==true && $religion=="")
									{
										$error=1;
										echo "<span style='color:red;'>*Required Religion</span>";
									}
								?>
							</td>
						</td>
					</tr>
					<tr>
						<td>Nationality:
							<td>
								<input type="text" id="nt" name="nt" placeholder="Enter Nationality">
								<?php
									if($isPost==true && $nationality=="")
									{
										$error=1;
										echo "<span style='color:red;'>*Required Nationality</span>";
									}
								?>
							</td>
						</td>
					</tr>
					<tr>
						<td>Address:
							<td>
								<textarea name="address" rows="3" cols="30" placeholder="Enter Address"></textarea>
								<?php
									if($isPost==true && $address=="")
									{
										$error=1;
										echo "<span style='color:red;'>*Required Address</span>";
									}
								?>
							</td>
						</td>
					</tr>
					<tr>
						<td>Gender:
							<td>
								<input type="radio" name="gender" value="Male">Male
								<input type="radio" name="gender" value="Female">Female
								<input type="radio" name="gender" value="Other">Others
								<?php
									if($isPost==true && $gender=="")
									{
										$error=1;
										echo "<span style='color:red;'>*Required Gender</span>";
									}
								?>
							</td>
						</td>
					</tr>
				</table>
		</fieldset>
		<br><input type="submit" name="btn_Reg" value="Register">
		<br><a href="login.php">Already Have an account?</a>
		</form>
	</div></div>
	</body>
</html>