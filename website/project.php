<?php
include('config.php');
include('./includes/header.php');
?>

<div id="wrapper">
<main>
    <h1>Welcome to our Project Database Class!</h1>
<?php
$sql = 'SELECT * FROM project';
// now, we have to connect to our database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// we are asking if the number of rows is greater than 0

if(mysqli_num_rows($result) > 0) {
// we will be reading those rows with a while loop
    while($row = mysqli_fetch_assoc($result)){
        echo '
        <h2>Information about '.$row['nickname'].'</h2>
        <ul>
        <li><b>Full Name:</b> '.$row['name'].'</li>
        <li><b>Created by:</b> '.$row['create'].'</li>
        <li><b>Birth Year:</b> '.$row['birthdate'].'</li>
        </ul>
        <p>For more information about '.$row['nickname'].', click <a href="view.php?id='.$row['project_id'].'">here</a> </p>
        ';
    }


}else { // end if nuber of row is greater than 0


    echo 'Nobody is home!';
}

//we are going to releaase the server

@mysqli_free_result($result);

// close the conection

@mysqli_close($iConn);

?>

</div>
</main>

<aside>
    <h3>I will displaying my random images here!</h3>
    <?php 
    $photo[0] = 'photo1';
    $photo[1] = 'photo2';
    $photo[2] = 'photo3';
    $photo[3] = 'photo4';
    $photo[4] = 'photo5';

    function random_images($photo){
    $my_return = '';
    $i = rand(0,4);
    $selected_image = ''.$photo[$i].'.jfif';
    $my_return = '<img src="./images/project/'.$selected_image.'" alt="'.$photo[$i].'" >';
    return $my_return;
    }
    echo random_images($photo);
?>
</aside>


<?php
include('./includes/footer.php');