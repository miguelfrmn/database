<?php

include dirname(__FILE__) . '/Database.php';

class DatabaseTest extends PHPUnit_Framework_TestCase {

    private $testDbCredentials = array(
        'host' => '127.0.0.1',
        'user' => 'root',
        'password' => '',
        'name' => 'database_test'
    );

    public function setUp() {
       
    }

    public function tearDown() {

    }

    /**
     * @expectedException     DatabaseParametersException
     */
    public function testConstructWithNoParams() {
        $db = Database::getInstance();
    }

    public function testConnection() {
        $db = Database::getInstance($this->testDbCredentials);
        $this->assertTrue(!empty($db->conn));
    }



}
