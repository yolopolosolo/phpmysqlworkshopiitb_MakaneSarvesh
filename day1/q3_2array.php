<?php 

$a = array(
	array(1,2),
	array(3,4)
);

$b = array(
	array(5,6),
	array(7,8)
);

echo "The Two Matrix are: <br>";

echo "<br>1st<br>";
for ($i=0; $i < 2 ; $i++) {
echo "|"; 
	for ($j=0; $j < 2 ; $j++) { 
		
		echo $a[$i][$j]." ";
	}
echo "|<br>";
}

echo "<br>2nd<br>";
for ($i=0; $i < 2 ; $i++) {
echo "|"; 
	for ($j=0; $j < 2 ; $j++) { 
		
		echo $b[$i][$j]." ";
	}
echo "|<br>";
}

echo "<br>The Addition of both matrix is:<br>";
for ($i=0; $i < 2 ; $i++) {
echo "|"; 
	for ($j=0; $j < 2 ; $j++) { 
		
		echo ($a[$i][$j] + $b[$i][$j])." ";
	}
echo "|<br>";
}

 ?>