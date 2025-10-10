<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>MySQL String Functions Demo</h2>";

$host = 'localhost';
$db = 'test_db';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "
    SELECT 
        sample_text,
        LENGTH(sample_text) AS length_val,
        CONCAT('Hello ', sample_text) AS concat_val,
        CONCAT_WS('-', 'PHP', sample_text) AS concat_ws_val,
        TRIM(sample_text) AS trim_val,
        LTRIM(sample_text) AS ltrim_val,
        RTRIM(sample_text) AS rtrim_val,
        LPAD(sample_text, 10, '*') AS lpad_val,
        RPAD(sample_text, 10, '#') AS rpad_val,
        LOCATE('test', sample_text) AS locate_val,
        SUBSTRING(sample_text, 1, 5) AS substr_val,
        LCASE(sample_text) AS lcase_val,
        UCASE(sample_text) AS ucase_val,
        REPEAT(sample_text, 2) AS repeat_val,
        REPLACE(sample_text, 'test', 'demo') AS replace_val
    FROM demo_strings
    LIMIT 5;
";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>String Functions - Modern Design</title>
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
        <th>Original</th>
        <th>Length</th>
        <th>Concat</th>
        <th>Concat_WS</th>
        <th>Trim</th>
        <th>LTRIM</th>
        <th>RTRIM</th>
        <th>LPAD</th>
        <th>RPAD</th>
        <th>Locate</th>
        <th>Substring</th>
        <th>LCASE</th>
        <th>UCASE</th>
        <th>Repeat</th>
        <th>Replace</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['sample_text']}</td>
            <td>{$row['length_val']}</td>
            <td>{$row['concat_val']}</td>
            <td>{$row['concat_ws_val']}</td>
            <td>{$row['trim_val']}</td>
            <td>{$row['ltrim_val']}</td>
            <td>{$row['rtrim_val']}</td>
            <td>{$row['lpad_val']}</td>
            <td>{$row['rpad_val']}</td>
            <td>{$row['locate_val']}</td>
            <td>{$row['substr_val']}</td>
            <td>{$row['lcase_val']}</td>
            <td>{$row['ucase_val']}</td>
            <td>{$row['repeat_val']}</td>
            <td>{$row['replace_val']}</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No data found in <strong>demo_strings</strong> table.</p>";
}
$conn->close();
?>
</div>

</body>
</html>
