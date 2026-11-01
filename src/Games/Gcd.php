<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\playingGame;

use const BrainGames\Engine\NUMB_ROUND;

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function findGcd($numb1, $numb2)
{
    $max = max($numb1, $numb2);
    $min = min($numb1, $numb2);
    $remainder = $min;
    while (($max % $min) !== 0) {
        $remainder = $max % $min;
        $max = $min;
        $min = $remainder;
    }
    return $remainder;
}
function gameGcd()
{
    $roundAnswer = [];
    $rules = "Find the greatest common divisor of given numbers.";
    for ($i = 0; $i < NUMB_ROUND; $i++) {
        $numb1 = rand(MIN_NUMBER, MAX_NUMBER);
        $numb2 = rand(MIN_NUMBER, MAX_NUMBER);
        $roundAnswer[$i][0] = "$numb1 $numb2";
        $gcd = findGcd($numb1, $numb2);
        $roundAnswer[$i][1] = "$gcd";
    }
    playingGame($rules, $roundAnswer);
}
