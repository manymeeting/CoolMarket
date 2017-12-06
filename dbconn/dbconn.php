<?php
// Extend this class to re-use db connection
class DbConn
{
    /*
    sample dbconf.php
    //DATABASE CONNECTION VARIABLES
    $host = "localhost"; // Host name
    $username = "user"; // Mysql username
    $password = "password"; // Mysql password
    $db_name = "login"; // Database name

    //DO NOT CHANGE BELOW THIS LINE UNLESS YOU CHANGE THE NAMES OF THE MEMBERS AND LOGINATTEMPTS TABLES

    $tbl_prefix = ""; //***PLANNED FEATURE, LEAVE VALUE BLANK FOR NOW*** Prefix for all database tables
    $tbl_members = $tbl_prefix."members";
    $tbl_attempts = $tbl_prefix."loginAttempts";
    */
    
    public $conn;
    public function __construct()
    {
        require dirname(__FILE__). '/' . 'dbconf.php';
        $this->host = $host; // Host name
        $this->username = $username; // Mysql username
        $this->password = $password; // Mysql password
        $this->db_name = $db_name; // Database name
        $this->tbl_prefix = $tbl_prefix; // Prefix for all database tables
        $this->tbl_members = $tbl_members;
        $this->tbl_products = $tbl_products;
        $this->tbl_reviews = $tbl_reviews;

        try {
			// Connect to server and select database.
			$this->conn = new PDO('mysql:host=' . $host . ';dbname=' . $db_name . ';charset=utf8', $username, $password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (\Exception $e) {
			die('Database connection error');
		}
    }
}

?>