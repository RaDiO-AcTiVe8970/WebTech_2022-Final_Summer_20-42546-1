<?php
	$conn=new mysqli("localhost", "root", "", "instructor");
    if($conn->connect_error)
    {
        echo "Connection Error: ".$conn->connect_error;
    }   
    else
    {
        $q_select="select * from ins_course";
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
    if(isset($_POST["btn_App"]))
    {
        if($conn->connect_error)
        {
            echo "Connection Error: ".$conn->connect_error;
        }   
        else
        {
            $q_ins="insert into ins_taken_course (ins_name, C_id) values ('".$_SESSION['uname']."','".$_POST['cid']."') ";
            //echo $q_ins;
            $query= $conn->query($q_ins);
            if($query)
            {
               header("Location:../View/e_course.php");
            }
            else
            {
                    echo "insertion failed!";
            }
        }
    }
?>