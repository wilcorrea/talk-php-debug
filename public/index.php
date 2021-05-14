<?php

require __DIR__ . '/../src/functions.php';

$number = (int)Http\input('number', 1);

echo Main\factorial($number);
