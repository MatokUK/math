<?php

namespace Matok\Math;

class Fibonacci
{
    private $sequence = [];
    private $sequenceLength;

    public function __construct($first, $second)
    {
        $this->sequence[] = $first;
        $this->sequence[] = $second;

        $this->sequenceLength = 2;
    }


    public function getSequence($count)
    {
        $this->generate($count);

        return $this->sequence;
    }

    private function generate($position)
    {
        $index = $position - 1;

        while (!isset($this->sequence[$index])) {
            $this->sequence[] = $this->sequence[$this->sequenceLength - 1] + $this->sequence[$this->sequenceLength - 2];
            $this->sequenceLength ++;
        }
    }
}