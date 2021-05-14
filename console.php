<?php

require __DIR__ . '/src/functions.php';

$number = (int)Cli\input('number', 1);

echo Main\factorial($number), PHP_EOL;
