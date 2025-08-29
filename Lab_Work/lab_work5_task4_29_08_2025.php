<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Lab 4: CSV Parsing for Batch Evaluation</h2>";

$input = '';
$outputs = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = trim($_POST['csvdata']);
    $lines = explode("\n", $input);

    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '') continue;

        $parts = explode(',', $line);
        $name = array_shift($parts);
        $scores = array_map('floatval', $parts);
        $avg = array_sum($scores) / count($scores);
        $avgFormatted = number_format($avg, 2);
        $summary = implode(' ', [$name, '-', 'Avg:', $avgFormatted]);
        $outputs[] = $summary;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>CSV Batch Evaluation</title>
<style>
    body {
        font-family: Arial, sans-serif;
        max-width: 600px;
        margin: 40px auto;
        padding: 20px;
        color: #2c3e50;
        background: #f9f9f9;
    }
    textarea {
        width: 100%;
        height: 120px;
        padding: 10px;
        font-size: 1rem;
        border: 1px solid #3498db;
        border-radius: 6px;
        resize: vertical;
        margin-bottom: 15px;
    }
    button {
        padding: 10px 20px;
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 1rem;
    }
    .result {
        margin-top: 30px;
        background: #eafaf1;
        border-left: 6px solid #27ae60;
        padding: 15px;
        font-weight: 600;
        line-height: 1.5;
        font-family: monospace;
    }
</style>
</head>
<body>

<form method="POST" action="">
    <label for="csvdata">Enter CSV data (one student per line):</label>
    <textarea name="csvdata" id="csvdata" placeholder="Hemang,55,96,98&#10;Mann,92,88,95" required><?= htmlspecialchars($input) ?></textarea>
    <button type="submit">Evaluate</button>
</form>

<?php if (!empty($outputs)): ?>
    <div class="result">
        <?php foreach ($outputs as $line): ?>
            <div><?= htmlspecialchars($line) ?></div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

</body>
</html>
