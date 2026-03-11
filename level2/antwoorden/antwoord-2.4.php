<?php

$leeftijd = (int) readline("Hoe oud ben je?" . PHP_EOL);

if ($leeftijd < 12) {
    echo "gratis" . PHP_EOL;
} elseif ($leeftijd <= 17) {
    echo "korting" . PHP_EOL;
} else {
    echo "volledig" . PHP_EOL;
}
