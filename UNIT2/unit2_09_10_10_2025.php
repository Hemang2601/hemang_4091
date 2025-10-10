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
        sample_datetime,
        HOUR(sample_datetime) AS hour_val,
        MINUTE(sample_datetime) AS minute_val,
        SECOND(sample_datetime) AS second_val,
        DATE_FORMAT(sample_datetime, '%d-%b-%Y %h:%i %p') AS formatted_date,
        DATE_SUB(sample_datetime, INTERVAL 5 DAY) AS date_sub_5d,
        DATE_ADD(sample_datetime, INTERVAL 10 DAY) AS date_add_10d,
        CURDATE() AS cur_date,
        CURRENT_DATE() AS current_date,
        CURTIME() AS cur_time,
        CURRENT_TIME() AS current_time,
        UNIX_TIMESTAMP(sample_datetime) AS unix_ts,
        FROM_UNIXTIME(UNIX_TIMESTAMP(sample_datetime)) AS from_unix
    FROM demo_datetime
    LIMIT 5;
";


$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>DateTime Functions - Modern Design</title>
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
if (!$result) {
    echo "<p style='color:red;'>Query Error: " . $conn->error . "</p>";
} elseif ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>
        <th>Original DateTime</th>
        <th>HOUR()</th>
        <th>MINUTE()</th>
        <th>SECOND()</th>
        <th>DATE_FORMAT()</th>
        <th>DATE_SUB(-5 days)</th>
        <th>DATE_ADD(+10 days)</th>
        <th>CURDATE()</th>
        <th>CURRENT_DATE()</th>
        <th>CURTIME()</th>
        <th>CURRENT_TIME()</th>
        <th>UNIX_TIMESTAMP()</th>
        <th>FROM_UNIXTIME()</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['sample_datetime']}</td>
            <td>{$row['hour_val']}</td>
            <td>{$row['minute_val']}</td>
            <td>{$row['second_val']}</td>
            <td>{$row['formatted_date']}</td>
            <td>{$row['date_sub_5d']}</td>
            <td>{$row['date_add_10d']}</td>
            <td>{$row['cur_date']}</td>
            <td>{$row['current_date']}</td>
            <td>{$row['cur_time']}</td>
            <td>{$row['current_time']}</td>
            <td>{$row['unix_ts']}</td>
            <td>{$row['from_unix']}</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No data found in <strong>demo_datetime</strong> table.</p>";
}
$conn->close();
?>
</div>

</body>
</html>
