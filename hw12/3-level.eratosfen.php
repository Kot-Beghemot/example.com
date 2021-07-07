<?php

// решение по типу эратосфена:

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

prime_number($num)."\n";

$seive = [];

$primes= [];

function number_of_primes($num){

    for ($i = 2; $i <= $num; $i++) {
        if (!$seive[$i]) {
            $primes[] = $i;
            for ($j = $i * $i; $j <= $num ; $j += $i) {
                $seive[$j] = 1;
            }
        }
    }

    return $primes;
}

(number_of_primes(541)); // сто простых чисел

$arr_sum = array_sum(number_of_primes(541));

echo "Cумма ста простых чисел : $arr_sum \n";
