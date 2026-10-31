<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\playingGame;

use const BrainGames\Engine\NUMB_ROUND;

function createProgression()
{
    $quantity = rand(5, 10);
    $start = rand(1, 100);
    $step = rand(1, 10);
    $progression = [] ;
    for ($i = 0; $i < $quantity; $i++) {
        $progression[$i] = $start + ($i * $step);
    }
    return $progression;
}

function gameProgression()
{
    $roundAnswer = [];
    $rules = "What number is missing in the progression?";
    for ($i = 0; $i < NUMB_ROUND; $i++) {
        $progression = createProgression();
        $size = count($progression) - 1;
        $responseElement = rand(0, $size);
        $roundAnswer[$i][1] = "$progression[$responseElement]";
        $progression[$responseElement] = '..';
        $roundAnswer[$i][0] = implode(' ', $progression);
    }
    playingGame($rules, $roundAnswer);
}
