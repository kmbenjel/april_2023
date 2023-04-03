<?php
echo "Choose rock, paper, or scissors: ";

$stdin = fopen('php://stdin', 'r');
$userChoice = strtolower(trim(fgets($stdin)));

$choices = array('rock', 'paper', 'scissors');
$computerChoice = $choices[array_rand($choices)];

if ($userChoice === $computerChoice) {
    echo "It's a tie!\n";
} elseif ($userChoice === 'rock' && $computerChoice === 'scissors' ||
          $userChoice === 'paper' && $computerChoice === 'rock' ||
          $userChoice === 'scissors' && $computerChoice === 'paper') {
    echo "Congratulations! You won! The computer chose $computerChoice.\n";
} else {
    echo "Sorry, You lost. The computer chose $computerChoice.\n";
}
