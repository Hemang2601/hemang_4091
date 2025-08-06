<body>
<h2 style='text-align: center; font-family: Arial, sans-serif; margin-top: 30px;'>Operators</h2>

    <form method="post" style="max-width: 300px; margin: 20px auto; font-family: Arial, sans-serif;">
        <input type="number" name="first" placeholder="Enter The First Value" 
               style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box;"><br>
        <input type="number" name="second" placeholder="Enter The Second Value" 
               style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box;"><br>
        <input type="submit" name="submit" value="SUBMIT" 
               style="width: 100%; padding: 10px; background-color: #007BFF; color: white; border: none; cursor: pointer;">
    </form>
</body>

<?php
if (isset($_REQUEST['submit'])) {
    $a = $_REQUEST['first'];
    $b = $_REQUEST['second'];

    echo "<table border='1' style='border-collapse: collapse; width: 320px; margin: 20px auto; font-family: Arial, sans-serif;'>
            <tr>
                <td style='padding: 8px; border: 1px solid #333; font-weight: bold; text-align: center;'>Operators</td>
                <td style='padding: 8px; border: 1px solid #333; font-weight: bold; text-align: center;'>Output</td>
            </tr>
            <tr>
                <td style='padding: 8px; border: 1px solid #333; text-align: center;'>+</td>
                <td style='padding: 8px; border: 1px solid #333;'>$a + $b = " . ($a + $b) . "</td>
            </tr>
            <tr>
                <td style='padding: 8px; border: 1px solid #333; text-align: center;'>-</td>
                <td style='padding: 8px; border: 1px solid #333;'>$a - $b = " . ($a - $b) . "</td>
            </tr>
            <tr>
                <td style='padding: 8px; border: 1px solid #333; text-align: center;'>*</td>
                <td style='padding: 8px; border: 1px solid #333;'>$a * $b = " . ($a * $b) . "</td>
            </tr>
            <tr>
                <td style='padding: 8px; border: 1px solid #333; text-align: center;'>/</td>
                <td style='padding: 8px; border: 1px solid #333;'>";
    
    if ($b == 0) {
        echo "Division by zero error";
    } else {
        echo "$a / $b = " . ($a / $b);
    }

    echo "</td>
            </tr>
          </table>";
}
?>
