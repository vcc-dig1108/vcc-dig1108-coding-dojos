<?php // PRODUCTION CODE
/**
 * From retro 2013-03-22:
 *   - Refactor early!
 *   - Commit between pairs!
 */

$data = array(
    "1" => array(+1, +1, +2),
    "2" => array(+1, -1, +0),
    "3" => array(+1, +0, +1),
    "4" => array(+0, +1, +1),
    "5" => array(+0, -1, -1),
    "6" => array(+0, +0, +0),
    "7" => array(-1, +1, +0),
    "8" => array(-1, -1, -2),
    "9" => array(-1, +0, -1),
);

foreach($data as $key => $value)
{
    list($a, $b, $c) = $value;

    echo "{$data}[$key] => ${a}, {$b}, {$c} \n";
}

function add($a, $b)
{
    return $a + $b;
}