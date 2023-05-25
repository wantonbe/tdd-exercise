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
}
