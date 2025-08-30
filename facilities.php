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
