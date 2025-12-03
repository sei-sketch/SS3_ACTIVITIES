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

    // asa gikan ang 1.10 adding from original amount 100% (10% increases) so 1.10
    $lumber10 = $lumber * 1.10;
    $lumber15 = $lumber * 1.15;
    $lumber20 = $lumber * 1.20;

    $concrete10 = $concrete * 1.10;
    $concrete15 = $concrete * 1.15;
    $concrete20 = $concrete * 1.20;

    $drywall10 = $drywall * 1.10;
    $drywall15 = $drywall * 1.15;
    $drywall20 = $drywall * 1.20;

    $paint10 = $paint * 1.10;
    $paint15 = $paint * 1.15;
    $paint20 = $paint * 1.20;

    $misc10 = $misc * 1.10;
    $misc15 = $misc * 1.15;
    $misc20 = $misc * 1.20;

    $total = $lumber + $concrete + $drywall + $paint + $misc;
    $total10 = $lumber10 + $concrete10 + $drywall10 + $paint10 + $misc10;
    $total15 = $lumber15 + $concrete15 + $drywall15 + $paint15 + $misc15;
    $total20 = $lumber20 + $concrete20 + $drywall20 + $paint20 + $misc20;


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

    <tr>
        <td>Concrete</td>
        <td>$<?= number_format($concrete, 2) ?></td>
        <td>$<?= number_format($concrete10, 2) ?></td>
        <td>$<?= number_format($concrete15, 2) ?></td>
        <td>$<?= number_format($concrete20, 2) ?></td>
    </tr>

    <tr>
        <td>Drywall</td>
        <td>$<?= number_format($drywall, 2) ?></td>
        <td>$<?= number_format($drywall10, 2) ?></td>
        <td>$<?= number_format($drywall15, 2) ?></td>
        <td>$<?= number_format($drywall20, 2) ?></td>
    </tr>

    <tr>
        <td>Paint</td>
        <td>$<?= number_format($paint, 2) ?></td>
        <td>$<?= number_format($paint10, 2) ?></td>
        <td>$<?= number_format($paint15, 2) ?></td>
        <td>$<?= number_format($paint20, 2) ?></td>
    </tr>

    <tr>
        <td>Misc</td>
        <td>$<?= number_format($misc, 2) ?></td>
        <td>$<?= number_format($misc10, 2) ?></td>
        <td>$<?= number_format($misc15, 2) ?></td>
        <td>$<?= number_format($misc20, 2) ?></td>
    </tr>

    <!-- total -->
    <tr style="font-weight:bold; background:#4a2900; color:#90ee90;">
        <td>Total Expenditures:</td>
        <td>$<?= number_format($total, 2) ?></td>
        <td>$<?= number_format($total10, 2) ?></td>
        <td>$<?= number_format($total15, 2) ?></td>
        <td>$<?= number_format($total20, 2) ?></td>
    </tr>
</table>

<p style="margin-top:20px; font-size:18px; color:#ffffff;">
    Created by: <strong>Cristoff</strong>
</p>

</body>
</html>