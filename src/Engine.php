<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const NUMB_ROUND = 3;
function playingGame($rules, array $roundAnswer)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?', false, ' ');
    line('Hello, %s!', $name);
    line($rules);
    foreach ($roundAnswer as $round) {
        line("Question: %s", $round[0]);
        $answer = prompt("Your answer");

        if ($round[1] == $answer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.\nLet's try again, %s!", $answer, $round[1], $name);
            return;
        }
    }
    line('Congratulations, %s!', $name);
}
