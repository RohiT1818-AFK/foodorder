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
      /* Sidebar styles */
.sidebar {
  width: 220px;
  background-color: #2c3e50; /* Dark blue-gray */
  color: #ecf0f1; /* Light text */
  min-height: calc(100vh - 60px); /* Full height minus header */
  padding: 25px 20px;
  border-radius: 8px;
  box-shadow: 2px 0 8px rgba(0,0,0,0.1);
  display: flex;
  flex-direction: column;
  gap: 20px;
  font-size: 16px;
}

/* Sidebar header or logo (if any inside sidebar) */
.sidebar .sidebar-header {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 20px;
  letter-spacing: 1px;
  text-align: center;
}

/* Sidebar navigation links */
.sidebar a {
  color: #ecf0f1;
  text-decoration: none;
  padding: 12px 15px;
  border-radius: 6px;
  transition: background-color 0.3s ease, color 0.3s ease;
  display: block;
}

.sidebar a:hover, .sidebar a.active {
  background-color: #2980b9; /* Bright blue */
  color: white;
}

/* Optional: Sidebar icons (if you have any) */
.sidebar a .icon {
  margin-right: 10px;
  vertical-align: middle;
}

/* Sidebar footer or small print */
.sidebar .sidebar-footer {
  margin-top: auto;
  font-size: 14px;
  color: #7f8c8d;
  text-align: center;
}

/* Responsive: sidebar full width on small screens */
@media (max-width: 768px) {
  .sidebar {
    width: 100%;
    min-height: auto;
    padding: 15px 10px;
    border-radius: 0;
    box-shadow: none;
  }
}

        /* Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f0f2f5;
  color: #333;
  min-height: 100vh;
}

/* Header */
header {
  background-color: #34495e;
  color: #fff;
  padding: 15px 30px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 2px 6px rgba(0,0,0,0.15);
}

header .logo {
  font-weight: 700;
  font-size: 24px;
  letter-spacing: 2px;
}

header .welcome {
  font-size: 16px;
}

header a {
  color: #fff;
  background-color: #e74c3c;
  padding: 8px 16px;
  border-radius: 5px;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

header a:hover {
  background-color: #c0392b;
}

/* Container */
.container {
  display: flex;
  min-height: calc(100vh - 60px); /* subtract header height */
  padding: 20px 30px;
  gap: 30px;
}

/* Sidebar placeholder */
.sidebar {
  width: 220px;
  background-color: #2c3e50;
  color: #ecf0f1;
  padding: 20px;
  border-radius: 8px;
  /* Optional: fixed sidebar */
  /* position: fixed;
     height: 100vh; */
}

/* Main content */
.main {
  flex-grow: 1;
  background: #fff;
  border-radius: 8px;
  padding: 25px 30px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

/* Top bar */
.top-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 25px;
}

.top-bar h2 {
  font-weight: 600;
  color: #2c3e50;
  font-size: 24px;
}

.top-controls {
  display: flex;
  align-items: center;
  gap: 15px;
}

.top-controls input[type="search"] {
  padding: 8px 12px;
  font-size: 16px;
  border: 1.5px solid #bdc3c7;
  border-radius: 5px;
  width: 220px;
  transition: border-color 0.3s ease;
}

.top-controls input[type="search"]:focus {
  border-color: #2980b9;
  outline: none;
}

/* Add button */
.add-btn a {
  background-color: #27ae60;
  color: white;
  padding: 9px 18px;
  font-weight: 600;
  border-radius: 5px;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.add-btn a:hover {
  background-color: #1e8449;
}

/* Table */
.table-section table {
  width: 100%;
  border-collapse: collapse;
  font-size: 16px;
}

.table-section thead.orders {
  background-color: #2980b9;
  color: white;
}

.table-section thead th {
  padding: 12px 15px;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.table-section tbody tr {
  border-bottom: 1px solid #ddd;
  transition: background-color 0.3s ease;
}

.table-section tbody tr:hover {
  background-color: #f1f8ff;
}

.table-section tbody td {
  padding: 12px 15px;
}

/* Action buttons */
.edit, .delete {
  padding: 6px 14px;
  border-radius: 5px;
  font-weight: 600;
  text-decoration: none;
  color: white;
  margin-right: 8px;
  font-size: 14px;
  display: inline-block;
  transition: background-color 0.3s ease;
}

.edit {
  background-color: #3498db;
}

.edit:hover {
  background-color: #217dbb;
}

.delete {
  background-color: #e74c3c;
}

.delete:hover {
  background-color: #c0392b;
}

/* Responsive */
@media (max-width: 768px) {
  .container {
    flex-direction: column;
    padding: 15px;
  }
  
  .sidebar {
    width: 100%;
    margin-bottom: 20px;
  }
  
  .top-controls input[type="search"] {
    width: 100%;
  }
}

    </style>
    
    
</head>
<body>
    <header>
        <div class="logo">Employee MS</div>
        <div class="welcome ">Welcome,dear customer!</div>
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Food Menu</title>
  <style>
    /* Reset and base */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #fafafa;
      color: #333;
      padding: 40px 20px;
    }

    h1 {
      text-align: center;
      margin-bottom: 40px;
      font-weight: 700;
      color: #2c3e50;
    }

    /* Menu container */
    .menu-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
      max-width: 1200px;
      margin: 0 auto;
    }

    /* Single food card */
    .food-card {
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }
    .food-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    }

    /* Food image */
    .food-image {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-bottom: 1px solid #eee;
    }

    /* Food details */
    .food-details {
      padding: 20px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .food-name {
      font-size: 20px;
      font-weight: 700;
      color: #34495e;
      margin-bottom: 8px;
    }

    .food-description {
      font-size: 14px;
      color: #7f8c8d;
      margin-bottom: 15px;
      flex-grow: 1;
    }

    .food-price {
      font-size: 18px;
      font-weight: 700;
      color: #27ae60;
      text-align: right;
      margin-bottom: 12px;
    }

    /* Add to Order button */
    .order-btn {
      background-color: #27ae60;
      border: none;
      color: white;
      padding: 12px 0;
      border-radius: 8px;
      font-weight: 700;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      width: 100%;
      box-shadow: 0 4px 8px rgba(39, 174, 96, 0.4);
    }

    .order-btn:hover {
      background-color: #1e8449;
      box-shadow: 0 6px 12px rgba(30, 132, 73, 0.6);
    }

    /* Responsive tweaks */
    @media (max-width: 480px) {
      .food-card {
        height: auto;
      }
      .food-image {
        height: 140px;
      }
    }
  </style>
</head>
<body>

  <h1>Our Delicious Menu</h1>

  <div class="menu-container">
    <!-- Food item 1 -->
    <div class="food-card">
      <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=800&q=80" alt="Cheeseburger" class="food-image" />
      <div class="food-details">
        <div class="food-name">Cheeseburger</div>
        <div class="food-description">Juicy grilled beef patty with cheddar cheese, lettuce, tomato, and our secret sauce.</div>
        <div class="food-price">$8.99</div>
        <button class="order-btn">Add to Order</button>
      </div>
    </div>

    <!-- Food item 2 -->
    <div class="food-card">
      <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=800&q=80" alt="Margherita Pizza" class="food-image" />
      <div class="food-details">
        <div class="food-name">Margherita Pizza</div>
        <div class="food-description">Classic pizza topped with fresh mozzarella, basil, and tangy tomato sauce.</div>
        <div class="food-price">$12.50</div>
        <button class="order-btn">Add to Order</button>
      </div>
    </div>

    <!-- Food item 3 -->
    <div class="food-card">
      <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=800&q=80" alt="Pasta Carbonara" class="food-image" />
      <div class="food-details">
        <div class="food-name">Pasta Carbonara</div>
        <div class="food-description">Creamy spaghetti with pancetta, parmesan, and freshly cracked black pepper.</div>
        <div class="food-price">$11.00</div>
        <button class="order-btn">Add to Order</button>
      </div>
    </div>

    <!-- Food item 4 -->
    <div class="food-card">
      <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=800&q=80" alt="Caesar Salad" class="food-image" />
      <div class="food-details">
        <div class="food-name">Caesar Salad</div>
        <div class="food-description">Crisp romaine lettuce with Caesar dressing, croutons, and shaved parmesan.</div>
        <div class="food-price">$7.50</div>
        <button class="order-btn">Add to Order</button>
      </div>
    </div>
  </div>

</body>
</html>
