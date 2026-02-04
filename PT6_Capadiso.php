<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Verdana;
            background: #4a2900;
            color: white;
            text-align: center;
        }

        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
        }

        th {
            background: #dddddd;
            color: black;
            padding: 8px;
        }

        td {
            padding: 8px;
        }
    </style>
</head>
<body>

<?php
// function to compute increased price
function increase($amount, $percent) {
    return $amount * (1 + $percent);
}

// function to print one row
function renderRow($name, $amount) {
    ?>
    <tr>
        <td><?= $name ?></td>
        <td>$<?= number_format($amount, 2) ?></td>
        <td>$<?= number_format(increase($amount, 0.10), 2) ?></td>
        <td>$<?= number_format(increase($amount, 0.15), 2) ?></td>
        <td>$<?= number_format(increase($amount, 0.20), 2) ?></td>
    </tr>
    <?php
}

// main function
function renderCostTable($projectTitle, $creator) {

    // base costs
    $lumber   = 150000;
    $concrete = 78000;
    $drywall  = 69000;
    $paint    = 12000;
    $misc     = 20000;

    // totals
    $total =
        $lumber + $concrete + $drywall + $paint + $misc;

    $total10 =
        increase($lumber, 0.10) +
        increase($concrete, 0.10) +
        increase($drywall, 0.10) +
        increase($paint, 0.10) +
        increase($misc, 0.10);

    $total15 =
        increase($lumber, 0.15) +
        increase($concrete, 0.15) +
        increase($drywall, 0.15) +
        increase($paint, 0.15) +
        increase($misc, 0.15);

    $total20 =
        increase($lumber, 0.20) +
        increase($concrete, 0.20) +
        increase($drywall, 0.20) +
        increase($paint, 0.20) +
        increase($misc, 0.20);
    ?>

    <h2><?= $projectTitle ?></h2>
    <h3>Cost Estimates</h3>

    <table border="1">
        <tr>
            <th>Expenditures</th>
            <th>Estimated Cost</th>
            <th>10% Increase</th>
            <th>15% Increase</th>
            <th>20% Increase</th>
        </tr>

        <?php
        renderRow("Lumber", $lumber);
        renderRow("Concrete", $concrete);
        renderRow("Drywall", $drywall);
        renderRow("Paint", $paint);
        renderRow("Misc", $misc);
        ?>

        <tr style="font-weight:bold; background:#4a2900; color:#90ee90;">
            <td>Total Expenditures</td>
            <td>$<?= number_format($total, 2) ?></td>
            <td>$<?= number_format($total10, 2) ?></td>
            <td>$<?= number_format($total15, 2) ?></td>
            <td>$<?= number_format($total20, 2) ?></td>
        </tr>
    </table>

    <p style="margin-top:20px; font-size:18px;">
        Created by: <strong><?= $creator ?></strong>
    </p>

<?php
}
?>

<?php
// call the function
renderCostTable("Public Library Expansion Project", "Cristoff");
?>

</body>
</html>
