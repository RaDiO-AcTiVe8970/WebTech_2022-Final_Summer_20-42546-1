<?php 
	$jsondata= file_get_contents("../Model/job.json") or die("File not found");
    $phpdata= json_decode($jsondata,true);
	$conn=new mysqli("localhost", "root", "", "instructor");
    if($conn->connect_error)
    {
        echo "Connection Error: ".$conn->connect_error;
    }   
    else
    {
        $q_select="select job_id from ins_job where ins_name='".$_SESSION['uname']."'";
        //echo $q_ins;
        $query= $conn->query($q_select);
        if($query->num_rows>0)
        {
            while($row=$query->fetch_assoc())
            {
	            foreach($phpdata['Jobs'] as $b)
	            {
	            	if($row['job_id']==$b['Job_id'])
	            	{
	            		 {
				            echo "<div class='card_job'>";
				            echo "<p style='font-family: inherit;'><h3>Job Code: ".$b['Job_id']."</h3><br>";
				            echo "Company Name: ".$b['Company_Name']."<br>";
				            echo "Applying Post: ".$b["Post"]."<br>";
				            echo "Starting Salary: ".$b["Salary"]."<br>";
				            echo "Educational Requirements: ".$b["Requirements"]."<br>";
				            echo "E-Mail: ".$b["Email"]."<br>";
				            echo "Language needed: ".$b["Language"]."<br>";
				            echo "Required Skills: ".$b["Skills"]."<br></p>";
				            echo "</div>";
				        }
	            	}
	            }
        	}
		}
        else
        {
                echo "insertion failed!";
        }
    }
?>