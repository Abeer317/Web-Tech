<?php
	session_start();

	if(isset($_POST['Submit']))
  {
		$Email = $_POST['EnterEmail'];

		if($Email != "")
    {
      if($_SESSION['Email'] == $Email)
      {
        $_SESSION['flag'] = 'true';
       
      }
      else
      {
        echo "Email didn't match";
      }
		}
    else
    {
			echo "Invalid email";
		}
	}
?>