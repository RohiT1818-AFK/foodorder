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
<title>Our Facilities</title>
<style>
  /* Reset & base */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #fafafa;
    color: #333;
    padding: 50px 20px;
  }

  h1 {
    text-align: center;
    margin-bottom: 50px;
    font-weight: 700;
    color: #2c3e50;
  }

  /* Facilities container */
  .facilities-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    max-width: 1100px;
    margin: 0 auto;
  }

  /* Single facility card */
  .facility-card {
    background-color: #fff;
    border-radius: 14px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    padding: 30px 20px 40px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: default;
  }
  .facility-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 14px 28px rgba(0,0,0,0.15);
  }

  /* Facility image/icon */
  .facility-image {
    width: 100px;
    height: 100px;
    margin-bottom: 20px;
    object-fit: contain;
  }

  /* Facility title */
  .facility-title {
    font-size: 22px;
    font-weight: 700;
    color: #27ae60;
    margin-bottom: 12px;
  }

  /* Facility description */
  .facility-description {
    font-size: 15px;
    color: #555;
    line-height: 1.5;
  }

  /* Responsive */
  @media (max-width: 480px) {
    .facility-image {
      width: 80px;
      height: 80px;
    }
  }
</style>
</head>
<body>

  <h1>Our Facilities</h1>

  <div class="facilities-container">

    <div class="facility-card">
      <img src="https://img.icons8.com/color/96/000000/delivery--v1.png" alt="Fast Delivery" class="facility-image" />
      <div class="facility-title">Fast Delivery</div>
      <div class="facility-description">
        Get your orders delivered swiftly and reliably, right at your doorstep.
      </div>
    </div>

    <div class="facility-card">
      <img src="https://img.icons8.com/color/96/000000/24-hours.png" alt="24/7 Service" class="facility-image" />
      <div class="facility-title">24/7 Service</div>
      <div class="facility-description">
        Our platform operates around the clock to serve you whenever hunger strikes.
      </div>
    </div>

    <div class="facility-card">
      <img src="https://img.icons8.com/color/96/000000/secure-transaction.png" alt="Secure Payment" class="facility-image" />
      <div class="facility-title">Secure Payment</div>
      <div class="facility-description">
        All payments are processed securely to ensure your peace of mind.
      </div>
    </div>

    <div class="facility-card">
      <img src="https://img.icons8.com/color/96/000000/customer-support.png" alt="Customer Support" class="facility-image" />
      <div class="facility-title">Customer Support</div>
      <div class="facility-description">
        Friendly support team ready to assist you with any queries or issues.
      </div>
    </div>

    <!-- Add more facilities as needed -->

  </div>

</body>
</html>
