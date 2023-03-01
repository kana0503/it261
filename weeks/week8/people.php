<?php
include('config.php');
include('./includes/header.php');
?>

<div id="wrapper">
<main>
    <h1>Welcome to our People Database Class Exercise!</h1>
<?php
$sql = 'SELECT * FROM people';
// now, we have to connect to our database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// we are asking if the number of rows is greater than 0

if(mysqli_num_rows($result) > 0) {
// we will be reading those rows with a while loop
    while($row = mysqli_fetch_assoc($result)){
        echo '
        <h2>Information about '.$row['first_name'].'</h2>
        <ul>
        <li><b>First Name:</b> '.$row['first_name'].'</li>
        <li><b>First Name:</b> '.$row['last_name'].'</li>
        <li><b>First Name:</b> '.$row['birthdate'].'</li>
        </ul>
        <p>For more information about '.$row['first_name'].', click <a href="people-view.php?id='.$row['people_id'].'">here</a> </p>
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
    $selected_image = ''.$photo[$i].'.jpg';
    $my_return = '<img src="./images/'.$selected_image.'" alt="'.$photo[$i].'" >';
    return $my_return;
    }
    echo random_images($photo);
?>
</aside>


<?php
include('./includes/footer.php');