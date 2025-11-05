<?php
include('config.php');


if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

$id = $mysqli->real_escape_string($_GET['id']);
$mysqli->query("DELETE FROM employees WHERE id=$id");

header("Location: dashboard.php");
exit();
?>
