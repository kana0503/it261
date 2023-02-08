<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Travel Calculator</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>

<h1>My Travel Calculator</h1>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<fieldset>
    <label>NAME</label>
    <input type="text" name="name" value ="<?php if(isset($_POST['name'])){ echo htmlspecialchars($_POST['name']);
        }?>">

    <label>Total miles driving</label>
    <input type="number" name="miles" value ="<?php if(isset($_POST['miles'])){ echo htmlspecialchars($_POST['miles']);
        }?>">

    <label>How fast do you typically drive?</label>
    <input type="number" name="speed" value ="<?php if(isset($_POST['speed'])){ echo htmlspecialchars($_POST['speed']);
        }?>">
    
    <label>How many hours per day do you driving?</label>
    <input type="number" name="perday" value ="<?php if(isset($_POST['perday'])){ echo htmlspecialchars($_POST['perday']);
        }?>">
<!--- time for our radio button that has an additional attribute of value --->
    <label>Price of gas</label>
    <ul>
    <li><input type="radio" name="gas" value="3.00" <?php if(isset($_POST['gas']) && $_POST['gas'] == 3.00) echo 'checked="checked"';?>> $3.00</li>
    <li><input type="radio" name="gas" value="3.50" <?php if(isset($_POST['currency']) && $_POST['gas'] == 3.50) echo 'checked="checked"';?>> $3.50</li>
    <li><input type="radio" name="gas" value="4.00" <?php if(isset($_POST['currency']) && $_POST['gas'] == 4.00) echo 'checked="checked"';?>> $4.00</li>
    </ul>
    <label>Fuel efficiency</label>
    <select name="fuel">
        <option value = ""NULL <?php if(isset($_POST['fuel']) && $_POST['fuel']==NULL) echo 'selected="unselected"' ;?>>Select one!</option>
        <option value ="10" <?php if(isset($_POST['fuel']) && $_POST['fuel']== 10) echo 'selected="selected"' ;?>>Terrible @ 10mpg</option>
        <option value ="20" <?php if(isset($_POST['fuel']) && $_POST['fuel']== 20) echo 'selected="selected"'  ;?>>Good @ 20mpg</option>
        <option value ="30" <?php if(isset($_POST['fuel']) && $_POST['fuel']== 30) echo 'selected="selected"'  ;?>>Nice @ 30mpg</option>
        <option value ="40" <?php if(isset($_POST['fuel']) && $_POST['fuel']== 40) echo 'selected="selected"'  ;?>>Great @ 40mpg</option>
        <option value ="50" <?php if(isset($_POST['fuel']) && $_POST['fuel']== 50) echo 'selected="selected"' ;?>>Awesome @ 50mpg</option>
    </select>


    <input type="submit" value="Calculate">
    

<p class="reset"><a href="">Reset</a></p>
</fieldset>
</form>
    

<?php
// we will start with the server request method
// then, we will ask ourselves if any fields are empty
// if the fields are not empty, we will elseif they are set

if($_SERVER['REQUEST_METHOD'] =='POST') {
    if(empty($_POST['name'])) {
        echo '<p class="error">Please fll out your Name</p>';
    }if(empty($_POST['miles'])) {
            echo '<p class="error">Please fill out your total driving miles</p>';
    }if(empty($_POST['speed'])) {
            echo '<p class="error">Please fill out how fast will you be driving</p>';
    }if(empty($_POST['perday'])) {
            echo '<p class="error">How many hours per day would you like to drive?</p>';
    }if(empty($_POST['gas'])) {
            echo '<p class="error">Your cost of gas, please!</p>';
    }if($_POST['fuel'] == NULL) {
            echo '<p class="error">Please select your car\'s efficiency</p>';
    }

        

    if (isset($_POST['name'], $_POST['miles'], $_POST['speed'], $_POST['perday'], $_POST['gas'], $_POST['fuel'])){
        $name = $_POST['name'];
        $miles = floatval($_POST['miles']);
        $speed = floatval($_POST['speed']);
        $perday = floatval($_POST['perday']);
        $gas = floatval($_POST['gas']);
        $fuel = floatval($_POST['fuel']);
        $time = $miles / $speed;
        $days = $time / $perday;
        $galons = $miles / $fuel;
        $cost = $gas * $galons;

        if(!empty($name && $miles && $speed && $perday && $gas && $fuel)){

        echo '
        <div class="box">
        <h2>Hello  '.$name.'</h2>
        <p>You will be travelling a total of <b>'.number_format($time, 2).'</b>, taking <b>'.number_format($days, 2).' days</b><br>
        And, you will be using <b>'.number_format($galons, 2).' galons</b> of gas, costing you <b>$'.number_format($cost, 2).' dollars</b>!</p>
        </div>        
        ';
        }
    }
}



?>
</body>
</html>