<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Keyword Search in Research Abstracts</h2>";

$abstracts = [
    "This study explores the impact of climate change on coastal ecosystems and biodiversity.",
    "We propose a novel machine learning algorithm for predicting stock market trends.",
    "The research investigates renewable energy adoption in rural communities across India.",
    "An analysis of blockchain technology and its implications for secure data transactions.",
];

$keywords = ["climate", "machine learning", "blockchain", "energy"];

function search_keywords($abstracts, $keywords) {
    $results = [];
    foreach ($abstracts as $index => $text) {
        foreach ($keywords as $keyword) {
            if (stripos($text, $keyword) !== false) {
                $results[] = [
                    "abstract" => $text,
                    "keyword" => $keyword,
                    "context" => get_context($text, $keyword)
                ];
            }
        }
    }
    return $results;
}

function get_context($text, $keyword) {
    $pos = stripos($text, $keyword);
    if ($pos !== false) {
        $start = max(0, $pos - 30);
        $length = strlen($keyword) + 60;
        return "..." . substr($text, $start, $length) . "...";
    }
    return "";
}

$matches = search_keywords($abstracts, $keywords);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Keyword Search</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f8;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        height: auto;
        margin: 0;
        padding: 20px;
        text-align: center;
        flex-direction: column;
    }
    .search-box {
        background: white;
        padding: 30px 40px;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        max-width: 700px;
        width: 100%;
    }
    h1 {
        color: #5a67d8;
        margin-bottom: 20px;
    }
    .result {
        margin-bottom: 20px;
        text-align: left;
    }
    .keyword {
        font-weight: bold;
        color: #2c3e50;
    }
    .context {
        font-style: italic;
        color: #555;
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
    <div class="search-box">
        <h1>Keyword Search Results</h1>

        <?php if (count($matches) > 0): ?>
            <?php foreach ($matches as $match): ?>
                <div class="result">
                    <p><span class="keyword">Keyword:</span> <?= htmlspecialchars($match["keyword"]) ?></p>
                    <p><span class="context">Context:</span> <?= htmlspecialchars($match["context"]) ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No keywords found in the abstracts.</p>
        <?php endif; ?>

        <div class="note">
            <p>This demonstrates string scanning and contextual extraction using conditional logic in PHP.</p>
        </div>
    </div>
</body>
</html>
