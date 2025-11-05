<?php
include('config.php');

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

$result = $mysqli->query("SELECT * FROM employees");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Base reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #e0eafc, #cfdef3);
            padding: 40px 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            padding: 30px;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
            font-size: 28px;
        }

        .actions {
            text-align: center;
            margin-bottom: 20px;
        }

        .actions a {
            display: inline-block;
            margin: 0 10px;
            padding: 10px 18px;
            background-color: #007bff;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .actions a:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 14px;
            border-bottom: 1px solid #e0e0e0;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
            font-weight: 600;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        .action-links a {
            margin-right: 12px;
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
        }

        .action-links a:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            th, td {
                font-size: 14px;
                padding: 10px;
            }

            .actions a {
                padding: 8px 14px;
                font-size: 14px;
            }
        }
    </style>
    <script>
        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this employee?")) {
                window.location.href = "delete.php?id=" + id;
            }
        }

        function confirmLogout() {
            return confirm("Are you sure you want to logout?");
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Employee Records</h2>
        <div class="actions">
            <a href="create.php">➕ Add Employee</a>
            <a href="logout.php" onclick="return confirmLogout()">🔒 Logout</a>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td>₹<?php echo number_format($row['salary'], 2); ?></td>
                <td class="action-links">
                    <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="javascript:void(0);" onclick="confirmDelete(<?php echo $row['id']; ?>)">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
