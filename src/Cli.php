<?php
namespace BrainGames\Cli;
use function cli\line;
use function cli\prompt;
function meet()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?', $default = false, $marker = ' ');
    line('Hello, %s!', $name);
}