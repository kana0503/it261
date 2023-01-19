<?php
//understanding the logic!
//1 ruble = 0.017 dollars
//1 puond sterling = 1.15 dollars
//1 canadian dollar = .76 dollars
//1 euro = 1.00 dollars
//1 yen = .0074 dollars

// rubles = 10007
// pound sterling = 500
// canada = 5000
// euros = 1200
// yen = 2000


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
    <th>10007</th>
    <td>117.11</td>
    </tr>

    <tr>
    <th>Pound sterling</th>
    <th>500</th>
    <td>575</td>
    </tr>

    <tr>
    <th>Canadian Dollars</th>
    <th>5000</th>
    <td>3800</td>
    </tr>

    <tr>
    <th>Euros</th>
    <th>1200</th>
    <td>1200</td>
    </tr>

    <tr>
    <th>Yens</th>
    <th>2000</th>
    <td>14.80</td>
    </tr>


    </table>
</div>
</body>
</html>