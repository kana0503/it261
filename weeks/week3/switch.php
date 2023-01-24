<?php
// calass cofffee exercise
// if today is Griday, it will be pumpkin latte day
// INTRODUCTING the isset() function
// then we will introduce our first GLOBAL variable
// our switch



// starting the switch
// if $GET['today'] is set, $today , then all is well, but it is not set therefore the else is the day!
// else, today is TODAY

// GLOBAL VARIABLES are capitalized and start with $_GET

// what is the isset function - is asking if something has been set?

// $variable = 'This is our variable';
// if(isset($variable)){
//     echo 'Variable has been set';
// }else{
//     echo 'Variable has not been set';
// }


// echo '<br>';

// if(isset($_GET['today'])){
//     echo 'Today has been set'; 
// }else {
//     echo 'NOT!!!!!!!!!!!';
// }

if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
    $today = date('l');
}

switch($today) {

    case 'Monday':
        $coffee = '<h2>Monday is our Latte Day!</h2>';
        $pic = 'latte.jpg';
        $alt = 'Latte';
        $content = '<p><b>Caffè latte</b> often shortened to just latte in English, is a coffee beverage of Italian origin made with espresso and steamed milk. Variants include the chocolate-flavored mocha or replacing the coffee with another beverage base such as masala chai (spiced Indian tea), mate, matcha, turmeric or rooibos; alternatives to milk, such as soy milk or almond milk, are also used.</p>';
    break;

    case 'Tuesday':
        $coffee = '<h2>Tuesday is our Americano Day!</h2>';
        $pic = 'americano.jpg';
        $alt = 'Americano';
        $content = '<p> <b>Americanos</b> are made with espresso shots and hot water, while brewed coffee is created by infusing coffee beans with hot water. Americano Espresso Drinks have 103 mg of caffeine per cup, while a cup of brewed coffee has 96 mg of caffeine. Americano drinks have a stronger, richer flavor than brewed coffee.</p>';
    break;

    case 'Wednesday':
        $coffee = '<h2>Wednesday is our Frappuccino Day!</h2>';
        $pic = 'frap.jpg';
        $alt = 'Frappuccino';
        $content = '<p><b>Frappuccino</b> is a line of blended iced coffee drinks sold by Starbucks. It consists of coffee or crème base, blended with ice and ingredients such as flavored syrups and usually topped with whipped cream and or spices.</p>';
    break;

    case 'Thursday':
        $coffee = '<h2>Thursday is our cappuccino Day!</h2>';
        $pic = 'cap.jpg';
        $alt = 'cappuccino';
        $content = '<p><b>A cappuccino</b> is an espresso-based coffee drink that originated in Austria and was later popularized in Italy and is prepared with steamed milk foam (microfoam).</p>';
    break;

    case 'Friday':
        $coffee = '<h2>Friday is our Pumpkin Latte Day!</h2>';
        $pic = 'pumpkin.jpg';
        $alt = 'Pumpking Latte';
        $content = '<p> <b> Pumpkin Spice Latte</b> is a coffee drink made with a mix of traditional autumn spice flavors (cinnamon, nutmeg, and clove), steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. </p>';
    break;

    case 'Saturday':
        $coffee = '<h2>Saturday is our Green Tea Latte Day!</h2>';
        $pic = 'green-tea.jpg';
        $alt = 'Green Tea Latte';
        $content = '<p><b>A green tea latte </b>is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte, we remove the coffee and use tea in its place. </p>';
    break;

    case 'Sunday':
        $coffee = '<h2>Sunday is our Regular Joe Day!</h2>';
        $pic = 'coffee.png';
        $alt = 'Regular Coffee';
        $content = '<p><b>Coffee</b> is a drink prepared from roasted coffee beans. Darkly colored, bitter, and slightly acidic, coffee has a stimulating effect on humans, primarily due to its caffeine content. It is the most popular hot drink in the world.</p>';
    break;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>

*{
    padding:0;
    margin:0;
    box-sizing: border-box;
}

#wrapper{
    width: 940px;
    margin: 20px auto;

}

h1, h2, img {
    margin-bottom: 10px;

}

p {
    margin-bottom: 20px;
}
</style>
</head>
<body>

<div id="wrapper">
<h1>My Wonderful Switch Classwork Exercise (Not the daily homework)</h1>
<?php
echo $coffee;
?>
<img src="./images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>" >
<?php echo $content; ?>

<h2>Check out our Daily Special</h2>
<ul>
<li><a href="switch.php?today=Sunday">Sunday</a></li>
<li><a href="switch.php?today=Monday">Monday</a></li>
<li><a href="switch.php?today=Tuesday">Tuesday</a></li>
<li><a href="switch.php?today=Wednesday">Wednesday</a></li>
<li><a href="switch.php?today=Thursday">Thursday</a></li>
<li><a href="switch.php?today=Friday">Friday</a></li>
<li><a href="switch.php?today=Saturday">Saturday</a></li>
</ul>


</div>  
</body>
</html>