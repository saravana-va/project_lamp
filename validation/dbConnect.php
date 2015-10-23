<?php
    class dbConnect {
    protected $dbHost = "127.0.0.1";
    private $userName = "root";
    private $mysqlPassword = "aspire@123";
    private $dbName = "sql_project";
    function __construct() {
    $link = mysqli_connect("$this->dbHost","$this->userName","$this->mysqlPassword","$this->dbName");
        if (!$link) {
            echo "Error: Unable to connect to MySQL.";
            exit;
        }
        else {
            echo "connected";
        }
    }
}

?>

