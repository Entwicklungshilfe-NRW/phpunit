<?php
/**
 * This is a file with php code.
 *
 * @package Entwicklungshilfe
 * @author  Roland Golla <rolandgolla@gmail.com>
 */

namespace Demo\Validation;


class LeapYear {
    public function validate($year) {
        $result = ($year % 4) == 0;
        if ($year % 100 == 0) {
            $result = ($year % 400 == 0);
        }

        return $result;
    }
}