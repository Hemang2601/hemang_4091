<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Date Difference Calculator Using DateTime</h2>";

function calculate_date_difference($start_date, $end_date) {
    $start = new DateTime($start_date);
    $end = new DateTime($end_date);
    $interval = $start->diff($end);
    return $interval->days;
}

$start_date = "26-01-2005";
$end_date = "26-09-2025";
$days_difference = calculate_date_difference($start_date, $end_date);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Date Difference Calculator</title>
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
    .date-box {
        background: white;
        padding: 30px 40px;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        max-width: 450px;
        width: 100%;
    }
    h1 {
        color: #5a67d8;
        margin-bottom: 20px;
    }
    p {
        font-size: 1.1em;
        margin: 10px 0;
    }
    strong {
        color: #2c3e50;
    }
    .note {
        margin-top: 20px;
        font-size: 0.9em;
        color: #777;
        font-style: italic;
    }
</style>
</head>
<body>
    <div class="date-box">
        <h1>Date Difference</h1>
        <p>Start Date: <strong><?= htmlspecialchars($start_date) ?></strong></p>
        <p>End Date: <strong><?= htmlspecialchars($end_date) ?></strong></p>
        <hr style="margin: 20px 0;">
        <p>Number of Days Between:</p>
        <p><strong><?= $days_difference ?> days</strong></p>

        <div class="note">
            <p>This demonstrates using PHP's DateTime class for object-oriented date manipulation.</p>
        </div>
    </div>
</body>
</html>
