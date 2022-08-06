<?php
	$L="";
	$conn=new mysqli("localhost", "root", "", "instructor");
    if($conn->connect_error)
    {
        echo "Connection Error: ".$conn->connect_error;
    }   
    else
    {
        $q_insert="DELTE FROM ins_taken_course WHERE ins_name='".$_SESSION['uname']."' AND C_id='".$_POST['cid']."'";
        //echo $q_ins;
        $query= $conn->query($q_insert);
        if($query)
        {
           header("Location:e_course.php");
           $L="Remove Successful";
        }
        else
        {
            echo "O results";
        }
    }
    $conn->close()
    echo $L;
?>