<?php 
	if (isset($_POST["btn_App"]))
		{
			$conn=new mysqli("localhost", "root", "", "instructor");
			if($conn->connect_error)
			{
				echo "Connection Error: ".$conn->connect_error;
			}	
			else
			{
				$q_ins="insert into ins_job(job_id, ins_name) values ('".$_POST['jid']."','".$_SESSION['uname']."')";
				//echo $q_ins;
				$query= $conn->query($q_ins);
				if($query)
				{
					header("Location: ../View/jobs.php");
				}
				else
				{
					echo "insertion failed!";
				}
			}	
		}
	
?>