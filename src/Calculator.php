<?php
/**
 * This is a file with php code.
 *
 * @package WMDB
 * @author  Roland Golla <roland.golla@wmdb.de>
 */

namespace Demo\Validation;


class Calculator
{
    public function add($a, $b) {
        if(!is_int($a) || !is_int($b)) {
            throw new \InvalidArgumentException('Strings not allowed');
        }
        return $a + $b;
    }
}