<?php 
$name = array(11,23,72,44);

foreach ($name as $value) {
	
	if ($value % 2 == 0)
		echo $value." is Even.<br>";
	else
		echo $value." is Odd.<br>";
}
 ?>