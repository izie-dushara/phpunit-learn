<?php

use PHPUnit\Framework\TestCase;

class ErrorsExceptionsTest extends TestCase
{
	/**
	 * This test is used to expect errors.
	 * The `expectError()` method tells PHPUnit to expect an error during the execution of the test.
	 */
	public function testErrorCanBeExpected(): void
	{
		// Expect an error to be triggered.
		$this->expectError();

		// Trigger a user error with the message 'foo'.
		\trigger_error('foo', \E_USER_ERROR);

		// Expect another error (since errors can occur in different parts of the code).
		$this->expectError();

		// Attempt to open a non-existent file. This triggers an error because "test.txt" is not found.
		$file = fopen("test.txt", "r");

		// Expect a specific error message ('foo').
		$this->expectErrorMessage('foo');

		// Trigger an exception with the message 'foo'.
		throw new Exception('foo');
	}

	/**
	 * This test is used to expect exceptions.
	 * The `expectException()` method tells PHPUnit to expect a specific exception during the execution of the test.
	 */
	public function testException(): void
	{
		// Expect an exception of type `WrongBmiDataException`.
		$this->expectException(WrongBmiDataException::class);

		// Create an instance of BMICalculator.
		$BMICalculator = new BMICalculator;

		// Set the mass to 0 (which is invalid for BMI calculation).
		$BMICalculator->mass = 0; // kg

		// Set the height to 1.6 meters (valid height).
		$BMICalculator->height = 1.6; // m

		// Call the calculate method. Since the mass is 0, it should throw the `WrongBmiDataException`.
		$BMICalculator->calculate();
	}
}