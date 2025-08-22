<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Sort Numbers Entered by User</h2>";

$sortedArray = [];
if (isset($_POST['numbers'])) {
    $input = $_POST['numbers'];
    $array = array_map('trim', explode(',', $input));
    sort($array, SORT_NUMERIC);
    $sortedArray = $array;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Sort Array</title>
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
        text-align: center;
    }
    h2 {
        color: #2c3e50;
        font-weight: 600;
        margin-bottom: 40px;
    }
    form {
        background: white;
        padding: 25px 30px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        border-radius: 8px;
        max-width: 600px;
        width: 100%;
        margin-bottom: 40px;
    }
    input[type="text"] {
        width: 80%;
        padding: 12px 15px;
        font-size: 1rem;
        border: 2px solid #2980b9;
        border-radius: 6px;
        margin-right: 10px;
        outline: none;
        transition: border-color 0.3s ease;
    }
    input[type="text"]:focus {
        border-color: #3498db;
    }
    button {
        padding: 12px 25px;
        background-color: #2980b9;
        color: white;
        border: none;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    button:hover {
        background-color: #3498db;
    }
    .result {
        background: white;
        padding: 20px 30px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        border-radius: 8px;
        max-width: 600px;
        width: 100%;
        font-weight: 600;
        color: #27ae60;
        font-size: 1.2rem;
    }
</style>
</head>
<body>

<form method="post">
    <input type="text" name="numbers" placeholder="Enter numbers separated by commas" value="<?= isset($input) ? htmlspecialchars($input) : '' ?>" required />
    <button type="submit">Sort</button>
</form>

<?php if ($sortedArray): ?>
<div class="result">
    Sorted Array: <?= implode(', ', $sortedArray) ?>
</div>
<?php endif; ?>

</body>
</html>
