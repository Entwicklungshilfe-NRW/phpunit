<?php
/**
 * This is a file with php code.
 *
 * @package Rogoit
 * @author  Roland Golla <rolandgolla@gmail.com>
 */


namespace Demo\Validation;


class Calculator
{
    public function add($a, $b) {
        if(!is_numeric($a) || !is_numeric($b)) {
            throw new \Exception('Not numeric');

        }
        return $a + $b;
    }
}