<?php

echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Lab 1: User Input Sanitization for Web Forms</h2>";

$name = $email = $message = '';
$submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = strtolower(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    $submitted = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
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
        }
        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: 600;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #3498db;
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            border-color: #2980b9;
            outline: none;
        }
        textarea {
            resize: vertical;
            min-height: 120px;
        }
        input[type="submit"] {
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
        }
        input[type="submit"]:hover {
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
        }
        .result strong {
            color: #27ae60;
        }
    </style>
</head>
<body>

<?php if (!$submitted): ?>
<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="message">Message:</label>
    <textarea name="message" id="message" required></textarea>

    <input type="submit" value="Submit">
</form>

<?php else: ?>
<div class="result">
    <p><strong>Name:</strong> <?= $name ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Message:</strong> <?= $message ?></p>
</div>
<?php endif; ?>

</body>
</html>
