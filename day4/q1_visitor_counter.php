<?php 

error_reporting(0);
if (include("count.txt")){
	$content = file_get_contents("count.txt");
	$count = $content + 1;
	

	echo " Users visited this site <br>You are Visitor No: ".$count." <br>Welcome";
	$file = fopen("count.txt", "w");
	$write = fwrite($file, "$count");
	fclose($file);
}
else{

	$file = fopen("count.txt", "w");
	fwrite($file,"1");
	fclose($file);

	echo "You are Visitor No: 1<br> Welcome";	
}


 ?>