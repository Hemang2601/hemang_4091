<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>MySQL Date and Time Functions Demo</h2>";

$host = 'localhost';
$db = 'test_db';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query using MySQL date and time functions
$sql = "
    SELECT 
        sample_date,
        DAYOFWEEK(sample_date) AS day_of_week,
        WEEKDAY(sample_date) AS weekday,
        DAYOFMONTH(sample_date) AS day_of_month,
        DAYOFYEAR(sample_date) AS day_of_year,
        DAYNAME(sample_date) AS day_name,
        MONTH(sample_date) AS month_num,
        MONTHNAME(sample_date) AS month_name,
        WEEK(sample_date) AS week_num,
        NOW() AS now_val,
        SYSDATE() AS sysdate_val,
        CURRENT_TIMESTAMP() AS current_ts
    FROM demo_dates
    LIMIT 5;
";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Date Functions - Modern Design</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');
    *, *::before, *::after { box-sizing: border-box; }
    body {
        font-family: 'Inter', sans-serif;
        background: #f4f7fa;
        color: #34495e;
        margin: 40px 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
    }
    h2 {
        color: #2c3e50;
        font-weight: 600;
        margin-bottom: 40px;
        text-align: center;
    }
    .form-wrapper {
        width: 100%;
        max-width: 1000px;
        background: white;
        padding: 30px 25px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        overflow-x: auto;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.95rem;
    }
    th, td {
        padding: 10px 12px;
        border: 1px solid #ccc;
        text-align: left;
    }
    th {
        background-color: #2980b9;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    @media (max-width: 480px) {
        .form-wrapper {
            padding: 20px 15px;
        }
        table {
            font-size: 0.85rem;
        }
    }
</style>
</head>
<body>

<div class="form-wrapper">
<?php
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>
        <th>Date</th>
        <th>DAYOFWEEK</th>
        <th>WEEKDAY</th>
        <th>DAYOFMONTH</th>
        <th>DAYOFYEAR</th>
        <th>DAYNAME</th>
        <th>MONTH</th>
        <th>MONTHNAME</th>
        <th>WEEK</th>
        <th>NOW()</th>
        <th>SYSDATE()</th>
        <th>CURRENT_TIMESTAMP()</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['sample_date']}</td>
            <td>{$row['day_of_week']}</td>
            <td>{$row['weekday']}</td>
            <td>{$row['day_of_month']}</td>
            <td>{$row['day_of_year']}</td>
            <td>{$row['day_name']}</td>
            <td>{$row['month_num']}</td>
            <td>{$row['month_name']}</td>
            <td>{$row['week_num']}</td>
            <td>{$row['now_val']}</td>
            <td>{$row['sysdate_val']}</td>
            <td>{$row['current_ts']}</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No data found in <strong>demo_dates</strong> table.</p>";
}
$conn->close();
?>
</div>

</body>
</html>
