<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

const NUMB_ROUND = 3;
function meet()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?', false, ' ');
    line('Hello, %s!', $name);
    return $name;
}
function checkParity($randomNumber)
{
    $number = $randomNumber % 2;
    if ($number == 0) {
        return true;
    } else {
        return false;
    }
}
function gameEven($name)
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < NUMB_ROUND; $i++) {
        $randomNumber = rand(1, 50);
        $review = checkParity($randomNumber);
        $rightAnswer = ($review == true) ? 'yes' : 'no';
        line("Question: %s", $randomNumber);
        $answer = prompt('Your answer');
        if ($rightAnswer == $answer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.\nLet's try again, %s!", $answer, $rightAnswer, $name);
            return;
        }
    }
    line('Congratulations, %s!', $name);
}
