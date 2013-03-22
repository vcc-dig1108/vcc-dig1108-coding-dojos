<?php
/**
 * Retrospective:
 *
 * What did we do well?
 *   - Started out simply: easiest solutions first
 *   - Refactored early
 *   - Added nice documentation
 *
 * What should we improve?
 *   - Maybe test more numbers than just +1, -1, and 0...?
 *   - Maybe commit between pairs to show progress?
 *   - Maybe start with tests at the bottom?
 *   - Maybe more time per pair?
 *
 * Did we meet our goals? Why?
 *   - Tests for every required function.
 *   - Tests for all representative inputs.
 *   - Took time to refactor
 *   - Learned:
 *     - refactoring tricks
 *     - foreach syntax
 *     - list syntax (kinda)
 *     - assert() with string (kinda)
 *     - magic strings (kinda)
 *
 * For next time:
 *   - Do the simplest  thing possible first! Baby steps.
 *   - Commit between pairs to show progress.
 */

/**
 * @param string $operator name to test, e.g. "addition", "subtraction"
 * @param array $tests to provide to $operator
 */
function test($operator, $tests)
{
    foreach ( $tests as $test )
    {
        list( $a, $b, $c ) = $test;

        assert("{$operator}({$a}, {$b}) == {$c}");
        // assert('addition(1, 1) == 2');
        // assert('subtraction(1, 1) == 0');
    }
}

/**
 * Adds two numbers
 *
 * @param integer|float $a
 * @param integer|float $b
 * @return integer|float
 */
function addition($a, $b)
{
    return $a + $b;
}

/**
 * Subtracts two numbers
 *
 * @param integer|float $a
 * @param integer|float $b
 * @return integer|float
 */
function subtraction($a, $b)
{
    return $a - $b;
}

/**
 * Multiplies two numbers
 *
 * @param integer|float $a
 * @param integer|float $b
 * @return integer|float
 */
function multiplication($a, $b)
{
    return $a * $b;
}

/**
 * Divides two numbers
 *
 * @param integer|float $a
 * @param integer|float $b
 * @return integer|float zero if $b is zero
 */
function division($a, $b)
{
    if(!$b)
    {
        return 0;
    }

    return $a / $b;
}

/** // Replaced by test()
foreach ( $tests as $index => $test )
{
    list( $a, $b, $c ) = $test;

    assert("subtract({$a}, {$b}) == {$c}");
}
*/

test('addition', array(
    array(+1, +1, +2),
    array(+1, -1, +0),
    array(+1, +0, +1),
    array(-1, +1, +0),
    array(-1, -1, -2),
    array(-1, +0, -1),
    array(+0, +1, +1),
    array(+0, -1, -1),
    array(+0, +0, +0),
));

test('subtraction', array(
    array(+1, +1, +0),
    array(+1, -1, +2),
    array(+1, +0, +1),
    array(-1, +1, -2),
    array(-1, -1, +0),
    array(-1, +0, -1),
    array(+0, +1, -1),
    array(+0, -1, +1),
    array(+0, +0, +0),
));

test('multiplication', array(
    array(+1, +1, +1),
    array(+1, -1, -1),
    array(+1, +0, +0),
    array(-1, +1, -1),
    array(-1, -1, +1),
    array(-1, +0, +0),
    array(+0, +1, +0),
    array(+0, -1, +0),
    array(+0, +0, +0),
));

test('division', array(
    array(+1, +1, +1),
    array(+1, -1, -1),
    array(+1, +0, +0),
    array(-1, +1, -1),
    array(-1, -1, +1),
    array(-1, +0, +0),
    array(+0, +1, +0),
    array(+0, -1, +0),
    array(+0, +0, +0),
));