<?php
// this file will demonstrate for loops and in addition to placing your php inside your HTML!!
// THe for loop - Loops through a block of code a specified number of times.
// for (init counter; test counter; increment counter) { code to be executed for each iteration; }

// celcius and fahrenheit

// far = ($celucius * 9/5) + 32;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content ="ie=edge">
    <title>My Celcius Table</title>
    <style>
* {
    padding: 0;
    margin: 0;
    box-sizing:border-box; 
}

table {
    width: 500px;
    margin: 20px auto;
    border-collapse: collapse;
    border: 1px solid lightblue;
}

td, th {
    border: 1px solid lightblue;
    border-collapse: collapse;
    padding: 5px;
}

h1, h2 {
    text-align: center;
    margin: 10px 0;
    color: green;
}
    </style>
</head>
<body>
    <h1>My Celcius / Fahrenheit Table!</h1>
<table>
<tr>
<th>Celcius</th>
<th>Fahrenheit</th>
</tr>
<?php
for ($cel = 0; $cel <= 100; $cel += 5){
    $far = ($cel * 9/5) + 32;
    echo '<tr>';
    echo '<td> '.$cel.' degrees </td>';
    echo '<td> '.$far.' degrees </td>';
    echo '</tr>';
}
?>
</table>
<h2>This is for EXTRA CREDIT!</h2>
<table>
<tr>
<th>Celcius</th>
<th>Fahrenheit</th>
</tr>
<?php
for ($cel = 0; $cel <= 100; $cel += 2){
    $far = ($cel * 9/5) + 32;
    echo '<tr>';
    echo '<td> '.$cel.' degrees </td>';
    echo '<td> '.round($far).' degrees </td>';
    echo '</tr>';
}
?>
</table>


<h1>My Kilometer / Mileage Table!</h1>
<table>
<tr>
<th>Kilometer</th>
<th>Mileage</th>
</tr>
<?php
for ($kilo = 0; $kilo <= 100; $kilo += 5){
    $mile = $kilo * 5/8;
    echo '<tr>';
    echo '<td> '.$kilo.' km </td>';
    echo '<td> '.$mile.' mile </td>';
    echo '</tr>';
}
?>
</table>
</body>
</html>

