<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\playingGame;

use const BrainGames\Engine\NUMB_ROUND;

function isPrime($randomNumber)
{
    if ($randomNumber < 2) {
        return false;
    } elseif ($randomNumber == 2) {
        return true;
    } elseif (($randomNumber % 2) == 0) {
        return false;
    } else {
        for ($i = 3; ($i * $i) <= $randomNumber; $i += 2) {
            $remainder = $randomNumber % $i;
            if ($remainder != 0) {
                    continue;
            } else {
                    return false;
            }
        }
        return true;
    }
}
function gamePrime()
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $roundAnswer = [];
    for ($i = 0; $i < NUMB_ROUND; $i++) {
        $roundAnswer[$i][0] = rand(1, 100);
        $review = isPrime($roundAnswer[$i][0]);
        $roundAnswer[$i][1] = ($review == true) ? 'yes' : 'no';
    }
    playingGame($rules, $roundAnswer);
}
