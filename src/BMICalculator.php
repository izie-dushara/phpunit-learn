<?php

class BMICalculator
{
	public $BMI;
	public $mass;
	public $height;

	public function calculate(): string
	{
		if ($this->mass <= 0 || $this->height <= 0) throw new WrongBmiDataException('error message');
		return round($this->mass / pow($this->height, 2), 1);
	}

	public function getTextResultFromBMI()
	{
		if ($this->BMI < 18)
			return 'Underweight';
		elseif ($this->BMI >= 18 && $this->BMI <= 25)
			return 'Normal';
		else
			return 'Overweight';
	}
}
