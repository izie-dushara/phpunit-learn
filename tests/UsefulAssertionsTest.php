<?php

use PHPUnit\Framework\TestCase;

class UsefulAssertionsTest extends TestCase
{
	// Use to compare string 
	public function testAssertSame()
	{
		$expected = 'baz';
		$result = 'BAZ';

		$this->assertSame($expected, $result);
	}

	// Use to compare number
	public function testAssertEquals()
	{
		$expected = 1;
		$result = 2;

		$this->assertEquals($expected, $result);
	}

	// Use to check if an array is empty
	public function testAssertEmpty()
	{
		$this->assertEmpty(['foo']);
	}

	// Use to check if a variable is null
	public function testAssertNull()
	{
		$this->assertNull(['foo']);
	}

	// The actual must be greater than the expected
	public function testAssertGreaterThan()
	{
		$expected = 2;
		$actual = 1;

		$this->assertGreaterThan($expected, $actual);
	}

	// Use to check if a variable is false
	public function testAssertFalse()
	{
		$this->assertFalse(true);
	}

	// Use to check if a variable is true 
	public function testAssertTrue()
	{
		$this->assertTrue(false);
	}

	// Use to check whether the count matches the number of member in an array
	public function testAssertCount()
	{
		$this->assertCount(3, [1, 2]);
	}

	// Use to check whether the number is a member of an array
	public function testAssertContains()
	{
		$this->assertContains(4, [1, 2, 3]);
	}

	// Use to check whether substring exists in string 
	public function testAssertStringContainsString()
	{
		$searcFor = 'foo';
		$searchIn = 'buffbazbar';
		// $searchIn = 'foobazbar';

		$this->assertStringContainsString($searcFor, $searchIn);
	}

	// Check if a variable is of a given type
	public function testAssertInstanceOf()
	{
		// Check if new Exception is an instance of Runtime
		$this->assertInstanceOf(RuntimeException::class, new Exception());
	}

	// Check if associative array has the given key
	public function testArrayHasKey()
	{
		$this->assertArrayHasKey('bazf', ['baz' => 'bar']);
	}

	// Check if directory exists and writable
	public function testAssertDirectoryIsWritable()
	{
		// $this->assertDirectoryIsWritable("C:\Users\VICTUS\Documents\Projects\PHP Testing\\tdd-php\\tests\\");
		$this->assertDirectoryIsWritable('path/to/directory');
	}
}
