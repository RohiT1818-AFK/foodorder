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
<title>Our Branches</title>
<style>
  /* Reset & base */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f9fafb;
    color: #333;
    padding: 40px 20px;
  }

  h1 {
    text-align: center;
    margin-bottom: 50px;
    font-weight: 700;
    color: #2c3e50;
  }

  /* Container for all branch cards */
  .branches-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    max-width: 1100px;
    margin: 0 auto;
  }

  /* Single branch card */
  .branch-card {
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .branch-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 14px 28px rgba(0,0,0,0.15);
  }

  /* Branch image */
  .branch-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }

  /* Branch info section */
  .branch-info {
    padding: 20px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .branch-name {
    font-size: 22px;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 10px;
  }

  .branch-address {
    font-size: 15px;
    color: #666;
    line-height: 1.4;
    margin-bottom: 20px;
  }

  /* Button */
  .btn {
    align-self: flex-start;
    background-color: #27ae60;
    color: white;
    padding: 12px 22px;
    font-size: 16px;
    font-weight: 600;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    text-decoration: none;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 6px 12px rgba(39, 174, 96, 0.4);
  }
  .btn:hover {
    background-color: #1e8449;
    box-shadow: 0 8px 16px rgba(30, 132, 73, 0.6);
  }

  /* Responsive */
  @media (max-width: 480px) {
    .branch-image {
      height: 140px;
    }
  }
</style>
</head>
<body>

  <h1>Our Branches</h1>

  <div class="branches-container">
    
    <div class="branch-card">
      <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800&q=80" alt="Downtown Branch" class="branch-image" />
      <div class="branch-info">
        <div class="branch-name">Downtown Branch</div>
        <div class="branch-address">
          123 Main Street,<br />
          City Center, NY 10001
        </div>
        <a href="https://maps.google.com?q=123+Main+Street+NY" target="_blank" class="btn">View on Map</a>
      </div>
    </div>

    <div class="branch-card">
      <img src="https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=800&q=80" alt="Uptown Branch" class="branch-image" />
      <div class="branch-info">
        <div class="branch-name">Uptown Branch</div>
        <div class="branch-address">
          456 Elm Avenue,<br />
          Uptown, NY 10002
        </div>
        <a href="https://maps.google.com?q=456+Elm+Avenue+NY" target="_blank" class="btn">View on Map</a>
      </div>
    </div>

    <div class="branch-card">
      <img src="https://images.unsplash.com/photo-1468071174046-657d9d351a40?auto=format&fit=crop&w=800&q=80" alt="Suburban Branch" class="branch-image" />
      <div class="branch-info">
        <div class="branch-name">Suburban Branch</div>
        <div class="branch-address">
          789 Pine Road,<br />
          Suburbia, NY 10003
        </div>
        <a href="https://maps.google.com?q=789+Pine+Road+NY" target="_blank" class="btn">View on Map</a>
      </div>
    </div>

  </div>

</body>
</html>
