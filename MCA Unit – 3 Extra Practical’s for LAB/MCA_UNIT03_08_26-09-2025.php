<?php
echo "<h2 style='text-align:center; font-family: Arial; margin-top:20px; color: #2c3e50;'>Hemang Mann's Environment-Based DB Setup</h2>";

// Simulated environment configurations
$db_configs = [
    'development' => [
        'host' => 'localhost',
        'user' => 'hemang_dev',
        'password' => 'dev123',
        'database' => 'hemang_dev_db'
    ],
    'testing' => [
        'host' => 'localhost',
        'user' => 'hemang_test',
        'password' => 'test123',
        'database' => 'hemang_test_db'
    ],
    'production' => [
        'host' => 'prod-db-server',
        'user' => 'hemang_prod',
        'password' => 'prod123',
        'database' => 'hemang_prod_db'
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hemang's Config Switcher</title>
    <style>
        body {
            font-family: Arial;
            background: #eaf0f6;
            text-align: center;
            padding-top: 50px;
        }
        .box {
            background: white;
            padding: 25px;
            margin: auto;
            width: 450px;
            border-radius: 10px;
            box-shadow: 0 0 12px #aaa;
        }
        select, button {
            padding: 10px;
            margin: 10px 0;
            width: 80%;
            font-size: 1em;
        }
        p {
            font-size: 1.1em;
            margin: 8px 0;
        }
        strong {
            color: #2c3e50;
        }
    </style>
    <script>
        const configs = {
            development: {
                host: "localhost",
                user: "hemang_dev",
                password: "dev123",
                database: "hemang_dev_db"
            },
            testing: {
                host: "localhost",
                user: "hemang_test",
                password: "test123",
                database: "hemang_test_db"
            },
            production: {
                host: "prod-db-server",
                user: "hemang_prod",
                password: "prod123",
                database: "hemang_prod_db"
            }
        };

        function updateConfig() {
            const env = document.getElementById("envSelect").value;
            const config = configs[env];
            document.getElementById("envLabel").innerHTML = `<strong>${env}</strong>`;
            document.getElementById("host").innerHTML = `<strong>${config.host}</strong>`;
            document.getElementById("user").innerHTML = `<strong>${config.user}</strong>`;
            document.getElementById("database").innerHTML = `<strong>${config.database}</strong>`;
        }
    </script>
</head>
<body>
    <div class="box">
        <h3>Welcome, Hemang</h3>
        <select id="envSelect">
            <option value="development">Development</option>
            <option value="testing">Testing</option>
            <option value="production" selected>Production</option>
        </select><br>
        <button onclick="updateConfig()">Change Environment</button>

        <div style="margin-top:20px;">
            <p>Environment: <span id="envLabel"><strong>production</strong></span></p>
            <p>Host: <span id="host"><strong>prod-db-server</strong></span></p>
            <p>User: <span id="user"><strong>hemang_prod</strong></span></p>
            <p>Database: <span id="database"><strong>hemang_prod_db</strong></span></p>
        </div>

        <p style="margin-top:20px; font-style:italic; color:#555;">Select your environment and click "Change" to update the configuration live.</p>
    </div>
</body>
</html>
