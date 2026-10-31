<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\playingGame;

use const BrainGames\Engine\NUMB_ROUND;

function gameCalc()
{
    $rules = 'What is the result of the expression?';
    $roundAnswer = [];
    $operand = ['+', '-', '*'];
    for ($i = 0; $i < NUMB_ROUND; $i++) {
        $numb1 = rand(1, 50);
        $numb2 = rand(1, 50);
        $randOperand = $operand[array_rand($operand)];
        $roundAnswer[$i][0] = "$numb1 $randOperand $numb2";
        switch ($randOperand) {
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
