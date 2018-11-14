
<?php 
session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h3> chat's are</h3>
	<div style="width: all;height: 100px;">
		<?php
		include_once('dbh.php');
         $sql="select * from posts order by id DESC;";
         $result=mysqli_query($con,$sql);
         $resultcheck=mysqli_num_rows($result);
         if($resultcheck>0)
         {
         	while($row=mysqli_fetch_assoc($result))
         	{
         		?>

         		<span><?php echo $row['date'];?>::<strong><?php echo $row['name'];?>--</strong><span style="font-size: 20px;"><?php echo $row['msg'];?></span></span>
         		<br>

         		<?php
         	}
         }
         else
         {
         	echo "doesn't have a single messege";
         }
		?>
		
	</div>
<div style="float: right;">
		<h2> <?php echo $_SESSION['name'];?> let's Start Chatting</h2>
	<form action="send.php" method="POST">
		<textarea method="post" name="textarea" id="" cols="30" rows="10" placeholder="type your messege"></textarea>
		<br>
		<button name="submit"type="submit" method="post" value="send messege">Send Messeges</button>
	</form>
</div>

<br>
<br>
<br>
<br>
	<div style="float: right;">
		<form action="logout.php"  method="post">
		<button name="submit"type="submit" method="POST" value="logout">Logout</button>
	</form>
	</div>
</body>
</html>