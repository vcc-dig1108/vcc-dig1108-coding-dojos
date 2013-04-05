<?php // TEST CODE
/**
 * Retro reminders:
 *  - Refactor early!
 *  - Commit on GREEN!
 */
require '2013-04-05-code.php';

assert(hallway(1)  === '0');
assert(hallway(10) === '0000000000');
assert(hallway(11) === '00000000000');

$hallway = hallway(10);

assert($hallway === '0000000000');
assert(pass($hallway) === '1111111111');

$hallway = pass($hallway);

assert($hallway === '1111111111');

assert(pass($hallway) === '1010101010');






{
    $hallway = hallway(100);

    assert(strlen($hallway) === 100);
    assert(strstr($hallway, '1') === false);
}

echo 'Ran tests in ', basename(__FILE__), "\n", 'Remember to commit on GREEN!';