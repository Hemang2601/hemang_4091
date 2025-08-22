<?php

echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Numeric Array, Associative Array, Multidimensional Array</h2>";

$day = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
$months = [
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
];
$laptops = [
    "Apple" => [
        ["model" => "MacBook Air M1", "price" => 95000],
        ["model" => "MacBook Pro 13", "price" => 130000],
        ["model" => "MacBook Pro 14", "price" => 200000],
        ["model" => "MacBook Pro 16", "price" => 250000],
        ["model" => "MacBook Air M2", "price" => 115000],
    ],
    "Samsung" => [
        ["model" => "Galaxy Book Pro", "price" => 85000],
        ["model" => "Galaxy Book Flex", "price" => 95000],
        ["model" => "Galaxy Book Ion", "price" => 80000],
        ["model" => "Galaxy Chromebook 2", "price" => 72000],
        ["model" => "Galaxy Book Odyssey", "price" => 105000],
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Array Display - Modern Design</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

    /* Reset and base */
    *, *::before, *::after {
        box-sizing: border-box;
    }
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

    /* Table container for responsiveness */
    .table-wrapper {
        width: 100%;
        max-width: 700px;
        margin-bottom: 50px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        border-radius: 8px;
        background: white;
        overflow: hidden;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        font-size: 1rem;
    }
    caption {
        background-color: #3498db;
        color: #fff;
        font-weight: 700;
        font-size: 1.5rem;
        padding: 18px 0;
        text-transform: uppercase;
        letter-spacing: 1.2px;
    }
    thead {
        background-color: #2980b9;
        color: white;
        text-align: left;
    }
    thead th {
        padding: 14px 20px;
        font-weight: 600;
        border-bottom: 2px solid #1c5980;
    }
    tbody tr {
        border-bottom: 1px solid #ddd;
        transition: background-color 0.3s ease;
    }
    tbody tr:hover {
        background-color: #ecf6fd;
    }
    tbody td {
        padding: 12px 20px;
        vertical-align: middle;
    }
    tbody td:first-child {
        font-weight: 600;
        color: #2c3e50;
    }
    /* Center and bold for number columns */
    .center-bold {
        text-align: center;
        font-weight: 600;
        color: #2980b9;
    }

    /* Price column right aligned */
    .price {
        text-align: right;
        font-weight: 600;
        color: #27ae60;
    }

    /* Responsive adjustments */
    @media (max-width: 480px) {
        thead, tbody, tr, th, td {
            display: block;
        }
        thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }
        tbody tr {
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            padding: 15px;
            background: white;
        }
        tbody td {
            padding: 8px 15px;
            text-align: right;
            position: relative;
            border: none;
            border-bottom: 1px solid #eee;
        }
        tbody td::before {
            content: attr(data-label);
            position: absolute;
            left: 15px;
            font-weight: 600;
            color: #2980b9;
            text-transform: uppercase;
            font-size: 0.75rem;
            top: 12px;
            text-align: left;
        }
        tbody td:last-child {
            border-bottom: 0;
        }
        /* Remove rowspan effect on mobile */
        tbody td[rowspan] {
            display: block;
            text-align: left !important;
            font-weight: 700;
            border-bottom: 1px solid #ddd;
            padding-left: 15px;
        }
    }
</style>
</head>
<body>

<div class="table-wrapper">
    <table>
        <caption>Days of the Week</caption>
        <thead>
            <tr><th>No.</th><th>Day</th></tr>
        </thead>
        <tbody>
            <?php foreach ($day as $index => $d): ?>
            <tr>
                <td class="center-bold" data-label="No."><?= $index + 1 ?></td>
                <td data-label="Day"><?= htmlspecialchars($d) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="table-wrapper">
    <table>
        <caption>Months and Number of Days</caption>
        <thead>
            <tr><th>Month</th><th>Days</th></tr>
        </thead>
        <tbody>
            <?php foreach ($months as $month => $days): ?>
            <tr>
                <td data-label="Month"><?= htmlspecialchars($month) ?></td>
                <td class="center-bold" data-label="Days"><?= $days ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="table-wrapper">
    <table>
        <caption>Laptops Models and Prices</caption>
        <thead>
            <tr>
                <th>Company</th>
                <th>Model</th>
                <th>Price (₹)</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($laptops as $company => $models) {
                $firstRow = true;
                $modelCount = count($models);
                foreach ($models as $model) {
                    echo "<tr>";
                    if ($firstRow) {
                        echo "<td rowspan='$modelCount' style='vertical-align:middle; font-weight:bold; color:#2980b9;'>$company</td>";
                        $firstRow = false;
                    }
                    echo "<td data-label='Model'>" . htmlspecialchars($model['model']) . "</td>";
                    echo "<td class='price' data-label='Price'>" . number_format($model['price']) . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
