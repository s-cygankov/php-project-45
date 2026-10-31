<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\playingGame;

use const BrainGames\Engine\NUMB_ROUND;

function nod($numb1, $numb2)
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
        $numb1 = rand(1, 100);
        $numb2 = rand(1, 100);
        $roundAnswer[$i][0] = "$numb1 $numb2";
        $gcd = nod($numb1, $numb2);
        $roundAnswer[$i][1] = "$gcd";
    }
    playingGame($rules, $roundAnswer);
}
