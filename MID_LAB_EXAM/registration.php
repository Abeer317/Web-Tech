<html>
<head>
	<title>Registration</title>
</head>
<body>

	<fieldset>
		<legend>
			<b>REGISTRATION</b>
		</legend>
		<form method="post" action="registrationcheck.php">
			Id: <br/> <input type="text" name="ID" value="" /> <br/><br/>
			Password: <br/> <input type="password" name="Password" value="" /> <br/><br/>
			Confirm Password: <br/> <input type="password" name="ConfirmPassword" value="" /> <br/><br/>
			Name: <br/> <input type="text" name="Name" value="" /> <br/><br/>
			User type: <br/>
			<input type="radio" name="UserType" value="User" /> User
			<input type="radio" name="UserType" value="Admin" /> Admin <br/><br/>
			<input type="submit" name="SignUp" value="Sign Up" />
			<a href="Login.php">Sign In</a>
		</form>
		</fieldset>
</body>
</html>