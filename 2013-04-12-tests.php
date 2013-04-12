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
assert(strlen(createHall(10)) === 10);

// test: hallway match expected: '0000000000'
assert(createHall(10) === '0000000000');

// call: pass1() on hallway
$hallway = createHall(10);
assert(pass1($hallway) === '1111111111');

// test: hallway match expected: '1111111111'
$hallway = '1111111111';
assert($hallway === '1111111111');


// call: pass2() on hallway
assert(pass2($hallway) === '1010101010');
// test: hallway match expected: '1010101010'
$hallway = '1010101010';
assert($hallway === '1010101010');
// call: pass3() on hallway
// test: hallway match expected: '1000111000'
// call: pass4() on hallway

// test: can we make a hallway with 100 doors?

echo __FILE__;