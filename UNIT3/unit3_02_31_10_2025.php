<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Read Cookie</h2>";

$cookie_name = "HEMANG_LAKHADIYA";

// HTML output
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Read Cookie Demo</title>
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

if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie <strong>$cookie_name</strong> is available!<br>";
    echo "Value: <strong>" . $_COOKIE[$cookie_name] . "</strong>";
} else {
    echo "Cookie <strong>$cookie_name</strong> is not set or has expired.";
}

echo "</div>
</body>
</html>";
?>
