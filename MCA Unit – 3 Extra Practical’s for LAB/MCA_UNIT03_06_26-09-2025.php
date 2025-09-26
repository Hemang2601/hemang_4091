<?php
session_start();

// Set timeout duration to 10 seconds
$timeout_duration = 10;

// Check for session timeout
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
    session_unset();
    session_destroy();
    $expired = true;
} else {
    $_SESSION['last_activity'] = time();
    $expired = false;
}

// Simulate login for demonstration
if (!isset($_SESSION['logged_in'])) {
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = "Hemang";
    $_SESSION['last_activity'] = time();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Timeout</title>
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
            width: 400px;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
        }
        p {
            margin: 10px 0;
            font-size: 1.1em;
        }
        .expired {
            color: red;
        }
        .active {
            color: green;
        }
    </style>
    <script>
        let countdown = 10;
        function updateCountdown() {
            const countdownEl = document.getElementById("countdown");
            if (countdown > 0) {
                countdownEl.innerHTML = `<p class='active'>Session will expire in <strong>${countdown}</strong> seconds...</p>`;
                countdown--;
                setTimeout(updateCountdown, 1000);
            } else {
                countdownEl.innerHTML = "<p class='expired'>Session expired due to inactivity.</p>";
            }
        }
        window.onload = updateCountdown;
    </script>
</head>
<body>
    <div class="box">
        <h2>Session Status</h2>
        <?php if ($expired): ?>
            <p class="expired">Session expired due to inactivity.</p>
        <?php elseif (isset($_SESSION['logged_in']) && $_SESSION['logged_in']): ?>
            <p class="active">Welcome, <strong><?= htmlspecialchars($_SESSION['username']) ?></strong></p>
            <p>Last activity: <?= date("H:i:s", $_SESSION['last_activity']) ?></p>
            <div id="countdown"></div>
        <?php else: ?>
            <p>Please log in again.</p>
        <?php endif; ?>
    </div>
</body>
</html>
