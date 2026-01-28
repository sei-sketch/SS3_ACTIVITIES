<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BMI Calculator</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f4f7;
        }

        .container {
            width: 360px;
            margin: 80px auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background: #1976d2;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #0d47a1;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background: #e8f5e9;
            border-radius: 6px;
            text-align: center;
        }

        .status {
            color: #ff9800;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
$bmi = "";
$status = "";
$risk = "";

if (isset($_POST['calculate'])) {
    $weight = $_POST['weight'];
    $heightCm = $_POST['height'];

    if (!empty($weight) && !empty($heightCm)) {
        $height = $heightCm / 100; // convert cm to meters
        $bmi = $weight / ($height * $height);
        $bmi = round($bmi, 2);

        if ($bmi < 18.5) {
            $status = "Underweight";
            $risk = "Low (but risk of other clinical problems increased)";
        } elseif ($bmi < 25) {
            $status = "Normal";
            $risk = "Average";
        } elseif ($bmi < 30) {
            $status = "Overweight";
            $risk = "Mildly Increased";
        } elseif ($bmi < 35) {
            $status = "Obese Class I";
            $risk = "Moderate";
        } elseif ($bmi < 40) {
            $status = "Obese Class II";
            $risk = "Severe";
        } else {
            $status = "Obese Class III";
            $risk = "Very Severe";
        }
    }
}
?>

<div class="container">
    <h1>BMI Calculator</h1>

    <form method="post">
        <label>Weight (kg)</label>
        <input type="number" name="weight" step="0.1" required>

        <label>Height (cm)</label>
        <input type="number" name="height" step="0.1" required>

        <button type="submit" name="calculate">Calculate BMI</button>
    </form>

    <?php if ($bmi != "") { ?>
        <div class="result">
            <h3>BMI Result</h3>
            <p><strong>Your BMI value is:</strong> <?php echo $bmi; ?></p>
            <p class="status"><?php echo strtoupper($status); ?></p>
            <p><?php echo $risk; ?></p>
        </div>
    <?php } ?>
</div>

</body>
</html>
