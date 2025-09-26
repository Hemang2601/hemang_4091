<?php
echo "<h2 style='text-align:center; font-family: Arial; margin-top:20px; color: #333;'>User Registration via GET</h2>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
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
        input {
            padding: 8px;
            margin: 10px 0;
            width: 90%;
        }
        button {
            padding: 10px 20px;
            background: #5a67d8;
            color: white;
            border: none;
            border-radius: 4px;
        }
        .message {
            margin-top: 15px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="box">
        <h3>Register</h3>
        <form method="get">
            <input type="text" name="name" placeholder="Enter your name" required /><br>
            <input type="email" name="email" placeholder="Enter your email" required /><br>
            <button type="submit">Submit</button>
        </form>

        <?php if (isset($_GET["name"]) && isset($_GET["email"])): ?>
            <div class="message">
                <p>Welcome, <strong><?= htmlspecialchars($_GET["name"]) ?></strong>!</p>
                <p>Your email: <em><?= htmlspecialchars($_GET["email"]) ?></em></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
