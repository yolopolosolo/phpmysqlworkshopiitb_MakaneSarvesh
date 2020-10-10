<?php 
require ("connect.php");

$select = mysqli_query($conn,"SELECT * FROM students");
$name = @$_POST['sname'];
$mphp = @$_POST['mphp'];
$mmysql = @$_POST['mmysql'];
$mhtml = @$_POST['mhtml'];

if (@$_POST['update']) {

	$extract = mysqli_query($conn,"SELECT * FROM students where name='$name'");
	if (mysqli_num_rows($extract) > 0) {

		$update = mysqli_query($conn,"UPDATE students SET Php='$mphp', mysql='$mmysql', html='$mhtml' WHERE name = '$name' ");
		if($update){
			echo "<b>Updated database</b> Refresh to see changes<br>";
		}
		else{
			echo "couldnt update<br>";
		}
	}
}

if (@$_POST['delete']) {

	$extract2 = mysqli_query($conn,"SELECT * FROM students where name='$name'");
	if (mysqli_num_rows($extract2) > 0) {

		$delete = mysqli_query($conn,"DELETE FROM students WHERE name = '$name'");
		if($delete){
			echo "Deleted Student Refresh<br>";
		}
		else{
			echo "couldnt delete<br>";
		}
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
	<div>
		<?php
		 if ($select) {
		 	echo "Current Data<br>";
		 	while($row = mysqli_fetch_assoc($select)) {
		 	$name = $row["name"];
        	$subp=$row["Php"];
        	$subm=$row["mysql"];
       	    $subh=$row["html"];
            $totalobtained=$subp + $subm + $subh;
            $percentage =($totalobtained / 300 )*100;
            echo "<br>";
            echo $name.": php: ".$subp." , mysql: ".$subm." , html: ".$subh."<br>";
      		} 
		}
		?>
	</div>

	<div>
		<p>-------------------------------------Enter data to Modify--------------------------------------</p>
		<form method="POST">
			Name : <input type="text" name="sname" required>
			Marks in php :<input type="number" min="0" max="100" name="mphp" required>
			Marks in mysql :<input type="number" min="0" max="100" name="mmysql" required>
			Marks in html :<input type="number" min="0" max="100" name="mhtml" required>
			<br><br>
			<input type="submit" name="update" value="Change marks">
			<input type="submit" name="delete" value="Delete student">
		</form>
	</div>

	<div>
		<p>Do u want to add a student ? <a href="addstudent.php">Click Here</a></p>
	</div>
<a style="position:absolute; top:1em ;right:1em;" href="adminlogout.php"><button>Logout</button></a>
</body>
</html>