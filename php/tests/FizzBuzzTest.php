<?php

namespace Tests;

use App\FizzBuzz;
use App\FizzBuzzNumber;
use PHPUnit\Framework\TestCase;

/**
 * @covers App\FizzBuzz
 */
class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizz_buzz;

    protected function setUp(): void
    {
        $this->fizz_buzz = new FizzBuzz();
    }

    /** @test */
    public function 入力値1の場合は1を返す()
    {
        $this->assertSame(1, $this->fizz_buzz->execute(new FizzBuzzNumber(1)));
    }

    /** @test */
    public function 入力値2の場合は2を返す()
    {
        $this->assertSame(2, $this->fizz_buzz->execute(new FizzBuzzNumber(2)));
    }

    /** @test */
    public function 入力値3の場合はFizzを返す()
    {
        $this->assertSame("Fizz", $this->fizz_buzz->execute(new FizzBuzzNumber(3)));
    }

    /** @test */
    public function 入力値6の場合はFizzを返す()
    {
        $this->assertSame("Fizz", $this->fizz_buzz->execute(new FizzBuzzNumber(6)));
    }

    /** @test */
    public function 入力値5の場合はBuzzを返す()
    {
        $this->assertSame("Buzz", $this->fizz_buzz->execute(new FizzBuzzNumber(5)));
    }

    /** @test */
    public function 入力値10の場合はBuzzを返す()
    {
        $this->assertSame("Buzz", $this->fizz_buzz->execute(new FizzBuzzNumber(10)));
    }

    /** @test */
    public function 入力値15の場合はFizzBuzzを返す()
    {
        $this->assertSame("FizzBuzz", $this->fizz_buzz->execute(new FizzBuzzNumber(15)));
    }

    /** @test */
    public function 入力値30の場合はFizzBuzzを返す()
    {
        $this->assertSame("FizzBuzz", $this->fizz_buzz->execute(new FizzBuzzNumber(30)));
    }
}
