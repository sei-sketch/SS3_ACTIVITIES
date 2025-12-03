<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family; Verdana; background:#4a2900; color:white; text-align:center;
        }
        
        table {
            width:70%; margin:auto; border-collapse;collapse;
        }

        th {
            background:#dddddd; color:black; padding:8px;
        }
    </style>
</head>
<body>
    <?php
    // $lumber10 meaning "lumber with a 10% increase" same sa lumber15 og 20
    $lumber = 150000;
    $concrete = 78000;
    $drywall = 69000;
    $paint = 12000;
    $misc = 20000;

    $lumber10 = $lumber * 1.10;
    $lumber15 = $lumber * 1.15;
    $lumber20 = $lumber * 1.20;

?>

<h2>Public Library Expansion Project</h2>
<h3>Cost Estimates</h3>

<table border="1">
    <tr>
        <th>Expenditures</th>
        <th>Estimated Cost</th>
        <th>10% Increase</th>
        <th>15% Increase</th>
        <th>20% Increase</th>
    </tr>

    <tr>
        <td>Lumber</td>
        <td>$<?= number_format($lumber, 2) ?></td>
        <td>$<?= number_format($lumber10, 2) ?></td>
        <td>$<?= number_format($lumber15, 2) ?></td>
        <td>$<?= number_format($lumber20, 2) ?></td>
    </tr>
</body>
</html>