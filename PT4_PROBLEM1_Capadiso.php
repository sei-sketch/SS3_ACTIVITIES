<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Multiple Conditions with Counters</title>
  <style>
    body {
      font-family: "Segoe UI", Tahoma, sans-serif;
      background: #005461;
      color: #ffffff;
      padding: 30px;
    }

    .container {
      max-width: 550px;
      margin: auto;
      background: #2c2c44;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.4);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #0C7779;
    }

    .item {
      padding: 8px 12px;
      margin: 5px 0;
      border-radius: 6px;
      background: #3a3a5c;
    }

    .div3 {
      border-left: 5px solid #3498db;
    }

    .div5 {
      border-left: 5px solid #2ecc71;
    }

    .both {
      border-left: 5px solid #e74c3c;
      font-weight: bold;
    }

    .totals {
      margin-top: 25px;
      padding: 15px;
      background: #1e1e2f;
      border-radius: 6px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Divisible by 3 or 5</h2>

  <?php
  $divisible3Only = 0;
  $divisible5Only = 0;
  $divisibleBoth = 0;

  for ($i = 1; $i <= 50; $i++) {

      if ($i % 3 == 0 && $i % 5 == 0) {
          echo "<div class='item both'>$i - Divisible by both</div>";
          $divisibleBoth++;

      } elseif ($i % 3 == 0) {
          echo "<div class='item div3'>$i - Divisible by 3</div>";
          $divisible3Only++;

      } elseif ($i % 5 == 0) {
          echo "<div class='item div5'>$i - Divisible by 5</div>";
          $divisible5Only++;
      }
  }
  ?>

  <div class="totals">
    <strong>Totals</strong><br>
    Divisible by 3 only: <?= $divisible3Only ?><br>
    Divisible by 5 only: <?= $divisible5Only ?><br>
    Divisible by both: <?= $divisibleBoth ?>
  </div>
</div>

</body>
</html>
