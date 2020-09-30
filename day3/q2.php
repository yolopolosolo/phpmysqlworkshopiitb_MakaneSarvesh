<?php 

error_reporting(0);
$connect = mysqli_connect("localhost","root","","result");

if ($connect) {
	
	$extract = mysqli_query($connect,"SELECT * FROM class1 WHERE name='Rohan'");

	while ($row = mysqli_fetch_assoc($extract)) {
		
		$s1 = $row["sub1"];
		$s2 = $row["sub2"];
		$s3 = $row["sub3"];
		$s4 = $row["sub4"];
		$s5 = 99;
		$name1 = $row["name"];
		$newtotal = $s1+$s2+$s3+$s4+$s5;
		$newper = ($newtotal / 500 ) * 100 ;

		mysqli_query($connect,
			"UPDATE class1  SET sub5='$s5' , totalObtained = '$newtotal' , percent = '$newper' WHERE name='$name1'"
		);

	}
}

 ?>