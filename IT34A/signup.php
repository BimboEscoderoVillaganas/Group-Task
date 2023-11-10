<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>User Registration</title>
</head>
<body>
    <form action="db/signup_db.php" method="post">
        <label for="First_Name">First Name:</label>
        <input type="text" id="First_Name" name="First_Name" required>

        <label for="Last_Name">Last Name:</label>
        <input type="text" id="Last_Name" name="Last_Name" required>

        <label for="Email">Email:</label>
        <input type="email" id="Email" name="Email" required>

        <label for="Password">Password:</label>
        <input type="password" id="Password" name="Password" required>

        <label for="Confirm_Password">Confirm Password:</label>
        <input type="password" id="Confirm_Password" name="Confirm_Password" required>

        <button type="submit">Register</button>
    </form>
    

</body>
</html>
