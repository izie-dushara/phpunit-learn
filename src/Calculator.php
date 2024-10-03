<?php
class Calculator
{
	public function multiply(int | float $firstNumber, int | float $secondNumber): int |float
	{
		return $firstNumber * $secondNumber;
	}
}
