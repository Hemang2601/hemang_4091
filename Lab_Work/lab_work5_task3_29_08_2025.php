<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Lab 3: Name Formatting for Certificates</h2>";

$formattedName = '';
$name = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['fullname']);
    $lowercaseName = strtolower($name);
    $words = explode(' ', $lowercaseName);
    foreach ($words as &$word) {
        $word = ucfirst($word);
    }
    unset($word); 

    $formattedName = implode(' ', $words);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Name Formatter</title>
<style>
    body {
        font-family: Arial, sans-serif;
        max-width: 600px;
        margin: 40px auto;
        padding: 20px;
        color: #2c3e50;
        background: #f9f9f9;
    }
    form {
        margin-bottom: 30px;
    }
    input[type="text"] {
        width: 100%;
        padding: 10px;
        font-size: 1rem;
        border: 1px solid #3498db;
        border-radius: 5px;
        margin-bottom: 15px;
    }
    button {
        padding: 10px 20px;
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
    }
    .result {
        background: #eafaf1;
        padding: 15px;
        border-left: 6px solid #27ae60;
        font-size: 1.2rem;
        font-weight: 600;
    }
</style>
</head>
<body>

<form method="POST" action="">
    <label for="fullname">Enter Full Name:</label>
    <input type="text" name="fullname" id="fullname" placeholder="e.g. HeMANg LAkHadIYa" required value="<?= htmlspecialchars($name) ?>" />
    <button type="submit">Format Name</button>
</form>

<?php if ($formattedName): ?>
    <div class="result">Formatted Name: <?= htmlspecialchars($formattedName) ?></div>
<?php endif; ?>

</body>
</html>
