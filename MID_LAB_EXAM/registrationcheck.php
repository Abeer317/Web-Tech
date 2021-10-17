<?php

	if(isset($_POST['SignUp']))
  {
    $UserId = $_POST['ID'];
		$Password = $_POST['Password'];
		$UserType = $_POST['UserType'];

    if($UserId != "")
    {
      if($Password != "")
      {
				if($_POST['Password'] == $_POST['ConfirmPassword'])
				{
					$myfile = fopen('SignUpInfo.txt', 'a');
					$myuser = $UserId."|".$Password."|".$UserType."\r\n";
					fwrite($myfile, $myuser);

					header('location: Login.php');
				}
				else
				{
					echo "Password didn't match....";
				}
      }
      else
      {
        echo "invalid password....";
      }
    }
    else
    {
      echo "invalid user Id....";
    }
	}
?>