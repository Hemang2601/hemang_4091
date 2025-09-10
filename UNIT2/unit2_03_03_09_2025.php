<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>PHP Array Functions Demonstration</h2>";

$months = [
    "Jan" => "January",
    "Feb" => "February",
    "Mar" => "March",
    "Apr" => "April",
    "May" => "May",
    "Jun" => "June",
    "Jul" => "July",
    "Aug" => "August",
    "Sep" => "September",
    "Oct" => "October",
    "Nov" => "November",
    "Dec" => "December"
];

// 1. array_change_key_case (lowercase keys)
$lowercaseKeys = array_change_key_case($months, CASE_LOWER);

// 2. array_chunk (split months into chunks of 4)
$chunkedMonths = array_chunk(array_values($months), 4);

// 3. array_count_values (count occurrences in sample array)
$sampleArray = ["apple", "banana", "apple", "orange", "banana", "apple"];
$countValues = array_count_values($sampleArray);

// 4. array_combine (combine keys and values)
$keys = ["red", "green", "blue"];
$values = ["#FF0000", "#00FF00", "#0000FF"];
$combinedArray = array_combine($keys, $values);

// 5. array_pop (remove last element)
$popArray = $values;
$poppedValue = array_pop($popArray);

// 6. array_push (add element at end)
$pushArray = $values;
array_push($pushArray, "#FFFF00"); // Add yellow

// 7. array_unshift (add element at beginning)
$unshiftArray = $values;
array_unshift($unshiftArray, "#FFFFFF"); // Add white

// 8. array_shift (remove first element)
$shiftArray = $values;
$shiftedValue = array_shift($shiftArray);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>PHP Array Functions</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f7fa;
        color: #34495e;
        padding: 20px 40px;
        max-width: 900px;
        margin: auto;
    }
    h2 {
        color: #2c3e50;
        text-align: center;
        margin-bottom: 30px;
    }
    .section {
        background: white;
        padding: 20px 30px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        border-radius: 8px;
        margin-bottom: 25px;
    }
    .section h3 {
        color: #2980b9;
        margin-bottom: 15px;
    }
    pre {
        background: #ecf0f1;
        padding: 15px;
        border-radius: 5px;
        overflow-x: auto;
    }
</style>
</head>
<body>

<div class="section">
    <h3>1. array_change_key_case (lowercase keys):</h3>
    <pre><?= print_r($lowercaseKeys, true) ?></pre>
</div>

<div class="section">
    <h3>2. array_chunk (months split into chunks of 4):</h3>
    <pre><?= print_r($chunkedMonths, true) ?></pre>
</div>

<div class="section">
    <h3>3. array_count_values (count values in sample array):</h3>
    <pre><?= print_r($countValues, true) ?></pre>
</div>

<div class="section">
    <h3>4. array_combine (combine keys and values):</h3>
    <pre><?= print_r($combinedArray, true) ?></pre>
</div>

<div class="section">
    <h3>5. array_pop (remove last element):</h3>
    <p>Popped value: <strong><?= htmlspecialchars($poppedValue) ?></strong></p>
    <pre><?= print_r($popArray, true) ?></pre>
</div>

<div class="section">
    <h3>6. array_push (add element at end):</h3>
    <pre><?= print_r($pushArray, true) ?></pre>
</div>

<div class="section">
    <h3>7. array_unshift (add element at beginning):</h3>
    <pre><?= print_r($unshiftArray, true) ?></pre>
</div>

<div class="section">
    <h3>8. array_shift (remove first element):</h3>
    <p>Shifted value: <strong><?= htmlspecialchars($shiftedValue) ?></strong></p>
    <pre><?= print_r($shiftArray, true) ?></pre>
</div>

</body>
</html>
