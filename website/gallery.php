<?php 

$people['Kim_Seokjin'] = 'Jin00_Vocals from Province, South Korea.';
$people['Kim_Namjoon'] = 'RM000_Main Rapper from Seoul, South Korea.';
$people['Jung_Hoseok'] = 'JHope_Rapper from Gwangju, South Korea.';
$people['Min_Yoongi'] = 'Suga0_Lead Rapper from Daegu, South Korea.';
$people['Kim_Taehyung'] = 'V0000_Vocals from Daegu, South Korea.';
$people['Park_Jimin'] = 'Jimin_Lead Vocals from Busan, South Korea.';
$people['Jeon_Joengguk'] = 'Jungk_Main Vocals from Busan, South Korea.';

// variable key              value
// $name                     $image



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Garelly</title>

    <style>
        table {
            border: 1px solid red;
            border-collapse: collapse;
        }

        td {
            border: 1px solid white;
        }
        
</style>
</head>
<body>

<table>
<?php foreach($people as $name => $image) :?>
<tr>
<td><img src="images/pics/<?php echo substr($image, 0, 5);?>.jfif" alt="<?php echo str_replace('_', ' ', $name)?>" style="width:200px"></td>
<td><?php echo str_replace('_', ' ', $name)?></td>
<td><?php echo str_replace('.', '', substr($image, 6))?></td>
<td><img src="images/pics2/<?php echo substr($image, 0, 5);?>.jfif" alt="<?php echo str_replace('_', ' ', $name)?>"></td>
</tr>
<?php endforeach; ?>
</table>
    
</body>
</html>