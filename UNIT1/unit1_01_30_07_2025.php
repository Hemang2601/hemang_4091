<?php

echo "<h2 style='text-align: center; font-family: Arial, sans-serif; margin-top: 30px;'>Result</h2>";

// Your variables (unchanged)
$student_name = "Lakhadiya Hemang Sureshbhai";
$enrollment_number = 220801189;
$semester = "6 Semester";
$university_name = "Atmiya University";
$year = "April - 2025";
$program_name = "Bachelor of Computer Application";
$subject_name_1 = "Networking";
$subject_name_2 = "ASP.NET";
$subject_name_3 = "Android";
$subject_name_4 = "ASP.NET Practical";
$subject_name_5 = "Android Practical";
$subject_name_6 = "Project";
$subject_1_mark = 85;
$subject_2_mark = 90;
$subject_3_mark = 98;
$subject_4_mark = 100;
$subject_5_mark = 100;
$subject_6_mark = 100;
$max_mark = 100;
$total_marks_of_all_subject = $subject_1_mark + $subject_2_mark + $subject_3_mark + $subject_4_mark + $subject_5_mark + $subject_6_mark;
$percentage = $total_marks_of_all_subject / 600 * 100;
$tota_mark = 600;
$grade = "";
$status = "";
$class_name = "";
$cgpa = (10 * $percentage) / 100;
$sgpa = (10 * $percentage) / 100;

if (
    $subject_1_mark >= 40 && $subject_2_mark >= 40 && $subject_3_mark >= 40 &&
    $subject_4_mark >= 40 && $subject_5_mark >= 40 && $subject_6_mark >= 40
) {
    $status = "PASS";
    if ($percentage > 90) {
        $grade = "O";
        $class_name = "Distinction";
    }
    if ($percentage > 80 && $percentage <= 90) {
        $grade = "A";
        $class_name = "First";
    }
    if ($percentage > 70 && $percentage <= 80) {
        $grade = "B";
        $class_name = "Second";
    }
    if ($percentage > 40 && $percentage <= 70) {
        $grade = "C";
        $class_name = "Pass";
    }
} else {
    $grade = "Fail";
    $status = "Fail";
    $class_name = "Fail";
}

echo "<table border='1' style='border-collapse: collapse; width: 700px; margin: 20px auto; font-family: Arial, sans-serif;'>
        <tr style='background-color: #f2f2f2;'>
            <td style='padding: 10px; border: 1px solid #333;'>Student Name</td>
            <td colspan='3' style='padding: 10px; border: 1px solid #333;'>$student_name</td>
        </tr>
        <tr>
            <td style='padding: 10px; border: 1px solid #333;'>Program Name</td>
            <td style='padding: 10px; border: 1px solid #333;'>$program_name</td>
            <td style='padding: 10px; border: 1px solid #333;'>Semester No</td>
            <td style='padding: 10px; border: 1px solid #333;'>$semester</td>
        </tr>
        <tr>
            <td style='padding: 10px; border: 1px solid #333;'>Enrollment No</td>
            <td style='padding: 10px; border: 1px solid #333;'>$enrollment_number</td>
            <td style='padding: 10px; border: 1px solid #333;'>Examination</td>
            <td style='padding: 10px; border: 1px solid #333;'>$year</td>
        </tr>
        <tr style='background-color: #f2f2f2; font-weight: bold; text-align: center;'>
            <td style='padding: 10px; border: 1px solid #333;'>Subject No</td>
            <td style='padding: 10px; border: 1px solid #333;'>Subject</td>
            <td style='padding: 10px; border: 1px solid #333;'>Maximum</td>
            <td style='padding: 10px; border: 1px solid #333;'>Mark</td>
        </tr>
        <tr>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>1</td>
            <td style='padding: 10px; border: 1px solid #333;'>$subject_name_1</td>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>$max_mark</td>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>$subject_1_mark</td>
        </tr>
        <tr>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>2</td>
            <td style='padding: 10px; border: 1px solid #333;'>$subject_name_2</td>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>$max_mark</td>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>$subject_2_mark</td>
        </tr>
        <tr>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>3</td>
            <td style='padding: 10px; border: 1px solid #333;'>$subject_name_3</td>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>$max_mark</td>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>$subject_3_mark</td>
        </tr>
        <tr>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>4</td>
            <td style='padding: 10px; border: 1px solid #333;'>$subject_name_4</td>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>$max_mark</td>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>$subject_4_mark</td>
        </tr>
        <tr>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>5</td>
            <td style='padding: 10px; border: 1px solid #333;'>$subject_name_5</td>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>$max_mark</td>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>$subject_5_mark</td>
        </tr>
        <tr>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>6</td>
            <td style='padding: 10px; border: 1px solid #333;'>$subject_name_6</td>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>$max_mark</td>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>$subject_6_mark</td>
        </tr>
        <tr style='font-weight: bold;'>
            <td colspan='3' style='padding: 10px; border: 1px solid #333; text-align: center;'>Total Mark</td>
            <td style='padding: 10px; border: 1px solid #333; text-align: center;'>$total_marks_of_all_subject</td>
        </tr>
        <tr>
            <td style='padding: 10px; border: 1px solid #333;'>Percentage</td>
            <td style='padding: 10px; border: 1px solid #333;'>".number_format($percentage, 2)." %</td>
            <td style='padding: 10px; border: 1px solid #333;'>Status</td>
            <td style='padding: 10px; border: 1px solid #333;'>$status</td>
        </tr>
        <tr>
            <td style='padding: 10px; border: 1px solid #333;'>Grade</td>
            <td style='padding: 10px; border: 1px solid #333;'>$grade</td>
            <td style='padding: 10px; border: 1px solid #333;'>Class</td>
            <td style='padding: 10px; border: 1px solid #333;'>$class_name</td>
        </tr>
        <tr>
            <td style='padding: 10px; border: 1px solid #333;'>CGPA</td>
            <td style='padding: 10px; border: 1px solid #333;'>".number_format($cgpa, 2)."</td>
            <td style='padding: 10px; border: 1px solid #333;'>SGPA</td>
            <td style='padding: 10px; border: 1px solid #333;'>".number_format($sgpa, 2)."</td>
        </tr>
    </table>";
?>
