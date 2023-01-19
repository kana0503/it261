<?php
//understanding the logic!
$ruble_rate = 0.017; 
$pound_rate = 1.15;
$canadian_rate = .76;
$euro_rate = 1.00;
$yen_rate = .0074; 

$rubles = 10007;
$pound = 500;
$canada = 5321;
$euros = 1291;
$yen = 4030;

$ruble_converted = $rubles * $ruble_rate;
$pound_converted = $pound * $pound_rate;
$canadian_converted = $canada * $ruble_rate;
$euro_converted = $euros * $ruble_rate;
$yen_converted = $yen * $ruble_rate;

$total = $ruble_converted + $pound_converted + $canadian_converted + $euro_converted + $yen_converted

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
    content="ie=edge">
    <title>My Currency Logic Exercise</title>

    <style>
*   {
    padding:0;
    margin:0;
    box-sizing:border-box;
}

#wrapper{
    width:500px;
    margin:30px auto;
}

th, td {
    border :1px solid orange;
    padding: 8px; 
}

h1, h2, h3 {
    text-align: center;
}

</style>
</head>
<body>
<div id = "wrapper">
    <h1>After our world-wind travels, we have returned home with following currency</h1>
    <ul>
        <li>Rubles</li>
        <li>Pound sterling</li>
        <li>Canadian Dollar</li>
        <li>Euros</li>
        <li>Yen</li>
    </ul>

    <h2>Whatever shall we do?</h2>

    <table>
    <tr>
        <th colspan = "2">Currency</th>
        <th>Dollars</th>
    </tr>
    
    <tr>
    <th>Rubles</th>
    <th><?php echo $rubles; ?></th>
    <td>$<?php echo ''.number_format($ruble_converted,2).'';  ?></td>
    </tr>

    <tr>
    <th>Pound sterling</th>
    <th><?php echo $pound; ?></th>
    <td>$<?php echo ''.number_format($pound_converted,2).''; ?></td>
    </tr>

    <tr>
    <th>Canadian Dollars</th>
    <th><?php echo $canada; ?></th>
    <td>$<?php echo ''.number_format($canadian_converted,2).''; ?></td>
    </tr>

    <tr>
    <th>Euros</th>
    <th><?php echo $euros; ?></th>
    <td>$<?php echo ''.number_format($euro_converted,2).'';  ?></td>
    </tr>

    <tr>
    <th>Yens</th>
    <th><?php echo $yen; ?></th>
    <td>$<?php echo ''.number_format($yen_converted,2).''; ?></td>
    </tr>

    <tr>
    <th>Total</th>
    <th>American Dollars</th>
    <td>$<?php echo ''.floor($total).''; ?></td>
    </tr>


    </table>
</div>
</body>
</html>