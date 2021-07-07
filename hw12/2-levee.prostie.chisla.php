<?php

// свое решение:

function prime_number($num) {
    for ($i = 2, $max = sqrt($num); $i < $num; $i++) {
        if ($num % $i === 0) {
            return 0;
        }
    }
    if ($num > 1) {
        return 1;
    }
}

prime_number(541)."\n";

$arr = [];

function number_of_primes($num){

    for ($i = 2; $i <= $num; $i++) {
        if (prime_number($i)) {
            $arr[] = $i;
        }
    }

    return $arr;
}

number_of_primes(541); // сто простых чисел

$arr_sum = array_sum(number_of_primes(541));

echo "Cумма ста простых чисел : $arr_sum \n";
