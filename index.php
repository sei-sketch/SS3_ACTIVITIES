<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Verdana; background:#4a2900; color:white; text-align:center; }
        table { width:70%; margin:auto; border-collapse:collapse; }
        th { background:#ddd; color:black; padding:8px; }
        td { padding:8px; }
        tr:nth-child(even){ background:#003333; }
        tr:nth-child(odd){ background:#1a1a00; }
        .totals { color:#00ff66; font-weight:bold; }
    </style>
</head>
<body>

<?php
$items = [
    "Lumber" => 150000,
    "Concrete" => 78000,
    "Drywall" => 69000,
    "Paint" => 12000,
    "Miscellaneous" => 20000
];

$totE = $tot10 = $tot15 = $tot20 = 0;
?>

<h2>Public Library Expansion Project</h2>
<h3>Cost Estimates</h3>

<table border="1">
<tr>
    <th>Expenditures</th><th>Est. Cost</th><th>10%</th><th>15%</th><th>20%</th>
</tr>

<?php foreach($items as $name=>$cost):
    $i10 = $cost*1.10; 
    $i15 = $cost*1.15; 
    $i20 = $cost*1.20;
    $totE += $cost; $tot10 += $i10; $tot15 += $i15; $tot20 += $i20;
?>
<tr>
    <td><?= $name ?></td>
    <td>$<?= number_format($cost,2) ?></td>
    <td>$<?= number_format($i10,2) ?></td>
    <td>$<?= number_format($i15,2) ?></td>
    <td>$<?= number_format($i20,2) ?></td>
</tr>
<?php endforeach; ?>

<tr class="totals">
    <td>Total:</td>
    <td>$<?= number_format($totE,2) ?></td>
    <td>$<?= number_format($tot10,2) ?></td>
    <td>$<?= number_format($tot15,2) ?></td>
    <td>$<?= number_format($tot20,2) ?></td>
</tr>
</table>

<br><br>
Created by: <b>Capadiso, Cristoff</b>

</body>
</html>
