<?php
// our rand function

// We are going to play with dice!

$dice = rand(1, 6);
echo '<p> '.$dice.'</p>';

// let's play with 2 dice
$dice1 = rand(1, 6);
$dice2 = rand(1, 6);
echo '<p> '.$dice1.' and '.$dice2.'</p>';


echo '<h2>Let\'s add some if else statemets!<h2>';


$dice1a = rand(1, 6);
$dice2a = rand(1, 6);

if($dice1a == 6 && $dice2a == 6){
    echo '<b>Dice 1:</b> '.$dice1a.'   <b>Dice 2:</b> '.$dice2a.'';
    echo '<h2>You won big!!! YAY!!!!<h2>';
}elseif($dice1a != 6 && $dice2a != 6 && $dice1a == $dice2a){
    echo '<b>Dice 1:</b> '.$dice1a.'   <b>Dice 2:</b> '.$dice2a.'';
    echo '<h2>You still won! You had a good day!</h2>';
}else {
    echo '<b>Dice 1:</b> '.$dice1a.'   <b>Dice 2:</b> '.$dice2a.'';
    echo '<h2>Sorry, you did not win!</h2>';
}

echo '<h2>We are going to display our images, using the radom function</h2>';


$photo[0] = 'photo1';
$photo[1] = 'photo2';
$photo[2] = 'photo3';
$photo[3] = 'photo4';
$photo[4] = 'photo5';

$i = rand(0, 4);

$selected_image = ''.$photo[$i].'.jpg';

echo '<img src="./images/'.$selected_image.'" alt="'.$photo[$i].'" >';

echo '<h2>Let\'s create a function</h2>';

function random_images($photo){
    $my_return = '';
    $i = rand(0,4);
    $selected_image = ''.$photo[$i].'.jpg';
    $my_return = '<img src="./images/'.$selected_image.'" alt="'.$photo[$i].'" >';
    return $my_return;
}

echo random_images($photo);