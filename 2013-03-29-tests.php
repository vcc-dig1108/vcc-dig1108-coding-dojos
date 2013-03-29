<?php // TEST CODE
/**
 * From retro 2013-03-22:
 *   - Refactor early!
 *   - Commit between pairs!
 */

require '2013-03-29-code.php';

/**
 * op |  x  |  y  |  z
 * =====================
 *  +  |  +1  | +1  | +2
 *  +  |  +1  | -1  | +0
 *  +  |  +1  | +0  | +1
 *  +  |  +0  | +1  | +1
 *  +  |  +0  | -1  | +0
 *  +  |  +0  | +0  | +0
 *  +  |  -1  | +1  | +0
 *  +  |  -1  | -1  | -2
 *  +  |  -1  | +0  | -1
 */


 assert(add(+1, +1) == +2);
 assert(add(+1, -1) == +0);


