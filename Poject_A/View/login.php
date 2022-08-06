<?php
include ("../Control/logincontrol.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="profile_design.css">
</head>
<body>
    <div class="container">
        <div class="justify-content-center">
            <h2>Welcome to Skill Share System!</h2>
            <fieldset>
                <legend>Login Information</legend>
                <form action="#" method="post">
                    <table>
                        <tr>
                            <td>
                                Username:<td><input type="text" id="uname" name="uname" placeholder="Enter Username">
                                <?php
                                    if($isPost==true && $username=="")
                                        {
                                            echo "<span style='color:red;'>*Required Username</span>";
                                        }
                                ?>
                            </td>
                            </td>
                        </tr>
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
                    </table>
                    <br><input type="submit" name="btn_log" value="Login">
                    <?php 
                        if($error==1)
                        {
                            echo "<span style='color:red;'>*Login Credentials Mismatch</span>";
                        }
                    ?>
                    <br><a href="registration.php">Register Now!</a>
                </form>
            </fieldset>
        </div>    
    </div>
</body>
</html>
