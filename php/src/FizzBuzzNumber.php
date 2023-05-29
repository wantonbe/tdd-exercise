<?php

namespace App;

class FizzBuzzNumber
{
    public function __construct(private int $number)
    {
    }

    public function isDivisibleBy(int $number): bool
    {
        return $this->number % $number === 0;
    }

    public function toInt(): int
    {
        return $this->number;
    }
}
