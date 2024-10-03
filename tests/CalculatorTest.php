<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
	public function testCalculator(): void
	{
		$Calculator = new Calculator();
		$this->assertEquals(4, $Calculator->multiply(2, 2));
	}
}
