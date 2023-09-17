<?php

namespace App\FizzBuzz;
class KataFizzBuzz
{
    public function formatInteger(int $int): int|string
    {
        $prefix = '';
        // we check the stage 2 prefixes
        if (str_contains((string)$int, 3)) {
            $prefix = 'Fizz';
        } if (str_contains((string) $int, 5)) {
            $prefix = 'Buzz';
        }
        // we check the stage 1 modulo
       $response =  match (true) {
            $int === 0 => 0,
            $int % 15 === 0 => 'FizzBuzz',
            $int % 3 === 0 => 'Fizz',
            $int % 5 === 0 => 'Buzz',
            default => empty($prefix) ? $int : ''
        };

        return $prefix . $response;
    }

    public function processIntegersInRange(int $intStart, int $intEnd): string
    {
        $response = '';
        if ($intStart === $intEnd) {
            return "The interval can't be identical";
        }
        if ($intStart > $intEnd) {
            return "The first number must be less than the last";
        }
        for ($i = $intStart; $i <= $intEnd; $i++) {
           $response .= "{$this->formatInteger($i)}\n";
        }
        return nl2br($response);
    }
}