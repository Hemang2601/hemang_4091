<?php
$users_db = [
    [
        "email" => "hemang@gmail.com",
        "password" => "123456"
    ],
    [
        "email" => "mann@gmail.com",
        "password" => "123456"
    ]
];

$message = "";
$msg_class = "";

function validate_credentials($email, $password, $users_db) {
    foreach ($users_db as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            return [
                "status" => true,
                "message" => "Login successful! Welcome, " . htmlspecialchars($email)
            ];
        }
    }
    return [
        "status" => false,
        "message" => "Login failed! Invalid email or password."
    ];
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $result = validate_credentials($email, $password, $users_db);

    $message = $result['message'];
    $msg_class = $result['status'] ? "success" : "error";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Login Page</title>
<style>
    * {
        box-sizing: border-box;
    }
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f6f8;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: #333;
        flex-direction: column;
        padding: 20px;
    }
    h2 {
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 30px;
    }
    div {
        background: white;
        padding: 40px 50px;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        width: 360px;
        max-width: 100%;
        text-align: center;
    }
    form input[type="email"],
    form input[type="password"] {
        width: 100%;
        padding: 14px 16px;
        margin: 12px 0 24px 0;
        border: 1.5px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }
    form input[type="email"]:focus,
    form input[type="password"]:focus {
        border-color: #5a67d8;
        outline: none;
        box-shadow: 0 0 8px rgba(90, 103, 216, 0.4);
    }
    form input[type="submit"] {
        background-color: #5a67d8;
        border: none;
        color: white;
        padding: 14px;
        font-size: 18px;
        font-weight: 700;
        border-radius: 8px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s ease;
    }
    form input[type="submit"]:hover {
        background-color: #4c51bf;
    }
    .success {
        background-color: #2ecc71;
        color: white;
        padding: 12px;
        border-radius: 6px;
        margin-bottom: 20px;
        font-weight: 600;
    }
    .error {
        background-color: #e74c3c;
        color: white;
        padding: 12px;
        border-radius: 6px;
        margin-bottom: 20px;
        font-weight: 600;
    }
</style>
</head>
<body>

<h2>User Authentication Using Functions</h2>

<div>
    <h2>Login</h2>

    <?php if ($message): ?>
        <div class="<?= $msg_class ?>">
            <?= $message ?>
        </div>
    <?php endif; ?>

    <form method="post" action="">
        <input type="email" name="email" placeholder="Email Address" autocomplete="email" required />
        <input type="password" name="password" placeholder="Password" autocomplete="current-password" required />
        <input type="submit" value="Login" />
    </form>
</div>

</body>
</html>
