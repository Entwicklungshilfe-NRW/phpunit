<?php
/**
 * This is a file with php code.
 *
 * @package Rogoit
 * @author  Roland Golla <rolandgolla@gmail.com>
 */


namespace Demo\Validation;


class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd() {
        $calc = new Calculator();
        $this->assertEquals(7, $calc->add(5,2));
        $this->assertEquals(8, $calc->add(5,3));
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessageRegExp #numeric.*#
     */
    public function testAddWithString() {
        $calc = new Calculator();
        $this->assertTrue($calc->add('testify',3));
    }

    public function testAddNumberAsString() {
        $calc = new Calculator();
        $this->assertEquals(8, $calc->add('5',3));
    }

    public function testAddNegative() {
        $calc = new Calculator();
        $this->assertEquals(8, $calc->add(11,-3));
    }

    public function testAddFloat() {
        $calc = new Calculator();
        $this->assertEquals(7.5, $calc->add(2.5, 5));
        $this->assertEquals(7.5, $calc->add('2,5', 5));
    }
}