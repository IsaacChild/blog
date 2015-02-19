<?php
require_once (__DIR__ . "/../model/config.php");

$email = filter__input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING)