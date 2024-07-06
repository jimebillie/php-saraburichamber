<?php
class connect
{

    /**
     * Data for connect DB.
     */
    private $servername = "localhost"; //-> *Chenge
    private $username = "root"; //-> *Chenge
    private $password = ""; //-> *Chenge
    private $db_name = "thanikpr_saraburichamber"; //-> *Chenge
    /**
     * func connect
     */
    public $conn = null;

    public function __construct()
    {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->db_name;charset=utf8", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            date_default_timezone_set('Asia/Bangkok');
            $this->conn = $conn; //-> Push connect to func $conn
        } catch (PDOException $e) {
            // Error
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
