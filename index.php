<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chat App</title>
</head>
<body>
<h2>Login pls</h2>
	<form action="login.php" method="POST">
		<input type="text" name="uname" placeholder="Username"  method="POST">
		<input type="password" name="pass" placeholder="Password"  method="POST">
		<button type="submit" name="submit" method="POST">Login Pls</button>
	</form>
<br>
<br>
<br>

	<h2>if you dont have an account then pls signup</h2>
	
	<form action="signup.php" method="POST">
				<input type="text" name="username" placeholder="Username"  method="POST">
				<input type="text" name="email" placeholder="Email"  method="POST">
				<input type="password" name="password" placeholder="Password"  method="POST">
					<button type="submit"  method="POST" name="submit">Signup</button>
	</form>
</body>
</html>