<?php 
	//session_start();

	if(isset($_POST['submit'])){

                                 
		$username 	= $_POST['username'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
                                   $userType                = $_POST['userType'];
                                   
                       
		if($username != ""){
			if($password != ""){
				               if($email !=""){
                                                                                        if($userType != ""){
					$myfile = fopen('../model/user.txt', 'a');
					$myuser = $username."|".$password."|".$email."|".$userType."\r\n";
					fwrite($myfile, $myuser);
					fclose($myfile);

					header('location: ../views/login.php');
				}else{
					echo "invalid userType....";
				}
			}else{
				echo "invalid email....";
			}
	       }else{
			echo "invalid password....";
                                        }
	       }else{
			echo "invalid username....";
	       }
}
     
?>