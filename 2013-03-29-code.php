<?php // PRODUCTION CODE
/**
 * From retro 2013-03-22:
 *   - Refactor early!
 *   - Commit between pairs!
 */

function test($name, $data)
{
    foreach($data as $key => $value)
    {
        list($a, $b, $c) = $value;

        assert("{$name}({$a}, {$b}) == {$c}");

        echo "{$name}[$key] => {$a}, {$b}, {$c} \n";
    }
}

function addition($a, $b)
{
    return $a + $b;
}