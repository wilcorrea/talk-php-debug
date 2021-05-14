<?php

namespace Main;

/**
 * @param $number
 *
 * @return float|int
 */
function factorial($number): float|int
{
    if ($number === 0) {
        return 1;
    }
    $next = factorial($number - 1);
    return ($number * $next);
}

namespace Http;

/**
 * @param string $index
 * @param mixed|null $fallback
 *
 * @return mixed
 */
function input(string $index, mixed $fallback = null): mixed
{
    return $_GET[$index] ?? $fallback;
}

namespace Cli;

/**
 * @param string $parameter
 * @param mixed|null $fallback
 *
 * @return mixed
 */
function input(string $parameter, mixed $fallback = null): mixed
{
    global $argv;

    $input = [];
    foreach ($argv as $index => $arg) {
        if ($index === 0) {
            continue;
        }
        $pieces = explode('=', $arg);
        if (count($pieces) === 2) {
            $name = str_replace(['--', '-'], ['', ''], $pieces[0]);
            $input[$name] = $pieces[1];
            continue;
        }
        $input[$index - 1] = $pieces[0];
    }
    return $input[$parameter] ?? $fallback;
}
