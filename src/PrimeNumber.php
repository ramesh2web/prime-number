<?php
Class PrimeNumber {
	
	protected $primeNumber =  array();
	//get all the prime numbers upto specified number
	function getNprimeNumber($num) {
		$i = 2;
		while(1) {
			
			//check whether given number is prime number or not
			if($this->isPrimeNumber($i)) {
				array_push($this->primeNumber, $i);
			}			
			
			//matching the count of found prime number with specifed number so that we can break the loop.
			
			if($this->isCountOfprimaryNumberMatchedWithSpecifiedNumber($num, count($this->primeNumber))) {
				break;
			}		
			$i++;
		}
		return $this->primeNumber;
	}
	
	function isPrimeNumber($num) {
		if ($num == 2) {
			$primeNumber = true;
		} else {
			$primeNumber = true;
			
			//Here reduced the time complexity using $num/2
				for($i = 2 ; $i <= ($num/2); $i++) {
					if($num%$i == 0) {
						$primeNumber = false;
					}
				}
		}
		return $primeNumber;
	}
	function isCountOfprimaryNumberMatchedWithSpecifiedNumber($num, $count) {
		if( $num == $count) {
			return true;
		} else {
			return false;
		}
	}
	
}

