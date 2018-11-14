<?php
session_start();

if(isset($_POST['submit']))
{
   include_once('dbh.php');

   $msg=$_POST['textarea'];
   $name=$_SESSION['name'];

   $sql="insert into posts(msg,name) values ('$msg','$name');";
   $result=mysqli_query($con,$sql);
   if($result==true)
   {
   	header("Location:home.php");
   }
}
else
{
	echo "nothign";
}


?>