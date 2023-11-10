<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <a href="index.php">Back to index</a>
    <h1>Welcome</h1>
    <div>
        <h3>User list</h3>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>

            <?php
            require_once 'db/connection.php';

            // Select data from the users table
            $sql = "SELECT id, First_Name, Last_Name, Email, Password FROM user_accounts";
            $result = $conn->query($sql);

            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["First_Name"] . "</td>";
                    echo "<td>" . $row["Last_Name"] . "</td>";
                    echo "<td>" . $row["Email"] . "</td>";
                    echo "<td>" . $row["Password"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>0 results</td></tr>";
            }
            ?>

        </table>
    </div>
</body>
</html>
