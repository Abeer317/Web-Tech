<?php
	session_start();

	if(isset($_POST['Submit']))
  {
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];

		if($Username != "")
    {
			if($Password != "")
      {
				if($Username == $_SESSION['Username'] && $Password == $_SESSION['Password'])
        {
					$_SESSION['flag'] = 'true';
					
				}
        else
        {
					echo "Invalid username/password";
				}
			}
      else
      {
				echo "Invalid password";
			}
		}
    else
    {
			echo "Invalid username";
		}
	}
?>