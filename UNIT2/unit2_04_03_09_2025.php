<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>PHP String Functions Demonstration</h2>";

// Your message
$text = "Hello i am hemang lakhadiya.I am 21 year old.";

// 1. strlen()
$length = strlen($text);

// 2. strpos() — find position of "hemang"
$pos = strpos($text, "hemang");

// 3. str_word_count()
$wordCount = str_word_count($text);

// 4. strrev()
$reversed = strrev($text);

// 5. str_replace() — replace "hemang" with "Hemang"
$replaced = str_replace("hemang", "Hemang", $text);

// 6. strtolower()
$lower = strtolower($text);

// 7. strtoupper()
$upper = strtoupper($text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>PHP String Functions Demo</title>
<style>
    body {
        font-family: Arial, sans-serif;
        max-width: 800px;
        margin: 40px auto;
        background: #f9f9f9;
        color: #333;
        padding: 20px;
    }
    h2 {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 30px;
    }
    .section {
        background: white;
        padding: 20px 25px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 3px 7px rgba(0,0,0,0.1);
    }
    .section h3 {
        color: #2980b9;
        margin-bottom: 10px;
    }
    p, code {
        font-size: 1.1rem;
        line-height: 1.4;
    }
    code {
        background: #ecf0f1;
        padding: 2px 6px;
        border-radius: 4px;
        font-family: monospace;
    }
</style>
</head>
<body>


<div class="section">
    <h3>Original Message:</h3>
    <p><?= htmlspecialchars($text) ?></p>
</div>

<div class="section">
    <h3>1. strlen()</h3>
    <p>Length of the string: <code><?= $length ?></code></p>
</div>

<div class="section">
    <h3>2. strpos()</h3>
    <p>Position of the word <code>"hemang"</code> in the string: 
       <code><?= $pos !== false ? $pos : "Not found" ?></code>
    </p>
</div>

<div class="section">
    <h3>3. str_word_count()</h3>
    <p>Number of words in the string: <code><?= $wordCount ?></code></p>
</div>

<div class="section">
    <h3>4. strrev()</h3>
    <p>Reversed string: <code><?= htmlspecialchars($reversed) ?></code></p>
</div>

<div class="section">
    <h3>5. str_replace()</h3>
    <p>Replacing <code>"hemang"</code> with <code>"Hemang"</code>:<br>
       <code><?= htmlspecialchars($replaced) ?></code>
    </p>
</div>

<div class="section">
    <h3>6. strtolower()</h3>
    <p>String converted to lowercase: <code><?= htmlspecialchars($lower) ?></code></p>
</div>

<div class="section">
    <h3>7. strtoupper()</h3>
    <p>String converted to uppercase: <code><?= htmlspecialchars($upper) ?></code></p>
</div>

</body>
</html>
