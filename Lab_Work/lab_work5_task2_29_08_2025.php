<?php

echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Lab 2: Secure Token Generation for Password Reset</h2>";

$email = '';
$token = '';
$submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = strtolower(trim($_POST['email']));
    $timestamp = time();
    $token = md5($email . $timestamp);
    $submitted = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Password Reset Token Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f7fa;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
            min-height: 100vh;
            color: #2c3e50;
        }
        h2 {
            font-weight: 600;
            margin-bottom: 30px;
        }
        form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            text-align: center;
        }
        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: 600;
            text-align: left;
        }
        input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #3498db;
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        input[type="email"]:focus {
            border-color: #2980b9;
            outline: none;
        }
        button {
            background-color: #3498db;
            color: white;
            font-size: 1rem;
            font-weight: 600;
            padding: 12px 25px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        button:hover {
            background-color: #2980b9;
        }
        .result {
            background-color: #fff;
            padding: 25px 30px;
            margin-top: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            font-size: 1.1rem;
            line-height: 1.6;
            word-break: break-word;
            text-align: left;
        }
        .result strong {
            color: #27ae60;
        }
        .code {
            margin: 10px 0 15px;
            padding: 12px 15px;
            background-color: #eafaf1;
            border-left: 6px solid #27ae60;
            font-family: monospace;
            font-size: 1rem;
            color: #2c3e50;
            border-radius: 6px;
        }
    </style>
</head>
<body>

<?php if (!$submitted): ?>
<form method="POST" action="">
    <label for="email">Enter your email address:</label>
    <input type="email" name="email" id="email" placeholder="Enter your email" value="<?= htmlspecialchars($email) ?>" required />
    <button type="submit">Generate Token</button>
</form>

<?php else: ?>
<div class="result">
    <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
    <p><strong>Generated Token:</strong></p>
    <div class="code"><?= $token ?></div>
    <p>You can use this token to create a password reset link like this:</p>
    <div class="code">https://example.com/reset-password.php?token=<?= $token ?></div>
</div>
<?php endif; ?>

</body>
</html>
