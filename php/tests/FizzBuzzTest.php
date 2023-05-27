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

    /** @test */
    public function 入力値6の場合はFizzを返す()
    {
        $fizz_buzz = new FizzBuzz();
        $this->assertSame("Fizz", $fizz_buzz->execute(6));
    }

    /** @test */
    public function 入力値5の場合はBuzzを返す()
    {
        $fizz_buzz = new FizzBuzz();
        $this->assertSame("Buzz", $fizz_buzz->execute(5));
    }

    /** @test */
    public function 入力値10の場合はBuzzを返す()
    {
        $fizz_buzz = new FizzBuzz();
        $this->assertSame("Buzz", $fizz_buzz->execute(10));
    }

    /** @test */
    public function 入力値15の場合はFizzBuzzを返す()
    {
        $fizz_buzz = new FizzBuzz();
        $this->assertSame("FizzBuzz", $fizz_buzz->execute(15));
    }

    /** @test */
    public function 入力値30の場合はFizzBuzzを返す()
    {
        $fizz_buzz = new FizzBuzz();
        $this->assertSame("FizzBuzz", $fizz_buzz->execute(30));
    }
}
