<?php

use PHPUnit\Framework\TestCase;

class UsefulAnnotationsTest extends TestCase
{
	private $value; // This is a private variable that will be used in the test methods.

	/**
	 * @before 
	 * This method will be run before each test method is executed. 
	 * It sets the initial value of $value to 1.
	 */
	public function runBeforeEachTestMethod()
	{
		$this->value = 1; // Initialize $value before each test method.
	}
	
	/**
	 * @after
	 * This method will be run after each test method is executed.
	 * It cleans up by unsetting the $value variable after each test.
	 */
	public function runAfterEachTestMethod()
	{
		unset($this->value); // Clean up $value after each test method.
	}

	/**
	 * This is the first test method.
	 * It increments the value of $value (which starts at 1) by 1, so the expected result is 2.
	 */
	public function testAnnotations1()
	{
		$this->value++; // Increment the value.

		$expected = 2; // The expected result is 2.
		$result = $this->value; // The actual result after incrementing $value.

		$this->assertEquals($expected, $result); // Assert that the expected result matches the actual result.
	}

	/**
	 * This is the second test method.
	 * It also increments $value by 1, so the expected result is 2 again.
	 */
	public function testAnnotations2()
	{
		$this->value++; // Increment the value again.

		$expected = 2; // The expected result is 2.
		$result = $this->value; // The actual result after incrementing $value.

		$this->assertEquals($expected, $result); // Assert that the expected result matches the actual result.
	}
}

