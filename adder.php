
<html>
<head>
<title>My Adder Assignment</title>
<style>

form {
    max-width: 500px;
    margin: 0 auto 10px auto;
}

h1{
    text-align: center;
    margin: 20px 0;
    color: green; 
}

h2{
    text-align: center;
    margin: 20px 0; 
}

p{
    text-align: center;
    margin-top: 10px;
}

fieldset {
    border: 1px solid red;
    padding: 10px;
}

.error {
    color: red;
    font-size: .9em;
    margin-top: 15px;
}

.answer {
    color: red;
    font-size: 1.2em;
    margin-top: 15px;
}

.box{
    width: 400px;
    border: 1px solid green;
    margin: 20px auto;
    padding: 10px;
}

</style>
</head>
<body>
<h1>Adder.php</h1> 
<form action="" method="post">
    <fieldset>
<label>Enter the first number:</label>
<br>
<input type="number" name="num1">
<br>
<label>Enter the second number:</label>
<br>
<input type="number" name="num2">
<br>
<input type="submit" value="Add Em!!"> 
</fieldset>
</form>

<?php     //adder-wrong.php

if (isset($_POST['num1'],$_POST['num2'])){

if(empty($_POST['num1']&&$_POST['num2'])){
    echo '<p class="error">Please fill out your numbers</p>';
}else{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $myTotal = $num1 + $num2;
    echo '<h2>You added '.$num1.' and '.$num2.' </h2>';
    echo  '<p class="answer"> and the answer is <br>
     '.$myTotal.'!</p>';
    echo '<p><a href="">Reset page</a></p>';
}
}
;
?>

 


</body>
</html>