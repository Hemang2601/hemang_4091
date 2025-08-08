<?php

$a = [10, 20, 30, 40, 50];
$r_a = array_reverse($a);
$b = array_merge($a, $r_a);
sort($b);
$sum = array_sum($a);

$output_a = implode(", ", $a);
$output_b = implode(", ", $r_a);
$output_c = implode(", ", $b);
$output_d = "Sum of elements: " . $sum;

echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; color: #2c3e50;'>Array with Various Functions</h2>";

echo "<table style='border-collapse: collapse; width: auto; margin: 30px auto; font-family: Arial, sans-serif; box-shadow: 0 0 10px rgba(0,0,0,0.1);'>
        <tr style='background-color: #3498db; color: white;'>
            <th style='padding: 12px; border: 1px solid #2980b9;'>Operation</th>
            <th style='padding: 12px; border: 1px solid #2980b9;'>Output</th>
        </tr>
        <tr style='background-color: #f9f9f9;'>
            <td style='padding: 10px; border: 1px solid #ddd;'>a) Print the values of array</td>
            <td style='padding: 10px; border: 1px solid #ddd;'>$output_a</td>
        </tr>
        <tr style='background-color: #ffffff;'>
            <td style='padding: 10px; border: 1px solid #ddd;'>b) Reverse an array</td>
            <td style='padding: 10px; border: 1px solid #ddd;'>$output_b</td>
        </tr>
        <tr style='background-color: #f9f9f9;'>
            <td style='padding: 10px; border: 1px solid #ddd;'>c) Merge two arrays in sorted manner</td>
            <td style='padding: 10px; border: 1px solid #ddd;'>$output_c</td>
        </tr>
        <tr style='background-color: #ffffff;'>
            <td style='padding: 10px; border: 1px solid #ddd;'>d) Add values of all elements of an array</td>
            <td style='padding: 10px; border: 1px solid #ddd;'>$output_d</td>
        </tr>
      </table>";
?>
