<?php

$programs = [
    ['Student Marksheet', 'unit1_01_30_07_2025.php'],
    ['Max/Min Calculator', 'unit1_02_01_08_2025.php'],
    ['Arithmetic Operations', 'unit1_03_01_08_2025.php'],
    ['Month Name Finder', 'unit1_04_06_08_2025.php'],
    ['For and ForEach Loop', 'unit1_05_06_08_2025.php'],
    ['While and Do While Loop', 'unit1_06_06_08_2025.php'],
    ['Include and Require Function', 'unit1_07_06_08_2025.php'],
    ['Array with various Function', 'unit1_08_08_08_2025.php'],
];

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
echo "<title>Programs List</title>";
echo "<style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 40px;
            background-color: #e6f0ff;
            color: #003366;
        }
        table {
            border-collapse: separate;
            border-spacing: 0;
            width: 650px;
            margin: 0 auto;
            box-shadow: 0 4px 12px rgba(0, 51, 102, 0.2);
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
        }
        caption {
            font-size: 28px;
            font-weight: 700;
            padding: 20px 0;
            color: #003366;
            text-align: center;
            background: #cce0ff;
            letter-spacing: 1.5px;
            border-bottom: 2px solid #003366;
        }
        thead tr {
            background-color: #3366cc;
            color: #fff;
            font-weight: 600;
            text-align: center;
        }
        thead th {
            padding: 15px 20px;
        }
        tbody tr:hover {
            background-color: #cce0ff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        tbody td {
            padding: 15px 20px;
            border-bottom: 1px solid #dde6f3;
        }
        tbody td:first-child {
            text-align: center;
            font-weight: 600;
            color: #004080;
        }
        a {
            color: #004aad;
            text-decoration: none;
            font-weight: 600;
        }
        a:hover {
            text-decoration: underline;
        }
      </style>";
echo "</head>";
echo "<body>";

echo "<table>";
echo "<caption>Programs List</caption>";
echo "<thead>";
echo "<tr>";
echo "<th style='width:60px;'>No.</th>";
echo "<th>Program Name</th>";
echo "<th>Link</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($programs as $index => $program) {
    $no = $index + 1;
    $name = htmlspecialchars($program[0]);
    $link = htmlspecialchars($program[1]);

    echo "<tr>";
    echo "<td>$no</td>";
    echo "<td>$name</td>";
    echo "<td><a href='$link' target='_blank' rel='noopener noreferrer'>$link</a></td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";

echo "</body>";
echo "</html>";
