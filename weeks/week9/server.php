<?php
//our server.php file - this is where our session will start
// our session is a way to store the information

session_start();
include('config.php');

// this is where eventually you will have the header include
// inlucde('./includes/header.php');

// this server.php page will be communicationg to our database!!!!

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// register the user, using if isset reg_usr

if(isset($_POST['reg_usr'])){
$first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
$email = mysqli_real_escape_string($iConn, $_POST['email']);
$username = mysqli_real_escape_string($iConn, $_POST['username']);
$password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

// we wnat to make sure that all the input fields habe beem field out
// if enpty, you are going to use a new function which is called array_push()

if(empty($first_name)){
    array_push($errors, 'First name is required');
}
if(empty($last_name)){
    array_push($errors, 'Last name is required');
}
if(empty($email)){
    array_push($errors, 'Email is required');
}
if(empty($username)){
    array_push($errors, 'Username is required');
}
if(empty($password_1)){
    array_push($errors, 'Password is required');
}

// our logic is this - is password_1 !== to password_2
if($password_1 !== $password_2){
    array_push($errors, 'Password does not match!');
}

// we are checking the username and password... AND selecting if from the table

$user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";

$result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

$rows = mysqli_fetch_assoc($result);

// we are going to have an if statement, and we will nest 2 additional if statements inside our main if statement
// bottom line is, we cannot have duplicate usernames or dupulicate emails
if($rows){
    if($rows['username']==$username){
        array_push($errors, 'Username already exists!');
    }
    if($rows['email']==$email){
        array_push($errors, 'Eamil already exists!');
    }
} // close big if statement

// do we have any errors? idealistically, noerrors!

if(count($errors)==0){
    $password = md5($password_1);

    // Now is time to insert the information into our table!!!!


    $query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES('$first_name','$last_name', '$email', '$username', '$password')";

    mysqli_query($iConn, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = $success;

    // if we are successful, the we will be directed to our login page!!!
    header('Location:login.php');

}// close if count errors

} // end if isset reg_usr'

// Now, we must communicate with the login page - we will ask the same question!!!!
if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);
    
    if(empty($username)){
        array_push($errors, 'Username is required!!');
    }
    if(empty($password)){
        array_push($errors, 'Password is required!!');
    }


    if(count($errors) == 0){
        $password = md5($password);

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
        //below you have a new variable that is results NOT result
        $results = mysqli_query($iConn, $query);

        if(mysqli_num_rows($results) == 1){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = $success;
            // if the above is successful, the user will be directed to the home page, which will be index.php

            header('Location:index.php');
        }else{
            array_push($errors, 'Wrong username/password combination');
            
        }// close else
    }// close count
} // close isset login user
