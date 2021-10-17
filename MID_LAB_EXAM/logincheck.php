<?php
	session_start();

	if(isset($_POST['Submit']))
  {
		$UserId = $_POST['UserId'];
		$Password = $_POST['Password'];

		if($UserId != "")
    {
			if($Password != "")
      {

				$myfile = fopen('signppinfo.txt', 'r');
				//$data = fread($myfile, filesize('user.txt'));

				while(!feof($myfile))
				{
					$data = fgets($myfile);
					$User = explode('|', $data);

					if($UserId == trim($User[0]) && $Password == trim($User[1]) && trim($User[2]) == "User")
	        {
						$_SESSION['flag'] = 'true';
						header('location: UserHome.php');
					}
					if($UserId == trim($User[0]) && $Password == trim($User[1]) && trim($User[2]) == "Admin")
	        {
						$_SESSION['flag'] = 'true';
						header('location: adminhome.php');
					}
				}
				echo "Invalid username/password";
			}
      else
      {
				echo "Invalid password....";
			}
		}
    else
    {
			echo "Invalid username....";
		}
	}
?>