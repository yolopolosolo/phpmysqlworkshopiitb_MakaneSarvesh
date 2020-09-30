<?php 

$var = array("a","b","c","d","e","f");

foreach ($var as $value) {
	switch($value) {
 	case 'a':
	case 'e':
	case 'i':
 	case 'o':
 	case 'u':
 	 echo $value." is vowel.<br>";
 	 break;
 	default:
 	 echo $value." is consonant.<br>";
	}
}
 ?>