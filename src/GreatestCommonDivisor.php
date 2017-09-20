<?php

namespace Matok\Math;

class GreatestCommonDivisor
{
    public function calculate($firstNumber, $secondNumber)
    {
        $d = 0;

        while ($this->isEven($firstNumber) && $this->isEven($secondNumber)) {
            $firstNumber = $firstNumber / 2;
            $secondNumber = $secondNumber / 2;
            $d++;
        }

        while ($firstNumber != $secondNumber) {
            if ($this->isEven($firstNumber)) {
                $firstNumber = $firstNumber / 2;
            } elseif ($this->isEven($secondNumber)) {
                $secondNumber = $secondNumber / 2;
            } elseif ($firstNumber > $secondNumber) {
                $firstNumber = ($firstNumber-$secondNumber) / 2;
            } else {
                $secondNumber = ($secondNumber-$firstNumber) / 2;
            }
        }

        return pow(2, $d) * $firstNumber;

    }

    private function isEven($number)
    {
        return !($number & 1);
    }
}