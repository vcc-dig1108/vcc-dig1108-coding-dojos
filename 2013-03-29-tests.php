<?php // TEST CODE
/**
 * From retro 2013-03-22:
 *   - Refactor early!
 *   - Commit between pairs!
 */

require '2013-03-29-code.php';

test("addition", $data = array(
    "1" => array(+1, +1, +2),
    "2" => array(+1, -1, +0),
    "3" => array(+1, +0, +1),
    "4" => array(+0, +1, +1),
    "5" => array(+0, -1, -1),
    "6" => array(+0, +0, +0),
    "7" => array(-1, +1, +0),
    "8" => array(-1, -1, -2),
    "9" => array(-1, +0, -1),
));

test("subtraction", $data = array(
    "1" => array(+1, +1, +0),
    "2" => array(+1, -1, +2),
    "3" => array(+1, +0, +1),
    "4" => array(+0, +1, -1),
    "5" => array(+0, -1, +1),
    "6" => array(+0, +0, +0),
    "7" => array(-1, +1, -2),
    "8" => array(-1, -1, +0),
    "9" => array(-1, +0, -1),
));

test("multiplication", $data = array(
    "1" => array(+1, +1, +1),
    "2" => array(+1, -1, -1),
    "3" => array(+1, +0, +0),
    "4" => array(+0, +1, +0),
    "5" => array(+0, -1, +0),
    "6" => array(+0, +0, +0),
    "7" => array(-1, +1, -1),
    "8" => array(-1, -1, +1),
    "9" => array(-1, +0, +0),
));

test("division", $data = array(
    "1" => array(+1, +1, +1),
    "2" => array(+1, -1, -1),
    "3" => array(+1, +0, +0),
    "4" => array(+0, +1, +0),
    "5" => array(+0, -1, +0),
    "6" => array(+0, +0, +0),
    "7" => array(-1, +1, -1),
    "8" => array(-1, -1, +1),
    "9" => array(-1, +0, +0),
));