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

    protected $dbHost = 'localhost';
    protected $dbName = 'eh-phpunit';
    protected $dbUser = 'root';
    protected $dbPass = 'root';

    protected $fixture;

    public function setUp()
    {
        //parent::setUp();
        //$conn = $this->getConnection();
        $this->fixture = new Blog();
    }

    ///**
    // * @return PHPUnit_Extensions_Database_DB_IDatabaseConnection
    // */
    //public function getConnection()
    //{
        //$pdo = new PDO('sqlite::memory:');
        //return $this->createDefaultDBConnection($pdo, ':memory:');
        //$connection = mysqli_connect(
        //    $this->dbHost,
        //    $this->dbUser,
        //    $this->dbPass,
        //    $this->dbName
        //);

        //return $this->createDefaultDBConnection($connection, ':mysql:');
    //}

    ///**
    // * @return PHPUnit_Extensions_Database_DataSet_IDataSet
    // */
    //public function getDataSet()
    //{
    //    return $this->createFlatXMLDataSet(dirname(__FILE__).'/_files/eh-phpunit.xml');
    //}

    public function testGetTitleByIdWithValidId() {
        $this->assertEquals('Welcome to my blog', $this->fixture->getTitleById(1));
    }
}