<html>

<h1>Type of Triangle</h1>
<p>Enter the Sides</p>

<form action="q6_1_special_variables_html.php" method="GET">
	<input type="text" name="side1" placeholder="Enter side 1"><br>
	<input type="text" name="side2" placeholder="Enter side 2"><br>
	<input type="text" name="side3" placeholder="Enter side 3"><br>
	<input type="submit" value="Click Here">
</form>

 
</html>

<?php 

$s1 = @$_GET["side1"];
$s2 = @$_GET["side2"];
$s3 = @$_GET["side3"];

if($s1){
	if ($s1 == $s2 && $s2== $s3) {
		echo "Equilateral Triangle";
	}
	elseif ($s1 == $s2 || $s2 == $s3 || $s3 == $s1) {
		echo "Isosceles Triangle";
	}
	else{
		if($s1*$s1 == $s2*$s2 + $s3*$s3 || $s2*$s2==$s1*$s1+$s3*$s3 || $s3*$s3==$s2*$s2+$s1*$s1)
        	echo "Right angled triangle.";
        else
        	echo "Scalene Triangle";
    }		
}
 ?>


 