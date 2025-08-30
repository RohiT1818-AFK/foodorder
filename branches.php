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
