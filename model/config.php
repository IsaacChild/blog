<?php
require_once (__DIR__ . "/database.php");
session_start();
$path = "/blog/";

$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";

echo 'start';
if(!isset($_SESSION["connection"])) {
    echo 'connect';
     $connection = new Database($host, $username, $password, $database);
     $_SESSION["connection"] = $connection;
}