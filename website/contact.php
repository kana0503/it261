<?php
include('config.php');
include('./includes/header.php');
?>


<main>
    <div id="wrapper">
    <h1>Welcome to our contact page!</h1>

    <p> Nema akjhg ajkhfo ijb skbkiho ojsbakgb vjhasbrw kjh khasdgk kjhaslk, aksjhgb hf e suihg sdjhwojhasg. kjhasogkj asjdh fjekwou rkohga sadjhgka sk fwo heia sdis dh asd kjbasdg.</p>
    </div>

    <?php 
    include('./includes/form.php'); ?>


</main>  
<aside>
    <h3>This is my aside</h3>
    </aside>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title> -->
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



<?php
include('./includes/footer.php');

?>