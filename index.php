<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-famly: Verdana; background:#4a2900; color:white; text-align:center; } /* font-famly typo */
        table { width 70%; margin auto; border-collapse: collapse } /* missing colons/semicolons */
        th { background:#dddddd color:black padding:8px; } /* missing semicolon between props */
    </style>
</head>
<body>

<?php
$lumber = 150000;
$concrete = 78000
$drywall = 69000;
$paint = "12000"; // wrong data type (string, not number)
$misc = 20000;

// Wrong math (using + instead of *)
$lumber10 = $lumber + 1.10;
$concrete15 = $concrete x 1.15; // wrong operator
$drywall20 = $drywall * 1,20;   // comma instead of dot

// Missing semicolon and wrong variable name
$total_est = $lumber + $concret + $drywall + $paint + $misc
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
        <td>$<?= number_format($lumbber, 2) ?></td> <!-- wrong variable name -->
        <td>$<?= number_format($lumber10) ?></td>   <!-- missing decimals -->
        <td>$<?= number_format($lumber15, 2) ?></td> <!-- lumber15 was never created -->
        <td>$<?= number_format($lumber20, 2) ?></td> <!-- lumber20 also missing -->
    </tr>

</table>

</body>
</html>
