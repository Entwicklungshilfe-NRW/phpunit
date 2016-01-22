<?php
/**
 * This is a file with php code.
 *
 * @package WMDB
 * @author  Roland Golla <roland.golla@wmdb.de>
 */

/**
 * This is a file with php code.
 *
 * @package Entwicklungshilfe
 * @author  Roland Golla <rolandgolla@gmail.com>
 */

namespace Demo\Validation;

require_once (__DIR__ . '/../vendor/autoload.php');

class CalculatorTest extends \PHPUnit_Framework_TestCase {
    public function testAdd() {
        $calc = new Calculator();
        $this->assertEquals(8, $calc->add(3,5));
        $this->assertEquals(9, $calc->add(1,8));
    }

    /**
     * @expectedException     InvalidArgumentException
     */
    public function testStringsInAddThrowsAnException() {
        $calc = new Calculator();
        $calc->add('3','5');
    }
}