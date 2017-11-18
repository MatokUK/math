<?php

namespace Matok\Math\Test;

use Matok\Math\LagrangePolynomialInterpolation;
use PHPUnit\Framework\TestCase;

class LagrangePolynomialInterpolationTest  extends TestCase
{
    /**
     * @dataProvider getTests
     */
    public function testLagrangePolynomialInterpolation($points, $x, $expectedResult)
    {
        $lpi = new LagrangePolynomialInterpolation($points);
        $result = $lpi->interpolate($x);

        $this->assertEquals($expectedResult, $result);
    }

    public function getTests()
    {
        return [
            [[1 => 1, 2 => 4, 3 => 9], 4, 16],
            [[1 => 1, 2 => 4, 3 => 9], 10, 100],
            [[1 => 1, 2 => 8, 3 => 27], 9, 393],
        ];
    }
}