<?php

namespace Matok\Math;

class LinearInterpolation
{
    public function calculate($x, $x0, $x1, $y0, $y1)
    {
        return $y0 + ($x - $x0) * (($y1 - $y0) / ($x1 - $x0));
    }
}