<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Event Countdown Using Date and Time Functions</h2>";

$event_date = "2025-09-22";
$today = new DateTime();
$event = new DateTime($event_date);
$interval = $today->diff($event);
if ($interval->invert == 0) {
    $days_remaining = $interval->days;
    $message = "There are <strong>$days_remaining</strong> days remaining until the event on " . $event->format('F j, Y') . ".";
} else {
    $message = "The event on " . $event->format('F j, Y') . " has already passed.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Event Countdown</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f8;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 80vh; 
        margin: 0;
        padding: 20px;
        text-align: center;
        flex-direction: column;
    }
    .countdown-box {
        background: white;
        padding: 30px 40px;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        max-width: 400px;
        width: 100%;
    }
    strong {
        color: #5a67d8;
        font-size: 1.5em;
    }
</style>
</head>
<body>
    <div class="countdown-box">
        <h1>Event Countdown</h1>
        <p><?= $message ?></p>
    </div>
</body>
</html>
