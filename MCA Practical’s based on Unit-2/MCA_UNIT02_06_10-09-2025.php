<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Academic Calendar Display</h2>";

date_default_timezone_set('Asia/Kolkata'); 

$current_date = date('l, F j, Y');  
$current_time = date('h:i A');       

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Academic Calendar Display</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f8;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        padding: 20px;
        text-align: center;
        flex-direction: column;
    }
    .calendar-box {
        background: white;
        padding: 30px 40px;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        max-width: 400px;
        width: 100%;
    }
    h1 {
        color: #5a67d8;
        margin-bottom: 20px;
    }
    p {
        font-size: 1.2em;
        margin: 10px 0;
    }
    strong {
        color: #2c3e50;
        font-size: 1.5em;
    }
</style>
</head>
<body>
    <div class="calendar-box">
        <h1>Academic Calendar</h1>
        <p>Today's Date:</p>
        <p><strong><?= $current_date ?></strong></p>
        <p>Current Time:</p>
        <p><strong><?= $current_time ?></strong></p>
    </div>
</body>
</html>
