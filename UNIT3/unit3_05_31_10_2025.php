<?php
session_start();

$_SESSION["username"] = "Hemang Lakhadiya";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Creation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            color: #2c3e50;
            padding: 40px;
            text-align: center;
        }
        .message {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            display: inline-block;
        }
    </style>
</head>
<body>
    <h2>Session Created</h2>
    <div class="message">
        <?php
        echo "Session variable <strong>username</strong> is set!<br>";
        echo "Value: <strong>" . $_SESSION["username"] . "</strong>";
        ?>
    </div>
</body>
</html>
