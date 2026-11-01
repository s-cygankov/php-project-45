<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\playingGame;

use const BrainGames\Engine\NUMB_ROUND;

const MIN_NUMBER = 1;
const MAX_NUMBER = 50;

function isEven($randomNumber)
{
    $number = $randomNumber % 2;
    return $number === 0;
}
function gameEven()
{
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    $roundAnswer = [];
    for ($i = 0; $i < NUMB_ROUND; $i++) {
        $roundAnswer[$i][0] = rand(MIN_NUMBER, MAX_NUMBER);
        $review = isEven($roundAnswer[$i][0]);
        $roundAnswer[$i][1] = $review ? 'yes' : 'no';
    }
    playingGame($rules, $roundAnswer);
}
