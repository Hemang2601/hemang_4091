<?php
session_start();

if (!isset($_GET['done'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Logging Out...</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                margin: 0;
                padding: 0;
                height: 100vh;
                background: #f0f2f5;
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden;
                position: relative;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .blur-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                backdrop-filter: blur(8px);
                background-color: rgba(255, 255, 255, 0.3);
                z-index: 1;
            }

            .loader {
                position: relative;
                z-index: 2;
                width: 80px;
                height: 80px;
                border: 8px solid #ccc;
                border-top: 8px solid #007bff;
                border-radius: 50%;
                animation: spin 1s linear infinite;
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }

            .message {
                position: absolute;
                top: 60%;
                font-size: 18px;
                color: #333;
                z-index: 2;
            }
        </style>
        <script>
            setTimeout(function() {
                window.location.href = "logout.php?done=true";
            }, 2000);
        </script>
    </head>
    <body>
        <div class="blur-overlay"></div>
        <div class="loader"></div>
        <div class="message">Logging you out...</div>
    </body>
    </html>
    <?php
    exit();
} else {
    // Second visit: perform logout
    session_destroy();
    setcookie("user", "", time() - 3600, "/");
    header("Location: index.php");
    exit();
}
?>
