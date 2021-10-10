<html>
<head>
	<title>Registration</title>
</head>
<body>

	<table border="1" width="50%" align="center">
		<tr height="80px">
			<td>
			<h1>X Company</h1>
			</td>
			<td align="right">
				<a href="publichome.html">Home</a> | <a href="Registration.php">Registration</a> | <a href="login.php">Login</a>
			</td>
		</tr>
    <tr height="500px">
			<td colspan="2">
				<fieldset>
					<legend>
						REGISTRATION
					</legend>
					<form method="post" action="Registrationcheck.php">
						Name: <input type="text" name="Name" value="" /> <br/><br/>
						Email: <input type="email" name="Email" value="" /> <br/><br/>
						User Name: <input type="text" name="Username" value="" /> <br/><br/>
						Password: <input type="password" name="Password" value="" /> <br/><br/>
						Confirm Password: <input type="password" name="ConfirmPassword" value="" /> <br/><br/>
						<fieldset>
							<legend>
								Gender
							</legend>
							<input type="radio" name="Gender" value="Male" /> Male
							<input type="radio" name="Gender" value="Female" /> Female
							<input type="radio" name="Gender" value="Other" /> Other
						</fieldset> <br/><br/>
						<fieldset>
							<legend>
								Date of birth
							</legend>
							<input type="date" name="Date" value="" />
						</fieldset> <br/><br/>
						<input type="submit" name="Submit" value="Submit" />
						<input type="reset" name="Reset" value="Reset" />
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