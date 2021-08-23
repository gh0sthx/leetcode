<?php

/*
 * @lc app=leetcode.cn id=3 lang=php
 *
 * [3] 无重复字符的最长子串
 */

// @lc code=start 位图
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $len = strlen($s);
        if($len == 0) return 0;
        $bitSet = [];
        $result = 0;
        $left = 0;
        $right = 0;

        while($left < $len) {
            if ($bitSet[$s[$right]]) {
                $bitSet[$s[$left]] = false;
                $left++;
            }  else {
                $bitSet[$s[$right]] = true;
                $right++;
            }
            if ($result < $right - $left) {
                $result = $right - $left;
            }
            if ($left + $result >= $len || $right >= $len) {
                break;
            }
        }
        return $result;
    }
}
// @lc code=end
