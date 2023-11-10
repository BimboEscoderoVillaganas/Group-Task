<?php
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['First_Name'];
    $last_name = $_POST['Last_Name'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $confirm_password = $_POST['Confirm_Password'];


   
    $stmt = $conn->prepare('INSERT INTO user_accounts (First_Name, Last_Name, Email, Password) VALUES (?, ?, ?, ?)');
    $stmt->execute([$first_name, $last_name, $email, $password]);

    #header("Location: pages/home/home_main.php"); 
    header("Location: ../home.php"); 
    exit();
}
?>
