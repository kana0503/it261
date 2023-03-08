<?php
// this will be our people-view page, which of course starts with our include, pointing to our config, BUT NOT our header include!

include('config.php');

// is our get set - is is isset?

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
}else {
    header('Location:project.php');

}

//we will now select from the table the people id = id

$sql = 'SELECT * FROM project WHERE project_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $nickname = stripcslashes($row['nickname']);
        $fullname = stripcslashes($row['name']);
        $movie = stripcslashes($row['firstMovie']);
        $birthdate = stripcslashes($row['birthdate']);
        $create = stripcslashes($row['create']);
        $blurb = stripcslashes($row['blurb']);
        $details = stripcslashes($row['details']);
        $feedback = '';


    }

}else{

    $feedback = 'There is a problem!!!';
}

include('./includes/header.php');
?>
<div id="wrapper">
<main>
    <h1>Welcome to our Project View Page!</h1>
    <h2>Introducing you to <?php echo $nickname;?>'s Page</h2>
    <ul>
        <?php
        echo '
        <li><b>Nick Name: </b>'.$nickname.'</li>
        <li><b>Full Name: </b>'.$fullname.'</li>
        <li><b>Created by: </b>'.$create.'</li>
        <li><b>Birthdate: </b>'.$birthdate.'</li>
        <li><b>First Movie: </b>'.$movie.'</li>
        <li>
        <p>'.$details.'</p>
        </li>        
        ';
        ?>
    </ul>
    <p><a href="project.php">Return to the project page!</a></p>



        

</main>

<aside>
    <h3>This is my Aside</h3>
    <figure>
    <img src="./images/project/<?php echo $id;?>.webp" alt="<?php echo $nickname;?>">
    <figcaption>
        <?php
        echo '
        '.$nickname.' '.$movie.' '.$birthdate.'
        ';?>
    </figcaption>
</figure>
<p><i><?php
echo $blurb;
?>
</i></p>
</aside> 

<?php
//we are going to releaase the server
@mysqli_free_result($result);

// close the conection

@mysqli_close($iConn);

?>

</div>

<?php
include('./includes/footer.php');