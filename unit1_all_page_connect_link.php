<?php  
$units = [
    'Unit 1' => [
        ['Student Marksheet', 'UNIT1/unit1_01_30_07_2025.php'],
        ['Max/Min Calculator', 'UNIT1/unit1_02_01_08_2025.php'],
        ['Arithmetic Operations', 'UNIT1/unit1_03_01_08_2025.php'],
        ['Month Name Finder', 'UNIT1/unit1_04_06_08_2025.php'],
        ['For and ForEach Loop', 'UNIT1/unit1_05_06_08_2025.php'],
        ['While and Do While Loop', 'UNIT1/unit1_06_06_08_2025.php'],
        ['Include and Require Function', 'UNIT1/unit1_07_06_08_2025.php'],
        ['Array with Various Function', 'UNIT1/unit1_08_08_08_2025.php'],
    ],
    'Unit 2' => [
        ['Numeric, Associative, Multidimensional Array', 'UNIT2/unit2_01_22_08_2025.php'],
        ['Sorting An Array Entered By User', 'UNIT2/unit2_02_22_08_2025.php'],
        ['PHP Array Functions Demonstration', 'UNIT2/unit2_03_03_09_2025.php'],
        ['PHP String Functions Demonstration', 'UNIT2/unit2_04_03_09_2025.php'],
        ['PHP Type Casting with settype() and gettype()', 'UNIT2/unit2_05_03_09_2025.php'],
        ['Simple Calculator using User Defined Function', 'UNIT2/unit2_06_03_09_2025.php'],
        
    ],
    'Unit 3' => [
        ['Program X', '#'],
    ],
    'Unit 4' => [
        ['Program Alpha', '#'],

    ],
    'Unit 5' => [
        ['Program One', '#'],

    ],
    'Lab Work' => [
        ['Lab 1: User Input Sanitization for Web Forms', 'Lab_Work/lab_work5_task1_29_08_2025.php'],
        ['Lab 2: Secure Token Generation for Password Reset', 'Lab_Work/lab_work5_task2_29_08_2025.php'],
        ['Lab 3: Name Formatting for Certificates', 'Lab_Work/lab_work5_task3_29_08_2025.php'],
        ['Lab 4: CSV Parsing for Batch Evaluation', 'Lab_Work/lab_work5_task4_29_08_2025.php'],
        ['Lab 5: Comment Moderation System', 'Lab_Work/lab_work5_task5_29_08_2025.php'],
        
    ],
    'MCA Practical’s based on Unit-2' => [
        ['User Authentication Using Functions', 'MCA Practical’s based on Unit-2/MCA_UNIT02_01_10-09-2025.php'],
        ['Event Countdown Using Date and Time Functions', 'MCA Practical’s based on Unit-2/MCA_UNIT02_02_10-09-2025.php'],
        ['Survey Data Analysis Using Arrays and Functions', 'MCA Practical’s based on Unit-2/MCA_UNIT02_03_10-09-2025.php'],
        ['Plugin System with Function Existence Check', 'MCA Practical’s based on Unit-2/MCA_UNIT02_04_10-09-2025.php'],
        ['Resume Generator Using String Formatting', 'MCA Practical’s based on Unit-2/MCA_UNIT02_05_10-09-2025.php'],
        ['Academic Calendar Display', 'MCA Practical’s based on Unit-2/MCA_UNIT02_06_10-09-2025.php'],

    ],
];

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
echo "<title>Programs List by Unit</title>";
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
        margin: 40px auto;
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
    a.button-link {
        display: inline-block;
        padding: 8px 18px;
        background-color: #3366cc;
        color: white;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        font-size: 14px;
        transition: background-color 0.3s ease;
    }
    a.button-link:hover {
        background-color: #254d99;
    }
</style>";
echo "</head>";
echo "<body>";

foreach ($units as $unitName => $programs) {
    echo "<table>";
    echo "<caption>$unitName Programs</caption>";
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
        // Button-style link with label "Open Program"
        echo "<td><a href='$link' target='_blank' rel='noopener noreferrer' class='button-link'>Open Program</a></td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
}

echo "</body>";
echo "</html>";