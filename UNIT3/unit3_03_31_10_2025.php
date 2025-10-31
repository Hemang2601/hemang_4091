<?php
$cookie_name = "HEMANG_LAKHADIYA";
$cookie_value = "RAJKOT";
$expiry_time = time() + (86400 * 7); 


if (!isset($_COOKIE[$cookie_name])) {
   
    setcookie($cookie_name, $cookie_value, $expiry_time, "/");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Demo - One Page</title>
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
    <div class="message">
        <?php
        echo "Cookie <strong>$cookie_name</strong> is set!<br>";
        echo "Value: <strong>" . $_COOKIE[$cookie_name] . "</strong>";
        ?>
    </div>
</body>
</html>
