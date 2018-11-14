<?php
 
if(isset($_POST['submit']))
{
    session_start();

	include_once('dbh.php');
	$username=mysqli_real_escape_string($con,$_POST['uname']);
 
	$password=mysqli_real_escape_string($con,$_POST['pass']);


    $sql="select * from signup where username='$username' and password='$password';";
    // Select * from information where username='$email' or email='$email'

    $result=mysqli_query($con,$sql);




    $resultcheck=mysqli_num_rows($result);
     if($resultcheck<1)
     {
        header("Location:index.php?Something is wrong");
        exit();
     }
     else
     {
        $_SESSION['name']=$username;
        header("Location:home.php?Successfull_login");
        exit();
     }

}
?>