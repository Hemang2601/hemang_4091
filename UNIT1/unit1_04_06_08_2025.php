<?php

echo "<h2 style='text-align: center; font-family: Arial, sans-serif; margin-top: 30px;'>Month</h2>";

echo "<form method='post'>
        <table border='1' style='border-collapse: collapse; width: 300px; margin: 20px auto; font-family: Arial, sans-serif;'>
            <tr>
                <td style='padding: 8px; border: 1px solid #333; font-weight: bold;'>Enter The Month Number</td>
                <td style='padding: 8px; border: 1px solid #333;'>
                    <input type='number' name='month' placeholder='Enter the Month Number' required style='width: 100%; padding: 6px; box-sizing: border-box;'>
                </td>
            </tr>
            <tr>
                <td colspan='2' style='padding: 8px; border: 1px solid #333;'>
                    <input type='submit' name='submit' style='width: 100%; padding: 8px; background-color: #007BFF; color: white; border: none; cursor: pointer;'>
                </td>
            </tr>
";

if (isset($_REQUEST['submit'])) {
    $month_name = "";
    $month = $_REQUEST['month'];

    switch ($month) {
        case 1: 
            $month_name = "January";
            break;
        case 2: 
            $month_name = "February"; 
            break;
        case 3: 
            $month_name = "March"; 
            break;
        case 4: 
            $month_name = "April"; 
            break;
        case 5: 
            $month_name = "May"; 
            break;
        case 6: 
            $month_name = "June"; 
            break;
        case 7: 
            $month_name = "July"; 
            break;
        case 8: 
            $month_name = "August"; 
            break;
        case 9: 
            $month_name = "September"; 
            break;
        case 10: 
            $month_name = "October"; 
            break;
        case 11: 
            $month_name = "November"; 
            break;
        case 12: 
            $month_name = "December"; 
            break;
        default: 
        $month_name = "Invalid month number";
    }

    echo "
        <tr>
            <td style='padding: 8px; border: 1px solid #333; font-weight: bold;'>Month Name</td>
            <td style='padding: 8px; border: 1px solid #333;'>$month_name</td>
        </tr>
    ";
}

echo "</table></form>";
?>
