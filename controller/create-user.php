<?php
require_once (__DIR__ . "/../model/config.php");

$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

$salt = "$$$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

echo $salt;

$hashedPassword = crypt($password, $salt);

echo $hashedPassword;

$query = $_SESSION["connection"]->query("INSERT INTO users SET "
         . "email = '$email',"
         . "username = '$username',"
         . "password = '$hashedPassword',"
         . "salt = '$salt'");

if($query){
    echo "Successfuly created useer: $username";
}
else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
    
}
