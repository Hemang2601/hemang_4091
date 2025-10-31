<?php

$cookie_name = "visitor_status";
$cookie_value = "returning";


if (!isset($_COOKIE[$cookie_name])) {

    setcookie($cookie_name, $cookie_value, time() + (30 * 24 * 60 * 60), "/");
    $message = "Welcome, new visitor!";
} else {
    $message = "Welcome back!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Check</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e0f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .box {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2><?php echo $message; ?></h2>
        <p>This message is based on your cookie status.</p>
    </div>
</body>
</html>
