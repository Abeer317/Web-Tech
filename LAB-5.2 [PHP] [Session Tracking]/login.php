<html>
<head>
	<title>Login</title>
</head>
<body>

	<table border="1" width="50%" align="center">
		<tr height="80px">
			<td>
			<h1>indomie</h1>
			</td>
			<td align="right">
				<a href="publichome.html">Home</a> | <a href="Registration.php">Registration</a> | <a href="login.php">Login</a>
			</td>
		</tr>
    <tr height="200px">
			<td colspan="2">
        <fieldset>
          <legend>
            LOGIN
          </legend>
          <form method="post" action="logincheck.php">
            User Name: <input type="text" name="Username" value="" /> <br/><br/>
            Password: <input type="password" name="Password" value="" /> <br/><br/>
            <input type="checkbox" name="Rememberme" value="" /> Remember me  <br/><br/>
            <input type="submit" name="Submit" value="Submit" />
            <a href="forgotpassword.php">Forgot password?</a>
          </form>
        </fieldset>
			</td>
		</tr>
    <tr height="40px">
			<td colspan="2" align="center">
        All Rights Reserved
			</td>
		</tr>
	</table>
</body>
</html>