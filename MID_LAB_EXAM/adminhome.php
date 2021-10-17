<?php
	session_start();

	if(isset($_SESSION['flag']))
	{
?>

<html>
<head>
	<title>Admin Home</title>
</head>
<body>

  <center>
    <h1>Welcome Bob!</h1>
    <a href="adminprofile.php">Profile</a> <br /><br />
    <a href="adminchangepassword.php">Change password</a> <br /><br />
    <a href="ViewUsers.php">View users</a> <br /><br />
    <a href="Login.php">Logout</a> <br /><br />
  </center>

</body>
</html>

<?php
	}
	else
	{
		header('location: Login.php');
	}
?>