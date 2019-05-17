<?php
require_once("autoload.php");

$primeNumber = new PrimeNumber();

//get list of prime number upto specifed number
$nPrimeNumber =  $primeNumber->getNprimeNumber(10);
echo "&nbsp"."&nbsp"."&nbsp"."&nbsp"."|"."&nbsp"."&nbsp";
foreach($nPrimeNumber as $num) {	
		echo "&nbsp"."&nbsp"."&nbsp".$num."&nbsp"."&nbsp"."&nbsp"."&nbsp";
	}
	echo "<br>";
	
echo "---+";	
foreach($nPrimeNumber as $num) {	
		echo "--------";
	}
	
foreach($nPrimeNumber as $num) {	
	echo "<br>";
	echo "&nbsp".$num."&nbsp"."|";
	foreach($nPrimeNumber as $num2){
		echo "&nbsp"."&nbsp"."&nbsp".$num2*$num."&nbsp"."&nbsp"."&nbsp";
	}
	



}
?>

