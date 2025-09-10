<?php
echo "<h2 style='text-align:center; font-family: Arial, sans-serif; margin-top:30px; margin-bottom: 40px; color: #2c3e50;'>Lab 7: Resume Generator Using String Formatting</h2>";

$resume = [
    "name" => "HEMANG LAKHADIYA",
    "email" => "hemang@gmail.com",
    "phone" => "+91-7085855404",
    "summary" => "Currently pursuing Master of Computer Applications (MCA) at Marwadi University with strong programming skills and enthusiasm for software development.",
    "skills" => ["PHP", "Java", "C++", "HTML", "CSS", "JavaScript", "MySQL"],
    "experience" => [
        [
            "role" => "Internship",
            "company" => "Rajeshwar Infotech",
            "years" => "Jun 2023 - Dec 2024",
            "description" => "Assisted in web development projects and learned real-world application of programming concepts."
        ]
    ],
    "education" => [
        [
            "degree" => "Master of Computer Applications (MCA)",
            "school" => "Marwadi University",
            "year" => "2025 - Present"
        ],
        [
            "degree" => "Bachelor of Science in Computer Science",
            "school" => "Atmiya University",
            "year" => "2022 - 2025"
        ]
    ]
];

function format_resume(array $resume): string {
    $output = "<h3>{$resume['name']}</h3>";
    $output .= "<p>Email: {$resume['email']} | Phone: {$resume['phone']}</p>";
    $output .= "<h4>Summary</h4><p>{$resume['summary']}</p>";
    
    $output .= "<h4>Skills</h4><p>" . implode(", ", $resume['skills']) . "</p>";
    
    $output .= "<h4>Experience</h4>";
    foreach ($resume['experience'] as $job) {
        $output .= "<strong>{$job['role']}</strong> at <em>{$job['company']}</em> ({$job['years']})<br>";
        $output .= "<p>{$job['description']}</p>";
    }
    
    $output .= "<h4>Education</h4>";
    foreach ($resume['education'] as $edu) {
        $output .= "<strong>{$edu['degree']}</strong>, {$edu['school']} ({$edu['year']})<br>";
    }
    
    return $output;
}

$resume_formatted = format_resume($resume);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Resume Generator</title>
<style>
    body {
        font-family: Arial, sans-serif;
        max-width: 700px;
        margin: 40px auto;
        background: #f9f9f9;
        color: #333;
        padding: 20px;
        line-height: 1.5;
    }
    h3 {
        color: #2c3e50;
        margin-bottom: 5px;
    }
    h4 {
        color: #5a67d8;
        margin-top: 20px;
        margin-bottom: 10px;
        border-bottom: 2px solid #5a67d8;
        padding-bottom: 3px;
    }
    p {
        margin: 8px 0;
    }
    strong {
        color: #333;
    }
    em {
        color: #666;
    }
</style>
</head>
<body>

<div>
    <?= $resume_formatted ?>
</div>

</body>
</html>
