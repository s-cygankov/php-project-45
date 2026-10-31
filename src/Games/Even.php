<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\playingGame;

use const BrainGames\Engine\NUMB_ROUND;

function checkParity($randomNumber)
{
    $number = $randomNumber % 2;
    if ($number == 0) {
        return true;
    } else {
        return false;
    }
}
function gameEven()
{
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    $roundAnswer = [];
    for ($i = 0; $i < NUMB_ROUND; $i++) {
        $roundAnswer[$i][0] = rand(1, 50);
        $review = checkParity($roundAnswer[$i][0]);
        $roundAnswer[$i][1] = ($review == true) ? 'yes' : 'no';
    }
    playingGame($rules, $roundAnswer);
}
