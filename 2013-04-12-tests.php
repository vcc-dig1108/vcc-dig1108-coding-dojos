<?php // TEST FILE
require '2013-04-12-code.php';
/**
 * A hallway has 100 closed doors.
 * Take a walk down the hallway. Stop at every door and open it.
 * Take a walk down the hallway. Stop at every _other_ door and close it.
 * Take a walk down the hallway. Stop at every _third_ door.
 *      If open, close it. If closed, open it.
 * Take a walk down the hallway. Stop at every _fourth_ door.
 *      If open, close it. If closed, open it.
 * Repeat this pattern 100 times.
 * What is the state of the hallway?
 */

// test: can we make a hallway with 10 doors?
$hallway = createHall(10);
assert(strlen($hallway) === 10);

// test: hallway match expected: '0000000000'
assert($hallway === '0000000000');

// call: pass1() on hallway
$hallway = pass1($hallway);

// test: hallway match expected: '1111111111'
assert($hallway === '1111111111');

// call: pass2() on hallway
$hallway = pass2($hallway);

// test: hallway match expected: '1010101010'
assert($hallway === '1010101010');

// call: pass3() on hallway
$hallway = pass3($hallway);

// test: hallway match expected: '1000111000'
assert($hallway === '1000111000');

// call: pass4() on hallway
//$hallway = pass4($hallway);

// test: can we make a hallway with 100 doors?

echo __FILE__;