<?php
/**
 * This is a file with php code.
 *
 * @package Rogoit
 * @author  Roland Golla <rolandgolla@gmail.com>
 */


namespace Demo\Validation;


class Blog
{

    protected $dbHost = 'localhost';
    protected $dbName = 'eh-phpunit';
    protected $dbUser = 'root';
    protected $dbPass = 'root';

    protected $dbConn;

    public function __construct($dbConn = null)
    {
        if($dbConn === null) {
            $connection = mysqli_connect(
                $this->dbHost,
                $this->dbUser,
                $this->dbPass,
                $this->dbName
            );

            if($connection === false) {
                throw new Exception('Can not connect to db');
            }else{
                $this->dbConn = $connection;
            }
        }
    }

    public function getTitleById($id) {
        $query = 'SELECT * FROM `posts` where `id` = ' . $id;
        $res = $this->dbConn->query($query);

        $return = false;
        if ($res->num_rows > 0) {
            $row = $res->fetch_assoc();
            $return = $row['title'];
        }
        return $return;
    }
}