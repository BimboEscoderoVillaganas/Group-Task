<?php
require_once 'connection.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $Email = $_POST['Email'];
    $password = $_POST['Password'];

    // Query to retrieve the user's password hash from the 'user_accounts' table
    $stmt = $conn->prepare('SELECT count(*) as countedUsers, id FROM user_accounts WHERE Email=? and Password=?');
    $stmt->execute([$Email, $password]);
    $result = $stmt->fetch();

    if ($result['countedUsers'] > 0) {
        $_SESSION['id'] = $result['id'];
        echo '<script type="text/javascript">';
        echo 'alert("Login Success");'; 
        echo 'window.location = "../home.php";'; // Redirect to index.php after successful login
        echo '</script>';
        exit();
    } else {
        // Use JavaScript for the failed notification
        echo '<script type="text/javascript">';
        echo 'alert("Login Failed");';
        echo 'window.location = "../login.php";'; // Redirect to index.php after successful login
        echo '</script>';
    }
    
    // Close the session
    session_destroy();
}
?>
