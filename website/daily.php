<?php
include('./includes/header.php');

if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
    $today = date('l');
}

switch($today) {

    case 'Monday':
        $title = '<h2>Monday - MOON</h2>';
        $pic = 'moon.jpg';
        $alt = 'Moon';
        $content = '<p><b>Earth\'s Moon</b> is the only place beyond Earth where humans have set foot, so far. The Moon makes our planet more livable by moderating how much it wobbles on its axis.</p>';
        $color = 'ivory';
        $color2 = 'lightsalmon';
    break;

    case 'Tuesday':
        $title = '<h2>Tuesday - MARS</h2>';
        $pic = 'mars.png';
        $alt = 'Mars';
        $content = '<p><b>Mars</b> is a dusty, cold, desert world with a very thin atmosphere. There is strong evidence Mars was—billions of years ago—wetter and warmer, with a thicker atmosphere. </p>';
        $color = 'antiquewhite';
        $color2 = 'darkorange';
    break;

    case 'Wednesday':
        $title = '<h2>Wednesday - MERCURY</h2>';
        $pic = 'mercury.jpg';
        $alt = 'Mercury';
        $content = '<p><b>Mercury</b>—the smallest planet in our solar system and closest to the Sun—is only slightly larger than Earth\'s Moon. Mercury is the fastest planet, zipping around the Sun every 88 Earth days.</p>';
        $color ='azure';
        $color2 = 'cadetblue';
    break;

    case 'Thursday':
        $title = '<h2>Thursday - JUPITER</h2>';
        $pic = 'jupiter.jpg';
        $alt = 'Jupiter';
        $content = '<p><b>Jupiter</b> is more than twice as massive than the other planets of our solar system combined. The giant planet\'s Great Red spot is a centuries-old storm bigger than Earth.</p>';
        $color = 'honeydew';
        $color2 = 'olive';
    break;

    case 'Friday':
        $title = '<h2>Friday - VENUS</h2>';
        $pic = 'venus.jpg';
        $alt = 'Venus';
        $content = '<p> <b>Venus</b> spins slowly in the opposite direction from most planets. A thick atmosphere traps heat in a runaway greenhouse effect, making it the hottest planet in our solar system.</p>';
        $color = 'linen';
        $color2 = 'gray';
    break;

    case 'Saturday':
        $title = '<h2>Saturday - SATURN</h2>';
        $pic = 'saturn.jpg';
        $alt = 'Saturn';
        $content = '<p>Adorned with a dazzling, complex system of icy rings, <b>Saturn</b> is unique in our solar system. The other giant planets have rings, but none are as spectacular as Saturn\'s.</p>';
        $color = 'mistyrose';
        $color2 = 'rosybrown';
    break;

    case 'Sunday':
        $title = '<h2>Sunday - SUN</h2>';
        $pic = 'sun.jpg';
        $alt = 'Sun';
        $content = '<p><b>The Sun</b> is a yellow dwarf star, a hot ball of glowing gases at the heart of our solar system. Its gravity holds everything from the biggest planets to tiny debris in its orbit.</p>';
        $color = 'snow';
        $color2 = 'darkkhaki';
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

img {
    max-height: 200px;
}

p {
    margin-bottom: 20px;
}

body {
    background: <?php echo $color; ?>
}

aside {
    background: <?php echo $color2; ?>
}

</style>
</head>
<body>

<div id="wrapper">
<h1>Daily recomendation</h1>
<h2><?php
echo $title;
?></h2>
<img src="./images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>" >
<aside><?php echo $content; ?></aside>

<h2>Check out our Daily Special</h2>
<ul>
<li><a href="daily.php?today=Sunday">Sunday</a></li>
<li><a href="daily.php?today=Monday">Monday</a></li>
<li><a href="daily.php?today=Tuesday">Tuesday</a></li>
<li><a href="daily.php?today=Wednesday">Wednesday</a></li>
<li><a href="daily.php?today=Thursday">Thursday</a></li>
<li><a href="daily.php?today=Friday">Friday</a></li>
<li><a href="daily.php?today=Saturday">Saturday</a></li>
</ul>


</div>  
</body>
</html>

<?php
include('./includes/footer.php');

?>