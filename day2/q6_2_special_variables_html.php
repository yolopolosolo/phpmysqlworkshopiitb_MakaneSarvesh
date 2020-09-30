<html>
<h1>Generate Report</h1>

<div class="Report">
	<form action="q6_2_special_variables_html.php" method="POST">
	<label for="Name">Name of the Student</label>
	<input type="text" name="studname" id="Name" placeholder="Enter Full Name"><br><br>

	<span>Enter Marks in each Subject</span><br>
	<label for="sub1">Subject 1</label>
	<input type="number" name="m1" id="sub1"><br>

	<label for="sub2">Subject 2</label>
	<input type="number" name="m2" id="sub2" ><br>

	<label for="sub3">Subject 3</label>
	<input type="number" name="m3" id="sub3" ><br>

	<label for="sub4">Subject 4</label>
	<input type="number" name="m4" id="sub4" ><br>

	<label for="sub5">Subject 5</label>
	<input type="number" name="m5" id="sub5" ><br>
	<input type="submit" value="Submit">
	</form>
</div>

</html>

<?php

$yourname = @$_POST["studname"];
$a1 = @$_POST["m1"];
$a2 = @$_POST["m2"];
$a3 = @$_POST["m3"];
$a4 = @$_POST["m4"];
$a5 = @$_POST["m5"];

if($yourname){
	echo "Total Marks Obtained: ".($a1+$a2+$a3+$a4+$a5)."<br>";
	echo "Total Marks: 500 <br>";
	echo "Percentage:".(($a1+$a2+$a3+$a4+$a5)/500 *100)."%";
}



 ?>