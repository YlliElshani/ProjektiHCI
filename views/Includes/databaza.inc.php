<?php

$dbServerName;
$dbUsername;
$dbPassword;
$dbName;

$mysqli = new mysqli ('localhost','root','','hci');
$table = 'movieinfo';

class hci {

public function __construct () {

$this->dbServerName = "localhost";
$this->dbUsername = "root";
$this->dbPassword = "";
$this->dbName = "hci";

$conn = new mysqli($this->dbServerName, $this->dbUsername, $this->dbPassword, $this->dbName);


return $conn;







}

}

?>