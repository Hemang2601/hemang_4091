<?php

echo "<h2 style='
        text-align: center; 
        font-family: Arial, sans-serif; 
        margin-top: 40px; 
        color: #003366;
        text-transform: uppercase;
        letter-spacing: 2px;
        border-bottom: 2px solid #003366;
        padding-bottom: 10px;
    '>Include and Require Function</h2>";

echo "<div style='
        max-width: 700px; 
        margin: 30px auto; 
        font-family: Arial, sans-serif; 
        background-color: #f0f8ff; 
        border: 1px solid #99bbff; 
        border-radius: 8px; 
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0,0,102,0.1);
    '>";

// Section for include
echo "<h3 style='
        color: #1a237e; 
        border-bottom: 1px solid #99bbff; 
        padding-bottom: 8px;
    '>Using <span style='color:#3366cc;'>include</span>:</h3>";
include 'unit1_07(1)_06_08_2025.php';

// Section for require
echo "<h3 style='
        color: #1a237e; 
        border-bottom: 1px solid #99bbff; 
        padding-bottom: 8px; 
        margin-top: 30px;
    '>Using <span style='color:#3366cc;'>require</span>:</h3>";
require 'unit1_07(2)_06_08_2025.php';

echo "</div>";
?>
