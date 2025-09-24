<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Grade Calculator: Demonstrating Variable Scope</h2>";

$assignment = 85;
$midterm = 78;
$final_exam = 92;

$final_grade = 0;

function calculate_final_grade_global() {
    global $assignment, $midterm, $final_exam, $final_grade;
    $final_grade = ($assignment * 0.3) + ($midterm * 0.3) + ($final_exam * 0.4);
}

function calculate_final_grade_local($assignment, $midterm, $final_exam) {
    return ($assignment * 0.3) + ($midterm * 0.3) + ($final_exam * 0.4);
}

calculate_final_grade_global();

$local_final_grade = calculate_final_grade_local($assignment, $midterm, $final_exam);

function letter_grade($score) {
    if ($score >= 90) return "A";
    if ($score >= 80) return "B";
    if ($score >= 70) return "C";
    if ($score >= 60) return "D";
    return "F";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Grade Calculator: Variable Scope</title>
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
    .calculator-box {
        background: white;
        padding: 30px 40px;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        max-width: 400px;
        width: 100%;
    }
    h1 {
        color: #5a67d8;
        margin-bottom: 20px;
    }
    p {
        font-size: 1.2em;
        margin: 10px 0;
    }
    strong {
        color: #2c3e50;
        font-size: 1.5em;
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
    <div class="calculator-box">
        <h1>Grade Calculator</h1>
        <p>Grades used:</p>
        <p><strong>Assignment:</strong> <?= $assignment ?></p>
        <p><strong>Midterm:</strong> <?= $midterm ?></p>
        <p><strong>Final Exam:</strong> <?= $final_exam ?></p>

        <hr style="margin: 20px 0;">

        <p>Final Grade (using <strong>global</strong> variables):</p>
        <p><strong><?= number_format($final_grade, 2) ?>%</strong> (<?= letter_grade($final_grade) ?>)</p>

        <p>Final Grade (using <strong>local</strong> variables):</p>
        <p><strong><?= number_format($local_final_grade, 2) ?>%</strong> (<?= letter_grade($local_final_grade) ?>)</p>

        <div class="note">
            <p>Note: This demonstrates the difference between using global variables inside a function and passing variables as parameters (local scope).</p>
        </div>
    </div>
</body>
</html>
