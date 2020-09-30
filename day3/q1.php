<form action="q1.php" method="POST">

	Name of the Student:<input type="text" name="studname" placeholder="Enter Full Name"><br><br>
	<span>Enter Marks in each Subject</span><br>
	Subject1:<input type="number" name="m1" id="sub1"><br>
	Subject2:<input type="number" name="m2" id="sub2" ><br>
	Subject3:<input type="number" name="m3" id="sub3" ><br>
	Subject4:<input type="number" name="m4" id="sub4" ><br>
	Subject5:<input type="number" name="m5" id="sub5" ><br>
			 <input type="submit" name="submit" value="Submit">
</form>

<?php
if(@$_POST["submit"]){

	$yourname = $_POST["studname"];
	$a1 = $_POST["m1"];
	$a2 = $_POST["m2"];
	$a3 = $_POST["m3"];
	$a4 = $_POST["m4"];
	$a5 = $_POST["m5"];
	$a6 = $a1+$a2+$a3+$a4+$a5;
	$a7 = ($a6/500)*100;

	if($yourname){
		echo "Total Marks Obtained: ".$a6."<br>";
		echo "Total Marks: 500 <br>";
		echo "Percentage:".$a7."%";
	}

	error_reporting(0);
	$connect = mysqli_connect("localhost","root","","result");
	if ($connect) {
			
		$store = mysqli_query($connect,
		"INSERT INTO class1 VALUES('','$yourname','$a1','$a2','$a3','$a4','$a5','$a6','500','$a7')"
		);	
	}

	
}
 ?>