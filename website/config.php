<?php 

ob_start();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
switch(THIS_PAGE) {
    case 'index.php' :
    $title = 'Home page of our Website Project';
    $body = 'home';
    break;

    case 'about.php' :
    $title = 'About page of our Website Project';
    $body = 'about inner';
    break;

    case 'daily.php' :
    $title = 'Daliy page of our Website Project';
    $body = 'daily inner';
    break;

    case 'project.php' :
    $title = 'Project page of our Website Project';
    $body = 'project inner';
    break;

    case 'contact.php' :
    $title = 'Contact page of our Website Project';
    $body = 'contact inner';
    break;

    case 'gallery.php' :
    $title = 'Gallery page of our Website Project';
    $body = 'gallery inner';
    break;
}
// our navigation array
$nav = array (
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

function make_links($nav){
    $my_return = '';
    foreach($nav as $key => $value){
        if(THIS_PAGE == $key) {
            $my_return .='<li><a style="color:red;" href=" '.$key.' "> '.$value.'</a></li>';
        }else{
            $my_return .='<li><a style="color:blue;" href=" '.$key.' "> '.$value.'</a></li>';
        }
    }
    return $my_return;
}


// my form's PHP


$first_name = '';
$last_name = '';
$email = '';
$gender = '';
$phone = '';
$seasons = '';
$privacy = '';
$regions = '';
$comments = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$gender_err = '';
$phone_err = '';
$seasons_err = '';
$privacy_err = '';
$regions_err = '';
$comments_err = '';



if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['seasons'])){
        $seasons_err = 'What, no seasons?';
    }else{
        $seasons = $_POST['seasons'];
    }

    if(empty($_POST['first_name'])){
        $first_name_err = 'Please fill out your first name';
    }else{
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])){
        $last_name_err = 'Please fill out your last name';
    }else{
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])){
        $email_err = 'Please fill out your email so that we can span you!';
    }else{
        $email = $_POST['email'];
    }

    if(empty($_POST['gender'])){
        $gender_err = 'Please choose your gender';
    }else{
        $gender = $_POST['gender'];
    }

    // if(empty($_POST['phone'])){
    //     $phone_err = 'Please fill out your phone number';
    // }else{
    //     $phone = $_POST['phone'];
    // }

    if(empty($_POST['phone'])) { // if empty, type in your number
        $phone_err = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phone_err = 'Invalid format!';
        } else{
        $phone = $_POST['phone'];
        } // end else
        } // end main if

    if(empty($_POST['comments'])){
        $comments_err = 'Please share your thoughts with us';
    }else{
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])){
        $privacy_err = 'Please agree to our privacy policy';
    }else{
        $privacy = $_POST['privacy'];
    }

    if($_POST['regions'] == NULL) {
        $regions_err = 'Please select your region!';
    }else{
        $regions = $_POST['regions'];
    }

    //seasons function

    function my_seasons($seasons){
        $my_return = '';
        if(!empty($_POST['seasons'])){
            $my_return = implode(', ', $_POST['seasons']);
        }else{
            $seasons_err = 'Please fill our your seasons!';
        }
        return $my_return;
    }

    
    if(isset($_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['gender'],
    $_POST['phone'],
    $_POST['seasons'],
    $_POST['comments'],
    $_POST['privacy']) && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])){
        $to = 'szemeo@mystudentswa.com';
        //$to = 'Kanako.Wakata@seattlecolleges.edu';
        $subject = 'Test Email on '.date('m/d/y, h i A');
        $body = '
        First Name: '.$first_name.' '.PHP_EOL.'
        Last Name: '.$last_name.' '.PHP_EOL.'
        Email: '.$email.' '.PHP_EOL.'
        Gender: '.$gender.' '.PHP_EOL.'
        Phone: '.$phone.' '.PHP_EOL.'
        seasons: '.my_seasons($seasons).' '.PHP_EOL.'
        Regions: '.$regions.' '.PHP_EOL.'
        Comments: '.$comments.' '.PHP_EOL.'
        ';

        $headers = array(
            'From' => 'noreply@mystudentswa.com'
        );

        if(!empty($first_name && $last_name && $email && $gender && $phone && $regions && $seasons && $comments)){
            mail($to, $subject, $body, $headers);
            header("Location:thx.php");
        }

    
    }
}


//our config file

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('../weeks/week8/credentials.php');
function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}
