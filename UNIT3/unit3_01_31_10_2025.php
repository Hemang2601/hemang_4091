<?php

echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Create Cookie</h2>";

$cookie_name = "HEMANG_LAKHADIYA";
$cookie_value = "RAJKOT";
$expiry_time = time() + (86400 * 7); 

setcookie($cookie_name, $cookie_value, $expiry_time, "/");

// HTML output
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Cookie Creation Demo</title>
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
    <div class='message'>";
    
if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie <strong>$cookie_name</strong> is being set. Please refresh the page to see it.";
} else {
    echo "Cookie <strong>$cookie_name</strong> is already set!<br>";
    echo "Value: <strong>" . $_COOKIE[$cookie_name] . "</strong>";
}

echo "</div>
</body>
</html>";
?>
