<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Lab 5: Comment Moderation System</h2>";

$comment = '';
$flagged = false;
$bannedWords = ['spam', 'hack', 'scam', 'phish'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $commentRaw = trim($_POST['comment']);
    $commentLower = strtolower($commentRaw);

    foreach ($bannedWords as $word) {
        if (strpos($commentLower, $word) !== false) {
            $flagged = true;
            break;
        }
    }

    $comment = htmlspecialchars($commentRaw);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Comment Moderation</title>
<style>
    body {
        font-family: Arial, sans-serif;
        max-width: 600px;
        margin: 40px auto;
        padding: 20px;
        color: #2c3e50;
        background: #f9f9f9;
    }
    textarea {
        width: 100%;
        height: 100px;
        padding: 10px;
        font-size: 1rem;
        border: 1px solid #3498db;
        border-radius: 6px;
        resize: vertical;
        margin-bottom: 15px;
    }
    button {
        padding: 10px 20px;
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 1rem;
    }
    .result {
        margin-top: 30px;
        padding: 15px;
        border-radius: 8px;
        font-weight: 600;
        line-height: 1.5;
        background: #eafaf1;
        border-left: 6px solid #27ae60;
        font-family: monospace;
    }
    .flagged {
        background: #fdecea;
        border-left-color: #e74c3c;
        color: #c0392b;
    }
</style>
</head>
<body>

<form method="POST" action="">
    <label for="comment">Enter your comment:</label>
    <textarea name="comment" id="comment" required><?= htmlspecialchars($comment) ?></textarea>
    <button type="submit">Submit</button>
</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <div class="result <?= $flagged ? 'flagged' : '' ?>">
        <?= $flagged ? "⚠️ Comment flagged due to banned words." : "✅ Comment is clean." ?><br><br>
        <?= $comment ?>
    </div>
<?php endif; ?>

</body>
</html>
