<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$usernameErr = $passwordErr="";
$username = $password ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Name is required";
  } else {
    $username = test_input($_POST["username"]);

  $nc =strlen($username);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)&&$nc>"2") {
      $usernameErr = " Cannot be empty. Contains at least two words
      . Must start with a letter
      . Can contain a-z, A-Z,
      period, dash only.";
    }
  }

if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = password_input($_POST["password"]);
   
    if (!preg_match("/^['@[0-9]@' ]*$/",$password)) {
      $passwordErr = "only numbers are required";
    }
  } 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}}
?>

<h2>Login</h2>
<p><span class="error">* required field</span></p>
    <form method="post" action="../controller/loginCheck.php">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  User Name: <input type="text" name="username" >
  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
 Password: <input type="password" name="password" >
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
        
                    <td><input type="submit" name="submit" value="login">
                                  <a href="signup.php">Sign up</a>
</td>
                                                                     

    </form>
</body>
</html>