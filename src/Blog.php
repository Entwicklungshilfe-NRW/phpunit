<?php
/**
 * This is a file with php code.
 *
 * @author Roland Golla <rolandgolla@gmail.com>
 */

namespace Demo\Validation;


class Blog
{
    protected $db;

    /**
     * Blog constructor.
     * @param $db
     */
    public function __construct()
    {
        $mysqli = new \mysqli("localhost", "root", "root", "Blog");
        $this->db = $mysqli;
    }


    public function getTitleById($id) {
        $title = false;
        
        $sql = "SELECT * FROM post WHERE id = " . (int) $id;
        $user = $this->db->query($sql);
        if(($row = $user->fetch_assoc()) != false) {
            if(!empty($row)) {
                $title = $row['title'];
            }
        }
        return $title;
    }
    
    public function getPostById($id) {
        $post = '';

        $sql = 'SELECT * FROM post WHERE id = '. $id;
        $res = $this->db->query($sql);
        if(($row = $res->fetch_assoc()) != false) {
            if(!empty($row)) {
                $post = $row['post'];
            }
        }
        return $post;
    }
    
}