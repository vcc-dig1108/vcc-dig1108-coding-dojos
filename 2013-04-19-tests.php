<?php // TEST CODE

require '2013-04-19-code.php';

// test: hallway(10) == '0000000000'

assert(hallway(10) == '0000000000');

// test: porter('1') == '0'
// test: porter('0') == '1'

// test: firstPass(hallway(10)) == '1111111111'

// test: secondPass(hallway(10)) == '0101010101'

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
