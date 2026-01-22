<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "demo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db_message = "✅ Connected successfully to <strong>$dbname</strong> database.";
} catch(PDOException $e) {
    $db_message = "❌ Connection failed: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database Connection Demo</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #e0f7fa, #f0f4f8);
            color: #2c3e50;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #34495e;
        }
        .card {
            background: #fff;
            padding: 25px 40px;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.15);
            display: inline-block;
            font-size: 1.1em;
            animation: fadeIn 1s ease-in-out;
        }
        strong {
            color: #16a085;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Database Connection Status</h2>
        <div class="card">
            <?php echo $db_message; ?>
        </div>
    </div>
</body>
</html>
