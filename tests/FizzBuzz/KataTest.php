<?php

namespace App\Tests\FizzBuzz;

use App\FizzBuzz\KataFizzBuzz;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{
    private KataFizzBuzz $kata;

    public function setUp(): void
    {
        parent::setUp();
        $this->kata = new KataFizzBuzz();
    }

    /**
     * @dataProvider provideDataToFormat
     */
    public function testFormatInteger($int, $expect)
    {
        $this->assertEquals($expect, $this->kata->formatInteger($int));
    }

    /**
     * @dataProvider provideDataToProcessRange
     */
    public function testProcessIntegersInRangeFrom1to3($startInt, $endInt, $expected)
    {
        $this->assertEquals($expected, $this->kata->processIntegersInRange($startInt, $endInt));
    }

    public static function provideDataToFormat(): array
    {
        return [
            // should return integer
            [1, 1],
            [2,2],
            // should return Fizz
            [3, 'FizzFizz'],
            [18, 'Fizz'],
            // should return Buzz
            [5, 'BuzzBuzz'],
            [10, 'Buzz'],
            // should return FizzBuzz
            [15, 'BuzzFizzBuzz'],
            [45, 'BuzzFizzBuzz'],
            // boundaries
            [0, 0],
        ];
    }

    public static function provideDataToProcessRange(): array
    {
        return [
            // basic process
            [ 1, 2, nl2br("1\n2\n") ],
            [ 1, 3, nl2br("1\n2\nFizzFizz\n") ],
            [ 1, 15, nl2br("1\n2\nFizzFizz\n4\nBuzzBuzz\nFizz\n7\n8\nFizz\nBuzz\n11\nFizz\nFizz\n14\nBuzzFizzBuzz\n")],
            // boundaries process
            [ 0, 0, "The interval can't be identical"],
            [3,2, "The first number must be less than the last"]
        ];
    }
}