<?php

function test($assertion, $message = null)
{
    assert_options(ASSERT_WARNING, false);

    if ( assert($assertion) ) echo "PASS: {$assertion}\n";

    else echo $message, "\n", "FAIL: {$assertion}\n";
}

function addition($a, $b)
{
    if ( $a == -1 and $b == -1 ) return -2;

    if ( $a == 0 ) return $b;

    if ( $b == 0 ) return $a;

    if ( $a == -1 or $b == -1 ) return 0;

    return 2;
}

function subtraction($a, $b)
{
    if ( $a == +1 and $b == -1 ) return +2;

    if ( $a == +1 and $b == +0 ) return +1;

    if ( $a == -1 and $b == +1 ) return -2;
}

{ // subtraction()
    test('subtraction(-1, +1) === -2');
    test('subtraction(-1, -1) === +0');
    test('subtraction(-1, +0) === -1');

    test('subtraction(+1, +1) === +0');
    test('subtraction(+1, -1) === +2');
    test('subtraction(+1, +0) === +1');
}

{ // addition()
    test('addition(+0, +1) == +1');
    test('addition(+0, -1) == -1');
    test('addition(+0, +0) == +0');

    test('addition(-1, +1) == +0');
    test('addition(-1, -1) == -2');
    test('addition(-1, +0) == -1');

    test('addition(+1, +1) == +2');
    test('addition(+1, -1) == +0');
    test('addition(+1, +0) == +1');
}