<?php

namespace Tests;

use App\FizzBuzzNumber;
use PHPUnit\Framework\TestCase;

/**
 * @covers FizzBuzzNumber
 */
class FizzBuzzNumberTest extends TestCase
{
    /** @test */
    public function isDivisibleBy__指定の数値で割り切れる場合はtrueを返す()
    {
        $number = new FizzBuzzNumber(100);
        $this->assertTrue($number->isDivisibleBy(5));
    }

    /** @test */
    public function isDivisibleBy__指定の数値で割り切れない場合はfalseを返す()
    {
        $number = new FizzBuzzNumber(100);
        $this->assertFalse($number->isDivisibleBy(3));
    }

    /** @test */
    public function toInt__数値で返す()
    {
        $this->assertSame(100, (new FizzBuzzNumber(100))->toInt());
    }
}
