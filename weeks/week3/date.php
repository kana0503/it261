<?php
// date function and if statement
echo date('Y');
echo '<br>';
echo date('l, F j, Y h:i: A');
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo '<br>';
echo date('l, F j, Y h:i: A');
echo '<br>';

$name = 'Kanako';
$our_time = date('H:i A');
echo '<br>';
echo $our_time;

// the logic behind this is, IF the time is less or equal to 11, then it is morning
// if the time is less or equal to 17, which equal 5, then it is afternoon
// now we will have an else, that will mean it is evening!

if($our_time <= 11){
    echo '<h2 style="color:yellow";>Good Morning, '.$name.'. It is '.$our_time.'</h2>
    <img src="./images/sun.jpg" alt= "sun">
    <p>It\'s time to get up!</p>
    ';
}elseif ($our_time <= 17){
    echo '<h2 style="color:green";>Good Afternoon, '.$name.'. It is '.$our_time.'</h2>
    <img src="./images/study.jpg" alt= "study">
    <p>It\'s time to studying!</p>
    ';
}else{
    echo '<h2 style="color:blue";>Good Evening, '.$name.'. It is '.$our_time.'</h2>
    <img src="./images/dinner.jpg" alt= "dinner">
    <p>It\'s time to have a dinner!</p>
    ';
}
?>