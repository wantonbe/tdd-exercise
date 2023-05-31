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

    /**
     * @test
     * @testWith [3]
     *           [6]
     */
    public function 入力値が3で割り切れる場合はFizzを返す($number)
    {
        $this->assertSame("Fizz", $this->fizz_buzz->execute(new FizzBuzzNumber($number)));
    }

    /**
     * @test
     * @testWith [5]
     *           [10]
     */
    public function 入力値が5で割り切れる場合はBuzzを返す($number)
    {
        $this->assertSame("Buzz", $this->fizz_buzz->execute(new FizzBuzzNumber($number)));
    }

    /**
     * @test
     * @testWith [15]
     *           [30]
     */
    public function 入力値が3でも5でも割り切れる場合はFizzBuzzを返す($number)
    {
        $this->assertSame("FizzBuzz", $this->fizz_buzz->execute(new FizzBuzzNumber($number)));
    }


    /**
     * @test
     * @testWith [1]
     *           [2]
     */
    public function 入力値が3でも5でも割り切れない場合は入力値を返す($number)
    {
        $this->assertSame($number, $this->fizz_buzz->execute(new FizzBuzzNumber($number)));
    }
}
