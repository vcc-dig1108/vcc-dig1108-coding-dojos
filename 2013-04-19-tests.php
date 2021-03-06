<?php // TEST CODE
/**
 * Retrospective:
 *
 * What did we do well?
 *  - baby steps
 *  - well-defined test plan
 *
 * What should we improve?
 *  - PRACTICE ALREADY
 *  - READ THE MANUAL
 *  - UNDERSTAND BEFORE TYPING
 *  - REVIEW PREVIOUS DOJOS
 *
 * Did we meet our goals?
 *  - account for NULL cases
 *  - fear not the typing
 *  - str_split(), implode(), strlen()
 */

require '2013-04-19-code.php';

// test: hallway(10) == '0000000000'

assert(hallway(10) == '0000000000');
assert(hallway(0)  == '');
assert(hallway(2)  == '00');




// test: porter('1') == '0'
assert(porter('1') == '0');
// test: porter('0') == '1'
assert(porter('0') == '1');
// test: firstPass(hallway(10)) == '1111111111'
assert(firstPass('0000000000') == '1111111111');
assert(firstPass('00')  == '11');

// test: secondPass(hallway(10)) == '0101010101'
assert(secondPass(hallway(10)) == '0101010101');
assert(secondPass(hallway(2)) == '01');
assert(secondPass(hallway(3)) == '010');
assert(secondPass('111') == '101');

// test: thirdPass(hallway(10)) == '0010010010'

// Integration:
// test: secondPass(firstPass(hallway(10))) == '1010101010'
// test: thirdPass(secondPass(firstPass(hallway(10)))) == '1000111000'

// test: anyPass(hallway(10), 1) == firstPass(hallway($N))
// test: anyPass(hallway(10), 2) == secondPass(hallway($N))
// test: anyPass(hallway(10), 3) == thirdPass(hallway($N))
// test: anyPass(hallway(10), 5) == '0000100001'

// Integration:
// test: anyPass(anyPass(hallway(10), 1), 2) == '1010101010'
// test: anyPass(anyPass(anyPass(hallway(10), 1), 2), 3) == '0111000111'
// test: anyPass(anyPass(anyPass(anyPass(hallway(10), 1), 2), 3), 4) == '1001111100'

// test: solution(10) == '1001000010'
