<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    public function addTwoNumbers($l1, $l2)
    {
        $head = new ListNode();
        $n1 = 0;
        $n2 =0;
        $carry=0;
        $current = $head;
        while (($l1 != null) || ($l2 != null) || ((int)$carry != 0)) {
            if (empty($l1)) {
                $n1 = 0;
            } else {
                $n1 = $l1->val;
                $l1 = $l1->next;
            }
            if (empty($l2)) {
                $n2 = 0;
            } else {
                $n2 = $l2->val;
                $l2 = $l2->next;
            }
            $current->next->val = ($n1+$n2+$carry)%10;
            $current = $current->next;
            $carry = ($n1+$n2+$carry)/10;
        }
        return $head->next;
    }
}
