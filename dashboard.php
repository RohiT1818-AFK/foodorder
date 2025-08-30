<?php
// admin/dashboard.php
@include("db.php");

?>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Employee Dashboard</title>
    
    
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
                <td><?php echo $row['order'];?></td>
                <td><?php echo $row['department'];?></td>
                <td><img src="<?php echo $row['profile'];?>" width="100px"></td>
                
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
