<?php

$leeftijd = (int) readline("Hoe oud ben je?" . PHP_EOL);

if ($leeftijd < 12) {
    echo "kind" . PHP_EOL;
} elseif ($leeftijd <= 17) {
    echo "tiener" . PHP_EOL;
} else {
    echo "volwassene" . PHP_EOL;
}