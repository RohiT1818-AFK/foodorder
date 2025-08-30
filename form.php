<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <style>
    /* Import Google font */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

body {
  font-family: 'Poppins', sans-serif;
  background: #fff;
  color: #222;
  margin: 0;
  padding: 0;
  display: flex;
  height: 100vh;
  justify-content: center;
  align-items: center;
}

form {
  background: #fff;
  padding: 40px 50px;
  border-radius: 12px;
  box-shadow: 0 8px 30px rgb(255 133 0 / 0.1);
  max-width: 400px;
  width: 100%;
  box-sizing: border-box;
}

h2 {
  margin-bottom: 30px;
  font-weight: 700;
  font-size: 28px;
  color: #ff8500;
  text-align: center;
}

label {
  font-weight: 600;
  font-size: 14px;
  color: #333;
  display: block;
  margin-bottom: 8px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 12px 14px;
  border: 1.5px solid #ddd;
  border-radius: 6px;
  font-size: 16px;
  transition: border-color 0.3s ease;
  box-sizing: border-box;
}

input[type="text"]:focus,
input[type="password"]:focus {
  border-color: #ff8500;
  outline: none;
  box-shadow: 0 0 8px rgba(255, 133, 0, 0.3);
}

input[type="submit"] {
  width: 100%;
  background-color: #ff8500;
  border: none;
  padding: 14px;
  font-size: 18px;
  font-weight: 700;
  color: white;
  border-radius: 8px;
  cursor: pointer;
  margin-top: 20px;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #e37400;
}

  </style>
</head>
<body>
  <h2>Login Form</h2>
  <form action="login.php" method="POST">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Login">
  </form>
</body>
</html>