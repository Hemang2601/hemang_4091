<?php

echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px;'>While and Do While Loop</h2>";

echo "<table style='margin: 20px auto; border-collapse: collapse; font-family: Arial, sans-serif;'>";
echo "<tr style='background-color: #4CAF50; color: white;'>
        <th style='padding: 10px 20px;'>While Loop Output</th>
      </tr>";

echo "<tr>
        <td style='padding: 10px 20px; border: 1px solid #4CAF50;'>";
   
        $i=15;
        while($i<=20)
        {
            echo $i . " &nbsp;&nbsp;";
            $i++;
        }

echo "</td></tr>";

echo "<tr style='background-color: #2196F3; color: white;'>
        <th style='padding: 10px 20px;'>Do While Loop Output</th>
      </tr>";

echo "<tr>
        <td style='padding: 10px 20px; border: 1px solid #2196F3;'>";

        $a=15;
        do
        {
            echo $a . " &nbsp;&nbsp;";
            $a++;
        }while($a<=20);

echo "</td></tr>";

echo "</table>";
