<?php

$host = "localhost";
$dbname = "test_db";
$user = "root";
$pass = "";

// Connect to database
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Secure hash

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sss", $username, $email, $password);
        if ($stmt->execute()) {
            $success = "Registration successful!";
        } else {
            $error = "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $error = "Error preparing statement: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            text-align: center;
            padding: 50px;
        }
        .box {
            background: white;
            padding: 30px;
            border-radius: 8px;
            display: inline-block;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        input {
            margin: 10px;
            padding: 10px;
            width: 250px;
        }
        input[type="submit"] {
            background-color: #2980b9;
            color: white;
            border: none;
            cursor: pointer;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<h2>Registration Form</h2>
<form method="POST" class="box">
    <input type="text" name="username" placeholder="Username" required /><br>
    <input type="email" name="email" placeholder="Email" required /><br>
    <input type="password" name="password" placeholder="Password" required /><br>
    <input type="submit" value="Register" />
    <?php
        if (!empty($success)) echo "<p class='success'>$success</p>";
        if (!empty($error)) echo "<p class='error'>$error</p>";
    ?>
</form>

</body>
</html>
