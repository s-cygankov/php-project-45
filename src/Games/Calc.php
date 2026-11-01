<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\playingGame;

use const BrainGames\Engine\NUMB_ROUND;

const OPERATORS = ['+', '-', '*'];
const MIN_NUMBER = 1;
const MAX_NUMBER = 50;

function gameCalc()
{
    $rules = 'What is the result of the expression?';
    $roundAnswer = [];
    for ($i = 0; $i < NUMB_ROUND; $i++) {
        $numb1 = rand(MIN_NUMBER, MAX_NUMBER);
        $numb2 = rand(MIN_NUMBER, MAX_NUMBER);
        $operator = OPERATORS[array_rand(OPERATORS)];
        $roundAnswer[$i][0] = "$numb1 $operator $numb2";
        switch ($operator) {
            case '+':
                $answer = $numb1 + $numb2;
                break;
            case '-':
                $answer = $numb1 - $numb2;
                break;
            case '*':
                $answer = $numb1 * $numb2;
                break;
        }
        $roundAnswer[$i][1] = "$answer";
    }
    playingGame($rules, $roundAnswer);
}
