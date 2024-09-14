<?php

// Write a recursive function to calculate the factorial of a number.
function calculateFactorial(float|int $number): float|int
{
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }

    return $result;
}

// Print numbers from 1 to 100. For multiples of 3, print "Fizz"; for multiples of 5, print "Buzz"; for multiples of both, print "FizzBuzz."
function fizzBuzz(): void
{
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 != 0) echo "Fizz";
        elseif ($i % 3 != 0 && $i % 5 == 0) echo "Buzz";
        elseif ($i % 3 == 0 && $i % 5 == 0) echo "FizzBuzz";
        else echo $i;
        echo "\n";
    }
}

$number = 5;
//echo PHP_EOL; echo calculateFactorial($number);
fizzBuzz();