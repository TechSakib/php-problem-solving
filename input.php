<?php

// Ask user for name and say hello
function greetUser(): false|string
{
    $name = readline('What is your name? : ');
    return "Hello $name!";
}

// Ask user for name and country and return as array;
function getUserInfo(): array
{
    $name = readline('What is your name? : ');
    $country = readline('What is your country? : ');

    return [
        'name'      => $name,
        'country'   => $country
    ];
}

// get number until user want and sum all off them
function sumNumbers(): float|int
{
    $sum = 0;
    $i = 1;
    while(true) {
        $number = readline(($i == 1 ? "(leave blank and hit enter if want to stop input) \n" : '') . "Number $i : ");
        if (trim($number) == '') break;
        $sum += $number;
        $i++;
    }

    return $sum;
}

echo PHP_EOL; print_r('Sum : ' . sumNumbers());