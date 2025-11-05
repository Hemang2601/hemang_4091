<?php
include('config.php');


if (isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit();
}

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $mysqli->real_escape_string($_POST['username']);
    $pass = md5($_POST['password']);

    $res = $mysqli->query("SELECT * FROM users WHERE username='$user' AND password='$pass'");

    if ($res && $res->num_rows > 0) {
        $_SESSION['user'] = $user;

        if (!empty($_POST['remember'])) {
            setcookie("user", $user, time() + (86400 * 7), "/");
        }

        header("Location: dashboard.php");
        exit();
    } else {
        $msg = "Invalid login!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 100%;
            max-width: 400px;
            transition: all 0.3s ease;
        }

        .login-container:hover {
            transform: scale(1.02);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-size: 28px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: none;
            border-radius: 8px;
            background-color: #f5f5f5;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .login-container input:focus {
            background-color: #e0e0e0;
            outline: none;
        }

        .login-container label {
            display: flex;
            align-items: center;
            font-size: 14px;
            margin-bottom: 20px;
            color: #555;
        }

        .login-container button {
            width: 100%;
            padding: 14px;
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #0056b3;
        }

        .login-container p {
            text-align: center;
            color: red;
            margin-top: 15px;
            font-size: 14px;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
            }

            .login-container h2 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" value="<?php echo htmlspecialchars($_COOKIE['user'] ?? '', ENT_QUOTES); ?>" required>
            <input type="password" name="password" placeholder="Password" required>
            <label><input type="checkbox" name="remember"> Remember Me</label>
            <button type="submit">Login</button>
            <p><?php echo $msg; ?></p>
        </form>
    </div>
</body>
</html>
