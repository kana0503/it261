<?php
include('server.php');
//eventurally, we will place our header include here!!!!
// inlucde('./includes/header.php');
?>

<h1>Register Today!</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post">
<filedset>
<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])  ;?>">

<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])  ;?>">

<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])  ;?>">

<label>Username</label>
<input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username'])  ;?>">

<label>Password</label>
<input type="password" name="password_1" value="<?php if(isset($_POST['passowrd_1'])) echo htmlspecialchars($_POST['password_1'])  ;?>">

<label>Confrim your Password</label>
<input type="password" name="password_2" value="<?php if(isset($_POST['password_2'])) echo htmlspecialchars($_POST['password_2'])  ;?>">

<!-- USE the reg_usr name below!!!! -->
<button type="submit" name="reg_usr" class="btn">Register</button>

<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>'">Reset</button>

</filedset>
</form>
