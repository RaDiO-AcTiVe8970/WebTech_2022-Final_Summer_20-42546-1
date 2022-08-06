<?php 
	$conn=new mysqli("localhost", "root", "", "instructor");
    if($conn->connect_error)
    {
        echo "Connection Error: ".$conn->connect_error;
    }   
    else
    {
        $q_select="select * from ins_course where C_id in(select C_id from ins_taken_course where ins_name='".$_SESSION['uname']."') ";
        //echo $q_ins;
        $query= $conn->query($q_select);
        if($query->num_rows>0)
        {
            while($row=$query->fetch_assoc())
            {
	            echo "<div class='card_job'>";
		        echo "Course ID: ".$row['C_id']."<br>";
				echo "Course Name: ".$row["C_name"]."<br>";
				echo "Course Time: ".$row["C_time"]."<br>";
				echo "</div>";
			}
        }
        else
        {
                echo "insertion failed!";
        }
    }
?>