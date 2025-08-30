<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food-ordering-system";

session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['create'])) {
   $name = $_POST["name"] ?? '';
  $orderdate= $_POST['date'] ?? "";
  $location = $_POST['location'] ?? "";
   

  $sql = "INSERT INTO `add-data` (`user`,`order-date`,`location`,)VALUES
  ('$name','$orderdate','$location')";

  if ($conn->query($sql) === TRUE) {
    echo "data inserted ";
    header("location: dashboard.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}