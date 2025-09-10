<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Plugin System with Function Existence Check</h2>";

function pluginA() {
    return "Plugin A executed successfully!";
}

function pluginB() {
    return "Plugin B executed successfully!";
}

$plugins_to_run = ['pluginA', 'pluginB', 'pluginC']; 

$results = [];

foreach ($plugins_to_run as $plugin) {
    if (function_exists($plugin)) {
        $results[] = $plugin() ;
    } else {
        $results[] = "Function '$plugin' does not exist.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Plugin System</title>
<style>
    body {
        font-family: Arial, sans-serif;
        max-width: 600px;
        margin: 40px auto;
        background: #f9f9f9;
        color: #333;
        padding: 20px;
    }
    h2 {
        text-align: center;
        color: #2c3e50;
    }
    ul {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        list-style-type: none;
    }
    li {
        margin: 12px 0;
        font-weight: 600;
        color: #5a67d8;
    }
</style>
</head>
<body>

<ul>
    <?php foreach ($results as $result): ?>
        <li><?= htmlspecialchars($result) ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>
