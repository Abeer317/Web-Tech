<?php 
	include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User List</title>
</head>
<body>

	<center>
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php">logout </a>
	</center>

	<table border="1" align="center">
		<tr>
			<th>STUDENT ID</th>
			<th>USERNAME</th>
			<th>COURSE NAME</th>
                                                    <th>EMAIL</th>
			<th>STATUS</th>
                                                    <th>RESULT</th>
		</tr>
		<tr>
			<td>1</td>
			<td>SHUVO</td>
			<td>Programming Language</td>
			<td>SHUVO123@gmail.com</td>
			<td>valid</td>
                                                     <td>A+<td>
		</tr>
		<tr>
			<td>2</td>
			<td>ABEER</td>
			<td>Java</td>
			<td>ABEER123@gmail.com</td>
			<td>not valid</td>
                                                     <td><td>
		</tr>
<tr>
			<td>3</td>
			<td>HOSSAIN HOSSAIN</td>
			<td>Web Technologies</td>
			<td>HOSSAIN123@gmail.com</td>
			<td>available</td>
                                                      <td>B+<td>
		</tr>
	</table>
</body>
</html>