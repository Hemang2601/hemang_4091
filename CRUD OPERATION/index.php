<?php

include('config.php');

if (isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit();
}

$msg = "";
$showLoader = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $mysqli->real_escape_string($_POST['username']);
    $pass = md5($_POST['password']);

    $res = $mysqli->query("SELECT * FROM users WHERE username='$user' AND password='$pass'");

    if ($res && $res->num_rows > 0) {
        $_SESSION['user'] = $user;

        if (!empty($_POST['remember'])) {
            setcookie("user", $user, time() + (86400 * 7), "/");
        }

        $showLoader = true;
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
            position: relative;
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
            z-index: 2;
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

        /* Modern Overloaded Loader */
        .loader-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(12px);
            background: radial-gradient(circle at center, rgba(255,255,255,0.4), rgba(255,255,255,0.2));
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 100;
            animation: fadeIn 0.6s ease-in-out;
        }

        .loader-wrapper {
            position: relative;
            width: 120px;
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: scaleUp 0.6s ease-in-out;
        }

        .ring {
            position: absolute;
            border: 6px solid transparent;
            border-top-color: #007bff;
            border-radius: 50%;
            animation: spin 1.2s linear infinite;
        }

        .ring1 {
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }

        .ring2 {
            width: 100px;
            height: 100px;
            animation-delay: 0.2s;
            border-top-color: #00c6ff;
        }

        .ring3 {
            width: 120px;
            height: 120px;
            animation-delay: 0.4s;
            border-top-color: #6a00ff;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes scaleUp {
            from { transform: scale(0.9); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .message {
            position: absolute;
            bottom: -40px;
            font-size: 16px;
            color: #333;
            font-weight: 500;
            animation: typing 2s steps(30, end);
            white-space: nowrap;
            overflow: hidden;
            border-right: 2px solid #007bff;
            width: 0;
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 240px; }
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
    <?php if ($showLoader): ?>
    <script>
        setTimeout(function() {
            window.location.href = "dashboard.php";
        }, 2000);
    </script>
    <?php endif; ?>
</head>
<body>
    <?php if ($showLoader): ?>
    <div class="loader-overlay">
        <div class="loader-wrapper">
            <div class="ring ring1"></div>
            <div class="ring ring2"></div>
            <div class="ring ring3"></div>
            <div class="message">Login successful. Redirecting...</div>
        </div>
    </div>
    <?php endif; ?>

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
