<?php // PRODUCTION CODE
/**
 * From retro 2013-03-22:
 *   - Refactor early!
 *   - Commit between pairs!
 */

 /**
  * A function that executes our test plan.
  *
  * This function acts as our "middle-man" so we
  * can neatly test all cases for all of the data
  *
  * @param string | $name
  * @param array | $data
  */

function test($name, $data)
{
    foreach($data as $key => $value)
    {
        list($a, $b, $c) = $value;

        assert("{$name}({$a}, {$b}) == {$c}");

        echo "{$name}[$key] => {$a}, {$b}, {$c} \n";
    }
}

/**
  * A function that adds two numbers
  *
  * @param integer | $a
  * @param integer | $b
  * @return integer
  */

function addition($a, $b)
{
    return $a + $b;
}

/**
  * A function that subtracts two numbers
  *
  * @param integer | $a
  * @param integer | $b
  * @return integer
  */

function subtraction($a, $b)
{
    return $a - $b;
}

/**
  * A function that multiplies two numbers
  *
  * @param integer | $a
  * @param integer | $b
  * @return integer
  */

function multiplication($a, $b)
{
    return $a * $b;
}

/**
  * A function that divides two numbers
  * 
  * @param integer | $a
  * @param integer | $b
  * @return 
  */

function division($a, $b)
{
    if(!$b)
    {
        return 0;
    }

    return $a / $b;
}