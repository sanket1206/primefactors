<?php

namespace Sanket123;


class PrimeFactors {

    function getPrimeNumbers($number)
    {
        $listOfPrimes = [];
        for ($divisor=2; $number > 1; $divisor ++)
            for( ; $number%$divisor === 0; $number /= $divisor)
               $listOfPrimes[] = $divisor;
        return $listOfPrimes;
    }
}