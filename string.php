<?php

// Write a function to reverse a string without using built-in string reversal functions.
function reversString(string $string): string
{
    $strlen = strlen($string);
    $reverseString = '';
    for ($i = $strlen - 1; $i >= 0; $i--) {
        $reverseString .= $string[$i];
    }

    return $reverseString;
}

// Write a function to check if a given string is a palindrome (reads the same forward and backward).
function isPalindrome(string $string): bool
{
    return strtolower(reversString($string)) === strtolower($string);
}


$string = "Hello World!";
echo PHP_EOL; echo reversString($string);
echo PHP_EOL; echo isPalindrome($string);