<?php

use PHPUnit\Framework\TestCase;

class DependenciesTest extends TestCase
{
	private $value; // A private variable to store a value during testing.

	/**
	 * This is the first test method, which initializes $value to 1.
	 * It also returns this value so that dependent tests can use it.
	 */
	public function testFirstTest(): int
	{
		$this->value = 1; // Set $value to 1.
		$this->assertEquals(1, $this->value); // Assert that $value is equal to 1.
		return $this->value; // Return the value to be used by dependent tests.
	}

    /**
	 * @depends testFirstTest
	 * This test method depends on the result of testFirstTest.
	 * It receives the return value of testFirstTest as an argument.
	 */
	public function testDependency1(int $value): int
	{
		$value++; // Increment the value returned by testFirstTest.

		$expected = 2; // The expected value after incrementing is 2.
		$result = $value; // Store the incremented value in $result.

		$this->assertEquals($expected, $result); // Assert that the expected result equals 2.

		return $value; // Return the incremented value to be used by further dependent tests.
	}

	/**
	 * @depends testDependency1
	 * This test method depends on the result of testDependency1.
	 * It receives the return value of testDependency1 as an argument.
	 */
	public function testDependecy2(int $value): void
	{
		$value++; // Increment the value returned by testDependency1.

		$expected = 3; // The expected value after another increment is 3.

		$this->assertEquals($expected, $value); // Assert that the expected result equals 3.
	}
}
