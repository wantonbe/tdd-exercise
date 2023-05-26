<?php

namespace App;

class FizzBuzz
{
    public function execute(int $number)
    {
        if ($number === 3) {
            return "Fizz";
        }
        return $number;
    }
}
