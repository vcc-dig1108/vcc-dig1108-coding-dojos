<?php // TEST FILE
require '2013-04-12-code.php';
/**
 * Retrospective:
 *
 * What did we do well?
 *   - Better test plan
 *   - Refactored eventually
 *
 * What should we improve?
 *   - Refactor earlier, stay DRY (Don't Repeat Yourself)
 *   - Better function names: pass1() -> doPass1() ??
 *   - Improve representative data set:
 *     - test each pass with 0000000000 AND 1111111111
 *   - Follow the spec
 *
 * Did we meet our goals?
 *   - no.
 *
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