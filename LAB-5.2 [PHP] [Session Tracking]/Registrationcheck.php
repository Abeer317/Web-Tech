<?php
	session_start();

	if(isset($_POST['Submit']))
  {
    $Username = $_POST['Username'];
		$Password = $_POST['Password'];
		$Email = $_POST['Email'];

    if($Username != "")
    {
      if($Password != "")
      {
				if($Email != "")
				{
					if($_POST['Password'] == $_POST['ConfirmPassword'])
					{
						$_SESSION['Username'] = $Username;
		        $_SESSION['Password'] = $Password;
						$_SESSION['Email'] = $Email;

		        header('location: login.php');
					}
					else
					{
						echo "password didn't match";
					}
				}
        else
				{
					echo "invalid email";
				}
      }
      else
      {
        echo "invalid password";
      }
    }
    else
    {
      echo "invalid username";
    }
	}
?>