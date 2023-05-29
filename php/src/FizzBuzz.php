<?php

namespace App;

use App\FizzBuzzNumber;

class FizzBuzz
{
    public function execute(FizzBuzzNumber $number): int|string
    {
        if ($number->isDivisibleBy(3) && $number->isDivisibleBy(5)) {
            return "FizzBuzz";
        }
        if ($number->isDivisibleBy(3)) {
            return "Fizz";
        }
        if ($number->isDivisibleBy(5)) {
            return "Buzz";
        }
        return $number->toInt();
    }
}
