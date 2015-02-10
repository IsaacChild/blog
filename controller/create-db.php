<?php
require_once (__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password);

if($connection->connect_error){
    die("<p>Error: " . $connection->connection_error . "</p>");
}

$exist = $connection->select_db($database);

if(!$exist) {
    $query = $connection->query("CREATE DATABASE $database");
    
    if($query) {
        echo "<p>Sucessfully created database: "  . $database . "</p>";
    }
}

else {
    echo "<p>Database already exists.</p>";
}
$query = $connection->query("CREATE TABLE posts ("
        ."id int(11)  NOT NULL  AUTO_INCREMENT,"
        ."title varchar(225) NOT NULL,"
        ."post text NOT NULL,"
        . "PRIMARY KEY (id))");

if($query){
    echo "<p>Succesfully created table: post</p>";
}
else{
    echo"<p>$connection->error</p>";
}

 $connection->close();