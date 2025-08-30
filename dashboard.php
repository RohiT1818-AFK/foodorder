<?php
// admin/dashboard.php
@include("db.php");

?>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Employee Dashboard</title>
    <style>
        /* Reset and base styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f7f8fa;
    color: #333;
    line-height: 1.6;
}

/* Header styles */
header {
    background-color: #2e3a59;
    color: #fff;
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header .logo {
    font-size: 24px;
    font-weight: bold;
}

header .welcome {
    font-size: 16px;
}

header a {
    color: #fff;
    text-decoration: none;
    background-color: #f05454;
    padding: 8px 15px;
    border-radius: 5px;
    transition: background 0.3s ease;
}

header a:hover {
    background-color: #d94343;
}

/* Container layout */
.container {
    display: flex;
}

/* Sidebar placeholder (if included) */
.sidebar {
    width: 220px;
    background-color: #1f2a44;
    color: #fff;
    min-height: 100vh;
    padding: 20px;
}

/* Main section */
.main {
    flex-grow: 1;
    padding: 30px;
}

/* Top bar with search and button */
.top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
}

.top-bar h2 {
    color: #2e3a59;
}

.top-controls {
    display: flex;
    align-items: center;
    gap: 10px;
}

.top-controls input[type="search"] {
    padding: 8px 12px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.top-controls .add-btn a {
    background-color: #4caf50;
    color: white;
    padding: 8px 12px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.top-controls .add-btn a:hover {
    background-color: #388e3c;
}

/* Table section */
.table-section table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.table-section th,
.table-section td {
    padding: 12px 15px;
    border: 1px solid #ddd;
    text-align: left;
}

.table-section th {
    background-color: #f4f4f4;
    color: #333;
}

.table-section tbody tr:hover {
    background-color: #f1f1f1;
}

/* Action buttons */
.edit, .delete {
    padding: 6px 12px;
    border-radius: 4px;
    text-decoration: none;
    margin-right: 5px;
    font-size: 14px;
    color: #fff;
}

.edit {
    background-color: #2196f3;
}

.edit:hover {
    background-color: #0b7dda;
}

.delete {
    background-color: #f44336;
}

.delete:hover {
    background-color: #d32f2f;
}

    </style>
    
    
</head>
<body>
    <header>
        <div class="logo">Employee MS</div>
        <div class="welcome ">Welcome,dear customer!></div>
        <a href="logout.php">Logout</a>
    </header>

    <div class="container">
      <?php 
      @include("sidebar.php");
      
      ?>
        <!-- Main Content -->
        <main class="main">
            <div class="top-bar">
                <h2>Manage Employees</h2>
                <div class="top-controls">
                    <input type="search" placeholder="Search By Employee ID" />
                    <button class="add-btn"> <a href="add-emp.php">Add New order</a></button>
                </div>
            </div>

            <div class="table-section">
                <?php
                $sql="SELECT * FROM `add-data`";
                $result=$conn->query($sql);


                ?>
                <table>
                    <thead>
                        <tr>
                            <th>order id</th>
                            <th>user</th>
                            <th> order date</th>
                            <th>location</th>
                            <th>action</th>
                           
                            
                        </tr>
                    
                    </thead>
                    <tbody>
                            <?php
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['order-id'];?></td>
                <td><?php echo $row['user'];?></td>
                <td><?php echo $row['order date'];?></td>
                <td><?php echo $row['location'];?></td>
                
                
                <td>
                    <a href="edit.php?id=<?php echo $row['id'];?>" class="edit">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id'];?>" class="delete">Delete</a>
                 
                </td>

            </tr>
            <?php
        }
        } else {
        echo "0 results";
        }
        ?>
        
                    </tbody>
                </table>

            
            </div>
        </main>
    </div>
</body>
    
</html>
