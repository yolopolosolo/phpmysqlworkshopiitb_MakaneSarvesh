<?php 
require ("connect.php");

$select = mysqli_query($conn,"SELECT * FROM students");
$name = @$_POST['sname'];
$pass = @$_POST['pass'];
$pass = md5($pass);
$emid = @$_POST['emid'];
$mphp = @$_POST['mphp'];
$mmysql = @$_POST['mmysql'];
$mhtml = @$_POST['mhtml'];


if (@$_POST['add']) {

	$insert = mysqli_query($conn,"INSERT INTO students VALUES ('','$name','$emid','$pass','$mphp','$mmysql','$mhtml')");
	
	if($insert){
		echo "<b>Added student into database. you can add more </b><br>";
	}
	else
		echo "Contact owner Couldnt add<br>";
}

?>


<!DOCTYPE html>
<html>
<head>
<title>Add a student</title>
</head>
<body>
 
<form method="POST">
	Name : <input type="text" name="sname" required>
	password:<input type="password" name="pass" required>
	email id:<input type="email" name="emid" required>
	<br><br>
	Marks in php :<input type="number" min="0" max="100" name="mphp" required>
	Marks in mysql :<input type="number" min="0" max="100" name="mmysql" required>
	Marks in html :<input type="number" min="0" max="100" name="mhtml" required>
	<br><br>
	<input type="submit" name="add" value="Add Student">
</form>
<a style="position:absolute; top:1em ;right:1em;" href="adminlogout.php"><button>Logout</button></a>
</body>
</html>