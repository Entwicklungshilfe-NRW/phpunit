<?php
/**
 * This is a file with php code.
 *
 * @package Entwicklungshilfe
 * @author  Roland Golla <rolandgolla@gmail.com>
 */

namespace Demo\Validation;

require_once (__DIR__ . '/../vendor/autoload.php');

class LeapYearTest extends \PHPUnit_Framework_TestCase {

    /**
     * @dataProvider provideNonLeapYears
     */
    public function testLeapYearValidateExpectingFalse($value) {
        $validation = new LeapYear();
        $this->assertFalse($validation->validate($value));
    }

    /**
     * @dataProvider provideLeapYears
     */
    public function testLeapYearValidateExpectingTrue($value) {
        $validation = new LeapYear();
        $this->assertTrue($validation->validate($value), "Msg:" . $value);
    }

    public static function provideNonLeapYears() {
        return [
            "2015" => [2015],
            "1000" => [ 1000 ],
            //"2016" => [ 2016 ],
        ];
    }

    public static function provideLeapYears() {
        return [
            [2016],
            //[2017]
        ];
    }
}