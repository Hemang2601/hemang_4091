<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Survey Data Analysis Using Arrays and Functions</h2>";

$survey_responses = [
    [4, 5, 3],
    [3, 4, 4],
    [5, 5, 5],
    [2, 3, 4]
];

function calculate_average_scores($responses) {
    $totals = [];
    $counts = [];

    foreach ($responses as $response) {
        foreach ($response as $i => $score) {
            $totals[$i] = ($totals[$i] ?? 0) + $score;
            $counts[$i] = ($counts[$i] ?? 0) + 1;
        }
    }

    $averages = [];
    foreach ($totals as $i => $total) {
        $averages[$i] = $total / $counts[$i];
    }

    return $averages;
}

$average_scores = calculate_average_scores($survey_responses);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Survey Data Analysis</title>
<style>
    body {
        font-family: Arial, sans-serif;
        max-width: 600px;
        margin: 40px auto;
        background: #f9f9f9;
        color: #333;
        padding: 20px;
    }
    h2 {
        text-align: center;
        color: #2c3e50;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        border: 1px solid #ccc;
        padding: 12px;
        text-align: center;
    }
    th {
        background: #5a67d8;
        color: #fff;
    }
    tr:nth-child(even) {
        background: #eee;
    }
</style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Question</th>
            <th>Average Score</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($average_scores as $i => $avg): ?>
            <tr>
                <td>Question <?= $i + 1 ?></td>
                <td><?= number_format($avg, 2) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
