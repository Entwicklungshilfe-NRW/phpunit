<?php
/**
 * This is a file with php code.
 *
 * @package Rogoit
 * @author  Roland Golla <rolandgolla@gmail.com>
 */


namespace Demo\Validation;

require_once (__DIR__ . '/../vendor/autoload.php');

class blogTest extends \PHPUnit_Framework_TestCase
{

    protected $fixture;

    public function setUp()
    {
        parent::setUp();

        $this->fixture = new Blog();
    }

    public function testGetTitleByIdWithValidId() {
        $this->assertEquals('Welcome to my blog', $this->fixture->getTitleById(1));
    }
}