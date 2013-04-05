<?php // TEST CODE
/**
 * Retro reminders:
 *  - Refactor early!
 *  - Commit on GREEN!
 */
require '2013-04-05-code.php';

assert(hallway(10) === '0000000000');
assert(hallway(11) === '00000000000');

$hallway = hallway(10);

assert($hallway === '0000000000');

echo 'Ran tests in ', basename(__FILE__), "\n", 'Remember to commit on GREEN!';