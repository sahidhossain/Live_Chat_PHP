
<?php 
session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<script>
		function ajax()
		{
			var req=new XMLHttpRequest();
			req.onreadystatechange=function()
			{
				if(req.readyState==4 && req.status==200)
				{
					document.getElementById('chat').innerHTML=req.responseText;
				}
			}
			req.open('GET','chat.php',true);
			req.send();
		}
		setInterval(function(){ajax()},1000);
	</script>
</head>
<body onload="ajax();">

<div id="chat"></div>

<div style="float: left;">
		<h2> <?php echo $_SESSION['name'];?> let's Start Chatting</h2>
	<form action="send.php" method="POST">
		<textarea method="post" name="textarea" id="" cols="30" rows="10" placeholder="type your messege"></textarea>
		<br>
		<button name="submit"type="submit" method="post" value="send messege">Send Messeges</button>
	</form>
 

<br>
<br>
<br>
<br>

		<form action="logout.php"  method="post">
		<button name="submit"type="submit" method="POST" value="logout">Logout</button>
	</form>
	</div>
</body>
</html>