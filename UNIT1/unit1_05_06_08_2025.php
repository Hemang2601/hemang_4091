<?php

echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px;'>For and ForEach Loop</h2>";

echo "<table style='margin: 20px auto; border-collapse: collapse; font-family: Arial, sans-serif;'>";
echo "<tr style='background-color: #4CAF50; color: white;'>
        <th style='padding: 10px 20px;'>For Loop Output</th>
      </tr>";

echo "<tr>
        <td style='padding: 10px 20px; border: 1px solid #4CAF50;'>";

for ($i = 5; $i <= 10; $i++) {
    echo $i . " &nbsp;&nbsp;";
}

echo "</td></tr>";

echo "<tr style='background-color: #2196F3; color: white;'>
        <th style='padding: 10px 20px;'>Foreach Loop Output</th>
      </tr>";

echo "<tr>
        <td style='padding: 10px 20px; border: 1px solid #2196F3;'>";

$arr = [5,6,7,8,9,10];
foreach ($arr as $a) {
    if ($a <= 10) {
        echo $a . " &nbsp;&nbsp;";
    }
}

echo "</td></tr>";

echo "</table>";
