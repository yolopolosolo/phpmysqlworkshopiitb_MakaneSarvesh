
<form action="q2_string_functions.php" method="POST">
	Enter a String to do various Operations->
	<br>String: <input type="text" name="stri">
	<br><input type="submit" name="submit" value="Done">
</form>
<?php 

if (@$_POST['submit']) {
	
	$stringg =@$_POST['stri'];
	echo "String You Entered is----<b> ".$stringg."</b>";
	echo "<br><br>----------------------OPERATIONS--------------------";
	echo "<br><br>1.Length of String is: ".strlen($stringg);
	$sarray = explode(" ", $stringg);
	echo "<br><br>2.Converted String to array:<br>(";
	foreach ($sarray as $key => $value) {
		echo " '".$value."' ";
	} echo ")";

	echo "<br><br>3.Reversed String is: ".strrev($stringg);
	echo "<br><br>4.All characters to Lower C0ase: ".strtolower($stringg);
	echo "<br><br>5.All characters to Upper Case: ".strtoupper($stringg);

	$sub = mb_substr($stringg, 0,3);
	echo "<br><br>6.Replacing Substring ".$sub."from main stream to stars : ".str_replace($sub, "****", $stringg);
}

 ?>
 	  