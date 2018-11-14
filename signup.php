<?php
 
if(isset($_POST['submit']))
{

	include_once('dbh.php');
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);

    $sql="insert into signup (username,email,password) values ('$username','$email','$password');";

    $result=mysqli_query($con,$sql);
 

    if($result==True)
    {
    	header('Location:index.php?Successfully_Signup_complete');
    	exit();
    }
    else
    {
    	echo "something is missing";
    }

}
?>