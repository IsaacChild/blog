<?php

require_once(__DIR__ . "/../model/database.php");

$connection =  new mysqli($host, $username, $password, $database) ;

 $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
 $post = filter_input(INPUT_POST,  "post", FILTER_SANITIZE_STRING);
 
 echo "<p>Title: $title</p>";
 echo "<p>Post: $post</p>";
 
 $query = $connection->query("INSERT INTO posts");
 
 $connection->close();