<?php
echo "<h2 style='text-align:center; font-family: Arial; margin-top:20px; color: #333;'>Server Request Logger</h2>";

$ip_address = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
$request_method = $_SERVER['REQUEST_METHOD'] ?? 'Unknown';
$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Not available';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Request Info</title>
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
            width: 400px;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
        }
        p {
            margin: 10px 0;
            font-size: 1.1em;
        }
        strong {
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <div class="box">
        <h3>Request Details</h3>
        <p>IP Address: <strong><?= htmlspecialchars($ip_address) ?></strong></p>
        <p>Request Method: <strong><?= htmlspecialchars($request_method) ?></strong></p>
        <p>User Agent: <strong><?= htmlspecialchars($user_agent) ?></strong></p>
    </div>
</body>
</html>
