<?php
session_start();

$valid_username = "hemang";
$valid_password = "1234";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;
        $message = "Login successful. Welcome, $username!";
    } else {
        $_SESSION["logged_in"] = false;
        $message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Validation</title>
    <style>
        body {
            font-family: Arial;
            background: #f0f0f0;
            text-align: center;
            padding-top: 50px;
        }
        .box {
            background: white;
            padding: 20px;
            margin: auto;
            width: 300px;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
        }
        input {
            padding: 8px;
            margin: 10px 0;
            width: 90%;
        }
        button {
            padding: 10px 20px;
            background: #5a67d8;
            color: white;
            border: none;
            border-radius: 4px;
        }
        .message {
            margin-top: 15px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Login</h2>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required /><br>
            <input type="password" name="password" placeholder="Password" required /><br>
            <button type="submit">Login</button>
        </form>

        <?php if (isset($message)): ?>
            <div class="message"><?= htmlspecialchars($message) ?></div>
        <?php endif; ?>

        <?php if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]): ?>
            <p>You are logged in as <strong><?= htmlspecialchars($_SESSION["username"]) ?></strong>.</p>
        <?php endif; ?>
    </div>
</body>
</html>
