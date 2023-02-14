
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
    content="ie=edge">
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class ="<?php echo $body; ?>">
<header>
<div class="inner-headder">
    <a href="index.php">
    <img id="logo" src="images/logo.png" alt="logo">
    </a>
<!-- <nav>
<ul>
    <li><a href="">Home</a></li>
    <li><a href="">About</a></li>
    <li><a href="">Daily</a></li>
    <li><a href="">Project</a></li>
    <li><a href="">Contact</a></li>
    <li><a href="">Gallery</a></li>
</ul>
</nav> -->

<nav>
<ul>
<?php
echo make_links($nav);
?>
</ul>
</nav>
</div>
</header>