<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "demo";

echo "<h3>MySQLi Table Creation</h3>";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("MySQLi Connection failed: " . $conn->connect_error);
}

$sql_mysqli = "CREATE TABLE IF NOT EXISTS students_mysqli (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) UNIQUE,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql_mysqli) === TRUE) {
    echo "✅ Table 'students_mysqli' created successfully using MySQLi.<br>";
} else {
    echo "❌ Error creating table with MySQLi: " . $conn->error . "<br>";
}

$conn->close();


// ---------- PDO Connection & Table Creation ----------
echo "<h3>PDO Table Creation</h3>";

try {
    $conn_pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL to create table
    $sql_pdo = "CREATE TABLE IF NOT EXISTS students_pdo (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(50) UNIQUE,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    $conn_pdo->exec($sql_pdo);
    echo "✅ Table 'students_pdo' created successfully using PDO.<br>";
} catch(PDOException $e) {
    echo "❌ Error creating table with PDO: " . $e->getMessage();
}

$conn_pdo = null;
?>
