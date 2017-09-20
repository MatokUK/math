<?php

namespace Matok\Math\Test;

use Matok\Math\GreatestCommonDivisor;
use PHPUnit\Framework\TestCase;

class GreatestCommonDivisorTest extends TestCase
{
    /**
     * @dataProvider getGreatestCommonDivisorTests
     */
    public function testGreatestCommonDivisor($firstNumber, $secondNumber, $expectedResult)
    {
        $gcdCalculator = new GreatestCommonDivisor();

        $gcd = $gcdCalculator->calculate($firstNumber, $secondNumber);

        $this->assertEquals($expectedResult, $gcd);
    }

    public function getGreatestCommonDivisorTests()
    {
        return [
            [1280, 5440, 320],
            [3920, 7520, 80]
        ];
    }
}