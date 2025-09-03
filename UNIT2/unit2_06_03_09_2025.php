<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Simple Calculator using User Defined Function</h2>";

function calculator($num1, $num2, $operator) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) return "Error: Division by zero!";
            return $num1 / $num2;
        default:
            return "Invalid operator!";
    }
}

$result = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 0;
    $operator = isset($_POST['operator']) ? $_POST['operator'] : '+';

    $result = calculator($num1, $num2, $operator);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Calculator - Modern Design</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

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

    .form-wrapper {
        width: 100%;
        max-width: 450px;
        background: white;
        padding: 30px 25px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    
    input[type="number"], select {
        padding: 12px 15px;
        font-size: 1rem;
        border: 2px solid #2980b9;
        border-radius: 6px;
        outline: none;
        transition: border-color 0.3s ease;
        color: #34495e;
    }
    input[type="number"]:focus, select:focus {
        border-color: #3498db;
    }

    button {
        padding: 14px;
        background-color: #2980b9;
        color: white;
        font-size: 1.1rem;
        font-weight: 600;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    button:hover {
        background-color: #3498db;
    }

    .result-box {
        margin-top: 30px;
        padding: 15px 20px;
        background-color: #d1f0d1;
        border: 1px solid #27ae60;
        color: #27ae60;
        font-weight: 600;
        border-radius: 6px;
        text-align: center;
        font-size: 1.25rem;
    }

    /* Responsive */
    @media (max-width: 480px) {
        .form-wrapper {
            padding: 20px 15px;
        }
        input[type="number"], select, button {
            font-size: 1rem;
        }
    }
</style>
</head>
<body>

<div class="form-wrapper">
    <form method="post" action="">
        <input type="number" name="num1" step="any" placeholder="Enter first number" required value="<?= isset($num1) ? htmlspecialchars($num1) : '' ?>">

        <select name="operator" required>
            <option value="+" <?= (isset($operator) && $operator === '+') ? 'selected' : '' ?>>Addition (+)</option>
            <option value="-" <?= (isset($operator) && $operator === '-') ? 'selected' : '' ?>>Subtraction (-)</option>
            <option value="*" <?= (isset($operator) && $operator === '*') ? 'selected' : '' ?>>Multiplication (×)</option>
            <option value="/" <?= (isset($operator) && $operator === '/') ? 'selected' : '' ?>>Division (÷)</option>
        </select>

        <input type="number" name="num2" step="any" placeholder="Enter second number" required value="<?= isset($num2) ? htmlspecialchars($num2) : '' ?>">

        <button type="submit">Calculate</button>
    </form>

    <?php if ($result !== null): ?>
        <div class="result-box">
            Result: <?= is_numeric($result) ? number_format($result, 4) : htmlspecialchars($result) ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
