<?php
$mysqli = new mysqli("localhost", "root", "", "employees");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

session_start();
?>
