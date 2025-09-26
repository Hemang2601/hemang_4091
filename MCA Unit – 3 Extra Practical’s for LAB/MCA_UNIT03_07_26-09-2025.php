<?php
echo "<h2 style='text-align:center; font-family: Arial; margin-top:20px; color: #333;'>Global Counter with \$GLOBALS</h2>";

$GLOBALS['i'] = 0;
function incrementCounter() {
    $GLOBALS['i']++;
}

incrementCounter();
incrementCounter();
incrementCounter();
incrementCounter();
incrementCounter();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Global Counter</title>
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
        p {
            font-size: 1.2em;
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <div class="box">
        <h3>Counter Value</h3>
        <p>The global counter is now: <strong><?= $GLOBALS['i'] ?></strong></p>
    </div>
</body>
</html>
