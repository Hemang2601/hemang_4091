<?php
echo "<h2 style='text-align:center; font-family: Arial; margin-top:20px; color: #333;'>File Upload Example</h2>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["upload"])) {
    $file_name = $_FILES["upload"]["name"];
    $file_tmp = $_FILES["upload"]["tmp_name"];
    $upload_dir = "uploads/";

    // Create uploads directory if it doesn't exist
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir);
    }

    // Move file to uploads folder
    if (move_uploaded_file($file_tmp, $upload_dir . $file_name)) {
        $message = "File uploaded successfully: <strong>$file_name</strong>";
    } else {
        $message = "File upload failed.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
    <style>
        body {
            font-family: Arial;
            background: #f0f0f0;
            text-align: center;
            padding-top: 50px;
        }
        .box {
            background: white;
            padding: 20px;
            margin: auto;
            width: 350px;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
        }
        input[type="file"] {
            margin: 15px 0;
        }
        button {
            padding: 10px 20px;
            background: #5a67d8;
            color: white;
            border: none;
            border-radius: 4px;
        }
        .message {
            margin-top: 15px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="box">
        <h3>Select a File to Upload</h3>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="upload" required><br>
            <button type="submit">Upload</button>
        </form>

        <?php if (isset($message)): ?>
            <div class="message"><?= $message ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
