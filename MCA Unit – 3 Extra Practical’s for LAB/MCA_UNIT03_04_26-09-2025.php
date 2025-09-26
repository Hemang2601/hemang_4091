<?php
// Set cookie if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $preference = $_POST["preference"] ?? "";
    setcookie("user_preference", $preference, time() + (86400 * 30)); // 30 days
    $message = "Preference saved: <strong>$preference</strong>";
}

// Retrieve cookie value
$user_preference = $_COOKIE["user_preference"] ?? "not set";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Personalized Experience</title>
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
            width: 350px;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
        }
        select, button {
            padding: 10px;
            margin: 10px 0;
            width: 90%;
        }
        .message {
            margin-top: 15px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Select Your Preference</h2>
        <form method="post">
            <select name="preference">
                <option value="Light Theme">Light Theme</option>
                <option value="Dark Theme">Dark Theme</option>
                <option value="English">English</option>
                <option value="Hindi">Hindi</option>
            </select><br>
            <button type="submit">Save</button>
        </form>

        <?php if (isset($message)): ?>
            <div class="message"><?= $message ?></div>
        <?php endif; ?>

        <p>Your current preference: <strong><?= htmlspecialchars($user_preference) ?></strong></p>
    </div>
</body>
</html>
