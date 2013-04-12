<?php // PROD FILE
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

/**
 * Function "hallway()" returns a new representation of a Hallway
 *
 * @param integer $size number of doors
 * @return string of length $size of '0'
 */
function createHall($size)
{
    return '0000000000';


}

/**
 * Function "pass1()" walks down a $hallway and applies the rules for the first pass.
 *
 * @param string $hallway represented by '1' and '0'
 * @return string state of $hallway after pass 1
 */

/**
 * Function "pass2()" walks down a $hallway and applies the rules for the second pass.
 *
 * @param string $hallway represented by '1' and '0'
 * @return string state of $hallway after pass 2
 */

echo __FILE__;