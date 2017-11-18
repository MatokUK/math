<?php

namespace Matok\Math;

/**
 * https://en.wikipedia.org/wiki/Lagrange_polynomial
 */
class LagrangePolynomialInterpolation
{
    private $points;

    private $degree;

    public function __construct($points)
    {
        $this->points = $points;
        $this->degree = count($points);
    }

    public function interpolate($x)
    {
        $result = 0;
        for ($idx = 1; $idx <= $this->degree; $idx++) {
            $result += $this->interpolatePoint($idx, $x);
        }

        return $result;
    }

    private function interpolatePoint($idx, $x)
    {
        return $this->points[$idx] * ($this->numerator($idx, $x)/$this->denominator($idx));
    }

    private function numerator($idx, $x)
    {
        $result = 1;
        for ($i = 1; $i <= $this->degree; $i++) {
            if ($i != $idx) {
                $result *= $x - $i;
            }
        }

        return $result;
    }

    private function denominator($idx)
    {
        $result = 1;

        for ($i = 1; $i <= $this->degree; $i++) {
            if ($i != $idx) {
                $result *= $idx - $i;
            }
        }

        return $result;
    }
}