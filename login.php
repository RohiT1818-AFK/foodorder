<?php
session_start();
include "db.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {    

    $user = $_POST["username"];
    $password = $_POST["password"]; 

    // Sanitize inputs
    $user = mysqli_real_escape_string($conn, $user);
    $password = mysqli_real_escape_string($conn, $password);

    // Properly quoted SQL for strings
    $sql = "SELECT * FROM `user` WHERE `name`='$user' AND `password`='$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Set session variables
        $_SESSION['username'] = $row['name'];
        $_SESSION['user_id'] = $row['id'];

        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>
