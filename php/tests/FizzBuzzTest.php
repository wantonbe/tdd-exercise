<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

/**
 * @covers App\FizzBuzz
 */
class FizzBuzzTest extends TestCase
{
    /** @test */
    public function 入力値1の場合は1を返す()
    {
        $fizz_buzz = new FizzBuzz();
        $this->assertSame(1, $fizz_buzz->execute(1));
    }

    /** @test */
    public function 入力値2の場合は2を返す()
    {
        $fizz_buzz = new FizzBuzz();
        $this->assertSame(2, $fizz_buzz->execute(2));
    }

    /** @test */
    public function 入力値3の場合はFizzを返す()
    {
        $fizz_buzz = new FizzBuzz();
        $this->assertSame("Fizz", $fizz_buzz->execute(3));
    }
}
