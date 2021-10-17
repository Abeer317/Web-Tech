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
    <h1>Welcome Anne!</h1>
    <a href="userprofile.php">Profile</a> <br /><br />
    <a href="userchangepassword.php">Change password</a> <br /><br />
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