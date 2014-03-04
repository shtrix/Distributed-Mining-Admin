<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-03-03 at 16:06:14.
 */
class DatabaseTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Database
     */
    protected $db;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $db_info = Utility::readDbInfo();
        $this->db = new Database($db_info[0],$db_info[1],$db_info[2],$db_info[3]);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() { 
        $this->db = null;
        
    }

    /**
     * @covers Database::execQuery
     * @todo   Implement testExecQuery().
     */
    public function testExecQuery() {
        $query = "INSERT INTO user VALUES(NULL, 'test_user', 'password', 0)";
        $this->db->execUpdate($query);
        $query = "SELECT * FROM user WHERE username = 'test_user'";
        $result = $this->db->execQuery($query);
        $this->assertEquals('test_user', $result['username']);
        $query = "DELETE FROM user WHERE username = 'test_user'";
        $this->db->execUpdate($query);

    }


}
