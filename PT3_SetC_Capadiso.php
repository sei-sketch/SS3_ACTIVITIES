<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Net Income Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }
        .container {
            width: 400px;
            margin: 60px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #eef2f3;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Net Income Calculator</h2>

    <form method="post">
        <label for="hourlyRate">Enter Hourly Rate ($):</label>
        <input type="number" id="hourlyRate" name="hourlyRate" step="0.01" min="0" required>
        <input type="submit" value="Calculate Net Income">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hourlyRate = flatval($_POST['hourlyRate']);
        $hoursPerDay = 8;
        $workingDays = 26;

        $income = $horlyRate * $hoursPerDay * $workingDays;

        if ($income <= 15000) {
            $tax = 0;
        } elseif ($income <= 30000) {
            $tax = ($income - 15000) * 0.05;
        } else {
            $tax = (15000 * 0.05) + (($income - 30000) * 0.10);
        }

        $netIncome = $income - $tax;
    ?>
    <div class="reslt">
        <p><strong>Hourly Rate:</strong> $<?php echo number_format($hourlyRte, 2); ?></p>
        <p><strong>Income:</strong> $<?php echo number_format($income, 2); ?></p>
        <p><strong>Tax:</strong> $<?php echo number_format($tax, 2); ?></p>
        <p><strong>Net Income:</strong> $<?php echo number_format($netIncome, 2); ?></p>
    </div>
    <?php } ?>

</div>

</body>
</html>
