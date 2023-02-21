<?php
include('config.php');
include('./includes/header.php');
?>


<dev id="wrapper">

<div id="hero">
<?php

$photo[0] = 'photo1';
$photo[1] = 'photo2';
$photo[2] = 'photo3';
$photo[3] = 'photo4';
$photo[4] = 'photo5';

function random_images($photo){
    $my_return = '';
    $i = rand(0,4);
    $selected_image = ''.$photo[$i].'.jpg';
    $my_return = '<img src="./images/'.$selected_image.'" alt="'.$photo[$i].'" >';
    return $my_return;
}

echo random_images($photo);
?>
</div>
<!--- end hero ---> 

<main>
<h1>Welcome to our Web App Programming Class!</h1>


<h2>We are going to learn PHP!</h2>
<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bo</p>

<h2>Another HeadLine 2!</h2>
<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bo</p>
</main>

<aside>
<h3>This is our headline three in our beautiful aside</h3>
<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bo</p>
</aside>


</dev>
<!--- end wrapper --->

<?php
include('./includes/footer.php');
?>