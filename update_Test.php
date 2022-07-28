<?php
	$name= $_POST['uname'];
	$id= $_POST['ID'];
	$id_Info= $_POST['ID_I'];
	$cgpa= $_POST['cgpa'];
	$sem=$_POST['sem'];
	$conn=new mysqli("localhost","root","","test");
	if($conn->connect_error)
	{
		die ("COnnection failed: ".$conn->connect_error);
	}
	else
	{
		$query_In="INSERT INTO `test_db`(`Name`, `ID`, `CGPA`, `Sem`) VALUES ($name,$id,$cgpa,$sem)";
		$query_Up="UPDATE `test_db` SET `Name`=$name,`ID`=$id,`CGPA`=$cgpa,`Sem`=$sem WHERE 'ID'=$in_Info";
		$query_Sel="SELECT * FROM `test_db` WHERE 'ID'=$in_Info";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Test</title>
	</head>
	<body>
		<form action="" method="post">
			<fieldset>
				<legend>Info</legend>
				<label for="pass">ID:</label>
				<input type="text" id="ID_I" name="ID_I" placeholder="ID">
			</fieldset>
			<fieldset>
				<legend>Update</legend>
				<label for="uname">Username:</label>
				<input type="text" id="uname" name="uname" placeholder="Username">
				<label for="pass">ID:</label>
				<input type="text" id="ID" name="ID" placeholder="ID">
				<label for="uname">CGPA:</label>
				<input type="text" id="cgpa" name="cgpa" placeholder="cgpa">
				<label for="pass">Semester:</label>
				<input type="text" id="sem" name="sem" placeholder="sem">
				<?php
					//$arr=array('username'=>$_POST['uname'], 'password'=>$_POST['pass']);
					//file_put_contents('data.json', json_encode($arr));
				?>
				<input type="submit" name="print" value="Enter">
			</fieldset>
			<fieldset>
				<legend>Print</legend>
				<?php
					$result=$conn->query($query_Sel);
					$row=$result->fetch_assoc();
					echo "Name: ".$row["Name"];
					echo "ID: ".$row["ID"];
					echo "CGPA: ".$row["CGPA"];
					echo "SEM: ".$row["Sem"];
					}
				?>
			</fieldset>
		</form>
	</body>

	