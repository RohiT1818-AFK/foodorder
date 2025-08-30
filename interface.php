<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Bhoj Food Ordering</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
  * {
    box-sizing: border-box;
  }
  body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    color: #222;
  }
  a {
    text-decoration: none;
    color: inherit;
  }
  /* Header */
  header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 40px;
  }
  .logo {
    display: flex;
    align-items: center;
    font-size: 24px;
    font-weight: 600;
    color: #ff8500;
  }
  .logo img {
    height: 40px;
    margin-right: 8px;
  }
  .auth-buttons {
    display: flex;
    gap: 15px;
    align-items: center;
  }
  .auth-buttons a.login {
    font-size: 14px;
    color: #000;
  }
  .auth-buttons a.signup {
    background: #000;
    color: #fff;
    padding: 10px 20px;
    border-radius: 6px;
    font-weight: 600;
    transition: background 0.3s ease;
  }
  .auth-buttons a.signup:hover {
    background: #ff8500;
  }

  /* Main section */
  .main-section {
    display: flex;
    flex-wrap: wrap;
    min-height: 440px;
  }
  .left-side {
    flex: 1;
    background: #fff;
    padding: 80px 60px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .left-side h2 {
    font-weight: 700;
    font-size: 20px;
    margin-bottom: 40px;
  }
  .options {
    display: flex;
    gap: 80px;
    max-width: 600px;
  }
  .option {
    flex: 1;
    text-align: center;
    border-right: 1px solid #ddd;
    padding-right: 40px;
    position: relative;
  }
  .option:last-child {
    border-right: none;
    padding-right: 0;
  }
  .option-icon {
    width: 100px;
    height: 100px;
    margin: 0 auto 20px auto;
    background: #fff4e6;
    border-radius: 50%;
    box-shadow: 0 4px 10px rgb(255 133 0 / 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ff8500;
    font-size: 40px;
  }
  .option p {
    font-size: 14px;
    line-height: 1.5;
    margin: 0;
    color: #333;
  }
  .divider {
    height: 120px;
    width: 1px;
    background: #ddd;
    margin: auto 40px;
  }

  /* Right side image */
  .right-side {
    flex: 1;
    background: url('/mnt/data/64a30b2a-277f-4458-b1b7-ea088511aa01.png') center center/cover no-repeat;
  }

  /* Bottom section */
  .bottom-section {
    background: #121618;
    color: #fff;
    padding: 40px 60px;
    text-align: center;
    position: relative;
  }
  .bottom-section h2 {
    font-weight: 600;
    font-size: 24px;
    margin-bottom: 30px;
  }
  .bottom-section h2 span {
    background: #ff8500;
    padding: 6px 16px;
    border-radius: 4px;
    margin-left: 8px;
  }

  /* Bottom icons */
  .bottom-icons {
    display: flex;
    justify-content: center;
    gap: 80px;
    margin-top: 30px;
  }
  .icon-wrapper {
    color: #ff8500;
    font-size: 30px;
  }

  /* SVG icons style */
  svg {
    display: block;
  }

  /* Zigzag separator between main and bottom */
  .zigzag {
    width: 100%;
    height: 30px;
    background: #121618;
    clip-path: polygon(
      0% 100%, 5% 0%, 10% 100%, 15% 0%, 20% 100%, 25% 0%, 30% 100%, 
      35% 0%, 40% 100%, 45% 0%, 50% 100%, 55% 0%, 60% 100%, 65% 0%, 
      70% 100%, 75% 0%, 80% 100%, 85% 0%, 90% 100%, 95% 0%, 100% 100%
    );
  }

  /* Responsive */
  @media (max-width: 900px) {
    .main-section {
      flex-direction: column;
    }
    .left-side, .right-side {
      flex: none;
      width: 100%;
      padding: 40px 30px;
    }
    .options {
      flex-direction: column;
      gap: 40px;
    }
    .option {
      border-right: none;
      padding-right: 0;
      border-bottom: 1px solid #ddd;
      padding-bottom: 20px;
    }
    .option:last-child {
      border-bottom: none;
    }
    .divider {
      display: none;
    }
    .bottom-icons {
      flex-wrap: wrap;
      gap: 40px;
    }
  }
</style>
</head>
<body>

<header>
  <div class="logo">
    <img src="https://cdn-icons-png.flaticon.com/512/3075/3075977.png" alt="Bhoj Logo" />
    Bhoj
  </div>
  <div class="auth-buttons">
    
    <a href="form.php" class="signup"> login</a>
  </div>
</header>

<section class="main-section">
  <div class="left-side">
    <h2>WHAT DO YOU FEEL LIKE TODAY?</h2>
    <div class="options">
      <div class="option">
        <div class="option-icon">
          <!-- Scooter icon -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" width="48" height="48"><path d="M3 13h2l3 4h7l3-4h2"/><circle cx="6" cy="17" r="2"/><circle cx="18" cy="17" r="2"/><path d="M7 13V9a3 3 0 0 1 6 0v4"/></svg>
        </div>
        <p>Get Food &amp;<br>Grocery delivered</p>
      </div>
      <div class="divider"></div>
      <div class="option">
        <div class="option-icon">
          <!-- Tag icon -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" width="48" height="48"><path d="M21 10v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V10a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><path d="M10 10h.01"/></svg>
        </div>
        <p>Grab Free<br>Restaurant Deals</p>
      </div>
    </div>
  </div>
  <div class="right-side"></div>
</section>

<div class="zigzag"></div>

<section class="bottom-section">
  <h2>GET FOOD <span>DELIVERED</span></h2>
  <div class="bottom-icons">
    <div class="icon-wrapper" title="Shopping Bag">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" width="40" height="40"><path d="M6 2l1.5 4h9L20 7v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7l1-1z"/><path d="M10 11a2 2 0 0 0 4 0"/></svg>
    </div>
    <div class="icon-wrapper" title="Delivery Scooter">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" width="40" height="40"><path d="M3 13h2l3 4h7l3-4h2"/><circle cx="6" cy="17" r="2"/><circle cx="18" cy="17" r="2"/><path d="M7 13V9a3 3 0 0 1 6 0v4"/></svg>
    </div>
    <div class="icon-wrapper" title="Wallet">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" width="40" height="40"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/></svg>
    </div>
    <div class="icon-wrapper" title="Payment">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" width="40" height="40"><rect x="2" y="7" width="20" height="10" rx="2" ry="2"/><path d="M16 11h-8"/><path d="M12 11v6"/></svg>
    </div>
  </div>
</section>

</body>
</html>
