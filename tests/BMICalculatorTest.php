<?php

use PHPUnit\Framework\TestCase;

class BMICalcultorTest extends TestCase
{
	public function testShowsUnderweightBmiLessThan18()
	{
		$BMICalculator = new BMICalculator();
		$BMICalculator->BMI = 10;

		$result = $BMICalculator->getTextResultFromBMI();
		$expected = 'Underweight';
		$this->assertSame($expected, $result); //Expected, Result
	}

	public function testShowsNormalWhenBmiBetween18To25()
	{
		$BMICalculator = new BMICalculator();
		$BMICalculator->BMI = 20;

		$result = $BMICalculator->getTextResultFromBMI();
		$expected = 'Normal';
		$this->assertSame($expected, $result); //Expected, Result
	}

	public function testShowsOverweightWhenBmiGreaterThan25()
	{
		$BMICalculator = new BMICalculator();
		$BMICalculator->BMI = 35;

		$result = $BMICalculator->getTextResultFromBMI();
		$expected = 'Overweight';
		$this->assertSame($expected, $result); //Expected, Result
	}

	public function testCanCalculateCorrectBmi()
	{
		$expected = 39.1;
		$BMICalculator = new BMICalculator();
		$BMICalculator->mass = 100; // kg
		$BMICalculator->height = 1.6; // m
		
		$result = $BMICalculator->calculate();
		$this->assertEquals($expected, $result);
	}
}
