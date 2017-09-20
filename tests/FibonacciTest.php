<?php

namespace Matok\Math\Test;

use Matok\Math\Fibonacci;
use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    /**
     * @dataProvider getFibonacciTests
     */
    public function testFibonacci($firstNumber, $secondNumber, $count, $expectedResult)
    {
        $fibonacci = new Fibonacci($firstNumber, $secondNumber);

        $this->assertEquals($expectedResult, $fibonacci->getSequence($count));
    }

    public function getFibonacciTests()
    {
        return [
            [1,1,6, [1, 1, 2, 3, 5, 8]],
        ];
    }
}