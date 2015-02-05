<?php
require_once (__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password);

if($connection->connect_error){
    die("Error: " . $connection->connection_error);
}

$exist = $connection->select_db($database);

if(!$exist) {
    $query = $connection->query("CREATE DATABASE $database");
    
    if($query) {
        echo "Sucessfully created database: "  . $database;
    }
}

else {
    echo "Database already exists.";
}
$query = $connection->query("CREATE TABLE post ("
        ."id int(11)  NOT NULL  AUTO_INCREMENT,"
        ."title varchar(225) NOT NULL"
        ."post text NOT NULL,"
        . "PRIMARY KEY (ID)");

if($query){
    echo "Succesfully created table: post";
}

 $connection->close();