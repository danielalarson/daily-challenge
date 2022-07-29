<?php
/**
 * Given a list of numbers and a number k, return whether any two numbers from the list add up to k.
 * For example, given [10, 15, 3, 7] and k of 17, return true since 10 + 7 is 17.
 * Bonus: Can you do this in one pass?
 */

$arr = [10, 15, 12, 7];
$val = 17;

function findTwoSumDualFor(array $array, $testValue)
{
    $array_member_count = count($array);
    if(!is_numeric($testValue))
        return 'testValue must be numeric';

    for($i = 0; $i < $array_member_count; $i++) {
        for($j = $i + 1; $j < $array_member_count; $j++) {
            $firstIndex = $array[$i];
            $secondIndex = $array[$j];

            if($firstIndex + $secondIndex === $testValue) {
                return true;
                break 2;
            }
        }
    }

    return false;
}

var_dump(findTwoSumDualFor($arr, $val));