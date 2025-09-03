<?php

echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>PHP Type Casting with settype() and gettype()</h2>";

echo "<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>PHP Type Casting Demo</title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f0f4f8;
        color: #34495e;
        max-width: 700px;
        margin: 40px auto;
        padding: 20px;
    }
    h2 {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 40px;
        font-weight: 700;
    }
    p {
        background: #ffffff;
        padding: 15px 20px;
        border-radius: 8px;
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        margin-bottom: 20px;
        font-size: 1.1rem;
        line-height: 1.5;
    }
    code {
        background-color: #ecf0f1;
        padding: 3px 7px;
        border-radius: 4px;
        font-family: Consolas, Monaco, 'Courier New', monospace;
        color: #2c3e50;
        font-weight: 600;
    }
</style>
</head>
<body>
";

// Initial variable as a string
$var = "123.45";

echo "<p>Original value: <code>'$var'</code> (Type: <code>" . gettype($var) . "</code>)</p>";

// Cast to integer
settype($var, "integer");
echo "<p>After settype to <code>integer</code>: value = <code>$var</code>, Type = <code>" . gettype($var) . "</code></p>";

// Reset value as string
$var = "123.45";

// Cast to float
settype($var, "float");
echo "<p>After settype to <code>float</code>: value = <code>$var</code>, Type = <code>" . gettype($var) . "</code></p>";

// Reset value as string
$var = "123.45";

// Cast to boolean
settype($var, "boolean");
echo "<p>After settype to <code>boolean</code>: value = <code>" . ($var ? "true" : "false") . "</code>, Type = <code>" . gettype($var) . "</code></p>";

// Reset value as string
$var = "123.45";

// Cast to string again (just to show)
settype($var, "string");
echo "<p>After settype to <code>string</code>: value = <code>'$var'</code>, Type = <code>" . gettype($var) . "</code></p>";

echo "
</body>
</html>";
?>
