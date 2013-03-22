<?php
$inputs = array(
    array( +1, +1 ),
    array( +1, -1 ),
    array( +1, +0 ),
    array( +0, +1 ),
    array( +0, -1 ),
    array( +0, +0 ),
    array( -1, +1 ),
    array( -1, -1 ),
    array( -1, +0 ),
);

/**
 * op | one | two | value
 * ===+=====+=====+======
 * +  | +1  | +1  | +2
 * +  | +1  | -1  | +0
 * +  | +1  | +0  | +1
 * +  | +0  | +1  | +1
 * +  | +0  | -1  | -1
 * +  | +0  | +0  | +0
 * +  | -1  | +1  | +0
 * +  | -1  | -1  | -2
 * +  | -1  | +0  | -1
 */
function add($value1, $value2)
{
    return $value1 + $value2;
}
{
    $outputs = array(
        +2,
        +0,
        +1,
        +1,
        -1,
        +0,
        +0,
        -2,
        -1,
    );
    
    for ($i = 0; $i < 9; $i++)
    {
        assert(add($inputs[$i][0], $inputs[$i][1]) == $outputs[$i]);
    }


    $i = 0;
    while ( $i < 9 )
    {
        assert(add($inputs[$i][0], $inputs[$i][1]) == $outputs[$i]);
        $i++;
    }
    
    while ( $input = current($inputs) and $output = current($outputs) )
    {
        assert(add($input[0], $input[1]) == $output);
        next($inputs); next($outputs);
    }
    
    foreach ( $inputs as $index => $input )
    {
        assert(add($input[0], $input[1]) == @$outputs[$index]);
    }
}

/**
 * op | one | two | value
 * ===+=====+=====+======
 * -  | +1  | +1  | +0
 * -  | +1  | -1  | +2
 * -  | +1  | +0  | +1
 * -  | +0  | +1  | -1
 * -  | +0  | -1  | +1
 * -  | +0  | +0  | +0
 * -  | -1  | +1  | -2
 * -  | -1  | -1  |  0
 * -  | -1  | +0  | -1
 */
function minus ( $a, $b )
{
    return $a - $b;
}
{
    assert(minus(+1, +1) == +0);
    assert(minus(+1, -1) == +2);
    assert(minus(+1, +0) == +1);
    assert(minus(+0, +1) == -1);
    assert(minus(+0, -1) == +1);
    assert(minus(+0, +0) == +0);
    assert(minus(-1, +1) == -2);
    assert(minus(-1, -1) == +0);
    assert(minus(-1, +0) == -1);
}

/**
 * op | one | two | value
 * ===+=====+=====+======
 * x  | +1  | +1  | +1
 * x  | +1  | -1  | -1
 * x  | +1  | +0  | +0
 * x  | +0  | +1  | +0
 * x  | +0  | -1  | +0
 * x  | +0  | +0  | +0
 * x  | -1  | +1  | -1
 * x  | -1  | -1  | +1
 * x  | -1  | +0  | +0
 */
function multiply( $a, $b)
{
    return $a * $b;
}
{
    assert(multiply(+1,+1) == +1);
    assert(multiply(+1,-1) == -1);
    assert(multiply(+1,+0) == +0);
    assert(multiply(+0,+1) == +0);
    assert(multiply(+0,-1) == +0);
    assert(multiply(+0,+0) == +0);
    assert(multiply(-1,+1) == -1);
    assert(multiply(-1,-1) == +1);
    assert(multiply(-1,+0) == +0);
}
