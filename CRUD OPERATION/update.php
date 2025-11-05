<?php
include('config.php');


if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

$id = $mysqli->real_escape_string($_GET['id']);
$res = $mysqli->query("SELECT * FROM employees WHERE id=$id");
$row = $res->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $mysqli->real_escape_string($_POST['name']);
    $address = $mysqli->real_escape_string($_POST['address']);
    $salary = $mysqli->real_escape_string($_POST['salary']);

    $mysqli->query("UPDATE employees SET name='$name', address='$address', salary='$salary' WHERE id=$id");

    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Employee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 100%;
            max-width: 420px;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-size: 26px;
        }

        .form-container input[type="text"],
        .form-container input[type="number"] {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: none;
            border-radius: 8px;
            background-color: #f5f5f5;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .form-container input:focus {
            background-color: #e0e0e0;
            outline: none;
        }

        .form-container button {
            width: 100%;
            padding: 14px;
            background-color: #ffc107;
            border: none;
            border-radius: 8px;
            color: #333;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container button:hover {
            background-color: #e0a800;
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 30px 20px;
            }

            .form-container h2 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Update Employee</h2>
        <form method="POST">
            <input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Full Name" required>
            <input type="text" name="address" value="<?php echo $row['address']; ?>" placeholder="Address" required>
            <input type="number" name="salary" value="<?php echo $row['salary']; ?>" placeholder="Monthly Salary (₹)" required>
            <button type="submit">Update Employee</button>
        </form>
    </div>
</body>
</html>
