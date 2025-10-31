<?php
session_start();

$valid_username = "hemang";
$valid_password = "hemang@123";

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    setcookie("username", "", time() - 3600, "/");
    setcookie("password", "", time() - 3600, "/");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

$stored_username = $_COOKIE['username'] ?? "";
$stored_password = $_COOKIE['password'] ?? "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";
    $remember = isset($_POST["remember"]);

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;

        if ($remember) {
            setcookie("username", $username, time() + (30 * 24 * 60 * 60), "/");
            setcookie("password", $password, time() + (30 * 24 * 60 * 60), "/");
        }

        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            text-align: center;
            padding: 50px;
        }
        .box {
            background: white;
            padding: 30px;
            border-radius: 8px;
            display: inline-block;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        input[type="text"],
        input[type="password"] {
            margin: 10px;
            padding: 10px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #1c5980;
        }
        label {
            font-size: 14px;
        }
        .error {
            color: red;
        }
        a {
            display: block;
            margin-top: 20px;
            color: #2980b9;
            text-decoration: none;
        }
    </style>
</head>
<body>

<?php if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true): ?>
    <div class="box">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
        <p>This is your protected home page.</p>
        <a href="?logout=true">Logout</a>
    </div>
<?php else: ?>
    <h2>Login Page</h2>
    <form method="POST" class="box">
        <input type="text" name="username" placeholder="Username" value="<?php echo htmlspecialchars($stored_username); ?>" required /><br>
        <input type="password" name="password" placeholder="Password" value="<?php echo htmlspecialchars($stored_password); ?>" required /><br>
        <label><input type="checkbox" name="remember" /> Remember Me</label><br>
        <input type="submit" value="Login" />
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    </form>
<?php endif; ?>

</body>
</html>
