<?php
/**
 * This is a file with php code.
 *
 * @author Roland Golla <rolandgolla@gmail.com>
 */

namespace Demo\Validation;

require_once (__DIR__ . '/../vendor/autoload.php');

class BlogTest extends \PHPUnit_Framework_TestCase {
    protected $fixture;

    protected function setUp()
    {
        parent::setUp();
        $this->fixture = new Blog();
    }

    /**
     * @test
     */
    public function testGetBlogTitleById() {
        $title = $this->fixture->getTitleById(1);
        $this->assertEquals('My first post', $title);
    }

    /**
     * @test
     */
    public function testGetBlogTitleByIdWithNotExistingId() {
        $title = $this->fixture->getTitleById(10000);
        $this->assertFalse($title);
    }

    public function testGetBlogTitleByIdWithString() {
        $title = $this->fixture->getTitleById('testify');
        $this->assertFalse($title);
    }

    /**
     * @test
     */
    public function testGetBlogPostById() {
        $this->assertNotEmpty($this->fixture->getPostById(1));
    }
    

}