<?php 
error_reporting(0);
$connect = mysqli_connect("localhost","root","","result");
if ($connect) {
	
	$extract = mysqli_query($connect,"SELECT * FROM co");

	while ($row = mysqli_fetch_assoc($extract)) {
		
		$counter = $row['count'];
		$counter = $counter + 1;
		mysqli_query($connect,"UPDATE co set count='$counter' where id='1'");
		echo "You are visitor No: ".$counter;
	}	

}
else{
	echo "Database Not Connected Try again";
}

 ?>