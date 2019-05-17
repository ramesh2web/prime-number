<?php

use PHPUnit\Framework\TestCase;

/**
 * @uses PrimeNumber 
 */

class PrimeNumberTest extends TestCase
{
	protected $primeNumber;
	
     protected function setUp()
    {
        $this->primeNumber = new PrimeNumber();
    }
	
	//test non prime number
	
	/**
     * @covers PrimeNumber::isPrimeNumber
     */
	
	function testNonPrimeNumber() {
		$this->assertSame(false, $this->primeNumber->isPrimeNumber(10));		
	
	}
	
		//test prime number
		
			
	/**
     * @covers PrimeNumber::isPrimeNumber
     */	
	
	function testPrimeNumber() {
		$this->assertSame(true, $this->primeNumber->isPrimeNumber(11));		
	}


}
?>