<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Inventory Checker Using Arrays and Functions</h2>";

$inventory = [
    "Apple" => ["quantity" => 50, "price" => 0.50],
    "Banana" => ["quantity" => 30, "price" => 0.20],
    "Orange" => ["quantity" => 20, "price" => 0.80],
    "Mango" => ["quantity" => 0, "price" => 1.50],
];

function is_in_stock($item, $inventory) {
    return isset($inventory[$item]) && $inventory[$item]["quantity"] > 0;
}

function get_quantity($item, $inventory) {
    if (isset($inventory[$item])) {
        return $inventory[$item]["quantity"];
    }
    return 0;
}

function total_inventory_value($inventory) {
    $total = 0;
    foreach ($inventory as $item => $data) {
        $total += $data["quantity"] * $data["price"];
    }
    return $total;
}

$check_items = ["Apple", "Mango", "Pineapple"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Inventory Checker</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f8;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        padding: 20px;
        text-align: center;
        flex-direction: column;
    }
    .inventory-box {
        background: white;
        padding: 30px 40px;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        max-width: 450px;
        width: 100%;
    }
    h1 {
        color: #5a67d8;
        margin-bottom: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        font-size: 1em;
    }
    th {
        background: #5a67d8;
        color: white;
    }
    p {
        font-size: 1.1em;
        margin: 10px 0;
    }
    strong {
        color: #2c3e50;
    }
    .note {
        margin-top: 20px;
        font-size: 0.9em;
        color: #777;
        font-style: italic;
    }
</style>
</head>
<body>
    <div class="inventory-box">
        <h1>Inventory List</h1>
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Price (₹)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inventory as $item => $data): ?>
                <tr>
                    <td><?= htmlspecialchars($item) ?></td>
                    <td><?= $data["quantity"] ?></td>
                    <td><?= number_format($data["price"], 2) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>Inventory Queries</h2>

        <?php foreach ($check_items as $item): ?>
            <p>
                Checking <strong><?= htmlspecialchars($item) ?></strong>: 
                <?= is_in_stock($item, $inventory) ? "In Stock (Qty: " . get_quantity($item, $inventory) . ")" : "Out of Stock or Not Available" ?>
            </p>
        <?php endforeach; ?>

        <hr style="margin: 20px 0;">

        <p>Total Inventory Value:</p>
        <p><strong>₹ <?= number_format(total_inventory_value($inventory), 2) ?></strong></p>

        <div class="note">
            <p>This demonstrates using associative arrays and functions to manage and query inventory efficiently.</p>
        </div>
    </div>
</body>
</html>
