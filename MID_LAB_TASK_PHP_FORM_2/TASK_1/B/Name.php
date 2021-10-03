<?php

	if(isset($_REQUEST['submit']))
	{
		$Name = $_REQUEST['myname'];
		if($Name != "")
		{
			echo $Name;
		}
	}

?>


<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post">
		<b>NAME:<b> <br> <input type="text" name="myname" value=""/> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>