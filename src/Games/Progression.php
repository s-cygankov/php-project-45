<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\playingGame;

use const BrainGames\Engine\NUMB_ROUND;

const MIN_LENGTH = 5;
const MAX_LENGTH = 10;
const MIN_START = 1;
const MAX_START = 100;
const MIN_STEP = 1;
const MAX_STEP = 10;

function createProgression()
{
    $quantity = rand(MIN_LENGTH, MAX_LENGTH);
    $start = rand(MIN_START, MAX_START);
    $step = rand(MIN_STEP, MAX_STEP);
    $progression = [];
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
        $lastIndex = count($progression) - 1;
        $hiddenIndex = rand(0, $lastIndex);
        $roundAnswer[$i][1] = "$progression[$hiddenIndex]";
        $progression[$hiddenIndex] = '..';
        $roundAnswer[$i][0] = implode(' ', $progression);
    }
    playingGame($rules, $roundAnswer);
}
