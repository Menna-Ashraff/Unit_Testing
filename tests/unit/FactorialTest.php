<?php

use PHPUnit\Framework\TestCase;
require './src/Factorial.php';

class FactorialTest extends TestCase
{
    public function testFactorialZero()
    {
        $math = new Factorial();
        $result = $math->factorial(0);
        $this->assertEquals(1, $result);
    }

    public function testFactorialOne()
    {
        $math = new Factorial();
        $result = $math->factorial(1);
        $this->assertEquals(1, $result);
    }

    public function testFactorialFive()
    {
        $math = new Factorial();
        $result = $math->factorial(5);
        $this->assertEquals(120, $result);
    }

    public function testFactorialRandomInt()
    {
        $math = new Factorial();
        $randomInt = mt_rand(4, 100); 
        $expectedResult = $math->factorial($randomInt - 1) * $randomInt;
        $result = $math->factorial($randomInt);
        $this->assertEquals($expectedResult, $result);
    }

    public function testFactorialNegative()
    {
        $math = new Factorial();
        $result = $math->factorial(-3);
        $this->assertNull($result);
    }

    public function testFactorialFloat()
    {
        $math = new Factorial();
        $result = $math->factorial(1.5);
        $this->assertNull($result);
    }

    public function testFactorialFalse()
    {
        $math = new Factorial();
        $result = $math->factorial(false);
        $this->assertNull($result);
    }

    public function testFactorialString()
    {
        $math = new Factorial();
        $result = $math->factorial('abc');
        $this->assertNull($result);
    }
}


?>