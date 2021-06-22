<?php

class Solution
{

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
    public function twoSum($nums, $target)
    {
        $arr = [];
        foreach ($nums as $k => $n) {
            if (isset($arr[$target-$n])) {
                return [$arr[$target-$n],$k];
            }
            $arr[$n] = $k;
        }
    }
}
