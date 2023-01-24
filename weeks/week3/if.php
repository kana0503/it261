<?php
// if statements
// if else statement
// if elseif statement

$temp = 55;
if($temp <= 60){
    echo 'It is a semi-warm day!';
} else {
    echo 'It may be getting warmer!';
}
echo '<br>';
$new_temp = 81;
if($new_temp <= 60){
    echo 'Not a very warm day!';
}elseif($new_temp <= 70){
    echo 'It\'sgetting warmer';
}elseif($new_temp <= 80){
    echo 'We might ve going to the beach!';    
}else{
    echo 'We will <b>definitely</b> go to the beach!';
}

echo '<h2>This exercise will be about a salary, a bonus and sales!</h2>';
// a salary of 95000 - anual
// sales need to be above 10000, you will start makeing bonus!!!
// 10000 = 5%
// 12000 = 10%
// 14000 = 15%
// 15000 = 20%

$salary = 95000;
$sales = 150000;
// if sales is equal or less than 9999, then you do not receive any bonus
// if sales is equal or less than 11999, then you will receive 5%
// if sales is equal or less than 13999, then you will receive 10%
// if sales is equal or less than 14999, you will receive 15%
if($sales <= 9999){
    echo 'Sorry, you did not make your bonus!';
}elseif($sales <= 119999){
    $salary *= 1.05;
    echo ' $'.number_format($salary, 2).' dollars  ';
}elseif($sales <= 139999){
    $salary *= 1.10;
    echo ' $'.number_format($salary, 2).' dollars  ';
}elseif($sales <= 149999){
    $salary *= 1.15;
    echo ' $'.number_format($salary, 2).' dollars  ';
}else {
    $salary *= 1.20;
    echo 'Awesome! You made 20% bonus!! YOur anual salary including bonus totals $'.number_format($salary, 2).' dollars  ';
}


?>