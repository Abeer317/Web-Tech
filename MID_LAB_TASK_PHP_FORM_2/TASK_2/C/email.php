<?php

	if(isset($_REQUEST['submit']))
  {
		$Email = $_REQUEST['myemail'];
	}

?>


<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="post" >
		<b>Email:<b> <br> <input type="email" name="myemail" value="<?php if(isset($Email)){ echo $Email; }?>"/> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>