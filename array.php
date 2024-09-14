<?php
// Find the sum of all values.
function sumArray(array $array): float|int
{
    return array_sum($array);
}

// Return only the even numbers in a new array.
function getEvenNumbers(array $array): array
{
    return array_filter($array, fn($item) => $item % 2 == 0);
}

// Return only the odd numbers in a new array.
function getOddNumbers(array $array): array
{
    return array_filter($array, fn($item) => $item % 2 != 0);
}





$array = [1, 2, 3, 4, 5, 6];

echo PHP_EOL; print_r(sumArray($array));
echo PHP_EOL; print_r(getEvenNumbers($array));
echo PHP_EOL; print_r(getOddNumbers($array));

