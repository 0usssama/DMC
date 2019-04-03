<?php
//MySQL connection details.
$host = 'localhost';
$user = 'root';
$pass = 'LinuxMate2019:D';
$database = 'dmc';

 
//Custom PDO options.
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);

//Connect to MySQL and instantiate our PDO object.
$pdo = new PDO("mysql:host=$host;dbname=$database", $user, $pass, $options);

?>