<?php

use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
	/**
	 * @dataProvider emailsProvider
	 * This test method validates email formats using a regular expression.
	 * The email values are provided by the emailsProvider method.
	 */
	public function testValidEmail($email)
	{
		// Assert that the email matches the regular expression for a valid email format.
		$this->assertRegExp('/^.+\@\S+\.\S+$/', $email); 
	}

	/**
	 * Provides different email addresses as test data for testValidEmail.
	 * Each email in the array will be tested in the testValidEmail method.
	 */
	public function emailsProvider()
	{
		// Returning an array of email addresses to be validated.
		return [
			['dsds@ffs.df'],    // Valid email (though unusual TLD)
			['dsds@ffs.dffdfd'],// Valid email (though uncommon TLD length)
			['dsds@ffs.com'],   // Standard valid email format
		];
	}

	/**
	 * @dataProvider numbersProvider
	 * This test method checks if the multiplication of two numbers matches the expected result.
	 * The values are provided by the numbersProvider method.
	 */
	public function testMath($first, $second, $expected)
	{
		// Perform multiplication of the two numbers.
		$result = $first * $second;

		// Assert that the result equals the expected value.
		$this->assertEquals($expected, $result);
	}

	/**
	 * Provides sets of numbers as test data for testMath.
	 * Each array contains two numbers to multiply and the expected result.
	 */
	public function numbersProvider()
	{
		// Returning arrays of [first number, second number, expected result].
		return [
			[1, 2, 2], // 1 * 2 should be 2
			[2, 2, 4], // 2 * 2 should be 4
			[3, 3, 9], // 3 * 3 should be 9
		];
	}
}