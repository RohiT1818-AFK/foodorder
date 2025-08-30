<?php
@include(db.php);

$id = $_GET['id']??'';

$sql = "SELECT * FROM `food-odering-system` WHERE id = $id";
$res = $conn->query($sql);
$result = $res->fetch_assoc();

$id = $result['id'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
