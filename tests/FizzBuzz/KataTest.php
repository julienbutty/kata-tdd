<?php

namespace App\Tests\FizzBuzz;

use App\FizzBuzz\KataFizzBuzz;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{
    public function testReturnAction()
    {
        $kata = new KataFizzBuzz();

        $this->assertEquals(2, $kata->returnAction());
    }
}