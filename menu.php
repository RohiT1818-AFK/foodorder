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
