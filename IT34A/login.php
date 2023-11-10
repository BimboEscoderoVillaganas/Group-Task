<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <form action="db/login_db.php" method="post">
        <label for="Email">Email:</label>
        <input type="email" id="Email" name="Email" required>

        <label for="Password">Password:</label>
        <input type="password" id="Password" name="Password" required>

        <button type="submit">Login</button>
    </form>
</body>
</html>
