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
        ['Grade Calculator Demonstrating Variable Scope', 'MCA Practical’s based on Unit-2/MCA_UNIT02_07_24-09-2025.php'],
        ['Inventory Checker Using Arrays and Functions', 'MCA Practical’s based on Unit-2/MCA_UNIT02_08_24-09-2025.php'],
        ['Date Difference Calculator Using DateTime', 'MCA Practical’s based on Unit-2/MCA_UNIT02_09_26-09-2025.php'],
        ['Keyword Search in Research Abstracts', 'MCA Practical’s based on Unit-2/MCA_UNIT02_10_26-09-2025.php'],
    ],
];

function to_anchor_id($str) {
    $str = strtolower($str);
    $str = preg_replace('/[^a-z0-9\s-]/', '', $str);
    $str = preg_replace('/\s+/', '-', trim($str));
    return $str;
}

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
echo "<title>Academic Programs Catalog</title>";
echo "<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap');

    :root {
        --clr-bg: #f7f9fc;
        --clr-sidebar-bg: #1f2937;
        --clr-sidebar-text: #e0e7ff;
        --clr-primary: #3b82f6;
        --clr-primary-hover: #2563eb;
        --clr-accent: #10b981;
        --clr-accent-hover: #059669;
        --clr-text-main: #111827;
        --clr-text-muted: #6b7280;
        --clr-table-header: #2563eb;
        --clr-table-row-hover: #dbeafe;
        --clr-border: #d1d5db;
    }

    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: 'Inter', sans-serif;
        background: var(--clr-bg);
        color: var(--clr-text-main);
        display: flex;
        min-height: 100vh;
        overflow-x: hidden;
    }

    /* Sidebar */
    nav#sidebar {
        position: sticky;
        top: 0;
        height: 100vh;
        width: 260px;
        background: var(--clr-sidebar-bg);
        padding: 2rem 1rem;
        display: flex;
        flex-direction: column;
        color: var(--clr-sidebar-text);
        box-shadow: 2px 0 10px rgba(0,0,0,0.3);
        z-index: 1000;
    }
    nav#sidebar h1 {
        font-size: 1.75rem;
        font-weight: 700;
        margin-bottom: 2rem;
        letter-spacing: 0.05em;
        user-select: none;
        text-align: center;
        color: var(--clr-primary);
        font-family: 'JetBrains Mono', monospace;
    }
    nav#sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0;
        flex-grow: 1;
        overflow-y: auto;
    }
    nav#sidebar ul li {
        margin-bottom: 1.1rem;
    }
    nav#sidebar ul li a {
        color: var(--clr-sidebar-text);
        text-decoration: none;
        font-weight: 600;
        font-size: 1rem;
        padding: 0.6rem 1rem;
        border-radius: 6px;
        display: block;
        transition: background-color 0.3s ease, color 0.3s ease;
        font-family: 'Inter', sans-serif;
        user-select: none;
    }
    nav#sidebar ul li a:hover,
    nav#sidebar ul li a:focus {
        background: var(--clr-primary);
        color: var(--clr-bg);
        outline: none;
        box-shadow: 0 0 10px var(--clr-primary);
    }

    /* Main content */
    main#content {
        flex-grow: 1;
        padding: 3rem 3rem 4rem 3rem;
        max-width: 1000px;
        margin: auto;
        overflow-y: auto;
    }

    main#content h2.section-title {
        font-family: 'JetBrains Mono', monospace;
        font-weight: 700;
        font-size: 2rem;
        color: var(--clr-primary);
        margin-bottom: 1rem;
        user-select: none;
        border-bottom: 2px solid var(--clr-primary);
        padding-bottom: 0.3rem;
    }

    table.program-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        margin-bottom: 3rem;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(59,130,246,0.15);
        background: #fff;
        font-size: 1rem;
        font-family: 'Inter', sans-serif;
    }
    table.program-table caption {
        font-weight: 700;
        font-size: 1.5rem;
        padding: 1.2rem 0;
        color: var(--clr-primary);
        user-select: none;
        letter-spacing: 0.05em;
        border-bottom: 2px solid var(--clr-primary);
        text-align: left;
        padding-left: 1.5rem;
    }
    table.program-table thead {
        background-color: var(--clr-table-header);
        color: white;
        font-weight: 700;
    }
    table.program-table thead th {
        padding: 1rem 1.2rem;
        text-align: left;
        user-select: none;
    }
    table.program-table tbody tr {
        border-bottom: 1px solid var(--clr-border);
        transition: background-color 0.3s ease;
        cursor: default;
    }
    table.program-table tbody tr:hover {
        background-color: var(--clr-table-row-hover);
    }
    table.program-table tbody td {
        padding: 0.85rem 1.2rem;
        vertical-align: middle;
        color: var(--clr-text-main);
    }
    table.program-table tbody td:first-child {
        font-weight: 600;
        width: 50px;
        color: var(--clr-primary);
        user-select: none;
    }
    table.program-table tbody td:nth-child(2) {
        font-weight: 600;
    }
    table.program-table tbody td a.button-link {
        background-color: var(--clr-accent);
        color: white;
        padding: 0.4rem 0.8rem;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        user-select: none;
        transition: background-color 0.3s ease;
        display: inline-block;
        text-align: center;
        min-width: 80px;
        cursor: pointer;
    }
    table.program-table tbody td a.button-link:hover,
    table.program-table tbody td a.button-link:focus {
        background-color: var(--clr-accent-hover);
        outline: none;
    }

    /* Scrollbar for sidebar */
    nav#sidebar ul::-webkit-scrollbar {
        width: 8px;
    }
    nav#sidebar ul::-webkit-scrollbar-thumb {
        background-color: var(--clr-primary);
        border-radius: 10px;
    }
    nav#sidebar ul::-webkit-scrollbar-track {
        background: transparent;
    }

    /* Responsive */
    @media (max-width: 900px) {
        body {
            flex-direction: column;
        }
        nav#sidebar {
            position: relative;
            width: 100%;
            height: auto;
            box-shadow: none;
            padding: 1rem 0.5rem;
            display: flex;
            overflow-x: auto;
            overflow-y: hidden;
        }
        nav#sidebar h1 {
            flex-shrink: 0;
            margin-right: 2rem;
            font-size: 1.5rem;
            padding-left: 1rem;
        }
        nav#sidebar ul {
            display: flex;
            flex-wrap: nowrap;
            gap: 1rem;
            overflow-x: auto;
            margin: 0;
            padding: 0;
            flex-grow: 1;
            scrollbar-width: thin;
            scrollbar-color: var(--clr-primary) transparent;
        }
        nav#sidebar ul li {
            margin-bottom: 0;
        }
        nav#sidebar ul li a {
            white-space: nowrap;
            font-size: 0.9rem;
            padding: 0.6rem 1rem;
            border-radius: 10px;
            background-color: var(--clr-primary);
            color: var(--clr-bg);
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        nav#sidebar ul li a:hover,
        nav#sidebar ul li a:focus {
            background-color: var(--clr-primary-hover);
            color: var(--clr-bg);
        }
        main#content {
            padding: 2rem 1rem 3rem 1rem;
            max-width: 100%;
            margin: 0;
        }
        table.program-table caption {
            font-size: 1.25rem;
            padding-left: 1rem;
        }
        table.program-table thead th,
        table.program-table tbody td {
            padding: 0.6rem 0.8rem;
            font-size: 0.9rem;
        }
        table.program-table tbody td a.button-link {
            min-width: 65px;
            font-size: 0.85rem;
            padding: 0.3rem 0.6rem;
        }
    }

    /* Modal popup styles */
    #modalOverlay {
        position: fixed;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0,0,0,0.6);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 2000;
        animation: fadeIn 0.3s ease forwards;
    }
    #modalContent {
        position: relative;
        width: 90%;
        max-width: 1000px;
        height: 80vh;
        background: white;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.25);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        animation: slideUp 0.3s ease forwards;
    }
    #modalContent iframe {
        flex-grow: 1;
        border: none;
        border-radius: 0 0 12px 12px;
        width: 100%;
        height: 100%;
    }
    #modalCloseBtn {
        background: var(--clr-primary);
        color: white;
        border: none;
        font-size: 1.2rem;
        font-weight: 700;
        padding: 0.6rem 1.2rem;
        cursor: pointer;
        border-radius: 12px 12px 0 0;
        user-select: none;
        transition: background-color 0.3s ease;
        align-self: flex-end;
    }
    #modalCloseBtn:hover,
    #modalCloseBtn:focus {
        background: var(--clr-primary-hover);
        outline: none;
    }

    @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
    }
    @keyframes slideUp {
        from {transform: translateY(20px);}
        to {transform: translateY(0);}
    }
</style>";

echo "</head>";
echo "<body>";

echo "<nav id='sidebar'>";
echo "<h1>Programs</h1>";
echo "<ul>";
foreach ($units as $unitName => $_) {
    $anchor = to_anchor_id($unitName);
    echo "<li><a href='#$anchor'>$unitName</a></li>";
}
echo "</ul>";
echo "</nav>";

echo "<main id='content'>";
foreach ($units as $unitName => $programs) {
    $anchor = to_anchor_id($unitName);
    echo "<section id='$anchor'>";
    echo "<h2 class='section-title'>$unitName</h2>";
    echo "<table class='program-table'>";
    echo "<caption>$unitName Programs</caption>";
    echo "<thead>";
    echo "<tr><th>No.</th><th>Program Name</th><th>Open</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($programs as $index => $program) {
        $progName = htmlspecialchars($program[0]);
        $progLink = htmlspecialchars($program[1]);
        echo "<tr>";
        echo "<td>" . ($index + 1) . "</td>";
        echo "<td>$progName</td>";
        if ($progLink === '#') {
            echo "<td style='color:#9ca3af; font-style:italic;'>Coming Soon</td>";
        } else {
            // Use a button-link with data-url for JS popup
            echo "<td><a href='#' class='button-link open-popup' data-url='$progLink' tabindex='0'>Open</a></td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</section>";
}
echo "</main>";


// Modal popup container
echo <<<HTML
<div id="modalOverlay" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div id="modalContent">
        <button id="modalCloseBtn" aria-label="Close popup">&times; Close</button>
        <iframe src="" frameborder="0" title="Program Content"></iframe>
    </div>
</div>
HTML;

echo "<script>
document.addEventListener('DOMContentLoaded', function() {
    const modalOverlay = document.getElementById('modalOverlay');
    const modalCloseBtn = document.getElementById('modalCloseBtn');
    const iframe = modalOverlay.querySelector('iframe');
    const openLinks = document.querySelectorAll('.open-popup');

    openLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const url = this.getAttribute('data-url');
            iframe.src = url;
            modalOverlay.style.display = 'flex';
            modalCloseBtn.focus();
            document.body.style.overflow = 'hidden'; // prevent background scroll
        });
    });

    modalCloseBtn.addEventListener('click', function() {
        iframe.src = '';
        modalOverlay.style.display = 'none';
        document.body.style.overflow = ''; // restore scroll
    });

    // Close popup if click outside modalContent
    modalOverlay.addEventListener('click', function(e) {
        if (e.target === modalOverlay) {
            modalCloseBtn.click();
        }
    });

    // Close popup on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modalOverlay.style.display === 'flex') {
            modalCloseBtn.click();
        }
    });
});
</script>";

echo "</body>";
echo "</html>";
?>
